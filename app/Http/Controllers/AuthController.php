<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AuthController extends Controller
{
    static protected $authServer;

    public function __construct() {
        self::$authServer = 'http://'
            .'localhost'.':'.'8000';
    }

    /**
     * Register
     */
    public function register (Request $request)
    {
        $response = Http::post(
            self::$authServer.'/api/register',
            [
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'password' => $request->input('password'),
                'password_confirmation' => $request->input('password_confirmation'),
            ]);

        if($response->ok()) {
            return redirect('/login');
        } else {
            return redirect()->back()->withErrors($response['errors'])->withInput();
        }
    }

    /**
     * Login
     */
    public function login (Request $request)
    {
        $response = Http::post(
            self::$authServer.'/api/login',
            [
                'email' => $request->input('email'),
                'password' => $request->input('password'),
                'password_confirmation' => $request->input('password'),
            ]);

        if($response->ok()) {
            $request->session()->put('token', $response['token']);
            return redirect()->route('folders.manage');
        } else {
            if (isset($response['errors'])) {
                return redirect()->back()->withErrors($response['errors'])->withInput();
            } else {
                return redirect()->back()->with('message', $response['message'])->withInput();
            }
        }
    }

    /**
     * Logout
    */
    public function logout (Request $request)
    {
        $endpoint = '/api/logout';
        $token = $request->session()->pull('token');
        $response = self::authPost($request, $endpoint);
        return redirect()->route('welcome');;
    }

    /**
     * Authenticated request
     */
    public function authPost (Request $request, string $endpoint, array $params = [])
    {
        return Http::withHeaders([
            'Authorization' => 'Bearer ' . $request->session()->get('token'),
        ])->post(
            self::$authServer.$endpoint,
            $params,
        );
    }
}

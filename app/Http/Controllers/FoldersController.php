<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class FoldersController extends Controller
{
    static protected $authServer;

    public function __construct() {
        self::$authServer = 'http://'
            .'localhost'.':'.'8000';
    }

    public function authPost(string $token, string $endpoint, array $params = [])
    {
        return Http::withHeaders([
            'Authorization' => 'Bearer ' . $token,
        ])->post(
            self::$authServer.$endpoint,
            $params,
        );
    }

    public function manage()
    {
        return view('folders.manage');
    }

    public function new()
    {
        return view('folders.new');
    }

    public function create(Request $request)
    {
        $endpoint = '/api/folders/create';

        $data = [
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'language' => $request->input('language'),
        ];

        $response = self::authPost($request->session()->get('token'), $endpoint, $data);

        if($response->ok()) {
            return redirect()->route('folders.manage');
        } else {
            return redirect()->back()->withErrors($response['errors'])->withInput();
        }
    }

}

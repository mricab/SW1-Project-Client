<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WorkspaceController extends Controller
{
    /**
     * Home
     */
    public function home()
    {
        return view('workspace.home');
    }

    /**
     * Search
     */
    public function search()
    {
        return view('workspace.search');
    }

    /**
     * Categories
     */
    public function categories()
    {
        return view('workspace.categories');
    }

    /**
     * Upload
     */
    public function upload()
    {
        return view('workspace.upload');
    }
}

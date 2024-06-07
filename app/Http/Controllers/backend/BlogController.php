<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Blog'
        ];

        return view('backend.v_blog', $data);
    }
}

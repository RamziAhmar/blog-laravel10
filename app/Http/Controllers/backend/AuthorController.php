<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Author'
        ];

        return view('backend.v_author', $data);
    }
}

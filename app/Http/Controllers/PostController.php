<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PostServices;

class PostController extends Controller
{
    public function create(Request $request)
    {
        PostServices::create($request);

        return redirect()->route('posts.index')
            ->withMessage('Post create successfully.');
    }
}

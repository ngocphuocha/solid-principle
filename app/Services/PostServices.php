<?php

use Illuminate\Http\Request;

class PostServices
{
    public static function create(Request $request)
    {
        return Post::create($request->only('title', 'body'));

        // image update
        // Sending email
        //....
    }
}

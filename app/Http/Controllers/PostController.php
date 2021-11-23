<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;
use Mockery\Exception;

class PostController extends Controller
{
    public function store(Request $request)
    {
        try{
            Post::create($request->except('userId'));
            return "true";
        }catch (\Error $exception){
            return "false";
        }
 Log::info($request);
    }

    public function index()
    {
        return Post::all();
    }

    public function update(Request $request)
    {
        $post= Post::find($request->id);
        Log::info($request);
        Log::info($request->id);
        Log::info($post);
        $post->update([
                'title' => $request->title,
                'body' =>$request->body,
            ]
        );
}

    public function destroy($id){
        Post::destroy($id);



    }
}

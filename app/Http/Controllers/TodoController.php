<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
class TodoController extends Controller
{
    public function store(Request $request)
    {
          try{
            Todo::create($request->except('userId'));
              return "true";
         }catch (\Error $exception){
             return "false";
          }
            Log::info($request);
       }

    public function done(Request $request)
    {
        $todo = Todo::find($request->id);
        $todo->update([
                'completed' => $request->completed,

            ]
        );
    }

    public function update(Request $request)
    {
        $todo = Todo::find($request->id);
        $todo->update([
                'title' => $request->title,

            ]
        );
    }



    public function index()
    {
        return Todo::all();
    }

    public function destroy($id){
        Todo::destroy($id);

    }
    public function destroys(){
        Todo::truncate();

    }
}

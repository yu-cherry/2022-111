<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TodoController extends Controller
{
    public function oen()
    {

        $data=DB::table('suisei')->get();
        return  view('parges/oen',compact('data',$data));
    }

    public function index()
    {
        $data=DB::table('todos')->get();
        /*dd($data,'123');*/
        return  view('parges/index',compact('data',$data));
    }
    public function get_create_page()
    {
        return  view('parges/create');
    }
    public function suisei_create_data(Request $request)
    {
        $message =$request->message;
        $name =$request->name;
        DB::table("suisei")->insert([
           "message"=>$message,
           "name"=>$name,
           ]);
        return view('parges/create');

    }
    public function delete_data(Request $request){

         $id =$request->get('id');
         DB::table('todos')
             ->where('id',$id)
             ->delete();
         return redirect()->route('index');
    }
}

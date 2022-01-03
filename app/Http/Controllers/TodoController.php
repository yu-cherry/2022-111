<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TodoController extends Controller
{
    //這邊是看所有結果
    public function oen()
    {

        $data=DB::table('suisei')->get();
        return  view('parges/oen',compact('data',$data));
    }
    //這是首頁
    public function index()
    {
        return  view('parges/index');
    }
    //這邊是進入新增的葉面
    public function get_create_page()
    {
        return  view('parges/create');
    }
    //這邊是上傳到資料庫
    public function suisei_create_data(Request $request)
    {
        $message =$request->message;
        $name =$request->name;
        $back =$request->back;

        DB::table("suisei")->insert([
           "message"=>$message,
           "name"=>$name,
           "back"=>$back,

        ]);
        return view('parges/create');

    }
    //這邊是刪除
    public function delete_data(Request $request)
    {
        $id = $request->get('id');
        DB::table('suisei')
            ->where('id', $id)
            ->delete();
        return redirect()->route('oen_change');
    }
    //這邊是取得要編輯的資料
    public function get_edit_page(Request $request)
    {
        $id = $request->get('id');
        $data = DB::table('suisei')
            ->where('id', $id)
            ->first();
        return view('parges.updata',compact('data',$data));
    }
    //這邊是進入修改葉面
    public function oen_change(Request $request)
    {


        $data=DB::table('suisei')->get();
        return  view('parges/oenchange',compact('data',$data));
    }
    public function up_edit_data(Request $request)
    {
        $id = $request->get('id');
        $message = $request->get('message');
        $name = $request->get('name');
        $back = $request->get('back');


        $test = DB::table('suisei')
            ->where('id', $id)
            ->update([
                'message' => $message,
                'name' => $name,
                'back' =>$back
            ]);
        return redirect()->route('oen_change');
    }
}

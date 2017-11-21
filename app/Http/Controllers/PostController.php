<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
class PostController extends Controller
{
    //列表
    public function index(){

        $posts = Post::orderBy("created_at","desc")->paginate(8);
        //compact想模板传递参数，compact可以传递多个参数
        return view("post/index",compact('posts'));
    }

    //详情页面
    public function show(){
        return view("post/show",['title' => 'this is title','isshow' => false]);
    }

    //创建页面
    public function create(){
        return view("post/create");
    }

    //创建逻辑
    public function store(){
        return view("post/store");
    }

    //编辑页面
    public function edit(){
        return view("post/edit");
    }

    //编辑逻辑
    public function update(){
        return view("post/update");
    }

    //删除逻辑
    public function delete(){
        return view("post/delete");
    }
}

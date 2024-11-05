<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {
        return view('admin.index');
    }

    public function post(){
        return view('admin.post.post');
    }
    public function category(){
        return view('admin.category.categories');
    }

    public function addca() {
        return view('admin.category.addcategory');
    }
    public function addpost() {
        return view('admin.post.addpost');
    }
    public function editpost() {
        return view('admin.post.addpost');
    }
}

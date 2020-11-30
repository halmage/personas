<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

/* importando modelos */
use App\Models\Tag;

class TagController extends Controller
{
    public function index(){
    	return view('admin.tag.index',['tags' => Tag::all()]);
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

/* Importando request */
use App\Http\Requests\Admin\Tag\TagRequest;
use App\Http\Requests\Admin\Tag\TagUpdateRequest;

/* importando modelos */
use App\Models\Tag;

class TagController extends Controller
{
    public function index(){
    	return view('admin.tag.index',['tags' => Tag::all()]);
    }

    public function store(TagRequest $request){
    	Tag::create($request->all());
    	return redirect()->route('tag.index');
    }

    public function destroy(Tag $tag){
    	$tag->delete();
    	return redirect()->route('tag.index');
    }

    public function update(Tag $tag, TagUpdateRequest $request){
        $tag->update($request->all());
        return redirect()->route('tag.index');   
    }
}

<?php

namespace App\Http\Controllers;
use App\post;
use App\category;
use App\idol;
use Illuminate\Http\Request;

class uploadcontroller extends Controller
{
    public function postupload(Request $Request){
    	$a = new post;
    	$a->title = $Request->title;
    	$a->content = $Request->content;
    	$file = $Request->img;
    	$file->move('image',$file->getClientOriginalName());
    	$a->img = $file->getClientOriginalName();
    	$a->save();
    	return back();
    }
    public function delete(Request $request){
    	$id=$request->get('id');
    	$post= post::where('postid',$id)->delete();
    	return redirect()->back();
    }

    public function getupdate(Request $request){
    	$id=$request->get('id');
   		return view('update',['postid'=>$id]);
    }

    public function update(Request $request){
    	$file = $request->img;
    	$id = $request->get('id');
    	if($file){
    		$img =$file->getClientOriginalName();
    		$file->move('image',$img);
    	}else{
    		
    		$img=$request->img_hidden;
    	}
    	$post = post::where('postid',$id)->update(
    		['title' => $request->title,
    		'content' => $request->content,
    		'img' => $img
    		]
    	);

    	return redirect('/admin');
    }
    public function newcategory(Request $request){
    	$a = new category;
    	$a->hang_muc = $request->ctgname;
    	$a->save();
    	return back();
    }
    public function uploadidol(Request $request){
    	$a = new idol;
    	$a->category_id = $request->ctgid;
    	$a->name = $request->idolname;
    	$file = $request->img;
    	$file->move('image',time().$file->getClientOriginalName());
    	$a->img = time().$file->getClientOriginalName();
    	$a->save();
    	return back();
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\vote;
use Auth;
use App\idol;
class votecontroller extends Controller
{
    public function vote(Request $request){
    	$idolID =$request->get('idolID');
    	$idol=idol::find($idolID);
    	if(vote::where('user_id',Auth::user()->id)->where('category_id',$idol->category_id)->get()->isEmpty()){
    		$vote = new vote;
	    	$vote->user_id = Auth::user()->id;
	    	$vote->idol_id = $idolID;
	    	$vote->category_id=$idol->category_id;
	    	$vote->save();
	    	return redirect('/myvote');

    	}else{
    		return redirect('/myvote')->with('tb', 'Bạn đã bình chọn cho hạng mục này!');

    	}



    	
    	
    	
    	
    }
}

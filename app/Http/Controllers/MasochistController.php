<?php

namespace App\Http\Controllers;

use App\Masochist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MasochistController extends Controller
{
		public function index()
		{
			$masochistList = Masochist::all();
			return view('masochists')->with('masochistList',$masochistList);
		}
		public function add()
		{
			if( Auth::check() ){
				$masochist = Masochist::where('userid',Auth::user()->id)->first();
				return view('masochistsadd')->with('masochist',$masochist);
			}
			return view('masochistsadd');
		}
		public function store(Request $request)
		{
			$masochistCheck = Masochist::where('userid',Auth::user()->id)->first();
			if($masochistCheck == null){
				$masochist = new Masochist;
			}else{
				$masochist = Masochist::find($masochistCheck->id);
			}
				$masochist->username = Auth::user()->name;
			    $masochist->userid = Auth::user()->id;
				$masochist->old = $request->input('old');
				$masochist->wantold = $request->wantold;
				$masochist->area = $request->area;
				$masochist->description = $request->description;

				$masochist->save();

			return redirect('masochists');
		}
}

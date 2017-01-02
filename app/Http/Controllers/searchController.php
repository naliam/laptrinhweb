<?php

namespace App\Http\Controllers;

use App\Flight;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\support\Facades\DB;
use Illuminate\support\Facades\View;
 

class searchController extends Controller
{
    
    public function Search(Request $request)
    {
		$i = $request->input('tukhoa');
		$product = DB:: table('banh')->where('tenbanh','like','%'.$i.'%')->get();
		return view('search.show',['items'=>$product]);
    }

}

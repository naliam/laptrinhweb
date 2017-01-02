<?php

namespace App\Http\Controllers;

use App\Flight;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\support\Facades\DB;
use Illuminate\support\Facades\View;
use App\ThemBanh; 

class productController extends Controller
{
    protected $idloai;
	protected $idbanh;
    public function show($idloai)
    {
        $results = DB::select('select * from banh where maloai= ?',[$idloai]);
		return view('products.show',['items'=>$results]);
    }	
	public function chitiet($idbanh)
    {
        $results = DB::SELECT('select * FROM banh  WHERE idbanh = ?',[$idbanh]);
        return view('products.detail', ['items' => $results]);

    }
	
	
	
}

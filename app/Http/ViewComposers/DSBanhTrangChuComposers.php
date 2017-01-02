<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use Illuminate\Support\Facades\DB;

class DSBanhTrangChuComposers
{

    /**
     * Bind data to the view.
     *
     * @param    View  $view
     * @return  void
     */
    public function compose(View $view)
    {
        $danhsach = DB::SELECT ('Select* FROM banh');
        $view->with('items',$danhsach);
    }
	
}
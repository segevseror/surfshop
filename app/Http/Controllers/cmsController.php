<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Order;

class cmsController extends MainController {
    
    function __construct() {
        parent::__construct();
        $this->middleware('adminverify');
    }


    public function dashboard(){
        
        Order::get_order(self::$data);
        
       
        
        return view('cms.dashboar' , self::$data);
        
    }
    
    
    
}

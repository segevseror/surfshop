<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use App\Content;
use App\Cvnumber;

class PageController extends MainController {

 
       
    public function home() {
  
        self::$data['title'] .= 'Home Page';
       
            
            Cvnumber::update_number();
            
       
              
       
      
        return view('content.home', self::$data);
        
    }

    public function dynamiMenu($url) {
        
        
        self::$data['title'] .= $url;
     
        Content::getcontent($url, self::$data);
     
        
        return view('content.dynamicontent', self::$data);
        
    }
    
    

}

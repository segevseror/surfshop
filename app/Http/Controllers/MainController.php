<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;
use App\Content;
use App\Categorie;
use App\Products;
use Cart;
use App\Cvnumber;
class MainController extends Controller{
 
    static $data = [];
    
    function __construct() {
        
     
        
        self::$data['menu'] = Menu::all()->toArray();
        self::$data['content'] = Content::all()->toArray();
         self::$data['categories'] = Categorie::all()->toArray();
         self::$data['product'] = Products::all()->toArray();
        self::$data['title'] = 'SurfShop| ';
        
        
       
       
    }

      
  }
    
   

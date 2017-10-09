<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categorie;
use App\Products;
use Cart;
use Session;
use App\Order;
use App\Search;

class ShopController extends MainController{
   
    
    public function allproducts(){
        
       Products::getangular($_GET['segev']); 
    
    }
    
    public function allcartajax(){
        
        Products::cartajax();
    }



    public function producats($url_category){
        
       
        Products::getProducts($url_category, self::$data);
             
                 self::$data['title'] = 'Products';
                 
               
                 
        return view('content.product' , self::$data);    
     
        
    }
    
    
    
      public function categorie(){
        
          
        self::$data['categories'] = Categorie::all()->toArray();
        self::$data['title'] = 'shop categories';
        
       
        
        return view('content.categories' , self::$data);
        
          
    }
    
    public function item($url_category , $url_item){
        
        Products::getItems($url_item, self::$data);
        
        
        return view('content.item' , self::$data);
        
    }
    
    public function addToCart(Request $requst){
       
        if(  Products::addToCart($requst['id']) ){
            
            
            
            
        }
      
        
         
        
    }
    
    public function checkOut(){
        
       $cartAllItem = Cart::getContent();
       $cartAllItem = $cartAllItem->toArray();
       sort($cartAllItem);
       self::$data['cartAllItem'] = $cartAllItem;
       self::$data['title'] = 'Check Out';
       
      
       return view('content.checkout' , self::$data);
        
       
    }
    public function updateItem(Request $requst){
     
        Products::updateQuantity($requst['itemId'] , $requst['move']);
        
    }
    
    public function removeItem(Request $requst){
        
         Products::removeItem($requst['idp']);
         
             echo 123;
        
    }
    
    
    public function clearCart(){
        
        Cart::clear();
        
           return redirect('shop/checkout');
    }
    
    
    public  function order(){
        
        if( Cart::isEmpty() ){
            return redirect('shop/checkout' );
        }else{
            
            if(! Session::has('user_id')){
                
                return redirect('/user/sigin?rd=shop/checkout');
                
            }else{
                Order::save_new();
                
               return redirect('shop');
            }
        }
    }
    
    
    public function search(){
        $src = $_REQUEST['sch'];
     
        
       $ser = Products::Search($src);
       
    }
    
    
    public function searchproduct(){
        
      if(trim($_REQUEST['textsearch'])){
          
       
          $textsearch = trim($_REQUEST['textsearch']);
          $textsearch = $textsearch? $textsearch : '';
              
         $search = Products::SearchProduct($textsearch , self::$data);
      }
        
        
          
       return view('content.pageproduct' , self::$data);

        
        
    }
    
    
}

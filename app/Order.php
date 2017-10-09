<?php

namespace App;
use DB;
use App;
use Session;
use Cart;
use App\User;

use Illuminate\Database\Eloquent\Model;

class Order extends Model {
    
    static public function save_new(){
        $cartController = Cart::getContent();
        
        $order = new self();
        $order->user_id = Session::get('user_id');
        $order->data = serialize($cartController->toArray());
        $order->total = Cart::getTotal();
        $order->save();
        Cart::clear();
        Session::flash('sm' , 'Your order is save!');
    }
    
    static public function get_order(&$data){
        
       
     $sql = "SELECT u.name, u.email , o.data ,o.total , o.created_at FROM orders o JOIN users u ON o.user_id = u.id ORDER BY o.created_at DESC";


        $user = DB::select($sql);
       
          
        foreach($user as $order){
          
            $order->data = unserialize($order->data);
            
            
        }
       
        $data['order'] = $user;
    }
    
}

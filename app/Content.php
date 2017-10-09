<?php

namespace App;

use App\Menu;
use App\Content;
use Illuminate\Database\Eloquent\Model;
use Session;

class Content extends Model {
    
     static public function getcontent($url_ , &$data){
         
        $data['content'] = [];
       if( $menu = Menu::where('url' , '=' , $url_)->first()){
          
           $menu = $menu->toArray();
           $menu['title'] = $menu['title']; 
         
           
           if($content = Menu::find( $menu['id'] )->contents){
               
             
           $data['content'] = $content->toArray();
         
           
           }
       }
    }
    static public function save_content($request) {

        $content = new self();
        $content->menu_id = $request['linkid'] ;
        $content->title = $request['title'];
        $content->article = $request['article'];
        $content->save();
        Session::flash('sm', 'article is saved');
    }

    static public function update_item($request, $id) {

        $content = self::find($id);
        
        $content->title = $request['title'];
        $content->article = $request['article'];
        $content->save();
        Session::flash('sm', 'content is update');
    }

}

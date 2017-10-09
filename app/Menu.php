<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Content;
use Session;

class Menu extends Model {

    public function contents() {

        return $this->hasMany('App\Content')->orderBy('created_at', 'desc');
    }

    static public function save_menu($request) {

        $menu = new self();
        $menu->link = $request['link'];
        $menu->title = $request['title'];
        $menu->url = $request['url'];
        $menu->save();
        Session::flash('sm', 'Link is saved');
    }

    static public function update_item($request, $id) {

        $menu = self::find($id);
        $menu->link = $request['link'];
        $menu->title = $request['title'];
        $menu->url = $request['url'];
        $menu->save();
        Session::flash('sm', 'Link is update');
    }

}

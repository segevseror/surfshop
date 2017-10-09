<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Categorie;
use Session;

class Categorie extends Model {

    public function prodocts() {

        return $this->hasMany('App\Products');
    }

    static public function save_categories($request) {

        $image_default = 'imagesdefault.png';

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $file = $request->file('image');
            $image_default = date('Y.m.d.H.i.s') . '-' . $file->getClientOriginalName();
            $request->file('image')->move(public_path() . '/images/categorie', $image_default);
        }

        $category = new self();
        $category->title = $request['title'];
        $category->article = $request['article'];
        $category->image = $image_default;
        $category->url = $request['url'];
        $category->save();

        Session::flash('sm', 'category is saved');
    }

    static public function update_category($request, $id) {

          $image_default = '';

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $file = $request->file('image');
            $image_default = date('Y.m.d.H.i.s') . '-' . $file->getClientOriginalName();
            $request->file('image')->move(public_path() . '/images/categorie', $image_default);
        }

        $category = self::find($id);
        $category->title = $request['title'];
        $category->article = $request['article'];
        if($image_default){
            $category->image = $image_default;
        }
        $category->url = $request['url'];
        $category->save();

        Session::flash('sm', 'category is Change');
    }

}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cart;
use Session;

class Products extends Model {

    static public function getangular($url_categorie) {

        $data['products'] = [];
        
        
        if ($category = Categorie::where('url', '=', $url_categorie)->first()) {

            $category = $category->toArray();
           
            $data['title'] = $category['title'] . ' Products';
            $data['url_category'] = $url_categorie;

            if ($product = Categorie::find($category['id'])->prodocts) {
                $data['products'] = $product->toArray();

                echo $product->toJson();
            }
        }
    }
    
    static public function cartajax(){
        
        echo Cart::getContent();
        
    }


        static public function getProducts($url_categorie, &$data) {

        $data['products'] = [];
        if ($category = Categorie::where('url', '=', $url_categorie)->first()) {

            $category = $category->toArray();
            $data['title'] = $category['title'] . ' Products';
            $data['url_category'] = $url_categorie;

            if ($product = Categorie::find($category['id'])->prodocts) {
                $data['products'] = $product->toArray();
            }
        }
    }

    static public function getItems($url_item, &$data) {

        if ($product = Products::where('url', '=', $url_item)->first()) {

            $product = $product->toArray();
            $data['title'] = $product['title'] . ' Item';
            $data['items'] = $product;
        }
    }

    static public function addToCart($product_id) {

        if ($product_id && is_numeric($product_id)) {

            if ($product = Products::find($product_id)) {

                $product = $product->toArray();

                if (!Cart::get($product['id'])) {

                    Cart::add($product['id'], $product['title'], $product['price'], 1, [$product['image']]);

                    $howmany = Cart::getTotalQuantity();
                    // Session::flash('sm' , $product['title'] . ' is Add to cart'); ---> its in script.js
                    //////


                    /////



                    echo $howmany . '|' . $product['title'];
                }
            }
        }
    }

    static public function updateQuantity($itemId, $move) {

        if (is_numeric($itemId)) {
            if ($move == 'plus') {

                Cart::update($itemId, array(
                    'quantity' => 1,
                ));
                echo 'plus';
            } elseif ($move == 'minus') {

                Cart::update($itemId, array(
                    'quantity' => -1,
                ));
                echo 'minus';
            }
        }
    }

    static public function removeItem($itemId) {


        if (is_numeric($itemId)) {

            Cart::remove($itemId);
        }
    }

    static public function Search($sch) {

        $search = Products::where([
                    ['title', 'like', '%' . $sch . '%'],
                   
                ])->get()->toArray();

        echo json_encode($search);
    }
    
    static public function SearchProduct($textsearch , &$data){
        
        if($textsearch){
            
            $search = Products::Where([
                ['title' , 'like' , '%' . $textsearch . '%' ], 
            ])->get()->toArray();
        }
      
        $data['search'] = $search;
        
    }

    


    static public function save_Product($request) {

        $image_default = 'imagesdefault.png';

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $file = $request->file('image');
            $image_default = date('Y.m.d.H.i.s') . '-' . $file->getClientOriginalName();
            $request->file('image')->move(public_path() . '/images/products', $image_default);
        }

        $product = new self();
        $product->categorie_id = $request['linkid'];
        $product->title = $request['title'];
        $product->article = $request['article'];
        $product->price = $request['price'];
        $product->url = $request['url'];

        $product->image = $image_default;

        $product->save();

        Session::flash('sm', 'category is saved');
    }

    static public function update_product($request, $id) {

        $image_default = '';

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $file = $request->file('image');
            $image_default = date('Y.m.d.H.i.s') . '-' . $file->getClientOriginalName();
            $request->file('image')->move(public_path() . '/images/categorie', $image_default);
        }

        $category = self::find($id);
        $category->title = $request['title'];
        $category->article = $request['article'];
        if ($image_default) {
            $category->image = $image_default;
        }
        $category->url = $request['url'];
        $category->save();

        Session::flash('sm', 'category is Change');
    }

}

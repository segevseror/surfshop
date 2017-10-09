<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use App\Products;
use Session;


class ProductController extends MainController {

    public function __construct() {
        parent::__construct();
        $this->middleware('adminverify');
    }

        public function index() {
           
               self::$data['product'] = Products::all()->toArray();
            
        
          
            return view('cms.products' , self::$data);
           
    }

    public function create() {
       
      
        return view('cms.add_product' , self::$data);
      
        
    }


    public function store(ProductRequest $request) {
        
        Products::save_product($request);
        
    return redirect('cms/product');
        
        
    }

    public function show($id) {
       
         self::$data['id'] = $id;
       
        
       return view('cms.delete_product' , self::$data);
        
        
    }

    public function edit($id) {
        
         self::$data['edit'] = Products::find($id)->toArray();
        
        return view('cms.edit_product' , self::$data);
       
      
    }

    public function update(ProductRequest $request, $id) {
        
        Products::update_product($request , $id);
        return redirect('cms/products');
    
    }

    public function destroy($id) {
        
        Products::destroy($id);
        
        
        Session::flash('sm' , 'the products is deleted');
          return redirect('cms/product');
        
     
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\MenuRequest;
use App\Http\Requests\CategoryRequest;
use App\Menu;
use App\Categorie;
use Session;
            
      
class CategoriesController extends MainController {

    public function __construct() {
        parent::__construct();
        $this->middleware('adminverify');
    }

        public function index() {
        //$self Data [menu ][content][categories] its in MainController 
        return view('cms.categories' , self::$data);
    }

    public function create() {
       
    
        return view('cms.add_category' , self::$data);
        
    }


    public function store(CategoryRequest $request) {
      
        
        Categorie::save_categories($request);
        return redirect('cms/categories');
        
        
        
    }

    public function show($id) {
        
        self::$data['id'] = $id;
        
       return view('cms.delete_category' , self::$data);
        
        
    }

    public function edit($id) {
        
       
        self::$data['edit'] = Categorie::find($id)->toArray();
        
        return view('cms.edit_category' , self::$data);
      
    }

    public function update(CategoryRequest $request, $id) {
        
        Categorie::update_category($request , $id);
        return redirect('cms/categories');
      
    }

    public function destroy($id) {
        
        
        Categorie::destroy($id);
        
        Session::flash('sm' , 'the category is deleted');
          return redirect('cms/categories');
        
    }
    
    

}

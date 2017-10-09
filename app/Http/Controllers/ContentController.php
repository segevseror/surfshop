<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\MenuRequest;
use App\Http\Requests\ContentRequest;
use App\Menu;
use App\Content;
use Session;
            
      
class ContentController extends MainController {

    public function __construct() {
        parent::__construct();
        $this->middleware('adminverify');
    }

        public function index() {
                                    
            //$self Data [menu ][content] its in MainController
            
        return view('cms.content' , self::$data);
    }

    public function create() {
       
        
        return view('cms.add_content' , self::$data);
        
    }


    public function store(ContentRequest $request) {
        
        Content::save_content($request);
        return redirect('cms/content');
        
        
        
    }

    public function show($id) {
        
        self::$data['id'] = $id;
        
       return view('cms.delete_content' , self::$data);
        
        
    }

    public function edit($id) {
        
       
        self::$data['edit'] = Content::find($id)->toArray();
        return view('cms.edit_content' , self::$data);
      
    }

    public function update(Request $request, $id) {
        
        Content::update_item($request , $id);
        return redirect('cms/content');
      
    }

    public function destroy($id) {
        
        
        Content::destroy($id);
        
        Session::flash('sm' , 'the content is deleted');
          return redirect('cms/content');
        
    }

}

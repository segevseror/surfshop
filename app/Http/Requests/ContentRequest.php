<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use App\Http\Requests\ContentRequest;
use App\Menu;
use App\Content;
use Session;



class ContentRequest extends FormRequest {

    public function authorize() {
        return true;
    }

    public function rules(Request $request) {
        
        $item_id = !empty($request['item_id']) ? ',' .$request['item_id'] : '';
        
        return [
            'linkid' =>'required',
            'title' =>'required',
            'article' => 'required',
        ];
     
    }
    

}

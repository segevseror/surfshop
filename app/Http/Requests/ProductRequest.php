<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class ProductRequest extends FormRequest {

    public function authorize() {
        return true;
    }

    public function rules(Request $request) {
        
        $item_id = !empty($request['item_id']) ? ',' .$request['item_id'] : '';
        
        return [
            'title' =>'required',
            'url' => 'required|unique:categories,url' . $item_id,
            'article'=>'required',
            'iamge' =>'image',
            'price' => 'required'
        ];
     
    }
    

}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class MenuRequest extends FormRequest {

    public function authorize() {
        return true;
    }

    public function rules(Request $request) {
        
        $item_id = !empty($request['item_id']) ? ',' .$request['item_id'] : '';
        
        return [
            'link' =>'required',
            'title' =>'required',
            'url' => 'required|unique:menus,url' . $item_id,
        ];
     
    }
    

}

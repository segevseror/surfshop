<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SignupValidation extends FormRequest {

    public function authorize() {
        
        return true;
    }

    public function rules() {
        return [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|max:10|min:6|confirmed',
        ];
    }
    
 

}

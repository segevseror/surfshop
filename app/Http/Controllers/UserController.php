<?php

namespace App\Http\Controllers;

use App\User;
use Session;
use Illuminate\Http\Request;
use App\Http\Requests\SiginValidation;
use App\Http\Requests\SignupValidation;

class UserController extends MainController {
    
    function __construct() {
        parent::__construct();
        $this->middleware('usersigned' , ['except'=>['logout']] );
    }

    public function signin() {
        
       

        self::$data['title'] = 'sigin';
        return view('forms.sigin', self::$data);
    }

    public function postsigin(SiginValidation $request) {
        
        
        
            $rd = !empty($request['rd']) ? $request['rd'] : '';
            
        if (User::verifyUser($request)) {
            return redirect($rd);
        } else {

            self::$data['title'] = 'sign In';
            return view('forms.sigin', self::$data)->withErrors('Wrong email\password combination');
        };
    }

    public function signup() {

        self::$data['title'] = 'Sign up';
        return view('forms.signup', self::$data);
    }

    public function postSignup(SignupValidation $request) {

        User::save_new($request);

        return redirect('');
    }

    public function logout() {

        Session::forget('user_id');
        Session::forget('user_name');
        Session::forget('is_admin');

        return redirect('user/sigin');
    }

}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB,
    Hash,
    Session;

class User extends Model {

    static public function verifyUser($request) {

        $valid = false;


        $sql = "SELECT * FROM users u"
                . " JOIN users_roles r ON u.id = r.uid "
                . " WHERE u.email = ?";


        $user = DB::select($sql, [$request['email']]);



        if ($user) {

            $user = $user[0];
            if (Hash::check($request['password'], $user->password)) {

                $valid = true;
                Session::put('user_id', $user->id);
                Session::put('user_name', $user->name);

                if ($user->role == 3) {
                    Session::put('is_admin', true);
                }

                Session::flash('sm', 'Welcome back ' . $user->name);
            }
        }

        return $valid;
    }

    static public function save_new($request) {
        
        $user = new self();
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->password = bcrypt($request['password']);
        $user->save();
        $uid = $user->id;
        $sql = "INSERT INTO users_roles VALUES($uid , 4)";
        DB::insert($sql);
        Session::flash('sm' , 'You account created ' . $request['name']);
         Session::put('user_id', $user->id);
                Session::put('user_name', $user->name);
    }
    
    
       public function order(){
        
       
      return $this->hasMany('App\Order');
        
    }

}

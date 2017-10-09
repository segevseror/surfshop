<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Content;
use Session;

class Cvnumber extends Model {

  static public function update_number(){
      
      
      $cvnumber = self::find(1);
      
      $numnow = $cvnumber->number;
      $cvnumber->number = $numnow+1;
      $cvnumber->save();
      
      
  }

}

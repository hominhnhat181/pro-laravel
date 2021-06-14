<?php 

namespace App\Helpers;
use Auth;
   class Helper {
       
     public static function helper(){
          return 'welcome Admin '.Auth::user()->name;
      }
  }
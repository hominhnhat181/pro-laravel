<?php 

namespace App\Helpers;

use Illuminate\Support\Facades\Auth;

   class Helper {
       
     public static function hiADmin(){
          return 'welcome Admin '.Auth::user()->name;
      }
  }
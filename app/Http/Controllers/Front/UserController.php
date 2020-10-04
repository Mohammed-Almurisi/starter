<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\VerifiesEmails;

class UserController extends Controller
{
  public function showUserName(){
      return 'Mohammed Almurisi';
  }

  public function getIndex() {
//      $data=[];
//      $data['id']=2;
//    $data['name']='Mohammed Almurisi';
//      $data['age']=24;
      $data=['a' => 'ahmed' , 'b' => 'bassem' ,'name' => 'Mohammed Almurisi'];
//      $obj = new \stdClass();
//      $obj -> name ='Mohammed';
//      $obj -> id ='5';
//      $obj -> gender = 'male';
//      return view('welcome',compact('obj'));
      return view('welcome',compact('data'));
  }
  public function landing() {
      return view('landing');
  }

    public function blog() {
        return view('blog');
    }
}


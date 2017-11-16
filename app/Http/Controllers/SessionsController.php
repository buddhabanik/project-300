<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\User;
use App\Student;
use DB;
use File;


class SessionsController extends Controller
{   


  /*  public function __construct() {
        $this->middleware('guest', ['except' => 'destroy']);
    }
*/

    public function tem()
    {
        return view('sessions.teacherCreate');
    }


    public function create()
    {
    	return view('sessions.create');
    }



    public function store()
    {   

       if( !auth()->attempt(request(['email','password']))) {
          return back();
        }



        if( auth()->user()->role == '1' && request('loginType') == 'Admin')
              return redirect('/admin');
        elseif(  auth()->user()->role == '2' && request('loginType') == 'Teacher' )
              return redirect('/teachetPanel');
        elseif( auth()->user()->role == '3' && request('loginType') == 'Staff' )
              return redirect('/staffPanel');
        elseif( auth()->user()->role == '4' && request('loginType') == 'Student') 
            return redirect('/studentPanel');


        return back();

    }



    public function destroy() {
        auth()->logout();

        return redirect('/login');
    }



  
}
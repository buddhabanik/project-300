<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Student;
use App\Teacher;
use App\Staff;
use DB;


class RegisterController extends Controller
{
    


    public function studentcreate()
    {
        return view('sessions.studentRegistration');
    }

    public function teachercreate()
    {
        return view('sessions.teacherRegistration');
    }

    public function staffcreate()
    {
        return view('sessions.staffRegistration');
    }



    public function studentstore(Request $request)
    {
    	  //dd(request()->all());
        $role = '4';

        $password=bcrypt(request('password'));

        DB::table('users')->insert(
        ['email' => request('email'), 'password' => $password, 'role' => $role] );

       /* $id = DB::table('users')->where('email' ,  request('email'))->value('id');*/

        $id = User::where('email' ,  request('email'))->value('id');


   /*     $request->request->add(['userId' => $id]);*/
   


        /*User::create( request()->all() + ['password' => $password] + ['role' => $role] );*/


       
       
   
        $filename = "\images\Default.png";
        if( $request->hasFile('image'))
        {
            $file = $request->file('image');

            $destinationPath = public_path(). '/images/';
            $filename = $file->getClientOriginalName();

            $file->move($destinationPath, $filename);
       }





        DB::table('students')->insert(
        ['fullName' => request('fullName'), 'fatherName' => request('fatherName'), 
        'motherName' => request('motherName'), 'email' => request('email'), 
        'contact' => request('contact'), 'gender' => request('gender'), 'birthDate' => request('birthDate'), 
        'class' => request('class'), 'section' => request('section'), 
         'roll' => request('roll'), 'address' => request('address'),  'picture'  => $filename,
        'userId' => $id ]);

   
    
   // DB::table('users')->insert($insert);


    /*  User::create( request()->all() );*/
 
        /*Student::create(request(['fullName','fatherName','motherName','email','contact','gender',
            'class','section','roll','address']));*/
/*
        Student::create(request()->all() );*/

        return redirect('/studentPanel');

    }




    public function teacherstore(Request $request)
    {
        $role = '2';
        $password=bcrypt(request('password'));

        DB::table('users')->insert(
        ['email' => request('email'), 'password' => $password, 'role' => $role] );


        $id = User::where('email' ,  request('email'))->value('id');
        $filename = "\images\Default.png";


        if( $request->hasFile('image'))
        {
            $file = $request->file('image');

            $destinationPath = public_path(). '/images/';
            $filename = $file->getClientOriginalName();

            $file->move($destinationPath, $filename);
       }



        DB::table('teachers')->insert(
        ['fullName' => request('fullName'), 'fatherName' => request('fatherName'), 
        'motherName' => request('motherName'), 'email' => request('email'), 
        'contact' => request('contact'), 'gender' => request('gender'), 'birthDate' => request('birthDate'), 
         'address' => request('address'),  'about' => request('about'),  'picture'  => $filename,
        'userId' => $id ]);


        return redirect('/teacherPanel');

    }


    public function staffstore(Request $request)
    {
        $role = '3';
        $password=bcrypt(request('password'));

        DB::table('users')->insert(
        ['email' => request('email'), 'password' => $password, 'role' => $role] );


        $id = User::where('email' ,  request('email'))->value('id');
        $filename = "\images\Default.png";


        if( $request->hasFile('image'))
        {
            $file = $request->file('image');

            $destinationPath = public_path(). '/images/';
            $filename = $file->getClientOriginalName();

            $file->move($destinationPath, $filename);
       }



        DB::table('staffs')->insert(
        ['fullName' => request('fullName'), 'fatherName' => request('fatherName'), 
        'motherName' => request('motherName'), 'email' => request('email'), 
        'contact' => request('contact'), 'gender' => request('gender'), 'birthDate' => request('birthDate'), 
        'address' => request('address'),  'about' => request('about'), 'picture'  => $filename,
        'userId' => $id ]);


        return redirect('/staffPanel');

    }

}

<?php

namespace App\Http\Controllers;

use App\Models\registration;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{

    function getView(){
        return view('registration.registration');
    }

    function getUpdate(Request $request){
        $id=$request->id;
        $title="update new user";

        $data=registration::where('id',$id)->get()->first();

        return view('update.update',['pageTitle'=>$title,'data'=>$data]);
    }

    function setUpdate(Request $request){
        // dd($request);
        $id=$request->id;

        $user=registration::find($id);

        if($user){
            $user->update([
                'fname'=>$request->fname,
                'lname'=>$request->lname,
                'email'=>$request->email,
                'password'=>$request->password,
            ]);

            return redirect()->route('homeView');
        }else{
            return "user ".$id." not found";
        }

        return view('registration.registration');
    }


    function store(Request $requset){
        // dd($requset);
        $validate_data=$requset->validate([
            'fname'=>['required'],
            'lname'=>['required'],
            'email'=>['required'],
            'password'=>['required'],
        ]);

        $data=registration::create([
            'fname'=>$validate_data['fname'],
            'lname'=>$validate_data['lname'],
            'email'=>$validate_data['email'],
            'password'=>$validate_data['password'],
        ]);

        // return response()->json(['data'=>$data]);
        return redirect()->route('registerView');
    }

    function login(Request $request){
        // return $request;

        $em=$request->email;
        $pw=$request->password;

        $user=registration::where('email',$em)
        ->get()->first();



        if($user){
            if($user->password === $pw && $user->email === $em){
                $data= $request->input('email');
                $request->session()->put('email',$data);
                
                return redirect()->route('homeView');
            }else{
                return redirect()->route('loginView');
            }
        }else{
            return redirect()->route('loginView');
        }
       
    }

    function updateUser(Request $request){
        $userId=$request->id;

    }

    function deleteUser(Request $request){
        $id=$request->id;

        $deleted = DB::table('registrations')
        ->where('id',$id)
        ->delete();

        if($deleted){
            return redirect()->route('homeView');
        }else{
            return "error";
        }
        
    }
}

<?php

namespace App\Http\Controllers;



use App\Events\SenderEvent;
use App\Models\Registers;
use Illuminate\Http\Request;

class UserController extends Controller{

    public function home(){
        return view('home');
    }

    public function registration(){
        $regs = new Registers();
        return view('registration', ['registration'=> $regs->all()]);
        //return view('registration');
    }

    public function login(){
        return view('login');
    }


    public function registration_check(Request $request){
        $valid = $request->validate([
            'email' => 'required|min:1|max:100|unique:registers,email',
            'login' => 'required|min:1|max:100|unique:registers,login',
            'password' => 'required|min:1|max:100',
            ]);

        $reg = new Registers();
        $reg->email = $request->input('email');
        $reg->login = $request->input('login');
        $reg->password = $request->input('password');

        $reg->save();

        return back()->withInput();
    }

    public function delete_mess($id)
    {
        Registers::where('id',$id)->delete();
        return back()->withInput();
    }

    public function send_mess($id)
    {
        $infmes=Registers::find($id);

        event(new SenderEvent($infmes));
        return back()->withInput();
    }

}

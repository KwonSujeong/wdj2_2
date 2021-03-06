<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Auth;
use Illuminate\Support\Facades\Mail;
class UsersController extends Controller
{
    public function create()
    {
        return view('users.signup');
    }
    public function login()
    {
        return view('users.login');
    }
    public function check(Request $req)
    {
        // 유효성 검사
        $message=[
            'email.required'=>'이메일 입력은 필수입니다.',
            'password.required'=>'비밀번호 입력은 필수입니다.',
        ];
        $this->validate($req,[
            'email'=>'required|email|max:255',
            'password'=>'required|min:6'
        ],$message);

        // 로그인 시도
        if (Auth::attempt(['email' => $req->email, 'password' => $req->password])) {
            # code...
            // 성공 시
            return redirect('/');
        }
        // 실패 시
        return "Fail";
    }
    public function store(Request $req)
    {
        $message=[
            'name.required'=>'이름 입력은 필수입니다.',
            'email.required'=>'이메일 입력은 필수입니다.',
            'password.required'=>'패스워드를 입력하세요.',
            'email.unique'=>'중복되는 이메일 입니다.',
        ];
        $this->validate($req,[
            'name'=>'required|max:255',
            'email'=>'required|email|max:255|unique:users',
            'password'=>'required|confirmed|min:6'
        ],$message);

        $confirm_code=Str::random(15);

        $user=\App\User::create([
            'name'=>$req->name,
            'email'=>$req->email,
            'password'=>bcrypt($req->password),
            'confirm_code'=>$confirm_code,
        ]);

        $data=array(
            'name'=>$user->name,
            'email'=>$user->email,
        );

        Mail::send('emails.articles.create', $data, function($message) use ($user) { 
            $message->from('nea64226@gmail.com', 'Jang Jae-il'); 
            $message->to($user['email'], $user['name'])->subject('Welcome!');
        });
        auth()->login($user);
        return redirect('/');
    } 

    public function logout()
    {
        auth()->logout();
        return redirect('/');
    }
}

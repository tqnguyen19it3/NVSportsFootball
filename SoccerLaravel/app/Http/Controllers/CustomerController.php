<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Models\SocialModels;
use App\Models\LoginModels;
use Socialite;
use Session;
use Illuminate\Support\Facades\Redirect;
use Cart;
session_start();

class CustomerController extends Controller
{
    //
    public function AuthLogin(){

        if(Session::get('login_normal')){
            $user_id = Session::get('user_id');
        }

        if($user_id){                                      //có đăng nhập ms có admin_id
            return Redirect::to('/home');              //sẽ đá về đường dẫn dashboard trỏ đến hàm show_dashboard
        }else return Redirect::to('/login')->send();   //hàm kiểm tra đăng nhập
    }

    public function add_user(Request $request){
		$data = array();
		$data['user_email'] = $request->user_email;
		$data['user_name'] = $request->user_name;
		$data['user_phone'] = $request->user_phonenumber;
		$data['user_gender'] = $request->user_gender;
		$data['user_city'] = $request->user_city;	
		$data['user_password'] = md5($request->user_password);
        $data['user_age'] = "...";
        $data['user_clb_vt'] = "...";
        $data['user_avatar'] = "";


		$user_id = DB::table('tbl_user')->insertGetId($data);

		return Redirect::to('/login');
	}

    // public function login_user(Request $request){ //hàm login

    // 	$user_email = $request->userEmail;
    // 	$user_password = md5($request->userPassword);

    // 	$result = DB::table('tbl_user')->WHERE('user_email',$user_email)->WHERE('user_password',$user_password)->first();
    //     // $result = LoginModels::find($user_email && $user_password)->first();
    // 	if($result){
    // 		Session::put('user_email', $result->user_email);
    // 		Session::put('user_id', $result->user_id);
    // 		return Redirect::to('/home');
    // 	}else{
    // 		Session::put('message', 'Tài Khoản hoặc mật khẩu không hợp lệ');
    // 		return Redirect::to('/login');
    // 	}
    // }

    public function login_user(Request $request){ //hàm login

        $data = $request->all();

        $user_email = $data['userEmail'];
        $user_password = md5($data['userPassword']);

        $result = LoginModels::where('user_email', $user_email)->where('user_password', $user_password)->first();
        if($result){
            $login_count = $result->count();

            Session::put('login_normal', true);
            Session::put('user_email', $result->user_email);
            Session::put('user_id', $result->user_id);
            return Redirect::to('/home');
        }
        elseif(!$result){
            Session::put('message', 'Tài Khoản hoặc mật khẩu không hợp lệ');
            return Redirect::to('/login');
        }
    }

    public function login_facebook(){
        return Socialite::driver('facebook')->redirect();
    }

    public function callback_facebook(){

        $users = Socialite::driver('facebook')->stateless()->user();
        $account = $this->findOrCreateUserFB($users,'facebook');
        if($account){
            //login in vao home 
            $account_name = LoginModels::where('user_id',$account->customer)->first();
            Session::put('login_normal', true);
            Session::put('user_email',$account_name->user_email);
            Session::put('user_id',$account_name->user_id);

        }elseif($customer_news){
            $account_name = LoginModels::where('user_id',$account->customer)->first();
            Session::put('login_normal', true);
            Session::put('user_email',$account_name->user_email);
            Session::put('user_id',$account_name->user_id);

        }
            return redirect('/home');
        
    }

    public function findOrCreateUserFB($users, $provider){

        $account = SocialModels::where('provider_customer_id',$users->id)->first();
        if($account){
            return $account;
        }else{
                $customer_news = new SocialModels([
                'provider_customer_id' => $users->id,
                'provider' => strtoupper($provider)
            ]);

            $orang = LoginModels::where('user_email',$users->email)->first();

            if(!$orang){
                $orang = LoginModels::create([
                    'user_name' => $users->name,
                    'user_email' => $users->email,
                    'user_password' => '',
                    'user_phone' => '...',
                    'user_gender' => '...',
                    'user_city' => '...',
                    'user_age' => '...',
                    'user_avatar' => '',
                    'user_clb_vt' => '...'

                ]);
            }
            $customer_news->login_user()->associate($orang);
            $customer_news->save();

            return $customer_news;
        }

    }

    public function login_google(){
        return Socialite::driver('google')->redirect();
    }

    public function callback_google(){

        $users = Socialite::driver('google')->stateless()->user();
        $authUser = $this->findOrCreateUserGG($users,'google');
        if($authUser){
            $account_name = LoginModels::where('user_id',$authUser->customer)->first();
            Session::put('login_normal', true);
            Session::put('user_email',$account_name->user_email);
            Session::put('user_id',$account_name->user_id);
        }elseif($customer_news){
            $account_name = LoginModels::where('user_id',$authUser->customer)->first();
            Session::put('login_normal', true);
            Session::put('user_email',$account_name->user_email);
            Session::put('user_id',$account_name->user_id);
        }
        
        return redirect('/home');

    }
    public function findOrCreateUserGG($users, $provider){

        $authUser = SocialModels::where('provider_customer_id', $users->id)->first();
        if($authUser){
            return $authUser;
        }else{
                $customer_news = new SocialModels([
                'provider_customer_id' => $users->id,
                'provider' => strtoupper($provider)
            ]);

            $orang = LoginModels::where('user_email',$users->email)->first();

                if(!$orang){
                    $orang = LoginModels::create([
                        'user_name' => $users->name,
                        'user_email' => $users->email,
                        'user_password' => '',
                        'user_phone' => '...',
                        'user_gender' => '...',
                        'user_city' => '...',
                        'user_age' => '...',
                        'user_avatar' => '',
                        'user_clb_vt' => '...'
                    ]);
                }
            $customer_news->login_user()->associate($orang);
            $customer_news->save();

            return $customer_news;
        }

    }

    public function logout_user(){
        $this->AuthLogin();
        Session::flush();
        return Redirect::to('/home');
    }

}

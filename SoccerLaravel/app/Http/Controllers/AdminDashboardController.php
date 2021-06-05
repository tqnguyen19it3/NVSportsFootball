<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use App\Models\YardSystemModels;
use Illuminate\Support\Facades\Redirect;
session_start();

class AdminDashboardController extends Controller
{
    //
    public function AuthLogin(){
        $admin_id = Session::get('admin_id');  
        if($admin_id){                                      //có đăng nhập ms có admin_id
            return Redirect::to('/admin-dashboard');              //sẽ đá về đường dẫn dashboard trỏ đến hàm show_dashboard
        }else return Redirect::to('/login-admin')->send();   //hàm kiểm tra đăng nhập
    }

    public function admin_profile($admin_id){
    	$this->AuthLogin();                                 
            $admin_profile = DB::table('tbl_admin')->where('admin_id',$admin_id)->first();
            $system_yard = YardSystemModels::orderBy('yard_system_id','ASC')->where('admin_id', $admin_id)->get();
            $admin_pay = DB::table('admin_pay')->where('admin_id',$admin_id)->get();

    	return view('admin.admin_profile')->with('admin_profile', $admin_profile)->with('system_yard', $system_yard)->with('admin_pay', $admin_pay);
    }

    public function admin_account(Request $request, $admin_id){
        $this->AuthLogin();

        $result = DB::table('tbl_admin')->WHERE('admin_id',$admin_id)->get();   

        return view('admin.admin_account')->with('result', $result);
    }

    public function update_admin_account(Request $request, $admin_id){
        $data = array();
        $data['admin_email'] = $request->adminEmail;
        $data['admin_name'] = $request->adminName;
        $data['admin_phone'] = $request->adminPhone;
        // $data['admin_password'] = md5($request->adminPassword);

        $admin_id = DB::table('tbl_admin')->where('admin_id', $admin_id)->update($data);

        return Redirect::to('/admin-dashboard');
    }

    public function add_admin_pay(){
        $this->AuthLogin();                                 
            
        return view('admin.add_admin_pay');
    }

    public function insert_admin_pay(Request $request, $admin_id){
        $this->AuthLogin();

                $data = array();
                
                $data['ad_pay_account'] = $request->admin_pay_account;
                $data['ad_pay_bank'] = $request->admin_pay_bank;
                $data['ad_pay_code'] = $request->admin_pay_code;
                $data['admin_id'] = $admin_id;

                $admin_pay = DB::table('admin_pay')->insert($data);
                Session::put('message', 'Thêm thông tin thanh toán thành công!');
            return Redirect::to('/admin-profile/'.$admin_id);
    }

    public function edit_admin_pay($ad_pay_id){
        $this->AuthLogin();                                 
        $admin_pay = DB::table('admin_pay')->where('ad_pay_id',$ad_pay_id)->get();
        return view('admin.edit_admin_pay')->with('admin_pay',$admin_pay);
    }

    public function update_admin_pay(Request $request, $admin_id, $ad_pay_id){

        $data = array();
        $data['ad_pay_code'] = $request->adPayCode;
        $data['ad_pay_account'] = $request->adPayAccount;
        $data['ad_pay_bank'] = $request->adPayBank;

            DB::table('admin_pay')->where('ad_pay_id', $ad_pay_id)->update($data);
            Session::put('message', 'Cập nhật thông tin thanh toán thành công!');
            return Redirect::to('/admin-profile/'.$admin_id);
    }

    public function admin_contacts(){
        $this->AuthLogin();
        return view('admin.admin_contacts');
    }

    public function manager_booked_yard($id){
        $this->AuthLogin();
        $team_profile = DB::table('tbl_profile_team')->get();
            $profile_person = DB::table('tbl_user')->get();
            $list_of_team = DB::table('tbl_list_of_team')->get();
            $a = DB::table('tbl_yard_system')->where('admin_id', $id)->join('tbl_schedule', 'tbl_yard_system.yard_system_id', '=', 'tbl_schedule.yard_system_id')->join('tbl_yard', 'tbl_schedule.yard_id', '=', 'tbl_yard.yard_id')->get();
            $k = DB::select(DB::raw("SELECT a.yard_mss, u.user_name, u.user_avatar, s.date_time_current, s.schedule_date, t.time_price_hours, u.user_phone FROM tbl_yard a
                INNER JOIN tbl_schedule s ON a.yard_id=s.yard_id 
                INNER JOIN tbl_yard_system b ON b.yard_system_id = a.yard_system_id
                INNER JOIN tbl_user u ON u.user_id=s.user_id
                INNER JOIN tbl_time_price t ON t.time_price_id=s.time_price_id
                WHERE b.admin_id='".$id."'"));
            // var_dump($k);
            // die();
        return view('admin.manager_booked_yard')->with('k', $k);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Mail;
use Illuminate\Support\Facades\Redirect;
session_start();

class ProfileController extends Controller
{
	public function AuthLogin(){
        $user_id = Session::get('user_id');  
        if($user_id){                                      //có đăng nhập ms có user_id
            return Redirect::to('/home');           //sẽ đá về đường dẫn dashboard trỏ đến hàm show_dashboard
        }else return Redirect::to('/404')->send();   //hàm kiểm tra đăng nhập
    }

    public function home_profile_person(Request $request, $user_id){
    	$this->AuthLogin();
        $user_id1 = Session::get('user_id');

        // SEO
        $meta_desc = "Nền tảng thể thao dành chung mọi đối tượng. Ở đây, bạn có thể dễ dàng tìm chỗ chơi, tìm đồng đội hay đối thủ để chơi một cách vui vẻ nhất, đặt sân một cách hiệu quả nhất. Hệ thống quản lý sân, lịch biểu thông minh giảm thiểu tối đa thời gian chi phí, tăng doanh thu cho chủ sân - NV Sports Football.";
        $meta_keywords = "hồ sơ thể thao NV Sports Football, thông tin người dùng NV Sports Football, ho so the thao NV Sports Football, thong tin nguoi dung NV Sports Football";
        $meta_title = "Hồ sơ thể thao | NV Sports Football";
        $url_canonical = $request->url();
        // END SEO  

        if($user_id1 == $user_id){                                    
            $person_profile = DB::table('tbl_user')->where('user_id',$user_id)->get();
            $team_profile = DB::table('tbl_profile_team')->get();
            $list_of_team = DB::table('tbl_list_of_team')->get();
            $vao_doi = 0;
            foreach ($list_of_team as $key => $list) {
                if($list->user_id == $user_id){
                    $vao_doi = 1;
                }
            }
            return view('sports_profile.pages_profile.personal_information')->with('person_profile', $person_profile)->with('team_profile', $team_profile)->with('list_of_team', $list_of_team)->with(compact('vao_doi','meta_desc','meta_keywords','meta_title','url_canonical'));//1
        }else return Redirect::to('/404')->send();

    }
    public function update_profile_person(Request $request, $user_id){
    	$this->AuthLogin();
        $user_id1 = Session::get('user_id');  
        if($user_id1 == $user_id){
        	$data = array();
        	$data['user_email'] = $request->profile_email;
            $data['user_name'] = $request->profile_name;
            $data['user_phone'] = $request->profile_phone;
            $data['user_city'] = $request->profile_city;
            $data['user_age'] = $request->profile_age;
            $data['user_gender'] = $request->profile_gender;
            $data['user_clb_vt'] = $request->profile_vtst;
            // $data['meta_product_keywords'] = $request->meta_product_keywords;
            $get_image = $request->file('profile_avatar');

            if($get_image){
                $get_name_image = $get_image->getClientOriginalName();
                $name_image = current(explode('.', $get_name_image)); //current(explode('.', $get_name_image)); chia chuỗi ra để cắt đuôi từ dấu chấm
                $new_custom_name_image = $name_image.'('.rand(0,99).')'.'.'.$get_image->getClientOriginalExtension(); 
                //getClientOriginalExtention():lấy đuôi mở rộng
                $get_image->move('../public/uploads/avatar-user', $new_custom_name_image);
                $data['user_avatar'] = $new_custom_name_image;
                DB::table('tbl_user')->where('user_id', $user_id)->update($data);
                Session::put('message', 'Cập nhật thông tin thành công!');
                return Redirect::to('/profile-person/'.$user_id);
            }

            DB::table('tbl_user')->where('user_id', $user_id)->update($data);
            Session::put('message', 'Cập nhật thông tin thành công!');
        	return Redirect::to('/profile-person/'.$user_id);

        }else return Redirect::to('/404')->send();

    }


    public function create_and_join_team(Request $request){
      	$this->AuthLogin();
      	
      	$profile_person = DB::table('tbl_user')->get();
      	$team_profile = DB::table('tbl_profile_team')->get();
        $list_of_team = DB::table('tbl_list_of_team')->get();
        // $count = DB::table('tbl_list_of_team')->group_by('profile_team_id')->get();
        // $all_profile = DB::table('tbl_user')->join('tbl_list_of_team','tbl_list_of_team.user_id', '=', 'tbl_user.user_id')
        // ->join('tbl_profile_team','tbl_profile_team.profile_team_id', '=', 'tbl_list_of_team.profile_team_id')->get();

        // SEO
        $meta_desc = "Nền tảng thể thao dành chung mọi đối tượng. Ở đây, bạn có thể dễ dàng tìm chỗ chơi, tìm đồng đội hay đối thủ để chơi một cách vui vẻ nhất, đặt sân một cách hiệu quả nhất. Hệ thống quản lý sân, lịch biểu thông minh giảm thiểu tối đa thời gian chi phí, tăng doanh thu cho chủ sân - NV Sports Football.";
        $meta_keywords = "tạo đội NV Sports Football, tìm đội NV Sports Football, tham gia đội NV Sports Football, gia nhập đội NV Sports Football, tao doi NV Sports Football, tim doi NV Sports Football, tham gia doi NV Sports Football, gia nhap doi NV Sports Football";
        $meta_title = "Tạo và tham gia đội | NV Sports Football";
        $url_canonical = $request->url();
        // END SEO 

    	return view('sports_profile.pages_profile.create_and_join_team')->with('profile_person', $profile_person)->with('team_profile', $team_profile)->with('list_of_team', $list_of_team)->with(compact('meta_desc','meta_keywords','meta_title','url_canonical'));//1
    }

    public function insert_profile_team(Request $request, $user_id){
        $this->AuthLogin();
        $user_id1 = Session::get('user_id'); 
        if($user_id1 == $user_id){

                $data = array();
                
                $data['profile_team_name'] = $request->name_clb;
                $data['profile_team_level'] = $request->level_clb;
                $data['profile_team_gender'] = $request->gender_clb;
                $data['profile_team_age'] = $request->age_clb;
                $data['profile_team_city'] = $request->city_clb;
                $data['profile_team_desc'] = $request->desc_clb;

                // $data['meta_product_keywords'] = $request->meta_product_keywords;
                $get_image2 = $request->file('logo_clb');

                if($get_image2){
                    $get_name_image2 = $get_image2->getClientOriginalName();
                    $name_image2 = current(explode('.', $get_name_image2)); //current(explode('.', $get_name_image)); chia chuỗi ra để cắt đuôi từ dấu chấm
                    $new_custom_name_image2 = $name_image2.'('.rand(0,99).')'.'.'.$get_image2->getClientOriginalExtension(); 
                    //getClientOriginalExtention():lấy đuôi mở rộng
                    $get_image2->move('../public/uploads/logo-team', $new_custom_name_image2);
                    $data['profile_team_logo'] = $new_custom_name_image2;
                    $profile_team_id1 =DB::table('tbl_profile_team')->insertGetId($data);
                    Session::put('profile_team_id',$profile_team_id1);
                    $profile_team_id11 = Session::get('profile_team_id');
                    $data2 = array();
                    $data2['profile_team_id'] = $profile_team_id11;
                    $data2['user_id'] = $user_id;
                    $data2['clb_captain'] = 1;
                    DB::table('tbl_list_of_team')->insert($data2);
                    Session::put('message', 'Tạo Đội thành công!');
                    return Redirect::to('/profile-team/'.$profile_team_id11.'/'.$user_id);
                }

                $data['profile_team_logo'] = '';
                $profile_team_id1 = DB::table('tbl_profile_team')->insertGetId($data);
                Session::put('profile_team_id',$profile_team_id1);
                    $profile_team_id11 = Session::get('profile_team_id');
                    $data2 = array();
                    $data2['profile_team_id'] = $profile_team_id11;
                    $data2['user_id'] = $user_id;
                    $data2['clb_captain'] = 1;
                    DB::table('tbl_list_of_team')->insert($data2);
                Session::put('message', 'Tạo Đội thành công!');         //truong hop nay la ko co anh
                return Redirect::to('/profile-team/'.$profile_team_id11.'/'.$user_id);


        }else return Redirect::to('/404')->send();
    }

    public function update_profile_team(Request $request, $profile_team_id, $user_id){

    	$this->AuthLogin();
        $user_id1 = Session::get('user_id'); 
        if($user_id1 == $user_id){
        	$data = array();
        	$data['profile_team_name'] = $request->team_name;
        	$data['profile_team_age'] = $request->team_age;
        	$data['profile_team_gender'] = $request->team_gender;
        	$data['profile_team_city'] = $request->team_city;
            $data['profile_team_level'] = $request->team_level;
            $data['profile_team_desc'] = $request->team_desc;

            // $data['meta_product_keywords'] = $request->meta_product_keywords;
            $get_image1 = $request->file('team_logo');

            if($get_image1){
                $get_name_image1 = $get_image1->getClientOriginalName();
                $name_image1 = current(explode('.', $get_name_image1)); //current(explode('.', $get_name_image)); chia chuỗi ra để cắt đuôi từ dấu chấm
                $new_custom_name_image1 = $name_image1.'('.rand(0,99).')'.'.'.$get_image1->getClientOriginalExtension(); 
                //getClientOriginalExtention():lấy đuôi mở rộng
                $get_image1->move('../public/uploads/logo-team', $new_custom_name_image1);
                $data['profile_team_logo'] = $new_custom_name_image1;
                DB::table('tbl_profile_team')->where('profile_team_id', $profile_team_id)->update($data);
                // DB::table('tbl_list_of_team')->where('profile_team_id', $profile_team_id)->update($data2);
                Session::put('message', 'Cập nhật thông tin thành công!');
                return Redirect::to('/profile-team/'.$profile_team_id.'/'.$user_id);
            }

            DB::table('tbl_profile_team')->where('profile_team_id', $profile_team_id)->update($data);
            // DB::table('tbl_list_of_team')->where('profile_team_id', $profile_team_id)->update($data2);
            Session::put('message', 'Cập nhật thông tin thành công!');
        	return Redirect::to('/profile-team/'.$profile_team_id.'/'.$user_id);
        }else return Redirect::to('/404')->send();

    }

    public function home_profile_team(Request $request, $profile_team_id, $user_id){

        $this->AuthLogin();
        $user_id1 = Session::get('user_id');

        // SEO
        $meta_desc = "Nền tảng thể thao dành chung mọi đối tượng. Ở đây, bạn có thể dễ dàng tìm chỗ chơi, tìm đồng đội hay đối thủ để chơi một cách vui vẻ nhất, đặt sân một cách hiệu quả nhất. Hệ thống quản lý sân, lịch biểu thông minh giảm thiểu tối đa thời gian chi phí, tăng doanh thu cho chủ sân - NV Sports Football.";
        $meta_keywords = "hồ sơ đội bóng NV Sports Football, thông tin đội bóng NV Sports Football, Hồ sơ CLB, ho so clb ho so đội bóng NV Sports Football, thong tin đội bóng NV Sports Football,";
        $meta_title = "Hồ sơ đội bóng | NV Sports Football";
        $url_canonical = $request->url();
        // END SEO 

        if($user_id1 == $user_id){
            $team_profile = DB::table('tbl_profile_team')->where('profile_team_id',$profile_team_id)->get();
            $profile_person = DB::table('tbl_user')->get();
            $list_of_team = DB::table('tbl_list_of_team')->get();
            $vao_doi = 0;
            foreach ($list_of_team as $key => $list) {
                if($list->user_id == $user_id){
                    $vao_doi = 1;
                }
            }

            return view('sports_profile.pages_profile.team_information')->with('team_profile', $team_profile)->with('profile_person', $profile_person)->with('list_of_team', $list_of_team)->with(compact('vao_doi','meta_desc','meta_keywords','meta_title','url_canonical'));//1
        }else return Redirect::to('/404')->send();

    }

    public function join_team(Request $request, $user_id, $profile_team_id){
        $this->AuthLogin();
        
        // $profile_person = DB::table('tbl_user')->get();
        DB::table('tbl_profile_team')->where('profile_team_id', $profile_team_id)->get();
        // $list_of_team = DB::table('tbl_list_of_team')->get();
        $data2 = array();
            $data2['profile_team_id'] = $profile_team_id;
            $data2['user_id'] = $user_id;
            $data2['clb_captain'] = 0;
            DB::table('tbl_list_of_team')->insert($data2);
            Session::put('message', 'Tham gia đội thành công!');

        return Redirect::to('/profile-team/'.$profile_team_id.'/'.$user_id);//1
    }

    public function leave_team($user_id){
        $this->AuthLogin();
        DB::table('tbl_list_of_team')->where('user_id', $user_id)->delete();
        Session::put('message', 'Rời đội thành công!');
        return Redirect::to('/profile-person/'.$user_id);
    }

    public function my_schedule(Request $request, $user_id){
        $this->AuthLogin();
        $user_id1 = Session::get('user_id');

        // SEO
        $meta_desc = "Nền tảng thể thao dành chung mọi đối tượng. Ở đây, bạn có thể dễ dàng tìm chỗ chơi, tìm đồng đội hay đối thủ để chơi một cách vui vẻ nhất, đặt sân một cách hiệu quả nhất. Hệ thống quản lý sân, lịch biểu thông minh giảm thiểu tối đa thời gian chi phí, tăng doanh thu cho chủ sân - NV Sports Football.";
        $meta_keywords = "Lịch đặt sân NV Sports Football, lịch của tôi NV Sports Football, lich dat san NV Sports Football, thong tin lich cua toi NV Sports Football";
        $meta_title = "Lịch của tôi | NV Sports Football";
        $url_canonical = $request->url();
        // END SEO  

        if($user_id1 == $user_id){  
        
            $team_profile = DB::table('tbl_profile_team')->get();
            $profile_person = DB::table('tbl_user')->get();
            $list_of_team = DB::table('tbl_list_of_team')->get();
            $my_schedule = DB::table('tbl_schedule')->where('user_id', $user_id)->join('tbl_yard_system', 'tbl_schedule.yard_system_id', '=', 'tbl_yard_system.yard_system_id')->join('tbl_yard', 'tbl_schedule.yard_id', '=', 'tbl_yard.yard_id')->join('tbl_time_price', 'tbl_schedule.time_price_id', '=', 'tbl_time_price.time_price_id')->orderBy('schedule_date','ASC')->get();

            $vao_doi = 0;
            foreach ($list_of_team as $key => $list) {
                if($list->user_id == $user_id){
                    $vao_doi = 1;
                }
            }

            return view('sports_profile.pages_profile.my_schedule')->with('team_profile', $team_profile)->with('profile_person', $profile_person)->with('list_of_team', $list_of_team)->with('my_schedule', $my_schedule)->with(compact('vao_doi','meta_desc','meta_keywords','meta_title','url_canonical'));//1
        }else return Redirect::to('/404')->send();
    }
}


<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use App\Models\YardModels;
use App\Models\YardSystemModels;
use App\Models\PostYardSysModels;
use App\Models\YardTimeAndPriceModels;
use Mail;
use Illuminate\Support\Facades\Redirect;
session_start();

class HomeController extends Controller
{
    public function AuthLogin(){
        $user_id = Session::get('user_id');  
        if($user_id){                                      
            return Redirect::to('/home');              
        }else return Redirect::to('/login')->send();
    }

    public function index(Request $request){
        // SEO
        $meta_desc = "Nền tảng thể thao dành chung cho mọi đối tượng. Ở đây, bạn có thể dễ dàng tìm chỗ chơi, tìm đồng đội hay đối thủ để chơi một cách vui vẻ nhất, đặt sân một cách hiệu quả nhất. Hệ thống quản lý sân, lịch biểu thông minh giảm thiểu tối đa thời gian chi phí, tăng doanh thu cho chủ sân - NV Sports Football.";
        $meta_keywords = "tìm kiếm đối thủ và đặt sân bóng đá trực tuyến, tim kiem doi thu va dat san bong da truc tuyen, nền tảng tạo đội tìm đối, NV Sports Football, đặt sân online, dat san online, đặt sân bóng online, đặt sân, dat san, dat san bong online, phần mềm quản lý sân, phan mem quan ly san, quản lý sân bóng, quan ly san bong";
        $meta_title = "NV Sports Football";
        $url_canonical = $request->url();
        // END SEO
        $system_yard = YardSystemModels::orderBy('yard_system_id','DESC')->get();
        // $yards = YardModels::orderBy('yard_id','DESC')->where('yard_status', '1')->paginate(4);
        $post_yardsys = PostYardSysModels::orderBy('post_yardsys_id','DESC')->where('post_yardsys_status', '1')->get();

        $sys = DB::table('tbl_yard_system')->join('tbl_post_yardsys', 'tbl_yard_system.yard_system_id', '=', 'tbl_post_yardsys.yard_system_id')->where('tbl_post_yardsys.post_yardsys_status', 1)->get();

        return view('index')->with(compact('meta_desc','meta_keywords','meta_title','url_canonical'))->with(compact('sys'));
    }

    public function home_for_the_yard(Request $request){
        // SEO
        $meta_desc = "Nền tảng thể thao dành chung cho mọi đối tượng. Ở đây, bạn có thể dễ dàng tìm chỗ chơi, tìm đồng đội hay đối thủ để chơi một cách vui vẻ nhất, đặt sân một cách hiệu quả nhất. Hệ thống quản lý sân, lịch biểu thông minh giảm thiểu tối đa thời gian chi phí, tăng doanh thu cho chủ sân - NV Sports Football.";
        $meta_keywords = "nền tảng tạo đội tìm đối, NV Sports Football, phần mềm quản lý sân, phan mem quan ly san, quản lý sân bóng, quan ly san bong, dành cho chủ sân, danh cho chu san";
        $meta_title = "Dành cho chủ sân - NV Sports Football";
        $url_canonical = $request->url();
        // END SEO
    	return view('the_yard.home_for_the_yard')->with(compact('meta_desc','meta_keywords','meta_title','url_canonical'));//1
    }

    public function registration(Request $request){
        // SEO
        $meta_desc = "Nền tảng thể thao dành chung cho mọi đối tượng. Ở đây, bạn có thể dễ dàng tìm chỗ chơi, tìm đồng đội hay đối thủ để chơi một cách vui vẻ nhất, đặt sân một cách hiệu quả nhất. Hệ thống quản lý sân, lịch biểu thông minh giảm thiểu tối đa thời gian chi phí, tăng doanh thu cho chủ sân - NV Sports Football.";
        $meta_keywords = "Đăng ký đặt sân bóng đá trực tuyến, dang ky dat san bong da truc tuyen, đăng ký NV Sports Football, đăng ký đặt sân online, dang ky dat san online, đăng ký đặt sân bóng online, đăng ký đặt sân, dang ky dat san, dang ky dat san bong online";
        $url_canonical = $request->url();
        // END SEO
        return view('user_registration')->with(compact('meta_desc','meta_keywords','url_canonical'));
    }

    public function login(Request $request){
        // SEO
        $meta_desc = "Nền tảng thể thao dành chung cho mọi đối tượng. Ở đây, bạn có thể dễ dàng tìm chỗ chơi, tìm đồng đội hay đối thủ để chơi một cách vui vẻ nhất, đặt sân một cách hiệu quả nhất. Hệ thống quản lý sân, lịch biểu thông minh giảm thiểu tối đa thời gian chi phí, tăng doanh thu cho chủ sân - NV Sports Football.";
        $meta_keywords = "Đăng nhập đặt sân bóng đá trực tuyến, dang nhap dat san bong da truc tuyen, đăng nhập NV Sports Football, đăng nhập đặt sân online, dang nhap dat san online";
        $url_canonical = $request->url();
        // END SEO
    	return view('user_login')->with(compact('meta_desc','meta_keywords','url_canonical'));//1
    }

    
    public function Error403(Request $request){
        // SEO
        $meta_desc = "Nền tảng thể thao dành chung cho mọi đối tượng. Ở đây, bạn có thể dễ dàng tìm chỗ chơi, tìm đồng đội hay đối thủ để chơi một cách vui vẻ nhất, đặt sân một cách hiệu quả nhất. Hệ thống quản lý sân, lịch biểu thông minh giảm thiểu tối đa thời gian chi phí, tăng doanh thu cho chủ sân - NV Sports Football.";
        $meta_keywords = "đặt sân bóng đá trực tuyến, dat san bong da truc tuyen, NV Sports Football, đặt sân online, dat san online, đặt sân bóng online, đặt sân, dat san, dat san bong online, tim san bong, tìm sân bóng";
        $meta_title = "Error403";
        $url_canonical = $request->url();
        // END SEO
        return view('Error.403')->with(compact('meta_desc','meta_keywords','meta_title','url_canonical'));//1
    }

    public function Error404(Request $request){
        // SEO
        $meta_desc = "Nền tảng thể thao dành chung cho mọi đối tượng. Ở đây, bạn có thể dễ dàng tìm chỗ chơi, tìm đồng đội hay đối thủ để chơi một cách vui vẻ nhất, đặt sân một cách hiệu quả nhất. Hệ thống quản lý sân, lịch biểu thông minh giảm thiểu tối đa thời gian chi phí, tăng doanh thu cho chủ sân - NV Sports Football.";
        $meta_keywords = "đặt sân bóng đá trực tuyến, dat san bong da truc tuyen, NV Sports Football, đặt sân online, dat san online, đặt sân bóng online, đặt sân, dat san, dat san bong online, tim san bong, tìm sân bóng";
        $meta_title = "Error404";
        $url_canonical = $request->url();
        // END SEO
        return view('Error.404')->with(compact('meta_desc','meta_keywords','meta_title','url_canonical'));//1
    }

    public function Error500(Request $request){
        // SEO
        $meta_desc = "Nền tảng thể thao dành chung cho mọi đối tượng. Ở đây, bạn có thể dễ dàng tìm chỗ chơi, tìm đồng đội hay đối thủ để chơi một cách vui vẻ nhất, đặt sân một cách hiệu quả nhất. Hệ thống quản lý sân, lịch biểu thông minh giảm thiểu tối đa thời gian chi phí, tăng doanh thu cho chủ sân - NV Sports Football.";
        $meta_keywords = "đặt sân bóng đá trực tuyến, dat san bong da truc tuyen, NV Sports Football, đặt sân online, dat san online, đặt sân bóng online, đặt sân, dat san, dat san bong online, tim san bong, tìm sân bóng";
        $meta_title = "Error500";
        $url_canonical = $request->url();
        // END SEO
        return view('Error.500')->with(compact('meta_desc','meta_keywords','meta_title','url_canonical'));//1
    }
    
    public function thankyou(Request $request){
        // SEO
        $meta_desc = "Nền tảng thể thao dành chung cho mọi đối tượng. Ở đây, bạn có thể dễ dàng tìm chỗ chơi, tìm đồng đội hay đối thủ để chơi một cách vui vẻ nhất, đặt sân một cách hiệu quả nhất. Hệ thống quản lý sân, lịch biểu thông minh giảm thiểu tối đa thời gian chi phí, tăng doanh thu cho chủ sân - NV Sports Football.";
        $meta_keywords = "đặt sân bóng đá trực tuyến, dat san bong da truc tuyen, NV Sports Football, đặt sân online, dat san online, đặt sân bóng online, đặt sân, dat san, dat san bong online, tim san bong, tìm sân bóng";
        $meta_title = "Cảm ơn!";
        $url_canonical = $request->url();
        // END SEO
        return view('thankyou')->with(compact('meta_desc','meta_keywords','meta_title','url_canonical'));//1
    }

    public function send_mail(Request $request){
         //send mail
        // $data['user_email'] = $request->user_email;
                $to_name = $request->contact_name;;
                $to_email = $request->contact_email;
                $phonenumber = $request->contact_phonenumber;
                $body = $request->contact_message;
                $file = $request->file('contact_filename');

                $data = array("email"=>$to_email, "name"=>$to_name,"sdt"=>$phonenumber,"body"=>$body,"file"=>$file); //body of mail.blade.php
                
                Mail::send('send_mail',$data,function($message) use ($to_email, $to_name){
                    $message->from($to_email,$to_name);
                    $message->to('drhappykun.tqn@gmail.com')->subject('Thư phản hồi từ khách hàng NV Sports Football');//send this mail with subject
                });
                //--send mail
                // return Redirect::to('/')->with('message','');
                return redirect()->back();

    }

    public function timsan(Request $request){

        // SEO
        $meta_desc = "Nền tảng thể thao dành chung cho mọi đối tượng. Ở đây, bạn có thể dễ dàng tìm chỗ chơi, tìm đồng đội hay đối thủ để chơi một cách vui vẻ nhất, đặt sân một cách hiệu quả nhất. Hệ thống quản lý sân, lịch biểu thông minh giảm thiểu tối đa thời gian chi phí, tăng doanh thu cho chủ sân - NV Sports Football.";
        $meta_keywords = "đặt sân bóng đá trực tuyến, dat san bong da truc tuyen, NV Sports Football, đặt sân online, dat san online, đặt sân bóng online, đặt sân, dat san, dat san bong online, tim san bong, tìm sân bóng";
        $meta_title = "Đặt sân nhanh";
        $url_canonical = $request->url();
        // END SEO

        $system_yard = YardSystemModels::orderBy('yard_system_id','DESC')->get();
        $yards = YardModels::orderBy('yard_id','DESC')->where('yard_status', '1')->paginate(4);
        $post_yardsys = PostYardSysModels::orderBy('post_yardsys_id','DESC')->where('post_yardsys_status', '1')->get();
        $quan = DB::table('tbl_quanhuyen')->get();

        return view('dat_san_bong.timsan')->with(compact('system_yard'))->with(compact('post_yardsys'))->with(compact('yards'))->with(compact('meta_desc','meta_keywords','meta_title','url_canonical'))->with(compact('quan'));//1
    }

    public function timsantheoquan(Request $request, $quan_id){

        // SEO
        $meta_desc = "Nền tảng thể thao dành chung cho mọi đối tượng. Ở đây, bạn có thể dễ dàng tìm chỗ chơi, tìm đồng đội hay đối thủ để chơi một cách vui vẻ nhất, đặt sân một cách hiệu quả nhất. Hệ thống quản lý sân, lịch biểu thông minh giảm thiểu tối đa thời gian chi phí, tăng doanh thu cho chủ sân - NV Sports Football.";
        $meta_keywords = "đặt sân bóng đá trực tuyến, dat san bong da truc tuyen, NV Sports Football, đặt sân online, dat san online, đặt sân bóng online, đặt sân, dat san, dat san bong online, tim san bong, tìm sân bóng";
        $meta_title = "Đặt sân nhanh";
        $url_canonical = $request->url();
        // END SEO

        $post_yardsys = PostYardSysModels::orderBy('post_yardsys_id','DESC')->where('post_yardsys_status', '1')->get();
        $quan = DB::table('tbl_quanhuyen')->get();
        
        $system_yard = YardSystemModels::orderBy('yard_system_id','DESC')->where('quan_id', $quan_id)->get();
        // print_r($system_yard);
        // die();
        // foreach ($system_yard as $sys_yard ) {
            # code...
            $yards = YardModels::where('quan_id',$quan_id)->where('yard_status', '1')->orderBy('yard_id','DESC')->paginate(4);
        // echo $sys_yard->yard_system_id;
        
        // }
        // die();
        // foreach ($yards as $key => $yard) {
        //     if($yard->yard_id){

            // }else{
            //     return Redirect::to('/404');
            // }
        // }
            return view('dat_san_bong.timsan')->with(compact('system_yard'))->with(compact('post_yardsys'))->with(compact('yards'))->with(compact('meta_desc','meta_keywords','meta_title','url_canonical'))->with(compact('quan'));
        
    }

    public function ifr_recommend_yard(Request $request){

        return view('dat_san_bong.ifr_recommend_yard');//1
    }

    public function chon_gio_da(Request $request, $yard_system_slug, $yard_slug, $yard_system_id, $yard_id){

        $this->AuthLogin();

        $quan = DB::table('tbl_quanhuyen')->get();
        $system_yard = YardSystemModels::find($yard_system_id);
        $yards = YardModels::find($yard_id);
        $time_and_price = DB::table('tbl_time_price')->where('time_price_status', '1')->where('yard_system_id', $yard_system_id)->where('yard_id', $yard_id)->orderby('time_price_hours','ASC')->take(9)->get();

        // SEO
        // foreach ($system_yard as $key1 => $val1) {
                $meta_desc = $system_yard->yard_system_desc;
                $image_og = ('../public/uploads/YardImg/'.$yards->yard_img);
                $meta_title = $system_yard->yard_system_name . ' - Sân bóng '. $yards->yard_mss . ' - Chọn giờ đặt sân';
                $url_canonical = $request->url();
        // }
        // END SEO

        return view('dat_san_bong.chon_gio_da')->with(compact('system_yard'))->with(compact('yards'))->with('quan', $quan)->with('time_and_price', $time_and_price)->with(compact('meta_desc','meta_title','url_canonical', 'image_og'));
    }

    public function xac_nhan_lich_da(Request $request, $yard_system_slug, $yard_slug, $yard_system_id, $yard_id, $time_price_id){

        $this->AuthLogin();

        $quan = DB::table('tbl_quanhuyen')->get();
        $system_yard = YardSystemModels::find($yard_system_id);
        $yards = YardModels::find($yard_id);
        $time_and_price = YardTimeAndPriceModels::find($time_price_id);

            $meta_desc = $system_yard->yard_system_desc;
            $image_og = ('../public/uploads/YardImg/'.$yards->yard_img);
            $meta_title = $system_yard->yard_system_name . ' - Sân bóng '. $yards->yard_mss . ' - Xác nhận lịch đặt';
            $url_canonical = $request->url();
        

        return view('dat_san_bong.xacnhanlichdat')->with(compact('system_yard'))->with(compact('yards'))->with('quan', $quan)->with(compact('time_and_price'))->with(compact('meta_desc','meta_title','url_canonical', 'image_og'));//1
    }

    public function ifr_calendar(Request $request, $yard_system_id, $yard_id, $time_price_id, $user_id){

        // $yards = YardModels::find($yard_id);
        // $time_and_price = YardTimeAndPriceModels::find($time_price_id)->with(compact('time_and_price'))->with(compact('user_id'));
        return view('dat_san_bong.ifr_calendar')->with(compact('yard_system_id','yard_id', 'time_price_id', 'user_id'));//1
    }

     public function save_schedule(Request $request){
        $data = array();
            $data['schedule_date'] = $request->date;
            $data['user_id'] = $request->userID;
            $data['time_price_id'] = $request->timePriceID;
            $data['yard_id'] = $request->yardID;
            $data['yard_system_id'] = $request->yardSysID;
            // $t=time();   
            $data['date_time_current'] = date('Y-m-d h:i:s', time());;

            $save_schedule =  DB::table('tbl_schedule')->insert($data);

            DB::table('tbl_time_price')->where('time_price_id', $request->timePriceID)->update(['time_price_status'=>2]);

        return Redirect::to('/thank');//1
    }

    public function gioi_thieu_hts(Request $request, $yard_system_slug, $yard_system_id, $post_yardsys_id){

        $system_yard = YardSystemModels::find($yard_system_id);
        $post_yardsys = PostYardSysModels::find($post_yardsys_id);
        $admin = DB::table('tbl_admin')->where('admin_id',$system_yard->admin_id)->first();
        // SEO
        $meta_desc = $system_yard->yard_system_desc;
        $meta_keywords = $post_yardsys->post_yardsys_metakeyword;
        $meta_title = $system_yard->yard_system_name;
        $image_og = ('../public/uploads/YardSystemImg/'.$system_yard->yard_system_img);
        $url_canonical = $request->url();
        // END SEO

        return view('dat_san_bong.gioi_thieu_hts')->with(compact('system_yard'))->with(compact('post_yardsys'))->with(compact('admin'))->with(compact('meta_desc','meta_title','meta_keywords','url_canonical', 'image_og'));;
    }

}

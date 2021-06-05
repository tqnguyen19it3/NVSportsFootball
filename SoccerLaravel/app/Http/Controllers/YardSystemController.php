<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Models\YardModels;
use App\Models\YardSystemModels;
use App\Models\PostYardSysModels;
use App\Models\YardTimeAndPriceModels;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class YardSystemController extends Controller
{
    //
    public function AuthLogin(){
        $admin_id = Session::get('admin_id');  
        if($admin_id){                                      
            return Redirect::to('/admin-dashboard');              
        }else return Redirect::to('/login-admin')->send();   
    }

    public function add_system_yard(){
        $this->AuthLogin();
        $quan = DB::table('tbl_quanhuyen')->get();
        return view('admin.yard.add_system_yard')->with('quan', $quan);
    }

    public function save_system_yard(Request $request, $admin_id){
    	$this->AuthLogin();

    	$data = $request->all();
    	$system_yard = new YardSystemModels();
    	$system_yard->admin_id = $admin_id;
    	$system_yard->yard_system_name = $data['yardsystem_name'];
        $system_yard->yard_system_slug = $data['yardsystem_slug'];
        $system_yard->quan_id = $data['yardsystem_quan'];
    	$system_yard->yard_system_desc = $data['yardsystem_desc'];
    	$system_yard->yard_system_address = $data['yardsystem_address'];
    	$system_yard->yard_system_maps = $data['yardsystem_maps'];

    	$get_image = $request->file('yardsystem_img');

        if($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image)); //current(explode('.', $get_name_image)); chia chuỗi ra để cắt đuôi từ dấu chấm
            $new_custom_name_image = $name_image.'('.rand(0,99).')'.'.'.$get_image->getClientOriginalExtension(); 
            //getClientOriginalExtention():lấy đuôi mở rộng
            $get_image->move('../public/uploads/YardSystemImg', $new_custom_name_image);
           	$system_yard->yard_system_img = $new_custom_name_image;
            $system_yard->save();
            Session::put('message', 'Đã thêm hệ thống sân');
            return redirect()->back();
        }else{
        	Session::put('messageError','Làm ơn hãy thêm hình ảnh cho hệ thống sân!');
        	return redirect()->back();
        }
    }

    public function view_system_yard(){
        $this->AuthLogin();
        
        $view_system_yard = YardSystemModels::orderBy('yard_system_id','DESC')->get();
    	
    	return view('admin.yard.view_system_yard')->with(compact('view_system_yard'));
    }

    public function edit_system_yard($yard_system_id){
        $this->AuthLogin();
        $quan = DB::table('tbl_quanhuyen')->get();
        $system_yard = YardSystemModels::find($yard_system_id);
    	
    	return view('admin.yard.edit_system_yard')->with(compact('system_yard'))->with('quan',$quan);
    }
    
    public function update_system_yard(Request $request, $yard_system_id){

        $data = $request->all();
    	$system_yard = YardSystemModels::find($yard_system_id);
    	$system_yard->yard_system_name = $data['yardsystemName'];
        $system_yard->yard_system_slug = $data['yardsystemSlug'];
        $system_yard->quan_id = $data['yardsystemQuan'];
    	$system_yard->yard_system_desc = $data['yardsystemDesc'];
    	$system_yard->yard_system_address = $data['yardsystemAddress'];
    	$system_yard->yard_system_maps = $data['yardsystemMaps'];
    	$get_image1 = $request->file('yardsystemImg');

        if($get_image1){
            $get_name_image1 = $get_image1->getClientOriginalName();
            $name_image1 = current(explode('.', $get_name_image1)); //current(explode('.', $get_name_image)); chia chuỗi ra để cắt đuôi từ dấu chấm
            $new_custom_name_image1 = $name_image1.'('.rand(0,99).')'.'.'.$get_image1->getClientOriginalExtension(); 
            //getClientOriginalExtention():lấy đuôi mở rộng
            $get_image1->move('../public/uploads/YardSystemImg', $new_custom_name_image1);
            $system_yard->yard_system_img = $new_custom_name_image1;
            $system_yard->save();
            Session::put('message', 'Đã cập nhật mới thông tin hệ thống sân bóng');
            return redirect('/view-system-yard');
        }else{

	        $system_yard->save();
	    	Session::put('message','Nhưng bạn chưa làm mới hình ảnh hệ thống sân!');
	    	return redirect('/view-system-yard');
	    }
    }

    public function delete_system_yard($yard_system_id){

    	$system_yard = YardSystemModels::find($yard_system_id);
    	$system_yard_img = $system_yard->yard_system_img;

    	//===CHỖ NÀY ĐỂ XÓA LUÔN ẢNH TRONG FOLDER KHI XÓA BÀI VIẾT===//

    	if($system_yard_img){
    		$path = '../public/uploads/YardSystemImg/'.$system_yard_img;
    		unlink($path);
    	}

    	$system_yard->delete();
    	
    	Session::put('message', 'Đã xóa hệ thống sân này.');
    	return redirect()->back();
    }


    public function add_yard(){
        $this->AuthLogin();
        $system_yard = YardSystemModels::orderBy('yard_system_id','DESC')->get();
        return view('admin.yard.add_yard')->with(compact('system_yard'));
    }

    public function save_yard(Request $request){
    	$this->AuthLogin();

        // $quan = DB::table('tbl_quanhuyen')->get();
        
    	$data = $request->all();
    	$yards = new YardModels();
    	$yards->yard_mss = $data['yard_mss'];
    	$yards->yard_slug = $data['yard_slug'];
    	$yards->yard_system_id = $data['system_yard_id'];
        $yard_sys = DB::table('tbl_yard_system')->where('yard_system_id', $data['system_yard_id'])->first();
        $yards->quan_id = $yard_sys->quan_id;
    	$yards->yard_surface = $data['yard_surface'];
    	$yards->yard_limit = $data['yard_limit'];
        $yards->yard_desc = $data['yard_desc'];
    	$yards->yard_utilities = $data['yard_utilities'];
    	$yards->yard_status = $data['yard_status'];

    	$get_image1 = $request->file('yard_img');

        if($get_image1){
            $get_name_image1 = $get_image1->getClientOriginalName();
            $name_image1 = current(explode('.', $get_name_image1)); //current(explode('.', $get_name_image)); chia chuỗi ra để cắt đuôi từ dấu chấm
            $new_custom_name_image1 = $name_image1.'('.rand(0,99).')'.'.'.$get_image1->getClientOriginalExtension(); 
            //getClientOriginalExtention():lấy đuôi mở rộng
            $get_image1->move('../public/uploads/YardImg', $new_custom_name_image1);
            $yards->yard_img = $new_custom_name_image1;
            $yards->save();
            Session::put('message', 'Đã thêm sân bóng vào hệ thống sân của bạn!');
            return redirect()->back();
        }else{
        	Session::put('messageError','Làm ơn hãy thêm hình ảnh cho sân bóng!');
        	return redirect()->back();
        }
    }
    
    public function all_yard(){
        $this->AuthLogin();

        $all_yard = YardModels::orderBy('yard_id','DESC')->get();
        $all_yard1 = YardSystemModels::orderBy('yard_system_id','DESC')->get();
    	
    	return view('admin.yard.all_yard')->with(compact('all_yard'))->with(compact('all_yard1'));
    }

    public function edit_yard($yard_id){
        $this->AuthLogin();

        $yards = YardModels::find($yard_id);
    	
    	return view('admin.yard.edit_yard')->with(compact('yards'));
    }
    public function update_yard(Request $request, $yard_id){

        $data = $request->all();
    	$yards = YardModels::find($yard_id);
    	$yards->yard_mss = $data['yardMss'];
    	$yards->yard_slug = $data['yardSlug'];
    	// $yards->yard_system_id = $data['system_yard_id'];
    	$yards->yard_surface = $data['yardSurface'];
    	$yards->yard_limit = $data['yardLimit'];
        $yards->yard_desc = $data['yardDesc'];
    	$yards->yard_utilities = $data['yardUtilities'];
    	$yards->yard_status = $data['yardStatus'];
    	$get_image1 = $request->file('yardImg');

        if($get_image1){
            $get_name_image1 = $get_image1->getClientOriginalName();
            $name_image1 = current(explode('.', $get_name_image1)); //current(explode('.', $get_name_image)); chia chuỗi ra để cắt đuôi từ dấu chấm
            $new_custom_name_image1 = $name_image1.'('.rand(0,99).')'.'.'.$get_image1->getClientOriginalExtension(); 
            //getClientOriginalExtention():lấy đuôi mở rộng
            $get_image1->move('../public/uploads/YardImg', $new_custom_name_image1);
            $yards->yard_img = $new_custom_name_image1;
            $yards->save();
            Session::put('message', 'Đã cập nhật mới thông tin sân bóng');
            return redirect('/all-yard');
        }else{

	        $yards->save();
	    	Session::put('message','Nhưng bạn chưa làm mới ảnh sân bóng!');
	    	return redirect('/all-yard');
	    }
    }

    public function unactive_yard($yard_id){
        $this->AuthLogin();
        DB::table('tbl_yard')->where('yard_id', $yard_id)->update(['yard_status'=>0]);
        Session::put('message', 'Sân này đã bị ẩn!');
        return redirect()->back();
    }
    public function active_yard($yard_id){
        $this->AuthLogin();
        DB::table('tbl_yard')->where('yard_id', $yard_id)->update(['yard_status'=>1]);
        Session::put('message', 'Sân này được hiển thị!');
        return redirect()->back();
    }

    public function delete_yard($yard_id){

    	$yards = YardModels::find($yard_id);
    	$yard_img = $yards->yard_img;

    	//===CHỖ NÀY ĐỂ XÓA LUÔN ẢNH TRONG FOLDER KHI XÓA BÀI VIẾT===//

    	if($yard_img){
    		$path = '../public/uploads/YardImg/'.$yard_img;
    		unlink($path);
    	}

    	$yards->delete();
    	
    	Session::put('message', 'Đã xóa sân này ra khỏi hệ thống.');
    	return redirect()->back();
    }

    public function add_post_yardsys(){
        $this->AuthLogin();
        $system_yard = YardSystemModels::orderBy('yard_system_id','DESC')->get();
        return view('admin.yard.post.add_post_yardsys')->with(compact('system_yard'));
    }

    public function save_post_yardsys(Request $request){
        $this->AuthLogin();

        $data = $request->all();
        $post_sysyard = new PostYardSysModels();
        $post_sysyard->post_yardsys_metakeyword = $data['post_sys_metakeyword'];
        $post_sysyard->post_yardsys_content = $data['post_sys_content'];
        $post_sysyard->yard_system_id = $data['system_yard_id'];
        $post_sysyard->post_yardsys_status = $data['post_sys_status'];

        $post_sysyard->save();
        Session::put('message', 'Đã thêm bài viết giới thiệu cho hệ thống sân của bạn!');
        return redirect()->back();
        
    }
    
    public function all_post_yardsys(){
        $this->AuthLogin();

        $all_yard_system = YardSystemModels::orderBy('yard_system_id','DESC')->get();
        $all_post_yardsys = PostYardSysModels::orderBy('post_yardsys_id','DESC')->get();

        return view('admin.yard.post.all_post_yardsys')->with(compact('all_yard_system'))->with(compact('all_post_yardsys'));
    }

    public function edit_post_yardsys($yard_system_id, $post_yardsys_id){
        $this->AuthLogin();

        $system_yard =  YardSystemModels::find($yard_system_id);
        $post_yardsys = PostYardSysModels::find($post_yardsys_id);
        
        return view('admin.yard.post.edit_post_yardsys')->with(compact('post_yardsys'))->with(compact('system_yard'));
    }
    public function update_post_yardsys(Request $request, $post_yardsys_id){

        $data = $request->all();
        $post_sysyard = PostYardSysModels::find($post_yardsys_id);
        $post_sysyard->post_yardsys_metakeyword = $data['post_sys_metakeyword'];
        $post_sysyard->post_yardsys_content = $data['post_sys_content'];
        $post_sysyard->post_yardsys_status = $data['post_sys_status'];

        $post_sysyard->save();
            Session::put('message','Bạn đã cập nhật bài viết cho hệ thống sân!');
            return redirect('/all-post-yardsys');
    }

    public function delete_post_yardsys($post_yardsys_id){

        $post_sysyard = PostYardSysModels::find($post_yardsys_id);
        $post_sysyard->delete();
        
        Session::put('message', 'Bạn vừa xóa thành công một bài viết giới thiệu hệ thống sân.');
        return redirect()->back();
    }

     public function add_time_and_price_yard($yard_system_id, $yard_id){

        $this->AuthLogin();

        $system_yards = YardModels::find($yard_id);
        $time_and_price = YardTimeAndPriceModels::orderBy('time_price_hours','ASC')->where('yard_system_id',$yard_system_id)->where('yard_id',$yard_id)->get();

        return view('admin.yard.add_time_price_yard')->with(compact('system_yards'))->with(compact('time_and_price'));

    }

    public function save_time_and_price_yard(Request $request, $yard_system_id, $yard_id){
        $this->AuthLogin();

        $data = $request->all();
        $time_and_price = new YardTimeAndPriceModels();
        $time_and_price->yard_id = $yard_id;
        $time_and_price->yard_system_id = $yard_system_id;
        $time_and_price->time_price_hours = $data['time_price_hours'];
        $time_and_price->time_price_pay = $data['time_price_pay'];
        $time_and_price->time_price_status = $data['time_price_status'];

        $time_and_price->save();
        Session::put('message', 'Đã thêm giờ và giá cho sân bóng này của bạn!');
        // return Redirect::to('/add-time-and-price');
        return redirect()->back();
    }

    public function unactive_time_and_price_yard($time_price_id){
        $this->AuthLogin();
        DB::table('tbl_time_price')->where('time_price_id', $time_price_id)->update(['time_price_status'=>0]);
        Session::put('message', 'Lịch và giá sân ở khung giờ này đã bị ẩn!');
        return redirect()->back();
    }
    public function active_time_and_price_yard($time_price_id){
        $this->AuthLogin();
        DB::table('tbl_time_price')->where('time_price_id', $time_price_id)->update(['time_price_status'=>1]);
        Session::put('message', 'Lịch và giá sân ở khung giờ này đã được hiển thị!');
        return redirect()->back();
    }

    public function delete_time_and_price_yard($time_price_id){

        $time_and_price = YardTimeAndPriceModels::find($time_price_id);

        $time_and_price->delete();
        
        Session::put('message', 'Lịch và giá sân ở khung giờ này đã được xóa.');
        return redirect()->back();
    }

    public function file_browser(Request $request){
        
        $paths = glob(public_path('../public/uploads/YardSystemImg/IMGckeditor/*'));
        $fileNames = array();
        foreach ($paths as $path) {
            array_push($fileNames, basename($path));
        }
        $data = array(
            'fileNames' =>  $fileNames
        );
        return view('admin.yard.ImgCkeditor.file_browser')->with( $data);
    }

    public function ckeditor_image(Request $request){
        
        if($request->hasFile('upload')){

            $originName = $request->file('upload')->getClientOriginalName();

            $fileName =  pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName.'_'.time().'.'.$extension;

            $request->file('upload')->move('../public/uploads/YardSystemImg/IMGckeditor', $fileName);
            $CKEditorFuncNum = $request->input('CKEditorFuncNum');

            $url = asset('../public/upload/YardSystemImg/IMGckeditor/'.$fileName);
            $msg = 'Tải ảnh hệ thống sân thành công';
            $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url','$msg')</script>";
            @header('Content-type: text/html; charset=utf-8');
            echo $response;

        }
    }
}

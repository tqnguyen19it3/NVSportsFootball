@extends('admin_layout')
@section('admin_content')
<div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Thông tin sân - người đã đặt</h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
                <div class="x_panel">
                  <div class="x_content">
                      <div class="col-md-12 col-sm-12  text-center">
                      </div>

                      <div class="clearfix"></div>

                      @foreach($k as $key => $b)
                      <div class="col-md-4 col-sm-4  profile_details">
                        <div class="well profile_view">
                          <div class="col-sm-12">
                            <h4 class="brief"><i>Thông tin người đặt lúc {{$b->date_time_current}}</i></h4>
                            <div class="left col-sm-7">
                              <h2>Người đặt: {{$b->user_name}}</h2>
                              <p>MSS đã đặt: {{$b->yard_mss}} </p>
                              <ul class="list-unstyled">
                                <li><i class="fa fa-calendar-check-o"></i> Ngày đặt: {{$b->schedule_date}}</li>
                                <li><i class="fa fa-building"></i> Giờ đặt: {{$b->time_price_hours}}</li>
                                <li><i class="fa fa-phone"></i> Số điện thoại: {{$b->user_phone}}</li>
                              </ul>
                              <button type="button" class="btn btn-success btn-sm"> <i class="fa fa-comments-o"></i> Liên hệ</button>
                            </div>
                            <div class="right col-sm-5 text-center">
                              {{-- <img src="{{asset('../public/back-end/production/images/user.png')}}" alt="" class="img-circle img-fluid"> --}}
                              <img src="{{asset('../public/uploads/avatar-user/'. $b->user_avatar)}}" alt="" class="img-circle img-fluid">
                            </div>
                          </div>
                          <div class=" bottom text-center">
                            <div class=" col-sm-6 emphasis">
                            </div>
                            <div class=" col-sm-6 emphasis">
                              
                            </div>
                          </div>
                        </div>
                      </div>
                      @endforeach
                  </div>
                </div>
            </div>
          </div>
@endsection
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">

  <link rel="stylesheet" href="{{asset('../public/front-end/css/style.css')}}">
 
  <title>Calender</title>
  
  <style type="text/css">

    html, body, div, span, applet, object, iframe,
    h1, h2, h3, h4, h5, h6, p, blockquote, pre,
    a, abbr, acronym, address, big, cite, code,
    del, dfn, em, img, ins, kbd, q, s, samp,
    small, strike, strong, sub, sup, tt, var,
    b, u, i, center,
    dl, dt, dd, ol, ul, li,
    fieldset, form, label, legend,
    table, caption, tbody, tfoot, thead, tr, th, td,
    article, aside, canvas, details, embed,
    figure, figcaption, footer, header, hgroup,
    menu, nav, output, ruby, section, summary,

    time, mark, audio, video {
      margin: 0;
      padding: 0;
      border: 0;
      vertical-align: baseline;
    }
    body {
      font-size: 100%;
    }

    article, aside, details, figcaption, figure,
    footer, header, hgroup, menu, nav, section {
      display: block;
    }
    body {
      line-height: 1.5;
      font-family: 'Oswald', Arial, Helvetica, sans-serif;
    }
    ol, ul {
      list-style: none;
    }
    blockquote, q {
      quotes: none;
    }
    blockquote:before, blockquote:after,
    q:before, q:after {
      content: '';
      content: none;
    }
    table {
      border-spacing: 2px;
    }
    .clearfix:before,
    .clearfix:after {
      content: " "; 
      display: table; 
    }

    .clearfix:after {
      clear: both;
    }

    .clearfix {
      *zoom: 1;
    }
    a, a:hover {
      text-decoration: none;
    }
    .img-responsive {
      max-width: 100%;
      height: auto;
    }
 
    body{
      font-family: 'Oswald', Arial, Helvetica, sans-serif;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    .elegant-calencar {
      width: 44em;
      height: 25em;
      text-align: center;
      margin-left: 23%;
      position: relative;
    }

    #header {
      height: 3em;
      margin-bottom: 1em;
    }

    .pre-button, .next-button {
      margin-top: 15px;
      font-size: 3em;
      -webkit-transition: -webkit-transform 0.5s;
      transition: transform 0.5s;
      cursor: pointer;
      width: 1em;
      height: 1em;
      line-height: 1em;
      color: #373542;

    }

    .pre-button:hover, .next-button:hover {
      -webkit-transform: rotate(360deg);
      -ms-transform: rotate(360deg);
      transform: rotate(360deg);
    }

    .pre-button:active,.next-button:active{
      -webkit-transform: scale(0.7);
      -ms-transform: scale(0.7);
      transform: scale(0.7);
    }

    .pre-button {
      float: left;
      margin-left: 0.3em;
      visibility: hidden;
    }

    .next-button {
      float: right;
      margin-right: 0.3em;
    }

    .head-info {
      float: left;
      width: 16em;
    }

    .head-month {
      margin-top: 22px;
      text-align: right;
      font-size: 1.4em;
      font-weight: 800;
      line-height: 1;
      color: #373542;
      width: 100%;
      margin-left: 40%;
    }

    #calendar {
      width: 92%;
      margin-top: 20px;
      margin-left: 45px;
    }

    #calendar tr {
      height: 2.5em;
      line-height: 2em;
      font-size: 18px;
      font-weight: 450;

    }

    table {
     border-spacing: 10px 10px;
   }

   thead tr {
    color: #ffcc33;
    font-weight: 700;
    text-transform: uppercase;
    font-family: 'Oswald', Arial, Helvetica, sans-serif;
  }

  tbody tr {
    color: #252a25;
    font-family: 'Oswald', Arial, Helvetica, sans-serif;
  }

  tbody td{
    width: 14%;
    height: 35px;
    border: 1px solid #ccc;
    padding-top: 5px;
    cursor: pointer;
    font-size: 18px;
    -webkit-transition:all 0.2s ease-in;
    transition:all 0.2s ease-in;
    font-family: 'Oswald', Arial, Helvetica, sans-serif;
  }

  .selected {
    color: #fff;
    background-color: #2a3246;
    border: none;
  }

  tbody td:active {
    -webkit-transform: scale(0.7);
    -ms-transform: scale(0.7);
    transform: scale(0.7);
  }

  #today {
    background-color: #373542;
    color: #ffcc33;
    font-family: 'Oswald', Arial, Helvetica, sans-serif;
  }

  #disabled {
    cursor: default;
    background: #fff;
  }

  #disabled:hover {
    background: #fff;
    color: #c9c9c9;
  }

  #reset {
    display: none;
    position: absolute;
    right: 0.5em;
    top: 0.5em;
    z-index: 999;
    color: #fff;
    font-family: serif;
    cursor: pointer;
    padding: 0 0.5em;
    height: 1.5em;
    border: 0.1em solid #fff;
    border-radius: 4px;
    -webkit-transition: all 0.3s ease;
    transition: all 0.3s ease;

  }

  #reset:hover {
    color: #e66b6b;
    border-color: #e66b6b;
  }

  #reset:active{
    -webkit-transform: scale(0.8);
    -ms-transform: scale(0.8);
    transform: scale(0.8);     
  }

  .calencar-top {
    float: left;
    width: 29%;
    height: 390px;
  }

  .head-day {
    margin-top: 10px;
    font-size: 6em;
    line-height: 1;
    color: #ffcc33;
    text-align: center;
    font-weight: 700; 
  }

  .ngay-dat {
    width: 80%;
    height: 145px;
    margin-left: 12%;
    border-bottom: 1.5px solid #ffcc33;
  }

  .ngay-dat h3 {
    text-transform: uppercase;
    margin-top: 25px;
    text-align: center;
    font-size: 20px;
    font-weight: 700;
    font-family: 'Oswald', Arial, Helvetica, sans-serif;
  }

  .abc {
    background-color: #fff;
    border: none;

  }

  tbody td:hover {
    background-color: #ffcc33;
    color: #373542;
  }

  .calencar-top-btn-dat-san{
    width: 140px;
    height: 37px;
    background-color: #373542;
    border: none;
    margin-left: 22.5%;
    border: 1.5px solid #ffcc33;
    text-transform: uppercase;
    margin-top: 20px;
    text-align: center;
    overflow: hidden;
    position: relative;
    display:inline-block;
    vertical-align:middle;
    -webkit-box-shadow: 0 0 5px #ffcc33;
      box-shadow: 0 0 5px #ffcc33;
    font:400 18px/50px 'Oswald', Arial, Helvetica, sans-serif;
    line-height: 35px;
    color: #ffcc33;
  }

  .calencar-top-btn-dat-san:after,
  .calencar-top-btn-dat-san:after {
    background: #fff !important;
    content: "";
    height: 155px;
    left: -75px;
    opacity: .2;
    top: -50px;
    width: 50px;
    z-index:5;
    position: absolute;
    -webkit-transform: rotate(35deg);
    transform: rotate(35deg);
    -webkit-transition: all 550ms cubic-bezier(0.19, 1, 0.22, 1);
    transition: all 550ms cubic-bezier(0.19, 1, 0.22, 1);
  }
  .calencar-top-btn-dat-san:hover:after,
  .calencar-top-btn-dat-san:hover:after {
    left: 120%;
    -webkit-transition: all 550ms cubic-bezier(0.19, 1, 0.22, 1);
    transition: all 550ms cubic-bezier(0.19, 1, 0.22, 1);
  }
  
  .co-doi-thu {
    float: left;
    margin-left: 7%;
    width: 110px;
    font-size: 14px;
    line-height: 37px;
    display: none;
  }

  .chua-co-doi-thu {
    float: left;
    width: 110px;
    margin-left: 4%;
    font-size: 14px;
    line-height: 37px;
    display: none;
  }

  @media screen and (max-width: 800px) {
    #calendar {
      width: 72%;
    }
    .next-button {
      margin-right: 21%;
    }
    .head-info {
      width: 150px;
      margin-top: 5px;
    }
    .calendar-dat-san {
      margin-left: 18%;
    }
    .co-doi-thu, .chua-co-doi-thu {
      margin-left: 27%;
    }
    .ngay-dat {
      margin-top: 37px;
    }
  }

  @media screen and (max-width: 736px) {
    #calendar {
      width: 70%;
    }
    .next-button {
      margin-right: 23%;
    }
  }

  @media screen and (max-width: 720px) {
    #calendar {
      width: 68%;
    }
    .next-button {
      margin-right: 25%;
    }
  }

  @media screen and (max-width: 667px) {
    #calendar {
      width: 62%;
    }
    .next-button {
      margin-right: 31%;
    }
  }

  @media screen and (max-width: 600px) {
    #calendar {
      width: 56%;
    }
    .next-button {
      margin-right: 37%;
    }
    .head-info {
      width: 150px;
      margin-top: 5px;
    }
    .calendar-dat-san {
      margin-left: 8%;
    }
    .co-doi-thu, .chua-co-doi-thu {
      margin-left: 19%;
    }
    .ngay-dat {
      margin-top: 37px;
    }
  }

  @media screen and (max-width: 414px) {
    #calendar {
      width: 50%;
      z-index: 71;
    }
    .pre-button {
      margin-left: -100px;
      margin-top: 240px;
    }
    .next-button {
      margin-right: 0px;
      margin-top: 238px;
    }
    .head-info {
      width: 150px;
      margin-top: 230px;
      margin-left: -67px;
    }
    .calendar-dat-san {
      margin-left: 110px;
    }
    .co-doi-thu{
      margin-left: 60px;
      float: left;
    }
   .chua-co-doi-thu {
      margin-left: 180px;
      margin-top: -40px;
      float: left;
    }
    .ngay-dat {
      width: 150%;
      margin-top: 0px;
      margin-left: 110px;
    }

    .elegant-calencar {
      background-color: red;
      margin-left: 0px;
      height: 0px;
      margin-top: 0px;
      width: 100%;
    }

    #calendar {
      width: 100%;
      margin-left: 0px;
    }


  }

  @media screen and (max-width: 375px) {
    #calendar {
      width: 50%;
      z-index: 71;
    }
    .pre-button {
      margin-left: -100px;
      margin-top: 240px;
    }
    .next-button {
      margin-right: 0px;
      margin-top: 238px;
    }
    .head-info {
      width: 150px;
      margin-top: 230px;
      margin-left: -67px;
    }
    .calendar-dat-san {
      margin-left: 110px;
    }
    .co-doi-thu{
      margin-left: 60px;
      float: left;
    }
   .chua-co-doi-thu {
      margin-left: 180px;
      margin-top: -40px;
      float: left;
    }
    .ngay-dat {
      width: 150%;
      margin-top: 0px;
      margin-left: 110px;
    }

    .elegant-calencar {
      background-color: red;
      margin-left: 0px;
      height: 0px;
      margin-top: 0px;
      width: 100%;
    }

    #calendar {
      width: 100%;
      margin-left: 0px;
    }


  }

 
</style>
</head>

<body>
  <div class="calencar-top">
    <div class="ngay-dat">
      <h3>Ngày đặt</h3>
      <div class="head-day"></div>
    </div>
     <form action="{{URL::TO('/save-schedule')}}" method="post" class="form-horizontal form-label-left" enctype="multipart/form-data">
                          {{ csrf_field() }}
    <a class="calencar-top-btn-dat-san calendar-dat-san" onclick="hienthitimdoithu()"><span>Đặt sân</span></a>
    <a class="calencar-top-btn-dat-san co-doi-thu"><button type="submit" class="btn btn-success"><span>CÓ ĐỐI THỦ</span></button></a>
    <a class="calencar-top-btn-dat-san chua-co-doi-thu"><span onclick="oclChuaCoDoiThu()">Chưa có đối thủ</span></a>
      
      <input type="hidden" name="userID" value="{{$user_id}}" required="required" class="form-control">
      <input type="hidden" name="yardSysID" value="{{$yard_system_id}}" required="required" class="form-control">
      <input type="hidden" name="yardID" value="{{$yard_id}}" required="required" class="form-control  ">
      <input type="hidden" name="timePriceID" value="{{$time_price_id}}" required="required" class="form-control  ">
      <input type="hidden" name="date" id="asd" value="">
      
      
                            
    </form>
  </div>

  <script type="text/javascript">
    function hienthitimdoithu() {

      var cdt = document.getElementsByClassName("co-doi-thu");
      var ccdt = document.getElementsByClassName("chua-co-doi-thu");
      var ds = document.getElementsByClassName("calendar-dat-san");

      cdt[0].style.display = 'block';
      ccdt[0].style.display = 'block';
      ds[0].style.display = 'none';
    }

    function oclCoDoiThu() {
      alert("Bạn đã đặt sân Thành Công");
    }

    function oclChuaCoDoiThu() {
      alert("Thông tin của bạn đã được lưu lại");
    }
  </script>

  <div class="elegant-calencar">
    <p id="reset">reset</p>
    <div id="header" class="clearfix">
      <div class="pre-button" id="abbcc"><</div>
      <div class="head-info">
        <div class="head-month"></div>
      </div>
      <div class="next-button">></div>
    </div>
  <table id="calendar">
   <thead>
    <tr>
     <th>CN</th>
     <th>THỨ 2</th>
     <th>THỨ 3</th>
     <th>THỨ 4</th>
     <th>THỨ 5</th>
     <th>THỨ 6</th>
     <th>THỨ 7</th>
   </tr>
 </thead>
 <tbody>
  <tr>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
 </tr>
 <tr>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
 </tr>
 <tr>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
 </tr>
 <tr>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
 </tr>
 <tr>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
 </tr>
 <tr>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
 </tr>
</tbody>
</table>
</div>

<script type="text/javascript">
  // document.getElementById('asd').val() = "abc";
  document.addEventListener('DOMContentLoaded', function(){
    var today = new Date(),
    year = today.getFullYear(),
    month = today.getMonth(),
    monthTag =["Tháng 1","Tháng 2","Tháng 3","Tháng 4","Tháng 5","Tháng 6","Tháng 7","Tháng 8","Tháng 9","Tháng 10","Tháng 11","Tháng 12"],
    day = today.getDate(),
    days = document.getElementsByTagName('td'),
    selectedDay,
    setDate,
    daysLen = days.length;

    function Calendar(selector, options) {
      this.options = options;
      this.draw();
    }
    
    Calendar.prototype.draw  = function() {
      this.getCookie('selected_day');
      this.getOptions();
      this.drawDays();
      var that = this,
      reset = document.getElementById('reset'),
      pre = document.getElementsByClassName('pre-button'),
      next = document.getElementsByClassName('next-button');

      pre[0].addEventListener('click', function(){that.preMonth(); });
      next[0].addEventListener('click', function(){that.nextMonth(); });
      reset.addEventListener('click', function(){that.reset(); });
      while(daysLen--) {
        days[daysLen].addEventListener('click', function(){that.clickDay(this); });
      }
    };
    
    Calendar.prototype.drawHeader = function(e) {
      var headDay = document.getElementsByClassName('head-day'),
      headMonth = document.getElementsByClassName('head-month');

      // document.getElementById('asd').val() = headDay;
      //alert(headDay.html());

      e?headDay[0].innerHTML = e : headDay[0].innerHTML = day;
      // alert(headDay[0].innerHTML+headMonth[0].innerHTML);
      headMonth[0].innerHTML = monthTag[month] +" - " + year;
      headMonth[0].innerHTML = headMonth[0].innerHTML.replace("Tháng ", "");
      document.getElementById('asd').value=headDay[0].innerHTML+' - '+headMonth[0].innerHTML; 

    };




    
    Calendar.prototype.drawDays = function() {
      var startDay = new Date(year, month, 1).getDay(),

      nDays = new Date(year, month + 1, 0).getDate(),

      n = startDay;

      for(var k = 0; k <42; k++) {
        days[k].innerHTML = '';
        days[k].id = '';
        days[k].className = '';
      }

      for(var i  = 1; i <= nDays ; i++) {
        days[n].innerHTML = i; 
        n++;
      }  

      if (month === today.getMonth()) {
        for(var i = 1; i <= day + 1; i++) {
          days[i].innerHTML = "";
          // days[i].style.opacity = '0.2';
        }
      }    

      for(var j = 0; j < 42; j++) {
        if(days[j].innerHTML === ""){

                // days[j].id = "disabled";
                days[j].className = "abc";

              }else if(j === day + startDay - 1){
                if((this.options && (month === setDate.getMonth()) && (year === setDate.getFullYear())) || (!this.options && (month === today.getMonth())&&(year===today.getFullYear()))){
                  this.drawHeader(day);
                  days[j].id = "today";

                }
              }
              if(selectedDay){
                if((j === selectedDay.getDate() + startDay - 1)&&(month === selectedDay.getMonth())&&(year === selectedDay.getFullYear())){
                  days[j].className = "selected";
                  this.drawHeader(selectedDay.getDate());



                }
              }
            }


          };

          Calendar.prototype.clickDay = function(o) {
            var selected = document.getElementsByClassName("selected"),
            len = selected.length;
            if(len !== 0){
              selected[0].className = "";
            }
            o.className = "selected";
            selectedDay = new Date(year, month, o.innerHTML);
            this.drawHeader(o.innerHTML);
            this.setCookie('selected_day', 1);

          };

          Calendar.prototype.preMonth = function() {
            if(month < 1){ 
              month = 11;
              year = year - 1; 
            }else{
              month = month - 1;
              if (month <= today.getMonth()) {
                document.getElementById("abbcc").style.visibility = 'hidden';
              }
            }
            this.drawHeader(1);
            this.drawDays();
          };

          Calendar.prototype.nextMonth = function() {
            if(month >= 11){
              month = 0;
              year =  year + 1; 
            }else{
              month = month + 1;
              document.getElementById("abbcc").style.visibility = 'visible';
            }
            this.drawHeader(1);
            this.drawDays();
          };

          Calendar.prototype.getOptions = function() {
            if(this.options){
              var sets = this.options.split('-');
              setDate = new Date(sets[0], sets[1]-1, sets[2]);
              day = setDate.getDate();
              year = setDate.getFullYear();
              month = setDate.getMonth();
            }
          };

          Calendar.prototype.reset = function() {
           month = today.getMonth();
           year = today.getFullYear();
           day = today.getDate();
           this.options = undefined;
           this.drawDays();
         };

         Calendar.prototype.setCookie = function(name, expiredays){
          if(expiredays) {
            var date = new Date();
            date.setTime(date.getTime() + (expiredays*24*60*60*1000));
            var expires = "; expires=" +date.toGMTString();
          }else{
            var expires = "";
          }
          document.cookie = name + "=" + selectedDay + expires + "; path=/";
        };

        Calendar.prototype.getCookie = function(name) {
          if(document.cookie.length){
            var arrCookie  = document.cookie.split(';'),
            nameEQ = name + "=";
            for(var i = 0, cLen = arrCookie.length; i < cLen; i++) {
              var c = arrCookie[i];
              while (c.charAt(0)==' ') {
                c = c.substring(1,c.length);

              }
              if (c.indexOf(nameEQ) === 0) {
                selectedDay =  new Date(c.substring(nameEQ.length, c.length));
              }
            }
          }
        };
        var calendar = new Calendar();


      }, false);
    </script>
  </body>
  </html>
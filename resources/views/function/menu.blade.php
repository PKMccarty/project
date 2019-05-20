<link rel="stylesheet" href="{{ URL::asset('css/alertifyjs/css/themes/default.min.css') }}" type="text/css" />
<link rel="stylesheet" href="{{ URL::asset('css/alertifyjs/css/alertify.min.css') }}" type="text/css" />
<link rel="stylesheet" href="{{ URL::asset('css/alertifyjs/css/alertify.css') }}" type="text/css" />
<link rel="stylesheet" href="{{ URL::asset('css/login.css') }}" type="text/css" />
<script src="{{URL::asset('js/alertify.js')}}"></script>
<script src="{{URL::asset('js/alertify.min.js')}}"></script>
<div class="topnav" id="myTopnav">
  <a href="#" class="active">หน้าหลัก</a>
  <a href="#">สินค้า</a>
  <a href="#">ข่าวสาร</a>
  <a id="login" class="mtext">เข้าสู่ระบบ</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>
<div id="login-form">
  <form id = "loginfrm">
    <div class="container">
      <h1>เข้าสู่ระบบ</h1>
      <hr>
      <label for="email"><b>ชื่อผู้ใช้งาน</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>
      <label for="psw"><b>รหัสผ่าน</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
      <div class="clearfix">
        <button type="submit" class="signupbtn">เข้าสู่ระบบ</button>
      </div>
      <hr>
      <div class="forget-regis">
        <a href="#">ลืมรหัสผ่าน</a>
        <a>|</a>
        <a href="#">สมัครสมาชิก</a>
      </div>
    </div>
  </form>
</div>
<script type="text/javascript">
    $(document).ready(function(){
      $('#login').click(function(){
    alertify.genericDialog || alertify.dialog('genericDialog',function(){
    return {
        main:function(content){
            this.setContent(content);
        },
        setup:function(){
            return {
                focus:{
                    element:function(){
                        return this.elements.body.querySelector(this.get('selector'));
                    },
                    select:true
                },
                options:{
                    basic:true,
                    maximizable:false,
                    resizable:false,
                    padding:false
                }
            };
        },
        settings:{
            selector:undefined
        }
    };
});
alertify.genericDialog ($('#loginfrm')[0]).set('selector', 'input[type="text"]');
      });
    })
</script>



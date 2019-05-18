<link rel="stylesheet" href="{{ URL::asset('css/login.css') }}" type="text/css" />
<div class="topnav" id="myTopnav">
  <a href="#" class="active">หน้าหลัก</a>
  <a href="#">สินค้า</a>
  <a href="#">ข่าวสาร</a>
  <a href="#" class="mtext" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">เข้าสู่ระบบ</a>
  <div id="id01" class="modal">
  <form class="modal-content animate" action="">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>
    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        
      <button type="submit">Login</button>
    </div>
  </form>
</div>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>
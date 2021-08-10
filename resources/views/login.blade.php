<link rel="stylesheet" type="text/css" href="style1.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- 	<div class="wrapper fadeInDown">
 			<form action="" method="POST">
				@csrf
				@if(session('saimatkhau'))
				<strong>{{session('saimatkhau')}}</strong>
				@endif
				<input  class="fadeIn first" type="text" name="name" placeholder="nhập số điện thoại" required>
				<input  class="fadeIn second" type="password" name="password" placeholder="nhập mật khẩu" required>
				<input  class="fadeIn third" type="submit" name="" value="Đăng Nhập"> 
			</form>
		</div>
	</div> -->		
	<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Login</h5>
            <form class="form-signin" action="" method="POST">
            	@csrf
				@if(session('saimatkhau'))
				<strong>{{session('saimatkhau')}}</strong>
				@endif
              <div class="form-label-group">
                <input type="text" name="name" id="inputEmail" class="form-control" placeholder="nhập số điện thoại" required autofocus>
                <label for="inputEmail">Số điện thoại</label>
              </div>

              <div class="form-label-group">
                <input type="password" name="password" id="inputPassword" class="form-control" placeholder="nhập mặt khẩu" required>
                <label for="inputEmail">Nhập mật khẩu</label>
              </div>
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Login</button>
              <hr class="my-4">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
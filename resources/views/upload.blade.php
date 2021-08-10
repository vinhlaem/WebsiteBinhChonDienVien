
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="/style1.css"></li>
<link rel="stylesheet" type="text/css" href="/style.css"></li>
<div class="text-center">
<nav style="background: #21212100!important;" class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/"><img style="width: 100px;" src="/image/logo_gold.png"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul style="color: black" class="nav navbar-nav navbar-center">
      <li class="nav-item active">
        <a class="nav-link" href="/">Trang chủ <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/admin/uploadidol">Thêm diễn viên</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/admin/upload">Đăng bài</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/admin/postmanager">Quản lí bài đăng</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/logout">Đăng xuất</a>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link" href="">{{Auth::user()->id}}</a>
      </li> -->
    </ul>
  </div>
</nav>
</div>
<div class="wapperform col-md-6 offset-md-3">
<form action="" method="post" enctype="multipart/form-data">
	@csrf
	<input style="width: 100%" type="text" name="title" placeholder="nhập tiêu đề" class="form-control">
	<textarea style="width: 100%" type="text" name="content" placeholder="nhập nội dung" class="form-control"></textarea>
	<input type="file" name="img" placeholder="đăng ảnh tại đây" class="form-control">
	<div style="width: 100%; display: flex;">
		<button type="submit" class="btn btn-primary mx-auto">Đăng bài</button>
	</div>
</form>
</div>

<div id="footer" class="container">
		<div class="row text-center">
			<div class="col-sm-12">
				<p>Copy right &copy; 2019 by Vinhso</p>
			</div>
		</div>
</div>
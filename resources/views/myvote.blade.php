<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="style1.css">

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
        <a class="nav-link" href="tintuc">Tin tức</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Giới thiệu</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Thể lệ</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Hạng mục giải</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/logout">Đăng xuất</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="">{{Auth::user()->id}}</a>
      </li>
    </ul>
  </div>
</nav>
</div>
<div class="text-center"><h2>Danh sách bình chọn của bạn</h2></div>

<div class="container">
	@if(session('tb'))
		<div style="text-align: center;" class="alert-danger">{{session('tb')}}</div>
		@endif
<div class="row">
	@foreach(DB::table('categories')->get() as $ctg)
	<div class="col-sm">
		<p>{{$ctg->hang_muc}}</p>
		
		@if($vote= DB::table('votes')->where('user_id',Auth::user()->id)->where('category_id',$ctg->id)->get()->first())
			@if($idol=DB::table('idols')->find($vote->idol_id))
		<p>{{$idol->name}}</p>
		<img src="/image/{{$idol->img}}" class="img-thumbnail">
		@endif
		@endif
	</div>
	@endforeach
</div>
</div>
<div id="footer" class="container">
		<div class="row text-center">
			<div class="col-sm-12">
				<p>Copy right &copy; 2019 by Vinhso</p>
			</div>
		</div>
	</div>
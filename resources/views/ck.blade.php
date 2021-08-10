
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
      	@if(Auth::user()->id=='0769980620')
      	 <li class="nav-item">
       		 <a class="nav-link" href="/admin">Admin</a>
      	</li>
      	@endif
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
<div class="top_slider" style="height: 540px;">
    <div style="width:960px;margin: 0 auto;">
 </div>
</div>
<div class="cate_title">
    <div class="wapper">
        <a href="">Danh mục giải thưởng </a>
	</div>
</div>
<div class="cate_title1">
    <div class="wapper">
        <a href="">Diên viên nam ấn tượng</a>
	</div>
</div>
<div class="container">
<div class="row">	
	 		@foreach(DB::table('idols')->where('category_id','3')->get() as $idol)
	 		<div class="col-sm dv">
	 			<div style="width: 100%; background-color: #F0F8FF;"><h2 style="width: 100%; margin: 5px;">{{$idol->name}}</h2></div>
	    		<a href=""><img class="img-thumbnail"  src="image/{{$idol->img}}" alt="" style="width: 100%" /></a>
	    		<div style="display: flex;">
	    			<button onclick="location.href='vote?userID={{Auth::user()->id}}&idolID={{$idol->id}}'"  class="btn btn-info mx-auto" type="submit" name="binhchon" style="width: 100%">Bình chọn</button>
	    		</div>

			</div>
			@endforeach
 </div>
</div>
 <div class="cate_title1">
    <div class="wapper">
        <a href="">Diên viên nữ ấn tượng</a>
	</div>
</div>
<div class="container">
<div class="row">
	
	 		@foreach(DB::table('idols')->where('category_id','4')->get() as $idol)
	 		<div class="col-sm dv">
	 			<div style="width: 100%; background-color: #F0F8FF;"><h2 style="width: 100%; margin: 5px;">{{$idol->name}}</h2></div>
	    		<a href=""><img class="img-thumbnail"  src="image/{{$idol->img}}" alt="" style="width: 100%" /></a>
	    		<div style="display: flex;">
	    			<button onclick="location.href='vote?userID={{Auth::user()->id}}&idolID={{$idol->id}}'"  class="btn btn-info mx-auto" type="submit" name="binhchon" style="width: 100%">Bình chọn</button>
	    		</div>

			</div>
			@endforeach
 </div>
</div>
 <div class="cate_title1">
    <div class="wapper">
        <a href="">Dẫn chương trình ấn tượng</a>
	</div>
</div>
<div class="container">
<div class="row">
			@foreach(DB::table('idols')->where('category_id','1')->get() as $idol)
	 		<div class="col-sm dv">
	 			<div style="width: 100%; background-color: #F0F8FF;"><h2 style="width: 100%; margin: 5px;">{{$idol->name}}</h2></div>
	    		<a href=""><img class="img-thumbnail"  src="image/{{$idol->img}}" alt="" style="width: 100%" /></a>
	    		<div style="display: flex;">
	    			<button  onclick="location.href='vote?userID={{Auth::user()->id}}&idolID={{$idol->id}}'" class="btn btn-info mx-auto" type="submit" name="binhchon" style="width: 100%">Bình chọn</button>
	    		</div>

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
</div>




<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="/style.css">
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
        <a class="nav-link" href="/admin/newcategory">Thêm danh mục giải thưởng</a>
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
 <div class="container">
 @if($posts = DB::table('post')->paginate(6))

<div class="row">


 @foreach($posts as $p)
 	<div class="col-sm" style="border: 1px solid; margin: 20px 0" >
 		<div style="border-bottom: 1px solid"><p style="font-size: 30px; font-family:Times New Roman;">{{$p->title}}</p></div>
 		<div><p> {{$p->content}}</p></div>
		<img class="img-thumbnail" src="/image/{{$p->img}}" width="100%">
		<div style="display: flex;">
			<div class="mx-auto">
				@if(Auth::user()->id=='0769980620')
					<button class="btn btn-info"><a style="text-decoration: none; color: black" href="/admin/deletepost?id={{$p->postid}}">Xóa</a></button>
					<button class="btn btn-info"><a style="text-decoration: none; color: black" href="/admin/updatepost?id={{$p->postid}}">Sửa bài viết</a></button>	
				@endif
			</div>
		</div>
	</div>
	@if($loop->iteration %3==0)
		<div class="w-100"></div>
	@endif
 @endforeach

</div>
 {!!$posts->links()!!}
 @endif
</div>
 <div id="footer" class="container">
		<div class="row text-center">
			<div class="col-sm-12">
				<p>Copy right &copy; 2019 by Vinhso</p>
			</div>
		</div>
	</div>
</div>

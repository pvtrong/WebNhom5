@extends('Pages.layout.menu')
@section('content')
<div class="container bg-dark text-white">
    @if(count($errors) > 0)
        <div class="alert alert-danger">
            @foreach($errors->all() as $err)
                {{$err}}<br>
            @endforeach
        </div>
    @endif

    @if(session('thongbao'))
        <div class="alert alert-success">
            {{session('thongbao')}}
        </div>
    @endif

    <form action="Pages/Teacher/updateBlog/{{$blog->id_blog}}" method="post" enctype="multipart/form-data">
    <input type="hidden" name ="_token" value="{{ csrf_token()}}"/>
        <div class="form-group">
            <label for="Tieude">Tiêu đề</label>
            <input class="form-control dark-mode" name="Tieude" id="Tieude" placeholder="Nhập tiêu đề" value ="{{$blog->title}}">
        </div>

        <div class="form-group">
            <label for="Hinhanh">Hình ảnh</label>
            <p><img width ="200px"src="upload/blog/{{$blog->Hinh}}" alt=""></p>
            <input type="file" name="Hinh" id="Hinh" class="form-control dark-mode">
        </div>

        <div class="form-group">
            <label for="">Tóm tắt</label>
            <textarea name="Tomtat" id="Tomtat" cols="30" rows="2" class="ckeditor form-control">
                {{$blog->description}}
            </textarea>
        </div>
        <div class="form-group">
            <label for="">Nội dung</label>
            <textarea name="Noidung" id="Noidung" cols="30" rows="4" class="ckeditor form-control">
                {{$blog->content}}
            </textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary dark-mode">Đăng bài</button>
        </div>
    </form>

</div>

@endsection

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

    <form action="Pages/Teacher/Blog" method="POST" enctype="multipart/form-data">
    <input type="hidden" name ="_token" value="{{ csrf_token()}}"/>
        <div class="form-group">
            <label for="Tieude">Tiêu đề</label>
            <input class="form-control dark-mode" name="Tieude" id="Tieude" placeholder="Nhập tiêu đề">
        </div>

        <div class="form-group">
            <label for="Hinhanh">Hình ảnh</label>
            <input type="file" name="Hinh" id="Hinh" class="form-control dark-mode">
        </div>

        <div class="form-group">
            <label for="">Tóm tắt</label>
            <textarea name="Tomtat" id="Tomtat" cols="30" rows="2" class="ckeditor form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="">Nội dung</label>
            <textarea name="Noidung" id="Nodung" cols="30" rows="4" class="ckeditor form-control"></textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary dark-mode">Đăng bài</button>
        </div>
    </form>

</div>


<div class="container border" >
    <h1>Các blog của tôi</h1>
    <div class="row2">
        <div class="col-sm-12">
            <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                <thead>
                    <tr role="row2">
                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="2" style="width: 6em !important">ID blog</th>
                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="2" style="width: 6em !important">ID tus</th>
                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="4" style="width: 5em !important;">Ngày tạo</th>
                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="2" style="width: 2em !important;">Ngày đăng</th>
                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="2" style="width: 10em !important;">Tiêu đề</th>
                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="2" style="width: 2em !important;">Sửa</th>
                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="2" style="width: 2em !important;">Xóa</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th rowspan="1" colspan="2">ID blog</th>
                        <th rowspan="1" colspan="2">ID tus</th>
                        <th rowspan="1" colspan="4">Ngày tạo</th>
                        <th rowspan="1" colspan="2">Ngày đăng</th>
                        <th rowspan="1" colspan="2">Tiêu đề</th>
                        <th rowspan="1" colspan="2">Sửa</th>
                        <th rowspan="1" colspan="2">Xóa</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach($BL_Tr as $blg)
                        <tr role="row" class="even">
                        <td colspan="2">{{$blg->id_blog}}</td>
                        <td colspan="4">{{$blg->id}}</td>
                        <td colspan="2">{{$blg->created_at}}</td>
                        <td colspan="2">{{$blg->updated_at}}</td>
                        <td colspan="2">{{$blg->title}}</td>
                        <form action="Pages/Teacher/getUpdateBlog/{{$blg->id_blog}} " method="get" enctype="multipart/form-data">
                        <input type="hidden" name ="_token" value="{{csrf_token()}}"/>
                            <td colspan="2"><button type="submit" class="btn btn-primary">Sửa</button></td>
                        </form>
                        <form action="Pages/Teacher/delBlog/{{$blg->id_blog}}" method="get" enctype="multipart/form-data">
                        <input type="hidden" name ="_token" value="{{csrf_token()}}"/>
                            <td colspan="2"><button type="submit" class="btn btn-danger">Xóa</button></td>
                        </form>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="row2">
        <div class="col-sm-12 col-md-5">
            <div class="dataTables_info" id="dataTable_info" role="status" aria-live="polite"></div>
        </div>
        <div>
            {{ $BL_Tr->links() }}
        </div>
    </div>
</div>

@endsection

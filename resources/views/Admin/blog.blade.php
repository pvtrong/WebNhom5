@extends('layout.main')
@section('content')
<style>

    .form-group{
        width:40%;
        float:left;
    }
    .them{
        margin-top: 30px;
        margin-left: 10px;
    }
</style>
    <!-- <button class="btn btn-xs btn-info" onclick="addCategory(this)">thêm danh mục</button> -->
    <form class="" method="POST" action="./deleteBlog" enctype="multipart/form-data">
    
        <input type="hidden" name="_token" value="{{csrf_token()}}"/>
        <legend>Xoá blog theo id</legend>
    
        <div class="form-group">
            <label for="">ID: </label>
            <input type="text" class="form-control" id="category_name" name="id">
            <button type="submit" class="btn btn-danger">Xoá</button>
        </div>
        
    </form>
    
    <table class="table table-hover">
        <thead>
            <tr>
                <th class="text-center" >STT</th>
                <th class="text-center">ID</th>
                <th class="text-center">Tiêu đề</th>
                <th class="text-center">Mô tả</th>
                <th class="text-center">Nội dung</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        @foreach($BL_St as $key=> $ca)
            <tr>
                <td class="text-center">{{$key+1}}</td>
                <td  class="text-center">{{$ca->id_blog}}</td>
                <td >{!!$ca->title!!}</td>
                <td >{!!$ca->description!!}</td>
                <td>{!!$ca->content!!}</td>
                <form class="" method="POST" action="./deleteBlog" enctype="multipart/form-data">

                    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                <input type="hidden" class="form-control" value="{{$ca->id_blog}}" name="id">
                    <td colspan="2"><button type="submit" class="btn btn-danger">Xóa</button></td>
                </form>
                
            </tr>
        @endforeach
        </tbody>
    </table>
    
    
    
    
    
@stop()

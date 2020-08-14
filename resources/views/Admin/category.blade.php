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
    <form action="" method="POST" role="form">
        <legend>Thêm danh mục</legend>
    
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" class="form-control" id="category_name" name="name">
        </div>
        <button type="button" class="btn btn-primary them" onclick="SaveCategory(this)">Thêm</button>
    </form>
    
    <table class="table table-hover">
        <thead>
            <tr>
                <th hidden></th>
                <th>stt</th>
                <th>name</th>
            </tr>
        </thead>
        <tbody>
        @foreach($cat as $key=> $ca)
            <tr>
                <td hidden>{{$ca->id}}</td>
                <td>{{$key+1}}</td>
                <td>{{$ca->name}}</td>
                <td>
                    <button type="button" class="btn btn-xs btn-info" onclick="EditCategory(this)">sửa</button>
                    <button type="button" class="btn btn-xs btn-danger" onclick="delelteCategory(this)">xóa</button>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    
    
    <div class="modal fade" id="modal-category">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Sửa danh mục</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    
                </div>
                <div class="modal-body">
                
                    <label for="">Name</label>
                    <input type="text" id="name" class="form-control"  name="name">
                
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" onclick="SaveEdit()">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    
    
@stop()

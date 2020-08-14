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
    
    <h1>Số lượng tài khoản</h1>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Loại</th>
                <th>Số lượng</th>

            </tr>
        </thead>
        <tbody>
        
            <tr>
                <td>Sinh Viên</td>
                <td>{{$students}}</td>
                
            </tr>
            <tr>
                <td>Giáo Viên</td>
                <td>{{$teachers}}</td>
                
            </tr>
            <tr>
                <td>Công Ty</td>
                <td>{{$companys}}</td>
                
            </tr>
            <tr>
                <td>Tổng số tài khoản</td>
                <td>{{$users}}</td>
                
            </tr>
            
        
        </tbody>
    </table>
<h1>Số lượng blog: {{$blogs}}</h1>
    
<h1>Số lượng tin nhắn: {{$messages}}</h1>
    
    
    
    <div class="modal fade" id="modal-category">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">sửa category</h4>
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

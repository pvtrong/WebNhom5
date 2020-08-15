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
    <!-- <button class="btn btn-xs btn-info" onclick="addskill(this)">thêm danh mục</button> -->
    <form action="" method="POST" role="form">
        <legend>Thêm skill</legend>
    
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" class="form-control" id="skill_name" name="name">
        </div>
        <button type="button" class="btn btn-primary them" onclick="SaveSkill(this)">Thêm</button>
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
        @if($skill)
        @foreach($skill as $key=> $skill)
            <tr>
                <td hidden>{{$skill->id}}</td>
                <td>{{$key+1}}</td>
                <td>{{$skill->name}}</td>
                <td>
                    <button type="button" class="btn btn-xs btn-info" onclick="EditSkill(this)">sửa</button>
                    <button type="button" class="btn btn-xs btn-danger" onclick="delelteSkill(this)">xóa</button>
                </td>
            </tr>
        @endforeach
        @endif
        </tbody>
    </table>
    
    
    <div class="modal fade" id="modal-skill">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">sửa skill</h4>
                </div>
                <div class="modal-body">
                
                    <label for="">Name</label>
                    <input type="text" id="name" class="form-control"  name="name">
                
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" onclick="SaveSkillEdit()">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    
    
@stop()

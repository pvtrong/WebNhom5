
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
    
    
    <table class="table table-hover">
        <thead>
            <tr>
                <th hidden></th>
                <th>name</th>
                <th>email</th>
            </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td hidden>{{$user->id}}</td>
                <td> {{$user->name}}
                    
                </td>
                <td> {{$user->email}}
                </td>
                <td> {{$user->password}}
                </td><td>
                    
                    <button type="button" class="btn btn-xs btn-danger">xóa</button>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    
    
    
    
    
@stop()

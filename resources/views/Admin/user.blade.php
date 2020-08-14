
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
                <th>password</th>
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
                    
                <form class="" method="GET" action="./deleteUser/{{$user->id}}" enctype="multipart/form-data">

                    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                    <td colspan="2"><button type="submit" class="btn btn-danger">Xóa</button></td>
                </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    
    
    
    
    
@stop()

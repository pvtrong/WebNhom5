<!DOCTYPE html>
<html>

<head>
    <title>Registration Page</title>
    <link rel="stylesheet" type="text/css" href="asset/CSS/Lib/bootstrap.min.css">
    <style>
        body{
            font-size: 1.5em;
        }
        .error-text{
            color: red;
            font-style: italic;
            font-size: 0.9em;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row col-md-6 col-md-offset-3">
            <div class="panel panel-primary">
                <div class="panel-heading text-center">
                    <h1>Thông tin đăng ký</h1>
                </div>
                <div class="panel-body">
                    <form method="POST">
                        <div class="form-group">
                            <label for="name">Họ và tên</label>
                        <input type="text" class="form-control" id="txtName" name="name" value="{{old('name')}}" placeholder="Họ và tên...">
                            @if($errors->has('name'))
                                <span class="error-text">
                                    {{$errors->first('name')}}
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="txtEmail" value="{{old('name')}}" name="email" placeholder="Email">
                            @if($errors->has('email'))
                                <span class="error-text">
                                    {{$errors->first('email')}}
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="password">Mật khẩu</label>
                            <input type="password" class="form-control" id="txtPassword" name="password" placeholder="Mật khẩu">
                            @if($errors->has('password'))
                                <span class="error-text">
                                    {{$errors->first('password')}}
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="password2">Xác nhận</label>
                            <input type="password" class="form-control" id="txtPassword2" name="confirm_password" placeholder="Nhập lại mật khẩu">
                            @if($errors->has('confirm_password'))
                                <span class="error-text">
                                    {{$errors->first('confirm_password')}}
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="Category">Loại tài khoản</label>
                            <select class="form-control" name="category" id="txtCategory">Loại tài khoản
								<option name="category"  value="3">Sinh viên</option>
								<option name="category"  value="2">Nhà trường</option>
								<option name="category"  value="1">Công ty</option>
                            </select>
                            @if($errors->has('category'))
                                <span class="error-text">
                                    {{$errors->first('category')}}
                                </span>
                            @endif
                        </div>
                        <div>
                            <button class="btn btn-primary center-block">Đăng ký</button>
                        </div>
                        @csrf
                    </form>
                </div>
                <h4> Nếu có tài khoản rồi. <a href="./login">Đăng nhập</a></h4>
                <div class="panel-footer text-right">
                    <small>&copy; Đại Học Công Nghệ - Đại Học Quốc Gia Hà Nội.</small>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

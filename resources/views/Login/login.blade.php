<!DOCTYPE html>
<html>

<head>
    <title>Login Page</title>
    <link href="asset/CSS/Lib/bootstrap.min.css" rel="stylesheet" />
</head>

<body>
    <div class="container-fluid">
        @if(Session::has('success'))
        <div class="alert alert-success alert-dismissable">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Thành công! </strong> {{Session::get('success')}}
        </div>
        @endif
        @if(\Session::has('danger'))
        <div class="alert alert-danger">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Thất bại! </strong> {{\Session::get('danger')}}
        </div>
        @endif
        <div class="row col-md-6 col-md-offset-3 d-flex align-self-center">
            <div class="panel panel-primary">
                <div class="panel-heading text-center">
                    <h1>Thông tin đăng nhập</h1>
                </div>
                <div class="panel-body">
                    <form method="POST">
                        <div class="form-group">
                            <label for="Email">Email</label>
                            <input type="text" class="form-control" name="email" placeholder="Email đăng ký">
                        </div>
                        <div class="form-group">
                            <label for="password">Mật khẩu</label>
                            <input type="password" class="form-control" name="password" placeholder="Mật khẩu">
                            <small id="password" class="form-text text-muted">Không bao giờ được cung cấp mật khẩu cho bất kì ai.</small>
                        </div>
                        <button class="btn btn-primary center-block">Đăng nhập</button>
                        @csrf
                    </form>
                    <h4>Nếu chưa có tài khoản?  <a href="./registration">Đăng ký</a></h4>
                </div>
                <div class="panel-footer text-right">
                    <small>&copy; Đại Học Công Nghệ - Đại Học Quốc Gia Hà Nội.</small>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

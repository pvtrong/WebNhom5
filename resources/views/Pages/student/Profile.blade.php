@extends('Pages.layout.menu')
@section('content')

<div class="container">
    <button type="submit" class="btn btn-primary">Ghi nhận</button>
    <div class="row">
        <div class="col-md-6">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 style="color: #026b97 !important" class="m-0 font-weight-bold text-primary text-center">Thông tin cá nhân</h6>
                </div>
                <div class="card-body row">
                    <div class="col-md-6 mb-3 avatar-info">
                        <div class="avatar-info-area"></div>
                        <input type="file" class="form-control-file border">
                    </div>
                    <div class="col-md-6 mb-3 info-individual">
                        <form class="" action="/action_page.php">
                            <label for="studentCode">Mã sinh viên</label>
                            <input type="text" class="form-control" placeholder="" id="txtStudentCode">
                            <label for="studentName">Tên sinh viên</label>
                            <input type="text" class="form-control" placeholder="" id="txtStudentName">


                            <label for="studentBirth">Ngày sinh</label>
                            <input type="date" class="form-control" placeholder="" id="txtStudenBirth">


                            <label for="studentGender"> Giới tính:</label>
                            <p></p>
                            <input id="txtStudentGender" checked value="Male" type="radio" class="form-check-inline" name="gender">Nam
                            <input id="txtStudentGender" value="Female" type="radio" class="form-check-inline" name="gender">Nữ
                            <input id="txtStudentGender" value="Other" type="radio" class="form-check-inline" name="gender">Other



                            <label for="emailOther">Địa chỉ email</label>
                            <input type="email" class="form-control" placeholder="" id="txtEmailOther">
                            <label for="mobile">Số điện thoại</label>
                            <input type="tel" class="form-control" placeholder="" id="txtMobile">
                        </form>
                    </div>

                </div>
            </div>
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 style="color: #026b97 !important" class="m-0 font-weight-bold text-primary text-center">Thông tin cơ bản</h6>
                </div>
                <div class="card-body">
                    <form class="" action="/action_page.php">
                        <div class="form-group">
                            <label for="department">Khoa</label>
                            <select class="form-control" id="sel1">
                                <option>Công nghệ thông tin</option>
                                <option>Điện tử viễn thông</option>
                                <option>Vật lý kỹ thuật</option>
                                <option>Hàng không vũ trụ</option>
                            </select>
                        </div>
                        <label for="major">Ngành</label>
                        <input type="text" class="form-control" placeholder="" id="txtMajor">
                        <div class="form-group">
                            <label for="level">Bậc</label>
                            <select class="form-control" id="sel1">
                                <option>Cao đăng</option>
                                <option>Đại học</option>
                                <option>Cao học</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="training-system">Hình thức đào tạo</label>
                            <select class="form-control" id="sel1">
                                <option>Chính quy</option>
                                <option>Tại chức</option>
                                <option>Tại chỗ</option>

                            </select>
                        </div>
                        <div class="form-group">
                            <label for="training-program">Chương trình đào tạo</label>
                            <select class="form-control" id="sel1">
                                <option>Chuẩn</option>
                                <option>CLC</option>
                                <option>CLC (Thông tư 23)</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="year-of-course">Khoá</label>
                            <select class="form-control" id="sel1">
                                <option>QH-2014</option>
                                <option>QH-2015</option>
                                <option>QH-2016</option>
                                <option>QH-2017</option>
                                <option>QH-2018</option>
                                <option>QH-2019</option>
                                <option>QH-2020</option>
                                <option>QH-2021</option>
                            </select>
                        </div>

                        <label for="numberCMT">Số chứng minh thư</label>
                        <input type="text" class="form-control" placeholder="" id="txtNumberCMT">

                        <label for="forte">Sở trường</label>
                        <textarea class="form-control" rows="5" id="txtForte"></textarea>
                        <label for="skill">Năng khiếu</label>
                        <textarea class="form-control" rows="5" id="txtSkill"></textarea>
                        <label for="favorite">Sở thích</label>
                        <textarea class="form-control" rows="5" id="txtFavorite"></textarea>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 style="color: #026b97 !important" class="m-0 font-weight-bold text-primary text-center">Địa chỉ</h6>
                </div>
                <div class="card-body">
                    <form class="" action="/action_page.php">
                        <label for="nation">Quốc gia</label>
                        <input type="text" class="form-control" placeholder="" id="txtNation">

                        <label for="city">Tỉnh/Thành phố</label>
                        <input type="text" class="form-control" placeholder="" id="txtCity">
                        <label for="district">Quận/Huyện</label>
                        <input type="text" class="form-control" placeholder="" id="txtDistrict">
                        <label for="commune">Xã</label>
                        <input type="text" class="form-control" placeholder="" id="txtCommune">
                        <label for="street">Đường</label>
                        <input type="text" class="form-control" placeholder="" id="txtStreet">
                        <label for="homeNumber">Số nhà</label>
                        <input type="number" class="form-control" placeholder="" id="txtHomeNumber">
                    </form>


                </div>
            </div>
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 style="color: #026b97 !important" class="m-0 font-weight-bold text-primary text-center">Quá trình học tập</h6>
                </div>
                <div class="card-body">
                    <form class="" action="/action_page.php">
                                                    

                        <label for="GPA">GPA tích luỹ</label>
                        <input type="text" class="form-control" placeholder="" id="txtGPA">
                        <label for="Prize">Khen thưởng/giải thưởng</label>
                        <textarea rows="5" type="text" class="form-control" placeholder="" id="txtPrize"></textarea>
                                                    
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

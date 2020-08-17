@extends('Pages.layout.menu')
@section('content')

<div class="container">
<form class="" method="POST" action="./Pages/Student/updateProfile/{{Auth::user()->id}}" enctype="multipart/form-data">
    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
    <button type="submit" class="btn btn-primary dark-mode" >Ghi nhận</button>

    <div class="row dark-mode">
        <div class="col-md-6 dark-mode">
            <div class="card shadow mb-4 dark-mode">
                <div class="card-header py-3 dark-mode">
                    <h6 style="color: #026b97" class="dark-mode m-0 font-weight-bold text-primary text-center">Thông tin cá nhân</h6>
                </div>
                <div class="card-body row dark-mode bg-black">
                    <div class="col-xl-6 mb-3 avatar-info">
                        <div class="avatar-info-area" ></div>
                        <input type="file" name="Hinh" class="form-control-file border">
                    </div>
                    <div class="col-xl-6 mb-3 info-individual dark-mode bg-black">
                            <br>
                            <p></p>
                        <input name="id" type="hidden" value="{{Auth::user()->id}}">
                        <label for="studentCode">Mã sinh viên</label>
                        <input name="studentCode" type="text" value="" class="form-control dark-mode" placeholder="" id="txtStudentCode">
                        <label for="studentName">Tên sinh viên</label>
                        <input name="name"  type="text" readonly value="{{Auth::user()->name}}" class="form-control dark-mode" placeholder="" id="txtStudentName">


                        <label for="studentBirth">Ngày sinh</label>
                        <input name="birth" type="date" class="form-control dark-mode" placeholder="" id="txtStudenBirth">


                        <label for="studentGender"> Giới tính:</label>
                        <p></p>
                        <input  name="gender" id="txtStudentGender" checked value="Nam" type="radio" class="form-check-inline dark-mode" name="gender">Nam
                        <input  name="gender" id="txtStudentGender" value="Nữ" type="radio" class="form-check-inline dark-mode" name="gender">Nữ
                        <input name="gender" id="txtStudentGender" value="Khác" type="radio" class="form-check-inline dark-mode" name="gender">Other



                        <label for="emailOther">Địa chỉ email</label>
                        <input  name="email" type="email" readonly  class="form-control dark-mode" value="{{Auth::user()->email}}" placeholder="" id="txtEmailOther">
                        <label  for="mobile">Số điện thoại</label>
                        <input  name="mobile" type="tel" class="form-control dark-mode" placeholder="" id="txtMobile">
                    </div>

                </div>
            </div>
            <div class="card shadow mb-4 dark-mode">
                <div class="card-header py-3 dark-mode">
                    <h6 style="color: #026b97" class=" dark-mode m-0 font-weight-bold text-primary text-center">Thông tin cơ bản</h6>

                <div class="card-body dark-mode bg-black">

                    <div class="form-group">
                        <label for="department">Khoa</label>
                        <select name="department" class="form-control dark-mode" id="sel1">
                            <option>Công nghệ thông tin</option>
                            <option>Điện tử viễn thông</option>
                            <option>Vật lý kỹ thuật</option>
                            <option>Hàng không vũ trụ</option>
                        </select>
                    </div>
                    <label for="major">Ngành</label>
                    <input name="major" type="text" class="form-control dark-mode" placeholder="" id="txtMajor">
                    <div class="form-group">
                        <label for="level">Bậc</label>
                        <select name="level" class="form-control dark-mode" id="sel1">
                            <option>Cao đăng</option>
                            <option>Đại học</option>
                            <option>Cao học</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="training-system">Hình thức đào tạo</label>
                        <select name="trainingSystem" class="form-control dark-mode" id="sel1">
                            <option>Chính quy</option>
                            <option>Tại chức</option>
                            <option>Tại chỗ</option>

                        </select>
                    </div>
                    <div class="form-group">
                        <label for="training-program">Chương trình đào tạo</label>
                        <select name="trainingProgram" class="form-control dark-mode" id="sel1">
                            <option>Chuẩn</option>
                            <option>CLC</option>
                            <option>CLC (Thông tư 23)</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="year-of-course">Khoá</label>
                        <select name="yearOfCourse" class="form-control dark-mode" id="sel1">
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
                    <input  name="numberCMT" type="text" class="form-control dark-mode" placeholder="" id="txtNumberCMT">
                </div>
            </div>
        </div>

    </div>
    <div class="col-md-6 dark-mode">
            <div class="card shadow mb-4 dark-mode">
                <div class="card-header py-3 dark-mode">
                    <h6 style="color: #026b97" class="  dark-modem-0 font-weight-bold text-primary text-center">Địa chỉ</h6>
                </div>
                <div class="card-body dark-mode bg-black">

                    <label for="nation">Quốc gia</label>
                    <input name="nation" type="text" class="form-control dark-mode" placeholder="" id="txtNation">

                    <label for="city">Tỉnh/Thành phố</label>
                    <input name="city" type="text" class="form-control dark-mode" placeholder="" id="txtCity">
                    <label for="district">Quận/Huyện</label>
                    <input name="district" type="text" class="form-control dark-mode" placeholder="" id="txtDistrict">
                    <label for="commune">Xã</label>
                    <input name="commune" type="text" class="form-control dark-mode" placeholder="" id="txtCommune">
                    <label for="street">Đường</label>
                    <input name="street" type="text" class="form-control dark-mode" placeholder="" id="txtStreet">
                    <label for="homeNumber">Số nhà</label>
                    <input name="number" type="number" class="form-control dark-mode" placeholder="" id="txtHomeNumber">
                </div>
            </div>
            <div class="card shadow mb-4 dark-mode">
                <div class="card-header py-3 dark-mode">
                    <h6 style="color: #026b97" class="  dark-modem-0 font-weight-bold text-primary text-center">Quá trình học tập</h6>
                </div>
                <div class="card-body dark-mode  bg-black">

                    <label for="GPA">GPA tích luỹ</label>
                    <input type="text" class="form-control dark-mode" placeholder="" id="txtGPA">
                    <label for="Prize">Khen thưởng/giải thưởng</label>
                    <textarea rows="5" type="text" class="form-control dark-mode" placeholder="" id="txtPrize"></textarea>
                    <label for="forte">Kỹ năng</label>
                    <table>
                        @foreach($skill as $ski)
                        <tr onclick="chon(this)">
                            <th><input type="checkbox" name="skill_id[]" value="{{$ski->id}}"></th>
                            <th>{{$ski->name}}</th>
                            @endforeach
                    </table>
                    <!-- <textarea  name="forte" class="form-control dark-mode" rows="5" id="txtForte"></textarea> -->
                    <label for="skill">Năng khiếu</label>
                    <textarea name="skill" class="form-control dark-mode" rows="5" id="txtSkill"></textarea>
                    <label for="favourite">Sở thích</label>
                    <textarea name="favourite" class="form-control dark-mode" rows="5" id="txtFavorite"></textarea>          
                </div>
            </div>
        </div>
</div>
@endsection

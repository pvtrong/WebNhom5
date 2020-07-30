@extends('Pages.layout.menu')
@section('content')

<div class="container">
    <form class="" method="POST" action="./Pages/Student/updateProfile/{{Auth::user()->id}}">
        <input type="hidden" name="_token" value="{{csrf_token()}}"/>
        <button type="submit" class="btn btn-primary" >Ghi nhận</button>
    
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
                        
                                <input type=""hidden name="id" value="{{Auth::user()->id}}"/>
                                <label for="studentCode">Mã sinh viên</label>
                                <input name="studentCode" type="text" value="{{$student->studentCode}}" class="form-control" placeholder="" id="txtStudentCode">
                                <label for="studentName">Tên sinh viên</label>
                                <input name="name"  type="text" readonly value="{{Auth::user()->name}}" class="form-control" placeholder="" id="txtStudentName">


                                <label for="studentBirth">Ngày sinh</label>
                                <input value="{{$student->birth}}" name="birth" type="date" class="form-control" placeholder="" id="txtStudenBirth">


                                <label for="studentGender"> Giới tính:</label>
                                <p></p>
                                <input  id="txtStudentGender"  value="{{$student->gender}}" type="radio" class="form-check-inline" name="gender">Nam
                                <input  id="txtStudentGender" value="{{$student->gender}}" type="radio" class="form-check-inline" name="gender">Nữ
                                <input  id="txtStudentGender" value="{{$student->gender}}" type="radio" class="form-check-inline" name="gender">Other



                                <label for="emailOther">Địa chỉ email</label>
                                <input  name="email" type="email" readonly  class="form-control" value="{{Auth::user()->email}}" placeholder="" id="txtEmailOther">
                                <label  for="mobile">Số điện thoại</label>
                                <input  value="{{$student->mobile}}" name="mobile" type="tel" class="form-control" placeholder="" id="txtMobile">
                       
                        </div>

                    </div>
                </div>
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 style="color: #026b97 !important" class="m-0 font-weight-bold text-primary text-center">Thông tin cơ bản</h6>

                    <div class="card-body">
                    
                            <div class="form-group">
                                <label for="department">Khoa</label>
                                <select value="{{$student->department}}" name="department" class="form-control" id="sel1">
                                    <option>Công nghệ thông tin</option>
                                    <option>Điện tử viễn thông</option>
                                    <option>Vật lý kỹ thuật</option>
                                    <option>Hàng không vũ trụ</option>
                                </select>
                            </div>
                            <label for="major">Ngành</label>
                            <input value="{{$student->major}}" name="major" type="text" class="form-control" placeholder="" id="txtMajor">
                            <div class="form-group">
                                <label for="level">Bậc</label>
                                <select value="{{$student->level}}" name="level" class="form-control" id="sel1">
                                    <option >Cao đăng</option>
                                    <option>Đại học</option>
                                    <option>Cao học</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="training-system">Hình thức đào tạo</label>
                                <select  value="{{$student->trainingSystem}}" name="trainingSystem" class="form-control" id="sel1">
                                    <option>Chính quy</option>
                                    <option>Tại chức</option>
                                    <option>Tại chỗ</option>

                                </select>
                            </div>
                            <div class="form-group">
                                <label  for="training-program">Chương trình đào tạo</label>
                                <select value="{{$student->trainingProgram}}" name="trainingProgram" class="form-control" id="sel1">
                                    <option>Chuẩn</option>
                                    <option>CLC</option>
                                    <option>CLC (Thông tư 23)</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="year-of-course">Khoá</label>
                                <select value="{{$student->yearOfCourse}}" name="yearOfCourse" class="form-control" id="sel1">
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
                            <input value="{{$student->numberCMT}}"  name="numberCMT" type="text" class="form-control" placeholder="" id="txtNumberCMT">

                       
                    </div>
                </div>
            </div>
        
        </div>
        <div class="col-md-6">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 style="color: #026b97 !important" class="m-0 font-weight-bold text-primary text-center">Địa chỉ</h6>
                    </div>
                    <div class="card-body">
                    
                            <label for="nation">Quốc gia</label>
                            <input value="{{$student->nation}}" name="nation" type="text" class="form-control" placeholder="" id="txtNation">

                            <label for="city">Tỉnh/Thành phố</label>
                            <input value="{{$student->city}}" name="city" type="text" class="form-control" placeholder="" id="txtCity">
                            <label for="district">Quận/Huyện</label>
                            <input value="{{$student->district}}" name="district" type="text" class="form-control" placeholder="" id="txtDistrict">
                            <label for="commune">Xã</label>
                            <input value="{{$student->commune}}" name="commune" type="text" class="form-control" placeholder="" id="txtCommune">
                            <label for="street">Đường</label>
                            <input value="{{$student->street}}" name="street" type="text" class="form-control" placeholder="" id="txtStreet">
                            <label for="homeNumber">Số nhà</label>
                            <input value="{{$student->homeNumber}}" name="homeNumber" type="number" class="form-control" placeholder="" id="txtHomeNumber">
                   
                    </div>
                </div>
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 style="color: #026b97 !important" class="m-0 font-weight-bold text-primary text-center">Quá trình học tập</h6>
                    </div>
                    <div class="card-body">
                   
                        <label for="GPA">GPA tích luỹ</label>
                        <input value="{{$student->gpa}}" name="gpa" type="text" class="form-control" placeholder="" id="txtGPA">
                        <label for="Prize">Khen thưởng/giải thưởng</label>
                        <textarea name=""prize"  value="{{$student->prize}}" rows="5" type="text" class="form-control" placeholder="" id="txtPrize"></textarea>
                        <label for="forte">Sở trường</label>
                        <textarea  name="forte" value="{{$student->forte}}" class="form-control" rows="5" id="txtForte"></textarea>
                        <label for="skill">Năng khiếu</label>
                        <textarea name="skill"  value="{{$student->skill}}" class="form-control" rows="5" id="txtSkill"></textarea>
                        <label for="favorite">Sở thích</label>
                        <textarea name="favorite" class="form-control" value="{{$student->favorite}}" rows="5" id="txtFavorite"></textarea>                                         
                    
                    </div>
                </div>
            </div>
        </form>
</div>
@endsection

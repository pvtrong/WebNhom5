@extends('Pages.layout.menu')
@section('content')
<style>
/* .chose-skill {
    width: 50%;
    height: 50px;
    border: 1px solid;
} */
</style>
<div class="container">
    <a class="position-absolute" id="btnCV" href="./Pages/Student/CV/{{Auth::user()->id}}"><button type="reset2" class="btn btn-primary dark-mode" >CV Cá Nhân</button></a>
    <form class="" method="POST" action="./Pages/Student/updateProfile/{{Auth::user()->id}}" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{csrf_token()}}"/>
        <button type="submit" class="btn btn-primary dark-mode" >Ghi nhận</button>

        <div class="row dark-mode">
            <div class="col-md-6 dark-mode">
                <div class="card shadow mb-4 dark-mode">
                    <div class="card-header py-3 dark-mode">
                        <h6 style="color: #026b97" class=" dark-mode m-0 font-weight-bold text-primary text-center">Thông tin cá nhân</h6>
                    </div>
                    <div class="card-body row dark-mode bg-black">
                        <div class="col-xl-6 mb-3 avatar-info dark-mode">
                            <br>
                             <p></p>
                            <div class="avatar-info-area" style="background-image: url('upload/student/{{$student->Hinh}}');" ></div>
                            <input name="Hinh" type="file" class="form-control-file border">
                        </div>
                        <div class="col-xl-6 mb-3 info-individual dark-mode">

                            <input type="hidden" name="id" value="{{Auth::user()->id}}">
                            <label for="studentCode">Mã sinh viên</label>
                            <input name="studentCode" type="text" value="{{$student->studentCode}}" class="form-control dark-mode" placeholder="" id="txtStudentCode">
                            <label for="studentName">Tên sinh viên</label>
                            <input name="name"  type="text" readonly value="{{Auth::user()->name}}" class="form-control dark-mode" placeholder="" id="txtStudentName">


                            <label for="studentBirth">Ngày sinh</label>
                            <input value="{{$student->birth}}" name="birth" type="date" class="form-control dark-mode" placeholder="" id="txtStudenBirth">


                            <label for="studentGender"> Giới tính:</label>
                            <p></p>

                            <input  id="txtStudentGender" <?php if($student->gender=="Nam"){echo "checked";}?>  value="Nam" type="radio" class=" dark-mode form-check-inline" name="gender">Nam
                            <input  id="txtStudentGender" <?php if($student->gender=="Nữ"){echo "checked";}?> value="Nữ" type="radio" class=" dark-mode form-check-inline" name="gender">Nữ
                            <input  id="txtStudentGender" <?php if($student->gender=="Khác"){echo "checked";}?> value="Khác" type="radio" class=" dark-mode form-check-inline" name="gender">Other



                            <label for="emailOther">Địa chỉ email</label>
                            <input  name="email" type="email" readonly  class="form-control dark-mode" value="{{Auth::user()->email}}" placeholder="" id="txtEmailOther">
                            <label  for="mobile">Số điện thoại</label>
                            <input  value="{{$student->mobile}}" name="mobile" type="tel" class="form-control dark-mode" placeholder="" id="txtMobile">

                        </div>

                    </div>
                </div>
                <div class="card shadow mb-4 dark-mode">
                    <div class="card-header py-3 dark-mode">
                        <h6 style="color: #026b97" class="  dark-mode m-0 font-weight-bold text-primary text-center">Thông tin cơ bản</h6>

                    <div class="card-body dark-mode bg-black">

                        <div class="form-group">
                            <label for="department">Khoa</label>
                            <select value="{{$student->department}}" name="department" class="form-control dark-mode" id="sel1">
                                <option <?php if($student->department=="Công nghệ thông tin"){echo "selected";}?> value="Công nghệ thông tin"  name="department">Công nghệ thông tin</option>
                                <option <?php if($student->department=="Máy tính và Robot"){echo "selected";}?> value="Máy tính và Robot"  name="department">Máy tính và Robot</option>
                                <option <?php if($student->department=="Cơ kỹ thuật"){echo "selected";}?> value="Cơ kỹ thuật"  name="department">Cơ kỹ thuật</option>
                                <option <?php if($student->department=="Công nghệ kỹ thuật xây dựng"){echo "selected";}?> value="Công nghệ kỹ thuật xây dựng"  name="department">Công nghệ kỹ thuật xây dựng</option>
                                <option <?php if($student->department=="Công nghệ Hàng không vũ trụ"){echo "selected";}?> value="Công nghệ Hàng không vũ trụ"  name="department">Công nghệ Hàng không vũ trụ</option>
                                <option <?php if($student->department=="Kỹ thuật điều khiển và tự động hóa"){echo "selected";}?> value="Kỹ thuật điều khiển và tự động hóa"  name="department">Kỹ thuật điều khiển và tự động hóa</option>
                                <option <?php if($student->department=="
                                    Công nghệ nông nghiệp"){echo "selected";}?> value="Công nghệ nông nghiệp"  name="department">Công nghệ nông nghiệp</option>
                                <option  <?php if($student->department=="Điện tử viễn thông"){echo "selected";}?> value="Điện tử viễn thông" name="department">Điện tử viễn thông</option>
                                <option  <?php if($student->department=="Vật lý kỹ thuật"){echo "selected";}?> value="Vật lý kỹ thuật" name="department">Vật lý kỹ thuật</option>

                            </select>
                        </div>
                        <label for="major">Ngành</label>
                        <input value="{{$student->major}}" name="major" type="text" class="form-control dark-mode" placeholder="" id="txtMajor">
                        <div class="form-group">
                            <label for="level">Bậc</label>
                            <select value="{{$student->level}}" name="level" class="form-control dark-mode" id="sel1">
                                <option <?php if($student->level=="Cao đẳng"){echo "selected";}?> name="level" value="Cao đẳng" >Cao đăng</option>
                                <option <?php if($student->level=="Đại học"){echo "selected";}?> name="level" value="Đại học">Đại học</option>
                                <option <?php if($student->level=="Cao học"){echo "selected";}?> name="level" value="Cao học">Cao học</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="training-system">Hình thức đào tạo</label>
                            <select  value="{{$student->trainingSystem}}" name="trainingSystem" class="form-control dark-mode" id="sel1">
                                <option <?php if($student->trainingSystem=="Chính quy"){echo "selected";}?> name="trainingSystem" value="Chính quy">Chính quy</option>
                                <option <?php if($student->trainingSystem=="Tại chức"){echo "selected";}?> name="trainingSystem" value="Tại chức">Tại chức</option>
                                <option <?php if($student->trainingSystem=="Tại chỗ"){echo "selected";}?> name="trainingSystem" value="Tại chỗ">Tại chỗ</option>

                            </select>
                        </div>
                        <div class="form-group">
                            <label  for="training-program">Chương trình đào tạo</label>
                            <select value="{{$student->trainingProgram}}" name="trainingProgram" class="form-control dark-mode" id="sel1">
                                <option <?php if($student->trainingProgram=="Chuẩn"){echo "selected";}?> value="Chuẩn">Chuẩn</option>
                                <option <?php if($student->trainingProgram=="CLC"){echo "selected";}?> value="CLC">CLC</option>
                                <option <?php if($student->trainingProgram=="CLC (Thông tư 23)"){echo "selected";}?> value="CLC (Thông tư 23)">CLC (Thông tư 23)</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="year-of-course">Khoá</label>
                            <select value="{{$student->yearOfCourse}}" name="yearOfCourse" class="form-control dark-mode" id="sel1">
                                <option <?php if($student->yearOfCourse=="QH-2014"){echo "selected";}?> name="yearOfCourse" value="QH-2014">QH-2014</option>
                                <option <?php if($student->yearOfCourse=="QH-2015"){echo "selected";}?> name="yearOfCourse" value="QH-2015">QH-2015</option>
                                <option <?php if($student->yearOfCourse=="QH-2016"){echo "selected";}?> name="yearOfCourse" value="QH-2016">QH-2016</option>
                                <option <?php if($student->yearOfCourse=="QH-2017"){echo "selected";}?> name="yearOfCourse" value="QH-2017">QH-2017</option>
                                <option <?php if($student->yearOfCourse=="QH-2018"){echo "selected";}?> name="yearOfCourse" value="QH-2018">QH-2018</option>
                                <option <?php if($student->yearOfCourse=="QH-2019"){echo "selected";}?> name="yearOfCourse" value="QH-2019">QH-2019</option>
                                <option <?php if($student->yearOfCourse=="QH-2020"){echo "selected";}?> name="yearOfCourse" value="QH-2020">QH-2020</option>
                                <option <?php if($student->yearOfCourse=="QH-2021"){echo "selected";}?> name="yearOfCourse" value="QH-2021">QH-2021</option>
                            </select>
                        </div>

                        <label for="numberCMT">Số chứng minh thư</label>
                        <input value="{{$student->numberCMT}}"  name="numberCMT" type="text" class="form-control dark-mode" placeholder="" id="txtNumberCMT">


                    </div>
                </div>
            </div>

        </div>
        <div class="col-md-6 dark-mode">
            <div class="card shadow mb-4 dark-mode">
                <div class="card-header py-3 dark-mode">
                    <h6 style="color: #026b97" class="  dark-mode m-0 font-weight-bold text-primary text-center">Địa chỉ</h6>
                </div>
                <div class="card-body dark-mode bg-black">

                    <label for="nation">Quốc gia</label>
                    <input value="{{$student->nation}}" name="nation" type="text" class="form-control dark-mode" placeholder="" id="txtNation">

                    <label for="city">Tỉnh/Thành phố</label>
                    <input value="{{$student->city}}" name="city" type="text" class="form-control dark-mode" placeholder="" id="txtCity">
                    <label for="district">Quận/Huyện</label>
                    <input value="{{$student->district}}" name="district" type="text" class="form-control dark-mode" placeholder="" id="txtDistrict">
                    <label for="commune">Xã</label>
                    <input value="{{$student->commune}}" name="commune" type="text" class="form-control dark-mode" placeholder="" id="txtCommune">
                    <label for="street">Đường</label>
                    <input value="{{$student->street}}" name="street" type="text" class="form-control dark-mode" placeholder="" id="txtStreet">
                    <label for="homeNumber">Số nhà</label>
                    <input value="{{$student->homeNumber}}" name="homeNumber" type="number" class="form-control dark-mode" placeholder="" id="txtHomeNumber">

                </div>
            </div>
            <div class="card shadow mb-4 dark-mode">
                <div class="card-header py-3 dark-mode">
                    <h6 style="color: #026b97" class=" dark-mode m-0 font-weight-bold text-primary text-center">Quá trình học tập</h6>
                </div>
                <div class="card-body dark-mode bg-black">

                    <label for="GPA">GPA tích luỹ</label>
                    <input value="{{$student->gpa}}" name="gpa" type="text" class="form-control dark-mode" placeholder="" id="txtGPA">
                    <label for="Prize">Khen thưởng/giải thưởng</label>
                    <textarea name="prize" value="{{$student->prize}}" id="txtPrize" rows="5" class="ckeditor form-control"><?php echo $student->prize?></textarea>
                    <label for="forte">Kỹ năng</label>
                    <table>
                    @if($skillcheck)
                        @foreach($skill as $ski)
                            @if(in_array($ski->name,$skillcheck))
                        <tr onclick="chon(this)">
                            <th><input type="checkbox" checked name="skill_id[]" value="{{$ski->id}}"></th>
                            <th>{{$ski->name}}</th>
                        </tr>
                            @else
                            <tr onclick="chon(this)">
                            <th><input type="checkbox" name="skill_id[]" value="{{$ski->id}}"></th>
                            <th>{{$ski->name}}</th>
                        </tr>
                            @endif
                        @endforeach
                    @else
                        @foreach($skill as $ski)
                        <tr onclick="chon(this)">
                            <th><input type="checkbox" name="skill_id[]" value="{{$ski->id}}"></th>
                            <th>{{$ski->name}}</th>
                            @endforeach
                    @endif
                    </table>
                    <!-- <textarea  name="forte" value="{{$student->forte}}" class="form-control" rows="5" id="txtForte"><?php echo $student->forte?></textarea> -->
                    <label for="skill">Năng khiếu</label>
                    <textarea name="skill"  value="{{$student->skill}}" class="form-control" rows="5" id="txtSkill"><?php echo $student->skill?></textarea>
                    
                    <label for="favourite">Sở thích</label>
                    <textarea name="favourite" class="ckeditor form-control" value="{{$student->favuorite}}" rows="5" id="txtFavorite"><?php echo $student->favourite?></textarea>

                </div>
            </div>
        </div>
    </form>
</div>
@endsection

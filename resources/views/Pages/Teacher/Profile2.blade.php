
@extends('Pages.layout.menu')
@section('content')




<div class="container">
    <form class="" method="POST" action="./Pages/Teacher/updateProfile/{{Auth::user()->id}}" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{csrf_token()}}"/>
        <button type="submit" class="btn btn-primary dark-mode" >Ghi nhận</button>
        <div class="row dark-mode">
            <div class="col-md-6 dark-mode">
                <div class="card shadow mb-4 dark-mode">
                    <div class="card-header py-3 dark-mode">
                        <h6 style="color: #026b97" class="  dark-mode m-0 font-weight-bold text-primary text-center">Thông tin thầy/cô</h6>
                    </div>
                    <div class="card-body row dark-mode bg-black">
                        <div class="col-xl-6 mb-3 avatar-info">
                            <div class="avatar-info-area"></div>
                            <input type="file" name="Hinh" class="form-control-file border">
                        </div>
                        <div class="col-xl-6 mb-3 info-individual dark-mode">
                            <label for="teachertName">Tên thầy/cô</label>
                            <input name="name" value="{{Auth::user()->name}}" readonly type="text" class="form-control dark-mode" placeholder="" id="txtTeacherName">
                            <label for="yearOlds">Tuổi</label>
                            <input name="age" type="number" class="form-control dark-mode" placeholder="" id="txtYearOlds">
                            <label for="teacherGender"> Giới tính:</label>
                            <p></p>
                            <input id="txtTeacherGender" checked value="1" type="radio" class="form-check-inlin dark-modee" name="gender">Nam
                            <input id="txtTeacherGender" value="2" type="radio" class="form-check-inline dark-mode" name="gender">Nữ
                            <input id="txtTeacherGender" value="3" type="radio" class="form-check-inline dark-mode" name="gender">Other
                            <label for="emailOther">Địa chỉ email</label>
                            <input name="email" value="{{Auth::user()->email}}" readonly  type="email" class="form-control dark-mode" placeholder="" id="txtEmailOther">
                            <label for="mobile">Số điện thoại</label>
                            <input name="mobile"  type="tel" class="form-control dark-mode" placeholder="" id="txtMobile">
                      
                        </div>
                    </div>
                </div>
                <div class="card shadow mb-4 dark-mode">
                    <div class="card-header py-3 dark-mode">
                        <h6 style="color: #026b97" class=" dark-mode m-0 font-weight-bold text-primary text-center">Thông tin cơ bản</h6>
                    </div>
                    <div class="card-body dark-mode bg-black">
                        
                        <div class="form-group">
                            <label for="department">Khoa</label>
                            <select name="department" class="form-control dark-mode" id="sel1">
                                <option>Công nghệ thông tin</option>
                                <option>Máy tính và Robot</option>
                                <option>Cơ kỹ thuật</option>
                                <option>Công nghệ kỹ thuật xây dựng</option>
                                <option>Công nghệ Hàng không vũ trụ</option>
                                <option>Kỹ thuật điều khiển và tự động hóa</option>
                                <option>Công nghệ nông nghiệp</option>
                                <option>Điện tử viễn thông</option>
                                <option>Vật lý kỹ thuật</option>
                                <option>Hàng không vũ trụ</option>
                            </select>
                        </div>
                        <label for="major">Ngành</label>
                        <input name="major"  type="text" class="form-control dark-mode" placeholder="" id="txtMajor">
                        <label for="numberCMT">Số chứng minh thư</label>
                        <input name="numberCMT"  type="text" class="form-control dark-mode" placeholder="" id="txtNumberCMT">
                        <label for="position">Vị trí/chức vụ</label>
                        <input name="position"  type="text" class="form-control dark-mode" placeholder="" id="txtPosition">
                        <label for="office">Văn phòng</label>
                        <input name="office"  type="text" class="form-control dark-mode" placeholder="" id="txtOffice">
                    
                    </div>
                </div>
            </div>
            <div class="col-md-6 dark-mode">
                <div class="card shadow mb-4 dark-mode">
                    <div class="card-header py-3 dark-mode">
                        <h6 style="color: #026b97" class=" dark-mode m-0 font-weight-bold text-primary text-center">Chi tiết thông tin tuyển</h6>
                    </div>
                    <div class="card-body dark-mode bg-black">
                        <label for="offer">Yêu cầu kỹ năng</label>
                    <table>
                        @foreach($skill as $ski)
                        <tr onclick="chon(this)">
                            <th><input type="checkbox" name="skill_id[]" value="{{$ski->id}}"></th>
                            <th>{{$ski->name}} </th>
                        @endforeach 
                    </table>
                        <!-- <textarea name="offer" class="form-control dark-mode" rows="5" id="txtOffer"></textarea> -->
                        <label for="topicResearch">Đề tài nghiên cứu</label>
                        <textarea name="topicResearch"  class="form-control dark-mode" rows="5" id="txtTopic"></textarea>
                        <label for="numbers">Số lượng</label>
                        <input  name="numbers"   type="number" class="form-control dark-mode" name="numbers" value="" id="txtNumbers" />
                        <label for="bonus">Đãi ngộ</label>
                        <textarea  name="bonus"  class="form-control dark-mode" rows="5" id="txtBonus"></textarea>
                        <label for="startDayOffer">Ngày bắt đầu đợt tuyển</label>
                        <input name="startDayOffer"   type="date" class="form-control dark-mode"  id="txtStartDayOffer">
                        <label for="endDayOffer">Ngày kết thúc đợt tuyển</label>
                        <input name="endDayOffer" type="date" class="form-control dark-mode" placeholder="" id="txtEndDayOffer">
                 
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

@endsection

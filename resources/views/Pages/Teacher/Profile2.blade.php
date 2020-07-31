
@extends('Pages.layout.menu')
@section('content')




<div class="container">
    <form class="" method="POST" action="./Pages/Teacher/updateProfile/{{Auth::user()->id}}">
    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
    <button type="submit" class="btn btn-primary" >Ghi nhận</button>
    <div class="row">
        <div class="col-md-6">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 style="color: #026b97 !important" class="m-0 font-weight-bold text-primary text-center">Thông tin thầy/cô</h6>
                </div>
                <div class="card-body row">
                    <div class="col-md-6 mb-3 avatar-info">
                        <div class="avatar-info-area"></div>
                        <input type="file" class="form-control-file border">
                    </div>
                    <div class="col-md-6 mb-3 info-individual">
                            <label for="teachertName">Tên thầy/cô</label>
                            <input name="name" value="{{Auth::user()->name}}" readonly type="text" class="form-control" placeholder="" id="txtTeacherName">
                            <label for="yearOlds">Tuổi</label>
                            <input name="age" type="number" class="form-control" placeholder="" id="txtYearOlds">
                            <label for="teacherGender"> Giới tính:</label>
                            <p></p>
                            <input id="txtTeacherGender" checked value="1" type="radio" class="form-check-inline" name="gender">Nam
                            <input id="txtTeacherGender" value="2" type="radio" class="form-check-inline" name="gender">Nữ
                            <input id="txtTeacherGender" value="3" type="radio" class="form-check-inline" name="gender">Other
                            <label for="emailOther">Địa chỉ email</label>
                            <input name="email" value="{{Auth::user()->email}}" readonly  type="email" class="form-control" placeholder="" id="txtEmailOther">
                            <label for="mobile">Số điện thoại</label>
                            <input name="mobile"  type="tel" class="form-control" placeholder="" id="txtMobile">
                      
                    </div>
                </div>
            </div>
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 style="color: #026b97 !important" class="m-0 font-weight-bold text-primary text-center">Thông tin cơ bản</h6>
                </div>
                <div class="card-body">
                        
                        <div class="form-group">
                            <label for="department">Khoa</label>
                            <select name="department" class="form-control" id="sel1">
                                <option>Công nghệ thông tin</option>
                                <option>Điện tử viễn thông</option>
                                <option>Vật lý kỹ thuật</option>
                                <option>Hàng không vũ trụ</option>
                            </select>
                        </div>
                        <label for="major">Ngành</label>
                        <input name="major"  type="text" class="form-control" placeholder="" id="txtMajor">
                        <label for="numberCMT">Số chứng minh thư</label>
                        <input name="numberCMT"  type="text" class="form-control" placeholder="" id="txtNumberCMT">
                        <label for="position">Vị trí/chức vụ</label>
                        <input name="position"  type="text" class="form-control" placeholder="" id="txtPosition">
                        <label for="office">Văn phòng</label>
                        <input name="office"  type="text" class="form-control" placeholder="" id="txtOffice">
                    
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 style="color: #026b97 !important" class="m-0 font-weight-bold text-primary text-center">Chi tiết thông tin tuyển</h6>
                </div>
                <div class="card-body">
                        <label for="offer">Yêu cầu/Tiêu chí</label>
                        <textarea name="offer" class="form-control" rows="5" id="txtOffer"></textarea>
                        <label for="topicResearch">Đề tài nghiên cứu</label>
                        <textarea name="topicResearch"  class="form-control" rows="5" id="txtTopic"></textarea>
                        <label for="numbers">Số lượng</label>
                        <input  name="numbers"   type="number" class="form-control" name="numbers" value="" id="txtNumbers" />
                        <label for="startDayOffer">Ngày bắt đầu đợt tuyển</label>
                        <input name="startDayOffer"   type="date" class="form-control"  id="txtStartDayOffer">
                        <label for="endDayOffer">Ngày kết thúc đợt tuyển</label>
                        <input name="endDayOffer" type="date" class="form-control" placeholder="" id="txtEndDayOffer">
                 
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

@endsection

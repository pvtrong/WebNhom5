
@extends('Pages.layout.menu')
@section('content')




<div class="container">
    <form class="" method="POST" action="./Pages/Company/updateProfile/{{Auth::user()->id}}" enctype="multipart/form-data">
    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
    <button type="submit" class="btn btn-primary" >Ghi nhận</button>
    <a href="./Pages/Company/CV/{{Auth::user()->id}}"><button type="reset" class="btn btn-primary" >CV Cá Nhân</button></a>
    <div class="row">
        <div class="col-md-6">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 style="color: #026b97 !important" class="m-0 font-weight-bold text-primary text-center">Thông tin công ty/doanh nghiệp</h6>
                </div>
                <div class="card-body row">
                    <div class="col-md-6 mb-3 avatar-info">
                    <br><p></p>
                         <div class="avatar-info-area"  ></div>
                        <input type="file" name="Hinh" class="form-control-file border">
                    </div>
                    <div class="col-md-6 mb-3 info-individual">
                            <input  type="hidden" name="id" value="{{Auth::user()->id}}" class="form-control" >
                            <label for="teachertName">Tên công ty/doanh nghiệp</label>
                            <input name="name" value="{{Auth::user()->name}}" readonly  type="text" class="form-control" placeholder="" id="txtCompanyName">
                            <label for="address">Địa chỉ</label>
                            <textarea name="address"  id="txtAddress" placeholder="Địa chỉ..." class="form-control" rows="5"></textarea>
                            <label for="emailOther">Địa chỉ email</label>
                            <input  name="email" value="{{Auth::user()->email}}" readonly type="email" class="form-control" placeholder="" id="txtEmailOther">
                            <label for="mobile">Số điện thoại</label>
                            <input  name="mobile"  type="tel" class="form-control" placeholder="" id="txtMobile">
                            <label for="fax">Số Fax</label>
                            <input  name="fax" type="tel" class="form-control" placeholder="" id="txtFax">
                            <label for="yearEstablish">Số năm thành lập</label>
                            <input  name="yearEstablish" value="" type="number" class="form-control" placeholder="" id="txtYearEstablish">
                        </form>
                    </div>
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
                        <textarea  name="offer"  class="form-control" rows="5" id="txtOffer"></textarea>
                        <label for="numbers">Số lượng</label>
                        <input  name="numbers"  type="number" class="form-control" name="numbers" value="" id="txtNumbers" />
                        <label for="salary">Lương</label>
                        <input  name="salary" type="text" class="form-control" placeholder="" id="txtSalary">
                        <label for="bonus">Đãi ngộ</label>
                        <textarea  name="bonus"  class="form-control" rows="5" id="txtBonus"></textarea>
                        <label for="startDayOffer">Ngày bắt đầu đợt tuyển</label>
                        <input  name="startDayOffer" type="date" class="form-control"  id="txtStartDayOffer">
                        <label for="endDayOffer">Ngày kết thúc đợt tuyển</label>
                        <input  name="endDayOffer"  type="date" class="form-control" placeholder="" id="txtEndDayOffer">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

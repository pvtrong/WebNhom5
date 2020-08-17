
@extends('Pages.layout.menu')
@section('content')




<div class="container">

    <form class="" method="POST" action="./Pages/Company/updateProfile/{{Auth::user()->id}}" enctype="multipart/form-data">
    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
    <button type="submit" class="btn btn-primary" >Ghi nhận</button>
    
    <div class="row dark-mode">
        <div class="col-md-6 dark-mode">
            <div class="card shadow mb-4 dark-mode">
                <div class="card-header py-3 dark-mode">
                    <h6 style="color: #026b97 " class=" dark-mode m-0 font-weight-bold text-primary text-center">Thông tin công ty/doanh nghiệp</h6>
                </div>
                <div class="card-body row dark-mode bg-black">
                    <div class="col-xl-6 mb-3 avatar-info">
                    <br><p></p>
                         <div class="avatar-info-area"  ></div>
                        <input type="file" name="Hinh" class="form-control-file border">
                    </div>
                    <div class="col-xl-6 mb-3 info-individual dark-mode">
                            <input  type="hidden" name="id" value="{{Auth::user()->id}}" class="form-control" >
                            <label for="teachertName">Tên công ty/doanh nghiệp</label>
                            <input name="name" value="{{Auth::user()->name}}" readonly  type="text" class="form-control dark-mode" placeholder="" id="txtCompanyName">
                            <label for="address">Địa chỉ</label>
                            <textarea name="address"  id="txtAddress" placeholder="Địa chỉ..." class="form-control dark-mode" rows="5"></textarea>
                            <label for="emailOther">Địa chỉ email</label>
                            <input  name="email" value="{{Auth::user()->email}}" readonly type="email" class="form-control dark-mode" placeholder="" id="txtEmailOther">
                            <label for="mobile">Số điện thoại</label>
                            <input  name="mobile"  type="tel" class="form-control dark-mode" placeholder="" id="txtMobile">
                            <label for="fax">Số Fax</label>
                            <input  name="fax" type="tel" class="form-control dark-mode" placeholder="" id="txtFax">
                            <label for="yearEstablish">Số năm thành lập</label>
                            <input  name="yearEstablish" value="" type="number" class="form-control dark-mode" placeholder="" id="txtYearEstablish">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 dark-mode">
            <div class="card shadow mb-4 dark-mode">
                <div class="card-header py-3 dark-mode">
                    <h6 style="color: #026b97" class=" dark-mode m-0 font-weight-bold text-primary text-center">Chi tiết thông tin tuyển</h6>
                </div>
                <div class="card-body dark-mode bg-black">
                        <label for="offer">Yêu cầu về kỹ năng</label>
                        <table>
                    @foreach($skill as $ski)
                    <tr onclick="chon(this)">
                            <th><input type="checkbox" name="skill_id[]" value="{{$ski->id}}"></th>
                            <th>{{$ski->name}}</th>
                    @endforeach
                    </table>
                        <!-- <textarea  name="offer"  class="form-control dark-mode" rows="5" id="txtOffer"></textarea> -->
                        <label for="numbers">Số lượng</label>
                        <input  name="numbers"  type="number" class="form-control dark-mode" name="numbers" value="" id="txtNumbers" />
                        <label for="salary">Lương</label>
                        <input  name="salary" type="text" class="form-control dark-mode" placeholder="" id="txtSalary">
                        <label for="bonus">Đãi ngộ</label>
                        <textarea  name="bonus"  class="form-control dark-mode" rows="5" id="txtBonus"></textarea>
                        <label for="startDayOffer">Ngày bắt đầu đợt tuyển</label>
                        <input  name="startDayOffer" type="date" class="form-control dark-mode"  id="txtStartDayOffer">
                        <label for="endDayOffer">Ngày kết thúc đợt tuyển</label>
                        <input  name="endDayOffer"  type="date" class="form-control dark-mode" placeholder="" id="txtEndDayOffer">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

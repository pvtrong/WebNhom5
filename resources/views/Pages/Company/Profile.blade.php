@extends('Pages.Company.MenuSelect')
@section('content')
<div class="container">
    <button type="submit" class="btn btn-primary">Ghi nhận</button>
    <div class="row">
        <div class="col-md-6">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 style="color: #026b97 !important" class="m-0 font-weight-bold text-primary text-center">Thông tin công ty/doanh nghiệp</h6>
                </div>
                <div class="card-body row">
                    <div class="col-md-6 mb-3 avatar-info">
                        <div class="avatar-info-area"></div>
                        <input type="file" class="form-control-file border">
                    </div>
                    <div class="col-md-6 mb-3 info-individual">
                        <form class="" action="/action_page.php">
                            <label for="teachertName">Tên công ty/doanh nghiệp</label>
                            <input type="text" class="form-control" placeholder="" id="txtTeacherName">
                            <label for="address">Địa chỉ</label>
                            <textarea  id="txtAddress" placeholder="Địa chỉ..." class="form-control" rows="5"></textarea>
                            <label for="emailOther">Địa chỉ email</label>
                            <input type="email" class="form-control" placeholder="" id="txtEmailOther">
                            <label for="mobile">Số điện thoại</label>
                            <input type="tel" class="form-control" placeholder="" id="txtMobile">
                            <label for="fax">Số Fax</label>
                            <input type="tel" class="form-control" placeholder="" id="txtFax">
                            <label for="yearEstablish">Số năm thành lập</label>
                            <input type="number" class="form-control" placeholder="" id="txtYearEstablish">
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
                    <form class="" action="/action_page.php">
                        <label for="offer">Yêu cầu/Tiêu chí</label>
                        <textarea class="form-control" rows="5" id="txtOffer"></textarea>
                        <label for="numbers">Số lượng</label>
                        <input type="number" class="form-control" name="numbers" value="" id="txtNumbers" />
                        <label for="salary">Lương</label>
                        <input type="text" class="form-control" placeholder="" id="txtSalary">
                        <label for="bonus">Đãi ngộ</label>
                        <textarea class="form-control" rows="5" id="txtBonus"></textarea>
                        <label for="studentBirth">Ngày bắt đầu đợt tuyển</label>
                        <input type="date" class="form-control"  id="txtStartDayOffer">
                        <label for="studentBirth">Ngày kết thúc đợt tuyển</label>
                        <input type="date" class="form-control" placeholder="" id="txtEndDayOffer">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

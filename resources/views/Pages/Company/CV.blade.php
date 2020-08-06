
@extends('Pages.layout.menu')
@section('content')




<div class="container">
    <a href="./Pages/Company/Share/{{$user->id}}"><button type="submit" class="btn btn-primary" >Blog cá nhân</button></a>
    <div class="row">
        <div class="col-md-6">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 style="color: #026b97 !important" class="m-0 font-weight-bold text-primary text-center">Thông tin công ty/doanh nghiệp</h6>
                </div>
                <div class="card-body row">
                    <div class="col-md-6 mb-3 avatar-info">
                        <br>
                        <div class="avatar-info-area" style="background-image: url('upload/company/{{$company->Hinh}}');" ></div>

                    </div>
                    <div class="col-md-6 mb-3 info-individual">
                        <br>
                        <i class="fa fa-user-circle" aria-hidden="true"></i>    Tên: {{$user ->name}}<br><br>
                        <i class="fa fa-address-book" aria-hidden="true"></i>    Địa chỉ: {{$company->address}}<br><br>

                        <i class="fa fa-envelope" aria-hidden="true"></i>     Email: {{$user->email}}<br><br>

                        <i class="fa fa-phone-square" aria-hidden="true"></i>   Số điện thoại: {{$company->mobile}} <br><br>

                        <i class="fa fa-heartbeat" aria-hidden="true"></i>   Thành lập năm: {{$company->yearEstablish}} <br><br>
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
                    <i class="fa fa-bolt" aria-hidden="true"></i>  <?php echo $company->offer ?> <br><br>
                    <i class="fa fa-graduation-cap" aria-hidden="true"></i>   Tuyển: <?php echo $company->numbers?> sinh viên.<br><br>
                    <i class="fa fa-university" aria-hidden="true"></i>     Mức lương: <?php echo $company->salary ?>. <br><br>
                    <i class="fa fa-plus-square" aria-hidden="true"></i>    Đãi ngộ: <?php echo $company->bonus ?>. <br><br>
                    <i class="fa fa-bullhorn" aria-hidden="true"></i>    Ngày bắt đầu đợt tuyển: <?php echo $company->startDayOffer?> <br><br>
                    <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>     Ngày kết thúc đợt tuyển: <?php echo $company->endDayOffer?><br><br>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection

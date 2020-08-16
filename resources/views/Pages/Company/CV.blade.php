
@extends('Pages.layout.menu')
@section('content')




<div class="container">
    <a href="./Pages/Company/Share/{{$user->id}}"><button type="submit" class="btn btn-primary dark-mode" >Blog cá nhân</button></a>
    <div class="row dark-mode">
        <div class="col-md-6 dark-mode">
            <div class="card shadow mb-4 dark-mode">
                <div class="card-header py-3">
                    <h6 style="color: #026b97" class=" dark-mode m-0 font-weight-bold text-primary text-center">Thông tin công ty/doanh nghiệp</h6>
                </div>
                <div class="card-body row dark-mode bg-black">
                    <div class="col-md-6 mb-3 avatar-info dark-mode">
                        <br>
                        <div class="avatar-info-area" style="background-image: url('upload/company/{{$company->Hinh}}');" ></div>

                    </div>
                    <div class="col-md-6 mb-3 info-individual dark-mode">
                        <br>
                        <h5><i class="fa fa-user-circle"></i>    Tên: {{$user ->name}}<br></h5>
                        <?php if($company ->address != "")echo "<h5><i class='fa fa-address-book'></i>    Địa chỉ: "."    ".$company ->address."<br></h5>"?>
                        <h5><i class="fa fa-envelope"></i>     Email: {{$user->email}}<br><br></h5>
                        <?php if($company ->mobile != "")echo "<h5><i class='fa fa-phone-square'></i>   Số điện thoại: "."    ".$company ->mobile."<br></h5>"?>
                        <?php if($company ->yearEstablish != "")echo "<h5><i class='fa fa-heartbeat'></i>   Thành lập năm: "."    ".$company ->yearEstablish."<br></h5>"?>
                        
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
                    <table>
                        @if($skillcheck)
                            
                            <?php echo "<h5><i class='fa fa-bolt'></i>    Yêu cầu: "?>
                                @foreach ($skillcheck as $item)
                                <?php echo $item ." "?>
                                
                                @endforeach
                                <?php echo "<br></h5>"?>
                                
                        @endif
                        </table>
                    
                    <?php if($company ->numbers != "")echo "<h5><i class='fa fa-graduation-cap'></i>   Tuyển: "."    ".$company ->numbers."<br></h5>"?>
                    <?php if($company ->salary != "")echo "<h5><i class='fa fa-university'></i>     Mức lương: "."    ".$company ->salary."<br></h5>"?>
                    <?php if($company ->bonus != "")echo "<h5><i class='fa fa-plus-square'></i>    Đãi ngộ: "."    ".$company ->bonus."<br></h5>"?>
                    <?php if($company ->startDayOffer != "")echo "<h5><i class='fa fa-bullhorn'></i>    Ngày bắt đầu đợt tuyển: "."    ".$company ->startDayOffer."<br></h5>"?>
                    <?php if($company ->endDayOffer != "")echo "<h5><i class='fa fa-exclamation-triangle'></i>     Ngày kết thúc đợt tuyển: "."    ".$company ->endDayOffer."<br></h5>"?>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

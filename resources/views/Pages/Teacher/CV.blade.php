
@extends('Pages.layout.menu')
@section('content')


<div class="container">
    <a href="./Pages/Teacher/Share/{{$user->id}}"><button type="submit" class="btn btn-primary" >Blog cá nhân</button></a>
        <div class="row">
            <div class="col-md-6">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 style="color: #026b97 !important" class="m-0 font-weight-bold text-primary text-center">Thông tin thầy/cô</h6>
                    </div>
                    <div class="card-body row">
                        <div class="col-md-6 mb-3 avatar-info">
                            <br>
                            <div class="avatar-info-area" style="background-image: url('upload/teacher/{{$teacher->Hinh}}');" ></div>
                        </div>
                        <div class="col-md-6 mb-3 info-individual">
                            <br>
                            <h5><i class="fa fa-user-circle"></i>    Tên thầy/cô:  <br>{{$user->name}}<br></h5>
                            <?php if($teacher ->age != "")echo "<h5><i class='fas fa-heart'></i>    Tuổi: "."    ".$teacher->age."<br></h5>"?>

                            <?php if($teacher ->gender != "")echo "<h5><i class='fas fa-venus-mars'></i>    Giới tính: "."    ".$teacher ->gender."<br></h5>"?>
                            <h5><i class="fa fa-envelope"></i>    Email: {{$user-> email}}<br></h5>
                            <?php if($teacher ->mobile != "")echo "<h5><i class='fa fa-phone-square' ></i>"."    ".$teacher ->mobile."<br></h5>"?>

                        </div>
                    </div>
                </div>
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 style="color: #026b97 !important" class="m-0 font-weight-bold text-primary text-center">Thông tin cơ bản</h6>
                    </div>
                    <div class="card-body">
                        <br>
                        <?php if($teacher ->department != "")echo "<h5>    <i class='fas fa-briefcase'></i>    Khoa: "."    ".$teacher ->department."<br></h5>"?>
                        <?php if($teacher ->major != "")echo "<h5><i class='fas fa-book-open'></i>   Ngành: "."    ".$teacher ->major."<br></h5>"?>
                        <?php if($teacher ->position != "")echo "<h5><i class='fas fa-address-card'></i>"."    Chức vụ: ".$teacher ->position."<br></h5>"?>
                        <?php if($teacher ->office != "")echo "<h5><i class='fa fa-building'></i>"."    Văn phòng: ".$teacher ->office."<br></h5>"?>

                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 style="color: #026b97 !important" class="m-0 font-weight-bold text-primary text-center">Chi tiết thông tin tuyển</h6>
                    </div>
                    <div class="card-body">
                        <?php if($teacher ->offer != "")echo "<h5><i class='fa fa-bolt'></i>     Yêu cầu: ".$teacher ->offer."<br></h5>"?>
                        <?php if($teacher ->topicResearch != "")echo "<h5><i class='fas fa-search'></i>     Đề tài nghiên cứu: ".$teacher ->topicResearch."<br></h5>"?>
                        <?php if($teacher ->numbers != "")echo "<h5><i class='fa fa-graduation-cap'></i>     Số lượng: ".$teacher ->numbers."<br></h5>"?>
                        <?php if($teacher ->bonus != "")echo "<h5><i class='fa fa-plus-square'></i>    Đãi ngộ: "."    ".$teacher ->bonus."<br></h5>"?>
                        <?php if($teacher ->startDayOffer != "")echo "<h5><i class='fa fa-bullhorn'></i>    Ngày bắt đầu đợt tuyển: "."    ".$teacher ->startDayOffer."<br></h5>"?>
                        <?php if($teacher ->endDayOffer != "")echo "<h5><i class='fa fa-exclamation-triangle'></i>     Ngày kết thúc đợt tuyển: "."    ".$teacher ->endDayOffer."<br></h5>"?>


                    </div>
                </div>
            </div>
        </div>
</div>
@endsection


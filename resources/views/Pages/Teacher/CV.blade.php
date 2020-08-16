
@extends('Pages.layout.menu')
@section('content')


<div class="container">
    <a href="./Pages/Teacher/Share/{{$user->id}}"><button type="submit" class="btn btn-primary dark-mode" >Blog cá nhân</button></a>
        <div class="row dark-mode">
            <div class="col-md-6 dark-mode">
                <div class="card shadow mb-4 dark-mode">
                    <div class="card-header py-3 dark-mode">
                        <h6 style="color: #026b97" class="  dark-mode m-0 font-weight-bold text-primary text-center">Thông tin thầy/cô</h6>
                    </div>
                    <div class="card-body row dark-mode bg-black">
                        <div class="col-md-6 mb-3 avatar-info dark-mode">
                            <br>
                            <div class="avatar-info-area" style="background-image: url('upload/teacher/{{$teacher->Hinh}}');" ></div>
                        </div>
                        <div class="col-md-6 mb-3 info-individual dark-mode">
                            <br>
                            <h5><i class="fa fa-user-circle dark-mode"></i>    Tên thầy/cô:  <br>{{$user->name}}<br></h5>
                            <?php if($teacher ->age != "")echo "<h5><i class='fas fa-heart dark-mode'></i>    Tuổi: "."    ".$teacher->age."<br></h5>"?>

                            <?php if($teacher ->gender != "")echo "<h5><i class='fas fa-venus-mars dark-mode'></i>    Giới tính: "."    ".$teacher ->gender."<br></h5>"?>
                            <h5><i class="dark-mode fa fa-envelope"></i>    Email: {{$user-> email}}<br></h5>
                            <?php if($teacher ->mobile != "")echo "<h5><i class='fa fa-phone-square dark-mode' ></i>"."    ".$teacher ->mobile."<br></h5>"?>
                     
                        </div>
                    </div>
                </div>
                <div class="card shadow mb-4 dark-mode">
                    <div class="card-header py-3 dark-mode">
                        <h6 style="color: #026b97 " class=" dark-mode m-0 font-weight-bold text-primary text-center">Thông tin cơ bản</h6>
                    </div>
                    <div class="card-body dark-mode bg-light">
                        <br>
                        <?php if($teacher ->department != "")echo "<h5>    <i class='fas fa-briefcase dark-mode'></i>    Khoa: "."    ".$teacher ->department."<br></h5>"?>
                        <?php if($teacher ->major != "")echo "<h5><i class='fas fa-book-open dark-mode'></i>   Ngành: "."    ".$teacher ->major."<br></h5>"?>
                        <?php if($teacher ->position != "")echo "<h5><i class='fas fa-address-card dark-mode'></i>"."    Chức vụ: ".$teacher ->position."<br></h5>"?>
                        <?php if($teacher ->office != "")echo "<h5><i class='fa fa-building dark-mode'></i>"."    Văn phòng: ".$teacher ->office."<br></h5>"?>
                    
                    </div>
                </div>
            </div>
            <div class="col-md-6 dark-mode">
                <div class="card shadow mb-4 dark-mode">
                    <div class="card-header py-3 dark-mode">
                        <h6 style="color: #026b97 " class=" dark-mode m-0 font-weight-bold text-primary text-center">Chi tiết thông tin tuyển</h6>
                    </div>
                    <div class="card-body dark-mode bg-light">
                        @if($skillcheck)
                            
                            <?php echo " <h5><i class='fa fa-bolt dark-mode'></i>    Yêu cầu: "?>
                                @foreach ($skillcheck as $item)
                                <?php echo $item ." "?>
                                
                                @endforeach

                             <?php echo "<br></h5>"?>
                                
                        @endif
                        
                        <?php if($teacher ->topicResearch != "")echo "<h5><i class='fas fa-search dark-mode'></i>     Đề tài nghiên cứu: ".$teacher ->topicResearch."<br></h5>"?>
                        <?php if($teacher ->numbers != "")echo "<h5><i class='fa fa-graduation-cap dark-mode'></i>     Số lượng: ".$teacher ->numbers."<br></h5>"?>
                        <?php if($teacher ->bonus != "")echo "<h5><i class='fa fa-plus-square dark-mode'></i>    Đãi ngộ: "."    ".$teacher ->bonus."<br></h5>"?>
                        <?php if($teacher ->startDayOffer != "")echo "<h5><i class='fa fa-bullhorn dark-mode'></i>    Ngày bắt đầu đợt tuyển: "."    ".$teacher ->startDayOffer."<br></h5>"?>
                        <?php if($teacher ->endDayOffer != "")echo "<h5><i class='fa fa-exclamation-triangle dark-mode'></i>     Ngày kết thúc đợt tuyển: "."    ".$teacher ->endDayOffer."<br></h5>"?>
                        
                        
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection


@extends('Pages.layout.menu')
@section('content')

<div class="container">
        <a href="./Pages/Student/Share/{{$user->id}}"><button type="submit" class="btn btn-primary dark-mode" >Blog cá nhân</button></a>

        <div class="row dark-mode">
            <div class="col-md-6 dark-mode">
                <div class="card shadow mb-4 dark-mode">
                    <div class="card-header py-3 dark-mode">
                        <h6 style="color: #026b97" class=" dark-mode m-0 font-weight-bold text-primary text-center">Thông tin cá nhân</h6>
                    </div>
                    <div class="card-body row dark-mode bg-black">
                        <div class="col-md-6 mb-3 avatar-info dark-mode">
                            <br>
                            <div class="avatar-info-area" style="background-image: url('upload/student/{{$student->Hinh}}');" ></div>
                        </div>
                        <div class="col-md-6 mb-3 info-individual dark-mode">

                            <br>
                            <?php if($user ->name != "")echo "<h5><i class='fa fa-user-circle dark-mode'></i>"."    ".$user ->name."<br></h5>"?>
                            <?php if($user ->address != "")echo "<h5><i class='fa fa-address-book dark-mode''></i>"."    ".$user ->address."<br></h5>"?>
                            <?php if($user ->email != "")echo "<h5><i class='fa fa-envelope dark-mode'></i>"."    ".$user ->email."<br></h5>"?>
                            <?php if($student ->mobile != "")echo "<h5><i class='fa fa-phone-square dark-mode' ></i>"."    ".$student ->mobile."<br></h5>"?>
                            <?php if($student ->birth != "")echo "<h5><i class='fas fa-birthday-cake dark-mode'></i>"."    ".$student ->birth."<br></h5>"?>
                            <?php if($student ->gender != "")echo "<h5><i class='fas fa-venus-mars dark-mode'></i>"."    ".$student ->gender."<br></h5>"?>



                        </div>

                    </div>
                </div>
                <div class="card shadow mb-4 dark-mode">
                    <div class="card-header py-3 dark-mode">
                        <h6 style="color: #026b97 " class=" dark-mode m-0 font-weight-bold text-primary text-center">Thông tin cơ bản</h6>

                    <div class="card-body dark-mode">

                        <div class="form-group">
                            <br>
                            <?php if($student ->department != "")echo "<h5>    <i class='fas fa-briefcase dark-mode'></i>    Khoa: "."    ".$student ->department."<br></h5>"?>
                            <?php if($student ->major != "")echo "<h5><i class='fas fa-book-open dark-mode'></i>   Ngành: "."    ".$student ->major."<br></h5>"?>
                            <?php if($student ->level != "")echo "<h5><i class='fas fa-window-restore dark-mode'></i>   Bậc: "."    ".$student ->level."<br></h5>"?>
                            <?php if($student ->trainingSystem != "")echo "<h5><i class='fa fa-address-card dark-mode'></i>    Hệ đào tạo: "."    ".$student ->trainingSystem."<br></h5>"?>
                            <?php if($student ->trainingProgram != "")echo "<h5><i class='fas fa-balance-scale dark-mode'></i>    Chương trình đào tạo: "."    ".$student ->trainingProgram."<br></h5>"?>
                            <?php if($student ->yearOfCourse != "")echo " <h5><i class='fas fa-graduation-cap dark-mode'></i>   Khoá: "."    ".$student ->yearOfCourse."<br></h5>"?>


                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-md-6 dark-mode">
            <div class="card shadow mb-4 dark-mode">
                <div class="card-header py-3 dark-mode">
                    <h6 style="color: #026b97" class=" dark-mode m-0 font-weight-bold text-primary text-center">Quá trình học tập</h6>
                </div>
                <div class="card-body dark-mode">
                    <br>
                    <table>
                        @if($skillcheck)

                            <?php echo " <h5><i class='fas fa-star dark-mode'></i>    Kỹ năng: "?>
                                @foreach ($skillcheck as $item)
                                <?php echo $item ." "?>

                                @endforeach


                        @endif
                        </table>
                    <?php if($student ->gpa != "")echo " <h5><i class='fas fa-star dark-mode'></i>    GPA: "."    ".$student ->gpa."<br></h5>"?>
                    <?php if($student ->prize != "")echo "<h5><i class='fas fa-crown dark-mode'></i>  Khen thưởng: "."    ".$student ->prize."<br></h5>"?>
                    <?php if($student ->forte != "")echo "<h5><i class='fas fa-battery-full dark-mode'></i>   Kỹ năng: "."    ".$student ->forte."<br></h5>"?>
                    <?php if($student ->skill != "")echo "<h5><i class='fas fa-basketball-ball dark-mode'></i>    Sở trường: "."    ".$student ->skill."<br></h5>"?>
                    <?php if($student ->favorite != "")echo "<h5><i class='fas fa-heart dark-mode'></i>    Sở thích: "."    ".$student ->favorite."<br></h5>"?>


                </div>
            </div>
        </div>
    </form>
</div>
@endsection

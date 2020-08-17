
@extends('Pages.layout.menu')
@section('content')
    
    <div class="intro-section" id="home">
      
        <div class="site-section section-1">
            <div class="container aos-init aos-animate" data-aos="fade-up">

                <header class="section-header">
                  <h2><strong>1. Về website</strong></h2>
                  <p>Luôn luôn là kim chỉ nam cho sinh viên khi muốn đăng ký thực tập, làm việc tại những công ty lớn. Cơ hội tuyển dụng cho công ty và là nơi quản lý tiềm năng sinh viên của nhà trường.</p>
                </header>
        
                <div class="row about-cols">
        
                  <div class="col-md-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                    <div class="about-col">
                      <div class="img">
                        <img src="assetHome/img/sumenhnhatrung.png" alt="" class="img-fluid">
                        <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
                      </div>
                      <h3 class="title">Sứ mệnh nhà trường</h3>
                      <p>
                        Tạo ra nơi để sinh viên có thể dễ dàng tiếp cận được công việc mong muốn ngay từ khi còn trên ghế nhà trường.
                      </p>
                    </div>
                  </div>
        
                  <div class="col-md-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                    <div class="about-col">
                      <div class="img">
                        <img src="assetHome/img/sumenhcongty.webp" alt="" class="img-fluid">
                        <div class="icon"><i class="ion-ios-list-outline"></i></div>
                      </div>
                      <h3 class="title">Sứ mệnh công ty</h3>
                      <p>
                        Nhiệm vụ của chúng tôi là lớn mạnh và phát triển đưa Việt Nam sánh ngang với các cường quốc năm châu, và đất nước có lớn mạnh được hay không là nhờ vào tài năng và nỗ lực của các bạn. Vì vậy, hãy đến với chúng tôi để có thế xây dựng tương lai tươi đẹp, xây dựng một Việt Nam sáng tươi lớn mạnh về công nghệ.
                      </p>
                    </div>
                  </div>
        
                  <div class="col-md-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                    <div class="about-col">
                      <div class="img">
                        <img src="assetHome/img/sumenhsinhvien.png" alt="" class="img-fluid">
                        <div class="icon"><i class="ion-ios-eye-outline"></i></div>
                      </div>
                      <h3 class="title">Sứ mệnh sinh viên</h3>
                      <p>
                        Cảm ơn nhà trường và công ty đã hợp tác tạo ra nơi để sinh viên chúng em có thể được hỗ trợ về công việc dễ dàng hơn. Đây thực sự là một website giúp đỡ chúng em rất nhiều.
                      </p>
                    </div>
                  </div>
        
                </div>
        
              </div>
            
            
        </div>
    </div>
    <div class="intro-section" id="statistical">
        <div class="container">
            <h2><strong>2. Thống kê</strong></h2>
            <div class="row">
                <div class="col-lg-6">
            
                    <div class="counter d-flex align-items-start mb-5 aos-init aos-animate" data-aos="fade-up" data-aos-delay="">
                        <div class="icon-wrap"><span class="flaticon-reload text-primary"></span></div>
                        <div class="counter-text">
                        <strong>{{$students}}</strong>
                        <span>Tài khoản sinh viên tìm kiếm việc làm</span>
                    </div>
                </div>

                <div class="counter d-flex align-items-start aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon-wrap"><span class="flaticon-download text-primary"></span></div>
                        <div class="counter-text">
                        <strong>{{$companys}}</strong>
                            <span>Tài khoản của nhà tuyển dụng</span>
                        </div>
                    </div>

                </div>
                <div class="col-lg-6">
            
                    <div class="counter d-flex align-items-start mb-5 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon-wrap"><span class="flaticon-monitor text-primary"></span></div>
                        <div class="counter-text">
                            <strong>{{$teachers}}</strong>
                            <span>Tài khoản của thầy cô tuyển thực tập sinh, sinh viên nghiên cứu khoa học</span>
                        </div>
                    </div>

                    <div class="counter d-flex align-items-start aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                        <div class="icon-wrap"><span class="flaticon-chat text-primary"></span></div>
                            <div class="counter-text">
                            <strong>{{$blogs}}</strong>
                                <span>Blog cá nhân chia sẻ kinh nghiệm,...</span>
                            </div>
                        </div>

                    </div>
                </div>
                <h4>Số lượng sinh viên theo kỹ năng: </h4>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Kỹ năng</th>
                            <th>Số lượng</th>
                
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($skill_all as $item)
                        <tr>
                            <td>{{$item['name']}}</td>
                            <td>{{$item['total']}}</td>
                            
                        </tr>
                        @endforeach
                        
                        
                    
                    </tbody>
                </table>
                    <h4>Số lượng thầy cô tuyển theo kỹ năng: </h4>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Kỹ năng</th>
                            <th>Số lượng</th>
                
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($skill_all2 as $item)
                        <tr>
                            <td>{{$item['name']}}</td>
                            <td>{{$item['total']}}</td>
                            
                        </tr>
                        @endforeach
                        
                        
                    
                    </tbody>
                </table>
                <h4>Số lượng thầy công ty tuyển theo kỹ năng: </h4>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Kỹ năng</th>
                            <th>Số lượng</th>
                
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($skill_all3 as $item)
                        <tr>
                            <td>{{$item['name']}}</td>
                            <td>{{$item['total']}}</td>
                            
                        </tr>
                        @endforeach
                        
                        
                    
                    </tbody>
                </table>
                
            </div>
        </div>
    </div>
@stop
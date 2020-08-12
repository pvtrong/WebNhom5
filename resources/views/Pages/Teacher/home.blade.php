
@extends('Pages.layout.menu')
@section('style')
    <base href="{{asset('')}}">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="asset/Content/fonts/Home/fonts/icomoon/style.css">

    <link rel="stylesheet" href="asset/CSS/Pages/Home/bootstrap.min.css">
    <link rel="stylesheet" href="asset/CSS/Pages/Home/jquery-ui.css">
    <link rel="stylesheet" href="asset/CSS/Pages/Home/owl.carousel.min.css">
    <link rel="stylesheet" href="asset/CSS/Pages/Home/owl.theme.default.min.css">
    <link rel="stylesheet" href="asset/CSS/Pages/Home/owl.theme.default.min.css">

    <link rel="stylesheet" href="asset/CSS/Pages/Home/jquery.fancybox.min.css">

    <link rel="stylesheet" href="asset/CSS/Pages/Home/bootstrap-datepicker.css">

    <link rel="stylesheet" href="asset/Content/fonts/Home/fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="asset/CSS/Pages/Home/aos.css">

    <link rel="stylesheet" href="asset/CSS/Pages/Home/style.css">
@stop
@section('content')


<div class="board" data-spy="scroll" data-target=".site-navbar-target" data-offset="100">
    <div class="site-wrap">
        <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">
            <div class="d-flex align-items-center">
                <div>
                    <nav class="site-navigation position-relative text-right" role="navigation">
                        <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                            <li><a href="./Pages/Teacher/Home#work-section" class="nav-link">Công việc</a></li>
                            <li><a href="./Pages/Teacher/Home#process-section" class="nav-link">Sứ mệnh</a></li>
                            <li><a href="./Pages/Teacher/Home#services-section" class="nav-link">Blog</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
          
        </header>
    
        <div class="site-section section-1">
                <div class="row">
                    <div class="col-lg-5 mr-auto mb-5">
                        <div class="mb-5">
                            <span class="section-sub-title d-block">Về chúng tôi</span>
                            <h2 class="section-title">Chúng tôi chú trọng chất lượng hơn số lượng.</h2>
                            <p>Trang Web tạo CV uy tín hàng đầu của DHCN giúp hỗ trợ sinh viên và doanh nghiệp tiếp cận nhau nhanh chóng, thuận lợi và chính xác.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="counter d-flex align-items-start mb-5" data-aos="fade-up" data-aos-delay="">
                            <div class="icon-wrap"><span class="flaticon-reload text-primary"></span></div>
                            <div class="counter-text">
                                <strong>2600</strong>
                                <span>Lượt truy cập mỗi ngày</span>
                            </div>
                        </div>
    
                        <div class="counter d-flex align-items-start" data-aos="fade-up" data-aos-delay="100">
                            <div class="icon-wrap"><span class="flaticon-download text-primary"></span></div>
                            <div class="counter-text">
                                <strong>2,500</strong>
                                <span>Việc làm được cập nhật</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="counter d-flex align-items-start mb-5" data-aos="fade-up" data-aos-delay="200">
                            <div class="icon-wrap"><span class="flaticon-monitor text-primary"></span></div>
                            <div class="counter-text">
                                <strong>87+</strong>
                                <span>Sinh viên có việc làm thông qua Website</span>
                            </div>
                        </div>
    
                        <div class="counter d-flex align-items-start" data-aos="fade-up" data-aos-delay="300">
                            <div class="icon-wrap"><span class="flaticon-chat text-primary"></span></div>
                            <div class="counter-text">
                                <strong>92%</strong>
                                <span>Offer việc thành công</span>
                            </div>
                        </div>
                    </div>
        
    
                    <div class="col-lg-6">
                        <div class="image-absolute-box" >
                            <div class="box" data-aos="fade-up">
                                <div class="icon-wrap"><span class="flaticon-vector"></span></div>
                                <h3>WebNhom5 là chìa khóa thành công.</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati commodi aspernatur eum eius inventore facilis.</p>
                            </div>
                            <img src="images/about_1.jpg" alt="Image" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <div class="site-section section-2" id="work-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mb-5">
                        <span class="section-sub-title d-block">Công việc</span>
                        <h2 class="section-title">Top công ty tuyển dụng</h2>
                    </div>
                </div>
    
            </div>
            <div class="owl-carousel nonloop-block-13">
                <a class="work-thumb" href="images/itviec-logo.jpg" data-fancybox="gallery">
                    <div class="work-text">
                        <h3>Tìm hiểu thêm</h3>
                        <span class="category">Vị trí cần tuyển: Front-end, Back-end, Full Stack, ...</span>
                    </div>
                    <img src="images/itviec-logo.jpg" alt="Image" class="img-fluid">
                </a> 
                <a class="work-thumb" href="images/images.png"  data-fancybox="gallery">
                    <div class="work-text">
                        <h3>Tìm hiểu thêm</h3>
                        <span class="category">Vị trí cần tuyển: Web Developer<br>Số lượng: 5</span>
                    </div>
                    <img src="images/images.png" alt="Image" class="img-fluid">
                </a>
                <a class="work-thumb" href="images/slide_2.jpg"  data-fancybox="gallery">
                    <div class="work-text">
                        <h3>Tìm hiểu thêm</h3>
                        <span class="category">Vị trí cần tuyển: Web Developer<br>Số lượng: 5</span>
                    </div>
                    <img src="images/slide_2.jpg" alt="Image" class="img-fluid">
              </a>
                <a class="work-thumb" href="images/slide_3.jpg"  data-fancybox="gallery">
                    <div class="work-text">
                        <h3>Tìm hiểu thêm</h3>
                        <span class="category">Vị trí cần tuyển: Web Developer<br>Số lượng: 5</span>
                    </div>
                    <img src="images/slide_3.jpg" alt="Image" class="img-fluid">
                </a>
                <a class="work-thumb" href="images/slide_4.jpg"  data-fancybox="gallery">
                    <div class="work-text">
                        <h3>Tìm hiểu thêm</h3>
                        <span class="category">Vị trí cần tuyển: Web Developer<br>Số lượng: 5</span>
                    </div>
                    <img src="images/slide_4.jpg" alt="Image" class="img-fluid">
                </a>
            </div>
        </div>
        <div class="site-section section-2" id="process-section" >
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mb-5">
                        <span class="section-sub-title d-block">Tiến trình của chúng tôi</span>
                        <h2 class="section-title">Tiến trình của chúng tôi</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="">
                        <div class="process p-3">
                            <span class="number">01</span>
                        <div>
                            <span class="flaticon-glasses display-4 text-primary mb-4 d-inline-block"></span>
                            <h3>Sứ mệnh của nhà trường</h3>
                            <p>Tạo ra nơi để sinh viên có thể dễ dàng tiếp cận được công việc mong muốn ngay từ khi còn trên ghế nhà trường.</p>
                        </div>
    
                    </div>
                </div>
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                <div class="process p-3">
                    <span class="number">02</span>
                <div>
                    <span class="flaticon-vector display-4 text-primary mb-4 d-inline-block"></span>
                    <h3>Sứ mệnh của doanh nghiệp</h3>
                    <p>Nhiệm vụ của chúng tôi là lớn mạnh và phát triển đưa Việt Nam sánh ngang với các cường quốc năm châu, và đất nước có lớn mạnh được hay không là nhờ vào tài năng và nỗ lực của các bạn. Vì vậy, hãy đến với chúng tôi để có thế xây dựng tương lai tươi đẹp, xây dựng một Việt Nam sáng tươi lớn mạnh về công nghệ.</p>
                </div>
    
            </div>
        </div>
        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="process p-3">
                <span class="number">03</span>
                <div>
                    <span class="flaticon-monitor display-4 text-primary mb-4 d-inline-block"></span>
                    <h3>Sứ mệnh của sinh viên</h3>
                    <p>Cảm ơn nhà trường và công ty đã hợp tác tạo ra nơi để sinh viên chúng em có thể được hỗ trợ về công việc dễ dàng hơn. Đây thực sự là một website giúp đỡ chúng em rất nhiều.</p>
                </div>
    
            </div>
        </div>
    </div>
</div>
</div>
    
    
        <div class="site-section bg-light" id="services-section">
          <div class="container">
            <div class="row">
              <div class="col-lg-6 mb-5">
                <span class="section-sub-title d-block">Blog phổ biến</span>
                <h2 class="section-title">Blog</h2>
              </div>
            </div>
    
          </div>
            
          <div class="owl-carousel nonloop-block-14">
            
            <div class="service">
              <div>
                <span class="flaticon-reload display-4 text-primary mb-4 d-inline-block"></span>
                <h3>Định hướng nghề nghiệp</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem possimus distinctio ex. Natus totam voluptatibus animi aspernatur ducimus quas obcaecati mollitia quibusdam temporibus culpa dolore molestias blanditiis consequuntur sunt nisi.</p>
              </div>
            </div>
    
    
            <div class="service">
              <div>
                <span class="flaticon-download display-4 text-primary mb-4 d-inline-block"></span>
                <h3>Download Videos</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem possimus distinctio ex. Natus totam voluptatibus animi aspernatur ducimus quas obcaecati mollitia quibusdam temporibus culpa dolore molestias blanditiis consequuntur sunt nisi.</p>
              </div>
            </div>
    
            <div class="service">
              <div>
                <span class="flaticon-monitor display-4 text-primary mb-4 d-inline-block"></span>
                <h3>Phát triển Web</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem possimus distinctio ex. Natus totam voluptatibus animi aspernatur ducimus quas obcaecati mollitia quibusdam temporibus culpa dolore molestias blanditiis consequuntur sunt nisi.</p>
              </div>
            </div>
    
            <div class="service">
              <div>
                <span class="flaticon-chat display-4 text-primary mb-4 d-inline-block"></span>
                <h3>24/7 Support</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem possimus distinctio ex. Natus totam voluptatibus animi aspernatur ducimus quas obcaecati mollitia quibusdam temporibus culpa dolore molestias blanditiis consequuntur sunt nisi.</p>
              </div>
            </div>
    
            <div class="service">
              <div>
                <span class="flaticon-glasses display-4 text-primary mb-4 d-inline-block"></span>
                <h3>Get Link Share</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem possimus distinctio ex. Natus totam voluptatibus animi aspernatur ducimus quas obcaecati mollitia quibusdam temporibus culpa dolore molestias blanditiis consequuntur sunt nisi.</p>
              </div>
            </div>
    
            <div class="service">
              <div>
                <span class="flaticon-vector display-4 text-primary mb-4 d-inline-block"></span>
                <h3>Creative Design</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem possimus distinctio ex. Natus totam voluptatibus animi aspernatur ducimus quas obcaecati mollitia quibusdam temporibus culpa dolore molestias blanditiis consequuntur sunt nisi.</p>
              </div>
            </div>
    
    
    
          </div>
    
        </div>
    
    
        
    
      
         
        <footer class="footer-section">
          <div class="container">
            <div class="row">
              <div class="col-md-4">
                <h3>Về WebNhom5</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro consectetur ut hic ipsum et veritatis corrupti. Itaque eius soluta optio dolorum temporibus in, atque, quos fugit sunt sit quaerat dicta.</p>
              </div>
    
              <div class="col-md-3 ml-auto">
                <h3>Links</h3>
                <ul class="list-unstyled footer-links">
                  <li><a href="#">Trang chủ</a></li>
                  <li><a href="#">Việc làm</a></li>
                  <li><a href="#">Sứ mệnh</a></li>
                  <li><a href="#">Blog</a></li>
                </ul>
              </div>
    
              <div class="col-md-4">
                <h3>Theo dõi</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt incidunt iure iusto architecto? Numquam, natus?</p>
                <form action="#">
                  <div class="d-flex mb-5">
                    <input type="text" class="form-control rounded-0" placeholder="Email">
                    <input type="submit" class="btn btn-primary rounded-0" value="Subscribe">
                  </div>
                </form>
              </div>
    
            </div>
    
            <div class="row pt-5 mt-5 text-center">
              <div class="col-md-12">
                <div class="border-top pt-5">
                <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          </p>
                </div>
              </div>
              
            </div>
          </div>
        </footer>
    
      
        
      </div> <!-- .site-wrap -->
</div>

@stop
@section('script')
    
  <script src="asset/JS/pages/Home/jquery-3.3.1.min.js"></script>
  <script src="asset/JS/pages/Home/jquery-migrate-3.0.1.min.js"></script>
  <script src="asset/JS/pages/Home/jquery-ui.js"></script>
  <script src="asset/JS/pages/Home/popper.min.js"></script>
  <script src="asset/JS/pages/Home/bootstrap.min.js"></script>
  <script src="asset/JS/pages/Home/owl.carousel.min.js"></script>
  <script src="asset/JS/pages/Home/jquery.stellar.min.js"></script>
  <script src="asset/JS/pages/Home/jquery.countdown.min.js"></script>
  <script src="asset/JS/pages/Home/bootstrap-datepicker.min.js"></script>
  <script src="asset/JS/pages/Home/jquery.easing.1.3.js"></script>
  <script src="asset/JS/pages/Home/aos.js"></script>
  <script src="asset/JS/pages/Home/jquery.fancybox.min.js"></script>
  <script src="asset/JS/pages/Home/jquery.sticky.js"></script>

  
  <script src="js/main.js"></script>
@stop

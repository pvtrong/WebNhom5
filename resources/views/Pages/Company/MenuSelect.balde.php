
@extends('Pages.layout.index')
@section('menu_select')
<a class="menu-item" href="./Pages/Company/Home">
    <span class="menu-item-icon icon-board"></span>
    <span class="menu-item-text">Tổng quan</span>
</a>
<a class="menu-item" href="./Pages/Company/Profile">
    <div class="menu-item-icon icon-teacher"></div>
    <div class="menu-item-text">Hồ sơ</div>
</a>
<a class="menu-item" href="./Pages/Company/DS1">
    <div class="menu-item-icon icon-profile"></div>
    <div class="menu-item-text">Sinh viên</div>
</a>
<a class="menu-item" href="./Pages/Company/DS2">
    <div class="icon-more icon-company"></div>
    <div class="menu-item-text">Nhà trường</div>
</a>
<a class="menu-item" href="./Pages/Company/Blog">
    <div class="icon-more icon-blog"></div>
    <div class="menu-item-text">Blog cá nhân</div>
</a>
<a class="menu-item" href="./Pages/Company/Setting">
    <div class="menu-item-icon icon-setting"></div>
    <div class="menu-item-text">Thiết lập</div>
</a>
<a class="menu-item" href="./Pages/Company/Help">
    <div class="menu-item-icon icon-help"></div>
    <div class="menu-item-text">Trợ giúp</div>
</a>
@endsection
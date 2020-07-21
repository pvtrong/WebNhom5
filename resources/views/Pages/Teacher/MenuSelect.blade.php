
@extends('Pages.layout.index')
@section('menu_select')
<a class="menu-item" href="./index.html">
    <span class="menu-item-icon icon-board"></span>
    <span class="menu-item-text">Tổng quan</span>
</a>
<a class="menu-item" href="Profile.html">
    <div class="menu-item-icon icon-teacher"></div>
    <div class="menu-item-text">Hồ sơ</div>
</a>
<a class="menu-item" href="Student.html">
    <div class="menu-item-icon icon-profile"></div>
    <div class="menu-item-text">Sinh viên</div>
</a>
<a class="menu-item" href="Company.html">
    <div class="icon-more icon-company"></div>
    <div class="menu-item-text">Doanh nghiệp</div>
</a>
<a class="menu-item" href="Blog.html">
    <div class="icon-more icon-blog"></div>
    <div class="menu-item-text">Blog cá nhân</div>
</a>
<a class="menu-item" href="Setting.html">
    <div class="menu-item-icon icon-setting"></div>
    <div class="menu-item-text">Thiết lập</div>
</a>
<a class="menu-item" href="Help.html">
    <div class="menu-item-icon icon-help"></div>
    <div class="menu-item-text">Trợ giúp</div>
</a>
<a class="menu-item" href="API.html">
    <div class="icon-more icon-api"></div>
    <div class="menu-item-text">API</div>
</a>
@endsection
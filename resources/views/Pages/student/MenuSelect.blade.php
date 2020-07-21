
@extends('Pages.layout.index')
@section('menu_select')
<a class="menu-item" href="">
    <span class="menu-item-icon icon-board"></span>
    <span class="menu-item-text">Tổng quan</span>
</a>
<a class="menu-item" href="./PagesStudent/Profile.html">
    <div class="menu-item-icon icon-profile"></div>
    <div class="menu-item-text">Hồ Sơ</div>
</a>
<a class="menu-item" href="./PagesStudent/Blog.html">
    <div class="icon-more icon-blog"></div>
    <div class="menu-item-text">Blog cá nhân</div>
</a>
<a class="menu-item" href="./PagesStudent/Company.html">
    <div class="icon-more icon-company"></div>
    <div class="menu-item-text">Công Ty</div>
</a>
<a class="menu-item" href="./PagesStudent/Teacher.html">
    <div class="menu-item-icon icon-teacher"></div>
    <div class="menu-item-text">Nhà Trường</div>
</a>
<a class="menu-item" href="./PagesStudent/Setting.html">
    <div class="menu-item-icon icon-setting"></div>
    <div class="menu-item-text">Thiết Lập</div>
</a>
<a class="menu-item" href="./PagesStudent/Help.html">
    <div class="menu-item-icon icon-help"></div>
    <div class="menu-item-text">Trợ giúp</div>
</a>
@endsection
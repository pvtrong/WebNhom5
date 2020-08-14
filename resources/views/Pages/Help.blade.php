@extends('Pages.layout.menu')
@section('content')
    <form class="" method="POST" action="./Pages/Help" enctype="multipart/form-data">
    
    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
        <div class="form-group row">
            <div class="col-md-12">
            <input type="hidden" name="id_user" value="{{Auth::user()->id}}">
                <input type="text" class="form-control dark-mode" name="name" placeholder="Họ và tên">
            </div>
            
        </div>

        <div class="form-group row">
            <div class="col-md-12">
                <input type="text" class="form-control dark-mode" name="title" placeholder="Tiêu đề">
            </div>
            </div>

            <div class="form-group row">
            <div class="col-md-12">
                <input type="email" class="form-control dark-mode" name="email" placeholder="Email">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-12">
                <textarea class="form-control dark-mode" id="" cols="30" name="content" rows="10" placeholder="Để lại tin nhắn của bạn ở đây. Cảm ơn đóng góp của các bạn."></textarea>
            </div>
            </div>

            <div class="form-group row">
            <div class="col-md-6">
                
                <button type="submit" class="btn btn-primary dark-mode"><i class="white fa fa-save"></i>  Liên hệ</button>
            </div>
        </div>

    </form>

@endsection

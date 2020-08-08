@extends('Pages.layout.menu')
@section('content')
<form method="POST" action="./Pages/Setting">
    @csrf
    <input name="id" type="hidden" value="{{Auth::user()->id}}">
    <div class="form-group updatePw position-relative">

        <label for="password_old">Mật khẩu cũ:</label>
        <input name="password_old" type="password" class="form-control" placeholder="******">
        <a class="eye" href="javascript:;void(0);"><i class="fa fa-eye"></i></a>
        @if($errors->has('password_old'))
            <span class="error-text">
                {{$errors->first('password_old')}}
            </span>
        @endif
    </div>
    <div class="form-group updatePw position-relative">
        <label for="password">Mật khẩu mới:</label>
        <input name="password" type="password" class="form-control" placeholder="******">
        <a class="eye" href="javascript:;void(0);"><i class="fa fa-eye"></i></a>
        @if($errors->has('password'))
            <span class="error-text">
                {{$errors->first('password')}}
            </span>
        @endif
    </div>
    <div class="form-group updatePw position-relative">
        <label for="pw_confirm">Nhập lại mật khẩu mới:</label>
        <input name="pw_confirm" type="password" class="form-control" placeholder="******">
        <a class="eye" href="javascript:;void(0);"><i class="fa fa-eye"></i></a>
        @if($errors->has('pw_confirm'))
            <span class="error-text">
                {{$errors->first('pw_confirm')}}
            </span>
        @endif
    </div>
    <button type="submit" class="btn btn-primary"><i class="white fa fa-save"></i>  Submit</button>
  </form>
@stop
@section('script')
  <script>
      $(function(){
          $(".updatePw a").click(function(){
            let $this = $(this);
            if($this.hasClass('active')){
                $this.parents('.updatePw').find('input').attr('type', 'text');
                $this.removeClass('active');
            } else {
                $this.parents('.updatePw').find('input').attr('type', 'password');
                $this.addClass('active');
            }
          });
      })
  </script>
  @stop

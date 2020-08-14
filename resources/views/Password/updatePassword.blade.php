@extends('Pages.layout.menu')
@section('content')
<form method="POST" action="./Pages/Setting">
    @csrf
    <input name="id" type="hidden" value="{{Auth::user()->id}}">
    <div class="form-group updatePw position-relative">
    
        <label for="password_old">Mật khẩu cũ:</label>
        @if($errors->has('password_old'))
            <span class="error-text">
                {{$errors->first('password_old')}}
            </span>
        @endif
        <input name="password_old" type="password" class="form-control dark-mode" placeholder="******">
        <a class="eye" href="javascript:;void(0);"><i class="fa fa-eye dark-mode"></i></a>
        
    </div>
    
    <div class="form-group updatePw position-relative">
        <label for="password">Mật khẩu mới:</label>
        @if($errors->has('password'))
            <span class="error-text">
                {{$errors->first('password')}}
            </span>
        @endif
        <input name="password" type="password" class="form-control dark-mode" placeholder="******">
        <a class="eye" href="javascript:;void(0);"><i class="fa fa-eye dark-mode"></i></a>
        
    </div>
    
    <div class="form-group updatePw position-relative">
        <label for="pw_confirm">Nhập lại mật khẩu mới:</label>
        @if($errors->has('pw_confirm'))
        <span class="error-text">
            {{$errors->first('pw_confirm')}}
        </span>
        @endif
        <input name="pw_confirm" type="password" class="form-control dark-mode" placeholder="******">
        <a class="eye" href="javascript:;void(0);"><i class="fa fa-eye dark-mode"></i></a>
        
    </div>
    <button type="submit" class="btn btn-primary dark-mode"><i class="white fa fa-save dark-mode"></i>  Submit</button>
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
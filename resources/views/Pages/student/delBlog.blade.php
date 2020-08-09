@extends('Pages.layout.menu')
@section('content')
<h1>Bạn đã xóa thành công :(( !!!</h1>

<form action="Pages/Student/Blog " method="get" enctype="multipart/form-data">
    <input type="hidden" name ="_token" value="{{csrf_token()}}"/>
        <button type="submit" class="btn btn-primary">Back</button>
</form>

@endsection

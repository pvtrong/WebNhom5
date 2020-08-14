@extends('Pages.layout.menu')
@section('content')
    <div class="container">
        <div class="row dark-mode">
            <div class="col-sm-8 dark-mode">
                <h2 class="dark-mode" style="font-weight: bold;margin-bottom: 20px; color: #666;">{!!$blog->title!!}</h2>
                <div class="dark-mode"  style="font-weight:bold; color: #333;">{!!$blog->description!!}</div>
                <div class="dark-mode" >{!!$blog->content!!}</div>
            </div>
            <div class="col-sm-4 dark-mode">
                <h5 class="dark-mode"  style="font-weight: bold; color: #666;">Bài viết:</h5>
                @foreach($BL_temp as $temp)
                <div class="row dark-mode">
                    <div class="col-sm-6 dark-mode">
                    <a href="./Pages/Student/Share2/{{$temp->id_blog}}">
                            <img class="bl_avatar" src="upload/blog/{{$temp->Hinh}}" alt="">
                        </a>
                    </div>
                    <div class="col-sm-6 dark-mode">
                        <a href="./Pages/Student/Share2/{{$temp->id_blog}}"><h6>{!!$temp->title!!}</h6></a>
                        <p>{!!$temp->description!!}</p>
                        <p>{!!$temp->created_at!!}</p>
                    </div>
                </div>
                @endforeach
                <div>
                    {!!$BL_temp->links() !!}
                </div>
            </div>
        </div>
    </div>
@endsection

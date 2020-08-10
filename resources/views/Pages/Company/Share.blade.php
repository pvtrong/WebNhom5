@extends('Pages.layout.menu')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <h2 style="font-weight: bold;margin-bottom: 20px; color: #666;">{!!$blog->title!!}</h2>
                <div style="font-weight:bold; color: #333;">{!!$blog->description!!}</div>
                <div>{!!$blog->content!!}</div>
            </div>
            <div class="col-sm-4">
                <h5 style="font-weight: bold; color: #666;">Bài viết:</h5>
                @foreach($BL_temp as $temp)
                <div class="row">
                    <div class="col-sm-6">
                    <a href="./Pages/Company/Share2/{{$temp->id_blog}}">
                            <img class="bl_avatar" src="upload/blog/{{$temp->Hinh}}" alt="">
                        </a>
                    </div>
                    <div class="col-sm-6">
                        <a href="./Pages/Company/Share2/{{$temp->id_blog}}"><h6>{!!$temp->title!!}</h6></a>
                        <p>{!!$temp->description!!}</p>
                        <p>{!!$temp->created_at!!}</p>
                    </div>
                </div>
                @endforeach
                <div>
                    {!! $BL_temp->links() !!}
                </div>
            </div>
        </div>
    </div>
@endsection

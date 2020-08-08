@extends('Pages.layout.menu')
@section('content')
    <div class="container">
        <header>
            <h3 class="text-center">Tên giáo viên + BLOG</h3>
        </header>
        <div class=" col-lg-12">
            <div class="row">

                @foreach($BL_temp as $temp)
                <div class="col-lg-4 col-md-6">
                    <figure>
                    <a href="https://uet.vnu.edu.vn/"><img src="https://c8.alamy.com/comp/RFCJJ1/young-male-student-studying-math-at-school-RFCJJ1.jpg" class="img-fluid img-thumbnail" alt=""></a>
                    </figure>

                    <div>
                    <p><a href="https://uet.vnu.edu.vn/">{{$temp->title}}</a></p>
                    </div>
                </div>
                @endforeach
            </div>

        </div>

        <div class="row2">
            <div class="col-sm-12 col-md-5">
                <div class="dataTables_info" id="dataTable_info" role="status" aria-live="polite">Hiển thị 2 trên 6 kết quả</div>
            </div>
            
            <div>
                {{ $BL_temp->links() }}
            </div>
        </div>
    </div>
@endsection

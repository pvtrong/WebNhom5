@extends('Pages.layout.menu')
@section('content')

<div class="container-fluid">

                                <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Danh sách thầy cô tuyển sinh viên nghiên cứu</h1>


                                <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 style="color: #026b97 !important" class="m-0 font-weight-bold text-primary">Danh sách</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="dataTables_length" id="dataTable_length">
                                <label>
                                    Hiển thị:
                                    <select name="dataTable_length" aria-controls="dataTable" class="custom-select custom-select-sm form-control form-control-sm">
                                        <option value="10">10</option>
                                        <option value="25">25</option>
                                        <option value="50">50</option>
                                        <option value="100">100</option>
                                    </select> kết quả
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div id="dataTable_filter" class="dataTables_filter">
                                <label>
                                     Tìm kiếm:
                                </label>
                                <form action="Pages/Student/DS2" method = "get">
                                    <input type="hidden" name ="_token" value="{{ csrf_token()}}";>
                                    <div class = "d-flex">
                                        <input type="search" name ="search" id="search" class="form-control " placeholder="search" aria-controls="dataTable">
                                        <button type="submit" class="btn btn-primary mx-2">Search</button>
                                    </div>
                                </form>
                                
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                                
                                <thead>
                                    <tr>
                                    <th class="sorting_asc  text-center" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" style="width: 100px;">Họ và tên</th>
                                    <th class="sorting text-center text-center" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 6em !important">Vị trí</th>
                                    <th class="sorting text-center" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 6em !important;">Văn phòng</th>
                                    <th class="sorting text-center" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 6em !important;">Tuổi</th>
                                    <th class="sorting text-center" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 6em !important;">Đề tài</th>
                                    <th class="sorting text-center" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 6em !important;">Yêu cầu</th>
                                    <th class="sorting text-center" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 6em !important;">Số lượng</th>
                                    <th class="sorting text-center" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 6em !important;">Thêm</th>
                                    </tr>
                                </thead>
                                
                                <tfoot>
                                    <tr role="row">
                                        <th class="sorting_asc text-center" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" style="width: 58px;">
                                            <form action="Pages/Student/DS2" method = "get">
                                                <select name="name"  class="form-control" id="name" onchange="this.form.submit()">
                                                <option name ="name" value="">Họ và tên</option>
                                                @foreach( $user as $u)
                                                    <option name ="name" value="{{ $u->id}}">{{ $u->name}} </option>
                                                @endforeach
                                                </select>   
                                            </form>                             
                                        </th>
                                        <th class="sorting_asc  text-center" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" style="width: 58px;">
                                            <form action="Pages/Student/DS2" method = "get">
                                                <select name="department"  class="form-control" id="department" onchange="this.form.submit()">
                                                <option name ="name" value="">Vị trí</option>
                                                    @foreach( $teacher as $t)
                                                        <option name ="department"value="{{ $t -> department}}">{{ $t->department}}</option>
                                                    @endforeach
                                                </select> 
                                            </form>
                                        </th>
                                        <th class="sorting text-center" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 4em !important">
                                            <form action="Pages/Student/DS2" method = "get">
                                                <select name="office"  class="form-control" id="office" onchange="this.form.submit()">
                                                <option name ="office" value="">Văn phòng</option>
                                                    @foreach( $teacher as $t)
                                                        <option name ="office" value="{{ $t -> office}}">{{ $t->office}}</option>
                                                    @endforeach
                                           
                                                </select>
                                            </form>
                                        </th>
                                        <th class="sorting text-center" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 4em !important">
                                            <form action="Pages/Student/DS2" method = "get">
                                                <select name="age"  class="form-control" id="age" onchange="this.form.submit()">
                                                <option name ="age" value="">Tuổi</option>
                                                    @foreach($teacher as $t)
                                                    <option name ="age" value="{{ $t->age }}">{{ $t->age}}</option>
                                                    @endforeach
                                                </select>
                                            </form>  
                                        </th>
                                        <th class="sorting text-center" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 4em !important">
                                            <form action="Pages/Student/DS2" method = "get">
                                            <select name="topic"  class="form-control" id="topic" onchange="this.form.submit()">
                                            <option name ="topic" value="">Đề tài</option>
                                                @foreach( $teacher as $t)
                                                    <option name ="topic" value="{{ $t -> topicResearch}}">{{ $t->topicResearch}}</option>
                                                @endforeach
                                            </select> 
                                            </form>
                                        </th>
                                        <th class="sorting text-center" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 4em !important">
                                            <form action="Pages/Student/DS2" method = "get">
                                                <select name="offer"  class="form-control" id="offer" onchange="this.form.submit()">
                                                <option name ="offer" value="">Yêu cầu</option>
                                                    @foreach( $teacher as $t)
                                                        <option name ="offer" value="{{ $t -> offer}}">{{ $t->offer}}</option>
                                                    @endforeach
                                                </select>
                                            </form>

                                        </th>
                                        <th class="sorting text-center" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 4em !important">
                                            <form action="Pages/Student/DS2" method = "get">
                                                <select name="number"  class="form-control" id="number" onchange="this.form.submit()">
                                                <option name ="namber" value="">Số lượng</option>
                                                    @foreach( $teacher as $t)
                                                        <option name="numbers" value="{{ $t -> numbers}}">{{ $t->numbers}}</option>
                                                    @endforeach
                                                </select>
                                            </form> 
                                        </th>
                                    </tr>
                                </tfoot>

                            
                                <tbody>
                        
                                    @foreach($data as $tc)
                                        
                                        <tr role="row" class="even">
                                            <td class="text-center" >{{$tc->name1}}</td>
                                            <td>{{$tc->department1}}</td>
                                            <td >{{$tc->office1}}</td>
                                            <td class="text-center">{{$tc->age1}}</td>
                                            <td >{{$tc->topicResearch1}}</td>
                                            <td>{{$tc->offer1}}</td>
                                            <td class="text-center">{{$tc->numbers1}}</td>
                                            <td class="center"><i class="fas fa-info-circle"></i><a href="#">Thông tin thêm</a></td>
                                        </tr>
                                    @endforeach
                                    
                                </tbody>
                                {!! $data->appends(request()->input())->links() !!}
                               
                            </table>
                            
                            
                        </div>
                    </div>
                                        
                </div>
            </div>
        </div>
    </div>
   
@endsection
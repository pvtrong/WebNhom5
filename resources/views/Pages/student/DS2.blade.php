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
                        <div class="col-sm-12 col-md-6">
                            <div id="dataTable_filter" class="dataTables_filter">
                                
                                
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                                
                                <thead>
                                    <tr>
                                    <th class="sorting_asc  text-center" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" style="width: 100px;">Họ và tên</th>
                                    <th class="sorting text-center text-center" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 6em !important">Email</th>
                                    <th class="sorting text-center" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 6em !important;">Khoa</th>
                                    <th class="sorting text-center" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 6em !important;">Đề tài</th>
                                    <th class="sorting text-center" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 6em !important;">Yêu cầu</th>
                                    <th class="sorting text-center" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 6em !important;">Số lượng</th>
                                    <th class="sorting text-center" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 6em !important;">Xem thêm</th>
                                    <th class="sorting text-center" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 6em !important;"></th>
                                    
                                    
                                    </tr>
                                </thead>
                                
                                <tfoot>
                                    <tr role="row">
                                        <th class="sorting_asc text-center" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" style="width: 58px;">
                                            <form action="Pages/Student/DS2" method = "get">
                                                <select name="name"  class="form-control" id="name" onchange="this.form.submit()">
                                                <option name ="name" value="">Họ và tên</option>
                                                    @foreach( $user1 as $u)
                                                        <option name ="name"value="{{ $u -> id}}">{{ $u->name}}</option>
                                                    @endforeach
                                                </select> 
                                            </form>
                                                             
                                        </th>

                                        <th class="sorting_asc text-center" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" style="width: 58px;">
                                            <form action="Pages/Student/DS2" method = "get">
                                                <select name="email"  class="form-control" id="email" onchange="this.form.submit()">
                                                <option name ="email" value="">Email</option>
                                                    @foreach( $user2 as $u)
                                                        <option name ="email"value="{{ $u -> id}}">{{ $u->email}}</option>
                                                    @endforeach
                                                </select> 
                                            </form>
                                                             
                                        </th>

                                        <th class="sorting_asc  text-center" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" style="width: 58px;">
                                            <form action="Pages/Student/DS2" method = "get">
                                                <select name="department"  class="form-control" id="department" onchange="this.form.submit()">
                                                    <option name ="name" value="">Khoa</option>
                                                    <?php
                                                        $teachers = []; 
                                                        foreach( $teacher as $tc){
                                                            $tc->department = ucwords($tc->department);
                                                            array_push($teachers, $tc->department);
                                                        }
                                                        
                                                        $teachers = array_unique($teachers);
                                                        sort($teachers);
                                                        foreach($teachers as $department)
                                                        echo "<option name ='department' value='" .$department ."'>" .$department ."</option>";
                                                    ?>
                                                </select> 
                                            </form>
                                        </th>
                                        
                                        <th class="sorting text-center" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 4em !important">
                                            <form action="Pages/Student/DS2" method = "get">
                                            <select name="topic"  class="form-control" id="topic" onchange="this.form.submit()">
                                            <option name ="topic" value="">Đề tài</option>
                                                <?php
                                                    $teachers = []; 
                                                    foreach( $teacher as $tc){
                                                        $tc->topicResearch = ucwords($tc->topicResearch);
                                                        array_push($teachers, $tc->topicResearch);
                                                    }
                                                    
                                                    $teachers = array_unique($teachers);
                                                    sort($teachers);
                                                    foreach($teachers as $topicResearch)
                                                    echo "<option name ='topicResearch' value='" .$topicResearch ."'>" .$topicResearch ."</option>";
                                                ?>
                                            </select> 
                                            </form>
                                        </th>
                                        <th class="sorting text-center" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 4em !important">
                                            <form action="Pages/Student/DS2" method = "get">
                                                <select name="offer"  class="form-control" id="offer" onchange="this.form.submit()">
                                                    <option name ="offer" value="">Yêu cầu</option>
                                                    <?php
                                                        $teachers = []; 
                                                        foreach( $teacher as $tc){
                                                            $tc->offer = ucwords($tc->offer);
                                                            array_push($teachers, $tc->offer);
                                                        }
                                                        
                                                        $teachers = array_unique($teachers);
                                                        sort($teachers);
                                                        foreach($teachers as $offer)
                                                        echo "<option name ='offer' value='" .$offer ."'>" .$offer ."</option>";
                                                    ?>
                                                </select>
                                            </form>

                                        </th>
                                        <th class="sorting text-center" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 4em !important">
                                            <form action="Pages/Student/DS2" method = "get">
                                                <select name="number"  class="form-control" id="number" onchange="this.form.submit()">
                                                <option name ="namber" value="">Số lượng</option>
                                                    <?php
                                                        $teachers = []; 
                                                        foreach( $teacher as $tc){
                                                            $tc->numbers = ucwords($tc->numbers);
                                                            array_push($teachers, $tc->numbers);
                                                        }
                                                        
                                                        $teachers = array_unique($teachers);
                                                        sort($teachers);
                                                        foreach($teachers as $numbers)
                                                        echo "<option name ='numbers' value='" .$numbers ."'>" .$numbers ."</option>";
                                                    ?>
                                                </select>
                                            </form> 
                                        </th>
                                        <th class="text-center">Xem thêm</th>
                                        <th class="text-center"></th>
                                    </tr>
                                    
                                </tfoot>

                            
                                <tbody>
                        
                                    @foreach($data as $d)
                                        
                                        <tr role="row" class="even">
                                            <td class="text-center" >{{$d->name1}}</td>
                                            <td>{{$d->email1}}</td>
                                            <td >{!!$d->department1!!}</td>
                                            <td >{!!$d->topicResearch1!!}</td>
                                            <td>{!!$d->offer1!!}</td>
                                            <td class="text-center">{{$d->numbers1}}</td>
                                            <td class="text-center"><i class="fas fa-info-circle"></i><a href=".Pages/Student/CV/{{$d->id1}}">Xem thêm</a></td>
                                            <td class="text-center"><i class="fas fa-info-circle"></i><a href="{{route('messenger-student',['id'=>$d->id1])}}">liên hệ</a></td>
                                        </tr>
                                    @endforeach
                                    
                                </tbody>
                                
                               
                            </table>    
                            {!! $data->appends(request()->input())->links() !!}
                        </div>
                    </div>                       
                </div>
            </div>
        </div>
    </div>
   
@endsection
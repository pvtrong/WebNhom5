@extends('Pages.layout.menu')
@section('content')

<!-- Begin Page Content -->

<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Danh sách sinh viên</h1>


<!-- DataTales Example -->

<div class="card shadow mb-4 dark-mode">
    <div class="card-header py-3 dark-mode">
        <h6 style="color: #026b97" class=" dark-mode m-0 font-weight-bold text-primary">Danh sách</h6>
    </div>
    <div class="card-body dark-mode bg-light">
        <div class="table-responsive">
            <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                <div class="row">
                    <div class="col-sm-12 col-md-6 dark-mode">
                        <div class="dataTables_length" id="dataTable_length">
                            <label>
                                Tìm kiếm:
                            </label>
                            <form action="Pages/Teacher/DS2" method = "get">
                                <input type="hidden" name ="_token" value="{{ csrf_token()}}";>
                                <div class = "d-flex">
                                    <input type="search" name="search" class="form-control  dark-mode" placeholder= "search" aria-controls="dataTable">
                                    <button type="submit" class="btn btn-primary mx-2 dark-mode">Search</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div id="dataTable_filter" class="dataTables_filter">
                            
                        </div>
                    </div>
                </div>
                <div class="row2">
                        <table class=" dark-mode bg-light table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                            
                            <thead>
                                <tr role="row">
                                <th class="sorting_asc  text-center" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" style="width: 100px;">Họ và tên</th>
                                <th class="sorting text-center" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 7em !important;">Email</th>
                                <th class="sorting text-center" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 7em !important;">Điện thoại</th>
                                <th class="sorting text-center" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 7em !important;">Khoa</th>
                                <th class="sorting text-center" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 7em !important;">GPA</th>
                                <th class="sorting text-center" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 7em !important;">Kĩ năng</th>
                                <th class="sorting text-center" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 7em !important;">Xem thêm</th>
                                <th class="sorting text-center" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 7em !important;">Liên hệ</th>
                                </tr>
                            </thead>
                            
                            <tfoot>
                                <tr role="row">
                                    <th class="sorting_asc  text-center" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" style="width: 58px;">
                                    <form action="Pages/Teacher/DS2" method = "get">
                                                <select name="name"  class="form-control" id="name" onchange="this.form.submit()">
                                                <option name ="name" value="">Họ và tên</option>
                                                @foreach( $user1 as $u)
                                                    <option class='dark-mode' name ="name" value="{{ $u->id}}">{{ $u->name}} </option>
                                                @endforeach
                                                </select>   
                                            </form>     
                                    </th>

                                    <th class="sorting_asc  text-center" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" style="width: 58px;">
                                        <form action="Pages/Teacher/DS2" method = "get">
                                            <select name="email"  class="form-control" id="name" onchange="this.form.submit()">
                                                <option name ="email" value="">Email</option>
                                                @foreach( $user2 as $u)
                                                    <option class='dark-mode'  name ="email" value="{{ $u->id}}">{{ $u->email}} </option>
                                                @endforeach
                                                </select>   
                                        </form>     
                                    
                                    </th>
                                
                                    <th class="sorting text-center" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 2em !important;">
                                        <form action="Pages/Teacher/DS2" method = "get">
                                            <select name="mobile"  class="form-control" id="mobile" onchange="this.form.submit()">
                                                <option name ="mobile" value="">Liên hệ</option>
                                                <?php
                                                    $student = []; 
                                                    foreach( $students as $st){
                                                        $st->mobile = ucwords($st->mobile);
                                                        array_push($student, $st->mobile);
                                                    }
                                                    
                                                    $student = array_unique($student);
                                                    sort($student);
                                                    foreach($student as $mobile)
                                                    echo "<option class='dark-mode'  name ='mobile' value='" .$mobile ."'>" .$mobile ."</option>";
                                                ?>
                                            </select> 
                                        </form>
                                    </th>
                                    <th class="sorting text-center" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 4em !important;">
                                        <form action="Pages/Teacher/DS2" method = "get">
                                                <select name="department"  class="form-control" id="department" onchange="this.form.submit()">
                                                <option name ="departpment" value="">Khoa</option>
                                                    <?php
                                                    $student = []; 
                                                    foreach( $students as $st){
                                                        $st->department = ucwords($st->department);
                                                        array_push($student, $st->department);
                                                    }
                                                    
                                                    $student = array_unique($student);
                                                    sort($student);
                                                    foreach($student as $department)
                                                    echo "<option class='dark-mode'  name ='department' value='" .$department ."'>" .$department ."</option>";
                                                    ?>
                                                </select> 
                                        </form>
                                    </th>
                                    <th class="sorting text-center" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 4em !important;">
                                        <form action="Pages/Teacher/DS2" method = "get">
                                                <select name="gpa"  class="form-control" id="gpa" onchange="this.form.submit()">
                                                <option name ="gpa" value="">GPA</option>
                                                <?php
                                                    $student = []; 
                                                    foreach( $students as $st){
                                                        $st->gpa = ucwords($st->gpa);
                                                        array_push($student, $st->gpa);
                                                    }
                                                    
                                                    $student = array_unique($student);
                                                    sort($student);
                                                    foreach($student as $gpa)
                                                    echo "<option class='dark-mode'  name ='gpa' value='" .$gpa ."'>" .$gpa ."</option>";
                                                ?>
                                                </select> 
                                        </form>
                                    </th>
                                    <th class="sorting text-center" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 4em !important;">
                                        <form action="Pages/Teacher/DS2" method = "get">
                                                <select name="skill"  class="form-control" id="skill" onchange="this.form.submit()">
                                                <option name ="skill" value="">Kĩ năng</option>
                                                    
                                                <?php
                                                foreach($skill as $ski){
                                                    echo "<option class='dark-mode' name ='skill' value='" .$ski->id ."'>" .$ski->name ."</option>";
                                                    
                                                }
                                                
                                                
                                            ?>  
                                                    
                                                </select> 
                                        </form>
                                    </th>
                                    
                                    <th class="text-center">Xem thêm</th>
                                    <th class="text-center">Liên hệ</th>
                                    
                            </tfoot>
                    
                            <tbody>
                                @foreach($data as $d)
                                    <tr role="row" class="even">
                                        <td class="text-center">{{$d->name1}}</td>
                                        <td class="text-center">{{$d->email1}}</td>
                                        <td>{{$d->mobile1}}</td>
                                        <td class="text-center">{{$d->department1}}</td>
                                        <td class="text-center">{{$d->gpa1}}</td>
                                        <td>
                                        <?php
                                            foreach($skill1 as $sk)
                                                if( $sk->student_id1 == $d->id1)
                                            echo "$sk->name1<br>";
                                       
                                        ?>
                                        </td>
                                        <td class="text-center"><i class="dark-mode as fa-info-circle"></i><a class='dark-mode'  href="./Pages/Student/CV/{{$d->id1}}">Xem thêm</a></td>
                                        <td class="text-center"><i class="dark-mode fas fa-comments"></i></i><a class='dark-mode'  href="{{route('messenger-teacher',['id'=>$d->id1])}}">liên hệ</a></td>
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
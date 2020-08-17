@extends('Pages.layout.menu')
@section('content')

<!-- Begin Page Content -->

<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Danh sách công ty/doanh nghiệp tuyển dụng</h1>


<!-- DataTales Example -->

<div class="card shadow mb-4 dark-mode">
    <div class="card-header py-3 dark-mode">
        <h6 style="color: #026b97" class=" dark-mode m-0 font-weight-bold text-primary">Danh sách</h6>
    </div>
    <div class="card-body dark-mode">
        <div class="table-responsive">
            <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <div class="dataTables_length" id="dataTable_length">
                            <label>
                                Tìm kiếm:
                            </label>
                            <form action="Pages/Teacher/DS1" method = "get">
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
                        <table class=" dark-mode  bg-light table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                            
                            <thead>
                                <tr role="row">
                                <th class="sorting_asc  text-center" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" style="width: 100px;">Tên công ty</th>
                                <th class="sorting text-center" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 7em !important;">Email</th>
                                <th class="sorting text-center" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 7em !important;">Điện thoại</th>
                                <th class="sorting text-center text-center" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 8em !important">Tiêu chí</th>
                                <th class="sorting text-center" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 7em !important;">Địa chỉ</th>
                                <th class="sorting text-center" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 7em !important;">Mức lương</th>
                                <th class="sorting text-center" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 7em !important;">Xem thêm</th>
                                <th class="sorting text-center" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 7em !important;">Liên hệ</th>
                                </tr>
                            </thead>
                            
                            <tfoot>
                                <tr role="row">
                                    <th class="sorting_asc text-center" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" style="width: 58px;">
                                            <form action="Pages/Teacher/DS1" method = "get">
                                                <select name="name"  class="form-control" id="name" onchange="this.form.submit()">
                                                <option name ="name" value="">Họ và tên</option>
                                                    @foreach( $user1 as $u)
                                                        <option class='dark-mode' name  ="name"value="{{ $u -> id}}">{{ $u->name}}</option>
                                                    @endforeach
                                                </select> 
                                            </form>
                                                             
                                    </th>

                                    <th class="sorting_asc text-center" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" style="width: 58px;">
                                            <form action="Pages/Teacher/DS1" method = "get">
                                                <select name="email"  class="form-control" id="email" onchange="this.form.submit()">
                                                <option name ="email" value="">Email</option>
                                                    @foreach( $user2 as $u)
                                                        <option class='dark-mode'  name ="email"value="{{ $u -> id}}">{{ $u->email}}</option>
                                                    @endforeach
                                                </select> 
                                            </form>
                                                             
                                    </th>

                                    <th class="sorting text-center" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 2em !important;">
                                        <form action="Pages/Teacher/DS1" method = "get">
                                                <select name="mobile"  class="form-control" id="mobile" onchange="this.form.submit()">
                                                <option name ="mobile" value="">Điện thoại</option>
                                                <?php
                                                    $companys = []; 
                                                    foreach( $company as $cpn){
                                                        $cpn->mobile = ucwords($cpn->mobile);
                                                        array_push($companys, $cpn->mobile);
                                                    }
                                                    
                                                    $companys = array_unique($companys);
                                                    sort($companys);
                                                    foreach($companys as $mobile)
                                                    echo "<option class='dark-mode'  name ='mobile' value='" .$mobile ."'>" .$mobile ."</option>";
                                                ?>
                                                </select> 
                                        </form>
                                    </th>

                                    <th class="sorting text-center" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 4em !important">
                                        <form action="Pages/Teacher/DS1" method = "get">
                                                <select name="offer"  class="form-control" id="offer" onchange="this.form.submit()">
                                                    <option name ="offer" value="">Yêu cầu</option>
                                                    <?php
                                                        foreach($skill as $ski){
                                                            echo "<option class='dark-mode' name ='offer' value='" .$ski->id ."'>" .$ski->name ."</option>";
                                                            
                                                        }
                                                        
                                                        
                                                    ?>  
                                                </select> 
                                        </form>
                                    </th>
                                    <th class="sorting text-center tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 3em !important;">
                                        <form action="Pages/Teacher/DS1" method = "get">
                                                <select name="address"  class="form-control" id="address" onchange="this.form.submit()">
                                                <option name ="address" value="">Địa chỉ</option>
                                                <?php
                                                    $companys = []; 
                                                    foreach( $company as $cpn){
                                                        $cpn->address = ucwords($cpn->address);
                                                        array_push($companys, $cpn->address);
                                                    }
                                                    
                                                    $companys = array_unique($companys);
                                                    sort($companys);
                                                    foreach($companys as $address)
                                                    echo "<option class='dark-mode'  name ='address' value='" .$address ."'>" .$address ."</option>";
                                                ?>
                                                </select> 
                                        </form>
                                    </th>
                                
                                    <th class="sorting text-center" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 4em !important;">
                                        <form action="Pages/Teacher/DS1" method = "get">
                                                <select name="salary"  class="form-control" id="mobile" onchange="this.form.submit()">
                                                <option name ="salary" value="">Mức lương</option>
                                                <?php
                                                $companys = []; 
                                                    foreach( $company as $cpn){
                                                        $cpn->salary = ucwords($cpn->salary);
                                                        array_push($companys, $cpn->salary);
                                                    }
                                                    
                                                    $companys = array_unique($companys);
                                                    sort($companys);
                                                    foreach($companys as $salary)
                                                    echo "<option class='dark-mode'  name ='salary' value='" .$salary ."'>" .$salary ."</option>";
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
                                        <td class="sorting_1">{{$d->name1}}</td>
                                        <td>{{$d->email1}}</td>
                                        <td class="text-center">{{$d->mobile1}}</td>
                                        <td>
                                        <?php
                                            foreach($skill1 as $sk)
                                                if( $sk->company_id1 == $d->id1)
                                            echo "$sk->name1<br>";
                                       
                                        ?>
                                        </td>
                                        <td>{{$d->address1}}</td>
                                        <td class="text-center">{{$d->salary1}}</td>
                                        <td class="text-center"><i class="dark-mode fas fa-info-circle"></i><a class='dark-mode'  href="./Pages/Company/CV/{{$d->id1}}">Xem thêm</a></td>
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
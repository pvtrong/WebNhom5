@extends('Pages.layout.menu')
@section('content')

<!-- Begin Page Content -->

<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Danh sách công ty/doanh nghiệp tuyển dụng</h1>


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
                            <form action="Pages/Student/DS1" method = "get">
                                <input type="hidden" name ="_token" value="{{ csrf_token()}}";>
                                <div class = "d-flex">
                                    <input type="search" name="search" class="form-control " placeholder= "search" aria-controls="dataTable">
                                    <button type="submit" class="btn btn-primary mx-2">Search</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row">
                        <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                            
                            <thead>
                                <tr role="row">
                                <th class="sorting_asc  text-center" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" style="width: 100px;">Tên công ty</th>
                                <th class="sorting text-center text-center" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 6em !important">Tiêu chí</th>
                                <th class="sorting text-center" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 7em !important;">Địa chỉ</th>
                                <th class="sorting text-center" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 7em !important;">Liên hệ</th>
                                <th class="sorting text-center" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 7em !important;">Mức lương</th>
                                <th class="sorting text-center" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 7em !important;">Số lượng</th>
                                <th class="sorting text-center" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 7em !important;">Đãi ngộ</th>
                                <th class="sorting text-center" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 7em !important;">Thêm</th>
                                </tr>
                            </thead>
                            
                            <tfoot>
                                <tr role="row">
                                    <th class="sorting_asc  text-center" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" style="width: 58px;">
                                        <form action="Pages/Student/DS1" method = "get">
                                                <select name="name"  class="form-control" id="name" onchange="this.form.submit()">
                                                    <option name ="name" value="">Tên công ty</option>
                                                    <?php
                                                        $users = []; 
                                                        foreach( $user as $u){
                                                            $u->name = ucwords($u->name);
                                                            array_push($users, $u->name);
                                                        }
                                                        
                                                        $users = array_unique($users);
                                                        sort($users);
                                                        foreach($users as $name)
                                                        echo "<option name ='name' value='" .$name ."'>" .$name ."</option>";
                                                    ?>
                                                </select> 
                                        </form>
                                    </th>
                                    <th class="sorting text-center" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 4em !important">
                                        <form action="Pages/Student/DS1" method = "get">
                                                <select name="offer"  class="form-control" id="offer" onchange="this.form.submit()">
                                                    <option name ="offer" value="">Yêu cầu</option>
                                                    <?php
                                                        $companys = []; 
                                                        foreach( $company as $cpn){
                                                            $cpn->offer = ucwords($cpn->offer);
                                                            array_push($companys, $cpn->offer);
                                                        }
                                                        
                                                        $companys = array_unique($companys);
                                                        sort($companys);
                                                        foreach($companys as $offer)
                                                        echo "<option name ='offer' value='" .$offer ."'>" .$offer ."</option>";
                                                    ?>
                                                </select> 
                                        </form>
                                    </th>
                                    <th class="sorting text-center tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 3em !important;">
                                        <form action="Pages/Student/DS1" method = "get">
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
                                                    echo "<option name ='address' value='" .$address ."'>" .$address ."</option>";
                                                ?>
                                                </select> 
                                        </form>
                                    </th>
                                    <th class="sorting text-center" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 2em !important;">
                                        <form action="Pages/Student/DS1" method = "get">
                                                <select name="mobile"  class="form-control" id="mobile" onchange="this.form.submit()">
                                                <option name ="mobile" value="">Liên hệ</option>
                                                <?php
                                                    $companys = []; 
                                                    foreach( $company as $cpn){
                                                        $cpn->mobile = ucwords($cpn->mobile);
                                                        array_push($companys, $cpn->mobile);
                                                    }
                                                    
                                                    $companys = array_unique($companys);
                                                    sort($companys);
                                                    foreach($companys as $mobile)
                                                    echo "<option name ='mobile' value='" .$mobile ."'>" .$mobile ."</option>";
                                                ?>
                                                </select> 
                                        </form>
                                    </th>
                                    <th class="sorting text-center" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 4em !important;">
                                        <form action="Pages/Student/DS1" method = "get">
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
                                                    echo "<option name ='salary' value='" .$salary ."'>" .$salary ."</option>";
                                                ?>
                                                </select> 
                                        </form>
                                    </th>
                                    <th class="sorting text-center" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 4em !important;">
                                        <form action="Pages/Student/DS1" method = "get">
                                                <select name="number"  class="form-control" id="number" onchange="this.form.submit()">
                                                <option name ="number" value="">Số lượng</option>
                                                <?php
                                                $companys = []; 
                                                    foreach( $company as $cpn){
                                                        $cpn->numbers = ucwords($cpn->numbers);
                                                        array_push($companys, $cpn->numbers);
                                                    }
                                                    
                                                    $companys = array_unique($companys);
                                                    sort($companys);
                                                    foreach($companys as $numbers)
                                                    echo "<option name ='numbers' value='" .$numbers ."'>" .$numbers ."</option>";
                                                ?>
                                                </select> 
                                        </form>
                                    </th>
                                    <th class="sorting text-center" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 4em !important;">
                                        <form action="Pages/Student/DS1" method = "get">
                                                <select name="bonus"  class="form-control" id="bonus" onchange="this.form.submit()">
                                                <option name ="bonus" value="">Đãi ngộ</option>
                                                <?php
                                                $companys = []; 
                                                    foreach( $company as $cpn){
                                                        $cpn->bonus = ucwords($cpn->bonus);
                                                        array_push($companys, $cpn->bonus);
                                                    }
                                                    
                                                    $companys = array_unique($companys);
                                                    sort($companys);
                                                    foreach($companys as $bonus)
                                                    echo "<option name ='bonus' value='" .$bonus ."'>" .$bonus ."</option>";
                                                ?>
                                                </select> 
                                        </form>
                                    </th>
                                    <th></th>
                                    
                            </tfoot>
                    
                            <tbody>
                                @foreach($data as $d)
                                    <tr role="row" class="even">
                                        <td class="sorting_1">{{$d->name1}}</td>
                                        <td>{{$d->offer1}}</td>
                                        <td>{{$d->address1}}</td>
                                        <td class="text-center">{{$d->mobile1}}</td>
                                        <td class="text-center">{{$d->salary1}}</td>
                                        <td class="text-center">{{$d->numbers1}}</td>
                                        <td>{{$d->bonus1}}</td>
                                        <td class="center"><i class="fas fa-info-circle"></i><a href="#">Thông tin thêm</a></td>
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
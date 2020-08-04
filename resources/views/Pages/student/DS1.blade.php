@extends('Pages.layout.menu')
@section('content')
<!-- Topbar -->
<!-- End of Topbar -->
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
                                        <option value="2">2</option>
                                        <option value="4">4</option>
                                        <option value="6">6</option>
                                        <option value="8">8</option>
                                    </select> kết quả
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div id="dataTable_filter" class="dataTables_filter">
                                <label>
                                    Tìm kiếm:
                                    <input type="search" class="form-control form-control-sm" placeholder="" aria-controls="dataTable">
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                                <thead>
                                    <tr role="row">
                                        <th class="sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="2" aria-sort="ascending" style="width: 58px;">Tên công ty</th>
                                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="2" style="width: 4em !important">Yêu cầu/Tiêu chí</th>
                                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="4" style="width: 5em !important;">Địa chỉ</th>
                                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="2" style="width: 2em !important;">Liên hệ</th>
                                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="2" style="width: 4em !important;">Mức lương</th>
                                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="2" style="width: 4em !important;">Số lượng</th>
                                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="4" style="width: 4em !important;">Đãi ngộ</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th rowspan="1" colspan="2">Tên công ty</th>
                                        <th rowspan="1" colspan="2">Yêu cầu/Tiêu chí</th>
                                        <th rowspan="1" colspan="4">Địa chỉ</th>
                                        <th rowspan="1" colspan="2">Liên hệ</th>
                                        <th rowspan="1" colspan="2">Mức lương</th>
                                        <th rowspan="1" colspan="2">Số lượng</th>
                                        <th rowspan="1" colspan="4">Đãi ngộ</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    @foreach($DS_paging as $cpn)
                                        <tr role="row" class="even">
                                        <td class="sorting_1" colspan="2"></td>
                                        <td colspan="2">{{$cpn->offer}}</td>
                                        <td colspan="4">{{$cpn->address}}</td>
                                        <td colspan="2">{{$cpn->mobile}}</td>
                                        <td colspan="2">{{$cpn->salary}}</td>
                                        <td colspan="2">{{$cpn->numbers}}</td>
                                        <td colspan="4">{{$cpn->bonus}}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-5">
                            <div class="dataTables_info" id="dataTable_info" role="status" aria-live="polite">Hiển thị 2 trên 6 kết quả</div>
                        </div>
                        <div>
                            {{ $DS_paging->links() }}
                        </div>
                        {{-- <div class="col-sm-12 col-md-7">
                            <div class="dataTables_paginate paging_simple_numbers" id="dataTable_paginate">
                                <ul class="pagination">
                                    <li class="paginate_button page-item previous disabled" id="dataTable_previous">
                                        <a href="#" aria-controls="dataTable" data-dt-idx="0" tabindex="0" class="page-link">Trước</a>
                                    </li>
                                    <li class="paginate_button page-item active">
                                        <a href="#" aria-controls="dataTable" data-dt-idx="1" tabindex="0" class="page-link">1</a>
                                    </li>
                                    <li class="paginate_button page-item ">
                                        <a href="#" aria-controls="dataTable" data-dt-idx="2" tabindex="0" class="page-link">2</a>
                                    </li>
                                    <li class="paginate_button page-item ">
                                        <a href="#" aria-controls="dataTable" data-dt-idx="3" tabindex="0" class="page-link">3</a>
                                    </li>
                                    <li class="paginate_button page-item ">
                                        <a href="#" aria-controls="dataTable" data-dt-idx="4" tabindex="0" class="page-link">4</a>
                                    </li>
                                    <li class="paginate_button page-item ">
                                        <a href="#" aria-controls="dataTable" data-dt-idx="5" tabindex="0" class="page-link">5</a>
                                    </li>
                                    <li class="paginate_button page-item ">
                                        <a href="#" aria-controls="dataTable" data-dt-idx="6" tabindex="0" class="page-link">6</a>
                                    </li>
                                    <li class="paginate_button page-item next" id="dataTable_next">
                                        <a href="#" aria-controls="dataTable" data-dt-idx="7" tabindex="0" class="page-link">Sau</a>
                                    </li>
                                </ul>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

@endsection

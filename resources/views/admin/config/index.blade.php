@extends('master.admin')

@section('main')
<div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
    <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
        <!-- begin form -->
        <form action="" method="get">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-2">
                <!--begin::Search Form-->
                <div class="d-flex align-items-center mt-2 mb-2 mr-5">
                    <!-- <form class="" method="GET"> -->
                    <div class="input-group input-group-sm input-group-solid" style="max-width: 175px">
                        <input type="text" name="keySearch" class="form-control py-2" placeholder="Search..." />
                        <div class="input-group-append">
                            <span class="input-group-text">
                                <button type="submit" class="flaticon2-search-1 icon-md btn"></button>
                            </span>
                        </div>
                    </div>
                </div>
                <!--end::Search Form-->
                <!--begin::Actions-->
                <div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-4 bg-gray-200"></div>
                <a href="{{ route('config.create') }}"
                    class="btn btn-light-warning font-weight-bolder btn-sm px-7 mt-2 mb-2 mr-5"><i
                        class="la la-plus"></i> Thêm mới</a>
                <!--end::Actions-->
            </div>
            <!--end::Info-->
        </form>
        <!-- end form -->
    </div>
</div>
<!--begin::Entry-->
<div class="">
    <!--begin::Container-->
    <div class="">
        <!--begin::Card-->
        <div class="card-custom gutter-b">
            <div class="card-body">
                <!--begin: Datatable-->
                <table class="table table-striped table-dark rounded">
                    <thead>
                        <tr>
                            <th width="5%">#</th>
                            <th width="15%">Tên</th>
                            <th width="25%">Thông tin cấu hình</th>
                            <th width="15%">Kiểu</th>
                            <th width="15%">Trạng thái</th>
                            <th width="5%%"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $key => $item)
                        <tr>
                            <td class="align-middle">{{(($data->currentPage() - 1) * $data->perPage()) + $key + 1 }}
                            </td>
                            <td class="align-middle">{{$item->name}}</td>
                            <td class="align-middle">{{$item->information}}</td>
                            <td class="align-middle">{{$item->type}}</td>
                            <td class="align-middle upStatus">
                                @if($item->status == 0)
                                <span class="label label-lg font-weight-bold label-light-danger label-inline showStt"
                                    data-stt="{{$item->status}}">Tạm dừng</span>
                                @else
                                <span class="label label-lg font-weight-bold label-light-success label-inline showStt"
                                    data-stt="{{$item->status}}">Hoạt động</span>
                                @endif
                            </td>
                            <td class="align-middle" style="text-align: right">
                                <a href="{{ route('config.edit', $item->id) }}" class="mr-3" data-toggle="tooltip"
                                    title="Edit">
                                    <i class="la la-edit text-primary fa-2x"></i>
                                </a>
                                <a class="btn-delete" onclick="return confirm('Do you want to delete?')"
                                    href="{{route('config.destroy', $item->id)}}" data-toggle="tooltip"
                                    title="Delete">
                                    <i class="la la-trash text-danger fa-2x"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <!--end: Datatable-->
            </div>

            <!-- begin panigation -->
            <div class="d-flex justify-content-between align-items-center flex-wrap mx-5 px-5 pb-5">

                <div class="d-flex flex-wrap py-2 mr-3">
                    @if($currentPage > 1)
                    <a href="{{route('category.index')}}?page=1"
                        class="btn btn-icon btn-circle btn-sm btn-light-primary mr-2 my-1">
                        <i class="ki ki-bold-double-arrow-back icon-xs"></i>
                    </a>
                    @endif
                    @foreach($pages as $key => $page)
                    <a href="{{route('category.index')}}?page={{$key + 1}}"
                        class="btn btn-icon btn-circle btn-sm border-0 btn-hover-primary mr-2 my-1 {{$currentPage == ($key + 1) ? 'active' : ''}}">{{$key + 1}}</a>
                    @endforeach
                    @if($currentPage < $data->lastPage())
                        <a href="{{route('category.index')}}?page={{$data->lastPage()}}"
                            class="btn btn-icon btn-circle btn-sm btn-light-primary mr-2 my-1">
                            <i class="ki ki-bold-double-arrow-next icon-xs"></i>
                        </a>
                        @endif
                </div>

                <div class="d-flex align-items-center py-3">
                    <span class="text-muted">
                        {{$data->perPage() * $data->currentPage() > $data->total() ? $data->total() : $data->perPage() * $data->currentPage()}}
                        of {{$data->total()}}</span>
                </div>
            </div>
            <!-- end panigation -->
        </div>
        <!--end::Card-->
    </div>
    <!--end::Container-->
</div>
<!--end::Entry-->
<!-- begin form delete -->
<form action="" method="post" id="form-delete">
    @csrf @method('DELETE')
</form>
<form action="{{route('category.index')}}" method="get" id=form-searchForType>
    <input type="hidden" id="searchForType" name="typeSearch" value="">
    <input type="hidden" id="sortForName" name="sortForName" value="">
</form>

<!-- end form delete -->
@stop()

@section('js')
<script>
// begin search for types
$(document).on('click', '.upStatus', function() {
    var id = $(this).data('id');
    var _link = $(this).data('link');
    $.ajax({
        type: 'GET',
        url: _link,
        data: {
            id: id
        },
        success: function(v) {
            location.reload();
        }
    })
})
</script>
@stop()
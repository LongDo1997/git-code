@extends('master.admin')

@section('main')

<div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
    <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
        <!--begin::Info-->
        <div class="d-flex align-items-center flex-wrap mr-2">
            
            <!--begin::Actions-->
            <a href="{{ route('auth.create') }}" class="btn btn-light-warning font-weight-bolder btn-sm"><i
                    class="la la-plus"></i> Thêm mới</a>
            <!--end::Actions-->
            <!--begin::Actions-->
            <div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-4 bg-gray-200"></div>
           
            <!--end::Actions-->
        </div>
        <!--end::Info-->
        <!--begin::Toolbar-->
        <div class="d-flex align-items-center">
            <!--begin::Daterange-->
            <a href="#" class="btn btn-sm btn-light font-weight-bold mr-2" id="kt_dashboard_daterangepicker"
                data-toggle="tooltip" title="Select dashboard daterange" data-placement="left">
                <span class="text-muted font-size-base font-weight-bold mr-2"
                    id="kt_dashboard_daterangepicker_title">Hôm nay</span>
                <span class="text-primary font-size-base font-weight-bolder" id="kt_dashboard_daterangepicker_date">Aug
                    16</span>
            </a>
            <!--end::Daterange-->
        </div>
        <!--end::Toolbar-->
    </div>
</div>
<!--begin::Entry-->
<div class="d-flex flex-column-fluid">
    <!--begin::Container-->
    <div class="container">
        <!--begin::Card-->
        <div class="card card-custom gutter-b">
            <div class="card-body">
                <!--begin: Datatable-->
                <table class="table">
                    <thead>
                        <tr>
                            <th width="5%">#</th>
                            <th width="10%">Họ tên</th>
                            <th width="15%">Email</th>
                            <th width="10%">Trạng thái</th>
                            <th width="10%"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $key => $item)
                        <tr>
                            <td>{{(($data->currentPage() - 1) * $data->perPage()) + $key + 1 }}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->email}}</td>
                            <td>
                                @if($item->status == 0)
                                <span class="label label-lg font-weight-bold label-light-danger label-inline showStt"
                                    data-stt="{{$item->status}}">Tạm khóa</span>
                                @else
                                <span class="label label-lg font-weight-bold label-light-success label-inline showStt"
                                    data-stt="{{$item->status}}">Hoạt động</span>
                                @endif
                            </td>
                            <td style="text-align: right">
                                <a href="{{ route('auth.edit', $item->id) }}" class="mr-3"><i
                                        class="la la-edit text-primary fa-2x" data-toggle="tooltip"
                                        title="Update"></i></a>
                                @csrf @method('DELETE')
                                <a onclick="return confirm('Do you want to delete?')"
                                    href="{{ route('auth.destroy', $item->id) }}"
                                    class="btn-delete la la-trash text-danger fa-2x" data-toggle="tooltip"
                                    title="Delete">
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
                    <a href="{{route('contact.index')}}?page=1"
                        class="btn btn-icon btn-circle btn-sm btn-light-primary mr-2 my-1">
                        <i class="ki ki-bold-double-arrow-back icon-xs"></i>
                    </a>
                    @endif
                    @foreach($pages as $key => $page)
                    <a href="{{route('contact.index')}}?page={{$key + 1}}"
                        class="btn btn-icon btn-circle btn-sm border-0 btn-hover-primary mr-2 my-1 {{$currentPage == ($key + 1) ? 'active' : ''}}">{{$key + 1}}</a>
                    @endforeach
                    @if($currentPage < $data->lastPage())
                        <a href="{{route('contact.index')}}?page={{$data->lastPage()}}"
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
<!-- end form delete -->

@stop()
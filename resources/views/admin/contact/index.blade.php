@extends('master.admin')
@section('main')

<div class="">

    <!--begin::Card-->
    <div class="card card-custom">
        <div class="card-body">
            <!--begin: Datatable-->
            <div id="kt_datatable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                <div class="row">
                    <div class="col-sm-12 col-md-6">
					@if(isset($have) > 0)
					<div class="text-danger"><small class="font-italic">Hiện tại còn ({{$have}}) tin nhắn chưa đọc</small></div>
					@endif
                    </div>
                    <!-- <div class="col-sm-12 col-md-6">
                        <div id="kt_datatable_filter" class="dataTables_filter"><label>Tìm kiếm:<input type="search"
                                    class="form-control form-control-sm" placeholder="Nhập từ khóa..."
                                    aria-controls="kt_datatable"></label></div>
                    </div> -->
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <table
                            class="table table-separate table-head-custom table-checkable dataTable no-footer dtr-inline"
                            id="kt_datatable" role="grid" aria-describedby="kt_datatable_info" style="width: 1235px;">
                            <thead>
                                <tr role="row">
                                    <th class="sorting_asc" tabindex="0" aria-controls="kt_datatable" rowspan="1"
                                        colspan="1" style="width: 219px;" aria-sort="ascending"
                                        aria-label="Agent: activate to sort column descending">Người liên hệ</th>
                                    <th class="sorting" tabindex="0" aria-controls="kt_datatable" rowspan="1"
                                        colspan="1" style="width: 200px;"
                                        aria-label="Company Email: activate to sort column ascending">Email</th>
                                    <th class="sorting" tabindex="0" aria-controls="kt_datatable" rowspan="1"
                                        colspan="1" style="width: 134px;"
                                        aria-label="Company Agent: activate to sort column ascending">Tiêu đề</th>
                                    <th class="sorting" tabindex="0" aria-controls="kt_datatable" rowspan="1"
                                        colspan="1" style="width: 210px;"
                                        aria-label="Company Name: activate to sort column ascending">Nội dung</th>
                                    <th class="sorting" tabindex="0" aria-controls="kt_datatable" rowspan="1"
                                        colspan="1" style="width: 63px;"
                                        aria-label="Status: activate to sort column ascending">Trạng thái 										
									</th>
                                    <th class="sorting" tabindex="0" aria-controls="kt_datatable" rowspan="1"
                                        colspan="1" style="width: 41px;"
                                        aria-label="Type: activate to sort column ascending">Ngày gửi</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 110px;"
                                        aria-label="Actions"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $key => $item)
                                <tr role="row" class="odd changeStatus" data-id="{{$item->id}}">

                                    <td class="sorting_1 dtr-control">
                                        <div class="d-flex align-items-center">
                                            <div class="pr-7">#{{$data->total() -(($data->currentPage() - 1) * $data->perPage())  - $key}}</div>
                                            <div class="ml-3">
                                                <span
                                                    class="text-dark-75 font-weight-bold line-height-sm d-block pb-2">{{$item->name}}</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td><a class="text-dark-50 text-hover-primary"
                                            href="mailto:alarkingg@elegantthemes.com">{{$item->email}}</a>
                                    </td>
                                    <td>{{Str::limit($item->subject, 20)}}</td>
                                    <td>{{Str::limit($item->message, 20)}}</td>
                                    <td>
                                        @if($item->status == 0)
                                        <span
                                            class="label label-lg font-weight-bold label-light-danger label-inline showStt"
                                            data-stt="{{$item->status}}">Chưa đọc</span>
                                        @else
                                        <span
                                            class="label label-lg font-weight-bold label-light-success label-inline showStt"
                                            data-stt="{{$item->status}}">Đã đọc</span>
                                        @endif
                                    </td>
                                    <td>
                                        <div class="ml-3">
                                            <a href="#"
                                                class="text-muted text-hover-primary">{{date('H:i:s', strtotime($item->created_at))}}</a>
                                            <span
                                                class="text-dark-75 font-weight-bold line-height-sm d-block pb-2">{{date('d-m-y', strtotime($item->created_at))}}</span>
                                        </div>
                                    </td>
                                    <td nowrap="nowrap">
                                        <a href="{{route('contact.show', $item->id)}}" class="btn btn-sm btn-clean btn-icon" data-toggle="tooltip" title="Xem chi tiết">
                                            <i class="la la-eye text-success"></i>
                                        </a>
                                        <a href="javascript:;" class="btn btn-sm btn-clean btn-icon" data-toggle="tooltip" title="Trả lời">
                                            <i class="la la-reply text-primary"></i>
                                        </a>
                                        <a href="{{route('contact.destroy', $item->id)}}"
                                            onclick="return confirm('Bạn muốn xóa tin nhắn này?')"
                                            class="btn btn-sm btn-clean btn-icon btn-delete" data-toggle="tooltip" title="Xóa">
                                            <i class="la la-trash text-danger"></i>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row">         
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
            </div>
            <!--end: Datatable-->
        </div>
    </div>
    <!--end::Card-->
</div>
<form action="" method="POST" id="form-delete">
    @csrf @method('DELETE')
</form>
@stop()

@section('js')
<script>
$(document).on('click', '.changeStatus', function() {
    var id = $(this).data('id');
    var stt = $(this).find('.showStt').data('stt');
    if (stt == 0) {
        $.ajax({
            type: 'GET',
            url: "{{'contact.changeStatus'}}",
            data: {
                id: id
            },
            success: function(v) {
                location.reload();
            }
        })
    }
})
</script>

@stop()
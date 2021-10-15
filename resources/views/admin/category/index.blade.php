@extends('master.admin')
@section('main')
   <div class="container">
      
       <div class="card">
           <div class="card-header">
               <h1>Danh sách các danh mục</h1>
                <form action="{{route('category.index')}}" id = "search_data" method="get">
                    @csrf
                    <div class="row align-items-center">
                        <div class="col-lg-10 col-xl-8">
                            <div class="row align-items-center">
                                <div class="col-md-4 my-2 my-md-0">
                                    <div class="input-icon">
                                        <input type="text" class="form-control" value="{{request()->search_key?request()->search_key:''}}" name="search_key" placeholder="Tìm kiếm ..." id="">
                                        <span>
                                            <i class="flaticon2-search-1 text-muted"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-4 my-2 my-md-0">
                                    <div class="d-flex align-items-center">
                                        <label class="mr-3 mb-0 d-none d-md-block">Trạng thái:</label>
                                        <select class="form-control" id="kt_datatable_search_status" name="status" " tabindex="null">
                                            <option value="">Toàn bộ</option>
                                            <option value="1" {{request()->status==1?'selected':''}}>Ẩn</option>
                                            <option value="2" {{request()->status==2?'selected':''}}>Hiện</option>
                                           
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4 my-2 my-md-0">
                                    <div class="d-flex align-items-center">
                                        <label class="mr-3 mb-0 d-none d-md-block">Loại:</label>
                                        <select class="form-control" id="kt_datatable_search_type" name = "type" tabindex="null">
                                            <option value="">Toàn bộ</option>
                                            <option value="1" {{request()->type==1?'selected':''}}>Bài viết</option>
                                            <option value="2" {{request()->type==2?'selected':''}}>Hình ảnh</option>
                                        </select>
                                    </div>
                                </div>
                              
                            </div>
                        </div>
                        <div class="col-lg-2 col-xl-2 mt-5 mt-lg-0">
                            <button type="submit" class="btn btn-light-primary px-6 font-weight-bold"><i class="la la-search"></i>Tìm kiếm </button>
                        </div>
                        <div class="col-lg-2 col-xl-2 mt-5 mt-lg-0">
                            <a type="button" href="{{route('category.create')}}" class="btn btn-success px-6 font-weight-bold"><i class="la la-plus"></i> Thêm mới</a>
                        </div>
                    </div>
                </form>

            </div>
              
           <div class="card-body">
               <table class="table text-center">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Danh mục</th>
                            <th>Hình ảnh</th>
                            <th>Loại</th>
                            <th>Số lượng</th>
                            <th>Vị trí</th>
                            <th>Trạng thái</th>
                            <th>Điều chỉnh</th>
                        </tr>
                    </thead>
                    <tbody id="list_data">
                    @foreach($data as $dt)
                        <tr>
                            <td class="align-middle">#{{$dt->id}}</td>
                            <td class="align-middle">{{$dt->name}}</td>
                            <td class="align-middle"><img src="{{url($dt->images)}}" width="90" height="70" alt=""></td>
                            <td class="align-middle">{{$dt->type==1?'Content':'Photo'}}</td>
                            <td class="align-middle">{{$dt->get_content->count()+$dt->get_img->count()}}</td>
                            <td class="align-middle">{{$dt->index}}</td>
                            <td class="align-middle">{{$dt->status==0?"Ẩn":"Hiện"}}</td>
                            <td class="align-middle">
                                <a class="" href="{{route('category.edit',$dt->id)}}"  data-toggle="tooltip" title="Chỉnh sửa"><i class="text-center la la-edit fa-2x text-success"></i></a>
                                <a class="btn_delete" href="{{route('category.destroy',$dt->id)}}"  data-toggle="tooltip" title="Xóa"><i class="text-center la la-trash fa-2x text-danger"></i></a>
                            </td>
                        </tr>

                    @endforeach
                    </tbody>
               </table>
           </div>
           <div class="card-footer text-muted">
           {{$data->appends(request()->all())->links()}}

           </div>
       </div>
   </div>
@stop()
@section('js')
<script>
    function getlist(){
        var page = {{request()->page?request()->page:1}};
        var search_key = "{{request()->search_key?request()->search_key:""}}";
        var type = {{request()->type?request()->type:0}};
        var status = {{request()->status?request()->status:3}};
        console.log(status);
        var _html ='';
        $.ajax({
            type:'GET',
            url:`{{route('category.indexAjax')}}?page=`+page+'&search_key='+search_key+'&status='+status+'&type='+type,
            success:function(res){
                $('#list_data').html(res);
            }
        });
    };
    const swalWithBootstrapButtons = Swal.mixin({
    customClass: {
        confirmButton: 'btn btn-success',
        cancelButton: 'btn btn-danger'
    },
    buttonsStyling: false
    })
    $(document).on('click','.btn_delete',function(ev){
        ev.preventDefault();
        var _link=$(this).attr('href');
        swalWithBootstrapButtons.fire({
        title: 'Bạn có chắc muốn xóa danh mục này ?',
        text: 'Có thể bạn sẽ không muốn xóa nó',
        icon: 'question',
        showCancelButton: true,
        confirmButtonText: 'Có',
        cancelButtonText: `Không`,
        reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                type:'Delete',
                url:_link,
                data:{_token:'{{csrf_token()}}',_method:'Delete'},
                success:function(res){
                    if(res.status==404){
                        Swal.fire({
                            icon: 'error',
                            title: res.message,
                            footer: '<a href="">Why do I have this issue?</a>'
                        })
                    }
                    if(res.status==200){
                        Swal.fire({
                            icon: 'success',
                            title: res.message,
                        })
                    }
                    getlist();
                }
                });
            }
        })
    });
</script>
@stop()
@extends('master.admin')
@section('main')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h1>Chỉnh sửa ảnh</h1>
            </div>
            <div class="card-body">
               <form action="{{route('image.update',$data->id)}}" method="post" enctype="multipart/form-data">
                   @csrf @method('PUT')
                   <input type="hidden" name="id" value="{{$data->id}}">
                   <div class="row">
                       <div class="col-7">
                            
                            <div class="row">
                                <div class="col-8">
                                    <div class="form-group">
                                        <label for="">Danh mục</label>
                                        <select name="cat_id" id="" class="form-control"  style="height:40px">
                                            @foreach($cat as $ct)
                                            <option value="{{$ct->id}}" {{$data->cat_id==$ct->id?'selected':''}} >{{$ct->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-2"></div>
                                <div class="col-2">
                                    <div class="form-group">
                                    <label for="">Trạng thái</label>
                                        <span class="switch switch-outline switch-icon switch-primary">
                                            <label>
                                                <input type="checkbox" {{$data->status==null?"":"checked"}}  name="status">
                                                <span></span>
                                            </label>
                                        </span>
                                    </div>
                                </div>
                            </div>   
                            <div class="form-group">
                                <label for="">Tiêu đề ảnh</label>
                                <textarea type="text" name="caption" id="editor-ckeditor" class="form-control" placeholder="Nhập tiêu đề" aria-describedby="helpId">{{old('caption')?old('caption'):$data->caption}}</textarea>
                                @error('caption')
                                <small id="helpId" class="text-danger">{{$message}}</small>
                                @enderror
                            </div>
                           
                       </div>
                       <div class="col-1"></div>
                       <div class="col-4">
                       <div class="form-group">
                                <label for="">Hình ảnh</label>
                                <div class="input-group">
                                    <input type="text" disabled="true" value="{{old('my_file')?substr(old('my_file'),strpos(old('my_file'),'public/uploads')+15):substr($data->images,strpos($data->images,'public/uploads')+15)}}" id="show_url" style="width:80%;height:35px">
                                    <input type="hidden" name="my_file" id="files" value="{{old('my_file')?old('my_file'):url($data->images)}}" class="form-control" placeholder="Chọn ảnh" aria-describedby="helpId">
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                            <button type="button" class="btn btn-sm btn-success p-1"  data-toggle="modal" data-target="#modelId"><i class="far fa-file-image"></i></button>
                                        </span>
                                    </div>
                                </div>
                                @error('my_file')
                                <small id="helpId" class="text-danger">{{$message}}</small>
                                @enderror
                            </div>
                            <div style="height:17px"></div>

                            <div class="upload_image" style="height:320px">
                                <img class="mr-3 pt-1" src="{{old('my_file')?old('my_file'):url($data->images)}}" id = "show_img" style="height:250px;width:100%" alt="">
                            </div>
                            <div class="text-right"> <button type="submit" class="btn btn-primary ">Cập nhật</button></div>      
                        </div>
                   </div>
               </form>
               
                
               
            </div>
        </div>
    </div>
    <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                    <div class="modal-dialog modal-custom modal-lg " style="width:2500px" role="document">
                        <div class="modal-content">
                                <div class="modal-header">
                                        <h5 class="modal-title">Modal title</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                    </div>
                            <div class="modal-body">
                            <iframe src="{{url('public/filemanager/dialog.php?field_id="files"')}}" frameborder="0" height="500" style="width:100%;overflow-y:auto"></iframe>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary btn_hide" data-dismiss="modal">Upload</button>
                            </div>
                        </div>
                    </div>
                </div>
@stop()
@section('js')
<script>
    $('#exampleModal').on('show.bs.modal', event => {
        var button = $(event.relatedTarget);
        var modal = $(this);
        // Use above variables to manipulate the DOM
        
    });
    $('#modelId').on('hide.bs.modal', event => {
        var _img =$('input#files').val();
        $('input#show_url').val(_img.slice(_img.search('public/uploads')+15));
        $('.upload_image').html('<img id="image" class="mr-3 pt-1" src="' + _img +
             '" style="height:250px;width:100%" >');
    });
    
</script>
<script>
$(function() {
        // Summernote
        $('#summernote').summernote({
            height: 300,
            placeholder:"Mô tả danh mục",
        });

    });
    
    document.getElementById("files").onchange = function() {
    console.log(this.files.length);
    for (let i = 0; i < this.files.length; i++) {
        var reader = new FileReader();
        reader.onload = function(e) {

            $('.upload_image').append('<img id="image" class="mr-3 pt-1" src="' + e.target.result +
                '" style="height:250px;width:100%" >');

        };
        reader.readAsDataURL(this.files[i]);
        console.log((this.files[i]));
    }
};
</script>

@stop()
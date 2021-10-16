@extends('master.admin')
@section('main')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h1>Điều chỉnh danh mục</h1>
            </div>
            <div class="card-body">
               <form action="{{route('category.update',$data->id)}}" method="post" enctype="multipart/form-data">
                   @csrf @method('PUT')
                   <div class="form-group">
                     <input type="hidden" name="id" value="{{$data->id}}" id="" class="form-control" placeholder="" aria-describedby="helpId">
                   </div>
                   <div class="row">
                       <div class="col-7">
                            <div class="form-group">
                                <label for="">Tên Danh Mục</label>
                                <input type="text" name="name" value="{{old('name')?old('name'):$data->name}}" id="name" class="form-control" placeholder="Nhập tên danh mục" aria-describedby="helpId">
                                @error('name')
                                <small id="helpId" class="text-danger">{{$message}}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Slug</label>
                                <input type="text" name="slug" id="slug" placeholder="Slug" value="{{old('slug')?old('slug'):$data->slug}}" class="form-control"  aria-describedby="helpId">
                                @error('slug')
                                <small id="helpId" class="text-danger">{{$message}}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Từ khóa</label>
                                <input type="text" name="meta_keyword" value="{{old('meta_keyword')?old('meta_keyword'):$data->meta_keyword}}" id="" placeholder="Key Word" class="form-control"  aria-describedby="helpId">
                                @error('meta_keyword')
                                <small id="helpId" class="text-danger">{{$message}}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Mã từ</label>
                                <input type="text"  name="" disabled="true" id="" placeholder="Mã từ" value="{{old('key_name')?old('key_name'):$data->key_name}}" class="form-control"  aria-describedby="helpId">
                                <input type="hidden"  name="key_name" id="" placeholder="Mã từ" value="{{old('key_name')?old('key_name'):$data->key_name}}" class="form-control"  aria-describedby="helpId">
                                @error('key_name')
                                <small id="helpId" class="text-danger">{{$message}}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Từ khóa mô tả</label>
                                <textarea type="text" name="meta_description" id="editor-ckeditor" class="form-control" placeholder="Mô tả danh mục" aria-describedby="helpId">{{old('meta_description')?old('meta_description'):$data->meta_description}}</textarea>
                                @error('meta_description')
                                <small id="helpId" class="text-danger">{{$message}}</small>
                                @enderror
                            </div>
                       </div>
                       <div class="col-1"></div>
                       <div class="col-4">
                           <div class="form-group">
                             <label for="">Loại danh mục</label>
                            <select name="type" id="" class="form-control"  style="height:40px">
                                
                                <option value="1" {{$data->type==1?'selected':''}}>Content</option>
                                <option value="2" {{$data->type==2?'selected':''}}>Photo</option>
                            </select>
                            </div>
                            <div class="row">
                                <div class="col-8">
                                    <div class="form-group">
                                        <label for="">Mức ưu tiên</label>
                                        <input type="number" name="index" id="" value="{{old('index')?old('index'):$data->index}}" class="form-control" placeholder="" aria-describedby="helpId">
                                        @error('index')
                                        <small id="helpId" class="text-danger">{{$message}}</small>
                                        @enderror
                                    </div>
                                    
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                    <label for="">Trạng thái</label>
                                        <span class="switch switch-outline switch-icon switch-primary">
                                            <label>
                                                <input type="checkbox" name="status" {{$data->status==1?'checked':''}} >
                                                <span></span>
                                            </label>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-8">
                                    <div class="form-group">
                                        <label for="">Đường dẫn</label>
                                        <input type="hidden" name="action_name" id="" value="{{old('action_name')?old('action_name'):$data->action_name}}" class="form-control" placeholder="Đường dẫn" >
                                        <input type="text" name="" disabled="true" id="" value="{{old('action_name')?old('action_name'):$data->action_name}}" class="form-control" placeholder="Đường dẫn" >
                                        @error('index')
                                        <small id="helpId" class="text-danger">{{$message}}</small>
                                        @enderror
                                    </div>
                                    
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                    <label for="">Menu</label>
                                        <span class="switch switch-outline switch-icon switch-primary">
                                            <label>
                                                <input type="checkbox" {{$data->menu_top==1?"checked":""}}  name="menu_top">
                                                <span></span>
                                            </label>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Hình ảnh</label>
                                <div class="input-group">
                                    <input type="text" disabled="true" value="{{old('my_file')?substr(old('my_file'),strpos(old('my_file'),'public/uploads')+15):substr($data->images,strpos($data->images,'public/uploads')+15)}}" id="show_url" style="width:80%;height:35px">
                                    <input type="hidden" name="my_file" value="{{old('my_file')?old('my_file'):url($data->images)}}" id="files" class="form-control" placeholder="Chọn ảnh" aria-describedby="helpId">
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
                            <div class="upload_image" style="height:280px">
                            <img id="image" class="mr-3 pt-1" src="{{url(old('my_file')?'public/uploads/'.old('my_file'):$data->images)}}" style="height:250px;width:100%" >
                            </div>
                           <div class="text-right"> <button type="submit" class="btn btn-primary ">Cập nhật</button></div>

                       </div>
                   </div>
               </form>
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
            height: 300
        });

    });
    document.getElementById("files").onchange = function() {
    $('.upload_image').html('');
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
<script>
    $(document).on('keyup','#name',function(){
        var title, slug;
       //Lấy text từ thẻ input title 
        title = $(this).val();

        //Đổi chữ hoa thành chữ thường
        slug = title.toLowerCase();

        //Đổi ký tự có dấu thành không dấu
        slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
        slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
        slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
        slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
        slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
        slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
        slug = slug.replace(/đ/gi, 'd');
        //Xóa các ký tự đặt biệt
        slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');
        //Đổi khoảng trắng thành ký tự gạch ngang
        slug = slug.replace(/ /gi, "-");
        //Đổi nhiều ký tự gạch ngang liên tiếp thành 1 ký tự gạch ngang
        //Phòng trường hợp người nhập vào quá nhiều ký tự trắng
        slug = slug.replace(/\-\-\-\-\-/gi, '-');
        slug = slug.replace(/\-\-\-\-/gi, '-');
        slug = slug.replace(/\-\-\-/gi, '-');
        slug = slug.replace(/\-\-/gi, '-');
        //Xóa các ký tự gạch ngang ở đầu và cuối
        slug = '@' + slug + '@';
        slug = slug.replace(/\@\-|\-\@|\@/gi, '');
        //In slug ra textbox có id “slug”
        $('#slug').val(slug);
    });

</script>
@stop()
<?php 
    $accs = explode(' end_Of_The_Link, ',$data->summary);
    $fblink= !empty($accs[0])?substr($accs[0],strpos($accs[0],'Facebook: ')+10):"";
    $instalink= !empty($accs[1])?substr($accs[1],strpos($accs[1],'Instagram: ')+11):"";
    $twiterlink= !empty($accs[2])?substr($accs[2],strpos($accs[2],'Twiter: ')+8):"";
    $anotherlink= !empty($accs[3])?substr($accs[3],strpos($accs[3],'Another: ')+9):"";
    $info = explode(' end_of_contact, ',$data->description);
    $emailInfo= !empty($info[0])?substr($info[0],strpos($info[0],'Email: ')+7):"";
    $phoneInfo= !empty($info[1])?substr($info[1],strpos($info[1],'Phone: ')+7):"";
    $addInfo= !empty($info[2])?substr($info[2],strpos($info[2],'Address: ')+9):"";
    $mapInfo= !empty($info[2])?substr($info[3],strpos($info[3],'Map: ')+5):"";
?>
@extends('master.admin')
@section('main')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h1>Chỉnh sửa bài viết</h1>
            </div>
            <div class="card-body">
               <form action="{{route('content.update',$data->id)}}" method="post" enctype="multipart/form-data">
                   @csrf @method('PUT')
                   <input type="hidden" name="id" value="{{$data->id}}">
                   <div class="row">
                       <div class="col-7">
                            <div class="form-group">
                                <label for="">Mô tả địa điểm</label>
                                <input type="text" name="tittle" id="tittle" class="form-control" value="{{old('tittle')?old('tittle'):$data->tittle}}" placeholder="Nhập tiêu đề" aria-describedby="helpId">
                                @error('tittle')
                                <small id="helpId" class="text-danger">{{$message}}</small>
                                @enderror
                            </div>                               
                            <input type="hidden" name="summary" value="{{$data->summary}}" placeholder="Nhập mô tả chung"  class="form-control"  aria-describedby="helpId">
                       
                            <div class="form-group">
                                <label for="">Face book</label>
                                <input type="text" name="facebook" id="" class="form-control" value="{{$fblink}}" placeholder="Nhập link facebook" aria-describedby="helpId">
                            </div>
                         
                            <div class="form-group">
                                <label for="">Twiter</label>
                                <input type="text" name="twiter" id="" class="form-control" value="{{$twiterlink}}" placeholder="Nhập link twiter" aria-describedby="helpId">
                            </div>
                            <div class="form-group">
                                <label for="">Instagram</label>
                                <input type="text" name="insta" id="" class="form-control" value="{{$instalink}}" placeholder="Nhập link Instagram" aria-describedby="helpId">
                            </div>
                            <div class="form-group">
                                <label for="">Khác</label>
                                <input type="text" name="another" id="" class="form-control" value="{{$anotherlink}}" placeholder="Nhập link" aria-describedby="helpId">
                            </div>
                            <input type="hidden" name="description" value="{{old('description')?old('description'):$data->description}}" class="form-control" placeholder="Mô tả bài viết" >
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="text" name="email" id="" class="form-control" value="{{$emailInfo}}" placeholder="Nhập link" aria-describedby="helpId">
                            </div>
                            <div class="form-group">
                                <label for="">Số điện thoại</label>
                                <input type="text" name="phone" id="" class="form-control" value="{{$phoneInfo}}" placeholder="Nhập link" aria-describedby="helpId">
                            </div>
                            <div class="form-group">
                                <label for="">Địa chỉ</label>
                                <input type="text" name="address" id="" class="form-control" value="{{$addInfo}}" placeholder="Nhập link" aria-describedby="helpId">
                            </div>
                            <div class="form-group">
                                <label for="">Đường dẫn trên Google Map</label>
                                <input type="text" name="map" id="" class="form-control" value="{{$mapInfo}}" placeholder="Nhập link" aria-describedby="helpId">
                            </div>
                       </div>
                       <div class="col-1"></div>
                       <div class="col-4">
                            <div class="form-group">
                                <label for="">Danh mục</label>
                                <select name="cat_id" id="" class="form-control"  style="height:40px">
                                    @foreach($cat as $ct)
                                    <option value="{{$ct->id}}" {{$data->cat_id==$ct->id?'selected':''}} >{{$ct->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Từ khóa</label>
                                <input type="text" name="meta_keyword" id="" value="{{old('meta_keyword')?old('meta_keyword'):$data->meta_keyword}}" class="form-control" placeholder="Từ khóa" >
                                @error('meta_keyword')
                                <small id="helpId" class="text-danger">{{$message}}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Từ khóa mô tả</label>
                                <input type="text" name="meta_description" id="" placeholder="meta description" value="{{old('meta_description')?old('meta_description'):$data->meta_description}}" class="form-control"  aria-describedby="helpId">
                                @error('meta_description')
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
                            <div class="row">
                                <div class="col-8">
                                    <div class="form-group">
                                        <label for="">Mức ưu tiên</label>
                                        <input type="number" name="index" id="" value="{{old('index')?old('index'):$data->index}}" class="form-control" placeholder="" >
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
                                                <input type="checkbox" {{$data->status==0?"":"checked"}}  name="status">
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
                            <div class="upload_image" style="height:270px">
                                @if(old('my_file'))
                                <img class="mr-3 pt-1" src="{{old('my_file')}}" id = "show_img" style="height:250px;width:100%" alt="">
                                @else
                                <img class="mr-3 pt-1" src="{{url($data->images)}}" id = "show_img" style="height:250px;width:100%" alt="">
                                @endif
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
<script>
    $(document).on('keyup','#tittle',function(){
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
@extends('master.admin')

@section('main')
<div class="container">
    <div class="card card-custom gutter-b example example-compact">
        <form class="form" method="POST" action="{{route('config.update', $item->id)}}">
        @csrf @method('PUT')
            <div class="card-header text-center mx-10"><h2 class="text-uppercase">Thay đổi thông tin cấu hình</h2></div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-8 col-md-8">
                        <div class="form-group">
                            <label>Tên cấu hình</label>
                            <input type="text" name="name" class="form-control" value="{{$item->name, old('name')}}" placeholder="Enter number..." />
                            @error('name')
                            <small class="text-danger pt-10 font-italic">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <span class="mb-4" for="">Thông tin cấu hình</span>
                            <input type="text" name="information" class="form-control" value="{{$item->information, old('name')}}" placeholder="Enter number..." />
                            @error('information')
                            <small class="text-danger pt-10 font-italic">{{$message}}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="form-group">
                            <label>Kiểu</label>
                            <input type="text" name="type" class="form-control" value="{{ old('prioty', $item->type) }}" placeholder="Enter prioty..." />
                            @error('prioty')
                            <small class="text-danger pt-10 font-italic">{{$message}}</small>
                            @enderror
                        </div>

                        <label class="">Trạng thái</label><br />
                        <div class="form-group">
                            <div class="col-9 col-form-label">
                                <div class="radio-list">
                                    <label class="radio">
                                        <input type="radio" name="status" value="1" {{$item->status == 1 ? 'checked' : ''}}/>
                                        <span></span>Hoạt động</label>
                                    <label class="radio">
                                        <input type="radio" name="status" value="0" {{$item->status == 0 ? 'checked' : ''}}/>
                                        <span></span>Tạm dừng</label>
                                </div>
                            </div>
                        </div>
                    </div>
                
                </div>
            
                <div class="mt-5 card-footer">
                    <button type="submit" class="btn btn-primary"><i class="la la-save mr-1"></i> Lưu lại</button>
                    <a href="{{route('category.index')}}" class="btn btn-danger"><i class="la la-power-off mr-1"></i> Hủy</a>
                </div>
            </div>
        </form>
    </div>
</div>
@stop()
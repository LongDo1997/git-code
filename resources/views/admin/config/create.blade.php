@extends('master.admin')

@section('main')
<div class="container">
    <div class="card card-custom gutter-b example example-compact">
        <form class="form" method="POST" action="{{ route('config.store') }}">
            @csrf
            <div class="card-header text-center mx-10"><h2 class="text-uppercase">Thêm mới</h2></div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-8 col-md-8">
                        <div class="form-group">
                            <label>Tên cấu hình</label>
                            <input type="text" name="name" class="form-control" value="{{old('name')}}" placeholder="Nhập thông tin..." />
                            @error('name')
                            <small class="text-danger pt-10 font-italic">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Thông tin cấu hình</label>
                            <input type="text" name="information" class="form-control" value="{{old('name')}}" placeholder="Nhập thông tin..." />
                            @error('information')
                            <small class="text-danger pt-10 font-italic">{{$message}}</small>
                            @enderror
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4">   
                        <div class="form-group">
                            <label>Kiểu</label>
                            <input type="text" name="type" class="form-control" value="{{ old('prioty') }}" placeholder="Nhập kiểu..." />
                            @error('type')
                            <small class="text-danger pt-10 font-italic">{{$message}}</small>
                            @enderror
                        </div>

                        <label class="">Trạng thái</label><br />
                        <div class="form-group">
                            <div class="col-9 col-form-label">
                                <div class="radio-list">
                                    <label class="radio">
                                        <input type="radio" name="status" value="1" checked="checked"/>
                                        <span></span>Hoạt động</label>
                                    <label class="radio">
                                        <input type="radio" name="status" value="0" />
                                        <span></span>Tạm dừng</label>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="card-footer mt-5">
                    <button type="submit" class="btn btn-primary"><i class="fas fa-save mr-1"></i> Create</button>
                    <a href="{{ route('config.index') }}" class="btn btn-success"><i class="fas fa-reply mr-1"></i> Return</a>
                </div>
            </div>
        </form>
    </div>
</div>
@stop()
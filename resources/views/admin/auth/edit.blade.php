@extends('master.admin')

@section('main')
<div class="container">
    <div class="card card-custom gutter-b example example-compact">
    <form class="form" method="POST" action="{{ route('auth.update', $data->id) }}">
            @csrf @method('PUT')
            <div class="card-body">
                <div class="form-group">
                    <label>Tên cửa hàng</label>
                    <input type="text" name="name" class="form-control" placeholder="Mời bạn nhập tên cửa hàng..." value="{{$data->name}}"/>
                    @error('name')
                        <small>{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group">
                <label>Thành phố</label>
                    <select name="area_id" class="form-control">
                        <option value="{{$data->area_id}}">{{$data->area_id}}</option>
                        @foreach($areaList as $area)
                        <option value="{{$area->id}}">{{$area->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Địa chỉ cửa hàng</label>
                    <input type="text" name="address" class="form-control" placeholder="Nhập địa chỉ..." value="{{$data->address}}" />
                </div>
                <div class="form-group">
                    <label>Điện thoại</label>
                    <input type="text" name="phone" class="form-control" placeholder="Nhập số điện thoại..." value="{{$data->phone}}"/>
                </div>
                <div class="form-group">
                    <label>Email cửa hàng</label>
                    <input type="text" name="email" class="form-control" placeholder="Nhập email cửa hàng..." value="{{$data->email}}"/>
                </div>
                <label class="">Trạng thái</label><br />
                <div class="form-group">
                    <div class="col-9 col-form-label">
                        <div class="radio-list">
                            <label class="radio">
                                <input type="radio" name="status" value="1" checked="checked">
                                <span></span>Hoạt động</label>
                            <label class="radio">
                                <input type="radio" name="status" value="2">
                                <span></span>Đang xây dựng</label>
                            <label class="radio">
                                <input type="radio"  name="status" value="0"/>
                                <span></span>Tạm dừng</label>
                        </div>
                    </div>
                </div>
                <!--end: Code-->
                <div class="mt-5">
                    <button type="submit" class="btn btn-primary"><i class="fas fa-save mr-1"></i> Lưu lại</button>
                    <a href="{{ url('/admin/accounts') }}" class="btn btn-danger"><i class="fas fa-power-off"></i> Hủy</a>
                </div>
            </div>
        </form>
    </div>
</div>

@stop()
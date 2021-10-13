@foreach($data as $dt)
    <tr>
        <td>{{$dt->id}}</td>
        <td>{!! $dt->caption !!}</td>
        <td><img src="{{url($dt->images)}}" width="90" height="70" alt=""></td>
        <td>{{$dt->get_cat->name}}</td>
        <td>{{$dt->status==0?"Ẩn":"Hiện"}}</td>
        <td>
            <a class="btn btn-sm btn-primary pr-1 py-2 pl-2 " href="{{route('image.edit',$dt->id)}}"  data-toggle="tooltip" title="Chỉnh sửa"><i class="text-center fas fa-edit"></i></a>
            <a class="btn btn-sm btn-danger pr-1 py-2 pl-2 btn_delete" href="{{route('image.destroy',$dt->id)}}"  data-toggle="tooltip" title="Xóa"><i class="text-center fas fa-times-circle"></i></a>
        </td>
    </tr>
@endforeach
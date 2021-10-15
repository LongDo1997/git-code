@foreach($data as $dt)
    <tr>
        <td class="align-middle">{{$dt->id}}</td>
        <td class="align-middle">{{$dt->tittle}}</td>
        <td class="align-middle"><img src="{{url($dt->images)}}" width="90" height="70" alt=""></td>
        <td class="align-middle">{{$dt->get_cat->name}}</td>
        <td class="align-middle">{{$dt->index}}</td>
        <td class="align-middle">{{$dt->status==0?"Ẩn":"Hiện"}}</td>
        <td class="align-middle">
            <a class="" href="{{route('content.edit',$dt->id)}}"  data-toggle="tooltip" title="Chỉnh sửa"><i class="text-center la la-edit text-success fa-2x"></i></a>
            <a class="btn_delete" href="{{route('content.destroy',$dt->id)}}"  data-toggle="tooltip" title="Xóa"><i class="text-center la la-trash text-danger fa-2x"></i></a>
        </td>
    </tr>

@endforeach
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
@if($id != 1)
<button id="{{$id}}" data-token="{{ csrf_token() }}" data-route="{{adminUrl('groups/'.$id)}}"  type="button" class="destroy btn btn-danger btn-xl" title="حذف"><i class="icon-trash"></i>
@endif


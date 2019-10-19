@if($active == 1)
<a  class="btn btn-success">{{ trans('admin.actvided') }} </a> 
@else
<a  class="btn btn-danger">
{{ trans('admin.noActvided') }}</a>
@endif
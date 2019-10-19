@extends('admin.index')
@section('content')
@section('style')
<!-- Data Tables -->
    <link rel="stylesheet" href="{{url('/public/admin')}}/vendor/datatables/dataTables.bs4.css" />
    <link rel="stylesheet" href="{{url('/public/admin')}}/vendor/datatables/dataTables.bs4-custom.css" />

@endsection
<style type="text/css">
  .deleteBtn {
      color: white!important;
      background: #ff5b5b!important;
      border-radius: 4px!important;
      text-shadow: 0 1px 1px rgba(0, 0, 0, 0.2)!important;
      outline: 0!important;
      font-weight: 500!important;
      font-size: 16px!important;
      padding: 8px 16px!important;
      margin-right: 3px;
      margin-left: 3px;
  }
 
</style>
<style type="text/css">
  .dt-buttons{
    display: none;
  }
</style>

<div class="main-content">
<div class="row gutters">
  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
    <div class="card">
      <div class="card-header">{{$title}}
        <button type="button" class="btn btn-primary add" style="float: @if(lang() == 'ar' ) left @else right @endif">
          <i class="icon-plus"></i> {{ trans('admin.addData')}}
        </button>
        <button type="button" class="btn btn-default btn-space btn-space-bottom  deleteBtn" style="float: @if(lang() == 'ar' ) left @else right @endif">
          <i class="icon-trash"></i> 
        </button>
      </div>

      <div class="card-body">
        {!! Form::open(['id'=>'form_active','url'=>'','method'=>'delete','class'=>'form']) !!}
          {!! $dataTable->table([
            'class'=>'dataTable table table-striped table-bordered', 'id' => 'basicExample' ,
          ],true) !!}
      </div>
    </div>
  </div>
</div>
<div class="widget-footer">
  <div class="alert alert-danger col-lg-12 noitemActive text-center">
    <span>{{ trans('admin.noItem') }}</span>
  </div>
  
  <div class="contact-form col-lg-12 pull-right">
    <div class="row">
      <div class="form-group col-lg-4">
        <select class="form-control active" name="active">
          <option value="1">غير مؤرشفة</option>
          <option value="0">أرشفة</option>
        </select>
      </div>
      {!! Form::close() !!}
      <div class="form-group col-lg-4">
      <button type="button" class="btn btn-info activeChange ">
        <i class="icon-refresh"></i>  {{ trans('admin.activeChange') }}
      </button>
    </div>
  </div>
  <div class="alert alert-success col-lg-12 itemActive text-center">
    <span>{{ trans('admin.yesItemActive') }}</span> <span class="label label-danger alert-spanitem yesItemActive"> </span>
    <div class="pull-left form-group">
      <button type="button" class="btn btn-danger btn-sm closeActive" ><i class="icon-close"></i></button>
      <button type="button" class="btn btn-warning btn-sm sendActive" ><i class="icon-send"></i></button>
    </div>
  </div>
  
</div>
<!-- Modal -->
    <div id="multiDelete" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header" dir="ltr">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4  class="modal-title"><i class="icon-trash"></i> {{ trans('admin.confirmDelete') }}</h4>
          </div>
          <div class="modal-body">
            <div class="alert alert-danger">
            <p>{{ trans('admin.deleteOk') }}</p>
            </div>
            <div class="alert alert-success alert-dismissable text-center alert-yesitem">{{ trans('admin.yesItem') }} <span class="label label-danger alert-spanitem"></span></div>
            <div class="alert alert-danger alert-dismissable text-center alert-noitem">{{ trans('admin.noItem') }}</div>
          </div>
          <div class="modal-footer">
            <button style="margin: 3px" type="button" class="btn btn-default" data-dismiss="modal">{{ trans('admin.Close') }}</button>
            <button type="button" class="btn btn-danger del-all" name="deleteAll">{{ trans('admin.delete') }}</button>
          </div>
        </div>

      </div>
    </div>
</div>




@section('script')
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.0.3/css/buttons.dataTables.min.css">
  <script src="https://cdn.datatables.net/buttons/1.0.3/js/dataTables.buttons.min.js"></script>
  <script src="{{ url('public/') }}/vendor/datatables/buttons.server-side.js"></script>
  <script src="{{ url('/public/admin/') }}/plugins/jquery-confirm/jquery.confirm.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


  <script type="text/javascript">
    deleteAll();
    $('.noitemActive').hide();
    $('.itemActive').hide();
    $('.closeActive').on('click',function(){ 
      $('.itemActive').hide();
    });
    
    
  </script>

  <script type="text/javascript">

    
    $('.add').on('click',function(){ 
      window.location.href="{{ \URL::current().'/create' }}";
    });

    $('.activeChange').on('click',function(){ 
      var item_checked = $('input[class="item_checkbox"]:checkbox:checked').length;
      if (item_checked == 0) {
        $('.noitemActive').show();
        setTimeout(function(){
          $('.noitemActive').hide();
        }, 1500);
      }else{
        $('.itemActive').show();
        $('.yesItemActive').html(' '+item_checked);
      }
    });

    $('.sendActive').on('click',function(){ 
      $('.form').prop('action','{{adminUrl('archives/active/all')}}');
      setTimeout(function(){
            $('#form_active').submit();
      }, 500);
    });

    $( document ).on('click','.deleteBtn',function()
    {
      $('.alert-noitem').hide();
      $('.alert-yesitem').hide();

      var item_checked = $('input[class="item_checkbox"]:checkbox:checked').length;
      
      if (item_checked == 0) {
        // console.log($('input[class="item_checkbox"]:checkbox:checked').length);
        $('.alert-noitem').show();
        $('.del-all').hide();
      }else{
        $('.alert-spanitem').text(item_checked);
        $('.alert-yesitem').show();
        $('.del-all').show();
      }
      $('#multiDelete').modal('show');
    });

    $( document ).on('click','.del-all',function()
    {
      $('.form').prop('action','{{adminUrl('archives/destroy/all')}}');
      setTimeout(function(){
            $('#form_active').submit();
      }, 500);
      
    });

    $(document).on('click','.destroy',function(){ 
    var route   = $(this).data('route');
    var token   = $(this).data('token');
    $.confirm({
        icon                : 'glyphicon glyphicon-floppy-remove',
        animation           : 'rotateX',
        closeAnimation      : 'rotateXR',
        title               : '{{ trans('admin.confirmDelete') }}',
        autoClose           : 'cancel|6000',
        text                : '{{ trans('admin.deleteOk') }}',
        confirmButtonClass  : 'btn btn-space btn-primary',
        cancelButtonClass   : 'btn btn-space btn-danger',
        confirmButton       : '{{ trans('admin.delete') }}',
        cancelButton        : '{{ trans('admin.Close') }}',
        dialogClass         : "modal-danger modal-dialog",
        confirm: function () {
            $.ajax({
                url     : route,
                type    : 'post',
                data    : {_method: 'delete', _token :token},
                dataType:'json',           
                success : function(data){
                  $("#"+data).parents("tr").remove(); 
                  swal("{{ trans('admin.success') }}", "{{ trans('admin.deleted') }}", "success");
                },
                error: function($data){
                   swal("{{ trans('admin.error') }}", "{{ trans('admin.noDeleted') }}", "error");
                }
                
            });
        },
    });
  });
  </script>
      {!! $dataTable->scripts() !!}
  @endsection
@endsection
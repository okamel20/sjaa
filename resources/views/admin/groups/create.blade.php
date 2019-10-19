@extends('admin.index')
@section('content')
<style type="text/css">
  .backColor{
    background-color: #34c7f4;
  }
</style>
<div class="main-content">
  <!-- Row start -->
  <div class="row gutters">
    <div class="col-xl-12 col-lg-12 col-md-6 col-sm-12">
      <!-- Row start -->
      <div class="row gutters">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
          <div class="card">
            <div class="card-header">{{ $title }} </div>
            <div class="card-body">
            {!! Form::open(['url'=>adminUrl('groups'),'files'=>true]) !!}


            <div class="form-group col-lg-12">
              <label>{{trans('admin.group_name_ar')}}</label>
              <input type="text" name="group_name_ar" class="form-control" required="" placeholder="{{trans('admin.group_name_ar')}}" value="{{old('group_name_ar')}}">
            </div>

            <div class="form-group col-lg-12">
              <label>{{trans('admin.group_name_en')}}</label>
              <input type="text" name="group_name_en" class="form-control" required="" placeholder="{{trans('admin.group_name_en')}}" value="{{old('group_name_en')}}">
            </div>

            <div class="form-group col-lg-12">
              <label>{{trans('admin.groups')}}</label>
              <br>
              <?php $count = 1 ;?>
              @foreach(Route::getRoutes() as $value)
              @if ($value->getPrefix() == '/admin')
              @if($value->getAction('as') && $value->getAction('name'))
              <label class="alert alert-primary  role{{ $count }} " >
                <input type="checkbox" name="roles[]" data-id="{{ $count }}" class="form-control role" value="{{ $value->getAction('as') }}" >{{ $value->getAction('name') }}</label>
                <?php $count++ ;?>
              @endif
              @endif
              @endforeach
              
            </div>

            <div class="form-group col-lg-12">
              <div class="btn-group btn-group-toggle" data-toggle="buttons">
                <label class="btn btn-secondary">
                  <input type="radio" name="active" id="option2" value="0" autocomplete="off"> {{ trans('admin.noActvided') }}
                </label>
                <label class="btn btn-secondary active">
                  <input type="radio" name="active" id="option1" value="1" autocomplete="off" checked> {{ trans('admin.actvided') }}
                </label>
              </div>
            </div>

           
            {!! Form::submit(trans('admin.send'),['class'=>'btn btn-primary ']) !!}
            {!! Form::close() !!}
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  

    


  @section('script')
  <script type="text/javascript">
    // $('.role').change(function () {
    //   var classs = '.role'+$(this).data('id');

    //     // $(classs).removeClass('backColor'); 

    //     $(classs).addClass('backColor'); 

      
    // });

  </script>

  @endsection
@endsection
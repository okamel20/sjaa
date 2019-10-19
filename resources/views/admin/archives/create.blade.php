@extends('admin.index')
@section('content')
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
            {!! Form::open(['url'=>adminUrl('archives'),'files'=>true]) !!}

            <div class="form-group col-md-12">
              <label class="col-form-label">رقم العدد  عربى</label>
              <input type="text" name="the_number_ar" class="form-control" required="" value="{{ old('the_number_ar') }}">
            </div>

            <div class="form-group col-md-12">
              <label class="col-form-label">رقم العدد  انجليزى</label>
              <input type="text" name="the_number_en" class="form-control" required="" value="{{ old('the_number_en') }}">
            </div>

            <div class="form-group col-lg-12">
              <label> الطبعة </label>
              <input type="file" name="pdf_file" class="form-control" placeholder="{{ trans('admin.pdf_file') }}" required="">
            </div>

            <div class="form-group col-md-12">
              <label class="col-form-label"> تاريخ الطبعة</label>
              <input type="date" name="date" class="form-control" required="" value="{{ old('date') }}">
            </div>

            <div class="form-group col-lg-12">
              <div class="btn-group btn-group-toggle" data-toggle="buttons">
                <label class="btn btn-secondary">
                  <input type="radio" name="active" id="option2" value="0" autocomplete="off" checked> مؤرشفة
                </label>
                <label class="btn btn-secondary active">
                  <input type="radio" name="active" id="option1" value="1" autocomplete="off" > غير مؤرشفة
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
  
  @endsection
@endsection
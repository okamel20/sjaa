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
                  {!! Form::open(['url'=>route('publishUpdate' , ['id' => $data->id]),'files'=>true,'method'=>'put']) !!}
                  <div class="form-row">
                    <div class="form-group col-md-12">
                      <label class="col-form-label"> نطاق النشر بالعربى</label>
                      <textarea class="form-control" required="" name="publish_ar" rows="10">{{ oldOrValue('publish_ar',$data) }}</textarea>
                    </div>

                    <div class="form-group col-md-12">
                      <label class="col-form-label"> نطاق النشر بالانجليزى</label>
                      <textarea class="form-control" required="" name="publish_en" rows="10">{{ oldOrValue('publish_en',$data) }}</textarea>
                    </div>

                    <div class="form-group col-md-12">
                      <button type="submit" class="btn btn-primary">{{ trans('admin.send') }}</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  @section('script')
   
  @endsection
@endsection
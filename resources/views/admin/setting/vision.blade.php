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
                  {!! Form::open(['url'=>route('visionUpdate' , ['id' => $data->id]),'files'=>true,'method'=>'put']) !!}
                  <div class="form-row">
                    <div class="form-group col-md-12">
                      <label class="col-form-label"> رؤيتنا بالعربى</label>
                      <textarea class="form-control" required="" name="vision_ar" rows="10">{{ oldOrValue('vision_ar',$data) }}</textarea>
                    </div>

                    <div class="form-group col-md-12">
                      <label class="col-form-label"> رؤيتنا بالانجليزى</label>
                      <textarea class="form-control" required="" name="vision_en" rows="10">{{ oldOrValue('vision_en',$data) }}</textarea>
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
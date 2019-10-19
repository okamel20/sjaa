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
                  {!! Form::open(['url'=>route('sochialLinksUpdate' , ['id' => $data->id]),'files'=>true,'method'=>'put']) !!}
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label class="col-form-label"> رابط انستجرام</label>
                      <input type="text" name="insta_link" class="form-control" placeholder="ابط انستجرام" required value="{{ oldOrValue('insta_link',$data) }}">
                    </div>
                    <div class="form-group col-md-6">
                      <label class="col-form-label"> رابط فيس بوك</label>
                      <input type="text" name="facebook" class="form-control" placeholder="رابط فيس بوك " required value="{{ oldOrValue('facebook',$data) }}">
                    </div>

                    <div class="form-group col-md-6">
                      <label class="col-form-label"> رابط تويتر </label>
                      <input type="text" name="twiter" class="form-control" placeholder="ابط تويتر" required value="{{ oldOrValue('twiter',$data) }}">
                    </div>
                    <div class="form-group col-md-6">
                      <label class="col-form-label"> رابط جوجل بلس</label>
                      <input type="text" name="gogle" class="form-control" placeholder="ابط جوجل بلس" required value="{{ oldOrValue('gogle',$data) }}">
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
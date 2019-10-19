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
                  {!! Form::open(['url'=>route('settingUpdate' , ['id' => $data->id]),'files'=>true,'method'=>'put']) !!}

                  <?php $subject = \App\Contacts_subject::find($data->contact_subject_id) ;?>
                  
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label class="col-form-label"> موضوع الرسالة</label>
                      <input type="text" class="form-control" disabled="" value="@if($subject) {{ $subject['title_ar'] }} @else م الحذف @endif ">
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label class="col-form-label"> اسم الراسل</label>
                      <input type="text" class="form-control" disabled="" value="{{ $data['name'] }}">
                    </div>
                    <div class="form-group col-md-6">
                      <label class="col-form-label"> بريد الراسل</label>
                      <input type="text" class="form-control" disabled="" value="{{ $data['email'] }}">
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-12">
                      <label class="col-form-label"> رقم هاتف الراسل</label>
                      <input type="text" class="form-control" disabled="" value="{{ $data['phone'] }}">
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-12">
                      <label class="col-form-label"> نص الرسالة</label>
                      <textarea class="form-control" rows="10">{{ $data['msg'] }}</textarea>
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
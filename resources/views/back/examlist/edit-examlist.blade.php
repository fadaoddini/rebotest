@extends('back.index')
@section('webtitleadmin')
    مدیریت سطح بندی ها
@endsection
@section('content')

    <div class="card card-custom card-stretch gutter-b card-shadowless bg-light">
        <!--begin::Header-->
        <div class="card-header border-0 py-5">
            <h3 class="card-title align-items-start flex-column">
                <span class="card-label font-weight-bolder text-dark">ویرایش سطح بندی</span>

            </h3>

        </div>
        <!--end::Header-->

        <!--begin::Body-->
        <div class="card-body py-0">

            <form method="post" action="{{route('admin.examlist.update',$examlist->id)}}" enctype="multipart/form-data">
                @csrf
                <div class="row clearfix">
                    {{-- سمت راست--}}
                    <div class="col-12 col-md-8">
                        <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                        <label>
                            عنوان آزمون
                        </label>
                        <input class="@error('name') is-invalid @enderror form-control" type="text" name="name" value="{{$examlist->name}}" placeholder="عنوان" >

                        </span>
                    </div>

<div class="col-lg-6 col-md-6 col-sm-12 form-group">
    <label>
        مدت زمان پاسخ گویی (به دقیقه)
    </label>
                        <input class="@error('timing') is-invalid @enderror form-control" type="text" name="timing" value="{{$examlist->timing}}" placeholder="مدت زمان پاسخ گویی" >

                        </span>
                    </div>

<div class="col-lg-6 col-md-6 col-sm-12 form-group">
    <label>
        امتیاز کامل آزمون
    </label>
                        <input class="@error('score') is-invalid @enderror form-control" type="text" name="score" value="{{$examlist->score}}" placeholder="امتیاز کامل آزمون" >

                        </span>
                    </div>



                        </div>
                    </div>

                    <div class="col-12 col-md-4">
                        <div class="row">

                            <div class="col-12  form-group">

                                <input type="file" name="images"  class="dropzone dropzone-default dz-clickable" id="kt_dropzone_1">




                                {{--  <input class="dropzone" id="dropzone" type="file" name="filename" >--}}
                            </div>
                            <div class="col-12">
                                <span class="m-4" >
                            <img width="100%" src="{{url('/images/thumb/'.$examlist->images)}}" class="h-75 align-self-end" alt="">
                        </span>
                                <hr>
                                <a class="btn btn-success btn-sm " href="{{url('/images/'.$examlist->images)}}">
                                    <i class="fa fa-folder"></i>
                                    دانلود کنید!
                                </a>
                            </div>

                        </div>
                    </div>


                  {{--  <div class="col-lg-4 col-md-12 col-sm-12 form-group">
                        <select class="custom-select-box form-control @error('slug') is-invalid @enderror">
                            <option>نوع اشتراک</option>
                            <option >عضویت عادی</option>
                            <option>عضویت ویژه</option>

                        </select>
                    </div>
--}}


                    <div class="col-lg-12 col-md-12 col-sm-12 form-group text-right">
                        <button class="btn font-weight-bolder btn-sm btn-light-danger px-5" type="submit" name="submit-form"><span class="txt">لغو <i class="fa fa-angle-left"></i></span></button>
                        <button class="btn font-weight-bolder btn-sm btn-light-success px-5" type="submit" name="submit-form"><span class="txt">ذخیره تغییرات <i class="fa fa-angle-left"></i></span></button>
                    </div>

                </div>
            </form>


        </div>
        <!--end::Body-->
    </div>

@endsection
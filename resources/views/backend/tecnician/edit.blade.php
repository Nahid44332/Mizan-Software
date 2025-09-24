@extends('backend.master')

@section('content')

        <div class="container-fluid mt-5">
            <div class="card shadow">
                <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                    <h4 class="mb-0">টেকনিশিয়ান তথ্য সংশোধন করুন</h4>
                    <a href="{{url('/admin/tecnician/list')}}" class="btn btn-light btn-sm">
                        <i class="fa fa-arrow-left"></i> Back
                    </a>
                </div>

                <div class="card-body">
                
                    <form action="{{url('/admin/tecnician/edit/update/'.$tecnician->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <div class="col-12 col-md-6 mb-3">
                                <label class="form-label">নাম</label>
                                <input type="text" class="form-control" name="name" value="{{$tecnician->name}}">
                            </div>
                            <div class="col-12 col-md-6 mb-3">
                                <label class="form-label">ফোন নাম্বার</label>
                                <input type="text" class="form-control" name="phone" value="{{$tecnician->phone}}">
                            </div>
                            <div class="col-12 col-md-6 mb-3">
                                <label class="form-label">জন্ম তারিখ</label>
                                <input type="date" class="form-control" name="dob" value="{{$tecnician->dob}}">
                            </div>
                            <div class="col-12 col-md-6 mb-3">
                                <label class="form-label">এনআইডি নাম্বার</label>
                                <input type="text" class="form-control" name="nid" value="{{$tecnician->nid}}">
                            </div>
                            <div class="col-12 col-md-6 mb-3">
                                <label class="form-label">পাসপোর্ট নাম্বার (অপশনাল)</label>
                                <input type="text" class="form-control" name="passport_no" value="{{$tecnician->passport_no ?? "N/A"}}">
                            </div>
                            <div class="col-12 col-md-6 mb-3">
                                <label class="form-label">বর্তমান ঠিকানা</label>
                                <input type="text" class="form-control" name="present_address" value="{{$tecnician->present_address}}">
                            </div>
                            <div class="col-12 col-md-6 mb-3">
                                <label class="form-label">স্থায়ী ঠিকানা</label>
                                <input type="text" class="form-control" name="permanent_address" value="{{$tecnician->permanent_address}}">
                            </div>
                            <div class="col-12 col-md-6 mb-3">
                                <label class="form-label">জয়েন তারিখ</label>
                                <input type="date" class="form-control" name="join_date" value="{{$tecnician->join_date}}">
                            </div>
                            <div class="col-12 col-md-6 mb-3">
                                <label class="form-label">কাজের ধরন</label>
                                <input type="text" class="form-control" name="Type_of_work" value="{{$tecnician->Type_of_work}}">
                            </div>
                            <div class="col-12 col-md-6 mb-3">
                                <label class="form-label">পাসপোর্ট সাইজ ছবি</label>
                                <div>
                                <img src="{{asset('backend/images/tecnician/'.$tecnician->image)}}" alt="" height="100" width="100">
                                </div>
                                <input type="file" class="form-control" name="image">
                            </div>
                           
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-success mt-3">
                                <i class="fa fa-save"></i> টেকনিশিয়ান আপডেট করুন
                            </button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

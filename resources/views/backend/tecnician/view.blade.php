@extends('backend.master')

@section('content')
<div class="container mt-5">
    <div class="card shadow-lg border-0 rounded-4 p-4">
        <div class="row">
            <!-- Image -->
            <div class="col-md-4 text-center">
                <img src="{{ asset('backend/images/tecnician/'.$tecnician->image) }}" 
                     class="img-fluid rounded-4 shadow-sm mb-3"
                     style="max-height: 350px; object-fit: cover;"
                     alt="{{ $tecnician->name }}">
            </div>

            <!-- Details -->
            <div class="col-md-8">
                <h3 class="mb-2">{{ $tecnician->name }}</h3>
                <h5 class="text-muted mb-4">{{ $tecnician->designation }}</h5>

                <p class="mb-3"><strong>ফোন:</strong> {{ $tecnician->phone ?? 'N/A' }}</p>
                <p class="mb-3"><strong>জন্ম তারিখ:</strong> {{ $tecnician->dob ?? 'N/A' }}</p>
                <p class="mb-3"><strong>জাতিয় পরিচয়পত্র:</strong> {{ $tecnician->nid ?? 'N/A' }}</p>
                <p class="mb-3"><strong>জাতিয় পরিচয়পত্র:</strong> {{ $tecnician->passport_no ?? 'N/A' }}</p>
                <p class="mb-3"><strong>বর্তমান ঠিকানা:</strong> {{ $tecnician->present_address ?? 'N/A' }}</p>
                <p class="mb-3"><strong>স্থায়ী ঠিকানা:</strong> {{ $tecnician->permanent_address ?? 'N/A' }}</p>
                <p class="mb-3"><strong>কাজে যোগদানের তারিখ:</strong> {{ $tecnician->join_date ?? 'N/A' }}</p>
                <p class="mb-3"><strong>কাজের ধরণ:</strong> {{ $tecnician->Type_of_work ?? 'N/A' }}</p>

                <div>
                    <a href="{{url('admin/tecnician/list')}}" class="btn btn-secondary rounded-pill">
                        <i class="fa fa-arrow-left"></i> ফিরে যান
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('backend.master')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">

            {{-- Profile Card --}}
            <div class="card shadow mb-4">
                <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                    <h4 class="mb-0">অ্যাডমিন প্রোফাইল</h4>
                    <a href="{{ url('/admin/dashboard') }}" class="btn btn-light btn-sm">
                        <i class="fa fa-arrow-left"></i> ড্যাশবোর্ডে ফেরত যান
                    </a>
                </div>

                <div class="card-body text-center">
                    {{-- Admin Image --}}
                    <img src="{{ asset('backend/images/admin/' . (auth()->user()->image ?? 'default.png')) }}" 
                         alt="Admin Image"
                         class="rounded-circle mb-3"
                         style="height: 120px; width: 120px; object-fit: cover;">

                    <h5>{{ auth()->user()->name }}</h5>
                    <p class="text-muted">{{ auth()->user()->email }}</p>

                    {{-- Update Profile Form --}}
                    <form action="{{ url('/admin/profile/update') }}" method="POST" enctype="multipart/form-data" class="mt-4">
                        @csrf
                        <div class="mb-3 text-start">
                            <label class="form-label">নাম</label>
                            <input type="text" name="name" class="form-control" value="{{ auth()->user()->name }}" required>
                        </div>

                        <div class="mb-3 text-start">
                            <label class="form-label">ইমেইল</label>
                            <input type="email" name="email" class="form-control" value="{{ auth()->user()->email }}" required>
                        </div>

                        <div class="mb-3 text-start">
                            <label class="form-label">প্রোফাইল ছবি</label>
                            <input type="file" name="image" class="form-control">
                        </div>

                        <button type="submit" class="btn btn-success">
                            <i class="fa fa-save"></i> প্রোফাইল আপডেট করুন
                        </button>
                    </form>
                </div>
            </div>

            {{-- Password Change Card --}}
            <div class="card shadow">
                <div class="card-header bg-warning text-dark">
                    <h5 class="mb-0">🔑 পাসওয়ার্ড পরিবর্তন করুন</h5>
                </div>
                <div class="card-body">
                    <form action="{{ url('/admin/profile/password/update') }}" method="POST">
                        @csrf
                    
                        <div class="mb-3">
                            <label class="form-label">বর্তমান পাসওয়ার্ড</label>
                            <input type="password" name="current_password" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">নতুন পাসওয়ার্ড</label>
                            <input type="password" name="new_password" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">নতুন পাসওয়ার্ড পুনরায় লিখুন</label>
                            <input type="password" name="new_password_confirmation" class="form-control" required>
                        </div>

                        <button type="submit" class="btn btn-warning">
                            <i class="fa fa-key"></i> পাসওয়ার্ড পরিবর্তন করুন
                        </button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection

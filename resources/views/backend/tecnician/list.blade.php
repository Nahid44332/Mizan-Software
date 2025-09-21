@extends('backend.master')

@section('content')
<div class="content-wrapper mt-5" style="margin-left:250px; padding:20px;">
    <div class="container-fluid mt-3">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center bg-primary text-white">
                <h4 class="mb-0">টেকনিশিয়ান তালিকা</h4>
                <a href="{{ url('/admin/dashboard') }}" class="btn btn-light btn-sm">
                    <i class="fa fa-plus"></i> টেকনিশিয়ান তৈরি করুন
                </a>
            </div>

            <div class="card-body">

                <!-- 🔍 Stylish Search Bar -->
                <div class="mb-4">
                    <div class="input-group">
                        <span class="input-group-text bg-success text-white"><i class="fa fa-search"></i></span>
                        <input type="text" id="searchInput" class="form-control" placeholder="নাম, ফোন নাম নাম্বার, ঠিকানা, টেকনিশিয়ান আইডি নাম্বার দিয়ে সার্চ করুন">
                        <button class="btn btn-success" type="button" onclick="clearSearch()">মুছুন</button>
                    </div>
                </div>

                <table id="invoiceTable" class="table table-bordered table-striped text-center">
                    <thead class="bg-success text-white">
                        <tr>
                            <th>#</th>
                            <th>টেকনিশিয়ান আইডি</th>
                            <th>ছবি</th>
                            <th>নাম</th>
                            <th>ফোন নাম্বার</th>
                            <th>ঠিকানা</th>
                            <th>জাতীয় পরিচয়পত্র</th>
                            <th>কাজের ধরণ</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tecnicians as $tecnician)
                        <tr>
                            <td>{{ $loop->index+1 }}</td>
                            <td>{{ $tecnician->tecnician_id }}</td>
                            <td>
                                <img src="{{asset('backend/images/tecnician/'.$tecnician->image)}}" alt="" height="50" width="50">
                            </td>
                            <td>{{ $tecnician->name }}</td>
                            <td>{{ $tecnician->phone }}</td>
                            <td>{{ $tecnician->present_address }}</td>
                            <td>{{ $tecnician->nid }}</td>
                            <td>{{ $tecnician->Type_of_work }}</td>
                            <td>
                                <a href="{{url('/admin/tecnician/view/'.$tecnician->id)}}" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                                <a href="#" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                                <a href="{{url('/admin/tecnician/delete/'.$tecnician->id)}}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this Tecnician?')"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- 🔍 Search Function -->
<script>
    document.getElementById("searchInput").addEventListener("keyup", function () {
        let filter = this.value.toLowerCase();
        let rows = document.querySelectorAll("#invoiceTable tbody tr");

        rows.forEach(row => {
            let text = row.innerText.toLowerCase();
            row.style.display = text.includes(filter) ? "" : "none";
        });
    });

    function clearSearch() {
        document.getElementById("searchInput").value = '';
        let rows = document.querySelectorAll("#invoiceTable tbody tr");
        rows.forEach(row => row.style.display = "");
    }
</script>
@endsection

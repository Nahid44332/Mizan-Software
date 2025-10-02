@extends('backend.master')

@section('content')
<div class="container-fluid mt-5 px-2">
    <div class="card shadow">
        <div class="card-header d-flex justify-content-between align-items-center bg-primary text-white">
            <h4 class="mb-0">ইনভয়েস তালিকা</h4>
            <a href="{{ url('/admin/dashboard') }}" class="btn btn-light btn-sm">
                <i class="fa fa-plus"></i> ইনভয়েস তৈরি করুন
            </a>
        </div>

        <div class="card-body">

            <!-- 🔍 Stylish Search Bar -->
            <div class="mb-4">
                <div class="input-group">
                    <span class="input-group-text bg-success text-white"><i class="fa fa-search"></i></span>
                    <input type="text" id="searchInput" class="form-control" placeholder="নাম, ফোন নাম্বার, ঠিকানা, ইনভয়েস নাম্বার দিয়ে সার্চ করুন">
                    <button class="btn btn-success" type="button" onclick="clearSearch()">মুছুন</button>
                </div>
            </div>

            <!-- 🔹 Responsive Table -->
            <div class="table-responsive">
                <table id="invoiceTable" class="table table-bordered table-striped text-center align-middle">
                    <thead class="bg-success text-white">
                        <tr>
                            <th>#</th>
                            <th>সিরিয়াল নাম্বার</th>
                            <th>ইনভয়েস নাম্বার</th>
                            <th>কাস্টমার নাম</th>
                            <th>ফোন নাম্বার</th>
                            <th>জেলা</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($invoicelist as $invoice)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $invoice->serial_number }}</td>
                            <td>{{ $invoice->invoice_number }}</td>
                            <td>{{ $invoice->customer_name }}</td>
                            <td>{{ $invoice->contact_number }}</td>
                            <td>{{ $invoice->district }}</td>
                            <td>
                                <a href="{{ url('/admin/invoice-view/' . $invoice->id) }}" class="btn btn-info btn-sm mb-1">
                                    <i class="fa fa-eye"></i>
                                </a>
                                <a href="{{ url('/admin/invoice-edit/' . $invoice->id) }}" class="btn btn-warning btn-sm mb-1">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <a href="{{ url('/admin/invoice-delete/' . $invoice->id) }}" class="btn btn-danger btn-sm mb-1"
                                    onclick="return confirm('Are you sure you want to delete this invoice?')">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>
<div class="sidebar-overlay" data-reff=""></div>
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

<!-- 🔹 Sidebar responsive adjustment -->
<style>
    @media (max-width: 991px) {
        .container-fluid {
            padding-left: 10px;
            padding-right: 10px;
        }
    }
</style>
@endsection

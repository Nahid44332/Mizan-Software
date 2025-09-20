@extends('backend.master')

@section('content')
    <div class="content-wrapper mt-5" style="margin-left:250px; padding:20px;">
        <div class="container-fluid mt-3">
            <div class="card shadow">
                <div class="card-header bg-success text-white d-flex justify-content-between align-items-center">
                    <h4 class="mb-0">ইনভয়েসের বিস্তারিত তথ্য</h4>
                    <div>
                        <a href="{{ url('/admin/invoice') }}" class="btn btn-light">
                            <i class="fa fa-arrow-left"></i> ইনভয়েস তালিকায় ফিরুন
                        </a>
                        <a href="{{ url('/admin/invoice-print/' . $invoice->id) }}" class="btn btn-info">
                            <i class="fa fa-print"></i> প্রিন্ট করুন
                        </a>
                    </div>
                </div>

                <div class="card-body" id="printArea">
                    <table class="table table-bordered">
                        <tr>
                            <th>সিরিয়াল নাম্বার</th>
                            <td>{{ $invoice->serial_number }}</td>
                        </tr>
                        <tr>
                            <th>মাস</th>
                            <td>{{ $invoice->month }}</td>
                        </tr>
                        <tr>
                            <th>অভিযোগের নাম্বার</th>
                            <td>{{ $invoice->complaint_number }}</td>
                        </tr>
                        <tr>
                            <th>SB নাম্বার</th>
                            <td>{{ $invoice->sb_no }}</td>
                        </tr>
                        <tr>
                            <th>মোবাইল নম্বর</th>
                            <td>{{ $invoice->contact_number }}</td>
                        </tr>
                        <tr>
                            <th>ঠিকানা</th>
                            <td>{{ $invoice->district }}</td>
                        </tr>
                        <tr>
                            <th>রেফারেন্স নাম</th>
                            <td>{{ $invoice->rm_name }}</td>
                        </tr>
                        <tr>
                            <th>কাজের ধরণ</th>
                            <td>{{ $invoice->parts_description }}</td>
                        </tr>
                        <tr>
                            <th>টেকনিশিয়ানের নাম</th>
                            <td>{{ $invoice->job_done_by }}</td>
                        </tr>
                        <tr>
                            <th>মালামাল কেনা বাবদ</th>
                            <td>{{ $invoice->purchase_cost }}</td>
                        </tr>
                        <tr>
                            <th>সাইট থেকে আসা টাকা</th>
                            <td>{{ $invoice->site_income }}</td>
                        </tr>
                        <tr>
                            <th>সাইট খরচ</th>
                            <td>{{ $invoice->site_expense }}</td>
                        </tr>
                        <tr>
                            <th>পণ্যের ব্র্যান্ড</th>
                            <td>{{ $invoice->product_brand }}</td>
                        </tr>
                        <tr>
                            <th>পণ্যের মডেল</th>
                            <td>{{ $invoice->product_model }}</td>
                        </tr>
                        <tr>
                            <th>পণ্যের পরিমাণ</th>
                            <td>{{ $invoice->product_quantity }}</td>
                        </tr>
                        <tr>
                            <th>অভিযোগের ধরন</th>
                            <td>{{ $invoice->complaint_type }}</td>
                        </tr>
                        <tr>
                            <th>পণ্যের ধরণ</th>
                            <td>{{ $invoice->product_category }}</td>
                        </tr>
                        <tr>
                            <th>টেকনিশিয়ানের ফলাফল</th>
                            <td>{{ $invoice->technician_findings }}</td>
                        </tr>
                        <tr>
                            <th>ইনভয়েস নাম্বার</th>
                            <td>{{ $invoice->invoice_number }}</td>
                        </tr>
                        <tr>
                            <th>ইনভয়েসের তারিখ</th>
                            <td>{{ $invoice->invoice_date }}</td>
                        </tr>
                        <tr>
                            <th>কাজের অভিযোগের তারিখ</th>
                            <td>{{ $invoice->job_complain_date }}</td>
                        </tr>
                        <tr>
                            <th>পণ্যের সিরিয়াল নং ১</th>
                            <td>{{ $invoice->product_slno1 }}</td>
                        </tr>
                        <tr>
                            <th>(SEV)(HEV)(SOV)(HO)</th>
                            <td>{{ $invoice->product_slno2 }}</td>
                        </tr>
                        <tr>
                            <th>SCBCC নাম্বার</th>
                            <td>{{ $invoice->scbcc_no }}</td>
                        </tr>
                        <tr>
                            <th>গ্রাহকের নাম</th>
                            <td>{{ $invoice->customer_name }}</td>
                        </tr>
                        <tr>
                            <th>রেফারেন্স খরচ</th>
                            <td>{{ $invoice->reference_cost }}</td>
                        </tr>
                        <tr>
                            <th>পণ্য গ্রহণের তারিখ</th>
                            <td>{{ $invoice->product_received_date }}</td>
                        </tr>
                        <tr>
                            <th>K K K</th>
                            <td>{{ $invoice->kkk }}</td>
                        </tr>
                        <tr>
                            <th>P P P</th>
                            <td>{{ $invoice->ppp }}</td>
                        </tr>
                        <tr>
                            <th>অন্যান্য খরচ</th>
                            <td>{{ $invoice->other_expense }}</td>
                        </tr>
                        <tr>
                            <th>কাজের অবস্থা</th>
                            <td>{{ $invoice->work_status }}</td>
                        </tr>
                    </table>

                    <!-- Action Buttons -->
                    <div class="text-end mt-4">
                        <a href="{{ url('/admin/invoice-edit/' . $invoice->id) }}" class="btn btn-warning">
                            <i class="fa fa-edit"></i> এডিট করুন
                        </a>
                        <a href="{{ url('/admin/invoice-delete/' . $invoice->id) }}" class="btn btn-danger"
                            onclick="return confirm('আপনি কি নিশ্চিত যে ইনভয়েস মুছে ফেলতে চান?')">
                            <i class="fa fa-trash"></i> ডিলিট করুন
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function printInvoice() {
            var printContents = document.getElementById('printArea').innerHTML;
            var originalContents = document.body.innerHTML;
            document.body.innerHTML = printContents;
            window.print();
            document.body.innerHTML = originalContents;
            location.reload();
        }
    </script>
@endsection

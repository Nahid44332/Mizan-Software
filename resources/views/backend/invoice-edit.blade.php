@extends('backend.master')

@section('content')
    <div class="content-wrapper mt-5" style="margin-left:250px; padding:20px;">
        <div class="container-fluid mt-5">
            <div class="card shadow">
                <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                    <h4 class="mb-0">ইনভয়েস এডিট করুন</h4>
                    <a href="{{ url('/admin/invoice') }}" class="btn btn-light btn-sm">
                        <i class="fa fa-arrow-left"></i> Back
                    </a>
                </div>

                <div class="card-body">
                    <form action="{{ url('/admin/invoice-update/' . $invoice->id) }}" method="POST">
                        @csrf
                        @method('POST')

                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <label class="form-label">সিরিয়াল নাম্বার</label>
                                <input type="text" class="form-control" name="serial_number"
                                    value="{{ $invoice->serial_number }}">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label class="form-label">মাস</label>
                                <input type="text" class="form-control" name="month" value="{{ $invoice->month }}">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label class="form-label">অভিযোগের নাম্বার</label>
                                <input type="text" class="form-control" name="complaint_number"
                                    value="{{ $invoice->complaint_number }}">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <label class="form-label">SB নাম্বার</label>
                                <input type="text" class="form-control" name="sb_no" value="{{ $invoice->sb_no }}">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label class="form-label">মোবাইল নম্বর</label>
                                <input type="text" class="form-control" name="contact_number"
                                    value="{{ $invoice->contact_number }}">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label class="form-label">ঠিকানা</label>
                                <input type="text" class="form-control" name="district" value="{{ $invoice->district }}">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <label class="form-label">রেফারেন্স নাম</label>
                                <input type="text" class="form-control" name="rm_name" value="{{ $invoice->rm_name }}">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label class="form-label">কাজের ধরণ</label>
                                <input type="text" class="form-control" name="parts_description"
                                    value="{{ $invoice->parts_description }}">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label class="form-label">টেকনিশিয়ানের নাম</label>
                                <input type="text" class="form-control" name="job_done_by"
                                    value="{{ $invoice->job_done_by }}">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <label class="form-label">মালামাল কেনা বাবদ</label>
                                <input type="text" class="form-control" name="purchase_cost"
                                    value="{{ $invoice->purchase_cost }}">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label class="form-label">সাইট থেকে আসা টাকা</label>
                                <input type="text" class="form-control" name="site_income"
                                    value="{{ $invoice->site_income }}">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label class="form-label">সাইট খরচ</label>
                                <input type="text" class="form-control" name="site_expense"
                                    value="{{ $invoice->site_expense }}">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <label class="form-label">পণ্যের ব্র্যান্ড</label>
                                <input type="text" class="form-control" name="product_brand"
                                    value="{{ $invoice->product_brand }}">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label class="form-label">পণ্যের মডেল</label>
                                <input type="text" class="form-control" name="product_model"
                                    value="{{ $invoice->product_model }}">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label class="form-label">পণ্যের পরিমাণ</label>
                                <input type="number" class="form-control" name="product_quantity"
                                    value="{{ $invoice->product_quantity }}">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <label class="form-label">অভিযোগের ধরন</label>
                                <input type="text" class="form-control" name="complaint_type"
                                    value="{{ $invoice->complaint_type }}">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label class="form-label">পণ্যের ধরণ</label>
                                <input type="text" class="form-control" name="product_category"
                                    value="{{ $invoice->product_category }}">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label class="form-label">টেকনিশিয়ানের ফলাফল</label>
                                <input type="text" class="form-control" name="technician_findings"
                                    value="{{ $invoice->technician_findings }}">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <label class="form-label">ইনভয়েস নাম্বার</label>
                                <input type="text" class="form-control" name="invoice_number"
                                    value="{{ $invoice->invoice_number }}">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label class="form-label">ইনভয়েসের তারিখ</label>
                                <input type="date" class="form-control" name="invoice_date"
                                    value="{{ $invoice->invoice_date }}">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label class="form-label">কাজের অভিযোগের তারিখ</label>
                                <input type="date" class="form-control" name="job_complain_date"
                                    value="{{ $invoice->job_complain_date }}">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <label class="form-label">পণ্যের সিরিয়াল নং ১</label>
                                <input type="text" class="form-control" name="product_slno1"
                                    value="{{ $invoice->product_slno1 }}">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label class="form-label">(SEV)(HEV)(SOV)(HO)</label>
                                <input type="text" class="form-control" name="product_slno2"
                                    value="{{ $invoice->product_slno2 }}">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label class="form-label">SCBCC নাম্বার</label>
                                <input type="text" class="form-control" name="scbcc_no"
                                    value="{{ $invoice->scbcc_no }}">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <label class="form-label">গ্রাহকের নাম</label>
                                <input type="text" class="form-control" name="customer_name"
                                    value="{{ $invoice->customer_name }}">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label class="form-label">রেফারেন্স খরচ</label>
                                <input type="text" class="form-control" name="reference_cost"
                                    value="{{ $invoice->reference_cost }}">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label class="form-label">পণ্য গ্রহণের তারিখ</label>
                                <input type="date" class="form-control" name="product_received_date"
                                    value="{{ $invoice->product_received_date }}">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <label class="form-label">K K K</label>
                                <input type="number" class="form-control" name="kkk" value="{{ $invoice->kkk }}">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label class="form-label">P P P</label>
                                <input type="text" class="form-control" name="ppp" value="{{ $invoice->ppp }}">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label class="form-label">অন্যান্য খরচ</label>
                                <input type="text" class="form-control" name="other_expense"
                                    value="{{ $invoice->other_expense }}">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label class="form-label">কাজের অবস্থা</label>
                                <input type="text" class="form-control" name="work_status"
                                    value="{{ $invoice->work_status }}">
                            </div>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-success mt-3">
                                <i class="fa fa-save"></i> ইনভয়েস আপডেট করুন
                            </button>
                            <a href="{{ url('/admin/invoice-print/' . $invoice->id) }}" class="btn btn-info mt-3">
                                <i class="fa fa-print"></i> প্রিন্ট করুন
                            </a>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

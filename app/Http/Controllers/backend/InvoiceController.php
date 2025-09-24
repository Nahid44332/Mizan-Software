<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Invoice;
use Illuminate\Http\Request;
use Carbon\Carbon;

class InvoiceController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function invoiceBilling()
    {
        $invoicelist = Invoice::all();
        return view('backend.invoice', compact('invoicelist'));
    }

    public function createDashboard()
    {

        $invoicelist = Invoice::all();
        return view('backend.dashboard', compact('invoicelist'));
    }

    public function invoiceCreate()
    {
        return view('backend.invoice-create');
    }

    public function invoiceStore(Request $request)
    {
        $invoice = new Invoice();


        $invoice->serial_number     = 'SN-' . now()->format('YmdHis');
        $invoice->month             = now()->format('F');
        $invoice->invoice_number    = 'INV-' . now()->format('YmdHis');
        $invoice->invoice_date      = now()->format('Y-m-d');
        $invoice->complaint_number      = 'CMP-' . now()->format('YmdHis');
        $invoice->job_complain_date     = now()->format('Y-m-d');


        $invoice->sb_no                 = $request->sb_no;
        $invoice->contact_number        = $request->contact_number;
        $invoice->district              = $request->district;
        $invoice->rm_name               = $request->rm_name;
        $invoice->parts_description     = $request->parts_description;
        $invoice->job_done_by           = $request->job_done_by;
        $invoice->purchase_cost         = $request->purchase_cost;
        $invoice->site_income           = $request->site_income;
        $invoice->site_expense          = $request->site_expense;
        $invoice->product_brand         = $request->product_brand;
        $invoice->product_model         = $request->product_model;
        $invoice->product_quantity      = $request->product_quantity;
        $invoice->complaint_type        = $request->complaint_type;
        $invoice->product_category      = $request->product_category;
        $invoice->technician_findings   = $request->technician_findings;
        $invoice->product_slno1         = $request->product_slno1;
        $invoice->product_slno2         = $request->product_slno2;
        $invoice->scbcc_no              = $request->scbcc_no;
        $invoice->customer_name         = $request->customer_name;
        $invoice->reference_cost        = $request->reference_cost;
        $invoice->product_received_date = $request->product_received_date;
        $invoice->kkk                   = $request->kkk;
        $invoice->ppp                   = $request->ppp;
        $invoice->other_expense         = $request->other_expense;
        $invoice->work_status           = $request->work_status;
        $invoice->option_1              = $request->option_1;
        $invoice->option_2           = $request->option_2;

        $invoice->save();
        toastr()->success('Invoice created successfully!');
        return redirect('/admin/invoice');
    }



    public function invoiceView($id)
    {
        $invoice = Invoice::findOrFail($id);
        return view('backend.invoice-view', compact('invoice'));
    }


    public function invoiceEdit($id)
    {
        $invoice = Invoice::findOrFail($id);
        return view('backend.invoice-edit', compact('invoice'));
    }


    public function invoiceUpdate(Request $request, $id)
    {
        $invoice = Invoice::findOrFail($id);


        $invoice->sb_no                 = $request->sb_no;
        $invoice->contact_number        = $request->contact_number;
        $invoice->district              = $request->district;
        $invoice->rm_name               = $request->rm_name;
        $invoice->parts_description     = $request->parts_description;
        $invoice->job_done_by           = $request->job_done_by;
        $invoice->purchase_cost         = $request->purchase_cost;
        $invoice->site_income           = $request->site_income;
        $invoice->site_expense          = $request->site_expense;
        $invoice->product_brand         = $request->product_brand;
        $invoice->product_model         = $request->product_model;
        $invoice->product_quantity      = $request->product_quantity;
        $invoice->complaint_type        = $request->complaint_type;
        $invoice->product_category      = $request->product_category;
        $invoice->technician_findings   = $request->technician_findings;
        $invoice->product_slno1         = $request->product_slno1;
        $invoice->product_slno2         = $request->product_slno2;
        $invoice->scbcc_no              = $request->scbcc_no;
        $invoice->customer_name         = $request->customer_name;
        $invoice->reference_cost        = $request->reference_cost;
        $invoice->product_received_date = $request->product_received_date;
        $invoice->kkk                   = $request->kkk;
        $invoice->ppp                   = $request->ppp;
        $invoice->other_expense         = $request->other_expense;
        $invoice->work_status           = $request->work_status;
        $invoice->option_1              = $request->option_1;
        $invoice->option_2           = $request->option_2;

        $invoice->save();

        return redirect('/admin/invoice')->with('success', 'Invoice updated successfully!');
    }


    public function invoiceDelete($id)
    {
        $invoice = Invoice::findOrFail($id);
        $invoice->delete();

        return redirect('/admin/invoice')->with('success', 'Invoice deleted successfully!');
    }
    public function invoicePrint($id)
    {
        $invoice = Invoice::findOrFail($id);
        return view('backend.invoice-print', compact('invoice'));
    }
}

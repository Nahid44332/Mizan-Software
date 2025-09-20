<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
 {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->string('serial_number');
            $table->string('month');
            $table->string('complaint_number')->nullable();
            $table->string('sb_no')->nullable();
            $table->string('contact_number');
            $table->string('district');
            $table->string('rm_name')->nullable();
            $table->string('parts_description')->nullable();
            $table->string('job_done_by')->nullable();
            $table->string('purchase_cost')->nullable();
            $table->string('site_income')->nullable();
            $table->string('site_expense')->nullable();
            $table->string('product_brand');
            $table->string('product_model');
            $table->integer('product_quantity');
            $table->string('complaint_type')->nullable();
            $table->string('product_category');
            $table->string('technician_findings')->nullable();
            $table->string('invoice_number')->unique();
            $table->date('invoice_date');
            $table->date('job_complain_date')->nullable();
            $table->string('product_slno1')->nullable();
            $table->string('product_slno2')->nullable();
            $table->string('scbcc_no')->nullable();
            $table->string('customer_name');
            $table->string('reference_cost')->nullable();
            $table->date('product_received_date');
            $table->integer('kkk')->nullable();
            $table->string('ppp')->nullable();
            $table->string('other_expense')->nullable();
            $table->string('work_status')->nullable();
            $table->string('option_1')->nullable();
            $table->string('option_2')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};

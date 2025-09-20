<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Invoice Print</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 14px;
        }

        .invoice-box {
            width: 95%;
            margin: auto;
            border: 1px solid #000;
            padding: 10px;
        }

        .header {
            text-align: center;
            padding-bottom: 10px;
            border-bottom: 1px solid #000;
        }

        .header h2 {
            margin: 0;
            font-size: 22px;
        }

        .box {
            border: 1px solid #000;
            margin-top: 10px;
            padding: 5px;
        }

        .box table {
            width: 100%;
            border-collapse: collapse;
        }

        .box td,
        .box th {
            border: 1px solid #000;
            padding: 6px;
            vertical-align: top;
            text-align: left;
        }

        .box th {
            width: 30%;
            background: #f9f9f9;
        }

        .box td {
            width: 70%;
        }

        .section-title {
            text-align: center;
            font-weight: bold;
            text-decoration: underline;
            margin-bottom: 5px;
        }

        .product-table th {
            background: #f2f2f2;
            text-align: center;
        }

        .product-table td {
            text-align: center;
        }
    </style>
</head>

<body onload="window.print()">

    <div class="invoice-box">

        <!-- Header -->
        <div class="header">
            <h2>Esquire Customer Care Ltd</h2>
            <p>260/A, Tejgaon I/A Nabisco, Tejgaon, Dhaka-1208 <br>
                Tel: 09610001010, Email: info_ccd@esquirebd.com</p>
            <h3>Service Card on Customer Complain</h3>
        </div>

        <!-- Job & Invoice Info -->
        <div class="box">
            <table>
                <tr>
                    <td>Job No: {{ $invoice->job_no }}</td>
                    <td>Invoice No: {{ $invoice->invoice_number }}</td>
                </tr>
                <tr>
                    <td>Complain No: {{ $invoice->complain_no }}</td>
                    <td>Invoice Date: {{ $invoice->invoice_date }}</td>
                </tr>
                <tr>
                    <td>Complain Date: {{ $invoice->complain_date }}</td>
                    <td>SB No: {{ $invoice->sb_no }}</td>
                </tr>
                <tr>
                    <td>Complain Assign Date: {{ $invoice->assign_date }}</td>
                    <td>SB Date: {{ $invoice->sb_date }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>SB Amount: {{ $invoice->sb_amount }}</td>
                </tr>
            </table>
        </div>

        <!-- Customer Info -->
        <div class="box">
            <div class="section-title">Customer Information</div>
            <table>
                <tr>
                    <th>Customer Name</th>
                    <td>{{ $invoice->customer_name }}</td>
                </tr>
                <tr>
                    <th>Customer Address</th>
                    <td>{{ $invoice->customer_address }}</td>
                </tr>
                <tr>
                    <th>Phone No</th>
                    <td>{{ $invoice->contact_number }}</td>
                </tr>
                <tr>
                    <th>Contact Person Name</th>
                    <td>{{ $invoice->contact_person }}</td>
                </tr>
            </table>
        </div>

        <!-- Problem & Product Info -->
        <div class="box">
            <div class="section-title">Problem & Product Related Information</div>
            <table>
                <tr>
                    <th>Product Serial Matches with the Serial of on CM:</th>
                    <td>Yes □ No □</td>
                </tr>
                <tr>
                    <th>Service to Give within warranty period:</th>
                    <td>Yes □ No □</td>
                </tr>
                <tr>
                    <th>Nature of Complain</th>
                    <td style="color:red; font-weight:bold;">{{ $invoice->complain_nature }}</td>
                </tr>
                <tr>
                    <th>Complain Received By</th>
                    <td>{{ $invoice->received_by }}</td>
                </tr>
                <tr>
                    <th>Executed By</th>
                    <td>{{ $invoice->executed_by }}</td>
                </tr>
                <tr>
                    <th>Reference Name</th>
                    <td>{{ $invoice->reference_name }}</td>
                </tr>
            </table>
        </div>

        <!-- Product Info -->
        <div class="box">
            <table class="product-table">
                <thead>
                    <tr>
                        <th>Product Name</th>
                        <th>Model No</th>
                        <th>Quantity</th>
                        <th>Sl No</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $invoice->product_name }}</td>
                        <td>{{ $invoice->model_no }}</td>
                        <td>{{ $invoice->quantity }}</td>
                        <td>{{ $invoice->serial_no }}</td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
</body>

</html>

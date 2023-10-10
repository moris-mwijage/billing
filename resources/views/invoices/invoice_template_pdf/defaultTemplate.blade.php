<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "//www.w3.org/TR/html4/strict.dtd">
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <link rel="icon" href="{{ asset('web/media/logos/favicon.ico') }}" type="image/png">
    <title>{{ __('messages.invoice.invoice_pdf') }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Fonts -->
    <!-- General CSS Files -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/invoice-pdf.css') }}" rel="stylesheet" type="text/css" />
    <style>
        * {
            font-family: DejaVu Sans, Arial, "Helvetica", Arial, "Liberation Sans", sans-serif;
        }

        /* Define 58mm page size (58mm width) */
        @page {
            size: 58mm;
            margin: 0; /* No margins for receipt paper */
        }

        /* Custom CSS for receipt content */
        .receipt-content {
            padding: 5px;
            text-align: center;
        }

        /* Adjust font size for receipt content */
        .receipt-content p {
            font-size: 12px;
        }

        /* Adjust spacing for receipt content */
        .receipt-content p {
            margin: 2px 0;
            word-wrap: break-word; /* Allow text to wrap within the width */
        }
    </style>
</head>

<body>
    <div class="receipt-content">
        <p>{{ __('messages.common.invoice') }}</p>
        <p>{{ __('messages.invoice.invoice_id') . ': #12345' }}</p>
        <p>{{ __('messages.invoice.invoice_date') . ': 2023-10-05' }}</p>
        <p>{{ __('messages.common.from') . ': Company Name' }}</p>
        <p>{{ __('messages.common.to') . ': Customer Name' }}</p>
        <p>{{ __('Previous Meter Count') . ': 1000' }}</p>
        <p>{{ __('Current Meter Count') . ': 1200' }}</p>
        <p>{{ __('messages.product.unit_price') . ': $10.00' }}</p>
        <p>{{ __('messages.invoice.amount') . ': $120.00' }}</p>
    </div>
</body>

</html>

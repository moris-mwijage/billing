<!DOCTYPE html>
    <html>
        <head>
            <title>Receipt</title>
            <style>
                body {
                    font-family: Arial, sans-serif;
                    margin: 0;
                    padding: 0;
                }
                .receipt {
                    width: 58mm;
                    margin: 0 auto;
                    padding: 10px;
                    border: 1px solid #000;
                }
                .receipt h1, .receipt p {
                    margin: 0;
                    padding: 0;
                }
                .receipt-title {
                    font-size: 14px;
                    text-align: center;
                }
                .receipt-subtitle {
                    font-size: 10px;
                    text-align: center;
                }
                .receipt-logo {
                    display: block;
                    margin: 10px auto;
                    width: 40px;
                    height: 40px;
                }
                .receipt-label {
                    font-size: 10px;
                }
                .receipt-text {
                    font-size: 12px;
                }
                .receipt-hr {
                    border: 0.5px solid #000;
                }
                .receipt-summary {
                    font-size: 12px;
                    text-align: right;
                }
            </style>
        </head>
        <body>
            <div class="receipt">
                <h1 class="receipt-title">Invoice</h1>
                <p class="receipt-subtitle">Invoice #9CQ5X7</p>
                <img src="logo.png" class="receipt-logo" alt="Logo">
                <div>
                    <small class="receipt-label">From:</small>
                    <p class="receipt-text">Company Name</p>
                    <p class="receipt-text">Company Address</p>
                    <p class="receipt-text">Phone: Company Phone</p>
                </div>
                <div>
                    <small class="receipt-label">To:</small>
                    <p class="receipt-text">Client Name</p>
                    <p class="receipt-text">Client Email</p>
                    <p class="receipt-text">Client Address</p>
                    <p class="receipt-text"><b>Invoice Date:</b> 25th Nov, 2020 8:03 AM</p>
                    <p class="receipt-text"><b>Due Date:</b> 26th Nov, 2020</p>
                </div>
                <hr class="receipt-hr">
                <small class="receipt-label"><b>Item</b></small><br>
                <p class="receipt-text">1. Item 1 - $100.00</p>
                <p class="receipt-text">2. Item 2 - $100.00</p>
                <p class="receipt-text">3. Item 3 - $100.00</p>
                <hr class="receipt-hr">
                <div class="receipt-summary">
                    <div><b>Amount:</b> $300.00</div>
                    <div><b>Discount:</b> $50.00</div>
                    <div><b>Tax:</b> 0%</div>
                    <div><b>Total:</b> $250.00</div>
                </div>
            </div>
        </body>
    </html>

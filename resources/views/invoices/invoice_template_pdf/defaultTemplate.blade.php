<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Receipt</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .receipt {
            width: 58mm; /* Set the paper width */
            margin: 0 auto;
            border: 1px solid #000;
            padding: 10px;
            box-sizing: border-box;
        }
        .header {
            text-align: center;
            font-weight: bold;
        }
        .item {
            margin-bottom: 5px;
        }
        .footer {
            text-align: center;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="receipt">
        <div class="header">
            <h2>Your Store Name</h2>
            <p>123 Main Street</p>
            <p>City, Country</p>
            <p>Phone: (123) 456-7890</p>
        </div>
        <div class="item">
            <span>Receipt ID: 001</span><br>
            <span>Date: 2023-10-05</span>
        </div>
        <div class="item">
            <span>Item</span>
            <span>Price</span>
        </div>
        <div class="item">
            <span>Product 1</span>
            <span>$10.00</span>
        </div>
        <div class="item">
            <span>Product 2</span>
            <span>$15.00</span>
        </div>
        <div class="item">
            <span>Total</span>
            <span>$25.00</span>
        </div>
        <div class="footer">
            <p>Thank you for shopping with us!</p>
        </div>
    </div>
</body>
</html>

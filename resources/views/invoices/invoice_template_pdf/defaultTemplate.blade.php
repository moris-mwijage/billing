<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>EFD Receipt</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 58mm;
            margin: 0 auto;
            padding: 10px;
        }
        .header {
            text-align: center;
            font-weight: bold;
        }
        .receipt {
            border-top: 1px solid #000;
            border-bottom: 1px solid #000;
            padding: 5px 0;
        }
        .item {
            margin-bottom: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Your Store Name</h2>
            <p>123 Main Street</p>
            <p>City, Country</p>
            <p>Phone: (123) 456-7890</p>
        </div>
        <div class="receipt">
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
        </div>
        <div class="footer">
            <p>Thank you for shopping with us!</p>
        </div>
    </div>
</body>
</html>

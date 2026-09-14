```php
<?php
// Get data from the booking form

$name = $_POST['name'] ?? 'N/A';
$email = $_POST['email'] ?? 'N/A';
$phone = $_POST['phone'] ?? 'N/A';
$seats = $_POST['seats'] ?? 'N/A';
$payment_method = $_POST['payment-method'] ?? 'N/A';
$amount = $_POST['amount'] ?? '0';

// Security: prevent HTML injection
$name = htmlspecialchars($name);
$email = htmlspecialchars($email);
$phone = htmlspecialchars($phone);
$seats = htmlspecialchars($seats);
$payment_method = htmlspecialchars($payment_method);
$amount = htmlspecialchars($amount);
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Invoice - Hanuman Travels</title>

    <style>

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;

            background-image: url('new.jpg');
            background-size: cover;
            background-position: center center;
            background-attachment: fixed;

            color: #f7f2f2;
        }

        .invoice-container {

            max-width: 800px;

            margin: 50px auto;

            padding: 30px;

            background-color: rgba(5, 5, 5, 0.85);

            box-shadow: 0 0 15px rgba(0, 0, 0, 0.4);

            border-radius: 10px;
        }

        .invoice-header {

            text-align: center;

            margin-bottom: 30px;
        }

        .invoice-header h2 {

            color: #14f56a;

            font-size: 28px;
        }

        .invoice-details {

            margin-bottom: 20px;
        }

        table {

            width: 100%;

            border-collapse: collapse;
        }

        .invoice-details td {

            padding: 12px;

            border-bottom: 1px solid #555;

            text-align: left;
        }

        .invoice-details td:first-child {

            width: 40%;

            color: #14f56a;
        }

        .invoice-footer {

            text-align: right;

            margin-top: 30px;
        }

        .invoice-footer p {

            color: #faf9fd;

            font-size: 18px;
        }

        .amount {

            color: #14f56a;

            font-size: 24px;

            font-weight: bold;
        }

        .thank-you {

            text-align: center;

            margin-top: 30px;

            color: #14f56a;

            font-size: 18px;
        }

        .print-btn {

            display: block;

            margin: 30px auto 0;

            padding: 12px 25px;

            background: #14f56a;

            color: black;

            border: none;

            border-radius: 5px;

            cursor: pointer;

            font-size: 16px;
        }

        .print-btn:hover {

            background: #0dcc55;
        }

        @media print {

            .print-btn {

                display: none;
            }

            body {

                background: white;

                color: black;
            }

            .invoice-container {

                background: white;

                color: black;

                box-shadow: none;
            }
        }

    </style>

</head>

<body>

<div class="invoice-container">

    <div class="invoice-header">

        <h2>Invoice - Hanuman Travels</h2>

    </div>


    <div class="invoice-details">

        <table>

            <tr>
                <td><strong>Name:</strong></td>
                <td><?php echo $name; ?></td>
            </tr>

            <tr>
                <td><strong>Email:</strong></td>
                <td><?php echo $email; ?></td>
            </tr>

            <tr>
                <td><strong>Phone:</strong></td>
                <td><?php echo $phone; ?></td>
            </tr>

            <tr>
                <td><strong>Seats Selected:</strong></td>
                <td><?php echo $seats; ?></td>
            </tr>

            <tr>
                <td><strong>Payment Method:</strong></td>
                <td><?php echo $payment_method; ?></td>
            </tr>

        </table>

    </div>


    <div class="invoice-footer">

        <p>
            <strong>Total Cost:</strong>
            <span class="amount">
                ₹<?php echo $amount; ?>
            </span>
        </p>

    </div>


    <div class="thank-you">

        Thank you for booking with Hanuman Travels!

    </div>


    <button class="print-btn" onclick="window.print()">
        Print Invoice
    </button>

</div>

</body>

</html>
```

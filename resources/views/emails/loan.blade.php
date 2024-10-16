<!DOCTYPE html>
<html>

<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            color: #333;
            background-color: #F9780C;
            padding: 20px;
        }

        .email-container {
            background-color: #ffffff;
            border-radius: 8px;
            padding: 20px;
            max-width: 600px;
            margin: 0 auto;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #F9780C;
            text-align: center;
        }

        p {
            font-size: 16px;
            line-height: 1.5;
        }

        hr {
            border: 0;
            border-top: 1px solid #ddd;
            margin: 20px 0;
        }

        .footer {
            text-align: left;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <div class="email-container">
        <h2>Loan Request Notification</h2>
        <p>Dear All,</p>

        <p>We have received a loan request from the customer listed below. Kindly reach out to them to assist with their request.</p>

        <p><strong>Customer Details:</strong></p>
        <p><strong>First Name:</strong> {{ $data['first_name'] }}</p>
        <p><strong>Last Name:</strong> {{ $data['last_name'] }}</p>
        <p><strong>Phone:</strong> {{ $data['phone'] }}</p>
        <p><strong>Email:</strong> {{ $data['email'] }}</p>
        <p><strong>Purpose of Loan:</strong> {{ $data['purpose'] }}</p>
        <p><strong>Loan Duration:</strong> {{ $data['duration'] }}</p>
        <p><strong>Amount Requested:</strong> {{ $data['amount'] }}</p>
        <p><strong>Address:</strong> {{ $data['address'] }}</p>
        <p><strong>City:</strong> {{ $data['city'] }}</p>
        <p><strong>State:</strong> {{ $data['state'] }}</p>
        <p><strong>Country:</strong> {{ $data['country'] }}</p>

        <p>Thank you for your prompt attention to this request. If you have any questions, feel free to contact our support team at <a href="mailto:support@assetmatrix.com">support@assetmatrix.com</a>.</p>

        <p class="footer"><strong>Best regards,</strong><br>Asset Matrix Team</p>
    </div>

</body>

</html>

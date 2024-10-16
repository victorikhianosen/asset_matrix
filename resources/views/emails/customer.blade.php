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
        <h2>Loan Request Update</h2>
        <p>Dear {{ $data['first_name'] }},</p>

        <p>Thank you for submitting your loan request to Asset Matrix. We are pleased to inform you that your request is currently being processed.</p>

        <p>An Asset Matrix representative will contact you shortly with further details and to assist you through the next steps.</p>

        <p>We appreciate your patience during this process. If you have any questions or need further assistance, feel free to contact us at <a href="mailto:hello@assetmatrix.com">hello@assetmatrix.com</a>.</p>

        <p>Thank you for choosing Asset Matrix!</p>

        <p class="footer"><strong>Best regards,</strong><br>Asset Matrix Team</p>
    </div>

</body>

</html>

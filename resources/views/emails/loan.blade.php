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

        <p>We have received a loan request from the customer listed below. Kindly reach out to them to assist with their
            request.</p>

        <p><strong>Customer Name:</strong> {{ $loanData['name'] }}</p>
        <p><strong>Email:</strong> {{ $loanData['email'] }}</p>
        <p><strong>Phone:</strong> {{ $loanData['phone'] }}</p>
        <p><strong>BVN:</strong> {{ $loanData['bvn'] }}</p>
        <p><strong>Duration:</strong> {{ $loanData['duration'] }} {{ $loanData['duration'] <= 1 ? 'month' : 'months' }}
        </p>
        <p><strong>Interest Rate:</strong> {{ $loanData['interestRate'] }}%</p>
        <p><strong>Monthly Pay:</strong> &#8358;{{ $loanData['monthlyPay'] }}</p>
        <p><strong>Principal:</strong> &#8358;{{ number_format($loanData['principal'], 0, '.', ',') }}</p>
        <p><strong>Total Interest:</strong> &#8358;{{ $loanData['totalInterest'] }}</p>
        <p><strong>Total Repayment:</strong> &#8358;{{ $loanData['totalRepayment'] }}</p>
        <br>
        <p class="footer"><strong>Best regards,</strong><br>Asset Matrix MFB</p>
    </div>


</body>

</html>

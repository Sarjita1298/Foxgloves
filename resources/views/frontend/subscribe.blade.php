<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>FoxGloves India - Subscription Confirmation</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f9f9f9;
            color: #333;
            padding: 20px;
            margin: 0;
        }
        .email-container {
            max-width: 600px;
            background-color: #ffffff;
            padding: 30px;
            margin: auto;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.05);
        }
        h1 {
            color: #00695c;
        }
        p {
            font-size: 16px;
            line-height: 1.6;
        }
        .footer {
            margin-top: 30px;
            font-size: 14px;
            color: #777;
            text-align: center;
        }
        .highlight {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <h1>Hello!</h1>
        <p>Thank you for subscribing with <span class="highlight">{{ $email }}</span>.</p>
        <p>We're excited to have you with us! You’ll now receive our latest updates, news, and exclusive offers directly in your inbox.</p>
        <p>If you have any questions, feel free to reach out to us.</p>
        <p>Regards,<br><strong>Foxgloves India Team</strong></p>
        <div class="footer">
            This message was sent from the subscription form on <strong>Foxgloves India</strong>.
        </div>
    </div>
</body>
</html>

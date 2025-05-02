<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>FoxGloves India - Contact Us Confirmation</title>
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
        <h1>Thank You for Reaching Out!</h1>
        <p>Hi <span class="highlight">{{ $contact->name }}</span>,</p>
        <p>Thank you for contacting us. We have received your message and our team will get back to you as soon as possible. We aim to respond within 24 hours.</p>
        <p>If your inquiry is urgent, please feel free to call us at <span class="highlight">{{9424023942 }}</span>.</p>
        <p>We appreciate your interest and look forward to assisting you.</p>
        <p>Best Regards,<br><strong>Foxgloves India Team</strong></p>
        <div class="footer">
            This message was sent from the contact form on <strong>Foxgloves India</strong>.
        </div>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Password Reset</title>
    <style>
        body {
            background: #f5f8fa;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
            padding: 40px;
        }
        .container {
            background: white;
            max-width: 600px;
            margin: auto;
            border-radius: 8px;
            padding: 40px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
        }
        .title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
            text-align: center;
            color: #111827;
        }
        .text {
            color: #374151;
            font-size: 15px;
            margin-bottom: 24px;
            line-height: 1.5;
            text-align: center;
        }
        .btn-wrapper {
            text-align: center;
        }
        .btn {
            display: inline-block;
            background-color: #6366F1;
            color: white;
            padding: 12px 24px;
            border-radius: 6px;
            font-weight: 600;
            text-decoration: none;
            margin-top: 10px;
        }
        .footer {
            margin-top: 30px;
            font-size: 12px;
            color: #6b7280;
            text-align: center;
        }
    </style>
</head>
<body>
       <table width="100%" cellpadding="0" cellspacing="0">
        <tr>
            <td>
                <table class="container" width="600" cellpadding="0" cellspacing="0">
                    <tr>
                        <td class="title">Reset Your Password</td>
                    </tr>
                    <tr>
                        <td class="text"><br><br>
                            Hi {{ $name }},<br><br>
                            We received a request to reset your password. <br>
                        </td>
                    </tr>
                    <tr>
                        <td class="btn-wrapper">
                            <a href="{{ $resetUrl }}" class="btn">Reset Password</a>
                        </td>
                    </tr>
                        <td class="text"><br>
                            Thank you for choosing QuickWebsites.<br>
                            <img src="https://images.pexels.com/photos/13268478/pexels-photo-13268478.jpeg?_gl=1*4o9pdt*_ga*NDc0MDEyOTIzLjE3NjQ4Nzc4Njc.*_ga_8JE65Q40S6*czE3NjQ4Nzc4NjckbzEkZzEkdDE3NjQ4Nzc5MTEkajE2JGwwJGgw" width="75">

                        </td>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
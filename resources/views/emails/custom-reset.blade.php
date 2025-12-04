<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Password Reset NEW</title>
    <style>
        /* Mobile-friendly styles */
        @media only screen and (max-width: 600px) {
            .container { width: 100% !important; padding: 20px !important; }
            .btn { width: 100% !important; text-align: center !important; }
        }

        body {
            margin: 0;
            padding: 0;
            background-color: #f5f8fa;
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 600px;
            margin: auto;
            background-color: #ffffff;
            border-radius: 8px;
            padding: 40px;
        }

        .title {
            font-size: 24px;
            font-weight: bold;
            text-align: center;
            margin-bottom: 20px;
            color: #111827;
        }

        .text {
            font-size: 15px;
            line-height: 1.5;
            color: #374151;
            margin-bottom: 24px;
        }

        .btn {
            display: inline-block;
            background-color: #6366F1;
            color: #ffffff !important;
            padding: 12px 24px;
            border-radius: 6px;
            font-weight: bold;
            text-decoration: none;
        }

        .footer {
            font-size: 12px;
            color: #6b7280;
            text-align: center;
            margin-top: 30px;
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
                        <td class="text">
                            Hi {{ $name }},<br><br>
                            You recently requested to reset your password. Click the button below to continue.
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="{{ $resetUrl }}" class="btn">Reset Password</a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text">
                            If you did not request a password reset, you can safely ignore this email.
                        </td>
                    </tr>
                    <tr>
                        <td class="footer">
                            &copy; {{ date('Y') }} {{ config('app.name') }} — All rights reserved.
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html> -->


<!-- # Hi {{ $name }},

This is the custom page! You recently requested to reset your password. Click the button below to continue:

@component('mail::button', ['url' => $resetUrl])
Reset Password
@endcomponent

If you did not request a password reset, you can safely ignore this email.

Thanks,<br>
{{ config('app.name') }} -->



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
    <div class="container">
        <div class="title">Reset Your Password</div>

        <p class="text">
            Hi {{ $name }},  
            <br><br>
            You recently requested to reset your password. Click the button below to continue.
        </p>

        <p style="text-align:center;">
            <a href="{{ $resetUrl }}" class="btn">Reset Password</a>
        </p>

        <p class="text">
            If you did not request a password reset, you can safely ignore this email.
        </p>

        <div class="footer">
            &copy; {{ date('Y') }} Your App — All Rights Reserved.
        </div>
    </div>
    Here is the new table:
       <table width="100%" cellpadding="0" cellspacing="0">
        <tr>
            <td>
                <table class="container" width="600" cellpadding="0" cellspacing="0">
                    <tr>
                        <td class="title">Reset Your Password</td>
                    </tr>
                    <tr>
                        <td class="text">
                            Hi {{ $name }},<br><br>
                            You recently requested to reset your password. Click the button below to continue.
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="{{ $resetUrl }}" class="btn">Reset Password</a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text">
                            If you did not request a password reset, you can safely ignore this email.
                        </td>
                    </tr>
                    <tr>
                        <td class="footer">
                            &copy; {{ date('Y') }} {{ config('app.name') }} — All rights reserved.
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
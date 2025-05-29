<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Confirmation</title>
    <style type="text/css">
        /* Inline styles for email clients */
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            margin: 0;
            padding: 0;
            background-color: #f7f7f7;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
        }
        .text-center {
            text-align: center;
        }
        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #28a745;
            color: #ffffff;
            text-decoration: none;
            border-radius: 4px;
            margin-top: 15px;
        }
        .btn-outline-success {
            background-color: transparent;
            border: 1px solid #28a745;
            color: #28a745;
        }
        .btn-outline-success:hover {
            background-color: #28a745;
            color: #111010;
        }
    </style>
</head>
<body>
    <!-- Use tables for layout (best email compatibility) -->
    <table width="100%" cellspacing="0" cellpadding="0" border="0">
        <tr>
            <td align="center">
                <table class="container" width="600" cellspacing="0" cellpadding="20" border="0" style="background-color: #ffffff;">
                    <tr>
                        <td class="text-center" style="padding: 30px 0;">
                            <h1 style="color: #333; margin-bottom: 20px;">Hello {{ $creator_name }}</h1>
                            <p style="margin-bottom: 25px;">
                                To Access Our Site, We've Sent You An Email Verification.
                                <br>
                                Please Check Your Email Notifications and click on the link to verify your account.
                            </p>
                            <div>
                                <a href="{{ $link }}" class="btn btn-outline-success" style="display: inline-block; padding: 10px 20px; border: 1px solid #28a745; color: #28a745; text-decoration: none; border-radius: 4px;">Confirm Your Account</a>
                            </div>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
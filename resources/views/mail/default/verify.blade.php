<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>邮箱验证码</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f9fafd;
            margin: 0;
            padding: 0;
            -webkit-text-size-adjust: none;
            -ms-text-size-adjust: none;
        }
        table {
            border-spacing: 0;
            width: 100%;
        }
        table td {
            padding: 0;
        }
        img {
            border: 0;
            line-height: 100%;
            vertical-align: middle;
        }
        .email-container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            border-radius: 4px;
            padding: 48px;
            border-top: 20px solid #377dff;
        }
        .header {
            margin-bottom: 30px;
            text-align: left;
        }
        .header span {
            font-size: 32px;
            font-weight: bold;
            color: #377dff;
            font-family: 'Arial', sans-serif;
        }
        .content {
            font-size: 14px;
            line-height: 24px;
            color: #000000;
            text-align: left;
        }
        .content p {
            margin: 0 0 16px;
        }
        .content p.important {
            font-weight: 600;
            font-size: 20px;
        }
        .content p .highlight {
            font-weight: 600;
            color: #4687ff;
        }
        .divider {
            background-color: #3b4253;
            height: 1px;
            margin: 32px 0;
        }
        .footer {
            font-size: 14px;
            color: #888888;
            text-align: left;
        }
        .footer p {
            margin: 0 0 16px;
        }
        /* Media Queries for responsive optimization */
        @media only screen and (max-width: 600px) {
            .email-container {
                padding: 20px;
                width: 100% !important;
            }
            .header span {
                font-size: 24px;
            }
            .content p.important {
                font-size: 18px;
            }
            .content {
                font-size: 16px;
            }
            .divider {
                margin: 24px 0;
            }
        }
    </style>
</head>
<body>
    <table cellpadding="0" cellspacing="0" border="0" width="100%">
        <tr>
            <td align="center" style="background-color:#f9fafd;">
                <div class="email-container" style="width:100%; max-width:600px;">
                    <!-- Header with logo text -->
                    <div class="header">
                        <span>BigME.Pro</span>
                    </div>

                    <!-- Content -->
                    <div class="content">
                        <p class="important">邮箱验证码</p>
                        <p>尊敬的 <span class="highlight">BigME</span> 用户：</p>
                        <p>您的邮箱验证码为：<span class="highlight">{{$code}}</span></p>
                        <p>请在网页中填写, 完成验证。</p>
                        <p><span class="highlight">注意:</span> 请在 5 分钟内进行验证。</p>
                        <p style="color: #888888;">此为系统邮件，请勿回复。请妥善保管您的邮箱，避免账号被他人盗用。</p>
                        <p style="color: #F11D64;">
                            最新网址：<a href="http://pub.bigmeok.me" target="_blank" style="color: #F11D64;">pub.bigmeok.me</a>
                            <br>
                            自动跳转：<a href="http://1s.bigmeok.me" target="_blank" style="color: #F11D64;">1s.bigmeok.me</a>
                            <br>
                        </p>
                    </div>

                    <!-- Divider -->
                    <div class="divider"></div>

                    <!-- Footer -->
                    <div class="footer">
                        <p>如遇到其它争议事项, 请及时通过工单或在线客服联系我们，我们必将尽全力为您解决。</p>
                        <p>© 2023 BigME. All Rights Reserved.<br></p>
                    </div>
                </div>
            </td>
        </tr>
    </table>
</body>
</html>
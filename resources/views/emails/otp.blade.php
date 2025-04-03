<!DOCTYPE html>
<html>
<head>
    <title>Your OTP Code</title>
</head>
<body style="font-family: Arial, sans-serif; line-height: 1.6; color: #333; background-color: #f8f9fa;">
    <div style="max-width: 600px; margin: 0 auto; padding: 20px;">
        <div style="background-color: #38438c; padding: 20px; border-radius: 10px 10px 0 0;">
            <h2 style="color: #ffffff; margin: 0;">Hello {{ $name }},</h2>
        </div>
        
        <div style="background-color: #ffffff; padding: 20px; border-radius: 0 0 10px 10px; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">
            <p style="color: #38438c; font-size: 18px; margin-top: 0;">Your OTP code is:</p>
            
            <div style="background-color: #f7fafc; padding: 20px; border-radius: 5px; text-align: center; margin: 20px 0; border: 2px dashed #38738c;">
                <h1 style="color: #38738c; font-size: 36px; letter-spacing: 8px; margin: 0; font-weight: bold;">{{ $otp }}</h1>
            </div>
            
            <p style="color: #38438c;">
                This OTP will expire in 
                @if($role_id == 1)
                    24 hours
                @elseif($role_id == 2)
                    7 days
                @endif.
            </p>
            
            <p style="color: #38438c;">If you didn't request this OTP, please ignore this email.</p>
            
            <hr style="border: none; border-top: 1px solid #e2e8f0; margin: 20px 0;">
            
            <p style="color: #38738c; font-size: 14px; text-align: center; margin-bottom: 0;">
                This is an automated message, please do not reply to this email.
            </p>
        </div>
    </div>
</body>
</html> 
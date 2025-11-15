<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nowe zapytanie z formularza kontaktowego</title>
</head>
<body style="font-family: Arial, sans-serif; line-height: 1.6; color: #333; max-width: 600px; margin: 0 auto; padding: 20px;">
    <div style="background-color: #4f46e5; color: white; padding: 20px; border-radius: 8px 8px 0 0;">
        <h1 style="margin: 0; font-size: 24px;">Nowe zapytanie z formularza kontaktowego</h1>
    </div>
    
    <div style="background-color: #f9fafb; padding: 30px; border: 1px solid #e5e7eb; border-top: none; border-radius: 0 0 8px 8px;">
        <h2 style="color: #1f2937; margin-top: 0;">Szczegóły zapytania:</h2>
        
        <table style="width: 100%; border-collapse: collapse; margin-bottom: 20px;">
            <tr>
                <td style="padding: 10px 0; font-weight: bold; color: #4b5563; width: 150px;">Imię:</td>
                <td style="padding: 10px 0; color: #1f2937;">{{ $firstName }}</td>
            </tr>
            <tr>
                <td style="padding: 10px 0; font-weight: bold; color: #4b5563;">Nazwisko:</td>
                <td style="padding: 10px 0; color: #1f2937;">{{ $lastName }}</td>
            </tr>
            <tr>
                <td style="padding: 10px 0; font-weight: bold; color: #4b5563;">Email:</td>
                <td style="padding: 10px 0; color: #1f2937;">
                    <a href="mailto:{{ $email }}" style="color: #4f46e5; text-decoration: none;">{{ $email }}</a>
                </td>
            </tr>
        </table>
        
        <div style="background-color: white; padding: 20px; border-radius: 6px; border-left: 4px solid #4f46e5; margin-top: 20px;">
            <h3 style="color: #1f2937; margin-top: 0; margin-bottom: 10px;">Wiadomość:</h3>
            <p style="color: #374151; white-space: pre-wrap; margin: 0;">{{ $contactMessage }}</p>
        </div>
        
        <div style="margin-top: 30px; padding-top: 20px; border-top: 1px solid #e5e7eb; text-align: center; color: #6b7280; font-size: 14px;">
            <p style="margin: 0;">To zapytanie zostało wysłane z formularza kontaktowego na stronie Aisello.</p>
            <p style="margin: 5px 0 0 0;">Data: {{ now()->format('d.m.Y H:i') }}</p>
        </div>
    </div>
</body>
</html>


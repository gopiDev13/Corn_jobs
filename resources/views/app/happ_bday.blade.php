<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Happy Birthday!</title>
</head>
<body style="font-family: 'Arial', sans-serif; background-color: #f4f4f4; color: #333;">

    <div style="max-width: 600px; margin: 0 auto; padding: 20px; background-color: #fff; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
        <h1 style="color: #3490dc;">Happy Birthday, {{$name}}!</h1>

        <p>
            Wishing you a fantastic birthday filled with joy, laughter, and all the things you love. May this year bring you great success and happiness.
        </p>

        <p>
            Thank you for being a valued member of our community. We appreciate your presence and wish you the very best on your special day.
        </p>

        <p>
            Enjoy your celebrations and have a wonderful year ahead!
        </p>

        <div style="text-align: center; margin-top: 20px;">
            <img src="{{ asset('path/to/birthday_image.jpg') }}" alt="Birthday Image" style="max-width: 100%; border-radius: 8px;">
        </div>

        <p style="text-align: center; margin-top: 20px; font-size: 0.8em; color: #888;">
            This email was sent to you because it's your birthday! If you wish to unsubscribe from birthday emails, please contact us.
        </p>

    </div>

</body>
</html>

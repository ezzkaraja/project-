<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>dec</title>
</head>
<body style="background: #eee; padding: 30px;">
<div style="width: 600px; margin: 0 auto; background: #fff; border: 1px solid #ccc; padding: 20px;">
    <h1>welcome admin </h1>
    <p>hope this email finds you will</p>
    <p>there is new contact us message with the following data </p>
    <br>
    <p><strong>Name:</strong> {{ $data['name'] }}</p>
    <p><strong>Email:</strong> {{ $data['email'] }}</p>
    <p><strong>Phone:</strong> {{ $data['phone'] }}</p>
    <p><strong>Subject:</strong> {{ $data['subject'] }}</p>
    <p><strong>Message:</strong> {{ $data['message'] }}</p>
    <p><strong>CV:</strong> <img src="{{ asset('storage/' . $data['cv']) }}" alt="CV" style="max-width: 100%; height: auto;"></p>

    <br>
    <p>Thank you for your attention.</p>

</div>
</body>
</html>

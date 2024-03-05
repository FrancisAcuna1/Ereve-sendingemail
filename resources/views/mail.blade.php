<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div>
<h2>Hello {{ $name }},</h2>
<p><strong>Message:</strong> {{ 'message' }}</p>

@if ($attachment)
    <p><strong>Attachment:</strong> {{ $attachment->getClientOriginalName() }}</p>
@endif

<p>Thank you!</p>
</div>

</body>
</html>
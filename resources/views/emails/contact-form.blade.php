<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
		<h3>{{ $contact['name'] }}, thank you for contact us.</h3>
		<br>
		<h4>You sent us the information below:</h4>
		<p>Name: {{ $contact['name'] }}</p>
		<p>Email: {{ $contact['email'] }}</p>
		<p>Phone: {{ $contact['phone'] }}</p>
		<p>Message: {{ $contact['message'] }}</p>
		<br>
		<p>We'll get back to you as soon as possible.</p>
		<p>Sincerly,</p>
		<p>The GAR Solution Team</p>
	</body>
</html>

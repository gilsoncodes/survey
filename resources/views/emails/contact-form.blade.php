<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
		<h1>Email Test</h1>
		<p>Name: {{ $contact['name'] }}</p>
		<p>business: {{ $contact['business'] }}</p>
		<p>email: {{ $contact['email'] }}</p>
		<p>phone: {{ $contact['phone'] }}</p>
		<p>message: {{ $contact['message'] }}</p>
		@if ($contact['selectedMeeting'] == '1')
			<p>Zoom Meeting</p>
		@else
			<p>Meeting at the business place:</p>
			<p>{{ $contact['address'] }}</p>
		@endif
		<p>date: {{ $contact['dateShow'] }}</p>
		<p>time: {{ $contact['selectedHour'] . ":" . $contact['selectedMinute'] . " " . $contact['selectedAmPm'] }}</p>
	</body>
</html>

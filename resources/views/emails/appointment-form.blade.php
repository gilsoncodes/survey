<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
		<h1>{{ $appointment['name'] }}, thank you for scheduling an appointment</h1>
		<p>Name: {{ $appointment['name'] }}</p>
		<p>Business: {{ $appointment['business'] }}</p>
		<p>Email: {{ $appointment['email'] }}</p>
		<p>Phone: {{ $appointment['phone'] }}</p>
		<p>Message: {{ $appointment['message'] }}</p>
		@if ($appointment['selectedMeeting'] == '1')
			<p>Zoom Meeting</p>
		@else
			<p>Meeting at the business place:</p>
			<p>{{ $appointment['address'] }}</p>
		@endif
		<p>Date: {{ $appointment['dateShow'] }}</p>
		<p>Time: {{ $appointment['selectedHour'] . ":" . $appointment['selectedMinute'] . " " . $appointment['selectedAmPm'] }}</p>
		<br>
		@if ($appointment['selectedMeeting'] == '1')
			<p>You'll receive another email shortly with the instructions to access the zoom Meeting</p>
		@else
			<p>We'll be visiting your place in the date and time you scheduled</p>
		@endif

		<p>If you are unable to make it, click the link below to cancel the appointment</p>
		<a href="http://gar.test">gar.test</a>
		<p>We are looking forward to talk to you</p>

		<p>Sincerly,</p>
		<p>GAR Solution Team</p>

	</body>
</html>

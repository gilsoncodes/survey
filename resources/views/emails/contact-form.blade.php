<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>GAR Solutions has been received your message</title>
	</head>
	<body style="font-family: Arial, Helvetica, sans-serif; max-width: 760px; margin: 15px auto 10px; background-color: #F6F9FC;">
		<div style="padding: 15px 5px; border-radius: 15px; background-color: #FFFFFF;">
			<div style="display:flex; align-items: center; justify-content: center;">
				<a href="https://www.garsolutions.com">
						<x-jet-application-mark />
				</a>
			</div>

			<p>Hello {{ ucwords($contact['name']) }},</p>
			<p>Thank you for reaching out!</p>
			<br>
			<p style="padding:10px; border-radius: 15px; text-align: center; width: 70%; background-color: #F6F9FC; margin: auto;">
					<strong>
							You are very important to us, your information below will always remain private.
					</strong>
			</p>
			<p> <strong>Name:</strong>
					{{ ucwords($contact['name']) }}
			</p>
			<p><strong>Email:</strong>
					{{ $contact['email'] }}
			</p>
			<p><strong>Phone:</strong>
					{{ $contact['phone'] }}
			</p>
			<p><strong>Message:</strong>
					{{ $contact['message'] }}
			</p>
			<br>
			<p>We will contact you as soon as we review your message.</p>
			<p>Sincerly,</p>
			<br>
			<p>
				<span style="border-bottom: 2px solid #005fe4; padding-bottom: 3px;">
					The GAR Solutions Team
				</span>
			</p>
			<p style="display:flex; align-items: center; margin: 0; padding:0;   font-size: small;">
					<svg xmlns="http://www.w3.org/2000/svg" style="width: 16px; hight: 16px;" fill="none" viewBox="0 0 24 24" stroke="currentColor">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
					</svg>
					&nbsp;
					<a href="https://www.garsolutions.com" style="color: #005fe4; text-decoration: none;">
							www.garsolutions.com
					</a>
			</p>
			<p style="display:flex; align-items: center; font-size: small;">
					<svg xmlns="http://www.w3.org/2000/svg" style="width: 16px; hight: 16px;" fill="none" viewBox="0 0 24 24" stroke="currentColor">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
					</svg>
					&nbsp;
					<a href="mailto:contact@garsolutions.com" style="color: #005fe4; text-decoration: none;">
							contact@garsolutions.com
					</a>
			</p>
			<p style="display:flex; align-items: center;  font-size: small;">
					<svg xmlns="http://www.w3.org/2000/svg" style="width: 16px; hight: 16px;" fill="none" viewBox="0 0 24 24" stroke="currentColor">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
					</svg>
					&nbsp;
					<a href="tel:+16175641345" style="color: #005fe4; text-decoration: none; font-size: ">
							(617) 564 - 1345
					</a>
			</p>
		</div>
	</body>
</html>

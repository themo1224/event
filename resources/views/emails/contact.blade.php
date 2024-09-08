<!-- resources/views/emails/contact.blade.php -->
<h1>Contact Form Submission</h1>
<p><strong>Name:</strong> {{ $data['name'] }}</p>
<p><strong>Email:</strong> {{ $data['email'] }}</p>
<p><strong>Reason for Contacting:</strong> {{ $data['reason'] }}</p>
<p><strong>Phone:</strong> {{ $data['phone'] }}</p>
<p><strong>Message:</strong> {{ $data['message'] }}</p>

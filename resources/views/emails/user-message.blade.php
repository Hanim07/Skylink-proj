{{-- resources/views/emails/user-message.blade.php --}}
<h2>New Message from Contact Form</h2>
<p><strong>Name:</strong> {{ $message->name }}</p>
<p><strong>Email:</strong> {{ $message->email }}</p>
<p><strong>Phone:</strong> {{ $message->phone }}</p>
<p><strong>Message:</strong></p>
<p>{{ $message->message }}</p>
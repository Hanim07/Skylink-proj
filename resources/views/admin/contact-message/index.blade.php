@extends('admin.layouts.master')

@section('content')
<h1 class="text-xl font-bold mb-4">Contact Messages</h1>

<table class="w-full border-collapse border border-gray-300 text-sm">
    <thead class="bg-gray-100">
        <tr>
            <th class="border p-2">#</th>
            <th class="border p-2">Name</th>
            <th class="border p-2">Email</th>
            <th class="border p-2">Phone</th>
            <th class="border p-2">Company</th>
            <th class="border p-2">Message</th>
            <th class="border p-2">Date</th>
        </tr>
    </thead>
    <tbody>
        @foreach($messages as $message)
        <tr>
            <td class="border p-2">{{ $loop->iteration + ($messages->currentPage() - 1) * $messages->perPage() }}</td>
            <td class="border p-2">{{ $message->first_name }} {{ $message->last_name }}</td>
            <td class="border p-2">{{ $message->email }}</td>
            <td class="border p-2">{{ $message->phone }}</td>
            <td class="border p-2">{{ $message->company ?? '-' }}</td>
            <td class="border p-2">{{ Str::limit($message->message, 50) }}</td>
            <td class="border p-2">{{ $message->created_at->format('Y-m-d H:i') }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

<div class="mt-4">
    {{ $messages->links() }}
</div>
@endsection

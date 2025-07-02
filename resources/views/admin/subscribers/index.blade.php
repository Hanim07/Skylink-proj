@extends('admin.layouts.master') {{-- Or your main layout --}}

@section('content')
<h1 class="text-2xl font-bold mb-4">Newsletter Subscribers</h1>

<table class="w-full border-collapse border border-gray-300">
    <thead>
        <tr class="bg-gray-100">
            <th class="p-2 border">#</th>
            <th class="p-2 border">Name</th>
            <th class="p-2 border">Email</th>
            <th class="p-2 border">Subscribed At</th>
        </tr>
    </thead>
    <tbody>
        @foreach($subscribers as $subscriber)
        <tr>
            <td class="p-2 border">{{ $loop->iteration + ($subscribers->currentPage() - 1) * $subscribers->perPage() }}</td>
            <td class="p-2 border">{{ $subscriber->name }}</td>
            <td class="p-2 border">{{ $subscriber->email }}</td>
            <td class="p-2 border">{{ $subscriber->created_at->format('Y-m-d H:i') }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

<div class="mt-4">
    {{ $subscribers->links() }} {{-- Laravel pagination --}}
</div>
@endsection

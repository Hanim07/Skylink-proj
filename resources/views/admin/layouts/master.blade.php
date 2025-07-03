<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Panel - Skylink</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Add TailwindCSS or Bootstrap if you're using them -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 font-sans">

<div class="flex min-h-screen">
    <!-- Sidebar -->
    <aside class="w-64 bg-white border-r shadow-lg">
        <div class="p-4 text-xl font-bold border-b">Skylink Admin</div>
        <ul class="mt-4 space-y-2 text-sm">
            <li><a href="{{ route('admin.dashboard') }}" class="block py-2 px-4 hover:bg-gray-200">Dashboard</a></li>
            <li><a href="{{ route('admin.news.index') }}" class="block py-2 px-4 hover:bg-gray-200">News</a></li>
            <li><a href="{{ route('admin.portfolio.index') }}" class="block py-2 px-4 hover:bg-gray-200">Portfolio</a></li>
            <li><a href="{{ route('admin.subscribers.index') }}" class="block py-2 px-4 hover:bg-gray-200">Subscribers</a></li>

            <!-- ✅ Contact Messages Link Goes Here -->
            <li><a href="{{ route('admin.contact-messages.index') }}" class="block py-2 px-4 hover:bg-gray-200">Contact Messages</a></li>

            <!-- Add other links like Events, Services, etc. -->
        </ul>
    </aside>

    <!-- Main content -->
    <main class="flex-1 p-6">
        @yield('content')
    </main>
</div>

</body>
</html>

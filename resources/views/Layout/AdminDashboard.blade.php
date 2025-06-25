<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Quiz Dashboard</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    {{-- @vite('resources/css/app.css') --}}
</head>
<body class="bg-gray-100 font-sans">

  <!-- Header Navbar -->
<x-navbar :admin="$admin" />

  <div class="flex">

    <!-- Sidebar -->
    <aside class="w-64 bg-gray-900 text-white min-h-screen p-5 hidden md:block">
      <h2 class="text-xl font-bold mb-6">Navigation</h2>
      <nav class="space-y-4">
        <a href="#" class="block hover:text-yellow-400">Dashboard</a>
        <a href="#" class="block hover:text-yellow-400">Quiz Categories</a>
        <a href="#" class="block hover:text-yellow-400">Manage Quizzes</a>
        <a href="#" class="block hover:text-yellow-400">Results</a>
        <a href="#" class="block hover:text-yellow-400">Settings</a>
      </nav>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 p-6">

      <!-- Welcome Card -->
    <x-main :admin="$admin"> </x-main>

      <!-- Categories Table -->
      <x-category />
    </main>
  </div>
</body>
</html>

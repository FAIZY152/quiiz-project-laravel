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
   <x-sidebar />
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

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
     <x-navbar />

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
      <div class="bg-white rounded-xl shadow p-6 mb-6">
        <h2 class="text-xl font-semibold text-gray-800">Welcome, {{ $admin->name }} 👋</h2>
        <p class="text-gray-600">Here’s what’s happening with your quizzes today.</p>
      </div>

      <!-- Categories Table -->
      <div class="bg-white rounded-xl shadow overflow-x-auto">
        <div class="p-4 border-b">
          <h3 class="text-lg font-bold text-gray-800">Quiz Categories</h3>
        </div>
        <table class="min-w-full text-left text-gray-700">
          <thead class="bg-gray-100">
            <tr>
              <th class="py-3 px-6">#</th>
              <th class="py-3 px-6">Category</th>
              <th class="py-3 px-6">Total Quizzes</th>
              <th class="py-3 px-6">Created At</th>
              <th class="py-3 px-6">Actions</th>
            </tr>
          </thead>
          <tbody>
            <tr class="border-b hover:bg-gray-50">
              <td class="py-3 px-6">1</td>
              <td class="py-3 px-6">HTML Basics</td>
              <td class="py-3 px-6">10</td>
              <td class="py-3 px-6">2025-06-20</td>
              <td class="py-3 px-6 space-x-2">
                <button class="px-3 py-1 bg-blue-500 text-white rounded hover:bg-blue-600">Edit</button>
                <button class="px-3 py-1 bg-red-500 text-white rounded hover:bg-red-600">Delete</button>
              </td>
            </tr>
            <tr class="border-b hover:bg-gray-50">
              <td class="py-3 px-6">2</td>
              <td class="py-3 px-6">JavaScript Advanced</td>
              <td class="py-3 px-6">8</td>
              <td class="py-3 px-6">2025-06-18</td>
              <td class="py-3 px-6 space-x-2">
                <button class="px-3 py-1 bg-blue-500 text-white rounded hover:bg-blue-600">Edit</button>
                <button class="px-3 py-1 bg-red-500 text-white rounded hover:bg-red-600">Delete</button>
              </td>
            </tr>
            <!-- Add more rows dynamically -->
          </tbody>
        </table>
      </div>
    </main>
  </div>
</body>
</html>

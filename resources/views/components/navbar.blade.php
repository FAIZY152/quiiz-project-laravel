<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Navbar</title>
        <script src="https://cdn.tailwindcss.com"></script>

</head>
<body>
    <nav class="bg-gray-900 shadow-lg w-full">
    <header class="bg-white shadow p-4 flex justify-between items-center">
    <h1 class="text-2xl font-bold text-gray-800">Quiz Dashboard</h1>
    <div class="flex items-center gap-4 px-1">
    <a href="/admin-dashboard" class="hover:text-yellow-400 list-none cursor-pointer">Dashboard</a>
    <a href="/admin-category" class="hover:text-yellow-400 list-none cursor-pointer">Categories</a>
    <a href="/admin-quizzes" class="hover:text-yellow-400 list-none cursor-pointer">Quizzes</a>
    <a href="/admin-users" class="hover:text-yellow-400 list-none cursor-pointer">Users</a>
    <a href="/admin-logout" class="hover:text-yellow-400 list-none cursor-pointer">Logout</a>
    </div>
  </header>
</nav>
</body>
</html>
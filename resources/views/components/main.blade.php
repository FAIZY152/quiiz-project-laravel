@props(['admin'])

<div>
  <div class="bg-white rounded-xl shadow p-6 mb-6">
        <h2 class="text-xl font-semibold text-gray-800">Welcome, {{ $admin->name }} 👋</h2>
        <p class="text-gray-600">Here’s what’s happening with your quizzes today.</p>
      </div>
</div>
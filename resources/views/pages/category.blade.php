<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin - Category</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body>

    <div>
        <x-navbar  />
        <div class="max-w-md mx-auto p-6 bg-white rounded-2xl shadow-lg mt-10">
  <h2 class="text-2xl font-bold mb-6 text-gray-800">Create Category</h2>
  <form action="/add-category" method="POST" class="space-y-5">
    <!-- Category Name -->
    @csrf
    <div>
      <label for="name" class="block text-sm font-medium text-gray-700">Category Name</label>
      <input
        type="text"
        id="name"
        name="cname"
        required
        class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500"
      />
        {{-- @error('cname')
      <span class="text-red-500 text-sm">{{ $message }}</span>
    @enderror --}}
    </div>

   

    <!-- Submit Button -->
    <div class="pt-4">
      <button
        type="submit"
        class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-xl transition"
      >
        Create Category
      </button>
    </div>
  </form>
</div>

</div> 
</body>
</html>
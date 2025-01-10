<!-- resources/views/category/create.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Category</title>

    <!-- Tailwind CSS (You can include your own or a CDN) -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

    <div class="max-w-lg mx-auto mt-8 p-6 border rounded-lg shadow-md bg-white">
        <h2 class="text-2xl font-semibold mb-4 text-center">Add New Category</h2>

        <!-- Success message -->
        @if (session('success'))
            <div class="mb-4 text-green-500">{{ session('success') }}</div>
        @endif

        <form action="{{ route('category.store') }}" method="POST">
            @csrf <!-- CSRF protection -->

            <!-- Category Name -->
            <div class="mb-4">
                <label for="name" class="block text-gray-700">Name</label>
                <input type="text" id="name" name="name" value="{{ old('name') }}" class="w-full px-4 py-2 mt-2 border rounded-md" required>
                @error('name')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Category Description -->
            <div class="mb-4">
                <label for="description" class="block text-gray-700">Description (optional)</label>
                <textarea id="description" name="description" class="w-full px-4 py-2 mt-2 border rounded-md">{{ old('description') }}</textarea>
                @error('description')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Submit Button -->
            <button type="submit" class="w-full px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">
                Add Category
            </button>
        </form>
    </div>

</body>
</html>

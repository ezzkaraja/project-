<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>All Courses</title>
  @vite(['resources/css/app.css'])
</head>
<body class="bg-gray-50 p-6"> <!-- الخلفية + مسافة من كل الحواف -->

  <div class="max-w-7xl mx-auto">
    <div class="flex items-center justify-between mb-6">
        <h1 class="text-2xl font-bold mb-6">Edit courses</h1>
        <a class="bg-slate-500 text-white p-2 rounded" href="{{route('courses.index')}}">All Courses</a>
    </div>
      <form action="{{route('courses.update',$course->id)}}" method="POST" class="bg-white p-6 rounded-lg shadow-md" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-4">
          <label for="title" class="block text-gray-700 font-bold mb-2">Title:</label>
          <input type="text" id="title" name="title" class="w-full border border-gray-300 p-2 rounded  @error('title') border-red-500 @enderror   " value="{{old('title',$course->title)}}" required>
          @error('title')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
          @enderror
        </div>
        <div class="mb-4">
          <label for="image" class="block text-gray-700 font-bold mb-2">Image URL:</label>
          <input type="file" id="image" name="image" class="w-full border border-gray-300 p-2 rounded  @error('image') border-red-500 @enderror  "  >
          @error('image')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
          @enderror
          @if ($course->image)
            <img class="mt-1 p-1 border" width="100" src="{{ asset('storage/' . $course->image) }}" alt="">

          @endif
        </div>
        <div class="mb-4">
          <label for="price" class="block text-gray-700 font-bold mb-2">Price:</label>
          <input type="number" id="price" name="price" class="w-full border border-gray-300 p-2 rounded  @error('price') border-red-500 @enderror   " value="{{old('price',$course->price)}}" required>
          @error('parice')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
          @enderror
        </div>
        <div class="mb-4">
          <label for="category" class="block text-gray-700 font-bold mb-2">Category:</label>
          <input type="text" id="category" name="category" class="w-full border border-gray-300 p-2 rounded  @error('category') border-red-500 @enderror   " value="{{old('category',$course->category)}}" required>
            @error('category')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

          <div class="mb-4">
          <label for="description" class="block text-gray-700 font-bold mb-2">Description:</label>
          <textarea id="description" name="description" class="w-full border border-gray-300 p-2 rounded  @error('description') border-red-500 @enderror   "  required>{{old('description',$course->description)}}</textarea>
            @error('description')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>
        <button type="submit" class="bg-indigo-500 text-white p-2 rounded">update</button>
       @if (request()->page)
        <input type="hidden" name="page" value="{{ request()->page}}">
       @endif
      </form>
  </div>
  @if (session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
            {{ session('success') }}
        </div>

  @endif

</body>
</html>

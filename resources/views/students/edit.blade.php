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
        <h1 class="text-2xl font-bold mb-6">edit students</h1>
        <a class="bg-slate-500 text-white p-2 rounded" href="{{route('students.index')}}">All Courses</a>
    </div>
      <form action="{{route('students.update',$student->id)}}" method="POST" class="bg-white p-6 rounded-lg shadow-md" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-4">
          <label for="name" class="block text-gray-700 font-bold mb-2">name:</label>
          <input type="text" id="name" name="name" class="w-full border border-gray-300 p-2 rounded  @error('name') border-red-500 @enderror   " value="{{old('name',$student->name)}}" required>
          @error('name')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
          @enderror
        </div>
        <div class="mb-4">
          <label for="image" class="block text-gray-700 font-bold mb-2">Image URL:</label>
          <input type="file" id="image" name="image" class="w-full border border-gray-300 p-2 rounded  @error('image') border-red-500 @enderror   "  >
          @error('image')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
          @enderror
          @if ($student->image)
            <img class="mt-4 p1 border" width="100" src="{{ asset('storage/' . $student->image)}}" alt="">

          @endif
        </div>
        <div class="mb-4">
          <label for="email" class="block text-gray-700 font-bold mb-2">email:</label>
          <input type="email" id="email" name="email" class="w-full border border-gray-300 p-2 rounded  @error('email') border-red-500 @enderror   " value="{{old('email',$student->email)}}" required>
          @error('email')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
          @enderror
        </div>
        <div class="mb-4">
          <label for="phone" class="block text-gray-700 font-bold mb-2">phone:</label>
          <input type="text" id="phone" name="phone" class="w-full border border-gray-300 p-2 rounded  @error('phone') border-red-500 @enderror   " value="{{old('phone',$student->phone)}}" required>
            @error('phone')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>
        <button type="submit" class="bg-indigo-500 text-white p-2 rounded">update</button>
      </form>





  </div>

</body>
</html>

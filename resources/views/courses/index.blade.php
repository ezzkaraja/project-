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
    {{-- @if (session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
            {{ session('success') }}
        </div>

    @endif --}}
    <div class="flex items-center justify-between mb-6">
        <h1 class="text-2xl font-bold mb-6">All Courses({{$courses->total()}})</h1>
        <a class="bg-indigo-500 text-white p-2 rounded" href="{{route('courses.create')}}">Add New Courses</a>
    </div>

    <div class="overflow-x-auto">
      <table class="table-auto w-full border-collapse border border-gray-300 rounded-lg shadow-sm bg-white">
        <thead class="bg-gray-100">
          <tr>
            <th class="border border-gray-300 px-4 py-2 text-left">ID</th>
            <th class="border border-gray-300 px-4 py-2 text-left">Name</th>
            <th class="border border-gray-300 px-4 py-2 text-left">Slug</th>
            <th class="border border-gray-300 px-4 py-2 text-left">Description</th>
            <th class="border border-gray-300 px-4 py-2 text-left">Image</th>
            <th class="border border-gray-300 px-4 py-2 text-left">Price</th>
            <th class="border border-gray-300 px-4 py-2 text-left">Category</th>
            <th class="border border-gray-300 px-4 py-2 text-left">Actions</th>
          </tr>
        </thead>
        <tbody>
         @forelse ($courses as $course )
              <tr class="hover:bg-gray-50">
            <td class="border border-gray-300 px-4 py-2"> {{$course->id}}</td>
            <td class="border border-gray-300 px-4 py-2"> {{$course->title}}</td>
            <td class="border border-gray-300 px-4 py-2"> {{$course->slug}}</td>
            <td class="border border-gray-300 px-4 py-2"> {{$course->description}}</td>
            <td class="border border-gray-300 px-4 py-2"> <img width="100" src="{{ asset('storage/' . $course->image) }}" alt=""></td>
            <td class="border border-gray-300 px-4 py-2"> {{$course->price}}</td>
            <td class="border border-gray-300 px-4 py-2"> {{$course->category}}</td>
            <td class="border border-gray-300 px-4 py-2">
              <form action="{{ route('courses.destroy', $course->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" class="inline-flex items-center justify-center w-8 h-8 bg-red-500 text-white rounded hover:bg-red-600 transition-colors">
        <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
            <path d="M17 6H22V8H20V21C20 21.5523 19.5523 22 19 22H5C4.44772 22 4 21.5523 4 21V8H2V6H7V3C7 2.44772 7.44772 2 8 2H16C16.5523 2 17 2.44772 17 3V6ZM18 8H6V20H18V8ZM9 11H11V17H9V11ZM13 11H15V17H13V11ZM9 4V6H15V4H9Z"></path>
        </svg>
    </button>
</form>

            </td>
          </tr>
           @empty
              <tr>
                <td class="border border-gray-300 px-4 py-2 text-center" colspan="7">No courses available.</td>
                </tr>
         @endforelse
        </tbody>
      </table>
        <div class="mt-4">
            {{ $courses->links() }}
        </div>

    </div>
  </div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
   @if (session('sweet_success'))
     Swal.fire({
     title: "Good job!",
     text: "{{session('sweet_success')}}",
     icon: "success"
});
    @endif


</script>
</body>
</html>

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
    <h1 class="text-2xl font-bold mb-6">All Courses()</h1>

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
          </tr>
        </thead>
        <tbody>
         @foreach ($courses as $course )
              <tr class="hover:bg-gray-50">
            <td class="border border-gray-300 px-4 py-2"> {{$course->id}}</td>
            <td class="border border-gray-300 px-4 py-2"> {{$course->title}}</td>
            <td class="border border-gray-300 px-4 py-2"> {{$course->slug}}</td>
            <td class="border border-gray-300 px-4 py-2"> {{$course->description}}</td>
            <td class="border border-gray-300 px-4 py-2"> <img src="{{$course->image}}" alt=""></td>
            <td class="border border-gray-300 px-4 py-2"> {{$course->price}}</td>
            <td class="border border-gray-300 px-4 py-2"> {{$course->category}}</td>
          </tr>

         @endforeach
        </tbody>
      </table>
        <div class="mt-4">
            {{ $courses->links() }}
        </div>

    </div>
  </div>

</body>
</html>

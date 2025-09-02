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
        <h1 class="text-2xl font-bold mb-6">All Courses({{$students->total()}})</h1>
        <a class="bg-indigo-500 text-white p-2 rounded" href="{{route('students.create')}}">Add New student</a>
    </div>

    <div class="overflow-x-auto">
      <table class="table-auto w-full border-collapse border border-gray-300 rounded-lg shadow-sm bg-white">
        <thead class="bg-gray-100">
          <tr>
            <th class="border border-gray-300 px-4 py-2 text-left">id</th>
            <th class="border border-gray-300 px-4 py-2 text-left">name</th>
            <th class="border border-gray-300 px-4 py-2 text-left">email</th>
            <th class="border border-gray-300 px-4 py-2 text-left">phone</th>
            <th class="border border-gray-300 px-4 py-2 text-left">image</th>
          </tr>
        </thead>
        <tbody>
          @forelse ($students as $student)




              <tr class="hover:bg-gray-50">
            <td class="border border-gray-300 px-4 py-2">{{$student->id}}</td>
            <td class="border border-gray-300 px-4 py-2">{{$student->name}}</td>
            <td class="border border-gray-300 px-4 py-2">{{$student->email}} </td>
            <td class="border border-gray-300 px-4 py-2">{{$student->phone}} </td>
            <td class="border border-gray-300 px-4 py-2"><img width="100" src="{{ asset('storage/' . $student->image)}}" alt=""></td>
          </tr>
            @empty
            <tr>
                <td class="border border-gray-300 px-4 py-2 text-center"
                    colspan="5">No students found.</td>
            </tr>
               @endforelse
        </tbody>
      </table>
        <div class="mt-4">
          {{ $students->links() }}
        </div>

    </div>
  </div>

</body>
</html>


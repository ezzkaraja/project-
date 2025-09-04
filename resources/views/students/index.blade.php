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
            <th class="border border-gray-300 px-4 py-2 text-left">Action</th>

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
            <td class="border border-gray-300 px-4 py-2">
                <form action="{{route('students.destroy' , $student->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                  <button onclick="return confirm('are you suor?!')" type="submit" class="inline-flex items-center justify-center w-8 h-8 bg-red-500 text-white rounded hover:bg-red-600 transition-colors">
        <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
            <path d="M17 6H22V8H20V21C20 21.5523 19.5523 22 19 22H5C4.44772 22 4 21.5523 4 21V8H2V6H7V3C7 2.44772 7.44772 2 8 2H16C16.5523 2 17 2.44772 17 3V6ZM18 8H6V20H18V8ZM9 11H11V17H9V11ZM13 11H15V17H13V11ZM9 4V6H15V4H9Z"></path>
        </svg>
    </button>
                </form>
            </td>

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
 <script src="sweetalert2.all.min.js"></script>
 @if (session('success'))
Swal.fire({
  title: "Good job!",
  text: "You clicked the button!",
  icon: "success"
});
 @endif


</body>
</html>


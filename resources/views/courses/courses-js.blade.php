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
    @if (session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
            {{ session('success') }}
        </div>

    @endif
    <div class="flex items-center justify-between mb-6">
        <h1 class="text-2xl font-bold mb-6">All Courses({{$courses->total()}})</h1>
        <div>
            <button class="bg-indigo-500 text-white p-2 rounded" data-target="add-new-course">Add New Courses</button>
          <a class="bg-gray-500 text-white p-2 rounded" href="{{route('courses.trash')}}">trash students</a>
    </div>
        </div>
       <div>
        <form class="flex gap-2" action="{{route('courses.index')}}" method="get">
            @csrf
            <input type="text" name="search"  placeholder="Search courses..." class="border border-gray-300 rounded px-2 py-1 w-[70%]"value="{{ request('search') }}">
            <select name="order" class="border border-gray-300 rounded px-2 py-1 w-[10%]" >
                <option @selected(request()->order == 'ASC' ) value="ASC">ASC</option>
                <option @selected(request()->order == 'DESC' ) value="DESC">DESC</option>
            </select>
            <select name="count" class="border border-gray-300 rounded px-2 py-1 w-[10%]">
                <option  @selected(request()->count==2) value="2">2</option>
                <option  @selected(request()->count==20) value="20">20</option>
                <option  @selected(request()->count==30) value="30">30</option>
                <option  @selected(request()->count==$courses->total())  value="{{$courses->total()}}">All</option>
            </select>
            <button type="submit" class="bg-teal-600 text-white p-2 rounded w-[10%]">Filter</button>
        </form>
       </div>
    <div class="overflow-x-auto">

       <div class="table-content">
        @include('courses._table',['courses'=>$courses])
       </div>
    </div>
  </div>

  {{-- add new courses Modal  --}}
 <div id="add-new-course" class="modal fixed top-0 left-0 w-full hidden h-full bg-black/50 backdrop-blur-[1px]">
  <div class="content max-w-3xl bg-white rounded p-6 mx-auto mt-20 ">
    <div class="flex justify-between items-center" >
        <h1 class="text-2xl font-bold w-40px">add new course </h1>
        <svg class="w-5 h-5 cursor-pointer close" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22ZM12 10.5858L9.17157 7.75736L7.75736 9.17157L10.5858 12L7.75736 14.8284L9.17157 16.2426L12 13.4142L14.8284 16.2426L16.2426 14.8284L13.4142 12L16.2426 9.17157L14.8284 7.75736L12 10.5858Z"></path></svg>

    </div>
    <div class="alert-error bg-red-100 text-red-600 p-4 my-2 rounded hidden">
        <p>course name most your uoneq</p>

    </div>
    <form action="{{route('courses.store')}}" method="POST" class="bg-white p-6 rounded-lg shadow-md" enctype="multipart/form-data">
        @csrf
        <div class="mb-4">
          <label for="title" class="block text-gray-700 font-bold mb-2">Title:</label>
          <input type="text" id="title" name="title" class="w-full border border-gray-300 p-2 rounded  @error('title') border-red-500 @enderror   " value="{{old('title')}}" >
          @error('title')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
          @enderror
        </div>
        <div class="mb-4">
          <label for="image" class="block text-gray-700 font-bold mb-2">Image URL:</label>
          <input type="file" id="image" name="image" class="w-full border border-gray-300 p-2 rounded  @error('image') border-red-500 @enderror   "  >
          @error('image')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
          @enderror
        </div>
        <div class="mb-4">
          <label for="price" class="block text-gray-700 font-bold mb-2">Price:</label>
          <input type="number" id="price" name="price" class="w-full border border-gray-300 p-2 rounded  @error('price') border-red-500 @enderror   " value="{{old('price')}}" >
          @error('parice')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
          @enderror
        </div>
        <div class="mb-4">
          <label for="category" class="block text-gray-700 font-bold mb-2">Category:</label>
          <input type="text" id="category" name="category" class="w-full border border-gray-300 p-2 rounded  @error('category') border-red-500 @enderror   " value="{{old('category')}}" >
            @error('category')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

          <div class="mb-4">
          <label for="description" class="block text-gray-700 font-bold mb-2">Description:</label>
          <textarea id="description" name="description" class="w-full border border-gray-300 p-2 rounded  @error('description') border-red-500 @enderror   " value={{old('description')}}  ></textarea>
            @error('description')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>
        <button type="submit" class="bg-indigo-500 text-white p-2 rounded">Create Course</button>
      </form>
  </div>
</div>
{{-- edit course modal --}}
{{-- <div id="edit-course" class=" modal fixed top-0 left-0 w-full hidden h-full bg-black/50 backdrop-blur-[1px]">
   <div class="content max-w-3xl bg-white rounded p-6 mx-auto mt-20 ">
    <div class="flex justify-between items-center" >
        <h1 class="text-2xl font-bold w-40px">Edit course </h1>
        <svg class="w-5 h-5 cursor-pointer close" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22ZM12 10.5858L9.17157 7.75736L7.75736 9.17157L10.5858 12L7.75736 14.8284L9.17157 16.2426L12 13.4142L14.8284 16.2426L16.2426 14.8284L13.4142 12L16.2426 9.17157L14.8284 7.75736L12 10.5858Z"></path></svg>

    </div>
 <form action="{{route('courses.update',$course->id)}}" method="POST" class="bg-white p-6 rounded-lg shadow-md" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-4">
          <label for="title" class="block text-gray-700 font-bold mb-2">Title:</label>
          <input type="text" id="title" name="title" class="w-full border border-gray-300 p-2 rounded  @error('title') border-red-500 @enderror   " value="{{old('title',$course->title)}}" >
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
          <input type="number" id="price" name="price" class="w-full border border-gray-300 p-2 rounded  @error('price') border-red-500 @enderror   " value="{{old('price',$course->price)}}" >
          @error('parice')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
          @enderror
        </div>
        <div class="mb-4">
          <label for="category" class="block text-gray-700 font-bold mb-2">Category:</label>
          <input type="text" id="category" name="category" class="w-full border border-gray-300 p-2 rounded  @error('category') border-red-500 @enderror   " value="{{old('category',$course->category)}}" >
            @error('category')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

          <div class="mb-4">
          <label for="description" class="block text-gray-700 font-bold mb-2">Description:</label>
          <textarea id="description" name="description" class="w-full border border-gray-300 p-2 rounded  @error('description') border-red-500 @enderror   "  >{{old('description',$course->description)}}</textarea>
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
</div> --}}






<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="{{ asset('crud/js/crud.js') }}"></script>
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

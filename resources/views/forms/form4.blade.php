<x-form.layaot>
    <x-slot name="title">Form 4</x-slot>
  <x-form.errors/>
    <div class="container my-5">
        <h1 class="mb-4">Form 4</h1>
        <form action="{{route('forms.form4')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
              <label for="file" class="form-label">Upload File</label>
             <input type="file" class="form-control @error('file') is-invalid @enderror" name="file" id="file">
             @error('file')
            <div class="invalid-feedback">{{$message}}</div>
        @enderror
    </div>
            <button class="btn btn-success px-5"> <i class="fa-solid fa-paper-plane">send</i></button>
        </form>
    </div>
</x-form.layaot>

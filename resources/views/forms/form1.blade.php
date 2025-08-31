<x-form.layaot>
<x-slot name="title">Form 1</x-slot>
<div class="container my-5">
    <h1 class="mb-4">{{__('Form 1')}}</h1>
<form action="{{route('forms.form1')}}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" placeholder="enter your name " class="form-control" name="name" required>
    </div>
    <button class="btn btn-success px-5">send</button>

</form>

</div>
</x-forms-layaot>

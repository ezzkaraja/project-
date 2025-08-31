<!-- filepath: c:\xampp\htdocs\laravel\Review\resources\views\forms\form4show.blade.php -->
<x-form.layaot>
    <x-slot name="title">Form 4</x-slot>
    <x-form.errors/>
    <h1 class="text-center mb-4">Form Show</h1>
    <div class="container my-5 d-flex justify-content-center">
        <div class="card shadow" style="max-width: 400px;">
            <div class="card-body text-center">
                <img src="{{ asset('storage/' . $path) }}" alt="Uploaded Image"
                     class="img-fluid rounded mb-3 border"
                     >
                <p class="mb-0 text-muted">تم رفع الصورة بنجاح!</p>
            </div>
        </div>
    </div>
</x-form.layaot>

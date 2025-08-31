<x-form.layaot>
    <x-slot name="title">Form 2</x-slot>
    <div class="container my-5">
        <h1 class="mb-4">Form 2</h1>
        <form action="{{route('forms.form2')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" placeholder="enter your name" class="form-control" name="name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" placeholder="enter your email" class="form-control" name="email" required>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input type="tel" placeholder="enter your phone number" class="form-control" name="phone" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" placeholder="enter password" class="form-control" name="password" required>
            </div>
            <div class="mb-3">
                <label for="password_confirmation" class="form-label">Confirm Password</label>
                <input type="password" placeholder="confirm password" class="form-control" name="confirm_password" required>
            </div>
            <button class="btn btn-success px-5">send</button>
        </form>
    </div>
</x-form.layaot>

<x-form.layaot>
    <x-slot name="title">Form 3</x-slot>
  <x-form.errors/>
    <div class="container my-5">
        <h1 class="mb-4">Form 3</h1>
        <form action="{{route('forms.form3')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" placeholder="enter your name" class="form-control @error('name') is-invalid @enderror" name="name" required>
                @error('name')
                <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" placeholder="enter your email" class="form-control @error('email') is-invalid @enderror " name="email" required>
                @error('email')
                <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input type="tel" placeholder="enter your phone number" class="form-control @error('phone') is-invalid @enderror" name="phone" required>
                @error('phone')
                <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" placeholder="enter password" class="form-control @error('password') is-invalid @enderror" name="password" required>
               @error('password')
               <div class="invalid-feedback">{{$message}}</div>
               @enderror
            </div>
            <div class="mb-3">
                <label for="password_confirmation" class="form-label">Confirm Password</label>
                <input type="password"  placeholder="confirm password" class="form-control @error('password_confirmation') is-invalid @enderror " name="password_confirmation" required>
                @error('password_confirmation')
                <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
            <button class="btn btn-success px-5"> <i class="fa-solid fa-paper-plane">send</i></button>
        </form>
    </div>
</x-form.layaot>

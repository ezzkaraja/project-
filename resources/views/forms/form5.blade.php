<x-form.layaot>
    <x-slot name="title">Form 4</x-slot>


<form action="{{route('forms.form5')}}" method="POST" enctype="multipart/form-data">
    <div class="container my-5">
    @csrf
  <div class="mb-3">
    <label for="name" class="form-label">الاسم</label>
    <input type="text" class="form-control @error('name') is-invalid @enderror"id="name" name="name" placeholder="ادخل اسمك" required>
    @error('message')
    <div class="invalid-feedback">{{$message}}</div>
    @enderror
  </div>

  <div class="mb-3">
    <label for="email" class="form-label">البريد الإلكتروني</label>
  <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="ادخل بريدك الإلكتروني" required>
  @error('message')
  <div class="invalid-feedback">{{$message}}</div>
  @enderror
  </div>

  <div class="mb-3">
    <label for="phone" class="form-label">رقم الهاتف</label>
    <input type="tel" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" placeholder="ادخل رقم الهاتف" required>
    @error('message')
    <div class="invalid-feedback">{{$message}}</div>
    @enderror
  </div>

  <div class="mb-3">
    <label for="subject" class="form-label">الموضوع</label>
    <input type="text" class="form-control @error('subject') is-invalid @enderror"id="subject" name="subject" placeholder="موضوع الرسالة" required>
    @error('message')
    <div class="invalid-feedback">{{$message}}</div>
    @enderror
  </div>

  <div class="mb-3">
    <label for="message" class="form-label">الرسالة</label>
    <textarea class="form-control @error('message') is-invalid @enderror" id="message" name="message" rows="4" placeholder="اكتب رسالتك هنا" required></textarea>
    @error('message')
    <div class="invalid-feedback">{{$message}}</div>
    @enderror
  </div>

    <div class="mb-3">
    <label for="cv" class="form-label">cv</label>
    <input type="file" class="form-control @error('cv') is-invalid @enderror"id="cv" name="cv" placeholder="موضوع الرسالة" required>
    @error('message')
    <div class="invalid-feedback">{{$message}}</div>
    @enderror
  </div>

  <button type="submit" class="btn btn-primary">إرسال</button>
  </div>
</form>
</x-form.layaot>

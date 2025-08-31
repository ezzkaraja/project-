<!DOCTYPE html>
<html lang="{{app()->getLocale()}}" dir="{{app()->getLocale() == 'ar' ? 'rtl' : 'ltr'}}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title ?? config('app.name')}}</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

</head>
<body>
 <header>

    <nav class="navbar navbar-light bg-light shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="{{route('site.index')}}">
                <span style="color:#0074D9">rock</span>club
            </a>
            <ul class="navbar-nav flex-row gap-3 ms-auto">
                <li class="nav-item">
                    <a class="nav-link {{request()->routeIs('forms.form1' )  ? 'active fw-bold' : '' }} "  href="{{route('forms.form1')}}">form1</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{request()->routeIs('forms.form2' )  ? 'active fw-bold' : '' }}" href="{{route('forms.form2')}}">form2</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{request()->routeIs('forms.form3'  ) ? 'active fw-bold' : '' }}" href="{{route('forms.form3')}}">form3</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{request()->routeIs('forms.form4' )  ? 'active fw-bold' : '' }}" href="{{route('forms.form4')}}">form4</a>
                </li>
                 <li class="nav-item">
                    <a class="nav-link {{request()->routeIs('forms.form5' )  ? 'active fw-bold' : '' }}" href="{{route('forms.form5')}}">form4</a>
                </li>
                 <div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
     languages
    </button>
    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        @foreach (config('app.languages') as $code =>$lang )


      <li><a class="dropdown-item" href="{{ request()->url}}?lang={{$code}}">{{$lang}}</a></li>
       @endforeach
    </ul>
  </div>
            </ul>
        </div>
    </nav>


 </header>
 <main>

{{ $slot }}


 </main>
 <footer class="bg-light py-4">
        <p class="text-center m-0">&copy; {{ date('Y') }} {{ config('app.name') }}. All rights reserved.</p>



 </footer>

</body>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</html>

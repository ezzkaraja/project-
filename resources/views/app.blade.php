<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield ('title')</title>
    <link rel="stylesheet" href="{{asset('front/css/all.min.css')}}">
    <link rel="icon" href="{{asset('front/images/3ac860db-9c76-447d-a279-7cfe12d526f3.jpg')}}">
    <link href="{{asset('front/css/stayle.css')}}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    @stack('styles')


</head>

<body>
    <header>
        <div class="all-heder">
            <div class="logo">
               <a href="{{route('site.index')}}"> <p><span>rock</span>club</p></a>
            </div>
            <nav>
                <ul>
                     <li ><a href="{{route('site.index')}}">home</a></li>
                    <li><a href="{{route('site.about')}}">about us</a></li>
                    <li> <a href="{{route('site.serveses')}}">serveses</a></li>



                </ul>

            </nav>
        </div>
    </header>
  @yield('content')

    <footer>
        <p>Design by Ezz karaja</p>
    </footer>


</body>
  <script src="{{asset('front/js/main.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
@stack('scripts')
</html>

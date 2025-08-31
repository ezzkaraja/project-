<!-- filepath: c:\xampp\htdocs\laravel\Review\resources\views\errors\404.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>404 - الصفحة غير موجودة</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #0074D9 0%, #ADD8E6 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Cairo', sans-serif;
        }
        .error-container {
            background: #fff;
            padding: 48px 32px;
            border-radius: 18px;
            box-shadow: 0 8px 32px rgba(0,0,0,0.12);
            text-align: center;
            max-width: 400px;
        }
        .error-code {
            font-size: 5rem;
            font-weight: bold;
            color: #0074D9;
            margin-bottom: 16px;
        }
        .error-message {
            font-size: 1.5rem;
            margin-bottom: 24px;
            color: #333;
        }
        .btn-home {
            background: #0074D9;
            color: #fff;
            border-radius: 8px;
            padding: 10px 28px;
            font-size: 1.1rem;
            text-decoration: none;
            transition: background 0.2s;
        }
        .btn-home:hover {
            background: #005fa3;
        }
    </style>
</head>
<body>
    <div class="error-container">
        <div class="error-code">404</div>
        <div class="error-message">عذراً، الصفحة غير موجودة!</div>
        <a href="{{route('site.index')}}" class="btn-home">العودة للصفحة الرئيسية</a>
    </div>
</body>
</html>

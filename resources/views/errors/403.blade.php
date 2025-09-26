<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>غير مصرح - 403</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center">
                <div class="card shadow">
                    <div class="card-body py-5">
                        <h1 class="display-1 text-danger">403</h1>
                        <h2 class="mb-4">غير مصرح بالوصول</h2>
                        <p class="lead">عذراً، ليس لديك الصلاحية للوصول إلى هذه الصفحة.</p>
                        <a href="{{ url('/') }}" class="btn btn-primary mt-3">العودة إلى الصفحة الرئيسية</a>
                        @auth
                        <a href="{{ route('dashboard') }}" class="btn btn-secondary mt-3">العودة إلى لوحة التحكم</a>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
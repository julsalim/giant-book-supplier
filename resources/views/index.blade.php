@include('header')
@include('footer')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Giant Book Supplier</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</head>
@yield('header')
<body>
    @yield('navbar')

    <div class="my-2 row m-0">
        <div class="col-3"></div>
        <div class="col-6 d-flex flex-column">
            <div class="container bg-secondary">
                <span class="fs-6 text-white">
                    {{ $title  }}
                </span>
            </div>
            @yield('contents')
        </div>
        <div class="col-3"></div>
    </div>

    @yield('footer')
</body>
</html>
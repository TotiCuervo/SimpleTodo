<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <nav class="nav">
        <a class="nav-link active" href="/home">Home</a>
        {{--<a class="nav-link" href="/about">About</a>--}}
        <a class="nav-link" href="/tasks">Tasks</a>
        <a class="nav-link" href="/lists">To Do Lists</a>

        {{--<a class="nav-link" href="/lists">Lists</a>x--}}

    </nav>

    <main class="pt-5">
        <div class="container">
            @yield('content')
        </div>
    </main>

</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <title>Student Management</title>
</head>
<body>
    <nav>
        <a href="{{ url('/') }}">Home</a> |
        <a href="{{ route('students.index') }}">Students</a>
    </nav>

    <hr>

    @yield('content')
</body>
</html>
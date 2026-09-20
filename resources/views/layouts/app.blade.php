<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<body>
    <header>
        <h1>Library System</h1>
    </header>

    <nav>
        <a href="/dashboard">Dashboard</a> | 
        <a href="/books">Books</a> | 
        <a href="/categories">Categories</a> | 
        <a href="/members">Members</a>
    </nav>
    <hr>

    <main>
        @yield('content')
    </main>

    <hr>
    <footer>
        <p>&copy; 2026 Library System</p>
    </footer>
</body>
</html>
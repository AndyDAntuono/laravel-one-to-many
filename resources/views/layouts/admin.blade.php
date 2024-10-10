<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pannello Amministrativo</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="admin-header">
        <h1>Pannello Amministrativo</h1>
        <nav>
            <ul>
                <li><a href="{{ route('admin.projects.index') }}">Gestione Progetti</a></li>
                <li><a href="{{ route('admin.types.index') }}">Gestione Tipologie</a></li>
            </ul>
        </nav>
    </div>

    <div class="container">
        @yield('content')
    </div>
</body>
</html>

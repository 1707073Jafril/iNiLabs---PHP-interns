<!-- resources/views/welcome.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>To-do App</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
    <div id="app">
        <todo-app></todo-app>
    </div>
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>


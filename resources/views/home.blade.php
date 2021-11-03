<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
</head>
<body>
   
    <header class="content">
        <div class="title">Hello World</div>

        <nav class="header_menu">
            <a href="{{ route('homepage') }}">Home</a>
            <a href="{{ route('infopage') }}">Info</a>
            <a href="{{ route('contactspage') }}">Contacts</a>
        </nav>
    </header>
  
</body>
</html>

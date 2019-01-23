<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{config('app.name')}}</title>
</head>
<body>
<h1>{{ $content->title }}</h1>
<h5>{{ $content->description }}</h5>
<a href="/content/{{$content->id}}/edit">Update</a>
</body>
</html>
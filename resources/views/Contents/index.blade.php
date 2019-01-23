

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name')}}</title>
</head>
<body>
        <form method="GET" action="/content/create">
            @csrf
            <button type="submit" class="btn btn-primary">Add Content</button>
        </form>
        @foreach ($contents as $content)
    <ul><a href="/content/{{ $content->id}}">{{$content->title}}</a> </ul>
@endforeach
    
</body>
</html>



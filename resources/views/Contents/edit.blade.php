<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{config('app.name')}}</title>
</head>
<body>
    

<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="/content/{{$content->id}}">
        @method('PATCH') 
        <div class="form-group">
              @csrf
              
              <label for="name">Title</label>
              <input type="text" class="form-control" name="title" value="{{$content->title}}"/>
          </div>
          <div class="form-group">
              <label for="price">Description</label>
          <textarea class="form-control" name="description">{{ $content->description}}</textarea>
          </div>
          <button type="submit" class="btn btn-primary">Update Project</button>
      </form>


      <form method="POST" action="/content/{{$content->id}}">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-primary">Delete Project</button>
      </form>
  </div>
</div>
</body>
</html>
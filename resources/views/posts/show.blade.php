<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <h1>{{$post->title}}</h1>
  <img src="/{{$post->img}}" alt="{{$post->img}}" width="200">
  <p>
    {{$post->content}}
  </p>
  <div>作者:{{$post->user->name}}</div>
  <div>建立時間：{{$post->created_at}}</div>
  <div>修改時間：{{$post->updated_at}}</div>
</body>
</html>
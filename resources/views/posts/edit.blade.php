<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <h1>EDIT POST</h1>
  <form action="/post/{{$post->id}}" method="post">
    @csrf
    <!-- <input type="hidden" name="_method" value="put"> -->
    {{ method_field("put") }}
    <input type="text" name="title" value="{{$post->title}}">
    <textarea name="content" cols="30" rows="10">{{$post->content}}</textarea>
    <input type="submit" value="修改">
  </form>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <h1>CREATE POST</h1>
  <form action="/post" method="post">
    @csrf
    <!-- <input type="hidden" name="_token" value="{{csrf_token()}}"> -->
    <input type="text" name="title">
    <textarea name="content" cols="30" rows="10"></textarea>
    <input type="submit" value="送出">
  </form>
</body>
</html>
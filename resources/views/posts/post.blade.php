<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="css/app.css">

  <style>
    table,td,th {
      border-collapse: collapse;
      border: 1px solid #666;
      padding:10px;
      width: 800px;
    }
  </style>
</head>
<body>
  <h1>POST INDEX</h1>
  <a href="{{route('post.create')}}">新增文章</a>
  <!-- <a href="/post/create">新增文章</a> -->
  <table>
    <tr>
      <th>ID</th>
      <th>名稱</th>
      <th>作者</th>
      <th>建立時間</th>
      <th>修改時間</th>
      <th></th>
      <th></th>
    </tr>
    @foreach($posts as $post)
      <tr>
        <td>{{$post->id}}</td>

        <!-- <td><a href="/post/{{$post->id}}">{{$post->title}}</a></td> -->

        <td><a href="{{route('post.show',$post->id)}}">{{$post->title}}</a></td>
        <td>{{$post->user->name}}</td>
        <!-- <td>{{$post->content}}</td> -->
        <td>{{$post->created_at}}</td>
        <td>{{$post->updated_at}}</td>
        <td>
          <a href="{{route('post.edit',$post->id)}}">編輯</a>
          
        </td>
        <td>
          <form action="/post/{{$post->id}}" method="post">
              @csrf
              <input type="hidden" name="_method" value="delete">
              <!-- {{ method_field("delete")}} -->
              <input type="submit" value="刪除" onclick="return confirm('確認刪除？')">
          </form>
        </td>
      </tr>

    @endforeach
  </table>
  {{$posts->links()}}
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
        <tr>
            <th>postId</th>
            <th>Post title</th>
            <th>published at</th>
            <th>actions</th>
        <tr>
        </thead>
        @foreach($posts as $post)
        <tr>
            <td>{{$post->id}}</td>
            <td>{{$post->post_title}}</td>
            <td>{{$post->published_at}}</td>
            <td>
                <a href="{{ url('post/'. $post->id .'/edit') }}">edit</a>
            </td>
        </tr>
        @endforeach
        <tbody>
            
        </tbody>
    </table>

</body>
</html>
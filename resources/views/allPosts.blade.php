<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Data</title>
</head>
<body>
    <table>
        <tr>
            <th>id</th>
            <th>Name</th>
            <th>Description</th>
            <th>Edit</th>
        </tr>
        @foreach($posts as $post)
        <tr>
            <td>{{$post->id}}</td>
            <td>{{$post->name}}</td>
            <td>{{$post->description}}</td>
            <td><a href="/post/{{$post->id}}/update">Edit</a></td>
        </tr>
        @endforeach
    </table>
</body>
</html>
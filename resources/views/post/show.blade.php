<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="/post">Volver a posts</a>
    <h1>Titulo: {{$post->title}}</h1>
    <p>
        <b>Categoria:</b>{{$post->category}}
    </p>
    <p>
        {{$post->content}}
    </p>

    <a href="/post/{{$post->id}}/edit">
        Editar post
    </a>
    <form action="/post/{{$post->id}}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">
            Eliminar post
        </button>
    </form>
</body>
</html>
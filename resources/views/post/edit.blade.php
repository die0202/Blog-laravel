<x-app-layout>
    <h1>aqui formulario de los post</h1>

    <form action="/post/{{$post->id}}" method="POST">
        @csrf
        @method('PUT')

        <label for="">
            Titulo:
            <input type="text" name="title" value="{{$post->title}}">
        </label>
        <br>
        <br>
        <label for="">
            Categoria:
            <input type="text" name="category" value="{{$post->category}}">
        </label>
        <br>
        <br>
        <label>
            Cotenido:
            <textarea name="content">{{$post->content}}</textarea>
        </label>
        <br>
        <button type="submit">
            Actualizar post
        </button>
    </form>
</x-app-layout>
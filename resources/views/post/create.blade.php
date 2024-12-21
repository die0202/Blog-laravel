<x-app-layout>
    <h1>aqui formulario de los post</h1>

    <form action="/post" method="POST">
        @csrf
        <label for="">
            Titulo:
            <input type="text" name="title">
        </label>
        <br>
        <br>
        <label for="">
            Categoria:
            <input type="text" name="category">
        </label>
        <br>
        <br>
        <label>
            Cotenido:
            <textarea name="content" ></textarea>
        </label>
        <br>
        <button type="submit">
            crear post
        </button>
    </form>
</x-app-layout>


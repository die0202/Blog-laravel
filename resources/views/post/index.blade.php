<x-app-layout>
    <h1>aqui se muestran todos los posts</h1>

    <a href="/post/create">Nuevo Post</a>

    <ul>
        @foreach ($posts as $post)
            <li>
                <a href="/post/{{$post->id}}">
                    {{$post -> title}}
                </a>
        
            </li>
        
        @endforeach
    </ul>
        
</x-app-layout>
    

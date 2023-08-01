<x-layout title="Séries">
    <a href="/series/criar">Adicionar nova Série</a>

    <ul>
        @foreach ($series as $serie)
            <li>{{$serie}}</li>
        @endforeach
    </ul>
    <script>
        const series = {{Js::from($series)}};
    </script>
</x-layout>
{{-- Mensaje que sera mostrado en la view, este mensaje es definido en el controladorAdmin --}}
<h1>{{ $mensajeFacturacion }}</h1>
{{-- Redireccionamiento hacia la view welcome, que tiene el alias de 'Bienvenidos' , mediante el uso del route()--}}
<a href="{{ route('Bienvenidos') }}">Vamonos página principal</a>
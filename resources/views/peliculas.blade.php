
 @if (empty($arrayPeliculas))
   {{ 'No hay peliculas' }}
 @else
   @foreach ($arrayPeliculas as $pos => $unaPelicula)
     @if ($unaPelicula[1] > 8)
      {{ $unaPelicula[0] }} (Recomendada)<br>
    @else
      {{ $unaPelicula[0] }} <br>
    @endif
   @endforeach
 @endif

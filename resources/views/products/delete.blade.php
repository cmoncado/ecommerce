@auth
  <form  action="{{route('productos.destroy', $product->id)}}" method="post" onsubmit="return confirm('¿Estás seguro de eliminar este producto?')">
    <input type="submit" value="Eliminar producto" class="btn btn-danger">
    <input type="hidden" name="_method" value="delete" />
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
  </form>
@endauth

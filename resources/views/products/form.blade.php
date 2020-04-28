<form method="POST" action="{{route($product->url(), $product->id)}}">
   <input type="hidden" name="_method" value="{{$product->method()}}">
  @csrf
  <div class="form-group">
    <label for="title">Titulo del Producto</label>
    <input class="form-control" id="title" name="title" value= "{{$product->title}}">
  </div>
  <div class="form-group">
    <label for="description">Descripción del Producto</label>
    <textarea class="form-control" id="description" name="description" rows="3" >{{$product->description}}</textarea>
  </div>
  <div class="form-group">
    <label for="price">Precio del Producto</label>
    <input type="number" class="form-control" id="price" placeholder="0" name="price" value="{{$product->price}}">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@extends('layouts.app')

@section('content')
<div class="container">
  <!--  class container de bootstrap  -->
  <div class="card padding">
  <!-- card clase de bootstrap -->
    <header>
      <h4>Editar producto</h4>
      <p>{{ $product->title }}</p>
    </header>
    <div class="card-body">
            @include('products.form')
    </div>
  </div>
</div>
@endsection

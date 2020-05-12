<template>
  <div  class="col-xs-12 col-sm-10 col-md-4">
    <div class="card">
    <div class="card-header bg-primary padding">

    </div>
      <div class="card-body padding">
        <h2 class="card-title">{{product.title}}</h2>
      <h4 class="card-subtitle">{{product.humanPrice}}</h4>
        <p class="card-text">{{product.description}}</p>
      </div>
    </div>


  </div>
</template>

<script>
export default {
 props :{
    product: {
        type: Object

    }

 }


}
</script>

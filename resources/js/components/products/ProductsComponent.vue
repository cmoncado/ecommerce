<template>
  <section>
    <material-transition-group tag="div" class="row">
<product-card-component v-bind:product="product" :data-index="index" :key="product.id"
v-for="(product,index) in products"></product-card-component>
    </material-transition-group>

  </section>

</template>

<script>
export default {
  data(){
      return {
        name: 'Products component',
        products : [],
        endpoint: "/productos"

      }

  },
  created(){
      this.fetchProducts();

  }
  , methods: {
      fetchProducts() {
          axios.get(this.endpoint).then((response)=>{console.log(response.data.data);
              this.products = response.data.data;
          });


      }
  }
}
</script>

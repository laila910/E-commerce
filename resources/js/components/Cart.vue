<template>
    <div>
       <li class="nav-item">
          <a href="/checkout" class="btn btn-warning btn-sm ">
              Cart {{itemCount}}</a>
       </li>
    </div>
</template>

<script>
    export default {
        data(){
          return{
              itemCount:'',
          }
        },
        mounted() {
            // console.log('Component mounted.')
            this.$root.$on('changeInCart',(item)=>{
               this.itemCount =item;
            })
        },
        methods:{
         async getCartItemsOnPageLoad(){
              let response = await axios.post('/cart');
              this.itemCount = response.data.items;
            //   alert(this.itemCount);
        }
        },
        created(){
         this.getCartItemsOnPageLoad()
        }
    }
</script>

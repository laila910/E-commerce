<template>
    <div>
         <hr>
       <button class="btn btn-warning text-center" v-on:click.prevent="addProductToCart()">Add To Cart</button>
    </div>
</template>

<script>
import axios from "axios";

    export default {
        data(){
         return{
             
         }
        },
        props:['productId','userId'],
        methods:{
          async  addProductToCart(){
                //checking if user logged in 
            if(this.userId ==0){
                this.$toastr.e('You Need To Login, To add This product in cart');
                return; 
            }
            //If user is logged in , add Item to cart
            let response = await  axios.post('/cart',{
                'product_id': this.productId
            });
            // console.log(response.data);
            this.$root.$emit('changeInCart',response.data.items);
             }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>

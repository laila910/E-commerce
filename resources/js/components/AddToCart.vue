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
            console.log(response.data);
             }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>

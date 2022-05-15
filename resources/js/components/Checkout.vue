<template>
<div>
    <div class="container checkoutBox">
    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12">
            <div class="box">
                <h3 class="box-title">Products in your cart</h3>
                <div class="plan-selection" v-for="item in items" :key="item.id">
                    <div class="plan-data" v-if="item.name">
                        <input id="question1" name="question" type="radio" class="with-font" value="sel" />
                        <label for="question1">{{item.name}}</label>
                        <p class="plan-text">
                         Quantity: {{item.quantity}}    
                        </p>
                        <span class="plan-price">
                         Price: {{item.sale_price}}
                        </span>
                    </div>
                </div>
                
            </div>
            
        </div>
        <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
          
            <div class="widget">
                <h4 class="widget-title">Order Summary</h4>
                <div class="summary-block" v-for="summaryItem in items" :key="summaryItem.id">
                    <div class="summary-content" v-if="summaryItem.name">
                        <div class="summary-head"><h5 class="summary-title">{{summaryItem.name}}</h5></div>
                        <div class="summary-price">
                            <p class="summary-text">
                               
                                $ {{summaryItem.total}}
                            </p>
                            <span class="summary-small-text pull-right"> Q  {{summaryItem.quantity}} x 
                                P  {{summaryItem.sale_price}}</span>
                        </div>
                    </div>
                </div>
               
                <div class="summary-block">
                    <div class="summary-content">
                       <div class="summary-head"> <h5 class="summary-title">Total</h5></div>
                        <div class="summary-price">
                            <p class="summary-text"></p>
                            <span class="summary-small-text pull-right">{{items.totalAmount}}</span>
                        </div>
                        <div class="text-right">
                            <hr>
                            <button class="btn btn-warning">Place Order</button>
                        </div>
                    </div>
                </div>
            </div>
           
        </div>
    </div>
</div>
</div>
</template>
<script>
export default{
    data(){
        return{
         items: [],
        }
    },
    methods:{
    async getCartItems(){
         let response = await  axios.get('/checkout/get/items');
         this.items =response.data;
         console.log(this.items);
     }
    },
    created(){
     this.getCartItems();
    }
}
</script>
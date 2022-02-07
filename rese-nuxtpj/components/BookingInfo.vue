<template>
  <div>
    <section class="booking_card" :booking="booking" :index="index">
      <span>予約{{index+1}}</span>
      <img @click="cancelBooking(booking.id)" class="close-btn" src="~assets/images/close.png">
        <table>
          <tr>
            <th>Shop</th>
            <td>{{booking.shop.name}}</td>
          </tr>
          <tr>
            <th>Date</th>
            <td>{{booking.date}}</td>
          </tr>
          <tr>
            <th>Time</th>
            <td>{{booking.time|formatTime}}</td>
          </tr>
          <tr>
            <th>Number</th>
            <td>{{booking.number_of_people}}人</td>
          </tr>
        </table>
      </section>
  </div>
</template>

<script>
export default {
  props:{
    booking:{
      type:Object
    },
    index:{
      type:Number
    }
  },
  filters:{
    formatTime(time){
      return time.slice(0, -3);
    }
  },
  methods:{
    async cancelBooking(id){
      await this.$axios.delete('api/booking/' + id);
      await this.$store.dispatch('getMyBookings');
    }
  }
}
</script>

<style>
  .booking_card{
    width:60%;
    color:white;
    border-radius:5px;
    background-color:royalblue;
    padding:5px 10px;
    margin-bottom:20px;
    position:relative;
  }
  .booking_card span{
    font-size:20px;
    line-height:1.5em;
  }
  .booking_card table{
    color:white;
    font-size:20px;
    padding:10px;
  }
  .booking_card th{
    text-align:left;
    padding-right:20px;
  }

  .favorite-shop_cards{
    display:flex;
    flex-wrap:wrap;
    position:relative;
  }
  .card{
    border-radius:5px;
    overflow:hidden;
    background-color:white;
    box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.3);
    margin:10px 5px;
    width:45%;
    position:relative;
  }
  .card-content{
    padding:10px 20px;
  }
  .favorite-shops{
    width:50%;
  }
  .card-img{
    max-width:100%;
    height:auto;
  }
  .card-name{
    font-weight:bold;
    font-size:18px;
    margin: 10px 0;
  }
  .card-content span{
    font-size:15px;
  }
  .card-detail{
    display:inline-block;
    width:100px;
    font-size:15px;
    padding:7px 5px;
    margin-top:20px;
    text-align:center;
    text-decoration:none;
    background:royalblue;
    color:white;
    border-radius:5px;
  }
  .fav-btn{
    width:35px;
    display:inline-block;
    position:absolute;
    bottom:5;
    right:5;
  }
  .close-btn{
    height:23px;
    position:absolute;
    top:10%;
    right:5%;
  }
</style>
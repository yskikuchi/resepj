<template>
  <div>
    <section class="booking_card" :booking="booking" :index="index">
      <span>予約{{index+1}}</span>
      <img @click="cancelBooking(booking.id, index+1)" class="close-btn" src="~assets/images/close.png">
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
        <NuxtLink class="change-booking" :to="{path:'bookings/' + booking.id}">日時、人数を変更する</NuxtLink>
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
    async cancelBooking(id, index){
      if(confirm('予約'+index +'を削除してよろしいですか？')){
        await this.$axios.delete('api/booking/' + id);
        await this.$store.dispatch('getMyBookings');
      }
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
    padding:5px 20px 5px 0;
  }

  .close-btn{
    height:23px;
    position:absolute;
    top:10%;
    right:5%;
  }
  .change-booking{
    display: block;
    color: white;
    padding:10px;
  }
</style>
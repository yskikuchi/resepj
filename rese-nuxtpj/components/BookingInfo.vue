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
        <button class="qr-btn" @click="toggleIsShowQR">QRコードを表示</button>
        <div class="qrcode-wrapper" v-show="isShowQR">
          <div class="qrcode-content">
            <p>こちらのQRコードを従業員にお見せください</p>
            <img :src="qrcode" alt="QRcode">
            <button class="qr-close" @click="toggleIsShowQR">閉じる</button>
          </div>
        </div>
    </section>
  </div>
</template>

<script>
const QRCode = require('qrcode');

export default {
  props:{
    booking:{
      type:Object
    },
    index:{
      type:Number
    }
  },
  data(){
    return{
      isShowQR:false,
      qrcode:"",
    }
  },
  filters:{
    formatTime(time){
      return time.slice(0, -3);
    }
  },
  mounted(){
    QRCode.toDataURL(this.$config.apiURL + '/admin/booking/' + this.booking.id, (e, url)=>{
      if(e){
        throw e
      }
      this.qrcode = url;
    })
  },
  methods:{
    async cancelBooking(id, index){
      if(confirm('予約'+index +'を削除してよろしいですか？')){
        await this.$axios.delete('api/booking/' + id);
        await this.$store.dispatch('getMyBookings');
      }
    },
    toggleIsShowQR: function(){
      this.isShowQR = !this.isShowQR;
    },
  }
}
</script>

<style>
  .booking_card{
    width:55%;
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
    font-size:1em;
    padding:10px;
  }
  .booking_card th{
    text-align:left;
    padding:5px 20px 5px 0;
  }

  .close-btn{
    height:15%;
    position:absolute;
    top:10%;
    right:5%;
  }
  .change-booking{
    display: inline-block;
    color: white;
    padding:10px;
  }
  .qr-btn{
    background-color: inherit;
    border:none;
    color:white;
    display: block;
    font-size:15px;
  }
  .qrcode-wrapper{
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: white;
      z-index:9;
  }
  .qrcode-content{
    width:70%;
    margin:0 auto;
    color:black;
    text-align: center;
  }
  .qr-close{
    display: block;
    margin:0 auto;
  }
  @media screen and (max-width: 768px) {
    .booking_card{
      width:90%;
    }
  }

</style>
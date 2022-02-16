<template>
  <div>
    <p class="user-name">{{$auth.user.name}}さん</p>
    <div class="mypage_wrapper">
      <div class="booking-list">
        <h2>予約状況</h2>
        <NuxtLink class="past-booking" to="/history">( &gt;過去の予約はこちら )</NuxtLink>
        <BookingInfo v-for="(booking, index) in $store.getters.getValidBookings" :key="booking.id" :booking="booking" :index="index"></BookingInfo>
      </div>
      <div class="favorite-shops">
        <h2>お気に入り店舗</h2>
        <div class="card-wrapper">
          <Shop v-for="shop in shops" :key="shop.id" :shop="shop" :width="width" @changeFav="getFavoriteShops"/>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data(){
    return{
      width:45,
      shops:[],
    }
  },
  async mounted(){
    await this.$store.dispatch('getMyBookings');
    this.getFavoriteShops();
  },
  methods:{
    async getFavoriteShops(){
      const favoriteData = await this.$axios.get('/api/favorite');
      this.shops = favoriteData.data.data;
    }
  }
}
</script>

<style>
  .mypage_wrapper{
    display:flex;
    margin:0 auto;
    justify-content:center;
    margin-top:30px;
  }
  .user-name{
    font-size:30px;
    font-weight:bold;
    text-align:center;
    position:absolute;
    top:5%;
    left:50%;
  }
  .past-booking{
    margin-bottom: 10px;
    display: block;
    color:black;
  }
  .booking-list{
    width:50%;
    margin:0 auto;
  }
  .booking-list h2, .favorite-shops h2{
    font-size:25px;
    margin-bottom:20px;
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
</style>

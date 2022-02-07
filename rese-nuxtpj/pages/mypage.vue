<template>
  <div>
    <p class="user-name">{{$auth.user.name}}さん</p>
    <div class="mypage_wrapper">
      <div class="booking-list">
        <h2>予約状況</h2>
        <BookingInfo v-for="(booking, index) in $store.state.myBookings" :key="booking.id" :booking="booking" :index="index"></BookingInfo>
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
  .booking-list{
    width:50%;
    margin:0 auto;
  }
  .booking-list h2, .favorite-shops h2{
    font-size:25px;
    margin-bottom:20px;
  }
</style>

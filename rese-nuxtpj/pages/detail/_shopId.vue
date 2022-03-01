<template>
<div>
  <div class="detail-wrapper">
    <div class="shop-detail">
      <p class="shop-name">
        <span class="back-btn"><a @click="$router.back()">&lt;</a></span>
        {{shop.name}}
      </p>
      <img class="shop-detail_img" :src="image">
      <div class="shop-tag">
        <span>&#035;{{shop.area}}</span>
        <span>&#035;{{shop.genre}}</span>
      </div>
      <NuxtLink :to="{path:'/photo/' + shop.id}" replace>→店舗写真を見る</NuxtLink>
      <p class="shop-intro">{{shop.detail}}</p>
    </div>
    <div class="booking-form">
        <p class="booking-ttl">予約</p>
        <input type="date" name="date" v-model="date" :min="fromDate" :max="untilDate" required>
        <p class="error">{{errors.date}}</p>
        <p class="error">{{errors.hasOtherBooking}}</p>
        <p class="error">{{errors.remainingSeats}}</p>
        <select name="time" v-model="time" id="time">
          <option v-for="time in timeList" :key="time" :value="time">{{time}}</option>
        </select>
        <select name="number_of_people" v-model="number" id="number">
          <option v-for="number in numberList" :key="number" :value="number">{{number}}</option>
        </select>
        <table class="booking-table">
          <tr>
            <th>Shop</th>
            <td>{{shop.name}}</td>
          </tr>
          <tr>
            <th>Date</th>
            <td>{{date}}</td>
          </tr>
          <tr>
            <th>Time</th>
            <td>{{time}}</td>
          </tr>
          <tr>
            <th>Number</th>
            <td>{{number}}</td>
          </tr>
        </table>
        <button class="booking-btn" @click="book">予約する</button>
    </div>
  </div>
  <div class="review-wrapper">
    <h2>口コミ</h2>
    <p class="review-no-exist" v-if="!reviews.length">このお店の口コミはまだありません。</p>
    <Review class="review-item" v-for="review in reviews" :key="review.id" :review="review"></Review>
  </div>
</div>
</template>

<script>
export default {
  data(){
    return{
      errors:{
        date:"",
        number:"",
        hasOtherBooking:"",
        remainingSeats:"",
      },
      shop:"",
      image:"",
      reviews:"",
      timeList:[],
      numberList:[],
      fromDate:"",
      untilDate:"",
      date:"",
      time:"11:00",
      number:"1人",
    }
  },
  async created(){
    const resData = await this.$axios.get('/api/shops/' + this.$route.params.shopId);
    this.shop = resData.data.data;
    this.image = this.$config.apiURL + '/' + this.shop.images[0].path;
    this.reviews = this.shop.reviews;

    //日付の選択肢を翌日〜１ヶ月後に制限
    const tomorrow = new Date();
    const oneMonthLater = new Date();
    tomorrow.setDate(tomorrow.getDate()+1);
    oneMonthLater.setMonth(oneMonthLater.getMonth()+1);
    this.fromDate = tomorrow.toISOString().slice(0,10);
    this.untilDate = oneMonthLater.toISOString().slice(0,10);

    //予約時間、人数の選択肢を表示
    for(let i = 11; i <= 21 ;i++){
      let time1 = i + ':00';
      this.timeList.push(time1);
      let time2 = i + ':30';
      this.timeList.push(time2);
      }
    for(let i = 1; i <= this.shop.number_of_seats ;i++){
      let number = i + '人';
      this.numberList.push(number);
    }
  },
  methods:{
    async book(){
      try{
        Object.keys(this.errors).forEach((key) =>{
          this.errors[key] = "";
        })
        const sendData={
          user_id:this.$auth.user.id,
          shop_id:this.shop.id,
          date:this.date,
          time:this.time,
          number_of_people:this.number.slice(0, -1),
        };
        if(confirm('この内容で予約してよろしいですか？')){
          await this.$axios.post("/api/booking",sendData);
          this.$router.push('/done');
        }
      }catch(e){
        console.log(e.response.data.errors);
        const resData = e.response.data;
        Object.keys(resData.errors).forEach((key) =>{
          this.errors[key] = resData.errors[key][0];
        })
      }
    }
  },
  filters:{
    imagePathFormat:function(path, apiUrl){
      return apiUrl + '/' + path;
    }
  }
}
</script>

<style>
  .detail-wrapper{
    display:flex;
    justify-content:space-around;
    margin-bottom:50px;
  }
  .shop-detail{
    width:40%;
  }
  .back-btn{
    display:inline-block;
    width:20px;
    background-color:white;
    box-shadow: 3px 3px 3px rgba(0, 0, 0, 0.3);

  }
  .back-btn a{
    text-decoration:none;
  }
  .shop-name{
    font-size:25px;
    margin-bottom:20px;
  }
  .shop-detail_img{
    width:100%;
    height:auto;
  }
  .shop-tag{
    margin:10px 1px 20px 5px;
  }
  .shop-intro{
    font-size: 1em;
    line-height: 1.5rem;
    margin-top:10px;
  }
  .booking-form{
    width:40%;
    background-color:royalblue;
    color:white;
    position:relative;
    padding:0 20px;
    border-radius:10px;
    overflow:hidden;
  }
  .booking-form input, .booking-form select{
    display:block;
    height:30px;
    margin-bottom:10px;
  }
  .booking-form input{
    width:200px;
  }
  .booking-form select{
    width:80%;
  }
  .booking-ttl{
    font-size:25px;
    margin:20px 0;
  }
  .booking-table{
    color:white;
    background-color:#75A9FF;
    width:80%;
    margin:50px auto 70px;
  }
  .booking-table th, .booking-table td{
    padding:10px;
    font-size: 1em;
  }
  .booking-table th{
    width:30%;
    text-align: left;
  }
  .booking-btn{
    width: 100%;
    height:50px;
    border:none;
    background-color:blue;
    color:white;
    position:absolute;
    bottom:0;
    left:0;
    cursor:pointer;
  }
  .error{
    font-size:15px;
    color:rgb(250, 15, 66);
    margin-bottom:5px;
  }
  .review-wrapper{
    margin:0 auto;
    width:90%;
  }
  .review-wrapper h2{
    font-size: 30px;
    margin:20px 0;
  }
  .review-no-exist{
    font-size:1em;
  }
  .review-item{
    width:90%;
    margin:0 auto;
    border:1px solid rgb(173, 172, 172);
    border-top:none;
  }
  .review-item:first-of-type{
    border-top:1px solid rgb(173, 172, 172);
  }
  @media screen and (max-width: 768px) {
    .detail-wrapper{
      flex-direction: column;
    }
    .shop-detail{
      width:90%;
      margin-bottom: 10px;
    }
    .booking-form{
      width:90%;
    }
    .booking-table{
    width:80%;
    margin:30px auto 50px;
    }
    .booking-btn{
    height:30px;
    }
  }
</style>
<template>
  <div>
    <section class="booking_card" v-for="booking in $store.getters.getPastBookings" :key="booking.id">
      <!-- <span>予約{{index+1}}</span> -->
      <!-- <img @click="cancelBooking(booking.id, index+1)" class="close-btn" src="~assets/images/close.png"> -->
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
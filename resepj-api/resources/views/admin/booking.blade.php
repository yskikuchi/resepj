@extends('layouts.default')

@section('content')
  <h3 class="admin-ttl">「{{$shop -> name}}」の予約一覧</h3>

  @if($bookings->isEmpty())

  <p>現在予約はありません</p>

  @else
  <table class="admin-booking-list">
    <tr>
      <th>日にち</th>
      <th>時間</th>
      <th>人数</th>
      <th>予約者名</th>
      <th>メールアドレス</th>
      <th>電話番号</th>
    </tr>
    @foreach($bookings as $booking)
    <tr>
      <td>{{$booking->date}}</td>
      <td>{{$booking->time}}</td>
      <td>{{$booking->number_of_people}}</td>
      <td>{{$booking->user->name}}</td>
      <td>{{$booking->user->email}}</td>
      <td>{{$booking->user->tel}}</td>
    </tr>
    @endforeach
  </table>
  @endif
@endsection

<script>

</script>

<style>
  .admin-booking-list{
    text-align:center;
  }
  .admin-booking-list th{
    padding:10px;
    font-size:20px;
  }
  .admin-booking-list td{
    padding:10px;
  }
</style>
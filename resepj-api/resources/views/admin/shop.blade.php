@extends('layouts.default')

@section('content')
<h2 class="admin-ttl">店舗情報の変更</h2>

<p>修正箇所を入力後、「変更する」のボタンを押してください。</p>

<form method="POST" action="/admin/shop">
  @csrf
  <input name="id" type="hidden" value="{{$shop->id}}">
  <table>
    <tr>
      <th><label for="name">店名</label></th>
      <td><input name="name" type="name" value="{{$shop->name}}"></td>
    </tr>
    <tr>
      <th><label for="detail">概要</label></th>
      <td><textarea name="detail" cols="50" rows="10">{{$shop->detail}}</textarea></td>
    </tr>
    <tr>
      <th><label for="number_of_seats">席数</label></th>
      <td><input name="number_of_seats" type="text" value="{{$shop->number_of_seats}}"></td>
    </tr>
  </table>
  <button>変更する</button>
</form>
<a href="/admin/dashboard">管理画面トップへ</a>

@endsection
@extends('layouts.default')

@section('content')


<h2 class="admin-ttl">管理画面</h2>
<p>管理者：{{Auth::guard('admin')->user()->name ?? '' }}</p>
<form method="POST" action="/director">
@csrf
  <h3>店舗代表者を追加</h3>
  <table>
    <tr>
      <td>
        <label for="name">氏名</label>
      </td>
      <td>
        <input name="name" type="text">
      </td>
    </tr>
    <tr>
      <td>
        <label for="email">メールアドレス</label>
      </td>
      <td>
        <input name="email" type="email">
      </td>
    </tr>
    <tr>
      <td>
        <label for="password">パスワード</label>
      </td>
      <td>
        <input name="password" type="text">
      </td>
    </tr>
  </table>
  <button>店舗代表者を追加</button>
</form>

<form method="POST" action="/admin/logout">
  @csrf
  <button>ログアウト</button>
</form>

@endsection

<style>
  .admin-ttl{
    font-size:30px;
    margin:20px;
  }
</style>
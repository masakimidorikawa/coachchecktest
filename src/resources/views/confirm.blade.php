@extends('layouts.app')

@section('content')
<div class="confirm__content">
  <h2>確認画面</h2>
  <table border="1" cellpadding="8">
    <tr><th>名前</th><td>{{ $contact->last_name }} {{ $contact->first_name }}</td></tr>
    <tr><th>性別</th><td>{{ $contact->gender }}</td></tr>
    <tr><th>メール</th><td>{{ $contact->email }}</td></tr>
    <tr><th>電話番号</th><td>{{ $contact->tel }}</td></tr>
    <tr><th>住所</th><td>{{ $contact->address }}</td></tr>
    <tr><th>種類</th><td>{{ $contact->type }}</td></tr>
    <tr><th>内容</th><td>{{ $contact->content }}</td></tr>
  </table>

  <form method="POST" action="{{ route('contacts.send') }}">
    @csrf
    <button type="submit">送信する</button>
  </form>


  <form method="get" action="{{ route('contacts.index') }}">
    <button type="submit">修正</button>
  </form>
</div>
@endsection




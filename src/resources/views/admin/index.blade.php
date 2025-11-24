@extends('layouts.app') <!-- 管理画面用レイアウト -->

@section('content')
<h2>お問い合わせ一覧</h2>

<!-- 🔍 ここに検索フォームを追加 -->
<form method="GET" action="{{ route('admin.contacts.index') }}">
  <input type="text" name="keyword" placeholder="名前・メールで検索" value="{{ request('keyword') }}">
  
  <select name="gender">
    <option value="">性別を選択</option>
    <option value="男性" {{ request('gender') == '男性' ? 'selected' : '' }}>男性</option>
    <option value="女性" {{ request('gender') == '女性' ? 'selected' : '' }}>女性</option>
    <option value="その他" {{ request('gender') == 'その他' ? 'selected' : '' }}>その他</option>
  </select>

  <select name="type">
    <option value="">お問い合わせの種類</option>
    <option value="商品について" {{ request('type') == '商品について' ? 'selected' : '' }}>商品について</option>
    <option value="交換・返品" {{ request('type') == '交換・返品' ? 'selected' : '' }}>交換・返品</option>
    <option value="その他" {{ request('type') == 'その他' ? 'selected' : '' }}>その他</option>
  </select>

  <input type="date" name="date" value="{{ request('date') }}">

  <button type="submit">検索</button>
  <a href="{{ route('admin.contacts.index') }}">リセット</a>
</form>

<!-- 📋 ここから一覧テーブル -->
<table>
  <thead>
    <tr>
      <th>お名前</th>
      <th>性別</th>
      <th>メールアドレス</th>
      <th>お問い合わせの種類</th>
      <th>詳細</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($contacts as $contact)
      <tr>
        <td>{{ $contact->last_name }} {{ $contact->first_name }}</td>
        <td>{{ $contact->gender }}</td>
        <td>{{ $contact->email }}</td>
        <td>{{ $contact->type }}</td>
        <td><a href="{{ route('admin.contacts.show', $contact->id) }}">詳細</a></td>
      </tr>
    @endforeach
  </tbody>
</table>
<a href="{{ route('admin.contacts.export') }}">CSVエクスポート</a>


{{ $contacts->links() }}
@endsection

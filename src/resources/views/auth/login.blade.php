@extends('layouts.app')

@section('content')
<div class="login__content">
  <h2>ログイン</h2>
  <form method="POST" action="{{ route('login.post') }}">
    @csrf
    <div>
      <label for="email">メールアドレス</label>
      <input type="email" name="email" value="{{ old('email') }}" required>
      @error('email')
        <div class="error">{{ $message }}</div>
      @enderror
    </div>

    <div>
      <label for="password">パスワード</label>
      <input type="password" name="password" required>
      @error('password')
        <div class="error">{{ $message }}</div>
      @enderror
    </div>

    <button type="submit">ログイン</button>
  </form>
</div>

{{-- ログイン画面へ移動するボタン --}}
<a href="{{ route('register') }}">
    <button type="button">登録画面へ</button>
</a>
@endsection
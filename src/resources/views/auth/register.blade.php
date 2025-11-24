@extends('layouts.app')

@section('content')
<h2>ユーザー登録</h2>

<form method="POST" action="{{ route('register.post') }}">
    @csrf

    <div>
        <label for="name">名前</label>
        <input type="text" name="name" value="{{ old('name') }}">
        @error('name') 
        <div class="error">名前を入力してください</div>
        @enderror
    </div>

    <div>
        <label for="email">メールアドレス</label>
        <input type="email" name="email" value="{{ old('email') }}">
        @error('email')
        <div class="error">メールアドレスを入力してください</div>
        @enderror
    </div>

    <div>
        <label for="password">パスワード</label>
        <input type="password" name="password">
        @error('password')
<div class="error">パスワードを入力してください</div>
@enderror
    </div>

    <button type="submit">登録</button>
</form>

{{-- ログイン画面へ移動するボタン --}}
<a href="{{ route('login') }}" class="btn btn-secondary">ログイン画面へ</a>

@endsection
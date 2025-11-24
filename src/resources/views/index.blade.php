@extends('layouts.app')

@section('content')
<div class="contact-form__content">
  <h2>Contact</h2>
  <form method="POST" action="{{ route('contacts.confirm') }}">
    @csrf

    {{-- お名前 --}}
    <div class="form__group name-fields">
      <label>お名前 ※</label>
      <input type="text" name="last_name" placeholder="姓 山田" value="{{ old('last_name') }}">
      <input type="text" name="first_name" placeholder="名 太郎" value="{{ old('first_name') }}">
@error('last_name')
    <div class="error">性を入力してください</div>
  @enderror
  @error('first_name')
    <div class="error">名を入力してください</div>
  @enderror


    </div>


    {{-- 性別 --}}
    <div class="form__group">
      <label>性別 ※</label>
      <label><input type="radio" name="gender" value="男性"> 男性</label>
      <label><input type="radio" name="gender" value="女性"> 女性</label>
      <label><input type="radio" name="gender" value="その他"> その他</label>
        @error('gender')
    <div class="error">性別を選択してください</div>
  @enderror

    </div>

    {{-- メールアドレス --}}
    <div class="form__group">
      <label>メールアドレス ※</label>
      <input type="email" name="email" placeholder="例 test@example.com" value="{{ old('email') }}">
        @error('email')
    <div class="error">メールアドレスを入力してください</div>
  @enderror

    </div>

    {{-- 電話番号 --}}
    <div class="form__group">
      <label>電話番号 ※</label>
      <input type="tel" name="tel" placeholder="例 080-1234-5678" value="{{ old('tel') }}">
        @error('tel')
    <div class="error">電話番号を入力してください</div>
  @enderror

    </div>

    {{-- 住所 --}}
    <div class="form__group">
      <label>住所 ※</label>
      <input type="text" name="address" placeholder="例 東京都港区芝下町9-3-3" value="{{ old('address') }}">
        @error('address')
    <div class="error">住所を入力してください</div>
  @enderror

    </div>

    {{-- 建物名 --}}
    <div class="form__group">
      <label>建物名</label>
      <input type="text" name="building" placeholder="例 千枝々谷マンション215" value="{{ old('building') }}">
    </div>

    {{-- お問い合わせの種類 --}}
    <div class="form__group">
      <label>お問い合わせの種類 ※</label>
      <select name="type">
        <option value="">選択してください</option>
        <option value="商品について">商品について</option>
        <option value="交換・返品">交換・返品</option>
        <option value="その他">その他</option>
      </select>
    </div>
      @error('type')
    <div class="error">お問い合わせ内容を選択してください</div>
  @enderror


    {{-- お問い合わせ内容 --}}
    <div class="form__group">
      <label>お問い合わせ内容 ※</label>
      <textarea name="content" placeholder="お問い合わせ内容をご記載ください" maxlength="120">{{ old('content') }}</textarea>
    </div>
    @error('content')
    <div class="error">お問い合わせ内容を入力してください</div>
  @enderror
    <button type="submit">確認画面</button>
  </form>
</div>

@endsection
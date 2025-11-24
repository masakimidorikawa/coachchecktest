@extends('layouts.app')

@section('content')
<div class="contact-thanks__content">
  <h2>お問い合わせありがとうございました</h2>


  <div class="form__button">
    <a href="{{ route('contact.index') }}" class="form__button-submit">HOME</a>
  </div>
</div>
@endsection

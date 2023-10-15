@extends('layouts.app')

@section('css')
  <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
@endsection

@section('content')

<div class="contact-form__content">
  <div class="contact-form__heading">
    <h2>お問い合わせ</h2>
  </div>

  <form class="form" action="/contacts/confirm" method="post">
  @csrf
    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">お名前</span>
        <span class="form__label--required">※</span>
      </div>
      <div class="form__group-content">
        <div class="form__group-content--box1">
          <div class="form__input--text1">
            <input type="text" name="name1" value="{{ old('name1') }}" />
          </div>
          <div class="form__error">
            <span class="form__error--before"> 例) 山田</span>
            <span class="form__error--after">
            @error('name1')
            {{ $message }}
            @enderror
            </span>
          </div>
        </div>
        <div class="form__group-content--box2">
          <div class="form__input--text2">
            <input type="text" name="name2" value="{{ old('name2') }}" />
          </div>
          <div class="form__error">
            <span class="form__error--before"> 例) 太郎</span>
            <span class="form__error--after">
            @error('name2')
            {{ $message }}
            @enderror
            </span>
          </div>
        </div>
      </div>
    </div>

    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">性別</span>
        <span class="form__label--required">※</span>
      </div>
      <div class="form__group-content">
        <div class="form__group-gender">
          <div class="form__input--man">
            <input type="radio" id="option1" name="gender" value="1" {{ old('gender') == "1" ? 'checked' : '' }} checked>
            <label for="option1">男性</label><br>
          </div>
          <div class="form__input--woman">
            <input type="radio" id="option2" name="gender" value="2" {{ old('gender') == "2" ? 'checked' : '' }} /">
            <label for="option2">女性</label><br>
          </div>
        </div>
      </div>
    </div>

    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">メールアドレス</span>
        <span class="form__label--required">※</span>
      </div>
      <div class="form__group-content">
        <div class="form__group-content--box3">
          <div class="form__input--text">
            <input type="email" name="email" value="{{ old('email') }}" />
          </div>
          <div class="form__error">
            <span class="form__error--before"> 例) test@example.com</span>
            <span class="form__error--after">
            @error('email')
            {{ $message }}
            @enderror
            </span>
          </div>
        </div>
      </div>
    </div>

    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">郵便番号</span>
        <span class="form__label--required">※</span>
      </div>
      <div class="form__group-content">
        <div class="form__group-content--box4">
          <span class="form__label--required2">〒</span>
        </div>
        <div class="form__group-content--box5">
          <div class="form__input--text3">
            <input type="text" name="postcode" pattern="\d{3}-\d{4}" value="{{ old('postcode') }}" />
          </div>
          <div class="form__error">
            <span class="form__error--before"> 例) 123-4567</span>
            <span class="form__error--after">
            @error('postcode')
            {{ $message }}
            @enderror
            </span>
          </div>
        </div>
      </div>
    </div>

    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">住所</span>
        <span class="form__label--required">※</span>
      </div>
    <div class="form__group-content">
      <div class="form__group-content--box6">
        <div class="form__input--text">
          <input type="text" name="address" value="{{ old('address') }}" />
        </div>
        <div class="form__error">
          <span class="form__error--before"> 例) 東京都渋谷区千駄ヶ谷1-2-3</span>
            <span class="form__error--after">
            @error('address')
            {{ $message }}
            @enderror
            </span>
          </div>
        </div>
      </div>
    </div>

    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">建物名</span>
      </div>
      <div class="form__group-content">
        <div class="form__group-content--box7">
          <div class="form__input--text">
            <input type="text" name="building_name" value="{{ old('building_name') }}" />
          </div>
          <div class="form__error">
            <span class="form__error--before"> 例) 千駄ヶ谷マンション101</span>
          </div>
        </div>
      </div>
    </div>

    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">ご意見</span>
        <span class="form__label--required">※</span>
      </div>
      <div class="form__group-content">
        <div class="form__group-content--box8">
          <div class="form__input--textarea">
            <textarea type="text" name="opinion">{{ old('opinion') }}</textarea>
          </div>
          <div class="form__error">
            <span class="form__error--before"></span>
            <span class="form__error--after">
            @error('opinion')
            {{ $message }}
            @enderror
            </span>
          </div>
        </div>
      </div>
    </div>
    <div class="form__button">
      <button class="form__button-submit" type="submit">送信</button>
    </div>
  </form>
</div>
@endsection
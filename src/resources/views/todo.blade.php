@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/todo.css') }}">
@endsection

@section('content')
<div class="todo__content">
  <div class="section__title">
    <h2>管理システム</h2>
  </div>

  <form class="form" action="" method="post">
  @csrf
    <div class="create-form">
      <div class="create-form__item">
        <span class="create-form__item-text">お名前</span>
        <div class="create-form__item-input">
          <input type="text" name="fullname"  value="{{ old('fullname') }}" />
        </div>
        <span class="form__label--item-input">性別</span>
        <div class="create-form__item-gender">
          <div class="create-form__item-gender-box">
            <input type="radio" id="option0" name="gender" value="0" checked>
            <label for="option1">全て</label><br>
          </div>
          <div class="create-form__item-gender-box">
            <input type="radio" id="option1" name="gender" value="1">
            <label for="option1">男性</label><br>
          </div>
          <div class="create-form__item-gender-box">
            <input type="radio" id="option2" name="gender" value="2">
            <label for="option2">女性</label><br>
          </div>
        </div>
      </div>

      <div class="create-form__item">
        <span class="create-form__item-text">登録日</span>
        <div class="create-form__item-input">
          <input type="text" name="created_at"  value="{{ old('created_at') }}" />
        </div>
        <span class="form__label--item-input">~</span>
        <div class="create-form__item-input">
          <input type="text" name="created_at"  value="{{ old('created_at') }}" />
        </div>
      </div>
      <div class="create-form__item">
        <span class="create-form__item-text">メールアドレス</span>
        <div class="create-form__item-input">
          <input type="text" name="email"  value="{{ old('email') }}" />
        </div>
      </div>
      <div class="create-form__button">
        <div class="create-form__button-box">
          <button class="create-form__button-submit">検索</button>
        </div>
      </div>
      <div class="create-form__reset">
        <a class="create-form__reset-text" href="">リセット</a>
      </div>
    </div>
  </form>

  <div class="section__page">
    <div class="section__page-text"><input value="全 件中 件"></div>
    <div class="section__page-text"><input value="ページネーション"></div>
  </div>
  <div class="todo-table">
    <table class="todo-table">
      <tr class="todo-table__row">
        <th class="todo-table__header">
          <span class="todo-table__header-span">aa</span>
          <span class="todo-table__header-span">aa</span>
          <span class="todo-table__header-span">aa</span>
          <span class="todo-table__header-span">aa</span>
          <span class="todo-table__header-span">aa</span>
        </th>
      </tr>
      @foreach ($todos as $todo)
      <tr class="todo-table__row">
        <td class="todo-table__item">
          <form class="update-form__item">
          @method('PATCH')
          @csrf
            <div class="update-form__item-input">
              <input class="update-form__item-input" name="id" value="{{ old('id') }}" />
              <input class="update-form__item-input" name="fullname" value="{{ old('fullname') }}" />
              <input class="update-form__item-input" name="gender" value="{{ old('gender') }}" />
              <input class="update-form__item-input" name="email" value="{{ old('email') }}" />
              <input class="update-form__item-input" name="opinion" value="{{ old('opinion') }}" />
            </div>
          </form>
        </td>
        <td class=todo-table__item>
          <form class="delete-form" action="/todos/delete" method="post">
          @method('DELETE')
          @csrf
            <div class="delete-form__button">
              <button class="delete-form__button-submit">削除</button>
            </div>
          </form>
        </td>
      </tr>
    @endforeach
    </table>
  </div>
</div>
@endsection
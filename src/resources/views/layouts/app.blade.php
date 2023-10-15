<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Form</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/common.css') }}" />
  @yield('css') <!--ここにそれぞれのbladeデータのcssリンクを入れる-->
</head>

<body>
  <header class="header">
    <div class="header__inner">
      <a class="header__logo" href="/">
        お問い合わせ
      </a>
      <a class="header__logo" href="/todo">
        管理システム
      </a>
    </div>
  </header>

  <main>
    @yield('content') <!--ここにそれぞれのbladeデータの表示データhtmlを入れる-->
  </main>
</body>

</html>
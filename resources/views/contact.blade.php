<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="{{ asset('css/reset.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
  <script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
  @livewireStyles
</head>
<body>
  <div class="contact">
    <h1 class="contact__title">お問い合わせ</h1>
  </div>
  @livewire('validation')

  @livewireScripts
</body>
</html>


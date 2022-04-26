<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="{{ asset('css/reset.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/confirm.css') }}" />
</head>
<body>
    <div class="confirm">
    <h1 class="confirm__title">内容確認</h1>
  </div>
  <form action="process" method="post">
    <table>
      @csrf
      <tr>
        <th>お名前</th>
        <td class="confirm__table__name">
          <input type="text" name="fullname" value="{{ $inputs['lastName'] }} {{ $inputs['firstName'] }}">
        </td>
      </tr>
      <tr>
        <th>性別</th>
        <td>
          @if( $inputs['gender'] == "1")
          <p class="confirm__gender__man">男性</p>
          <input class="confirm__table__gender__man" type="hidden" name="gender" value="1">
          @else
          <p class="confirm__gender__woman">女性</p>
          <input class="confirm__table__gender__man" type="hidden" name="gender" value="2">
          @endif
        </td>
      </tr>
      <tr>
        <th>メールアドレス</th>
        <td>
          <input type="email" name="email" value="{{ $inputs['email'] }}">
        </td>
      </tr>
      <tr>
        <th>郵便番号</th>
        <td>
          <input type="text" name="postcode" value="{{ $inputs['postcode'] }}">
        </td>
      </tr>
      <tr>
        <th>住所</th>
        <td>
          <input type="text" name="address" value="{{ $inputs['address'] }}">
        </td>
      </tr>
      <tr>
        <th>建物名</th>
        <td>
          <input type="text" name="building_name" value="{{ $inputs['building_name'] }}">
        </td>
      </tr>
      <tr>
        <th class="confirm__table__header__opinion">ご意見</th>
        <td>
          <input name="opinion" value="{{ $inputs['opinion'] }}">
        </td>
      </tr>
    </table>
    <div class="confirm__submit">
      <button type="submit" name="action" value="submit" class="confirm__submit__btn">送信</button>
      <button type="submit" name="action" value="return" class="confirm__return__btn">修正する</button>
    </div>
  </form>
</body>
</html>
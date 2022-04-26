<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="{{ asset('css/reset.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/client.css') }}" />
</head>
<body>
  <div class="client">
    <h1 class="client__title">管理システム</h1>
    <div class="client__search">
      <form action="" method="get" class="client__search__form">
        @csrf
        <div class="client__search__name">
          <label>お名前</label>
          <input type="text" name="name" class="client__search__name__box">
        </div>
        <div class="client__search__gender">
          <label>性別
            <input type="radio" name="gender" class="client__search__gender__radio" value="1, 2"checked>全て
            <input type="radio" name="gender" class="client__search__gender__radio" value="1">男性
            <input type="radio" name="gender" class="client__search__gender__radio" value="2">女性
          </label>
        </div>
        <div class="client__search__date">
          <label>登録日
            <input type="date" name="from" class="client__search__date__box__start">~
            <input type="date" name="until" class="client__search__date__box__end">
          </label>
        </div>
        <div class="client__search__email">
          <label>メールアドレス<input type="text" name="email" class="client__search__email__box"></label>
        </div>
        <div class="client__search__submit">
          <button type="submit" name="action" value="submit" class="search__submit__btn">検索</button>
          <button type="submit" name="action" value="reset" class="search__reset__btn">リセット</button>
        </div>
      </form>
    </div>
    <div class="client__table">
      {{ $pages->links() }}
      <table>
        <tr>
          <th>ID</th>
          <th>お名前</th>
          <th>性別</th>
          <th>メールアドレス</th>
          <th>ご意見</th>
          <th></th>
        </tr>
        @foreach ($items as $item)
        <tr>
          <td>{{ $item-> id}}</td>
          <td>{{ $item-> fullname}}</td>
          <td>
            @if( $item['gender'] == "1")
            <p>男性</p>
            @else
            <p>女性</p>
            @endif
          </td>
          <td>{{ $item-> email}}</td>
          <td>{{ Str::limit($item-> opinion, 25) }}</td>
          <td>
            <form action="delete?id={{$item->id}}" method="post" class="delete">
              @csrf
              <input type="submit" class="button-delete" value="削除">
            </form>
          </td>
        </tr>
        @endforeach
      </table>
    </div>
  </div>
</body>
</html>

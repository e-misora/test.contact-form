<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/confirm.css')}}">
</head>
<body>
    <header class="header">
        <div class="header__inner">
            <h1 class="header__logo">FashionablyLate</h1>
        </div>
    </header>
    <main>
        <div class="confirm-form__content">
            <h2 class="confirm-form__ttl">Confirm</h2>
            <form action="/thanks" method="post">
                @csrf
                <table class="confirm-table">
                    <tr class="confirm-table__row">
                        <th class="table__header">お名前</th>
                        <td class="table__inner">
                            <span>{{$contact['last_name']}}</span>
                            <span>{{$contact['first_name']}}</span>
                        </td>
                    </tr>
                    <tr class="confirm-table__row">
                        <th class="table__header">性別</th>
                        <td class="table__inner">
                            <p>{{$contact['gender']}}</p>
                        </td>
                    </tr>
                    <tr class="confirm-table__row">
                        <th class="table__header">メールアドレス</th>
                        <td class="table__inner">
                            <p>{{$contact['email']}}</p>
                        </td>
                    </tr>
                    <tr class="confirm-table__row">
                        <th class="table__header">電話番号</th>
                        <td class="table__inner">
                            <span>{{$contact['tel-1']}}</span>
                            <span>{{$contact['tel-2']}}</span>
                            <span>{{$contact['tel-3']}}</span>
                        </td>
                    </tr>
                    <tr class="confirm-table__row">
                        <th class="table__header">住所</th>
                        <td class="table__inner">
                            <p>{{$contact['address']}}</p>
                        </td>
                    </tr>
                    <tr class="confirm-table__row">
                        <th class="table__header">建物名</th>
                        <td class="table__inner">
                            <p>{{$contact['building']}}</p>
                        </td>
                    </tr>
                    <tr class="confirm-table__row">
                        <th class="table__header">お問い合わせの種類</th>
                        <td class="table__inner">
                            {{$contact['category_id']}}
                        </td>
                    </tr>
                    <tr class="confirm-table__row">
                        <th class="table__header">お問い合わせ内容</th>
                        <td class="table__inner">
                            <p>{{$contact['detail']}}</p>
                        </td>
                    </tr>
                </table>
                <div class="confirm-button">
                    <button class="confirm-button__submit" type="submit">送信</button>
            </form>
                <div class="confirm__link">
                    <a class="confirm-button__link"href="/">修正</a>
                </div>
                </div>
        </div>
    </main>
</body>
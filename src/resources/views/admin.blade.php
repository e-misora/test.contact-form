<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
</head>
<body>
    <header class="header">
        <div class="header__inner">
            <h1 class="header__logo">FashionablyLate
                <nav>
                    <a class="link__logout" href="/logout">logout</a>
                </nav>
            </h1>
        </div>
    </header>
    <main>
        <div class="admin__content">
            <div class="admin__content-item">
                <h2 class="admin__ttl">Admin</h2>
                <form class="form">
                @csrf
                    <div class="form__search-item">
                        <input class="item-input" type="text" placeholder="名前やメールアドレスを入力してください">
                        <select class="item-select__gender" id="" name="gender">
                            <option >性別</option>
                            <option value="">全て</option>
                            <option value="">男性</option>
                            <option value="">女性</option>
                            <option value="">その他</option>
                        </select>
                        <select class="item-select__content" >
                            <option>お問い合わせの種類</option>
                            @foreach ($categories as $category)
                            <option value="{{ $category['id'] }}">{{ $category['content'] }}</option>
                            @endforeach
                        </select>
                        <input class="item-select__date" type="date">
                        <button class="item-button__search" type="submit">検索</button>
                        <button class="item-button__reset" type="submit">リセット</button>
                    </div>
                    <div class="form__item">
                        <button class="item-button__export" type="submit">エクスポート</button>
                        <nav class="pagination">
                            <a href="" class="pagination__arrow pagination__prev">
                            <span class="visuallyhidden">Previous Page</span>
                            </a>
                            <ul class="pagination__items">
                                <li class="is-active"><a href=""></a></li>
                                <li><a href=""></a></li>
                                <li><a href=""></a></li>
                                <li><a href=""></a></li>
                                <li><a href=""></a></li>
                            </ul>
                            <a href="" class="pagination__arrow pagination__next">
                            <span class="visuallyhidden">Next Page</span>
                            </a>
                        </nav>
                    </div>
                    <table class="admin-table">
                        <tr class="table__header">
                            <th class="header__label">お名前</th>
                            <th class="header__label">性別</th>
                            <th class="header__label">メールアドレス</th>
                            <th class="header__label">お問い合わせの種類</th>
                        </tr>
                        @foreach($contacts as $contact)
                        <tr class="table__row">
                            <td class=>{{$contact['last_name']}}{{$contact['first_name']}}</td>
                            <td>{{$contact['gender']}}</td>
                            <td>{{$contact['email']}}</td>
                            <td>{{$contact['']}}</td>
                        </tr>
                        @endforeach
                    </table>
                </form>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/contact.css')}}">
</head>
<body>
    <header class="header">
        <div class="header__inner">
            <h1 class="header__logo">FashionablyLate</h1>
        </div>
    </header>

    <main>
        <div class="contact-form__content">
            <h2 class="contact-form__ttl">Contact</h2>
            <form class="form" action="">
            @csrf
                <div class="form__group">
                    <div class="form__group-ttl">
                        <span class="form__group-ttl">名前</span>
                        <span class="form__group-required">※</span>
                    </div>
                    <div class="form__group-item">
                        <input class="input__name" type="text" placeholder="例 山田">
                        <input class="input__name" type="text" placeholder="例 太郎">
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-ttl">
                        <span class="form__group-ttl">性別</span>
                        <span class="form__group-required">※</span>
                    </div>
                    <div class="form__group-item">
                        <input type="radio">男性
                        <input type="radio">女性
                        <input type="radio">その他
                    </div>
                </div>
            </form>
        </div>
    </main>
</body>
</html>
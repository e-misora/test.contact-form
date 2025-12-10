<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/register.css')}}">
</head>
<body>
    <header class="header">
        <div class="header__inner">
            <h1 class="header__logo">FashionablyLate
                <nav>
                    <a class="link__login" type="submit" href="auth.login">login</a>
                </nav>
            </h1>
        </div>
    </header>
    <main>
        <div class="register__content">
            <div class="register__content-item">
                <h2 class="register__ttl">Register</h2>
                <form class="form"  action="/register" method="post">
                @csrf
                    <div class="form__item">
                        <div class="form__group-item">
                            <h3 class="form__group-item--label">お名前</h3>
                            <input class="form__group-item--input" type="text" name="name" placeholder="例 山田  太郎" value="{{old('name')}}">
                        </div>
                        <div class="form__group-item">
                            <h3 class="form__group-item--label">メールアドレス</h3>
                            <input class="form__group-item--input" type="email" name="email" placeholder="例 test@example.com" value="{{old('email')}}">
                        </div>
                        <div class="form__group-item">
                            <h3 class="form__group-item--label">パスワード</h3>
                            <input class="form__group-item--input" type="password"name="password" placeholder="例 coachtech1106">
                        </div>
                        <div class="form__button">
                            <button class="form__button-submit" type="submit">登録</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>


    </main>
</body>
</html>
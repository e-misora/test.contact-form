<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
</head>
<body>
    <header class="header">
        <div class="header__inner">
            <h1 class="header__logo">FashionablyLate
                <nav>
                    <a class="register__link" type="submit" href="auth.register">register</a>
                </nav>
            </h1>
        </div>
    </header>
    <main>
        <div class="login__content">
            <div class="login__content-item">
                <h2 class="login__ttl">Login</h2>
                <form class="form"  action="/admin" method="post">
                @csrf
                    <div class="form__item">
                        <div class="form__group-item">
                            <h3 class="form__group-item--label">メールアドレス</h3>
                            <input class="form__group-item--input" type="email" name="email" placeholder="例 test@example.com" value="{{old('email')}}">
                        </div>
                        <div class="form__error">
                            @error('email')
                            {{$message}}
                            @enderror
                        </div>
                        <div class="form__group-item">
                            <h3 class="form__group-item--label">パスワード</h3>
                            <input class="form__group-item--input" type="password" placeholder="例 coachtech1106" value="{{old('password')}}">
                        </div>
                        <div class="form__error">
                            @error('content')
                            {{$message}}
                            @enderror
                        </div>
                        <div class="form__button">
                            <button class="form__button-submit" type="submit">ログイン</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>


    </main>
</body>
</html>
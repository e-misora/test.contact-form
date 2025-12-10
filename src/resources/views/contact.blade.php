<!DOCTYPE html>
<html lang="ja">
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
            <form class="form" action="/confirm" method="post">
            @csrf
                <div class="form__group">
                    <div class="form__group-ttl">
                        <span class="form__group-ttl">お名前</span>
                        <span class="form__group-required">※</span>
                    </div>
                    <div class="form__group-item">
                        <input class="input__name" type="text" name="last_name" placeholder="例 山田" value="{{old('last_name')}}">
                        <input class="input__name" type="text" name="first_name" placeholder="例 太郎" value="{{old('first_name')}}">
                    </div>
                </div>
                <div class="form__error">
                    @error('last_name')
                    {{$message}}
                    @enderror
                    @error('first_name')
                    {{$message}}
                    @enderror
                </div>
                <div class="form__group">
                    <div class="form__group-ttl">
                        <span class="form__group-ttl">性別</span>
                        <span class="form__group-required">※</span>
                    </div>
                    <div class="form__group-item--gender">
                        <label class="option__gender" for="gender-1">
                            <input class="item__radio-gender" type="radio" name="gender"id="gender-1" value="男性">男性
                        </label>
                        <label class="option__gender" for="gender-2">
                            <input class="item__radio-gender" type="radio" name="gender" id="gender-2" value="女性">女性
                        </label>
                        <label class="option__gender" for="gender-3">
                            <input class="item__radio-gender" type="radio" name="gender" id="gender-3" value="その他">その他
                        </label>
                    </div>
                </div>
                <div class="form__error">
                    @error('gender')
                    {{$message}}
                    @enderror
                </div>
                <div class="form__group">
                    <div class="form__group-ttl">
                        <span class="form__group-ttl">メールアドレス</span>
                        <span class="form__group-required">※</span>
                    </div>
                    <div class="form__group-item">
                        <input class="input__email" type="email"name="email" placeholder="例 test@example.com"  value="{{old('email')}}">
                    </div>
                </div>
                <div class="form__error">
                    @error('email')
                    {{$message}}
                    @enderror
                </div>
                <div class="form__group">
                    <div class="form__group-ttl">
                        <span class="form__group-ttl">電話番号</span>
                        <span class="form__group-required">※</span>
                    </div>
                    <div class="form__group-item">
                        <input class="input__tel" type="tel" name="tel-1" placeholder="080" value="{{old('tel-1')}}">
                        <p>-</p>
                        <input class="input__tel" type="tel" name="tel-2"placeholder="1234" value="{{old('tel-2')}}">
                        <p>-</p>
                        <input class="input__tel" type="tel" name="tel-3"placeholder="5678" value="{{old('tel-3')}}">
                    </div>
                </div>
                <div class="form__error">
                    @error('tel-1')
                    {{$message}}
                    @enderror
                    @error('tel-2')
                    {{$message}}
                    @enderror
                    @error('tel-3')
                    {{$message}}
                    @enderror
                </div>
                <div class="form__group">
                    <div class="form__group-ttl">
                        <span class="form__group-ttl">住所</span>
                        <span class="form__group-required">※</span>
                    </div>
                    <div class="form__group-item">
                        <input class="input__address" type="text" name="address"placeholder="例 東京都渋谷区千駄ヶ谷1-2-3" value="{{old('address')}}">
                    </div>
                </div>
                <div class="form__error">
                    @error('address')
                    {{$message}}
                    @enderror
                </div>
                <div class="form__group">
                    <div class="form__group-ttl">
                        <span class="form__group-ttl">建物名</span>
                    </div>
                    <div class="form__group-item">
                        <input class="input__building" type="text" name="building"placeholder="例 千駄ヶ谷マンション">
                    </div>
                </div>
                <div class="form__error">
                </div>
                <div class="form__group">
                    <div class="form__group-ttl">
                        <span class="form__group-ttl">お問い合わせの種類</span>
                        <span class="form__group-required">※</span>
                    </div>
                    <div class="form__group-item">
                        <select class="item__select" name="category_id" >
                            <option >選択してください       ▼</option>
                            @foreach ($categories as $category)
                            <option value="{{ $category['id'] }}">{{ $category['content'] }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form__error">
                    @error('content')
                    {{$message}}
                    @enderror
                </div>
                <div class="form__group-bottom">
                    <div class="form__group-ttl">
                        <span class="form__group-ttl">お問い合わせ内容</span>
                        <span class="form__group-required">※</span>
                    </div>
                    <div class="form__group-item">
                        <textarea class="item__textarea" name="detail" rows="5" value="{{old('detail')}}" placeholder="お問い合わせ内容をご記入ください"></textarea>
                    </div>
                </div>
                <div class="form__error">
                    @error('detail')
                    {{$message}}
                    @enderror
                </div>
                <div class="form__button">
                    <button class="form__button-submit" type="submit">確認画面</button>
                </div>
            </form>
        </div>
    </main>
</body>
</html>
<html>
    <head>
        <title>kle | Kayıt Ol</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </head>

    <body>
        
        <div class="container-fluid">

            <div id="form-control">
                <div class="form-container">
                    <form action="{{ route('register') }}" method="POST" id="form">
                        @csrf
                        <h3 id="register">Kayıt Ol</h3>
                        <input type="text" name="name" placeholder="İsim Soyisim" required id="name" style="margin-top: 30px;">
                        <input type="email" name="email" placeholder="E-Mail" required id="email">
                        <input type="password" name="password" placeholder="Şifre" required id="pass">
                        <input type="password" name="password_confirmation" placeholder="Şifre Tekrarı" required id="againpass">
                        @if ($errors->any())
                        <div id="warning">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <p>Zaten bir hesabın varsa <a href="{{ url('/login') }}">Giriş Yap</a></p>
                        <button type="submit" class="btn" id="button">Kayıt Ol</button>
                    </form>
                </div>
            </div>

        </div>

    </body>
</html>
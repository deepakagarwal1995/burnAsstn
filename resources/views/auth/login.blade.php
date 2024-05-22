
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>{{ $title ?? 'Admin Login' }} | {{ config('app.name') }}</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,400i,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="{{ config('app.url') }}/adminAssests/assets/styles/css/themes/lite-purple.min.css">
</head>

<body>
    <div class="auth-layout-wrap" style="background-image: url({{ config('app.url') }}/adminAssests/assets/images/photo-wide-4.jpg)">
        <div class="auth-content">
            <div class="card o-hidden">
                <div class="row">
                    <div class="col-md-6">
                        <div class="p-4">
                            <div class="auth-logo text-center mb-4">
                                <img src="{{ config('app.url') }}/assets/images/logo.png" alt="">
                            </div>
                            <h1 class="mb-3 text-18">Sign In</h1>
                            <form method="POST" action="{{ route('login') }}">
                        @csrf
                                <div class="form-group">
                                    <label for="email">Email address</label>
                                    <input id="email" class="form-control form-control-rounded @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus type="email">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input id="password" type="password" class="form-control form-control-rounded @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                <button class="btn btn-rounded btn-primary btn-block mt-2" type="submit">
                                     {{ __('Login') }}
                                </button>

                            </form>


                        </div>
                    </div>
                    <div class="col-md-6 text-center " style="background-size: cover;background-image: url({{ config('app.url') }}/adminAssests/assets/images/photo-long-3.jpg">
                        <div class="pr-3 auth-right">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ config('app.url') }}/adminAssests/assets/js/common-bundle-script.js"></script>

    <script src="{{ config('app.url') }}/adminAssests/assets/js/script.js"></script>
</body>
</html>



@extends('customer.layout.master')

@section('content')
     <!-- LOGIN
    ================================================== -->
    <div class="container mb-11">
        <div class="row gx-0">
            <div class="col-md-7 col-xl-4 mx-auto" style="margin-top: 5%">
                <!-- Login -->
        <div class="row ">
                
                <div class="col-lg-4">
            </div>
                <div class="col-lg-4">
                        <img src="{{asset('customer/img/brand-white.svg')}}" class="navbar-brand-img" alt="...">
                </div>
                <div class="col-lg-4">
            </div>
        </div>
               
                <h3 class="mb-6" style="text-align: center">Connexion à votre compte!</h3>

                <!-- Form Login -->
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <!-- Email -->
                    <div class="form-group mb-5">
                        <label for="modalSigninEmail1">
                             Email
                        </label>
                        <input  id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="jason@gmail.com">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>

                    <!-- Password -->
                    <div class="form-group mb-5">
                        <label for="modalSigninPassword1">
                            Mot de passe
                        </label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="**********">
                        @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>

                    <div class="d-flex align-items-center mb-5 font-size-sm">
                        <div class="form-check">
                            <input class="form-check-input text-gray-800" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label text-gray-800" for="autoSizingCheck1">
                                Se souvenir de moi
                            </label>
                        </div>

                        <div class="ms-auto">
                            @if (Route::has('password.request'))
                            <a class="text-gray-800" href="{{ route('password.request') }}">
                                {{ __('Mot De Passe Oublié?') }}
                            </a>
                        @endif
                        </div>
                    </div>

                    <!-- Submit -->
                    
                    <button type="submit" class="btn btn-block btn-primary">
                        {{ __('Login') }}
                    </button>
                    
        
                </form>
            </div>
        </div>
    </div>


@endsection


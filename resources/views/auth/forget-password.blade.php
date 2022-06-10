
{{--@extends('customer.layout.master')

@section('content')

    <!-- RECOVER
    ================================================== -->
    <div class="container mb-11">
        <div class="row gx-0">
            <div class="col-md-7 col-xl-4 mx-auto">
                <!-- Recover -->
                <h3 class="mb-6">Recover password!</h3>

                <!-- Form Recover Password -->
                <form class="mb-5">
                    <!-- Email -->
                    <div class="form-group">
                        <label for="modalForgotpasswordEmail1">
                            Email
                        </label>
                        <input type="email" class="form-control" id="modalForgotpasswordEmail1" placeholder="johndoe@creativelayers.com">
                    </div>

                    <!-- Submit -->
                    <button class="btn btn-block btn-primary" type="submit">
                        RECOVER PASSWORD
                    </button>
                </form>

                <!-- Text -->
                <p class="mb-0 font-size-sm text-center">
                    Remember your password? <a class="text-underline" href="login.html">Log In</a>
                </p>
            </div>
        </div>
    </div>

@endsection
--}}
@extends('customer.layout.master')
@section('content')
<div class="row gx-0">

<div class="container mb-11 " style="margin-top: 5%">
        
    <div class="row ">
      {{--
                
        <div class="col-lg-4">
    </div>
        <div class="col-lg-4">
                <img src="{{asset('customer/img/brand-white.svg')}}" class="navbar-brand-img" alt="...">
        </div>
        <div class="col-lg-4">
    </div>
        --}} 

</div>     
      {{--
         <h3 class="mb-6" style="text-align: center">Réinitialiser le mot de passe</h3>
        --}} 
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h3 class="mb-6" style="text-align: center">Réinitialiser le mot de passe</h3>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">E-Mail</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                  Envoie du lien de réinitialisation du mot de passe
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection













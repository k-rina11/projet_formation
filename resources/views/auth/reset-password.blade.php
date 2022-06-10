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
                <h3 class="mb-6" style="text-align: center">Nouveau mot de passe</h3>      
                
                <div class="card-body">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $request->route('token') }}">

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">Adresse Email</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">Nouveau mot de passe</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">Confirmer le mot de passe</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Rénitialiser le mot de passe
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
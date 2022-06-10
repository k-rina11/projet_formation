@extends('customer.layout.master')

@section('content')

<!-- REGISTER
    ================================================== -->
    <div class="container mb-11">
        <div class="row gx-0">
            <div class="col-md-7 col-xl-4 mx-auto">
                <!-- Register -->
                <h3 class="mb-6">Enregistrement des utilisateurs!</h3>

                <!-- Form Register -->
                <form class="mb-5" method="POST" action="{{ route('register') }}">
                    @csrf
                    <!-- Username -->
                    <div class="form-group mb-5">
                        <label for="modalSignupUsername1">
                            Nom d'utilisateur
                        </label>
                        <input type="text" id="modalSignupUsername1" class="form-control   @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <!-- Email -->
                    <div class="form-group mb-5">
                        <label for="modalSignupEmail1">
                            Email
                        </label>
                        <input type="email"  id="modalSignupEmail1" placeholder="johndoe@creativelayers.com"  class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    
                    <!-- Password -->
                    <div class="form-group mb-5">
                        <label for="modalSignupPassword3">
                            Mot de Passe
                        </label>
                        <input type="password"  id="modalSignupPassword3" placeholder="**********"class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group mb-5">
                        <label for="modalSignupPassword4">
                            Confirmer Mot de passe
                        </label>
                        <input  id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <!-- Submit -->
                    <button class="btn btn-block btn-primary" type="submit">
                        SIGN UP
                    </button>

                </form>

                
            </div>
        </div>
    </div>
@endsection
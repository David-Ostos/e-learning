<x-auth-layout>
  <x-slot name="title">
    {{ __('Admin Login') }}
  </x-slot>

  <x-slot name="header">
    <h1 class="h2">{{ __('Bienvenido') }}</h1>
	<p class="lead">{{ __('Inicia sesión en tu cuenta para continuar') }}</p>
  </x-slot>

  <div class="card">
    <div class="card-body">
      <div class="m-sm-4">
        <div class="text-center">
          <img src="{{ asset('assets/img/avatar-login.png') }}" alt="Charles Hall" class="img-fluid rounded-circle" width="132" height="132" />
        </div>
        <form method="POST" action="{{ route('login') }}">
          @csrf
          <div class="mb-3">
            <label class="form-label">{{ __('Correo electronico') }}</label>
            <div class="input-group">
              <input class="form-control form-control-lg" type="email" name="email" :value="old('email')" placeholder="{{ __('ejemplo@email.com') }}" />
            </div>
          </div>
          <div class="mb-3">
            <label class="form-label">{{ __('Contraseña') }}</label>
            <div class="input-group">
              <input class="form-control form-control-lg" type="password" name="password" placeholder="{{ __('*************') }}" />
            </div>
          </div>
          <div class="col-6 mb-3">
            <small>
              <a href="javascrip:void(0)">{{ __('Olvidaste tu contraseña?') }}</a>
            </small>            
            <small>
              <a href="{{ route('register') }}">{{ __('Registrate') }}</a>
            </small>
          </div>
          <div>
            <label class="form-check">
              <input class="form-check-input" type="checkbox" value="remember-me" name="remember-me" checked />
              <span class="form-check-label">{{ ('Recuerdame para la proxima') }}</span>
            </label>
          </div>
          <div class="text-center mt-3">
            <button type="submit" class="btn btn-lg btn-primary">{{ ('Iniciar sesion') }}</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</x-auth-layout>
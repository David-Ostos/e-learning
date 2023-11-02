<x-auth-layout>
  <x-slot name="title">
    {{ __('Login') }}
  </x-slot>

  <x-slot name="header">
    <h1 class="h2">Resgistrate</h1>
	<p class="lead">Se parte de la mejor plataforma para aprender.</p>
  </x-slot>

  <div class="card">
    <div class="card-body">
      <div class="m-sm-4">
        <form action="" method="POST" >
          <div class="mb-3">
            <label class="form-label">Nombre</label>
            <input class="form-control form-control-lg" type="text" name="name" placeholder="Ingresa tu nombre" />
          </div>
          <div class="mb-3">
            <label class="form-label">Apellido</label>
            <input class="form-control form-control-lg" type="text" name="company" placeholder="Ingresa tu apellido" />
          </div>
          <div class="mb-3">
            <label class="form-label">Email</label>
            <input class="form-control form-control-lg" type="email" name="email" placeholder="ejemplo@mail.com" />
          </div>
          <div class="mb-3">
            <label class="form-label">Contraseña</label>
            <input class="form-control form-control-lg" type="password" name="password" placeholder="***********" />
          </div>
          <div class="text-center mt-3">
            <button type="submit" class="btn btn-lg btn-primary">Únete</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</x-auth-layout>
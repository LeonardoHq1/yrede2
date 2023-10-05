<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.7.7/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    
    <title>Lista de usuários</title>
</head>
<body>
    <h1 class="w-full text-center text-xl font-bold">Cadastro</h1>
<form class="max-w-md m-auto" action="{{route('salva-usuario')}}" method="post">
 
@csrf

<div class="form-control">
          <label class="label">
            <span class="label-text">Usuario</span>
          </label>
          <input name="usuario" type="text" placeholder="Usuario" class="input input-bordered" required />
        </div>

        <div class="form-control">
          <label class="label">
            <span class="label-text">Nome</span>
          </label>
          <input name="nome" type="text" placeholder="Nome" class="input input-bordered" required />
        </div>

        <div class="form-control">
          <label class="label">
            <span class="label-text">Bio</span>
          </label>
          <input name="bio" type="text" placeholder="Bio" class="input input-bordered" required />
        </div>

        <div class="form-control">
          <label class="label">
            <span class="label-text">Email</span>
          </label>
          <input name="email" type="text" placeholder="Email" class="input input-bordered" required />
        </div>

        <div class="form-control">
          <label class="label">
            <span class="label-text">Senha</span>
          </label>
          <input name="senha" type="text" placeholder="Senha" class="input input-bordered" required />
        </div>

<button class="btn btn-success">Salvar</button>



    </form>
  

    
</body>
</html>
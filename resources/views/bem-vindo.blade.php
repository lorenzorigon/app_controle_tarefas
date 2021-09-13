Site da Aplicação

@auth
   <h1>Usuário Autenticado</h1>
   <p>ID: {{auth()->user()->id}}</p> 
   <p>Nome: {{auth()->user()->nome}}</p> 
   <p>Email: {{auth()->user()->email}}</p> 
@endauth

@guest
    Olá visitante, tudo bem?
    ... 
    ... 
     ... 
      ... 
       ...    
@endguest
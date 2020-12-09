<html>
<head>
<body>
<form action="{{route('user.store')}}" method="post">
    @csrf

    <label for="name">Nome: </label>
    <input id="name" type="text" name="name" placeholder="Digite o nome da usuario"/>
    <br>
    <label for="email">Email: </label>
    <input id="email" type="text" name="email" placeholder="Digite o email do usuario"/>
    <br>
    <label for="password">Senha: </label>
    <input id="password" type="text" name="password" placeholder="Digite a senha"/>

    <br>
    <button>SALVAR</button>

    @if(session()->has('message'))
        <br/>
        <br/>
        <h4>{{session()->get('message')}}</h4>

    @endif

</form>
<!--
<a href="{{route('ave.list')}}">Listas de aves</a>
-->
</body>
</head>
</html>

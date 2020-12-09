<html>
<head>
<body>
<form action="{{route('user.update', $user->id)}}" method="post">
    @csrf
    @method('put')
    <label for="name">Nome: </label>
    <input id="name" type="text" name="name" value="{{$user->name}}" placeholder="Digite o nome do usuario"/>
    <br>
    <label for="email">Email: </label>
    <input id="email" type="text" name="email" value="{{$user->email}}" placeholder=" Digite o email"/>
    <br>
    <label for="password">raça:</label>
    <input id="password" type="text" name="password" value="{{$user->password}}" placeholder=" Digite a senha"/>

    <br>
    <button>SALVAR</button>


    @if(session()->has('message'))
        <br/>
        <br/>
        <h4>{{session()->get('message')}}</h4>
    @endif
</form>

</body>
</head>
</html>

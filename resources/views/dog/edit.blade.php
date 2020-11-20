<html>
<head>
<body>
<!-- formulario que tem a ação na rota.update para alterar o dog pelo id no metodo post
 csrf O cross-site request forgery (CSRF ou XSRF), em português falsificação de solicitação entre sites,
 também conhecido como ataque de um clique
 metodo put dentro do formulario -->
<form action="{{route('dog.update', $dog->id)}}" method="post">
    @csrf
    @method('put')
    <label for="name">Nome</label>
    <input id="name" type="text" name="name" value="{{$dog->name}}" placeholder="digite o nome do cachorro">
    <br>
    <label for="age">idade:</label>
    <input id="age" type="text" name="age" value="{{$dog->age}}" placeholder=" Digite a idade do gato"/>
    <br>
    <label for="race">raça:</label>
    <input id="race" type="text" name="race" value="{{$dog->race}}" placeholder=" Digite a raça do gato"/>
    <br>
    <label for="color">cor:</label>
    <input id="color" type="text" name="color" value="{{$dog->color}}" placeholder=" Digite a cor do gato"/>
    <br>
    <label for="price">preço:</label>
    <input id="price" type="text" name="price" value="{{$dog->price}}" placeholder=" Digite o preço do gato"/>

    <br>
    <label for="sold">Vendido</label>

    <select name="sold" id="sold">
        <option value="1" {{$dog->sold == 1 ? 'selected':''}}>VENDIDO</option>
        <option value="0" {{$dog->sold == 0 ? 'selected':''}}>NÃO VENDIDO</option>

    </select>

    <!-- Botão para enviar formulario -->
    <br>
    <button>SALVAR</button>
    <!-- ??? se a seção ??? -->
    @if(session()->has('message'))
        <br/>
        <br/>
        <h4>{{session()->get('message')}}</h4>
    @endif

</form>
</body>
</head>
</html>

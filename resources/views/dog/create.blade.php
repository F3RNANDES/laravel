<html>
<head>
<body>

<form action="{{route('dog.store')}}" method="post">
    @csrf

    <label for="name">Nome:</label>
    <input id="name" type="text" name="name" placeholder="Digite o nome do catiro"/>
    <br>
    <label for="age">idade:</label>
    <input id="age" type="text" name="age" placeholder="Digite a idade do catioro"/>
    <br>
    <label for="race">raça:</label>
    <input id="race" type="text" name="race" placeholder="Digite a raça do catito"/>
    <br>
    <label for="color">cor:</label>
    <input id="color" type="text" name="color" placeholder="Digite a cor do dog"/>
    <br>
    <label for="price">preço:</label>
    <input id="price" type="text" name="price" placeholder="Digite o preço do perro"/>
    <br>
    <label for="sold">Vendido</label>
    <select name="sold" id="sold">
        <option value="1">VENDIDO</option>
        <option value="0">NÃO VENDIDO</option>
    </select>

    <br>
    <button>SALVAR</button>
    <br>
    <a href="{{route("dog.store")}}">VER LISTA DE CÃES</a>

    @if(session()->has('message'))
        <br/>
        <br/>
        <h4>{{session()->get('message')}}</h4>
    @endif
</form>

</body>
</head>
</html>

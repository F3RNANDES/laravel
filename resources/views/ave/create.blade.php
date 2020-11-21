<html>
<head>
<body>
<form action="{{route('ave.store')}}" method="post">
    @csrf

    <label for="name">Nome:</label>
    <input id="name" type="text" name="name" placeholder="Digite o nome da ave"/>
    <br>
    <label for="age">idade:</label>
    <input id="age" type="text" name="age" placeholder="Digite a idade da ave"/>
    <br>
    <label for="race">raça:</label>
    <input id="race" type="text" name="race" placeholder="Digite a raça da ave"/>
    <br>
    <label for="color">cor:</label>
    <input id="color" type="text" name="color" placeholder="Digite a cor da ave"/>
    <br>
    <label for="price">preço:</label>
    <input id="price" type="text" name="price" placeholder="Digite o preço da ave"/>
    <br>
    <label for="sold">Vendido</label>
    <select name="sold" id="sold">
        <option value="1">VENDIDO</option>
        <option value="0">NÃO VENDIDO</option>
    </select>

    <br>
    <button>SALVAR</button>


    @if(session()->has('message'))
        <br/>
        <br/>
        <h4>{{session()->get('message')}}</h4>
    @endif
</form>
<a href="{{route('ave.list')}}">Listas de aves</a>
</body>
</head>
</html>

<html>
<head></head>
<body>

<form action="{{route('cat.store')}}" method="post">
    @csrf
    <label for="name">Nome:</label>
    <input id="name" type="text" name="name" placeholder="Digite o nome do gato"/>
    <br/>
    <label for="age">Idade:</label>
    <input id="age" type="text" name="age" placeholder="Digite a idade do gato"/>
    <br/>
    <label for="race">Raça:</label>
    <input id="race" type="text" name="race" placeholder="Digite a raça do gato"/>
    <br/>
    <label for="color">Cor:</label>
    <input id="color" type="text" name="color" placeholder="Digite a cor do gato"/>
    <br/>
    <label for="price">Preço:</label>
    <input id="price" type="text" name="price" placeholder="Digite o preço do gato"/>
    <br/>
    <label for="sold">Vendido:</label>
    <select id="sold" name="sold">
        <option value="1">Vendido</option>
        <option value="0">Não vendido</option>
    </select>
    <button type="submit">Salvar</button>

    @if(session()->has('message'))
        <br/>
        <br/>
        <h4>{{session()->get('message')}}</h4>
    @endif
</form>
</body>
</html>

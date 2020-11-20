<html>
<head></head>
<body>

<form action="{{route('cat.update', $cat->id)}}" method="post">
    @csrf
    @method('put')
    <label for="name">Nome:</label>
    <input id="name" type="text" name="name" value="{{$cat->name}}" placeholder="Digite o nome do gato"/>
    <br/>
    <label for="age">Idade:</label>
    <input id="age" type="text" name="age" value="{{$cat->age}}" placeholder="Digite a idade do gato"/>
    <br/>
    <label for="race">Raça:</label>
    <input id="race" type="text" name="race" value="{{$cat->race}}" placeholder="Digite a raça do gato"/>
    <br/>
    <label for="color">Cor:</label>
    <input id="color" type="text" name="color" value="{{$cat->color}}" placeholder="Digite a cor do gato"/>
    <br/>
    <label for="price">Preço:</label>
    <input id="price" type="text" name="price" value="{{$cat->price}}" placeholder="Digite o preço do gato"/>
    <br/>
    <label for="sold">Vendido:</label>
    <select id="sold" name="sold">
        <option value="1" {{ $cat->sold === 1 ? 'selected' : '' }}>Vendido</option>
        <option value="0" {{ $cat->sold === 0 ? 'selected' : ''}}>Não vendido</option>
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

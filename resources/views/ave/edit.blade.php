<html>
<head>
<body>
<form action="{{route('ave.update', $ave->id)}}" method="post">
    @csrf
    @method('put')
    <label for="name">Nome:</label>
    <input id="name" type="text" name="name" value="{{$ave->name}}" placeholder="Digite o nome da ave"/>
    <br>
    <label for="age">idade:</label>
    <input id="age" type="text" name="age" value="{{$ave->age}}" placeholder=" Digite a idade da ave"/>
    <br>
    <label for="race">raça:</label>
    <input id="race" type="text" name="race" value="{{$ave->race}}" placeholder=" Digite a raça da ave"/>
    <br>
    <label for="color">cor:</label>
    <input id="color" type="text" name="color" value="{{$ave->color}}" placeholder=" Digite a cor da ave"/>
    <br>
    <label for="price">preço:</label>
    <input id="price" type="text" name="price" value="{{$ave->price}}" placeholder=" Digite o preço da ave"/>

    <br>
    <label for="sold">Vendido</label>

    <select name="sold" id="sold">
        <option value="1" {{$ave->sold == 1 ? 'selected':''}}>VENDIDO</option>
        <option value="0" {{$ave->sold == 0 ? 'selected':''}}>NÃO VENDIDO</option>

    </select>


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

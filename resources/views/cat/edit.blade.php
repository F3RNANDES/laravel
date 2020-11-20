<html>
<head>
<body>
<form action="{{route('cat.update', $cat->id)}}" method="post">
    @csrf
    @method('put')
    <label for="name">Nome:</label>
    <input id="name" type="text" name="name" value="{{$cat->name}}" placeholder="Digite o nome do gato"/>
    <br>
    <label for="age">idade:</label>
    <input id="age" type="text" name="age" value="{{$cat->age}}" placeholder=" Digite a idade do gato"/>
    <br>
    <label for="race">raça:</label>
    <input id="race" type="text" name="race" value="{{$cat->race}}" placeholder=" Digite a raça do gato"/>
    <br>
    <label for="color">cor:</label>
    <input id="color" type="text" name="color" value="{{$cat->color}}" placeholder=" Digite a cor do gato"/>
    <br>
    <label for="price">preço:</label>
    <input id="price" type="text" name="price" value="{{$cat->price}}" placeholder=" Digite o preço do gato"/>

    <br>
    <label for="sold">Vendido</label>

    <select name="sold" id="sold">
        <option value="1" {{$cat->sold == 1 ? 'selected':''}}>VENDIDO</option>
        <option value="0" {{$cat->sold == 0 ? 'selected':''}}>NÃO VENDIDO</option>

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

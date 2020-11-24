<html>
<head>
<body>

<form action="{{route('cat.store')}}" method="post">
    @csrf

    <label for="name">Nome:</label>
    <input id="name" type="text" name="name" value="{{old('name')}}" placeholder="Digite o nome do gato"/>
    <br>
    <label for="age">idade:</label>
    <input id="age" type="text" name="age" value="{{old('age')}}" placeholder="Digite a idade do gato"/>
    <br>
    <label for="race">raça:</label>
    <input id="race" type="text" name="race" value="{{old('race')}}" placeholder="Digite a raça do gato"/>
    <br>
    <label for="color">cor:</label>
    <input id="color" type="text" name="color" value="{{old('color')}}" placeholder="Digite a cor do gato"/>
    <br>
    <label for="price">preço:</label>
    <input id="price" type="text" name="price" value="{{old('price')}}" placeholder="Digite o preço do gato"/>
    <br>
    <label for="sold">Vendido</label>
    <select name="sold" id="sold">
        <option value="1" {{old('sold')== 1 ? 'selected':''}} >VENDIDO</option>
        <option value="0" {{old('sold')== 0 ? 'selected':''}}>NÃO VENDIDO</option>
    </select>

    <br>
    <button>SALVAR</button>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if(session()->has('message'))
        <br/>
        <br/>
        <h4>{{session()->get('message')}}</h4>
    @endif
</form>
</body>
</head>
</html>

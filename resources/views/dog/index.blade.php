<html>
<head></head>
<body>
<h1>Todos os cachorros</h1>
<a href="{{route("dog.create")}}">CRIAR NOVO CÃO</a>
<table>
    <tread>
        <tr>
            <td>nome</td>
            <td>idade</td>
            <td>raça</td>
            <td>cor</td>
            <td>preço</td>
            <td>vendido</td>
        </tr>

    </tread>

    <tbody>
    @foreach($dogs as $dog)
        <tr>
            <td>{{$dog->name}}</td>
            <td> {{$dog->age}}</td>
            <td>  {{$dog->race}}</td>
            <td> {{$dog->color}}</td>
            <td> {{$dog->price}}</td>
            <td> {{$dog->sold}}</td>
            <!-- Link criado com a rota dog.edit para editar cachorro -->
            <td>
                <a href="{{route("dog.edit",$dog->id)}}">Eiditar</a>
            </td>

            <!--Criado um formulario que utiliza o metodo post com uma ação na rota de dog.destroy passando o id de dog
            csrf -->
            <td>
                <form method="post" action="{{route("dog.destroy",$dog->id)}}">
                    @csrf
                    @method('delete')
                    <button type="submit">Deletar</button>
                </form>
            </td>
        </tr>

    @endforeach
    </tbody>
</table>

</body>
</html>

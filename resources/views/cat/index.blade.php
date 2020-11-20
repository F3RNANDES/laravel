<html>
<head></head>
<body>
<h1>Todos os gatos</h1>
<a href="{{route("cat.create")}}">CRIAR NOVO GATO</a>
<table>
    <tread>
        <tr>
            <td>nome</td>
            <td>idade</td>
            <td>raça</td>
            <td>cor</td>
            <td>preço</td>
            <td>vendido</td>
            <td></td>
            <td></td>
        </tr>
    </tread>
    <tbody>
    @foreach($cats as $cat)
        <tr>
            <td>{{$cat->name}}</td>
            <td> {{$cat->age}}</td>
            <td>  {{$cat->race}}</td>
            <td> {{$cat->color}}</td>
            <td> {{$cat->price}}</td>
            <td> {{$cat->sold}}</td>
            <td>
                <a href="{{route("cat.edit",$cat->id)}}">Editar</a>
            </td>
            <td>
                <form method="post" action="{{route("cat.destroy",$cat->id)}}">
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

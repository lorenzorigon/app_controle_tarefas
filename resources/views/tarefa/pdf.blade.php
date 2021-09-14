<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html">
    <title>lista_de_tarefas</title>
    <style>
        .titulo{
            border: 1px;
            background-color: #c2c2c2;
            text-align: center;
            width: 100%;
            text-transform: uppercase;
            font-weight: bold;
            margin-bottom: 25px;
        }

        table{
            width: 100%;
        }

        table th{
            text-align: left;
        }

        .page-break{
            page-break-after: always;
        }
    </style>
</head>
<body>
    <div class="titulo">Lista de Tarefas</div>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Tarefa</th>
                <th>Data limite conclusão</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tarefas as $tarefa)
                <tr>
                    <td>{{$tarefa->id}}</td>
                    <td>{{$tarefa->tarefa}}</td>
                    <td>{{ date('d/m/Y', strtotime($tarefa->data_limite_conclusao))}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
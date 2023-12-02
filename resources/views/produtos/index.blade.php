<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Produtos</title>
</head>
<body>
    <div class="container">
        <h2>Lista de Produtos</h2>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <!-- Adicione os demais cabeçalhos das colunas -->
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($produtos as $produto)
                    <tr>
                        <td>{{ $produto->id }}</td>
                        <td>{{ $produto->nome }}</td>
                        <!-- Adicione os demais campos aqui -->
                        <td>
                            <a href="{{ route('produtos.edit', $produto->id) }}" class="btn btn-warning">Editar</a>
                            <!-- Adicione o botão de excluir -->
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>

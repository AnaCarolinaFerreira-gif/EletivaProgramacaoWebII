
<?php
if ($_POST) {
    // Obtém os dados do formulário
    $nomeTarefa = $_POST['nomeTarefa'];
    $totalHorasTarefa = $_POST['totalHorasTarefa'];
    $complexidade = $_POST['complexidade'];
    $nomeFuncionario = $_POST['nomeFuncionario'];
    $totalHorasDisponiveis = $_POST['totalHorasDisponiveis'];
    $nivelExperiencia = $_POST['nivelExperiencia'];

    function podeAtribuirTarefa($totalHorasTarefa, $totalHorasDisponiveis, $complexidade, $nivelExperiencia) {
        $disponibilidadeNecessaria = $totalHorasTarefa * 1.1;
        if ($totalHorasDisponiveis < $disponibilidadeNecessaria) {
            return false;
        }

        switch ($nivelExperiencia) {
            case 'junior':
                if ($complexidade !== 'baixa') {
                    return false;
                }
                break;
            case 'pleno':
                if ($complexidade === 'alta') {
                    return false;
                }
                break;
            case 'senior':
                if ($complexidade === 'baixa') {
                    return false;
                }
                break;
        }

        return true; // Tarefa pode ser atribuída
    }

    if (podeAtribuirTarefa($totalHorasTarefa, $totalHorasDisponiveis, $complexidade, $nivelExperiencia)) {
        echo "A tarefa '{$nomeTarefa}' foi atribuída ao funcionário '{$nomeFuncionario}'.";
    } else {
        echo "A tarefa '{$nomeTarefa}' não pode ser atribuída ao funcionário '{$nomeFuncionario}'.";
    }
}
?>



<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atribuição de Tarefa</title>
</head>
<body>
    <h1>Atribuição de Tarefa</h1>
    <form action="atribuir_tarefa.php" method="post">
        <h2>Dados da Tarefa</h2>
        <label for="nomeTarefa">Nome da Tarefa:</label>
        <input type="text" id="nomeTarefa" name="nomeTarefa" required>
        <br><br>
        
        <label for="totalHorasTarefa">Total de Horas da Tarefa:</label>
        <input type="number" id="totalHorasTarefa" name="totalHorasTarefa" required>
        <br><br>
        
        <label for="complexidade">Complexidade:</label>
        <select id="complexidade" name="complexidade" required>
            <option value="baixa">Baixa</option>
            <option value="media">Média</option>
            <option value="alta">Alta</option>
        </select>
        <br><br>

        <h2>Dados do Funcionário</h2>
        <label for="nomeFuncionario">Nome do Funcionário:</label>
        <input type="text" id="nomeFuncionario" name="nomeFuncionario" required>
        <br><br>
        
        <label for="totalHorasDisponiveis">Total de Horas Disponíveis:</label>
        <input type="number" id="totalHorasDisponiveis" name="totalHorasDisponiveis" required>
        <br><br>
        
        <label for="nivelExperiencia">Nível de Experiência:</label>
        <select id="nivelExperiencia" name="nivelExperiencia" required>
            <option value="junior">Júnior</option>
            <option value="pleno">Pleno</option>
            <option value="senior">Sênior</option>
        </select>
        <br><br>
        
        <input type="submit" value="Atribuir Tarefa">
    </form>
</body>
</html>

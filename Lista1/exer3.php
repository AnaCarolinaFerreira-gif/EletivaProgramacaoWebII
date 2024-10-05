
<php? 
    function pode_alocar_tarefa($tarefa_id, $funcionario_id) {
    global $conn;

    $sql = "SELECT * FROM tarefas WHERE id = $tarefa_id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $habilidades_necessarias = explode(',', $row['habilidades_necessarias']);

    $sql = "SELECT habilidades FROM funcionarios WHERE id = $funcionario_id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $habilidades_funcionario = explode(',', $row['habilidades']);

    $tem_todas_habilidades = true;
    foreach ($habilidades_necessarias as $habilidade) {
        if (!in_array($habilidade, $habilidades_funcionario)) {
            $tem_todas_habilidades = false;
            break;
        }
    }

    return $tem_todas_habilidades;
}

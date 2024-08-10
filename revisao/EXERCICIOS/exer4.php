<php?
function calcular_dias_ferias($funcionario_id, $data_referencia) {
    global $conn;

    $sql = "SELECT data_admissao FROM funcionarios WHERE id = $funcionario_id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $data_admissao = $row['data_admissao'];

    $data_admissao = new DateTime($data_admissao);
    $data_referencia = new DateTime($data_referencia);
    $intervalo = $data_admissao->diff($data_referencia);
    $anos_servico = $intervalo->y;

    $dias_ferias = 30; 
    if ($anos_servico > 10) {
        $dias_ferias = 30 + ($anos_servico - 10); // Acrescentar 1 dia a cada ano após 10 anos
    }

    return $dias_ferias;
}




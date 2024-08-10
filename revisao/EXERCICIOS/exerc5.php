<php? 
function calcular_custo_total_projeto($projeto_id) {
    global $conn;

    $sql = "SELECT SUM(horas_estimadas) AS total_horas FROM tarefas WHERE projeto_id = $projeto_id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $total_horas = $row['total_horas'];

    $sql = "SELECT AVG(valor_hora) AS valor_hora_medio FROM funcionarios"; 
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $valor_hora_medio = $row['valor_hora_medio'];

    $custo_tarefas = $total_horas * $valor_hora_medio;

    $sql = "SELECT SUM(valor) AS total_custos_adicionais FROM custos_adicionais WHERE projeto_id = $projeto_id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $total_custos_adicionais = $row['total_custos_adicionais'];
    
    $custo_total = $custo_tarefas + $total_custos_adicionais;

    return $custo_total;
}

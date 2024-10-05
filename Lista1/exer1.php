
   <php?
   function calcular_horas_e_salario($funcionario_id, $mes, $ano) {
    global $conn;

    $sql = "SELECT * FROM registros_ponto WHERE funcionario_id = $funcionario_id AND YEAR(data) = $ano AND MONTH(data) = $mes";
    $result = $conn->query($sql);

    $total_horas = 0;
    while($row = $result->fetch_assoc()) {
        $horas_trabalhadas = strtotime($row['hora_saida']) - strtotime($row['hora_entrada']);
        $horas_trabalhadas = round($horas_trabalhadas / 3600, 2); 

        $total_horas += $horas_trabalhadas;
    }
    
    $sql = "SELECT valor_hora FROM funcionarios WHERE id = $funcionario_id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $valor_hora = $row['valor_hora'];

    $salario = $total_horas * $valor_hora;

    return array('total_horas' => $total_horas, 'salario' => $salario);}
?>

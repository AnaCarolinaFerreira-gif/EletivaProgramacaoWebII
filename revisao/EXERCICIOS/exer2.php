
<php?    
    function calcular_bonus($funcionario_id, $mes, $ano) {
    global $conn;

    $sql = "SELECT nota_desempenho FROM desempenho WHERE funcionario_id = $funcionario_id AND mes = $mes AND ano = $ano";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $nota_desempenho = $row['nota_desempenho'];

    $sql = "SELECT valor FROM lucros WHERE mes = $mes AND ano = $ano";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $valor_lucros = $row['valor'];

    switch ($nota_desempenho) {
        case 5:
            $percentual_bonus = 10; // 10%
            break;
        case 4:
            $percentual_bonus = 8;
            break;
        case 3:
            $percentual_bonus = 5;
            break;
        case 2:
            $percentual_bonus = 3;
            break;
        case 1:
            $percentual_bonus = 0;
            break;
        default:
            $percentual_bonus = 0;
    }

    $valor_bonus = ($valor_lucros * $percentual_bonus) / 100;

    return $valor_bonus;
}



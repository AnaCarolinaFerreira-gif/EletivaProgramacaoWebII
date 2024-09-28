<<<<<<< HEAD
<?php
interface Telefone {
    public function call(int $duration): float;
}

abstract class Device {
    protected string $areaCode;
    protected string $number;
    protected string $type;

    public function __construct(string $areaCode, string $number, string $type) {
        $this->areaCode = $areaCode;
        $this->number = $number;
        $this->type = $type;
    }

    public function getDescription(): string {
        return "{$this->type} phone: {$this->areaCode} - {$this->number}";
    }
}

class Mobile extends Device implements Telefone {
    private float $rate;
    private string $carrier;

    public function __construct(string $areaCode, string $number, float $rate, string $carrier) {
        parent::__construct($areaCode, $number, 'mobile');
        $this->rate = $rate;
        $this->carrier = $carrier;
    }

    public function call(int $duration): float {
        // Calcular custo considerando plano, horários, etc.
        return $this->rate * $duration * 0.9; // Desconto de 10% para ligações
    }
}


class Landline extends Device implements Telefone {
    private float $rate;

    public function __construct(string $areaCode, string $number, float $rate) {
        parent::__construct($areaCode, $number, 'landline');
        $this->rate = $rate;
    }

    public function call(int $duration): float {
        return $this->rate * $duration;
    }
}

enum TipoPlano {
    case PRE_PAGO;
    case POS_PAGO;
}

interface Ligavel {
    public function calcularCusto(float $tempoLigacao): float;
}

abstract class Plano implements Ligavel {
    protected float $custoPorMinuto;
    protected TipoPlano $tipo;

    public function __construct(float $custoPorMinuto, TipoPlano $tipo) {
        $this->custoPorMinuto = $custoPorMinuto;
        $this->tipo = $tipo;
    }

    public function calcularCusto(float $tempoLigacao): float {
        return $this->custoPorMinuto * $tempoLigacao;
    }
}

class PrePago extends Plano {
    public function __construct(float $custoPorMinuto) {
        parent::__construct($custoPorMinuto, TipoPlano::PRE_PAGO);
    }

    public function calcularCusto(float $tempoLigacao): float {
        return parent::calcularCusto($tempoLigacao) * 1.4; // Acréscimo de 40%
    }
}

class PosPago extends Plano {
    const DESCONTO = 0.1; // 10% de desconto

    public function __construct(float $custoPorMinuto) {
        parent::__construct($custoPorMinuto, TipoPlano::POS_PAGO);
    }

    public function calcularCusto(float $tempoLigacao): float {
        return parent::calcularCusto($tempoLigacao) * (1 - self::DESCONTO);
    }
}







=======
<?php
interface Telefone {
    public function call(int $duration): float;
}

abstract class Device {
    protected string $areaCode;
    protected string $number;
    protected string $type;

    public function __construct(string $areaCode, string $number, string $type) {
        $this->areaCode = $areaCode;
        $this->number = $number;
        $this->type = $type;
    }

    public function getDescription(): string {
        return "{$this->type} phone: {$this->areaCode} - {$this->number}";
    }
}

class Mobile extends Device implements Telefone {
    private float $rate;
    private string $carrier;

    public function __construct(string $areaCode, string $number, float $rate, string $carrier) {
        parent::__construct($areaCode, $number, 'mobile');
        $this->rate = $rate;
        $this->carrier = $carrier;
    }

    public function call(int $duration): float {
        // Calcular custo considerando plano, horários, etc.
        return $this->rate * $duration * 0.9; // Desconto de 10% para ligações
    }
}


class Landline extends Device implements Telefone {
    private float $rate;

    public function __construct(string $areaCode, string $number, float $rate) {
        parent::__construct($areaCode, $number, 'landline');
        $this->rate = $rate;
    }

    public function call(int $duration): float {
        return $this->rate * $duration;
    }
}

enum TipoPlano {
    case PRE_PAGO;
    case POS_PAGO;
}

interface Ligavel {
    public function calcularCusto(float $tempoLigacao): float;
}

abstract class Plano implements Ligavel {
    protected float $custoPorMinuto;
    protected TipoPlano $tipo;

    public function __construct(float $custoPorMinuto, TipoPlano $tipo) {
        $this->custoPorMinuto = $custoPorMinuto;
        $this->tipo = $tipo;
    }

    public function calcularCusto(float $tempoLigacao): float {
        return $this->custoPorMinuto * $tempoLigacao;
    }
}

class PrePago extends Plano {
    public function __construct(float $custoPorMinuto) {
        parent::__construct($custoPorMinuto, TipoPlano::PRE_PAGO);
    }

    public function calcularCusto(float $tempoLigacao): float {
        return parent::calcularCusto($tempoLigacao) * 1.4; // Acréscimo de 40%
    }
}

class PosPago extends Plano {
    const DESCONTO = 0.1; // 10% de desconto

    public function __construct(float $custoPorMinuto) {
        parent::__construct($custoPorMinuto, TipoPlano::POS_PAGO);
    }

    public function calcularCusto(float $tempoLigacao): float {
        return parent::calcularCusto($tempoLigacao) * (1 - self::DESCONTO);
    }
}







>>>>>>> 53a741cf25bfdf4419b920cbecfdb8e48ddd2a0a
?>
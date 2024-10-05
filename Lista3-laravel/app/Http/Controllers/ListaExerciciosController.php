<?php 

namespace App\Http\Controllers;
use Illuminate\Http\Request;


class ListaExerciciosController extends Controller {

    public function mostrarExercicio1() {
        return view("exercicio1");
    }

    public function somar(Request $request) {   
        $num1 = $request->input("valor-1");
        $num2 = $request->input("valor-2");
        $resultado = $num1 + $num2;
        return "O resultado da soma é: " . $resultado;
    }

    // Exercicio 2 

    public function mostrarExercicio2() {
        return view("exercicio2");
    }

    public function subtrair(Request $request) {
        $num1 = $request->input("valor-1");
        $num2 = $request->input("valor-2");
        $resultado = $num1 - $num2;
        return "O resultado da subtração é: " . $resultado;
    }

    // Exercicio 3 
    public function mostrarExercicio3() {
        return view("exercicio3");
    }


    public function multiplicar(Request $request) {
        $num1 = $request->input("valor-1");
        $num2 = $request->input("valor-2");
        $resultado = $num1 * $num2;
        return "O resultado da multiplicação é: " . $resultado;
    }

    // Exercicio 4 
    public function mostrarExercicio4() {
        return view("exercicio4");
    }

    public function divisao(Request $request) {
        $num1 = $request->input("valor-1");
        $num2 = $request->input("valor-2");
        $resultado = $num1 != 0 ? $num1 / $num2 : (string) "Divisão por zero não é permitida.";
        
        return "O resultado da divisão: ". $resultado;
    }

    // Exercicio 5
    public function mostrarExercicio5() {
        return view("exercicio5");
    }

    public function media(Request $request)
    {
        $nota1 = $request->input("nota-1");
        $nota2 = $request->input("nota-2");
        $nota3 = $request->input("nota-3");
        $media = ($nota1 + $nota2 + $nota3) / 3;
        return "O resultado da média: ". $media;
    }
    
    // Exercicio 6 
    public function mostrarExercicio6() {
        return view("exercicio6");
    }
    public function conversaoC(Request $request)
    {
        $fahrenheit = $request->input("fahrenheit");

        // Fórmula de conversão de Fahrenheit para Celsius
        $celsius = ($fahrenheit - 32) * 5/9;

        return "A temperatura " + $fahrenheit + ", convertida para Celcius é ". $celsius;
    }
    // Exercicio 7 
    public function mostrarExercicio7() {
        return view("exercicio7");
    }

    public function conversaoF(Request $request)
    {
        $celsius = $request->input("celsius");

        // Fórmula de conversão de Celsius para Fahrenheit
        $fahrenheit = ($celsius * 9/5) + 32;

        return "A temperatura " + $celsius + ", convertida para Fahrenheit é ". $fahrenheit;
    }

    // Exercicio 8 
    public function mostrarExercicio8() {
        return view("exercicio8");
    }

    public function calcularAreaRetangulo(Request $request)
    {
        $largura = $request->input("largura");
        $altura = $request->input("altura");

        $area = $largura * $altura;

        return "A Area do Retangulo é ". $area; 
    }

    // Exercicio 9 
    public function mostrarExercicio9() {
        return view("exercicio9");
    }

    public function calcularAreaCircle(Request $request)
    {   
        $pi = 3.14159; // Aproximação de pi
        $raio = $request->input("raio");
        $area = $pi * pow($raio, 2);

        return "A Area do ciruclo é ". $area; 
    }

    // Exercicio 10 
    public function mostrarExercicio10() {
        return view("exercicio10");
    }

    public function calcularPerimetroTriangulo(Request $request)
    {
        $largura = $request->input("largura");
        $altura = $request->input("altura");

        $perimeter = 2 * ($largura + $altura);

        return "A perimetro do triangulo é ". $perimeter; 
    }
    // Exercicio 11
    public function mostrarExercicio11() {
        return view("exercicio11");
    }

    public function calcularPerimetroCirculoo(Request $request)
    {
        $raio = $request->intput("raio");
        $pi = 3.14159; // Aproximação de pi

        $perimeter = 2 * $pi * $raio;

        return "A perimetro do circulo é ". $perimeter;   
    
    }

    // Exercicio 12 
    public function mostrarExercicio12() {
        return view("exercicio12");
    }

    public function calcularPow(Request $request)
    {
        $base = $request->input("base");
        $expoente = $request->input("expoente");

        $resultado = $base ** $expoente;

        return "A resultado do número:". $base . " elevado ao ". $expoente ." = ". $resultado;   
    }

    // Exercicio 13
    public function mostrarExercicio13() {
        return view("exercicio13");
    }

    public function converterCentimetros (Request $request)
    {
        $metros = $request->input("meters");

        // 1 metro = 100 centímetros
        $centimetros = $metros * 100;

        return "Convertendo " + $metros + " metros em centimetros fica" . $centimetros;
    }

    // Exercicio 14
    public function mostrarExercicio14() {
        return view("exercicio14");
    }

    public function converterMilha(Request $request)
    {
        $kilometros = $request->input("kilometros");
        $TAXA_CONVERSAO = 0.621371; // Taxa de conversão de quilômetros para milhas

        $milhas = $kilometros * $TAXA_CONVERSAO;

        return "Convertendo " + $kilometros + " de km em milhas é" . $milhas;
    }

    // Exercicio 15 
    public function mostrarExercicio15() {
        return view("exercicio15");
    }

    public function calcularImc(Request $request)
    {
        $peso = $request->input("peso");
        $altura = $request->input("altura");

        $imc = $peso / pow($altura, 2);

        return "O calculo do IMC deu ". $imc;
    }

    // Exercicio 16
    public function mostrarExercicio16() {
        return view("exercicio16");
    }

    public function calcularDesconto(Request $request)
    {
        $preco = $request->input("preco");
        $percentual = $request->input("percentual");

        // Convertendo o percentual para decimal
        $desconto = $preco * ($percentual / 100);

        // Calculando o preço com desconto
        $precoFinal = $preco - $desconto;

        return "O Preço final com desconto ficou". $precoFinal;
    }

    // Exercicio 17
    public function mostrarExercicio17() {
        return view("exercicio17");
    }

    public function calcularCapital(Request $request)
    {
        $capital = $request->input("capital");
        $taxa = $request->input("taxa") / 100; // Convertendo a taxa de juros para decimal
        $periodo = $request->input("periodo");

        $interesse = $capital * $taxa * $periodo;

        return  "Valoor dos juros compostos: ". $interesse;
    }

    // Exericio 18 

    public function mostrarExercicio18() {
        return view("exercicio18");
    
    }

    public function calculateCompoundInterest(Request $request)
    {
        $principal = $request->input("principal");
        $interestRate = $request->input("interestRate") / 100; // Convertendo a taxa de juros para decimal
        $time = $request->input("time");

        $amount = $principal * pow((1 + $interestRate), $time);

        return "Resultado do Amount". $amount;
    }

    // Exercicio 19  
    public function mostrarExercicio19() {
        return view("exercicio19");
    }


}

<?php

// Testa se o composer está carregando as funções do arquivo helpers
if (! function_exists("testeHelpers")){
    function testeHelpers(){
        return "Helpers está funcionando";
    };
};

if (! function_exists("geradorCpf")) {
    function geradorCpf() {
        // $primeirosDigitos = array(fake()->randomNumber(1),fake()->randomNumber(1),fake()->randomNumber(1),fake()->randomNumber(1),fake()->randomNumber(1),fake()->randomNumber(1),fake()->randomNumber(1),fake()->randomNumber(1),fake()->randomNumber(1),fake()->randomNumber(1));

        // Gera os 9 primeiros dígitos do CPF
        $cpf = [11];

        for ($i = 0; $i < 9; $i++) {
            $cpf[$i] = fake()->randomNumber(1);
        };

        // Gera os digitos verificadores

        //Gera o primeiro digito verificador
        $soma = 0;

        for ($i = 0, $m = 10; $i < 9; $i++, $m--) {
            $soma += $cpf[$i] * $m;
        };

        $r = $soma % 11;

        $primeiroVerificador = 0;
        
        if ($r == 0 || $r == 1) {
            $cpf[9] = 0;
        }

        else {
            $cpf[9] = 11 - $r;
        }

        // Gera o segundo digito verificador

        $soma = 0;

        for ($i = 1, $m = 10; $i < 10; $i++, $m--) {
            $soma += $cpf[$i] * $m;
        };

        $r = $soma % 11;

        $segundoVerificador = 0;
        
        if ($r == 0 || $r == 1) {
            $cpf[10] = 0;
        }

        else {
            $cpf[10] = 11 - $r;
        }

        $str = implode("", $cpf);

        return $str;
    };
};

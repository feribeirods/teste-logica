<?php
namespace App;

class ProductStructure
{
    const products = [
        "preto-PP",
        "preto-M",
        "preto-G",
        "preto-GG",
        "preto-GG",
        "branco-PP",
        "branco-G",
        "vermelho-M",
        "azul-XG",
        "azul-XG",
        "azul-XG",
        "azul-P"
    ];

    public function make(): array
    {
        $resultado = array();

        $camisas = products;
        
        foreach($camisas as $camisa) {
        
            // Separa os valores da string em array
            $produto = explode('-', $camisa);
        
            // Seleciona o tamanho e a cor do produto
            $tamanho = $produto[1];
            $cor = $produto[0];
        
            
            // Atribui os valores e as quantidades
            if(!isset($resultado[$cor][$tamanho])) {
                $resultado[$cor][$tamanho] = 1;
                
            } else {
                $resultado[$cor][$tamanho] = $resultado[$cor][$tamanho] + 1;
            }
        
            $resultado[$cor][$tamanho] = $resultado[$cor][$tamanho];
        
            //echo '<pre>';
            //print_r($resultado);
            //echo '</pre>';
        }
        
        return $resultado;
    }
}

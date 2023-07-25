<?php 


class GeraNomeArquivoComUnderline
{
    public static function gerar($nomeArquivo){
        
        $palavra_explode = explode(" ", $nomeArquivo);
        $tamanhoArray = count($palavra_explode);

        if ($tamanhoArray > 1) {
            $palavraMontada = "";
            for ($i = 0; $i < $tamanhoArray; $i++) {
                $palavraMontada .= $palavra_explode[$i];
                if ($i < ($tamanhoArray - 1)) {
                    $palavraMontada .= "_";
                }
            }
        } else {
            $palavraMontada = $nomeArquivo;
        }

        return $palavraMontada;
    }

}
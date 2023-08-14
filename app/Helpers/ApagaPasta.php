<?php


class ApagaPasta
{

    public static function apagar($path)
    {
        //Encontrar a posição da última ocorrência de "/anexo_"
        $position = strrpos($path, '/anexo_');
        //Pegar a substring até essa posição
        $extractedPath = substr($path, 0, $position);

        if (is_dir($extractedPath)) {
            $arquivos = glob($extractedPath . '/*');
            foreach ($arquivos as $arquivo) {
                if (is_file($arquivo)) {
                    unlink($arquivo);
                }
            }
            rmdir($extractedPath);
        }
    }
}

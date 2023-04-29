<?php

class RemoveAcentosString
{
    public static function removeAcentoEDeixaMinusculaString($string){

        $string = mb_strtolower($string, 'UTF-8'); // converte para minúsculas
        $string = preg_replace('/[áàãâä]/ui', 'a', $string);
        $string = preg_replace('/[éèêë]/ui', 'e', $string);
        $string = preg_replace('/[íìîï]/ui', 'i', $string);
        $string = preg_replace('/[óòôõö]/ui', 'o', $string);
        $string = preg_replace('/[úùûü]/ui', 'u', $string);
        $string = preg_replace('/[ç]/ui', 'c', $string);
        
        return $string;
    }

}
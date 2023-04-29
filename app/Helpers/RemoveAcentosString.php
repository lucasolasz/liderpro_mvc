<?php

class RemoveAcentosString
{
    public static function removeAcentoEDeixaMinusculaString($string)
    {

        // Remove acentos
        $string = mb_strtolower($string, 'UTF-8');
        $string = preg_replace('/[áàãâä]/ui', 'a', $string);
        $string = preg_replace('/[éèêë]/ui', 'e', $string);
        $string = preg_replace('/[íìîï]/ui', 'i', $string);
        $string = preg_replace('/[óòôõö]/ui', 'o', $string);
        $string = preg_replace('/[úùûü]/ui', 'u', $string);
        $string = preg_replace('/[ç]/ui', 'c', $string);

        // Remove caracteres especiais
        $string = preg_replace('/[^a-z0-9\s]/i', '', $string);

        return $string;
    }
}

<?php

class Zip
{

    public static function ziparPastaRetornaPathZip($folderPathID)
    {
        $folderPath = 'uploads/anexos/anexo_' . $folderPathID;
        $zipFileName =  $folderPath . '/anexo_' . $folderPathID . '.zip';

        if (class_exists('ZipArchive')) {

            $zip = new ZipArchive();

            if ($zip->open($zipFileName, ZipArchive::CREATE | ZipArchive::OVERWRITE) === true) {

                $files = new RecursiveIteratorIterator(
                    new RecursiveDirectoryIterator($folderPath),
                    RecursiveIteratorIterator::LEAVES_ONLY
                );

                foreach ($files as $name => $file) {
                    if (!$file->isDir()) {
                        $filePath = $file->getRealPath();
                        $relativePath = basename($filePath);

                        $zip->addFile($filePath, $relativePath);
                    }
                }


                $zip->close();
                return $zipFileName;
            } else {
                echo 'Não foi possível criar o arquivo zip.';
            }
        } else {
            echo 'A extensão ZipArchive não está disponível neste servidor.';
        }
    }
}

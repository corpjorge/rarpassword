<?php


namespace CorpJorge\rarpassword;


class rarPassword
{
    public function passwordRar()
    {
        error_reporting(0);

        $filepath = "C:/ruta/archivo.rar";

        $inicio = array(
            'inicio1',
            'Inicio2'
        );

        $final = array(
            'final1',
            'final2'
        );

        foreach ($inicio as $ini ) {

            foreach ($final as $fin) {
                $pass = $ini.'.'.$fin;

                $rar_file = rar_open($filepath,$pass);
                $list = rar_list($rar_file);

                if ($list) {
                    echo $pass;
                }
                rar_close($rar_file);
            }
        }
    }

}
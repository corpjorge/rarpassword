<?php


namespace CorpJorge\rarpassword;


class rarPasswordIndex
{
    public function passwordRar()
    {

        $filepath = 'route';
        $directorioDestino = 'route';

        $inicio = array(
            'value',
        );

        $final = array(
            'value',
        );

        foreach ($inicio as $ini) {
            foreach ($final as $fin) {
                $pass = $ini . '.' . $fin;

                echo $pass . "\n";

                $comando = "unrar x -o+ -p'$pass' \"$filepath\" \"$directorioDestino\"";


                exec($comando, $output, $return_var);

                if ($return_var === 0) {
                    echo "Archivo descomprimido con éxito usando la contraseña: $pass\n";
                    return;
                }
            }
        }

        echo "No se pudo descomprimir el archivo con ninguna de las contraseñas proporcionadas\n";

    }

}


$rar = new rarPasswordIndex();
$rar->passwordRar();


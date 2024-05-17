<?php


namespace CorpJorge\rarpassword;


class rarPasswordC
{
    public function passwordRar()
    {

        $filepath = "url.rar";
        $directorioDestino = '/unzip';


        $inicio = array(
            'value',
        );

        $final = array(
            'value',
        );


        foreach ($inicio as $ini) {
            foreach ($final as $fin) {
                $pass = $ini . '.' . $fin;

                // Comando para descomprimir
                $comando = "unrar x -o+ -p'$pass' '$filepath' '$directorioDestino'";

                // Ejecutar el comando
                exec($comando, $output, $return_var);

                // Verificar si el comando fue exitoso
                if ($return_var === 0) {
                    echo "Archivo descomprimido con éxito usando la contraseña: $pass\n";
                    return; // Sale de la función una vez que encuentra la contraseña correcta
                }
            }
        }

        echo "No se pudo descomprimir el archivo con ninguna de las contraseñas proporcionadas\n";

    }
}


$pass = new rarPasswordC();
$pass->passwordRar();



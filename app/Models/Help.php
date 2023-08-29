<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Help extends Model
{
    use HasFactory;


    /**
     * formato moeda
     */

        static function formatarMoeda($valor) {
            $valorFormatado = number_format($valor, 2, ',', '.');
            return 'R$ ' . $valorFormatado;
        }

    /**
     * substituição de nome
     */

        private static $dicionario = [
            "pendent" => "Pendente",
            "world" => "Pago",
            "remote" => "Remoto",
            "in_person" => "Presencial",
            "mix" => 'Mundial-Mix',
            "design" => 'Mundial-Design',
        ];

        public static function traduzirPalavra($palavra) {
            if (array_key_exists($palavra, self::$dicionario)) {
                return self::$dicionario[$palavra];
            } else {
                return $palavra;

            }
        }

    public function dataBR($data)
    {
        $partes = explode("-", $data);
        if (count($partes) != 3) {
            return "Formato de data inválido. Utilize o formato aaaa-mm-dd.";
        }

        $ano = $partes[0];
        $mes = $partes[1];
        $dia = $partes[2];

        return "{$dia}/{$mes}/{$ano}";
    }



}




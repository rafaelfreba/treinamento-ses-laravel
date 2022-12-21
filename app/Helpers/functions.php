<?php

if (!function_exists('convert_date_to_pt_br')) {
    function convert_date_to_pt_br(string $date): string
    {
        return date('d/m/Y', strtotime($date));
    }
}

if(!function_exists('mask')){
    if (!function_exists('mask')) {
        function mask($val, $type): string
        {
            $val = (string) $val;

            switch ($type) {
                case 'cpf':
                    $mask = '###.###.###-##';
                    break;

                case 'cns':
                    $mask = '###.###.###.###.###';
                    break;

                case 'phone':
                    $mask = '(##)###-###-###';
                    break;
            }

            $maskared = '';
            $k = 0;
            for ($i = 0; $i <= strlen($mask) - 1; ++$i) {
                if ($mask[$i] == '#') {
                    if (isset($val[$k])) {
                        $maskared .= $val[$k++];
                    }
                } else {
                    if (isset($mask[$i])) {
                        $maskared .= $mask[$i];
                    }
                }
            }

            return (string) $maskared;
        }
    }
}
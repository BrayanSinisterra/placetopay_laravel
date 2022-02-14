<?php
namespace App\Helpers;

use Http;

class Funciones
{
    /**
     *  Identifica la ip del cliente conectado
     *
     * @return string ipaddress
     */
    public static function ip_cliente()
    {
        $ipaddress = '';
        if (isset($_SERVER['HTTP_CLIENT_IP'])) {
            $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
        } else if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else if (isset($_SERVER['HTTP_X_FORWARDED'])) {
            $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
        } else if (isset($_SERVER['HTTP_X_CLUSTER_CLIENT_IP'])) {
            $ipaddress = $_SERVER['HTTP_X_CLUSTER_CLIENT_IP'];
        } else if (isset($_SERVER['HTTP_FORWARDED_FOR'])) {
            $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
        } else if (isset($_SERVER['HTTP_FORWARDED'])) {
            $ipaddress = $_SERVER['HTTP_FORWARDED'];
        } else if (isset($_SERVER['REMOTE_ADDR'])) {
            $ipaddress = $_SERVER['REMOTE_ADDR'];
        } else {
            $ipaddress = 'UNKNOWN';
        }

        return $ipaddress;
    }
    /**
     *  Extrae fecha del sistema con formato ISO 8601
     *
     * @return string date
     */
    public static function seed()
    {
        return date('c');
    }
    /**
     *  Extrae fecha del sistema con formato ISO 8601 y suma un tiempo
     *
     * @return string date
     */
    public static function expiration()
    {
        return date('c', strtotime('+' . env('time')));
    }
    /**
     *  Genear un valor aleatorio
     *
     * @return string nonce
     */
    public static function nonce()
    {
        if (function_exists('random_bytes')) {
            $nonce = bin2hex(random_bytes(16));
        } elseif (function_exists('openssl_random_pseudo_bytes')) {
            $nonce = bin2hex(openssl_random_pseudo_bytes(16));
        } else {
            $nonce = mt_rand();
        }
        return $nonce;
    }
    /**
     * Permite el consumo de servicio POST sin autenticación por HTTP
     *
     * @return string json
     */
    public function post($base, $route, $data)
    {
        return json_decode((Http::post($base . $route, $data))->body());
    }

    /**
     * Permite el consumo de servicio GET con un cuerpo de datos
     *
     * @return string json
     */
    public function get($base, $route, $data)
    {
        return json_decode((Http::get($base . $route, $data))->body());
    }

}

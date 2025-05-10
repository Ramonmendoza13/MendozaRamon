<?php
/**
 * Tarea 5 actividad 1.
 * 
 * @author Ramón Mendoza
 * @version 1.0
 * @internal Esro solo pueden ver los desarroladores.
 */

/**
 * Suma dos números enteros.
 *
 * Esta función recibe dos números enteros y devuelve su suma.
 *
 * @param int $a El primer número a sumar.
 * @param int $b El segundo número a sumar.
 * @return int El resultado de la suma.
 */
function sumar(int $a, int $b): int {
    return $a + $b;
}

/**
 * Devuelve un saludo personalizado.
 *
 * Esta función genera un mensaje de saludo a partir del nombre recibido.
 *
 * @param string $nombre El nombre de la persona a saludar.
 * @return string El mensaje de saludo.
 * @internal Esta funcion solo debe ser visibl een la documentacion para desarrolladores.
 */
function saludar(string $nombre): string {
    return "Hola, $nombre. ¡Bienvenido!";
}


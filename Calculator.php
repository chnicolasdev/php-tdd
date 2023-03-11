<?php

class Calculator
{
    /**
     * Retorna la suma de dos números enteros
     * @param int $a
     * @param int $b
     */
    public function add( int $a, int $b) : int 
    {
        return $a + $b;
    }
    /**
     * Retorna la resta de dos números enteros
     * @param int $a
     * @param int $b
     */
    public function subtract( int $a, int $b) : int 
    {
        return $a - $b;
    }
    /**
     * Retorna la multiplicación de dos números enteros
     * @param int $a
     * @param int $b
     */
    public function multiply( int $a, int $b) : int 
    {
        return $a * $b;
    }
    /**
     * Retorna la división de dos números enteros
     * @param int $a
     * @param int $b
     */
    public function divide( int $a, int $b) : float
    {
        if ($b === 0) {
            throw new InvalidArgumentException('No se puede dividir entre 0');
        }
        return $a / $b;
    }
}
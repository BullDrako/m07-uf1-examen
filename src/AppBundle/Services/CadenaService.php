<?php
/**
 * Created by PhpStorm.
 * User: edgar
 * Date: 19/11/15
 * Time: 19:42
 */

namespace AppBundle\Services;


class CadenaService
{
    private $cadena1;
    private $cadena2;
    private $result;

    /**
     * @return mixed
     */
    public function getCadena1()
    {
        return $this->cadena1;
    }

    /**
     * @param mixed $cadena1
     */
    public function setCadena1($cadena1)
    {
        $this->cadena1 = $cadena1;
    }

    /**
     * @return mixed
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * @param mixed $result
     */
    public function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return mixed
     */
    public function getCadena2()
    {
        return $this->cadena2;
    }

    /**
     * @param mixed $cadena2
     */
    public function setCadena2($cadena2)
    {
        $this->cadena2 = $cadena2;
    }

    /**
     * UpperCase
     *
     * Descripton
     */
    public function mayusculas()
    {
        $this->result = strtoupper($this->cadena1)."  ".strtoupper($this->cadena2);
    }

    /**
     * Lowercase
     *
     * Descripton
     */
    public function minusculas()
    {
        $this->result = strtolower($this->cadena1)."  ".strtolower($this->cadena2);
    }

    /**
     * Length
     *
     * Descripton
     */
    public function longitud()
    {
        $this->result = strlen($this->cadena1)."  ".strlen($this->cadena2);
    }

    /**
     * Concatenate
     *
     * Description
     */
    public function concatenar()
    {
        $this->result = $this->cadena1.$this->cadena2;
    }

    /**
     * Charat
     *
     * Descripction
     */
    public function charat()
    {
        $cortar=2;
        $posicion=0;
        $this->result = substr($this->cadena1,$posicion,$cortar)." ".substr($this->cadena2,$posicion,$cortar);


    }


}
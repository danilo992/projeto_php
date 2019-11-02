<?php

namespace VendaException;

class VendaException extends \LogicException {
    private $codigo;

    public function __construct($codigo = 0, Exception $previous = null) {
        $this->codigo = $codigo;
        parent::__construct($message, $codigo, $previous);
    }

    public function getCodigo(){
        return $this->codigo;
    }
}
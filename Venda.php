<?php

namespace Venda;

class Venda {

    private $itens = [];

    public function adicionar($ItemVenda) {
        if($ItemVanda == null) {
            throw new \InvalidArgumentException("Item não pode ser nulo");
        }
        array_push($this->itens, $ItemVenda); 
    }

    public function getTotal(){
        $total = 0;

        if(!count($this->itens)) {
            throw new \LogicException("Quatidadede itens inválida.");
        }

        foreach ($this->itens as $item) {
            $total += $item->getPreco();
        }

        return $total;
    }
}
?>
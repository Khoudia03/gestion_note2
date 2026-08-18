<?php

namespace App\Model\Entity;

class Transfert {
    public int $id;
    private string $type_de_transfert;
    public Inscription $idInscription;

    public function __construct() 
    {
        $this->id = $id;
        $this->type_de_transfert = $type_de_transfert;
        $this->idInscription = $idInscription;
    }

    public function getTypeTransfert() : string 
    {

        return $this->type_de_transfert;
    }

    public function setTypeTransfert(string $type_de_transfert) : void 
    {

        if($type_de_transfert == 'ENTRANT' || $type_de_transfert == 'SORTANT')
        {
            $this->type_de_transfert = $type_de_transfert;
        }
    }

}
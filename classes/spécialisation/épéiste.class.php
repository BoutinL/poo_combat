<?php
    class Epeiste extends Combattant{
        public function __construct(){
            $this->pv=100;
            $this->atkr=0;
            $this->atkc=10;
            $this->defr=6;
            $this->defc=8;
        }
        public function defendre($ennemie){
            $this->pv = $this->pv-$ennemie->atkr;
        }
    }
?>
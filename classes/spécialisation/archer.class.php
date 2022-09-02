<?php
    class Archer extends Combattant{
        public function __construct(){
            $this->pv=100;
            $this->atkr=8;
            $this->atkc=6;
            $this->defr=8;
            $this->defc=6;
        }
        public function defendre($ennemie){
            $this->pv = $this->pv-$ennemie->atkc;
        }
    }
?>
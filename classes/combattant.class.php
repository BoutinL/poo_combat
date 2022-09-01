<?php
    abstract class Combattant{
        public $pv;
        public $atkr;
        public $atkc;
        public $defr;
        public $defc;

    abstract public function defendre($ennemie);
    }
?>
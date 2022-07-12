<?php

class FrrokGroup{
    private $emri;
    private $mbiemri;
    private $dataLindjes;
    private $qyteti;
    private $gjinia;
    private $paguesa;

    function __construct($emri,$mbiemri,$dataLindjes,$qyteti,$gjinia,$paguesa){
        $this->emri = $emri;
        $this->mbiemri=$mbiemri;
        $this->dataLindjes=$dataLindjes;
        $this->qyteti = $qyteti;
        $this->gjinia = $gjinia;
        $this->paguesa = $paguesa;
    }
    function get_emri(){
        return $this->emri;
    }
    function set_emri($emri){
        $this->emri=$emri;
    }
    function get_mbiemri($mbiemri) {
        $this->mbiemri = $mbiemri;
    }
    function set_mbiemri($mbiemri){
        $this->mbiemri=$mbiemri;
    }
    function get_dataLindjes(){
        return $this->dataLindjes;
    }
    function set_dataLindjes($dataLindjes){
        $this->dataLindjes=$dataLindjes;
    }
    function get_qyteti(){
        return $this->qyteti;
    }
    function set_qyteti($qyteti){
        $this->qyteti=$qyteti;
    }
    function get_gjinia(){
        return $this->gjinia;
    }
    function set_gjinia($gjinia){
        $this->gjinia=$gjinia;
    }
    function get_paguesa(){
        return $this->paguesa;
    }
    function set_paguesa($paguesa){
        $this->paguesa=$paguesa;
    }
	public function __destruct()
    {
        echo "I'm dead now :(";
    }
}
?>
<?php
//Sukurti klasę Kibiras1. Sukurti protected savybę akmenuKiekis.
// Parašyti šiai savybei metodus prideti1Akmeni() pridetiDaugAkmenu($kiekis) ir metodą kiekPririnktaAkmenu().
// Sukurti kibiro objektą ir pademonstruoti akmenų rinkimą į kibirą ir rezultatų išvedimą.
class Kibiras1 {
    protected $akmenuKiekis = 0;

    public function prideti1Akmeni() {
        $this->akmenuKiekis++;
    }

    public function pridetiDaugAkmenu($kiekis) {
        $this->akmenuKiekis += $kiekis;
    }

    public function kiekPririnktaAkmenu() {
        return $this->akmenuKiekis;
    }
}
$kibiras = new Kibiras1();
$kibiras->prideti1Akmeni(); // prideda 1 akmenį
$kibiras->pridetiDaugAkmenu(10); // prideda 10 akmenų
echo "Pririnkta akmenų: " . $kibiras->kiekPririnktaAkmenu(); // gaunam "Pririnkta akmenų: 11"

?>
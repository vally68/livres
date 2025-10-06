<?php
// Auteur.php
class Auteur {
    private $_nom;
    private $_prenom;
    private $_birth; // stocke une date au format string interprétable par DateTime

    public function __construct(string $_nom, string $_prenom, string $_birth) {
        $this->nom    = $_nom;
        $this->prenom = $_prenom;
        $this->birth  = $_birth;
    }

    public function getNom(): string    { return $this->nom; }
    public function getPrenom(): string { return $this->prenom; }
    public function getBirth(): string  { return $this->birth; }

    public function __toString(): string {
        return "{$this->prenom} {$this->nom}";
    }
}



// function Age($date_naissance) {
//     $arr1 = explode('/', $date_naissance);
//     $arr2 = explode('/', date('d/m/Y'));
//     if(($arr1[1] < $arr2[1]) || (($arr1[1] == $arr2[1]) && ($arr1[0] <= $arr2[0])))
//     return $arr2[2] - $arr1[2];
//     return $arr2[2] - $arr1[2] - 1;
// }

// $ma_date_de_naissance = '19/07/1992';
// $mon_age = Age($ma_date_de_naissance);
// echo $mon_age ." ans.";

//   $dateNaissance = "21-12-1947";
//   $aujourdhui = date("Y-m-d");
//   $diff = date_diff(date_create($dateNaissance), date_create($aujourdhui));
//   echo 'BLABLA '.$diff->format('%y');

?>

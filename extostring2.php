<?php
    abstract class Utilisateur{
        protected $user_name;
        protected $user_region;
        protected $prix_abo;
        protected $user_pass;
        public const ABONNEMENT = 15;
        
        public function __destruct(){
            //Du code à exécuter
        }
        
        abstract public function setPrixAbo();
        
        public function getNom(){
            echo $this->user_name;
        }

        public function getPrixAbo(){
            echo $this->prix_abo;
        }
        
        public function __toString(){
            return 'Nom d\'utilisateur : ' .$this->user_name. '<br>
            Prix de l\'abonnement : ' .$this->prix_abo. '<br><br>';
        }
    }
?>
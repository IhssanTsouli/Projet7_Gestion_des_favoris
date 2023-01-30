<?php
 Abstract class Batiment{
    public $adresse;
    public function Presenter(){
        echo"Je suis Batiment";
     }
 }

 class Maison extends Batiment{
    public function Presenter(){
        echo"Je suis Maison";
     }
   
 }
 class Immeuble extends Batiment{
    public function Presenter(){
        echo"Je suis Immeuble";
     }
   
 }

 Interface IGestionBatiment{
    public function Ajouter($batiment);
    public function Supprimer($batiment);

 }
 class GestionBatiment implements IGestionBatiment {
    public $compteur=0;

    public function Ajouter($batiment)
    {
        $this->compteur++;
    }
     public function Supprimer($batiment){
        $this->compteur--;
     }
 }


 $maison = new Maison();
 $maison->adresse="drissia";
 $maison->Presenter();
echo "<br>";
 $immeuble = new Immeuble();
 $immeuble->adresse="Gezenaya";
 $immeuble->Presenter();
 
 $test1 = new GestionBatiment;

 $test1->Ajouter($maison);
 $test1->Ajouter($immeuble);
 echo "<br>";
 echo "le nombre est ".$test1->compteur . "<br>";

 $test2 = new GestionBatiment;

 $test2->Ajouter($maison);
 $test2->Ajouter($maison);
 $test2->Ajouter($immeuble);
 echo "<br>";
 echo "le nombre est ".$test2->compteur . "<br>";



?>
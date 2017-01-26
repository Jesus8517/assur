<?php
  Class conseiller {
    private $id_conseiller;
    private $nom_conseiller;
    private $type_produit;

    public function setIdConseiller($id){
      $id_conseiller = $id;}
    public function setNomConseiller($nom){
      $nom_conseiller = $nom;}
    public function setTypeProduit($tp){
      $type_produit = $tp;}

    public function getIdConseiller(){
      return $this->$id_conseiller;}
    public function getNomConseiller(){
      return  $this->$nom_conseiller;}
    public function gettypeProduit(){
      return $this->$type_produit;}

    public function creerClient(){
      $connexion= mysql_connect(HOST,USER,PASS,DB);
      if(!$connexion){
        die('Connexion impossible' : .mysql_error());
      }
      echo 'Correctement connecté';
      $result = mysqli_query("INSERT INTO Client VALUES ($id_client,$nom_client)");
      mysql_close($connexion);
    }

    public function modifierClient(){
      $connexion= mysql_connect(HOST,USER,PASS,DB);
      if(!$connexion){
        die('Connexion impossible' : .mysql_error());
      }
      echo 'Correctement connecté';
      $result = mysqli_query("UPDATE Client SET ($id_client,$nom_client) WHERE $this->$id_client=$id_client AND $this->$nom_client=$nom_client");
      mysql_close($connexion);
    }

    public function visualiserClient(){
      $connexion= mysql_connect(HOST,USER,PASS,DB);
      if(!$connexion){
        die('Connexion impossible' : .mysql_error());
      }
      echo 'Correctement connecté';
      $result = mysqli_query("SELECT * FROM Client");
      mysql_close($connexion);
    }

    public function ajouterAssurance(){

    }
  }
 ?>

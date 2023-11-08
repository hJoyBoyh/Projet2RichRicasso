<?php
require_once(__DIR__ . "/../models/ProduitModel.php");

class ProduitController
{
    private $model;
    public function __construct($pdo)
    {
        $this->model = new ProduitModel($pdo);
    }

    public function getAllProduit()
    {
        return $this->model->getAllProduit();
    }
    public function getProduitById($id)
    {
        return $this->model->getProduitById($id);
    }
    public function getProduitByType($type)
    {
       
        return $this->model->getProduitByType($type);
    }
    public function getProduitByCouleur($couleur){
        return $this->model->getProduitByCouleur($couleur);
    }
    public function getProduitByTaille($taille)
    {
        return $this->model->getProduitByTaille($taille);
    }
    public function getProduitSortByPrixASC()
    {
        return $this->model->getProduitSortByPrixASC();
    }
    public function getProduitSortByPrixDESC()
    {
        return $this->model->getProduitSortByPrixDESC();
    }
  
}

?>
<?php
class ProduitModel{
    private $pdo;
    public function __construct($pdo) {
    $this->pdo = $pdo;
    }
    public function getAllProduit() {
        $stmt = $this->pdo->query("SELECT * FROM produit");
        return $stmt->fetchAll();
    }
    public function getProduitById($id) {
        $stmt = $this->pdo->prepare("SELECT * FROM produit WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch();
    }
    public function getProduitByType($type) {
        $stmt = $this->pdo->prepare("SELECT * FROM produit WHERE type = ?");
        $stmt->execute([$type]);
        return $stmt->fetchAll();
    }
    public function getProduitByCouleur($couleur) {
        $stmt = $this->pdo->prepare("SELECT * FROM produit WHERE couleur = ?");
        $stmt->execute([$couleur]);
        return $stmt->fetchAll();
    }
    public function getProduitByTaille($taille) {
        $stmt = $this->pdo->prepare("SELECT * FROM produit WHERE taille = ?");
        $stmt->execute([$taille]);
        return $stmt->fetchAll();
    }
    
    public function getProduitSortByPrixASC() {
        $stmt = $this->pdo->prepare("SELECT * FROM produit ORDER BY prix ASC");
        $stmt->execute();
        return $stmt->fetchAll();
    }
    public function getProduitSortByPrixDESC() {
        $stmt = $this->pdo->prepare("SELECT * FROM produit ORDER BY prix DESC");
        $stmt->execute();
        return $stmt->fetchAll();
    }
}
?>
<?php

class InfolettreModel{
    private $pdo;
    public function __construct($pdo) {
    $this->pdo = $pdo;
    }

    public function addEmail($data) {
        $stmt = $this->pdo->prepare("INSERT INTO infolettre (courriel) VALUES (?)");
        return $stmt->execute([$data['courriel']]);
        }
}

?>
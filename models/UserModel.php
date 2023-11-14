<?php
class UserModel{
    private $pdo;
    public function __construct($pdo) {
    $this->pdo = $pdo;
    }
    public function getAllUsers() {
        $stmt = $this->pdo->query("SELECT * FROM user");
        return $stmt->fetchAll();
        }
        public function getUserById($id) {
        $stmt = $this->pdo->prepare("SELECT * FROM user WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch();
        }
        public function getUserByEmail($courriel) {
            $stmt = $this->pdo->prepare("SELECT * FROM user WHERE courriel = ?");
            $stmt->execute([$courriel]);
            return $stmt->fetch();
        }
        public function createUser($data) {
        $stmt = $this->pdo->prepare("INSERT INTO user (nom, courriel,
      mdp, permission ) VALUES (?, ?, ?, ?)");
        return $stmt->execute([$data['nom'], $data['courriel'], $data['mdp'], $data
      ['permission']]);
        }
        public function updateUser($id, $data) {
        $stmt = $this->pdo->prepare("UPDATE user SET nom = ?,
      courriel = ?, mdp = ? WHERE id = ?");
        return $stmt->execute([$data['nom'], $data['courriel'],$data['mdp'], $id]);
        }
        public function deleteUser($id) {
        $stmt = $this->pdo->prepare("DELETE FROM user WHERE id = ?");
        return $stmt->execute([$id]);
        }
}
?>
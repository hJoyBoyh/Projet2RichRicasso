<?php
require_once(__DIR__ . "/../models/InfolettreModel.php");
class InfolettreController{
private $model;
public function __construct($pdo)
{
    $this->model = new InfolettreModel($pdo);
}


public function addEmail($data) {
   
    return $this->model->addEmail($data);
}

}

?>
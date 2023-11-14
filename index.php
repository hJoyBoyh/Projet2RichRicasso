<?php
require_once('controllers/UserController.php');
require_once('controllers/ProduitController.php');

require_once(dirname(__FILE__) . "/manager/dbManager.php");






$uri = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];

$dbManager = DBManager::getInstance();

$userController = new UserController($dbManager->getDBConnection());
$produitController = new ProduitController($dbManager->getDBConnection());




switch ($method | $uri) {
  //user api-----------------------------------------------------
  case ($method = 'GET' && $uri == '/Projet2RichRicasso/'):
    header('location: accueil.php');
    break;
  case ($method = 'GET' && $uri == '/Projet2RichRicasso/api/users'):

    $users = $userController->getAllUsers();
    echo json_encode($users);
    break;

  case ($method = 'GET' && $uri == '/Projet2RichRicasso/api/admin'):
    $users = $userController->getUserById(1);
    //header("Content-Type: application/json");
    echo json_encode($users);
    break;
  case ($method = 'GET' && preg_match('/\/Projet2RichRicasso\/api\/users\/[1-9]+/', $uri)):
    $uriParts = explode('/', $uri);
    $id = end($uriParts);

    break;
  // produit api-------------------------------------------------------

  case ($method = 'GET' && $uri == '/Projet2RichRicasso/api/produits'):
    $produits = $produitController->getAllProduit();
    echo json_encode($produits);
    break;
  //produit id
  case ($method = 'GET' && preg_match('/\/Projet2RichRicasso\/api\/produits\/[1-9]+/', $uri)):
    $uriParts = explode('/', $uri);
    $id = end($uriParts);
    $produits = $produitController->getProduitById($id);
    echo json_encode($produits);
    break;
  //produit taille 
  case ($method = 'GET' && preg_match('/\/Projet2RichRicasso\/api\/produits\/unique/', $uri)):

    $produits = $produitController->getProduitByTaille('1');

    echo json_encode($produits);
    break;
  case ($method = 'GET' && preg_match('/\/Projet2RichRicasso\/api\/produits\/quarantequatre/', $uri)):

    $produits = $produitController->getProduitByTaille('44');

    echo json_encode($produits);
    break;
  case ($method = 'GET' && preg_match('/\/Projet2RichRicasso\/api\/produits\/quarantehuit/', $uri)):

    $produits = $produitController->getProduitByTaille('48');

    echo json_encode($produits);
    break;
  case ($method = 'GET' && preg_match('/\/Projet2RichRicasso\/api\/produits\/cinquantequatre/', $uri)):

    $produits = $produitController->getProduitByTaille('54');

    echo json_encode($produits);
    break;
  case ($method = 'GET' && preg_match('/\/Projet2RichRicasso\/api\/produits\/cinquantesix/', $uri)):

    $produits = $produitController->getProduitByTaille('56');

    echo json_encode($produits);
    break;
  // produit type
  case ($method = 'GET' && preg_match('/\/Projet2RichRicasso\/api\/produits\/cravates/', $uri)):
    $produits = $produitController->getProduitByType('Cravates');
    echo json_encode($produits);
    break;
  case ($method = 'GET' && preg_match('/\/Projet2RichRicasso\/api\/produits\/chemises/', $uri)):
    $produits = $produitController->getProduitByType('Chemises');
    echo json_encode($produits);
    break;
  // produit sort prix  plus petit au plus grand
  case ($method = 'GET' && $uri == '/Projet2RichRicasso/api/produits/asc'):
    $produits = $produitController->getProduitSortByPrixASC();
    echo json_encode($produits);
    break;
  case ($method = 'GET' && $uri == '/Projet2RichRicasso/api/produits/desc'):
    $produits = $produitController->getProduitSortByPrixDESC();
    echo json_encode($produits);
    break;

  // produit couleur
  case ($method = 'GET' && preg_match('/\/Projet2RichRicasso\/api\/produits\/rose/', $uri)):
    $produits = $produitController->getProduitByCouleur('Rose');
    echo json_encode($produits);
    break;
  case ($method = 'GET' && preg_match('/\/Projet2RichRicasso\/api\/produits\/violet/', $uri)):
    $produits = $produitController->getProduitByCouleur('Violet');
    echo json_encode($produits);
    break;
  case ($method = 'GET' && preg_match('/\/Projet2RichRicasso\/api\/produits\/vert/', $uri)):
    $produits = $produitController->getProduitByCouleur('Vert');
    echo json_encode($produits);
    break;
  case ($method = 'GET' && preg_match('/\/Projet2RichRicasso\/api\/produits\//', $uri)):
    $produits = $produitController->getProduitByCouleur('Blanc');
    echo json_encode($produits);
    break;




  default:
    echo "Erreur : Chemin non reconnu ou non pris en charge.";
}



?>
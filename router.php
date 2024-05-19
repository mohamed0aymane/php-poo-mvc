<?php
// router.php
require_once 'Controllers/faculteController.php';
require_once 'config.php';
require_once 'helpers.php'; // Inclure le fichier helpers pour start_session()

$faculteManager = new FaculteManager($pdo);

$action = isset($_GET['action']) ? $_GET['action'] : 'index';
$title = isset($titles[$action]) ? $titles[$action] : 'Accueil';

switch ($action) {
    case 'index':
        indexAction($title);
        break;
    case 'etudiant':
        etudiantAction($title, $faculteManager);
        break;
    case 'filiere':
        filiereAction($title, $faculteManager);
        break;
    case 'departement':
        departementAction($title, $faculteManager);
        break;
    case 'view_department':
        viewDepartmentAction($title, $faculteManager);
        break;
    case 'modify_department':
        modifyDepartmentAction($title, $faculteManager);
        break;
    case 'delete_department':
        deleteDepartmentAction($title, $faculteManager);
        break;
    case 'add_department':
        addDepartmentAction($title, $faculteManager);
        break;
    case 'view_etudiant':
        viewEtudiantAction($title, $faculteManager);
        break;
    case 'modify_etudiant':
        modifyEtudiantAction($title, $faculteManager);
        break;
    case 'delete_etudiant':
        deleteEtudiantAction($title, $faculteManager);
        break;
    case 'add_etudiant':
        addEtudiantAction($title, $faculteManager);
        break;
    case 'view_filiere':
        viewFiliereAction($title, $faculteManager);
        break;
    case 'modify_filiere':
        modifyFiliereAction($title, $faculteManager);
        break;
    case 'delete_filiere':
        deleteFiliereAction($title, $faculteManager);
        break;
    case 'add_filiere':
        addFiliereAction($title, $faculteManager);
        break;
    case 'login':
        loginAction($title);
        break;
    case 'logout':
        logoutAction();
        break;
    default:
        indexAction($title);
        break;
}
?>

<?php
require_once 'Models/Etudiants.php';
require_once 'Models/Filieres.php';
require_once 'Models/Departements.php';
require_once 'Models/FaculteManager.php';

require_once 'config.php';

$faculteManager = new FaculteManager($pdo);

function change_views($title, $action) {
    global $faculteManager;

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

}

function indexAction($title) {
    if (!isset($_SESSION['loggedin'])) {
        header('Location: index.php?action=login');
        exit;
    }
    $view = "Views/vIndex.php";
    $variables = ['title' => $title];
    render($view, $variables);
}

function etudiantAction($title, $faculteManager) {
    if (!isset($_SESSION['loggedin'])) {
        header('Location: index.php?action=login');
        exit;
    }
    $view = "Views/Etudiant/vListeEtudiants.php";
    $etudiants = $faculteManager->listeEtudiants();
    $variables = ['title' => $title, 'etudiants' => $etudiants];
    render($view, $variables);
}

function filiereAction($title, $faculteManager) {
    if (!isset($_SESSION['loggedin'])) {
        header('Location: index.php?action=login');
        exit;
    }
    $view = "Views/Filieres/vListeFilieres.php";
    $filieres = $faculteManager->listeFilieres();
    $variables = ['title' => $title, 'filieres' => $filieres];
    render($view, $variables);
}

function departementAction($title, $faculteManager) {
    if (!isset($_SESSION['loggedin'])) {
        header('Location: index.php?action=login');
        exit;
    }
    $view = "Views/Departement/vListeDepartements.php";
    $departements = $faculteManager->listeDepartements();
    $variables = ['title' => $title, 'departements' => $departements];
    render($view, $variables);
}

function loginAction($title) {
    global $pdo; 

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        $sql = "SELECT username , password FROM users WHERE username = :username";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([':username' => $username]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($password==$user['password']) {
            session_start();
            $_SESSION['loggedin'] = true;
            header('Location: index.php?action=index');
            exit;
        } else {
            $error = 'Invalid username or password';
        }
    }
    $view = "Views/login.php";
    $variables = ['title' => $title, 'error' => isset($error) ? $error : ''];
    render($view, $variables);
}

function viewDepartmentAction($title, $faculteManager) {
    $code = $_GET['code'];
    $departement = $faculteManager->getDepartement($code);
    $view = "Views/Departement/viewDepartment.php";
    $variables = ['title' => $title, 'departement' => $departement];
    render($view, $variables);
}

function modifyDepartmentAction($title, $faculteManager) {
    $code = $_GET['code'];
    $departement = $faculteManager->getDepartement($code);
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $departement->setNom($_POST['Nom_du_departement']);
        $faculteManager->updateDepartement($departement);
        header('Location: index.php?action=departement');
        exit;
    }
    $view = "Views/Departement/modifyDepartment.php";
    $variables = ['title' => $title, 'departement' => $departement];
    render($view, $variables);
}

function deleteDepartmentAction($title, $faculteManager) {
    $code = $_GET['code'];
    $faculteManager->deleteDepartement($code);
    header('Location: index.php?action=departement');
    exit;
}

function addDepartmentAction($title, $faculteManager) {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $newData = $_POST;
        $faculteManager->addDepartement($newData);
        header('Location: index.php?action=departement');
        exit;
    }
    $view = "Views/Departement/addDepartment.php";
    $variables = ['title' => $title];
    render($view, $variables);
}

function viewEtudiantAction($title, $faculteManager) {
    $code = $_GET['code'];
    $etudiant = $faculteManager->getEtudiant($code);
    $view = "Views/Etudiant/viewEtudiant.php";
    $variables = ['title' => $title, 'etudiant' => $etudiant];
    render($view, $variables);
}

function modifyEtudiantAction($title, $faculteManager) {
    $code = $_GET['code'];
    $etudiant = $faculteManager->getEtudiant($code);
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $etudiant->setNom($_POST['Nom']);
        $etudiant->setPrenom($_POST['Prenom']);
        $etudiant->setNote($_POST['Note']);
        $etudiant->setFiliere($_POST['Filiere']);
        $faculteManager->updateEtudiant($etudiant);
        header('Location: index.php?action=etudiant');
        exit;
    }
    $view = "Views/Etudiant/modifyEtudiant.php";
    $variables = ['title' => $title, 'etudiant' => $etudiant];
    render($view, $variables);
}

function deleteEtudiantAction($title, $faculteManager) {
    $code = $_GET['code'];
    $faculteManager->deleteEtudiant($code);
    header('Location: index.php?action=etudiant');
    exit;
}

function addEtudiantAction($title, $faculteManager) {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $newData = $_POST;
        $faculteManager->addEtudiant($newData);
        header('Location: index.php?action=etudiant');
        exit;
    }
    $view = "Views/Etudiant/addEtudiant.php";
    $variables = ['title' => $title];
    render($view, $variables);
}

function viewFiliereAction($title, $faculteManager) {
    $code = $_GET['code'];
    $filiere = $faculteManager->getFiliere($code);
    $view = "Views/Filiere/viewFiliere.php";
    $variables = ['title' => $title, 'filiere' => $filiere];
    render($view, $variables);
}

function modifyFiliereAction($title, $faculteManager) {
    $code = $_GET['code'];
    $filiere = $faculteManager->getFiliere($code);
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $filiere->setIntituleF($_POST['IntituleF']);
        $faculteManager->updateFiliere($filiere);
        header('Location: index.php?action=filiere');
        exit;
    }
    $view = "Views/Filiere/modifyFiliere.php";
    $variables = ['title' => $title, 'filiere' => $filiere];
    render($view, $variables);
}

function deleteFiliereAction($title, $faculteManager) {
    $code = $_GET['code'];
    $faculteManager->deleteFiliere($code);
    header('Location: index.php?action=filiere');
    exit;
}

function addFiliereAction($title, $faculteManager) {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $newData = $_POST;
        $faculteManager->addFiliere($newData);
        header('Location: index.php?action=filiere');
        exit;
    }
    $view = "Views/Filiere/addFiliere.php";
    $variables = ['title' => $title];
    render($view, $variables);
}

function logoutAction() {
    session_start();
    session_destroy();
    header('Location: index.php?action=login');
    exit;
}

function render($vue, $variables = array()) {
    if (file_exists($vue)) {
        extract($variables);
        ob_start();
        require($vue);
        $view = ob_get_clean();
        require("Views/template.php");
        exit;
    } else {
        throw new Exception("La vue $vue n'existe pas");
    }
}
?>

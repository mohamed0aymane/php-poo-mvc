<?php
require_once 'Etudiants.php';
require_once 'Filieres.php';
require_once 'Departements.php';

class FaculteManager {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    // Méthodes pour les étudiants
    public function listeEtudiants() {
        return Etudiant::listeEtudiants($this->pdo);
    }

    public function getEtudiant($codeE) {
        $sql = "SELECT * FROM etudiants WHERE CodeE = :codeE";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([':codeE' => $codeE]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return new Etudiant($row['CodeE'], $row['Nom'], $row['Prenom'], $row['Note'], $row['Filiere']);
    }

    public function updateEtudiant($etudiant) {
        $sql = "UPDATE etudiants SET Nom = :nom, Prenom = :prenom, Note = :note, Filiere = :filiere WHERE CodeE = :codeE";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([
            ':nom' => $etudiant->getNom(),
            ':prenom' => $etudiant->getPrenom(),
            ':note' => $etudiant->getNote(),
            ':filiere' => $etudiant->getFiliere(),
            ':codeE' => $etudiant->getCodeE()
        ]);
    }

    public function deleteEtudiant($codeE) {
        $sql = "DELETE FROM etudiants WHERE CodeE = :codeE";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([':codeE' => $codeE]);
    }

    public function addEtudiant($data) {
        $sql = "INSERT INTO etudiants (CodeE, Nom, Prenom, Note, Filiere) VALUES (:codeE, :nom, :prenom, :note, :filiere)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([
            ':codeE' => $data['CodeE'],
            ':nom' => $data['Nom'],
            ':prenom' => $data['Prenom'],
            ':note' => $data['Note'],
            ':filiere' => $data['Filiere']
        ]);
    }

    // Méthodes pour les filières
    public function listeFilieres() {
        return Filiere::listeFilieres($this->pdo);
    }

    public function getFiliere($codeF) {
        $sql = "SELECT * FROM filieres WHERE CodeF = :codeF";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([':codeF' => $codeF]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return new Filiere($row['CodeF'], $row['IntituleF']);
    }

    public function updateFiliere($filiere) {
        $sql = "UPDATE filieres SET IntituleF = :intitule WHERE CodeF = :codeF";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([':intitule' => $filiere->getIntituleF(), ':codeF' => $filiere->getCodeF()]);
    }

    public function deleteFiliere($codeF) {
        $sql = "DELETE FROM filieres WHERE CodeF = :codeF";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([':codeF' => $codeF]);
    }

    public function addFiliere($data) {
        $sql = "INSERT INTO filieres (CodeF, IntituleF) VALUES (:codeF, :intitule)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([':codeF' => $data['CodeF'], ':intitule' => $data['IntituleF']]);
    }

    // Méthodes pour les départements
    public function listeDepartements() {
        return Departement::listeDepartements($this->pdo);
    }

    public function getDepartement($codeD) {
        $sql = "SELECT * FROM departements WHERE CodeD = :codeD";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([':codeD' => $codeD]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return new Departement($row['CodeD'], $row['Nom_du_departement']);
    }

    public function updateDepartement($departement) {
        $sql = "UPDATE departements SET Nom_du_departement = :nom WHERE CodeD = :codeD";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([':nom' => $departement->getNom(), ':codeD' => $departement->getCodeD()]);
    }

    public function deleteDepartement($codeD) {
        $sql = "DELETE FROM departements WHERE CodeD = :codeD";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([':codeD' => $codeD]);
    }

    public function addDepartement($data) {
        $sql = "INSERT INTO departements (CodeD, Nom_du_departement) VALUES (:codeD, :nom)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([':codeD' => $data['CodeD'], ':nom' => $data['Nom_du_departement']]);
    }
}
?>

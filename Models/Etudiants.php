<?php
class Etudiant {
    private $codeE;
    private $nom;
    private $prenom;
    private $note;
    private $filiere;

    public function __construct($codeE, $nom, $prenom, $note, $filiere) {
        $this->codeE = $codeE;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->note = $note;
        $this->filiere = $filiere;
    }

    public function getCodeE() {
        return $this->codeE;
    }

    public function getNom() {
        return $this->nom;
    }

    public function getPrenom() {
        return $this->prenom;
    }

    public function getNote() {
        return $this->note;
    }

    public function getFiliere() {
        return $this->filiere;
    }

    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    public function setNote($note) {
        $this->note = $note;
    }

    public function setFiliere($filiere) {
        $this->filiere = $filiere;
    }

    public static function listeEtudiants($pdo) {
        $sql = "SELECT * FROM etudiants";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $etudiants = [];
        foreach ($rows as $row) {
            $etudiants[] = new Etudiant($row['CodeE'], $row['Nom'], $row['Prenom'], $row['Note'], $row['Filiere']);
        }
        return $etudiants;
    }
}
?>

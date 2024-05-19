<?php
class Departement {
    private $codeD;
    private $nom;

    public function __construct($codeD, $nom) {
        $this->codeD = $codeD;
        $this->nom = $nom;
    }

    // Getters
    public function getCodeD() {
        return $this->codeD;
    }

    public function getNom() {
        return $this->nom;
    }

    // Setters
    public function setNom($nom) {
        $this->nom = $nom;
    }

    // Static method to list departements
    public static function listeDepartements($pdo) {
        $sql = "SELECT * FROM departements";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $departements = [];
        foreach ($rows as $row) {
            $departements[] = new Departement($row['CodeD'], $row['Nom_du_departement']);
        }
        return $departements;
    }
}
?>

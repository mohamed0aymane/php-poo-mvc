<?php
class Filiere {
    private $codeF;
    private $intituleF;

    public function __construct($codeF, $intituleF) {
        $this->codeF = $codeF;
        $this->intituleF = $intituleF;
    }

    // Getters
    public function getCodeF() {
        return $this->codeF;
    }

    public function getIntituleF() {
        return $this->intituleF;
    }

    // Setters
    public function setIntituleF($intituleF) {
        $this->intituleF = $intituleF;
    }

    // Static method to list filieres
    public static function listeFilieres($pdo) {
        $sql = "SELECT * FROM filieres";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $filieres = [];
        foreach ($rows as $row) {
            $filieres[] = new Filiere($row['CodeF'], $row['IntituleF']);
        }
        return $filieres;
    }
}
?>

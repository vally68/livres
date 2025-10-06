<?php
// AgeCalculator.php
class AgeCalculator {
    private $birthDate; // DateTime

    public function __construct($birthDate) {
        if ($birthDate instanceof DateTime) {
            $this->birthDate = $birthDate;
        } else {
            $this->birthDate = new DateTime($birthDate);
        }
    }

    public function getAge(): int {
        $today = new DateTime();
        $diff = $today->diff($this->birthDate);
        return $diff->y;
    }
}

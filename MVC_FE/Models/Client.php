<?php
class Client extends Model
{
    public function __construct()
    {
        $this->table = "Client";
        self::getModel();
    }

    public function getCity(string $ville)
    {
        $sql = "SELECT * FROM " . $this->table . " WHERE adresse = '" . $ville."'";
        $query = self::$instance->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }
}

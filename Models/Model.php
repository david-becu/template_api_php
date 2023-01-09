<?php
namespace App\Models;

use App\Db\Db;

class Model extends Db
{
    // Table de la base de données
    protected $table;

    // Instance de Db
    private $db;

    // Read
    public function findAll()
    {
        $query = $this->requete('SELECT * FROM ' . $this->table);
        return $query->fetchAll();
    }

    public function requete(string $sql, array $attributs = null)
    {
        // On récupére l'instance de Db
        $this->db = Db::getInstance();

        // On vérifie si on a des attributs
        if ($attributs !== null) {
            //Requête préparée
            $query = $this->db->prepare($sql);
            $query->execute($attributs);
            return $query;

        } else {
            // Requête simple
            return $this->db->query($sql);
        }
    }
}
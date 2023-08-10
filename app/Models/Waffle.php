<?php

namespace App\Models;

use App\Utils\Database;
use PDO;

/**
 * Une instance de Product = un produit dans la base de données
 * Product hérite de CoreModel
 */
class Waffle extends CoreModel
{

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $subtitle;

    /**
     * @var string
     */
    private $description;
    
    /**
     * @var float
     */
    private $price;
    
    /**
     * @var int
     */
    private $category_id;

    /**
     * Méthode permettant de récupérer tous les enregistrements de la table waffle avec catégorie = 1
     *
     * @return Waffle[]
     */
    public static function findAllSalted()
    {
        $pdo = Database::getPDO();
        $sql = 'SELECT * FROM `waffle` WHERE category_id = 1;';
        
        $pdoStatement = $pdo->query($sql);
        $results = $pdoStatement->fetchAll(PDO::FETCH_ASSOC);

        return $results;
    }

        /**
     * Méthode permettant de récupérer tous les enregistrements de la table waffle avec catégorie = 2
     *
     * @return Waffle[]
     */
    public static function findAllSweet()
    {
        $pdo = Database::getPDO();
        $sql = 'SELECT * FROM `waffle` WHERE category_id = 2;';
        $pdoStatement = $pdo->query($sql);
        $results = $pdoStatement->fetchAll(PDO::FETCH_ASSOC);

        return $results;
    }

    /**
     * Get the value of name
     *
     * @return  string
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @param  string  $name
     *
     * @return  self
     */ 
    public function setName(string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of subtitle
     *
     * @return  string
     */ 
    public function getSubtitle()
    {
        return $this->subtitle;
    }

    /**
     * Set the value of subtitle
     *
     * @param  string  $subtitle
     *
     * @return  self
     */ 
    public function setSubtitle(string $subtitle)
    {
        $this->subtitle = $subtitle;

        return $this;
    }

    /**
     * Get the value of description
     *
     * @return  string
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @param  string  $description
     *
     * @return  self
     */ 
    public function setDescription(string $description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of price
     *
     * @return  float
     */ 
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set the value of price
     *
     * @param  float  $price
     *
     * @return  self
     */ 
    public function setPrice(float $price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get the value of category_id
     *
     * @return  int
     */ 
    public function getCategory_id()
    {
        return $this->category_id;
    }

    /**
     * Set the value of category_id
     *
     * @param  int  $category_id
     *
     * @return  self
     */ 
    public function setCategory_id(int $category_id)
    {
        $this->category_id = $category_id;

        return $this;
    }
}
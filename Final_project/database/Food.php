<?php
// Use to fetch food data
class Food
{
    public $db = null;
    public function __construct(DBController $db)
    {
        if(!isset($db->con)) return null;
        $this->db=$db;
    }

    // Fetch product data
    public function getFoodData($naan = 'Lunch')
    {
        $result = $this->db->con->query("SELECT * FROM food where food_cat = '".$naan."'");
        
        $resultArray = array();
        while($item = mysqli_fetch_array($result, MYSQLI_ASSOC))
        {
            $resultArray[] = $item;
        }
        return $resultArray;
    }

}
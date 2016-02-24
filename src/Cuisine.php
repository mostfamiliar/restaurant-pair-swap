<?php
    class Cuisine
    {
        private $name;
        private $id;

        function __construct($name, $id = null)
        {
            $this->name = $name;
            $this->id = $id;
        }

        function setName($new_name)
        {
            $this->name = (string) $new_name;
        }

        function getName()
        {
            return $this->name;
        }

        function getId()
        {
            return $this->id;
        }
        //
        // function save()
        // {
        //     $GLOBALS['DB']->exec("INSERT INTO cuisines (name) VALUES ('{$this->getName()}')");
        //     $this->id= $GLOBALS['DB']->lastInsertId();
        // }
        //
        // function getTasks()
        // {
        //     $restaurants = Array();
        //     $returned_restaurants = $GLOBALS['DB']->query("SELECT * FROM restaurants WHERE cuisine_id = {$this->getId()} ORDER BY due_date;");
        //     foreach($returned_restaurants as $restaurant) {
        //         $description = $restaurant['description'];
        //         $due_date = $restaurant['due_date'];
        //         $id = $restaurant['id'];
        //         $cuisine_id = $restaurant['cuisine_id'];
        //         $new_restaurant = new Task($description, $due_date, $id, $cuisine_id);
        //         array_push($restaurants, $new_restaurant);
        //     }
        //     return $restaurants;
        // }
        //
        // static function getAll()
        // {
        //     $returned_cuisines = $GLOBALS['DB']->query("SELECT * FROM cuisines;");
        //     $cuisines = array();
        //     foreach($returned_cuisines as $cuisine) {
        //         $name = $cuisine['name'];
        //         $id = $cuisine['id'];
        //         $new_cuisine = new Cuisine($name, $id);
        //         array_push($cuisines, $new_cuisine);
        //     }
        //     return $cuisines;
        // }
        //
        static function deleteAll()
        {
          $GLOBALS['DB']->exec("DELETE FROM cuisines;");
        }

        // static function find($search_id)
        // {
        //     $found_cuisine = null;
        //     $cuisines = Cuisine::getAll();
        //     foreach($cuisines as $cuisine) {
        //         $cuisine_id = $cuisine->getId();
        //         if ($cuisine_id == $search_id) {
        //           $found_cuisine = $cuisine;
        //         }
        //     }
        //     return $found_cuisine;
        // }
    }
?>
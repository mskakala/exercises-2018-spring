<?php

/**
 * movies model
 * 
 * is capable of getting any information about movies
 * (from the DB)
 */

class Movies_model
{
    public function get_movies()
    {
        // connects to the database (MAGIC)
        // $pdo = new PDO( ... )

        // retrieves something from the database (MAGIC)
        // $sql_query = "
        //     SELECT *
        //     FROM `movies`
        //     WHERE `movies`.`year` = 2018
        // ";
        // $statement = $pdo->prepare($sql_query);
        // $statement->execute();
        // $data = $statement->fetchAll();

        // returns the retrieved data
        return [
            'The Shawshank redemption',
            'The Godfather',
            'The Godfather II',
            'Dark Knight', 
            '12 angry men', 
            'Schindler\'s list',
            'Pulp fiction',
            'Lord of the Rings: Return of the King',
            'The good, the bad and the ugly',
            'Fight club'
        ];
    }
}
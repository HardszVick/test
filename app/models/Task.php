<?php

class Task
{
    public function all()
    {
        return [
            ['id' => 1, 'id_team' => '1', 'id_user' => '1', 
                'user_name' => 'Mateus', 'title' => 'Design the homepage', 
                'description' => 'Create wireframes and mockups for the homepage', 'status' => '1'],
            ['id' => 2, 'id_team' => '1', 
                'id_user' => '2', 'user_name' => 'João', 'title' => 'Develop the backend API', 
                'description' => 'Create RESTful endpoints for user management', 'status' => '2'],
            ['id' => 3, 'id_team' => '2', 
                'id_user' => '3', 'user_name' => 'Pedro', 'title' => 'Set up the database', 
                'description' => 'Design the database schema and optimize queries', 'status' => '3'],
            ['id' => 4, 'id_team' => '2', 
                'id_user' => '4', 'user_name' => 'Carlos', 'title' => 'Implement authentication', 
                'description' => 'Add login and registration functionality', 'status' => '4'],
        ];
    }
}

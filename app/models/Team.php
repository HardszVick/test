<?php

class Team
{
    public function all()
    {
        return [
            ['idUser' => 1, 'name' => 'Mateus', 'idTeam' => 1, 'team_name' => 'Alpha'   ],
            ['idUser' => 2, 'name' => 'João', 'idTeam' => 1, 'team_name' => 'Alpha'],
            ['idUser' => 3, 'name' => 'Pedro', 'idTeam' => 1, 'team_name' => 'Alpha'],
            ['idUser' => 4, 'name' => 'Carlos', 'idTeam' => 2, 'team_name' => 'Beta'],
            ['idUser' => 5, 'name' => 'Ana', 'idTeam' => 2, 'team_name' => 'Beta'],
        ];
    }
}

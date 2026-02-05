<?php

require_once __DIR__ . '/../core/Controller.php';
require_once __DIR__ . '/../models/Team.php';

class TeamController extends Controller
{
    public function index()
    {
        $team = new Team();
        $data = $team->all();

        $teams = [];
        foreach ($data as $row) {
            $teams[$row['idTeam']]['id'] = $row['idTeam'];
            $teams[$row['idTeam']]['name'] = $row['team_name'];
            $teams[$row['idTeam']]['users'][] = [
                'id' => $row['idUser'],
                'name' => $row['name']
            ];
        }

        $this->view('team/index', [
            'teams' => $teams,
            'title' => 'Times'
        ]);
    }
}

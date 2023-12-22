<?php
namespace app\Controllers;

use app\Models\Team;
use app\Controllers\Controller;

class TeamController extends Controller {
    public function index() {
        $teams = [
            new Team('FCBarcelona', 'Xavi Hernandes'),
            new Team('FCMancity', 'Pep guardiula')
        ];

        $this->render('team/index', ['teams' => $teams]);
    }
}

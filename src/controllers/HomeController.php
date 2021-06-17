<?php
namespace src\controllers;

use \core\Controller;
use \src\handlers\LoginHandler;

class HomeController extends Controller {

    private $loggedUser;

    public function __construct() {
        $this->LoggedUser = LoginHandler::checkLogin();
        if($this->LoggedUser === false) {
            $this->redirect('/login');
        }

    }

    public function index() {
        $this->render('home', ['nome' => 'Bonieky']);
    }
}
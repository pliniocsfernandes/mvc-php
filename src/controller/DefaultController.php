<?php
require_once __DIR__ . "/../core/Controller.php";
/**
 * Class DefaultController
 *
 * A simple controller class
 * Controllers extend the base Controller class for view processing methods
 */
class DefaultController extends Controller{
    public function pirateAction() {
        $phrase = $this->phrase('Pirate');
        $this->render('pirate.php', array('phrase' => $phrase));
    }

    public function guruAction() {
        $phrase = $this->phrase('Guru');
        $this->render('guru.php', array('phrase' => $phrase));
    }

    public function homeAction() {
        $this->render("home.php");
    }

    public function notFoundAction() {
        $this->render("404.html");
    }

    private function phrase($type) {
        $className = $type . "Phrases";
        require_once __DIR__ . "/../model/$className.php";
        /** @var Phrases $phrases */
        $phrases = new $className();
        if ($_GET['index']) {
            $phrase = $phrases->get($_GET['index']);
            if (is_null($phrase)) {
                $phrase = "Ops... this one doesn't exist.";
            }
        } else {
            $phrase = $phrases->getRandom();
        }
        return $phrase;
    }
}
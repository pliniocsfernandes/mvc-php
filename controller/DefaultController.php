<?php
/**
 * Class DefaultController
 *
 * A simple controller class
 * Controllers extend the base Controller class for view processing methods
 */
class DefaultController {
    public function pirateAction() {
        require_once __DIR__."/../model/PiratePhrases.php";
        $phrases = new PiratePhrases();
        if ($_GET['index']) {
            $phrase = $phrases->get($_GET['index']);
            if (is_null($phrase)) {
                $phrase = "Ops... this one doesn't exist.";
            }
        } else {
            $phrase = $phrases->getRandom();
        }
        return array('phrase' => $phrase);
    }

    public function guruAction() {
        require_once __DIR__."/../model/GuruPhrases.php";
        $phrases = new GuruPhrases();
        if ($_GET['index']) {
            $phrase = $phrases->get($_GET['index']);
            if (is_null($phrase)) {
                $phrase = "Ops... this one doesn't exist.";
            }
        } else {
            $phrase = $phrases->getRandom();
        }
        return array('phrase' => $phrase);
    }
}
<?php
/**
 * Class DefaultController
 *
 * A simple controller class
 * Controllers extend the base Controller class for view processing methods
 */
class DefaultController {
    public function pirateAction() {
        $phrase = $this->phrase('Pirate');
        return array('phrase' => $phrase);
    }

    public function guruAction() {
        $phrase = $this->phrase('Guru');
        return array('phrase' => $phrase);
    }

    private function phrase($type) {
        $className = $type . "Phrases";
        require_once __DIR__."/../model/$className.php";
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
<?php
/**
 * Class Phrases
 *
 * Simple model class.
 * Model classes are responsible for the business rules.
 */
abstract class Phrases {
    protected $phrases;

    public function get($index) {
        return "$index. {$this->phrases[$index]}";
    }

    public function getRandom() {
        $choosen_one = rand(0, count($this->phrases) - 1);
        return $this->get($choosen_one);
    }
}
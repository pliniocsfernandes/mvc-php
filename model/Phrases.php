<?php
/**
 * Class Phrases
 *
 * Simple model class.
 * Model classes are responsible for the business rules.
 */
abstract class Phrases {
    protected $phrases;

    public function get() {
        $choosen_one = rand(0, count($this->phrases) - 1);
        return $this->phrases[$choosen_one];
    }
}
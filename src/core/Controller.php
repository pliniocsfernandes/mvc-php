<?php
/**
 * Class Controller
 *
 * Responsible for processing user actions
 *
 * @abstract
 */
abstract class Controller {
    /**
     * @var baseUrl attribute that needs to be passed for views for linking
     */
    protected $baseUrl;

    /**
     * Default constructor, needs to initialize the baseUrl attribute
     * @param $baseUrl base url to be used for links in views.
     */
    public function __construct($baseUrl) {
        $this->baseUrl = $baseUrl;
    }

    /**
     * Method
     * @param $view
     * @param array $variables
     */
    protected function render($view, $variables = array()) {
        $variables['base_url'] = $this->baseUrl;
        extract($variables);
        require_once __DIR__ . "/../view/$view"; //FIXME possible security flaw
    }
}

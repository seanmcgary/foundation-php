<?php
/**
 * @author Sean McGary <sean@seanmcgary.com>
 */
 
class lib_controllers_welcome extends core_controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load_model('lib_models_testModel', 'test_model');
        $this->load_model('lib_models_otherTestModel', 'other_model');

        
    }

    public function index()
    {
        
        echo '<h1>Hello World!</h1>';
    }


}
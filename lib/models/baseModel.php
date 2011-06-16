<?php
/**
 * @author Sean McGary <sean@seanmcgary.com>
 */
class lib_models_baseModel extends core_model
{
    public $mongo;
    public $user_collection;
    public $notification_collection;
    public function __construct()
    {
        parent::__construct();

        //$this->mongo = lib_libraries_libMongoDB::get_connection('mongodb://localhost:27017', 'test');
        //echo $this->mongo->id.'<br>';

        //$this->user_collection = $this->mongo->mongodb->{"users"};
        //$this->notification_collection = $this->mongo->mongodb->{"notifications"};
    }


}

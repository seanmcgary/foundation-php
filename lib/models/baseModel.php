<?php
/**
 * @author Sean McGary <sean@seanmcgary.com>
 */
class lib_models_baseModel extends core_model
{
    public $mongo;
    public $test_collection;

    public function __construct()
    {
        parent::__construct();
		
		// MongoDB connection and collection setup examples
		//$this->mongo = lib_libraries_libMongoDB::get_connection('mongodb://*yoururl*:27017', 'database');
		//$this->test_collection = $this->mongo->collection("test_collection");
    }
	
	/**************************************************************************
	| Helper functions for interacting with MongoDB
	***************************************************************************/
	public function generate_id($collection, $id_field)
    {
        $id = '';
        for($i = 0; $i < 9; $i++)
        {
            $id .= rand(0, 10);
        }

        $result = $this->get_item_for_id($collection, $id_field, $id);

        if($result != false)
        {
            // if it already exists, run it again
            return $this->generate_id($collection, $id_field);
        }
        else
        {
            return $id;
        }
    }

    public function get_item_for_id($collection, $id_field, $id)
    {
        $results = $this->{$collection}->find(array($id_field => $id));

        return $this->get_one($results);
    }

    public function get_one($mongo_results)
    {
        $results = null;

        if($mongo_results->count() >0)
        {
            foreach($mongo_results as $res)
            {
                $results = $res;
            }
        }

        return $results;
    }

    public function get_array($mongo_results)
    {
        $results = array();

        if($mongo_results->count() >0)
        {
            foreach($mongo_results as $res)
            {
                $results[] = $res;
            }
        }

        return $results;
    }


}

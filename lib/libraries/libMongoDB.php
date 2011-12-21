<?php
/**
 * @author Sean McGary <sean@seanmcgary.com>
 */
class lib_libraries_libMongoDB
{
    private static $instance;

    public $database;
    public $mongo_conn;
    public $mongodb;

    public $id;

    public function __construct($host, $database)
    {
        $this->database = $database;

        $this->mongodb_conn = new Mongo($host);
        $this->mongodb = $this->mongodb_conn->selectDB($this->database);
        
        $this->id = rand(0, 100);
    }

    public static function get_connection($host, $database)
    {
        if(!isset(self::$instance))
        {
            $mongo = __CLASS__;
            self::$instance = new $mongo($host, $database);
        }

        return self::$instance;
    }

	public function collection($collection_name)
	{
		return $this->mongodb->{$collection_name};
	}

}
 

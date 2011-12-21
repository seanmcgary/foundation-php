MVC Style PHP Framework
===

Foundation PHP is a simple framework based on the MVC design pattern that makes use of "pretty URLs" and URI segments to pass string variables to controllers.

Controllers
---

Routing in the framework is done via controllers and URLs that are mapped to controllers and functions. For example if you had the URL:

```
http://mydomain.com/foo/bar/baz
```

This would use the 'foo' controller, call the 'bar' function and pass "baz" as the first parameter to the function 'bar'. So in your controller could look something like this:

```
class lib_controllers_foo 
{
	public function __construct()
	{
		parent::__construct();
	}

	public function bar($first_var)
	{
		echo $first_var;
	}
}
```

But what if you just want to call the 'foo' controller? By default if you just specify the controller with no function or parameters, it will try and load a function with the name called "index". This default function, as well as the default controller, can be changed in the lib/config/routes.php file.

Models
---

Models in the MVC pattern are typically used to access the backend data for your application. Because Im a fan of MongoDB, a sample base model and test models are provided for you as well as a basic MongoDB connection library to get you started. To load a model from a model, controller, or library, simply call 

```
core_modelFactory::get_inst('model_name', 'alias');
```

Both the loadFactory and modelFactory allow you to load a model or other object once so that you dont have multiple instances running around. This is especially useful for models so that you dont have tons of database connections open - they all share the same connection. If you are loading a model from an object that extends core_controller, use the $this->load_model('model', 'alias'); function. This will make sure that all models know of each other so that you can call models from other models.

Views
---

Views are really simple. These are simply PHP files that generate HTML. You can pass variables to models as well! To do that, use the: $this->load->view('view_name', array('var1' -> 'val')); function. The second parameter is an array map of values. The keys will be passed to the view as variables. So using the example above, if I pass in array('var1' => 'val1'), I would just use $var1 in my view file to access that variable.

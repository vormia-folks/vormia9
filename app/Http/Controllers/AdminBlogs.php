<?php

namespace App\Http\Controllers;

// Models
use App\Models\VmaForm;

// Libraries
use Illuminate\Http\Request;

class AdminBlogs extends Controller
{
    /**
     * Private Variables list.
     *
     * - These affects the logic of the controller and its actions
     */
    private $Table = '';
    private $MainPage = 'list';
    private $Folder = 'blogs';
    private $SubFolder = '';

    /** 
     * Construct
     *
     * - This is the constructor for the controller
     */
    public function __construct()
    {

        //Models

        //Helpers

        // Your own constructor code

    }


    /** 
     *
     * This is one of the most important method in your project
     * All pages used by this controller should be opened using pages method
     *
     * This method accepts two parameters
     * 1: The page name [list, add, edit] or the page name with sub folder [sub/add, sub.edit]
     * 2: The page layout [default, main]
     * 
     * NB: THIS METHOD IS PRIVATE
     */
    private function pages($data, $layout = 'main')
    {

        //Layout
        return view("admin/layouts/$layout", $data);
    }

    /**
     *
     * This is the first function to be accessed when a user open this controller
     * In here we can call the load function and pass data to passed as an array inorder to manupulate it inside passed function
     *   * Set your Page name/ID here N:B Page ID can be a number if you wish to access other values linked to the page opened E.g Meta Data
     *   * You can also set Page ID as actual pageName found in your view N:B do not put .php E.g home.php it should just be 'home'
     *   * Set Page template
     *   * Set Notification here
     *   By Default index does not allow notification Message to be passed, it uses the default message howevr you can pass using the notifyMessage variable
     *   However we advise to use custom notification message while opening index utilize another function called open
     *
     */
    public function index($notifyMessage = null)
    {

        //Page Name
        $data['page_name'] = VmaForm::pluralize($this->Folder) . $this->SubFolder . "/list";

        //Open Page
        return $this->pages($data);
    }

    /**
     *
     * This is the function to be accessed when a user want to open specific page which deals with same controller E.g Edit data after saving
     * In here we can call the load function and pass data to passed as an array inorder to manupulate it inside passed function
     *   * Set your Page name/ID here N:B Page ID can be a number if you wish to access other values linked to the page opened E.g Meta Data
     *   * You can also set Page ID as actual pageName found in your view N:B do not put .php E.g home.php it should just be 'home'
     *   * Set Page template 
     *   * Set Notification here
     *   Custom notification message can be set/passed via $message
     *   PageName / ID can be passed via $pageID
     *   Page layout can be passed via $layout
     * 
     */
    public function open($pageName = null, $message = null, $layout = 'main')
    {
        // Check Page Name is not NUll
        if (!is_null($pageName)) {
            //Page Name
            $data['page_name'] = VmaForm::pluralize($this->Folder) . $this->SubFolder . "/$pageName";
            //Open Page
            return $this->pages($data, $layout);
        } else {
            // Redirect to index
            return $this->index();
        }
    }
    /**
     *
     *  This function is to be called when you want to pass the Edit form
     * In here we can call the load function and pass data to passed as an array inorder to manupulate it inside passed function
     * 	* Set your Page name/ID here N:B Page ID can be a number if you wish to access other values linked to the page opened E.g Meta Data
     * 	* You can also set Page ID as actual pageName found in your view N:B do not put .php E.g home.php it should just be 'home'
     * 	* Set Page template
     * 	* Set Notification here
     * 	Custom notification message can be set/passed via $message
     * 	PageName / ID can be passed via $pageID
     * 	Page layout can be passed via $layout
     *
     * 	For inputTYPE and inputID
     *
     * 	--> inputTYPE
     * 	  This is the name of the column you wish to select, most of the time is coumn name
     * 	  Remember to Pass ID or Pass data via GET request using variable inputTYPE
     *
     * 	--> inputID
     * 	  This is the value of the column you wish to match
     * 	  Remember to Pass Value or Pass data via GET request using variable inputID
     *
     *  If either inputTYPE or inputID is not passed error message will be generated
     *
     */
    public function edit($id = null, $column = 'id', $message = null, $layout = 'main')
    {

        echo '<pre>';
        echo 'Edit Method';
    }

    /**
     *
     * Module form values are validated here
     * The function accept variable TYPE which is used to know which form element to validate by changing the validation methods
     * All input related to this Module or controller should be validated here and passed to Create/Update/Delete
     *
     * Reidrect Main : Main is the controller which is acting as the default Controller (read more on codeigniter manual : route section) | inshort it will load
     * 				 first and most used to display the site/system home page
     *
     */
    public function valid($type)
    {
        // Check Valid Type
        if ($type == 'save') {
            echo "Save <br />";
        } elseif ($type == 'update') {
            echo "Update <br />";
        } elseif ($type == 'delete') {
            echo "Delete <br />";
        } elseif ($type == 'bulk') {
            echo "Bulk <br />";
        } elseif ($type == 'edit') {
            echo "Edit <br />";
        } else {
            echo "Invalid Type : $type <br />";
        }
    }

    /**
     * 
     * Routing Method
     * 
     * This method help to route the page to the correct controller
     * 
     */
    public function route(Request $request, $pageName = null, $layout = 'main')
    {

        // Check if Page Name is null using the ternary operator
        $pageName = $pageName ?? $this->MainPage;

        //Check Get Parameters
        $routeGet = VmaForm::input($request);

        // Get pageName from key p , check if key p exists using ternarry
        $pageName = $routeGet['vma_p'] ?? $pageName;

        // Check type of opertation
        $method = $routeGet['vma_m'] ?? 'open';

        // Check action from $routeGet 
        $action = $routeGet['vma_a'] ?? null;
        // If Action Exist Force Method to Valid
        (!is_null($action)) ? $method = 'valid' : $method = $method;

        // Check Notification Message
        $notify = $routeGet['vma_n'] ?? null;

        // Check Layout
        $layout = $routeGet['vma_l'] ?? $layout;

        // Check Column
        $column = $routeGet['vma_c'] ?? 'id';

        // Check for ID is not empty
        $idJson = (array_key_exists('vma_id', $routeGet)) ? VmaForm::input($request, 'vma_id', false) : null;
        // Check if ids is a json 
        $ids = json_decode($idJson, true);

        // Check If method exists in the controller
        if (method_exists($this, $method)) {
            // Generate Data
            $passGeneral = array(
                'pageName' => $pageName,
                'message' => $notify,
                'layout' => $layout,
                'id' => $ids,
                'column' => $column,
                'action' => $action
            );

            // Check Parameters
            $parameters = VmaForm::methodParameters($passGeneral, $method);
            // Change array values to variables
            $arguments = array_values($parameters);

            // Call the method
            return call_user_func_array(array($this, $method), $arguments);
            // return $this->$method($pageName, $action, $ids, $layout);
        } else {
            // If method doesn't exist return error
            //return $this->open($pageName, 'Method not found', $layout);
        }
    }
}

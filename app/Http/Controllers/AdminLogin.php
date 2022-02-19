<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class AdminLogin extends Controller
{

    /** 
     *
     * This is one of the most important functions in your project
     * All pages used by this controller should be opened using pages function
     * 1: The first passed data is an array containing all pre-loaded data N.B it can't be empty becuase page name is passed through it
     * 2: Layout -> this can be set to default so it can open a particular layout always | also you can pass other layout N.B can't be empty
     *
     * ** To some page functions which are not public, use the auth method from CoreLoad model to check is user is allowed to access the pages
     * ** If your page is public ignore the use of auth method
     *
     */
    public function pages($data, $layout = 'login')
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
        $data['page_name'] = 'login';

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
    public function open($pageID, $message = null, $layout = 'log')
    {

        //Page Name
        $data['page_name'] = $pageID;

        //Open Page
        return $this->pages($data, $layout);
    }
}

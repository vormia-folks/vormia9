<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class VmaForm extends Model
{
    use HasFactory;

    /**
     *
     *  This function clean and return the inputs from your POST or Get request
     *  The function accept two parameters
     *  1: The value is the post data array you wish to get
     *     E.g <input name='firstName' value="">
     *         This form in Post or Get request it array Key name is firstName
     *         That is the $value to be passed |i.e $value = 'firstName';
     *
     *    If this is left as null or passed as null, the function will return all data inside your post/get request. 
     *    This is best if you want to store all data in one array or as JSON data later
     *
     *  2: the rule parameter is to determine if you want data from POST/GET value
     *  
     */
    public static function input(Request $request, $value = null, $escape = true)
    {
        //Input Value
        $value = (is_null($value)) ? $request->all() : $request->input($value);; //Set Value
        $input = array();

        //Check specific value in Post/Get Array
        if (is_array($value)) {
            //$value = $this->CoreCrud->unsetData($value, array('_token'));
            foreach ($value as $key => $item) {
                if (!is_array($item)) {
                    $input[$key] = ($escape) ? trim(addslashes($item)) : $item;
                } else {
                    $input[$key] = $item;
                }
            }
        } else {
            $input = ($escape) ? trim(addslashes($value)) : $value;
        }

        //returned DATA
        return $input;
    }
    /**
     *
     * This is a function allowing you to pluralize and return the pluralized value
     * This function accepts one parameter
     *
     * Pass String value to be pluralized
     */
    public static function pluralize($value)
    {
        //This pluralizes the string value
        $plural = Str::plural($value);
        return $plural; //return
    }

    /**
     *
     * This is a function allowing you to singularize and return the singularize value
     * This function accepts one parameter
     *
     * Pass String value to be singularize
     */
    public static function singularize($value)
    {

        //This pluralizes the string value
        $singularize = Str::singular($value);
        return $singularize; //return
    }

    /**
     * Swithc Method Parameters
     */
    public static function methodParameters($parameters, $methodName)
    {
        // Switch Method
        switch ($methodName) {
            case 'index':
                $argumets = array('message' => $parameters['message']);
                // Return
                return $argumets;
                break;
            case 'open':
                $argumets = array(
                    'pageName' => $parameters['pageName'], 'message' => $parameters['message'],
                    'layout' => $parameters['layout']
                );
                // Return
                return $argumets;
                break;
            case 'edit':
                $argumets = array(
                    'id' => $parameters['id'], 'column' => 'Timothy',
                    'message' => $parameters['message'], 'layout' => $parameters['layout']
                );
                // Return
                return $argumets;
                break;
            default:
                $argumets = array(
                    'action' => $parameters['action']
                );
                // Return
                return $argumets;
                break;
        }
    }
}

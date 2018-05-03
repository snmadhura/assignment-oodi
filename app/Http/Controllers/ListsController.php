<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use Excel;

class ListsController extends Controller
{
    public function __construct(){
    	$this->middleware('auth');
    }

    /**
    *	This is the index page of Contacts List
    */
    public function index() {
    	$mycontacts = self::listofContacts(Auth::user()->id);
    	return view('dashboard.list', [
    		'mycontacts' => $mycontacts
    	]);
    }

    /**
    *	This function Imports the list of Contacts from the CSV file
    */

    public function importList(Request $request){
    	if ($request->hasFile('datafile')) {
            $path = $request->file('datafile')->getRealPath();

            $data = Excel::load($path, function($reader) {
                        
                    })->get();
            
            if (!empty($data) && $data->count()) {
            	$newdate = new \Datetime();
            	$userid = Auth::user()->id;
                foreach ($data->toArray() as $key => $value) {
                	if(empty($value['name'])){
                		$name = null;
                	} else {
                		$name = $value['name'];
                	}

                	if(empty($value['custom_var'])){
                		$custom = null;
                	} else {
                		$custom = $value['custom_var'];
                	}

                    $insert[] = ['user_id' => $userid , 'contactname' => $name, 'contactphone' => $value['phone'], 'custom_var' => $custom, 'created_at' => $newdate, 'updated_at' => $newdate];
                }
                if (!empty($insert)) {
                    \App\Lists::insert($insert);
                    return back()->with('success', 'Inserted Records successfully.');
                }
            }
        }
        return back()->with('error', 'Please Check your file, Something is wrong there.');
    }

    /**
    * This function returns the contact list for current user
    */

    public function listofContacts($userid = 0){
    	if(empty($userid)){
    		$userid = Auth::user()->id;
    	}
    	$contacts = \App\Lists::where('user_id', $userid)->select(['id','contactname','contactphone','created_at'])->paginate(15);
    	
    	if(count($contacts) > 0){
    		return $contacts;	
    	} else {
    		return false;
    	}
    	
    }


}

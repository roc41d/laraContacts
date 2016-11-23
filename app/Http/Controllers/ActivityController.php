<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ActivityController extends Controller {

	public function allContacts() {

    	$data['contacts'] = \App\Contact::orderBy('created_at', 'desc')->paginate(10);

    	return view('activities.index')->with($data);
    }

}

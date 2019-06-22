<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function getContactsPage(Request $request){
        return "This is contactsPage!!!";
    }
}


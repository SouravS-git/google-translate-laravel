<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facade\Redirect;
use Stichoza\GoogleTranslate\GoogleTranslate;

class TranslateController extends Controller
{
    public function translate(Request $request){
    	$request->validate([
            'inputText' => 'required|string',
            'translateTo' => 'required|string'
        ],
    	[
    		'inputText.required' => 'Please enter an input',
    		'translateTo.required' => 'Please select a language',
    		'inputText.string' => 'Invalid Entry',
    		'translateTo.string' => 'Invalid Entry',
    	]);

    	$translate = new GoogleTranslate();
    	$translate->setSource();
    	$translate->setTarget($request->translateTo);

    	$outputText = $translate->translate($request->inputText);

    	return redirect()->back()->with('outputText', $outputText);  
    }
}
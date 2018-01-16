<?php

namespace App\Http\Controllers;
/**
 * Api/SearchController is used for the "smart" search throughout the site.
 * it returns and array of items (with type and icon specified) so that the selectize.js plugin
 * can render the search results properly
 **/

class ApiSearchController extends Controller {

    public function appendValue($data, $type, $element)
    {
        // operate on the item passed by reference, adding the element and type
        foreach ($data as $key => & $item) {
            $item[$element] = $type;
        }
        return $data;
    }

    public function appendURL($data, $prefix)
    {
        // operate on the item passed by reference, adding the url based on slug
        foreach ($data as $key => & $item) {
            $item['url'] = url($prefix.'/'.$item['slug']);
        }
        return $data;
    }

    public function index()
    {
        // Retrieve the user's input and escape it
        $query = e(Input::get('q',''));

        // If the input is empty, return an error response
        if(!$query && $query == '') return Response::json(array(), 400);

        $jSonCoupon = \App\Models\Coupon::getCoupon();

//	    $categories = ...
	// Normalize data
	// Add type of data to each item of each set of results
	// Merge all data into one array
//	$data = array_merge($products, $categories);

    $data = array_merge($jSonCoupon);
	return Response::json(array(
        'data'=>$data
    ));


    }

}
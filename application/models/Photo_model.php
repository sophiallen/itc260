<?php

class Photo_model extends CI_Model {

	public function get_photos($tags = 'cute%20animals')
	{

		$api_key = 'apikey';
		$perPage = 25;
		$url = 'https://api.flickr.com/services/rest/?method=flickr.photos.search';
		$url.= '&api_key=' . $api_key;
		$url.= '&tags=' . $tags;
		$url.= '&per_page=' . $perPage;
		$url.= '&format=json';
		$url.= '&nojsoncallback=1';


		$response = json_decode(file_get_contents($url));
		$pics = $response->photos->photo;
 
		return $pics;
	}
}



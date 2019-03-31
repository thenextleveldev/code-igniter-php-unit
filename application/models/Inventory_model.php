<?php
/**
 * Created by PhpStorm.
 * User: elder
 * Date: 3/31/19
 * Time: 10:45 AM
 */

class Inventory_model extends CI_Model {
	public function __construct() {

	}

	public function get_category_list() {
		return json_decode(json_encode([
			['id' => 1, 'name' => "Book"],
			['id' => 2, 'name' => "CD"],
			['id' => 3, 'name' => "DVD"]
		]));
	}
}
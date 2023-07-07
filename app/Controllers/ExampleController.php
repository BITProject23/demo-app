<?php
namespace App\Controllers;

class ExampleController extends BaseController {

  public function index() {
    return view('example');
  }

  public function load_data() {
    // Access the selected value from the request data
    $selectedValue = $this->request->getPost('selectedValue');

    // Perform your data retrieval based on the selected value
    // Example: Generate some dynamic content based on the selected value
    $data = 'Data for Option ' . $selectedValue;

    // Return the data as a response
    return $data;
  }
}
?>
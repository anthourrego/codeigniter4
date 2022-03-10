<?php 

namespace App\Controllers\dashboard;

use App\Controllers\BaseController;

class MovieController extends BaseController {

  public function index() {

    $dataHeader = [
      'title' => 'Listado de películas'
    ];

    $data = [
      'movies' => array(0, 1, 2, 3, 4)
    ];

    echo view("dashboard/templates/header", $dataHeader);
    echo view("dashboard/movie/index", $data);
    echo view("dashboard/templates/footer");
  }

  public function test($nombre = "Thony") {
    $dataHeader = [
      'title' => 'Listado de películas ' . $nombre
    ];

    $data = [
      'movies' => array(0, 1, 2, 3, 4)
    ];

    echo view("dashboard/templates/header", $dataHeader);
    echo view("dashboard/movie/index", $data);
    echo view("dashboard/templates/footer");
  }

} 
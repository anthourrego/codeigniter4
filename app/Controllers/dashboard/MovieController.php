<?php 

namespace App\Controllers\dashboard;

use App\Controllers\BaseController;
use App\Models\MovieModel;

class MovieController extends BaseController {

  public function index() {

    $movies = new MovieModel(); 

    $data = [
      'movies' => $movies->asObject()->paginate(5),
      'pager' => $movies->pager
    ];
    
    $this->_loadDefaultView('index', 'Listado de películas', $data);

  }

  public function test($nombre = "Thony") {
    $dataHeader = [
      'title' => 'Listado de películas ' . $nombre
    ];

    $data = [
      'movies' => array(0, 1, 2, 3, 4)
    ];
  }

  public function show($id = null) {
    $movie = new MovieModel();
    if ($id == 0) {
      var_dump($movie->findAll());   
    } else{
      var_dump($movie->get($id));
    }
  }

  public function new() {
    $this->_loadDefaultView('new', 'Crear pelicula');
  }

  public function create() {
    echo("create");
  }

  private function _loadDefaultView($view, $titulo = 'Codeigniter 4',$data = [], ){

    $dataHeader = [
      'title' => $titulo
    ];

    echo view("dashboard/templates/header", $dataHeader);
    echo view("dashboard/movie/{$view}", $data);
    echo view("dashboard/templates/footer");
  }

} 
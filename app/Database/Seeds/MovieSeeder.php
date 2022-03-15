<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class MovieSeeder extends Seeder {
    public function run() {
      //$this->db->table('movies')->emptyTable(); //DELETE FROM MOVIES
      $this->db->table('movies')->truncate(); //DELETE FROM MOVIES -- Reinicia el contador de los ids

      for ($i=1; $i <= 20; $i++) { 
        $data = [
            'title' => "Movie {$i}",
            'description'    => 'Database seeding is a simple way to add data into your database. It is especially useful during development where you need to populate the database with sample data that you can develop against, but it is not limited to that. Seeds can contain static data that you don’t want to include in a migration, like countries, or geo-coding tables, event or setting information, and more.'
        ];
  
        // Using Query Builder
        $this->db->table('movies')->insert($data);
      }

  }
}
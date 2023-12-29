<?php

use Illuminate\Database\Seeder;
use App\Models\Filme;

class FilmeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Filme::create(['titulo' => 'Duro de Matar', 'ano' => 1988, 'genero' => 'Ação']);
        Filme::create(['titulo' => 'Mad Max: Estrada da Fúria', 'ano' => 2015, 'genero' => 'Ação']);
        Filme::create(['titulo' => 'Velozes e Furiosos 7', 'ano' => 2015, 'genero' => 'Ação']);
        Filme::create(['titulo' => 'John Wick: De Volta ao Jogo', 'ano' => 2014, 'genero' => 'Ação']);
        Filme::create(['titulo' => 'Matrix', 'ano' => 1999, 'genero' => 'Ação']);
        Filme::create(['titulo' => 'Kill Bill: Volume 1', 'ano' => 2003, 'genero' => 'Ação']);
        Filme::create(['titulo' => 'Gladiador', 'ano' => 2000, 'genero' => 'Ação']);
        Filme::create(['titulo' => 'Mundo em Caos', 'ano' => 2021, 'genero' => 'Ação']);
        Filme::create(['titulo' => 'Homem de Ferro', 'ano' => 2008, 'genero' => 'Ação']);
        Filme::create(['titulo' => 'Pantera Negra', 'ano' => 2018, 'genero' => 'Ação']);
        Filme::create(['titulo' => 'A Rede Social', 'ano' => 2010, 'genero' => 'Drama / Biografia']);
        Filme::create(['titulo' => 'Steve Jobs', 'ano' => 2015, 'genero' => 'Drama / Biografia']);
        Filme::create(['titulo' => 'Matrix (Também de Ação)', 'ano' => 1999, 'genero' => 'Ficção Científica / Ação']);
        Filme::create(['titulo' => 'Hackers - Piratas de Computador', 'ano' => 1995, 'genero' => 'Crime / Drama']);
        Filme::create(['titulo' => 'Minority Report: A Nova Lei', 'ano' => 2002, 'genero' => 'Ficção Científica / Ação']);
        Filme::create(['titulo' => 'Blade Runner 2049', 'ano' => 2017, 'genero' => 'Ficção Científica / Drama']);
        Filme::create(['titulo' => 'O Homem Bicentenário', 'ano' => 1999, 'genero' => 'Drama / Ficção Científica']);
        Filme::create(['titulo' => 'Transcendence: A Revolução', 'ano' => 2014, 'genero' => 'Drama / Ficção Científica']);
        Filme::create(['titulo' => 'Her', 'ano' => 2013, 'genero' => 'Drama / Romance']);
        Filme::create(['titulo' => 'A.I. - Inteligência Artificial', 'ano' => 2001, 'genero' => 'Aventura / Drama']);
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameDescricaoToGeneroInFilmesTable extends Migration
{
    public function up()
    {
        Schema::table('filmes', function (Blueprint $table) {
            $table->renameColumn('descricao', 'genero');
        });
    }

    public function down()
    {
        Schema::table('filmes', function (Blueprint $table) {
            $table->renameColumn('genero', 'descricao');
        });
    }
}

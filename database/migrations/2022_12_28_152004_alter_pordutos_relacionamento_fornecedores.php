<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;


return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // criando coluna em produtos que vai receber a FK de fornecedores

        Schema::table('produtos', function(Blueprint $table) {

              //insere um registro de fornecedor para estabelecer o relacionamento 
              // essa instrução só seria necessária, caso ouvesse dados na tabela, pois ocasionaria um erro.
            
              $fornecedor_id = DB::table('fornecedores')->insert([
                'nome' => 'Fornecedor Padrão SG',
                'site' => 'fornecedorpadraosg.com.br',
                'uf' => 'RJ',
                'email' => 'contato@fornecedorpadraosg.com.br',
            ]);  

            $table->unsignedBigInteger('fornecedor_id')->default($fornecedor_id)->after('id');
            $table->foreign('fornecedor_id')->references('id')->on('fornecedores');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::table('produtos', function(Blueprint $table) {
            $table->dropforeign('produtos_fornecedor_id_foreign');
            $table->dropColumn('fornecedor_id');
        });

    }
};

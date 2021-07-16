<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistoricsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historics', function (Blueprint $table) {
            $table->id();
            $table->enum('type', ['I', 'O', 'T']);
            $table->unsignedBigInteger('conta_empresarial_id');
            $table->double('amount', 8, 2);
            $table->double('total_before', 8, 2);
            $table->double('total_after', 8, 2);
            $table->integer('user_id_transaction')->nullable();
            $table->date('date');
            $table->timestamps();

            $table->foreign('conta_empresarial_id')
                  ->references('id')
                  ->on('conta_empresarials')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('historics');
    }
}

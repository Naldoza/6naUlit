<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkstatusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workstatus', function (Blueprint $table) {
            $table->increments('id');
            $table->string('WorkDue');
            $table->string('completed');
            $table->string('others');
            $table->string('Select');
            $table->string('worker');
            $table->date('date');
            $table->time('time');
            $table->timestamps('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('workstatus');
    }
}

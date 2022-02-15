<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTodo extends Migration
{

    public function up()
    {
      // if (!Schema::hasTable('todo')){
            Schema::create('todos', function (Blueprint $table) {
                $table->id();
                $table->string('name', 100);
                $table->string('title');
                $table->boolean('complete');
                $table->timestamps();
                //  $table->timestamps('createdat')->useCurrent();
                //  $table->timestamps('updatedat')->useCurrent()->useCurrentOnUpdate();
            
                //  $table->timestamps('createdat')->default(DB::raw('CURRENT_TIMESTAMP'));
                //  $table->timestamps('updatedat')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
            });
        //}
    }


    public function down()
    {
        Schema::drop('todos');
    }
}

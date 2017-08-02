<?php 

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExampleTable extends Migration
{
	
	Schema::create('example', function (Blueprint $table) {
            $table->increments('id')->comment('主键 ID');
            $table->string('example')->nullable()->default('')->comment('example');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('example');
    }
}
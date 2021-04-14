<?php
    use Illuminate\Support\Facades\Schema;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Database\Migrations\Migration;

    class CreateAddUsersTable extends Migration
    {

        /**
         * Run the migrations for the table users that comes with id, name, created_at, updated_at
         *
         * 
         *
         * @return void

         */

        public function up()
        {
            Schema::create('users', function (Blueprint $table) {
                $table->increments('id');
                $table->string('name');
                $table->datetime('updated_at');
                $table->datetime('created_at');


            });
        }

        /**
         * Reverse the migrations. For now I drop the table on down method for a given version as my table    * gets created nicely in the up func.
         *
         * @return void
         */

        public function down()
        {
            Schema::dropIfExists('users');
        }
    }
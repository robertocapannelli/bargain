<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWatchesTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create( 'watches', function ( Blueprint $table ) {
            $table->id();
            $table->string( 'brand' );
            $table->string( 'name' );
            $table->string( 'reference' );
            $table->year( 'year' )
                ->nullable();
            $table->boolean( 'warranty' )
                ->default(false);
            $table->string( 'featured_image' )->nullable();
            $table->timestamps();

            //TODO we should think about the relationship between watch and profiles
        } );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists( 'watches' );
    }
}

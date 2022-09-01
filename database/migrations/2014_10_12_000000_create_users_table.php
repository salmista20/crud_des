<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            $this->down();      
        Schema::create('credito_productos', function (Blueprint $table) {
            $table->id();
            $table->string('productos',100);
            $table->string('descripcion',200)->nullable();
            $table->boolean('habilitado')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('credito_productos');
    }
};
use HasFactory;

    protected $table = 'credito_productos';

    protected $primaryKey = 'id';

    protected $fillable = [
        'sector',
        'descripcion',
        'created_at',
        'updated_at'
    ];

    protected $casts = [
        'created_at' => 'datetime:Y-m-d h:i:s',
        'updated_at' => 'datetime:Y-m-d h:i:s'
        
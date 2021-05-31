<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('number');
            $table->integer('dept');
            $table->string('name', 120);
            $table->enum('status', ['готов', 'в работе']);
            $table->float('product_area'); //Площадь изделия
            $table->float('sliding')->nullable(); // Раздвижка
            $table->float('blind')->nullable(); // Глухарь
            $table->integer('impost')->nullable(); // Импост
            $table->float('P400_02')->nullable(); // Р400/02
            $table->float('blind_angle')->nullable(); // Глухарь углы
            $table->float('m/n')->nullable(); // м/с
            $table->float('door_mono_cold')->nullable(); // Дверь хол одно створка
            $table->float('door_double_cold')->nullable(); // Дверь хол двух створка
            $table->float('stained_glass_cold')->nullable(); // Витраж холодный
            $table->float('door_mono_warm')->nullable(); // Дверь тёплая одно створка
            $table->float('door_double_warm')->nullable(); // Дверь тёплая двух створка
            $table->float('stained_glass_warm')->nullable(); // Витраж тёплый
            $table->float('non-standard')->nullable(); // Не стандарт
            $table->float('facade')->nullable(); // Фасад
            $table->float('sandwich')->nullable(); // Сэндвич
            $table->float('cost')->nullable(); // Стоимость заказа
            $table->float('product_area_fact'); // фактическая площадь изделия
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
}

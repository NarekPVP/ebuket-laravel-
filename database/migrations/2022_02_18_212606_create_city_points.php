<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCityPoints extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('city_points', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('city_id')->nullable();

            // Время работы точки самовывоза --Start--
            $table->string('export_work_shop_1_start')->nullable();
            $table->string('export_work_shop_2_start')->nullable();
            $table->string('export_work_shop_3_start')->nullable();
            $table->string('export_work_shop_4_start')->nullable();
            $table->string('export_work_shop_5_start')->nullable();
            $table->string('export_work_shop_6_start')->nullable();
            $table->string('export_work_shop_7_start')->nullable();

            $table->string('export_work_shop_1_end')->nullable();
            $table->string('export_work_shop_2_end')->nullable();
            $table->string('export_work_shop_3_end')->nullable();
            $table->string('export_work_shop_4_end')->nullable();
            $table->string('export_work_shop_5_end')->nullable();
            $table->string('export_work_shop_6_end')->nullable();
            $table->string('export_work_shop_7_end')->nullable();
            // Время обработки заказов --End--

            $table->string('cost_of_delivery_day')->nullable();
            $table->string('cost_of_delivery_evening')->nullable();
            $table->string('cost_of_delivery_night')->nullable();

            $table->string('waiting_for_delivery')->nullable(); // Ожидание доставки
            $table->integer('delivery_right_time')->nullable()->default(0); // Доставка в точнее время
            $table->float('cost_of_delivery')->default(0.00); // Стоимость доставки

            $table->string('price_max_bouquet')->nullable();
            $table->string('price_max_delivery')->nullable();

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
        Schema::dropIfExists('city_points');
    }
}

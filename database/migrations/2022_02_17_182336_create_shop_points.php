<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShopPoints extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shop_points', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('manager_id')->nullable();
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

            $table->integer('export_around_the_clock')->nullable()->default(0); // Круглосуточно самовывоз
            $table->integer('export_pay_cash')->default(0); // оплата наличными при самовывозе
            $table->integer('export_pay_bank')->default(0); // оплата терминалом при самовывозе
            $table->integer('export_not')->default(0); // нет точки самовывоза

            $table->string('address')->nullable();

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
        Schema::dropIfExists('shop_points');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShops extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shops', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            // Время обработки заказов --Start--
            $table->string('work_shop_1_start')->nullable();
            $table->string('work_shop_2_start')->nullable();
            $table->string('work_shop_3_start')->nullable();
            $table->string('work_shop_4_start')->nullable();
            $table->string('work_shop_5_start')->nullable();
            $table->string('work_shop_6_start')->nullable();
            $table->string('work_shop_7_start')->nullable();
            $table->string('driver_shop_1_start')->nullable();
            $table->string('driver_shop_2_start')->nullable();
            $table->string('driver_shop_3_start')->nullable();
            $table->string('driver_shop_4_start')->nullable();
            $table->string('driver_shop_5_start')->nullable();
            $table->string('driver_shop_6_start')->nullable();
            $table->string('driver_shop_7_start')->nullable();

            $table->string('work_shop_1_end')->nullable();
            $table->string('work_shop_2_end')->nullable();
            $table->string('work_shop_3_end')->nullable();
            $table->string('work_shop_4_end')->nullable();
            $table->string('work_shop_5_end')->nullable();
            $table->string('work_shop_6_end')->nullable();
            $table->string('work_shop_7_end')->nullable();
            $table->string('driver_shop_1_end')->nullable();
            $table->string('driver_shop_2_end')->nullable();
            $table->string('driver_shop_3_end')->nullable();
            $table->string('driver_shop_4_end')->nullable();
            $table->string('driver_shop_5_end')->nullable();
            $table->string('driver_shop_6_end')->nullable();
            $table->string('driver_shop_7_end')->nullable();
            // Время обработки заказов --End--

            $table->integer('around_the_clock_weekdays')->nullable()->default(0); // Круглосуточно буднии
            $table->integer('around_the_clock_weekend')->nullable()->default(0); // Круглосуточно выходные

            $table->integer('driver_around_the_clock_weekdays')->nullable()->default(0); // Круглосуточно буднии курьер
            $table->integer('driver_around_the_clock_weekend')->nullable()->default(0); // Круглосуточно выходные курьер

            $table->string('waiting_for_delivery')->nullable(); // Ожидание доставки
            $table->integer('delivery_right_time')->nullable()->default(0); // Доставка в точнее время
            $table->float('cost_of_delivery')->default(0.00); // Стоимость доставки
            $table->integer('payment_by_details')->default(0); // Оплата за реквизитами
            $table->integer('prepayment')->default(0); // Предоплата
            $table->float('prepayment_sum')->default(0.00); // Сумма предоплаты
            $table->integer('payment_courier')->default(0); // Оплата курьеру
            $table->integer('payment_courier_cash')->default(0); // Оплата курьеру наличными
            $table->integer('payment_courier_bank')->default(0); // Оплата курьеру терминалом
            $table->integer('cashless_payments')->default(0); // Безналичный расчёт для юр. лиц

            $table->integer('payment_by_details_not_my')->default(0); // Оплата за реквизитами 3-сторона
            $table->integer('cashless_payments_not_my')->default(0); // Безналичный расчёт для юр. лиц 3-сторона

            $table->string('address')->nullable(); // Точка самовывоза

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
        Schema::dropIfExists('shops');
    }
}

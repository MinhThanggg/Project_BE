<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblDonhangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_donhang', function (Blueprint $table) {
            $table->id('id_don_hang');
            $table->string('ten_khach_hang');
            $table->string('san_pham');
            $table->integer('qyt');
            $table->double('gia_tien');
            $table->string('dia_chi');
            $table->date('ngay_dat_hang');
            $table->date('ngay_nhan_hang');
            $table->string('email', 100);
            $table->integer('phone');
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
        Schema::dropIfExists('tbl_donhang');
    }
}

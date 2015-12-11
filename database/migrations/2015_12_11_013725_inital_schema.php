<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InitalSchema extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // user: username password name 
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('username')->unique();
            $table->string('password', 60);
            $table->rememberToken();
            $table->timestamps();
        });

        // partner: name address phone is_supplier is_customer
        Schema::create('partners', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('address');
            $table->string('phone');
            $table->boolean('is_supplier');
            $table->boolean('is_customer');
            $table->timestamps();
        });

        // product: name purchase_price sell_price
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->float('purchase_price');
            $table->float('sell_price');
            $table->timestamps();
        });

        // inventory: prod_id quantity
        Schema::create('inventories', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('product_id')->index();
            $table->integer('quantity');
            $table->timestamps();
        });

        // purchase: purchased_at partner_id product_id quantity
        Schema::create('purchases', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('product_id')->index();
            $table->unsignedInteger('partner_id')->index();
            $table->date('purchased_at');
            $table->integer('quantity');
            $table->timestamps();
        });

        // sale: 
        Schema::create('sales', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('product_id')->index();
            $table->unsignedInteger('partner_id')->index();
            $table->date('sold_at');
            $table->integer('quantity');
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
        Schema::drop('users');
        Schema::drop('partners');
        Schema::drop('products');
        Schema::drop('inventories');
        Schema::drop('purchases');
        Schema::drop('sales');
    }
}

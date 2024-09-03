<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    DB::table('user_lists') // Change 'user_lists' to your actual table name
        ->where('UserType', 'dean')
        ->update(['UserType' => 'Dean']);
    
    DB::table('user_lists') // Change 'user_lists' to your actual table name
        ->where('UserType', 'head')
        ->update(['UserType' => 'Head']);
}

public function down()
{
    DB::table('user_lists') // Change 'user_lists' to your actual table name
        ->where('UserType', 'Dean')
        ->update(['UserType' => 'dean']);
    
    DB::table('user_lists') // Change 'user_lists' to your actual table name
        ->where('UserType', 'Head')
        ->update(['UserType' => 'head']);
}

};

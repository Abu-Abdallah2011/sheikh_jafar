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
        Schema::create('teachers_details', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('fullname');
            $table->string('class');
            $table->string('gender');
            $table->string('dob');
            $table->string('marital_status');
            $table->string('dofa');
            $table->string('address');
            $table->string('status');
            $table->string('rank');
            $table->string('promotion_yr')->nullable();
            $table->string('contact_no');
            $table->string('bank_branch')->nullable();
            $table->string('acct_name')->nullable();
            $table->string('acct_no')->nullable();
            $table->string('allowance');
            $table->string('hometown');
            $table->string('nok');
            $table->string('relationship');
            $table->string('contact');
            $table->string('photo')->nullable();
            $table->string('set')->nullable();
            $table->string('created_by')->nullable();
            $table->string('edited_by')->nullable();
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
        Schema::dropIfExists('teachers_details');
    }
};

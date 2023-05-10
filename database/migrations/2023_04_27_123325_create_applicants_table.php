<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        
        if (!Schema::hasTable('applicants')) {
            Schema::create('applicants', function (Blueprint $table) {
                $table->id();
                $table->string('title');
                $table->string('forename1');
                $table->string('forename2');
                $table->string('familyname');
                $table->string('previousname');
                $table->string('dateofbirth');
                $table->string('gender');
                $table->string('ethinicorigin');
                $table->string('religion');
                $table->string('nationality');
                $table->string('countryofbirth');
                $table->string('countryofdomicile');
    
                $table->string('addressline1');
                $table->string('addressline2');
                $table->string('addressline3');
                $table->string('townorcity');
                $table->string('districtorprovince');
                $table->string('country');
                $table->string('postcode');
                $table->string('email');
                $table->string('telephonenumber');            
    
                $table->string('disabilities');
                $table->string('educationhistory');
                $table->string('qualifications');
                $table->string('workexperience');
                $table->string('feesandreferences');
    
                $table->string('additionalinformation');
                $table->integer('applicant_id')->unassigned();
                $table->integer('user_id')->unassigned();
                $table->timestamps();
            });
          }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applicants');
    }
};

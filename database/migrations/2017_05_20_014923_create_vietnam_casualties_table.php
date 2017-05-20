<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVietnamCasualtiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vietnam_casualties', function (Blueprint $table) {
            $table->increments('id');
            $table->string('service_number', 10)->comment('Service number');
            $table->string('c', 1)->comment('Member component code.'); 
            $table->string('ptp', 1)->comment('Person type name code');
            $table->string('person_type_name', 55)->comment('Person type name'); 
            $table->string('member_name', 40)->comment('Member name');
            $table->string('s', 1)->comment('Member service code');
            $table->string('service_name', 50)->comment('Member service name');
            $table->string('rank_rate', 6)->comment('Member rank of rate');
            $table->string('pg', 3)->comment('Member paygrade');
            $table->strong('occ', 6)->comment('Memeber occupation code');
            $table->string('occupation_name', 250)->comment('Member occupation name');
            $table->string('birth_date', 8)->comment('Member birthdate');
            $table->string('gender', 1)->comment('Member gender');
            $table->string('hor_city', 50)->comment('Home of record city');
            $table->string('hor_county', 50)->comment('Home of record county'); 
            $table->string('hor_ctry', 2)->comment('Home of record country code.');
            $table->string('hor_ST', 2)->comment('Home of record state code');
            $table->string('state_prv_nm', 50)->comment('State or province name');
            $table->string('marital_status', 50)->comment('Marital name');
            $table->string('religion_name', 60)->comment('Religion short name');
            $table->string('L', 2)->comment('religion code');
            $table->string('race_name', 120)->comment('race name');
            $table->string('ethnic_name', 80)->comment('Ethnic short name'); 
            $table->string('race_omb', 50)->comment('Race omb name');
            $table->string('ethnic_group_name', 50)->comment('Ethnic group name');
            $table->string('cas_circumstances', 210)->comment('Casualty circumstances');
            $table->string('cas_city', 50)->comment('Casualty city');
            $table->string('cas_st', 2)->comment('Casualty state or province code.');
            $table->string('cas_ctry', 2)->comment('Casualty county/over water code');
            $table->string('cas_region_name', 50)->comment('Casualty region name');
            $table->string('country_or_water_name', 50)->comment('Country/Over water code');
            $table->string('unit_name', 100)->comment('Member unit');
            $table->string('d', 1)->comment('duty_code');
            $table->string('process_dt', 8)->comment('Process date');
            $table->string('death_dt', 8)->comment('Incident or death date');
            $table->string('year', 4)->comment('year of death'); 
            $table->string('wc', 1)->comment('War or Conflict code'); 
            $table->string('oitp', 1)->comment('Operation incident type code'); 
            $table->string('oi_name', 50)->comment('Operation/Incident name'); 
            $table->string('oi_location', 50)->comment('Location name'); 
            $table->string('close_dt', 8)->comment('Closure date');
            $table->string('aircraft', 10)->comment('Aircraft type');
            $table->string('h', 2)->comment('Hostile or non-hostile indicator'); 
            $table->string('casualty_type_name', 50)->comment('Casuality type name'); 
            $table->string('casualty_category', 50)->comment('Casuality category name'); 
            $table->string('casualty_reason_name', 50)->comment('Incident casuality reason name');
            $table->string('csn', 3)->comment('Casualty Cat. Short name'); 
            $table->string('body', 1)->comment('Remains recovered');
            $table->string('casualty_closure_name', 50)->comment('Casualty closure name');
            $table->string('wall', 7)->comment('Vietnam wall row and panel indicator');
            $table->string('Incident_category', 50)->comment('Casualty category name'); 
            $table->string('i_status_dt')->comment('Incident casualty category date');
            $table->string('i_csn')->comment('incident casualty cat. short name');
            $table->string('i_h')->comment('Incident hostile or Incident non-hostile death'); 
            $table->string('i_aircraft')->comment('Incident aircraft type');
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
        Schema::dropIfExists('vietnam_casualties');
    }
}

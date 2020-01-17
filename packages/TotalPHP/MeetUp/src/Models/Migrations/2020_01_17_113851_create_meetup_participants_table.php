<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMeetupParticipantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'meetup_participant',
            function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->unsignedBigInteger('participant_id');
                $table->unsignedBigInteger('meetup_id');
                $table->timestamps();

                $table->foreign('participant_id')
                    ->references('id')
                    ->on('participants');

                $table->foreign('meetup_id')
                    ->references('id')
                    ->on('meetups');
            }
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('meetup_participants');
    }
}

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
        Schema::create('events', function (Blueprint $collection) {
            $collection->id();
            $collection->string('title');
            $collection->string('description');	
            $collection->enum('type', ['money_collection', 'survery','suggestions','complaints','others']);
            $collection->timestamp('start_date');
            $collection->timestamp('end_date');
            $collection->enum('status',['active', 'inactive', 'deleted', 'suspended']);
            $collection->nested([
                'money_collection' => [
                    'amount' => 'string'
                ],
                'survery' => [
                    'total_options' => 'number',
                    'otpions'=> 'string'
                ],
                'suggestions' => [
                    'comment' => 'string'
                ],
                'complaints' => [
                    'comment' => 'string'
                ],
                'others' => [
                    'comment' => 'string'
                ],
                'house'=> [
                    'house_id'  => 'string',
                    'option_id'    => 'string',
                    'comment'   => 'string',
                ],
            ]);
            $collection->timestamp('created_at')->useCurrent();
            $collection->timestamp('updated_at')->useCurrent();
            $collection->timestamp('deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('event');
    }
};

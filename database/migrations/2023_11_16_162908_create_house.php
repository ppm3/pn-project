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
        Schema::create('house', function (Blueprint $collection) {
            $collection->id();
            $collection->enum('sector', ['A','B','C','D','E','F']);	
            $collection->number('number');
            $collection->enum('status',['active', 'inactive', 'deleted', 'suspended']);
            $collection->nested([
                'habitant' => [
                    'first_name' => 'string',
                    'last_name'  => 'string',
                    'phone'      => 'number',
                    'status'     => [
                        'type'  => 'string',
                        'enum'  => ['active', 'inactive', 'deleted', 'suspended'],
                        'default' => 'active',
                    ],
                    'type'       => [
                        'type' => 'string',
                        'enum' => ['owner', 'renter', 'guest'],	
                        'default' => 'owner',	
                    ],
                ]
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
        Schema::dropIfExists('house');
    }
};

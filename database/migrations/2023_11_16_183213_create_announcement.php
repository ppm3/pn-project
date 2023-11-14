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
        Schema::create('announcement', function (Blueprint $collection) {
            $collection->id();
            $collection->string('title');
            $collection->string('description');
            $collection->string('url');
            $collection->timestamp('start_date');
            $collection->timestamp('end_date');
            $collection->enum('status',['active', 'inactive', 'deleted', 'suspended']);
            $collection->timestamp('created_at')->useCurrent();
            $collection->timestamp('updated_at')->useCurrent();
            $collection->timestamp('deleted_at')->nullable();
            $collection->nested([
                'acknowledge' => [
                    'house_id'  => 'string',
                ],
            ]);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('announcement');
    }
};

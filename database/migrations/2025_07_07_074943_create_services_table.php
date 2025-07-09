<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained('service_categories')->onDelete('cascade');
            $table->string('slug')->unique(); // 'web-apps', etc.
            $table->string('title');
            $table->text('desc');
            $table->string('image');
            $table->string('price')->nullable();
            $table->json('features');
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('services');
    }
};

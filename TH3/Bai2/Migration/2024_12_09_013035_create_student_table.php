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
        Schema::create('students', function (Blueprint $table) {
            $table->id('ID'); // Tạo cột ID chính
            $table->string('first_name', 50); // Khóa ngoại tham chiếu medicine_id
            $table->string('last_name', 50); // Số lượng thuốc bán ra
            $table->date('date_of_birth'); // Ngày giờ bán hàng
            $table->string('parent_phone', 20); // Số điện thoại khách hàng (tùy chọn)
            $table->unsignedBigInteger('class_id')->nullable(); // Cột created_at và updated_at
            $table->timestamps();
            // Thiết lập khóa ngoại
            $table->foreign('class_id')->references('id')->on('classes')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student');
    }
};

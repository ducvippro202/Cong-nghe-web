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
        Schema::create('medicines', function (Blueprint $table) {
            $table->id('medicine_id'); // Tạo cột ID chính
            $table->string('name', 255); // Tên thuốc
            $table->string('brand', 100)->nullable(); // Thương hiệu (tùy chọn)
            $table->string('dosage', 50)->nullable(); // Thông tin liều lượng (tùy chọn)
            $table->string('form', 50); // Dạng thuốc
            $table->decimal('price', 10, 2); // Giá thuốc
            $table->integer('stock'); // Số lượng tồn kho
            $table->timestamps(); // Cột created_at và updated_at
        });
    
        Schema::create('sales', function (Blueprint $table) {
            $table->id('sale_id'); // Tạo cột ID chính
            $table->unsignedBigInteger('medicine_id'); // Khóa ngoại tham chiếu medicine_id
            $table->integer('quantity'); // Số lượng thuốc bán ra
            $table->dateTime('sale_date'); // Ngày giờ bán hàng
            $table->string('customer_phone', 10)->nullable(); // Số điện thoại khách hàng (tùy chọn)
            $table->timestamps(); // Cột created_at và updated_at
    
            // Thiết lập khóa ngoại
            $table->foreign('medicine_id')->references('medicine_id')->on('medicines')->onDelete('cascade');
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medicine');
    }
};

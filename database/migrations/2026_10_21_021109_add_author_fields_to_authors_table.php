
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('authors', function (Blueprint $table) {
            $table->string('author_name');
            $table->string('gender')->nullable();
            $table->date('dob')->nullable();
            $table->string('pob')->nullable();
            $table->text('address')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('photo')->nullable();
        });
    }

    public function down(): void
    {
        Schema::table('authors', function (Blueprint $table) {
            $table->dropColumn([
                'author_name',
                'gender',
                'dob',
                'pob',
                'address',
                'phone',
                'email',
                'photo',
            ]);
        });
    }
};

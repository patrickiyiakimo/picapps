<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->string('request_type')->nullable()->after('status');
            $table->string('budget_range')->nullable()->after('description');
            $table->string('timeline')->nullable()->after('budget_range');
            $table->text('admin_notes')->nullable()->after('updates');
            $table->timestamp('approved_at')->nullable()->after('admin_notes');
            $table->timestamp('rejected_at')->nullable()->after('approved_at');
        });
    }

    public function down()
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->dropColumn(['request_type', 'budget_range', 'timeline', 'admin_notes', 'approved_at', 'rejected_at']);
        });
    }
};
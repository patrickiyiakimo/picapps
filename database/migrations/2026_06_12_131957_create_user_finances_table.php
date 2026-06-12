<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('user_finances', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->decimal('total_spent', 12, 2)->default(0);
            $table->decimal('outstanding_balance', 12, 2)->default(0);
            $table->string('default_currency', 3)->default('USD');
            $table->json('payment_methods')->nullable();
            $table->json('bank_accounts')->nullable();
            $table->timestamps();
        });

        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->string('invoice_number')->unique();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->decimal('amount', 12, 2);
            $table->string('currency', 3)->default('USD');
            $table->string('status')->default('pending'); // pending, paid, overdue, cancelled
            $table->date('issue_date');
            $table->date('due_date');
            $table->date('paid_date')->nullable();
            $table->text('description')->nullable();
            $table->json('line_items')->nullable();
            $table->timestamps();
        });

        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description')->nullable();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('status')->default('active'); // active, completed, on_hold
            $table->integer('progress')->default(0);
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->timestamps();
        });

        Schema::create('activities', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('type');
            $table->text('description');
            $table->json('metadata')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('activities');
        Schema::dropIfExists('projects');
        Schema::dropIfExists('invoices');
        Schema::dropIfExists('user_finances');
    }
};
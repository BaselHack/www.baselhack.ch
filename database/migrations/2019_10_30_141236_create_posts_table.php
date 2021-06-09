<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table)
        {
            $table->bigIncrements('id');
            $table->uuid('uuid')->unique();
            $table->date('published_at')->nullable();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('teaser');
            $table->longText('body');
       
            $table->unsignedBigInteger('created_by')->nullable();
            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade')->onDelete('set null');

            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('nova_pending_trix_attachments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('draft_id')->index();
            $table->string('attachment');
            $table->string('disk');
            $table->timestamps();
        });

        Schema::create('nova_trix_attachments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('attachable_type');
            $table->unsignedInteger('attachable_id');
            $table->string('attachment');
            $table->string('disk');
            $table->string('url')->index();
            $table->timestamps();

            $table->index(['attachable_type', 'attachable_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nova_pending_trix_attachments');
        Schema::dropIfExists('nova_trix_attachments');
        Schema::dropIfExists('posts');
    }
}

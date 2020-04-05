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
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title')->comment('Заголовок');
            $table->string('slug')->nullable()->unique()->comment('Slug');
            $table->text('short_description')->nullable()->comment('Короткое описание');
            $table->text('description')->nullable()->comment('Полное описание');
            $table->string('image')->nullable()->comment('Картинка');
            $table->integer('order_number')->default(0)->comment('Порядковый номер')->index();
            $table->timestamp('posted_at')->comment('Дата публикования')->index();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}

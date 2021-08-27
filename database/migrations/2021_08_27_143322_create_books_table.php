<?php

use App\Constants\BookLocale;
use App\Constants\BookStatus;
use App\Constants\BookType;
use App\Models\Bookshelf;
use App\Models\Series;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('sub_title')
                ->nullable();
            $table->tinyInteger('type')
                ->default(BookType::LNOVEL);
            $table->foreignIdFor(Series::class, 'series_id')
                ->nullable()
                ->constrained()
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');
            $table->float('seq')
                ->nullable();
            $table->tinyInteger('status')
                ->default(BookStatus::READY);
            $table->foreignIdFor(Bookshelf::class, 'bookshelf_id')
                ->nullable()
                ->constrained()
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');
            $table->string('isbn')
                ->nullable();
            $table->string('author');
            $table->string('locale')
                ->default(BookLocale::ZH_TW);
            $table->string('publisher');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}

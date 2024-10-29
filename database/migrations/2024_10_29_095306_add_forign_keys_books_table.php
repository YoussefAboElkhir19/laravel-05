<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


use App\Models\Author;
use App\Models\Language;
use App\Models\Book;
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('books' , function (Blueprint $table){

            $table->foreignIdFor(Author::class)->constrained()->after('title');
            $table->foreignIdFor(Language::class)->constrained();
            $table->foreignIdFor(Book::class)->constrained();
            

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('books' , function (Blueprint $table){
            $table->dropColumn('author_id');
            $table->dropColumn('language_id');
            $table->dropColumn('book_id');


        });    }
};

<?php

use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            'title' => 'Boy: Tales of Childhood',
            'isbn' => '9780142413814',
            'publisher' => 'Penguin Putnam Inc.',
            'author_id' => '2',
            'genre_id' => '1',
            'publish_date' => '2009',
            'description' => 'From his own life, of course! As full of excitement and the unexpected as his world-famous,',
            'image' => 'Insert Image'
        ]);
        DB::table('books')->insert([
            'title' => 'Fantastic Mr. Fox',
            'isbn' => '9780142410349',
            'publisher' => 'Penguin Putnam Inc.',
            'author_id' => '2',
            'genre_id' => '2',
            'publish_date' => '2007',
            'description' => 'Someone\'s been stealing from the three meanest farmers around, and they know the identity of the thief',
            'image' => 'Insert Image'
        ]);
        DB::table('books')->insert([
            'title' => 'James and the Giant Peach',
            'isbn' => '9780142410363',
            'publisher' => 'Penguin Putnam Inc.',
            'author_id' => '2',
            'genre_id' => '2',
            'publish_date' => '2007',
            'description' => 'After James Henry Trotter\'s parents are tragically eaten by a rhinoceros',
            'image' => 'Insert Image'
        ]);
        DB::table('books')->insert([
            'title' => 'South of the Border, West of the Sun: A Novel',
            'isbn' => '9780679767398',
            'publisher' => 'RANDOM HOUSE INC.',
            'author_id' => '1',
            'genre_id' => '3',
            'publish_date' => '2000',
            'description' => 'Born in 1951 in an affluent Tokyo suburb, Hajime—beginning',
            'image' => 'Insert Image'
        ]);
        DB::table('books')->insert([
            'title' => 'The Elephant Vanishes',
            'isbn' => '9780679750536',
            'publisher' => 'Random House Inc.',
            'author_id' => '1',
            'genre_id' => '4',
            'publish_date' => '1994',
            'description' => 'A man sees his favorite elephant vanish into thin air; a newlywed couple
             suffers attacks of hunger',
            'image' => 'Insert Image'
        ]);
        DB::table('books')->insert([
            'title' => '1Q84',
            'isbn' => '9780307476463',
            'publisher' => 'Random House Inc.',
            'author_id' => '1',
            'genre_id' => '4',
            'publish_date' => '2011',
            'description' => 'A young woman named Aomame follows a taxi driver’s enigmatic
             suggestion and begins to notice puzzling discrepancies in the world around her.',
            'image' => 'Insert Image'
        ]);
        DB::table('books')->insert([
            'title' => 'The Alchemist',
            'isbn' => '9780062315007',
            'publisher' => 'Harper Collins Publishers',
            'author_id' => '3',
            'genre_id' => '4',
            'publish_date' => '2014',
            'description' => 'Combining magic, mysticism, wisdom and wonder into an inspiring 
            tale of self-discovery, The Alchemist has become a modern classic',
            'image' => 'Insert Image'
        ]);
    }
}

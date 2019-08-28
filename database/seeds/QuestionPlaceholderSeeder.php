<?php

use Illuminate\Database\Seeder;

class QuestionPlaceholderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('question_placeholders')->insert([
            ['text' => 'Do I make a difference?'],
            ['text' => 'How do you get protein?'],
            ['text' => 'Don\'t you miss the taste of meat?'],
            ['text' => 'How do you get B12?'],
            ['text' => 'How can I raise my children vegan?'],
            ['text' => 'Bacon!?'],
            ['text' => 'How can I replace eggs in cake recipes?'],
            ['text' => 'Is vegan food more expensive?'],
            ['text' => 'Don\'t cows need to be milked?'],
            ['text' => 'If everyone went vegan, what would happen to all the farm animals?'],
            ['text' => 'Why do vegans often eat something that looks like meat?'],
        ]);
    }
}

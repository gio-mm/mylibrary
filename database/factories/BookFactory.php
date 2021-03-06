<?php

namespace Database\Factories;

use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Book::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>'Fight Club',
            'author'=>'Chuck Palahniuk',
            'descr'=>'Fight Club is a 1996 novel by Chuck Palahniuk. It follows the experiences of an unnamed protagonist struggling with insomnia. Inspired by his doctor\'s
             exasperated remark that insomnia is not suffering, the protagonist finds relief by impersonating a seriously ill person in several support groups',
            'pdf_link'=>'public/FightClub.pdf',
            'image'=>'book.png'
            //
        ];
    }
}

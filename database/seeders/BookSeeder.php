<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $book = new Book();
        $book->name = 'sunt aut facere repellat provident occaecati excepturi optio reprehenderit';
        $book->author = 'repellat';
        $book->desc = 'quia et suscipit\nsuscipit recusandae consequuntur expedita et cum\nreprehenderit molestiae ut ut quas totam\nnostrum rerum est autem sunt rem eveniet architecto';
        $book->save();
        $book = new Book();
        $book->name = 'qui est esse';
        $book->author = 'esse';
        $book->desc = 'est rerum tempore vitae\nsequi sint nihil reprehenderit dolor beatae ea dolores neque\nfugiat blanditiis voluptate porro vel nihil molestiae ut reiciendis\nqui aperiam non debitis possimus qui neque nisi nulla';
        $book->save();
        $book = new Book();
        $book->name = 'ea molestias quasi exercitationem repellat qui ipsa sit aut';
        $book->author = 'molestias';
        $book->desc = 'et iusto sed quo iure\nvoluptatem occaecati omnis eligendi aut ad\nvoluptatem doloribus vel accusantium quis pariatur\nmolestiae porro eius odio et labore et velit aut';
        $book->save();
        $book = new Book();
        $book->name = 'eum et est occaecati';
        $book->author = 'occaecati';
        $book->desc = 'ullam et saepe reiciendis voluptatem adipisci\nsit amet autem assumenda provident rerum culpa\nquis hic commodi nesciunt rem tenetur doloremque ipsam iure\nquis sunt voluptatem rerum illo velit';
        $book->save();
        $book = new Book();
        $book->name = 'nesciunt quas odio';
        $book->author = 'quas';
        $book->desc = 'repudiandae veniam quaerat sunt sed\nalias aut fugiat sit autem sed est\nvoluptatem omnis possimus esse voluptatibus quis\nest aut tenetur dolor neque';
        $book->save();
        $book = new Book();
        $book->name = 'dolorem eum magni eos aperiam quia';
        $book->author = 'magni';
        $book->desc = 'ut aspernatur corporis harum nihil quis provident sequi\nmollitia nobis aliquid molestiae\nperspiciatis et ea nemo ab reprehenderit accusantium quas\nvoluptate dolores velit et doloremque molestiae';
        $book->save();
        $book = new Book();
        $book->name = 'magnam facilis autem';
        $book->author = 'facilis';
        $book->desc = 'dolore placeat quibusdam ea quo vitae\nmagni quis enim qui quis quo nemo aut saepe\nquidem repellat excepturi ut quia\nsunt ut sequi eos ea sed quas';
        $book->save();
        $book = new Book();
        $book->name = 'dolorem dolore est ipsam';
        $book->author = 'dolore';
        $book->desc = 'dignissimos aperiam dolorem qui eum\nfacilis quibusdam animi sint suscipit qui sint possimus cum\nquaerat magni maiores excepturi\nipsam ut commodi dolor voluptatum modi aut vitae';
        $book->save();
        $book = new Book();
        $book->name = 'nesciunt iure omnis dolorem tempora et accusantium';
        $book->author = 'iure';
        $book->desc = 'consectetur animi nesciunt iure dolore\nenim quia ad\nveniam autem ut quam aut nobis\net est aut quod aut provident voluptas autem voluptas';
        $book->save();
        $book = new Book();
        $book->name = 'optio molestias id quia eum';
        $book->author = 'molestias';
        $book->desc = 'quo et expedita modi cum officia vel magni\ndoloribus qui repudiandae\nvero nisi sit\nquos veniam quod sed accusamus veritatis error';
        $book->save();
    }
}

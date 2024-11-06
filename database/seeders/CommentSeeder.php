<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comment;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $comments = [
            [
                'titel'=> 'In Ordnung',
                'punkte'=>'4',
                'comment'=> 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.',
            ],[
                'titel'=> 'Wir werden immer wieder kommen!',
                'punkte'=>'4',
                'comment'=> 'ula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus',
            ],
            [
                'titel'=> 'Wirklich wunderbar',
                'punkte'=>'5',
                'comment'=> 'ula, porttitor eu, consequat vita',
            ],
            [
                'titel'=>  'Wirklich enttäuscht.',
                'punkte'=>'2',
                'comment'=> 'Maecenas tempus, tellus eget condimentum rhoncus, sem quam sem',
            ],
            [
                'titel'=>  'Immer wundervoll',
                'punkte'=>'4.5',
                'comment'=> 'venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Do',
            ]
            ];
            

        foreach($comments AS $comment){
            $comment = new Comment([
                'titel'=>  $comment['titel'],
                'punkte'=> $comment['punkte'],
                'comment'=> $comment['comment'],
            ]);
            $comment->save();
        }
    }
}

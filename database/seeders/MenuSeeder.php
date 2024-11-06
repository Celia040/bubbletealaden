<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Menu;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $menus = [
            [
                'name' => 'Brown Sugar',
                'sorte'=> 'Brown-Sugar',
                'volume'=>'0.5',
                'special'=>'mit Tapioka',
                'preis'=>'6.50'
            ],
            [
                'name' => 'Yakult Maracuja',
                'sorte'=> 'Brown-Sugar',
                'volume'=>'0.7',
                'special'=>'mit mit Basilikumsamen und Tapioka',
                'preis'=>'7.00'
            ],
            [
                'name' => 'Taro Brown Sugar',
                'sorte'=> 'Brown-Sugar',
                'volume'=>'0.5',
                'special'=>'mit Tapioka',
                'preis'=>'6.80'
            ],
            [
                'name' => 'Lychee Butterfly Tea',
                'sorte'=> 'Brown-Sugar',
                'volume'=>'0.5',
                'special'=>'mit Basilikumsamen und Lychee Jelly',
                'preis'=>'7.00'
            ],
            [
                'name' => 'Caramel Oolong Milk Tea',
                'sorte'=> 'Milky-Tee',
                'volume'=>'0.5',
                'special'=>'mit Tapioka',
                'preis'=>'5.00'
            ],
            [
                'name' => 'Matcha Milk Tea',
                'sorte'=> 'Milky-Tee',
                'volume'=>'0.5',
                'special'=>'mit Tapioka',
                'preis'=>'6.00'
            ],
            [
                'name' => 'Lychee Butterfly Tea',
                'sorte'=> 'Milky-Tee',
                'volume'=>'0.7',
                'special'=>'mit Tapioka',
                'preis'=>'7.00'
            ],
            [
                'name' => 'Blueberry Yoghurt',
                'sorte'=> 'Yoghurt',
                'volume'=>'0.5',
                'special'=>'mit Tapioka',
                'preis'=>'6.60'
            ],
            [
                'name' => 'Strawberry Yoghurt',
                'sorte'=> 'Yoghurt',
                'volume'=>'0.5',
                'special'=>'',
                'preis'=>'6.50'
            ],
            [
                'name' => 'Mango Yoghurt',
                'sorte'=> 'Yoghurt',
                'volume'=>'0.5',
                'special'=>'',
                'preis'=>'7.00'
            ],
            [
                'name' => 'Kissy Mango',
                'sorte'=> 'Fruity-Tee',
                'volume'=>'0.5',
                'special'=>'mit Tapioka',
                'preis'=>'6.00'
            ],
            [
                'name' => 'Passionfruit Daddy',
                'sorte'=> 'Fruity-Tee',
                'volume'=>'0.7',
                'special'=>'mit Tapioka',
                'preis'=>'6.50'
            ],

        ];

        
        foreach($menus AS $menu){
            $menu = new Menu([
                'name'=>  $menu['name'],
                'sorte'=>  $menu['sorte'],
                'volume'=>  $menu['volume'],
                'special'=>  $menu['special'],
                'preis'=>  $menu['preis'],
            ]);
            $menu->save();
        }
    }
}

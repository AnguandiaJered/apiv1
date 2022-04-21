<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $postes=[
                [
                    'title'=>'title 1',
                    'body'=>'Nodemailer is a module for Node.js applications to allow easy as cake email sending',
                    'category'=>'politic'
                ],
                [
                    'title'=>'title 2',
                    'body'=>'Nodemailer is a module for Node.js applications to allow easy as cake email sending',
                    'category'=>'Nodemailer'
                ],
                [
                    'title'=>'title 3',
                    'body'=>'Nodemailer is a module for Node.js applications to allow easy as cake email sending',
                    'category'=>'module'
                ],
           ];
           foreach($poste as $post){
               Post::create($post);
           }
    }
}

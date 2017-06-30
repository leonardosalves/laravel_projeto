<?php

use Illuminate\Database\Seeder;

class ProjectNotesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Entities\ProjectNotes::truncate();
        factory(\App\Entities\ProjectNotes::class, 10)->create();
    }
}

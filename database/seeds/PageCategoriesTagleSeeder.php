<?php

use Illuminate\Database\Seeder;
use App\Models\PageCategory;

class PageCategoriesTagleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // PageCategory::truncate();
        PageCategory::create([
            'id' => 1,
            'title' => [
                'ru' => 'Бакалавриат информатики',
                'en' => 'Bachelor of Sciences (Informatics)',
            ],
            'slug' => 'bachelor',
            'status' => 1,
        ]);
        PageCategory::create([
            'id' => 2,
            'title' => [
                'ru' => 'Магистратура информатики',
                'en' => 'Master of Sciences (Informatics)',
            ],
            'slug' => 'master',
            'status' => 1,
        ]);
        PageCategory::create([
            'id' => 3,
            'title' => [
                'ru' => 'Требования к поступлению',
                'en' => 'Admission Requirements',
            ],
            'slug' => 'admission',
            'status' => 1,
        ]);
        PageCategory::create([
            'id' => 4,
            'title' => [
                'ru' => 'Международное сотрудничество',
                'en' => 'Internationalization',
            ],
            'slug' => 'internationalization',
            'status' => 1,
        ]);
    }
}

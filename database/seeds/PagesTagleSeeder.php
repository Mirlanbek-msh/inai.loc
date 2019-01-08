<?php

use Illuminate\Database\Seeder;
use App\Models\Page;

class PagesTagleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Page::truncate();

        /**Bachelor */
        Page::create([
            'title' => [
                'ru' => 'Бакалавриат информатики',
                'en' => 'Bachelor of Sciences (Informatics)',
            ],
            'slug' => 'bachelor-of-sciences',
            'content' => [
                'ru' => 'Программные технологии',
                'en' => 'Software Technologies (BA)',
            ],
            'category_id' => 1,
            'status' => 1,
        ]);
        Page::create([
            'title' => [
                'ru' => 'Программные технологии',
                'en' => 'Software Technologies (BA)',
            ],
            'slug' => 'software-technologies',
            'content' => [
                'ru' => 'Программные технологии',
                'en' => 'Software Technologies (BA)',
            ],
            'category_id' => 1,
            'status' => 1,
        ]);
        Page::create([
            'title' => [
                'ru' => 'Медицинская информатика',
                'en' => 'Medical Informatics (BA)',
            ],
            'slug' => 'medical-informatics',
            'content' => [
                'ru' => 'Программные технологии',
                'en' => 'Software Technologies (BA)',
            ],
            'category_id' => 1,
            'status' => 1,
        ]);
        Page::create([
            'title' => [
                'ru' => 'Веб-информатика',
                'en' => 'Web-Informatics (BA)',
            ],
            'slug' => 'web-informatics',
            'content' => [
                'ru' => 'Программные технологии',
                'en' => 'Software Technologies (BA)',
            ],
            'category_id' => 1,
            'status' => 1,
        ]);

        /**Master */
        Page::create([
            'title' => [
                'ru' => 'Магистратура информатики',
                'en' => 'Master of Sciences (Informatics)',
            ],
            'slug' => 'master-of-sciences',
            'content' => [
                'ru' => 'Программные технологии',
                'en' => 'Software Technologies (BA)',
            ],
            'category_id' => 2,
            'status' => 1,
        ]);
        Page::create([
            'title' => [
                'ru' => 'Инженерия системного программирования проектов',
                'en' => 'International Software System Engineering (MA)',
            ],
            'slug' => 'software-system-engineering',
            'content' => [
                'ru' => 'Программные технологии',
                'en' => 'Software Technologies (BA)',
            ],
            'category_id' => 2,
            'status' => 1,
        ]);
        Page::create([
            'title' => [
                'ru' => 'Предпринимательство в сфере информационных технологий',
                'en' => 'Software Enterpreneurship (MA)',
            ],
            'slug' => 'software-enterpreneurship',
            'content' => [
                'ru' => 'Программные технологии',
                'en' => 'Software Technologies (BA)',
            ],
            'category_id' => 2,
            'status' => 1,
        ]);
        
        /**Admission */
        Page::create([
            'title' => [
                'ru' => 'Учебные программы',
                'en' => 'Study Programmes',
            ],
            'slug' => 'study-programmes',
            'content' => [
                'ru' => 'Программные технологии',
                'en' => 'Software Technologies (BA)',
            ],
            'category_id' => 3,
            'status' => 1,
        ]);
        Page::create([
            'title' => [
                'ru' => 'Поступление в бакалавриат',
                'en' => 'Enrollment Bachelor',
            ],
            'slug' => 'enrollment-bachelor',
            'content' => [
                'ru' => 'Программные технологии',
                'en' => 'Software Technologies (BA)',
            ],
            'category_id' => 3,
            'status' => 1,
        ]);
        Page::create([
            'title' => [
                'ru' => 'Поступление в магистратуру',
                'en' => 'Enrollment Master',
            ],
            'slug' => 'enrollment-master',
            'content' => [
                'ru' => 'Программные технологии',
                'en' => 'Software Technologies (BA)',
            ],
            'category_id' => 3,
            'status' => 1,
        ]);
        Page::create([
            'title' => [
                'ru' => 'ДААД стипендии для Бишкека',
                'en' => 'DAAD Grants for Bishkek',
            ],
            'slug' => 'daad-grants-for-bishkek',
            'content' => [
                'ru' => 'Программные технологии',
                'en' => 'Software Technologies (BA)',
            ],
            'category_id' => 3,
            'status' => 1,
        ]);

        /**Internationalization */
        Page::create([
            'title' => [
                'ru' => 'Ассоциативный партнер',
                'en' => 'Associate Partner',
            ],
            'slug' => 'associate-partner',
            'content' => [
                'ru' => 'Программные технологии',
                'en' => 'Software Technologies (BA)',
            ],
            'category_id' => 4,
            'status' => 1,
        ]);
        Page::create([
            'title' => [
                'ru' => 'Практика',
                'en' => 'Internships',
            ],
            'slug' => 'internships',
            'content' => [
                'ru' => 'Программные технологии',
                'en' => 'Software Technologies (BA)',
            ],
            'category_id' => 4,
            'status' => 1,
        ]);
        Page::create([
            'title' => [
                'ru' => 'ДААД стипендии для Цвикау',
                'en' => 'DAAD Grants for Zwickau',
            ],
            'slug' => 'daad-grants-for-zwickau',
            'content' => [
                'ru' => 'Программные технологии',
                'en' => 'Software Technologies (BA)',
            ],
            'category_id' => 4,
            'status' => 1,
        ]);
        /**About page */
        Page::create([
            'title' => [
                'ru' => 'О нас',
                'en' => 'About us',
            ],
            'slug' => 'about',
            'content' => [
                'ru' => 'Программные технологии',
                'en' => 'Software Technologies (BA)',
            ],
            'status' => 1,
        ]);
    }
}

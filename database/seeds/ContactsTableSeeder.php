<?php

use Illuminate\Database\Seeder;
use App\Models\Contact;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Contact::truncate();
        Contact::create([
            'name' => 'phone_1',
            'value' => [
                'ru' => '+996 557 312 711'
            ],
            'pattern' => '(0|[+][0-9]{1,3})[ ][0-9]{3}[ ][0-9]{3}[ ][0-9]{3,6}',
            'placeholder' => '+996 555 555 555',
            'status' => 1,
            'important' => 1
        ]);
        Contact::create([
            'name' => 'phone_2',
            'value' => [
                'ru' => '+996 312 549 238'
            ],
            'pattern' => '((0|[+][0-9]{1,3})[ ][0-9]{3}[ ][0-9]{3}[ ][0-9]{3,6})?',
            'placeholder' => '+996 555 555 555',
            'status' => 1,
        ]);
        Contact::create([
            'name' => 'email',
            'value' => [
                'ru' => 'info@inai.kg'
            ],
            'pattern' => '^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$',
            'placeholder' => 'info@inai.kg',
            'status' => 1,
            'important' => 1
        ]);
        Contact::create([
            'name' => 'address',
            'value' => [
                'ru' => 'Малдыбыаева 34 Б
                Бишкек 720000',
                'en' => 'Maldybaeva 34 B
                Bishkek 720000'
            ],
            'pattern' => '.{3,191}',
            'placeholder' => 'г. Бишкек',
            'status' => 1,
            'important' => 1
        ]);
        Contact::create([
            'name' => 'reception_hours',
            'value' => [
                'ru' => 'Пн-Пт с 9:00 - 17:00',
                'en' => 'Mon-Fri from 9:00 - 17:00',
            ],
            'pattern' => '.{2,3}-.{2,3} .{1,10} \d{1,2}:\d{1,2} - \d{1,2}:\d{1,2}',
            'placeholder' => 'Пн-Пт с 9:00 - 17:00',
            'status' => 1,
            'important' => 1
        ]);
        Contact::create([
            'name' => 'fb',
            'value' => [
                'ru' => '//www.facebook.com/kgiaibishkek',
            ],
            'pattern' => "^http(s)?:\/\/[\w.-]+(?:\.[\w\.-]+)+[\w\-\._~:/?#[\]@!\$&'\(\)\*\+,;=.]+$",
            'placeholder' => 'https://example.kg',
        ]);
        Contact::create([
            'name' => 'tw',
            'value' => [
                'ru' => null,
            ],
            'pattern' => "^http(s)?:\/\/[\w.-]+(?:\.[\w\.-]+)+[\w\-\._~:/?#[\]@!\$&'\(\)\*\+,;=.]+$",
            'placeholder' => 'https://example.kg',
        ]);
        Contact::create([
            'name' => 'yt',
            'value' => [
                'ru' => null,
            ],
            'pattern' => "^http(s)?:\/\/[\w.-]+(?:\.[\w\.-]+)+[\w\-\._~:/?#[\]@!\$&'\(\)\*\+,;=.]+$",
            'placeholder' => 'https://example.kg',
        ]);
        Contact::create([
            'name' => 'instagram',
            'value' => [
                'ru' => null,
            ],
            'pattern' => "^http(s)?:\/\/[\w.-]+(?:\.[\w\.-]+)+[\w\-\._~:/?#[\]@!\$&'\(\)\*\+,;=.]+$",
            'placeholder' => 'https://example.kg',
        ]);
        Contact::create([
            'name' => 'wa',
            'value' => [
                'ru' => null,
            ],
            'pattern' => "((0|[+][0-9]{1,3})[ ][0-9]{3}[ ][0-9]{3}[ ][0-9]{3,6})?",
            'placeholder' => '+996 555 555 555',
        ]);
    }
}

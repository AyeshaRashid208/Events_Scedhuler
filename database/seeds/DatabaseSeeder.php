<?php

use Illuminate\Database\Seeder;
use App\Country;
use App\Industry;
use App\Company;
use App\Account;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        Country::insert([
            ['name' => 'USA'],
            ['name' => 'UK'],
            ['name' => 'Canada']
        ]);

        Industry::insert([
            ['name' => 'Software'],
            ['name' => 'Accounting'],
            ['name' => 'Textile']
        ]);

        Company::insert([
            [
                'name' => 'Amerifoods Trading Co',
                'address1' => '600 Citadel Dr',
                'address2' => '',
                'city_id' => 2,
                'region_id' => 1,
                'zip' => '90040',
                'phone' => '(0323) 869-7999',
                'contact' => null,
                'email' => 'franca.sisto@gmail.com',
                'website' => 'https://www.findl.com',
                'category' => 'Food Products-Wholesale - Grocery Stores - Food Products',
                'yelp_rating' => null,
                'yelp_reviews' => null,
                'facebook_rating' => null,
                'facebook_reviews' => null,
                'facebook_followers' => null,
                'facebook' => 'https://www.facebook.com',
                'twitter' => 'https://www.twitter.com',
                'pinterest' => null,
                'linkedin' => 'https://www.linkedin.com',
                'instagram' => 'https://www.instagram.com',
                'youtube' => 'https://www.youtube.com',
                'facebook_marketing' => null,
                'adwords' => null,
                'twitter_ads' => null,
                'linkedin_ads' => null,
                'employees' => '10-19',
                'year_established' => '1995',
                'responsive' => null,
                'web_hosting' => null,
                'email_hosting' => null,
                'cms' => null,
                'marketing_auto' => null,
                'schema' => null,
                'open_graph' => null,
                'latitude' => '34.00709',
                'longitude' => '-118.15148',
                'country_id' => 1,
                'industry_id' => 1,
                'keywords' => null
            ],
        ]);

        Account::insert([
            [
                'name' => 'Test Account',
                'title' => 'Web Developer',
                'email' => 'account@gmail.com',
                'phone' => '923123456790',
                'region_id' => 1,
                'country_id' => 1,
                'city_id' => 1,
                'zip' => 123,
                'company_id' => 1,
            ]
        ]);

        // $this->call([
        //     PermissionsTableSeeder::class,
        //     RolesTableSeeder::class,
        //     PermissionRoleTableSeeder::class,
        //     UsersTableSeeder::class,
        //     RoleUserTableSeeder::class,
        //     CategoriesTableSeeder::class,
        //     QuestionsTableSeeder::class,
        //     OptionsTableSeeder::class,
        // ]);
    }
}

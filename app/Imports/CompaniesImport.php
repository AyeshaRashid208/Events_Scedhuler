<?php

namespace App\Imports;

use App\Company;
use App\Country;
use App\City;
use App\Region;
use Maatwebsite\Excel\Concerns\ToModel;

class CompaniesImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        if ($row[0] && $row[0] != 'Company') {
            
            return new Company([
                'name' => $row[0],
                'address1' => $row[1],
                'address2' => $row[2],
                'city_id' => $row[3] ? $this->city($row[3], $row[6]) : null,
                'region_id' => $row[4] ? $this->region($row[4], $row[6]) : null,
                'zip' => $row[5],
                'country_id' => $this->country($row[6]),
                'phone' => $row[7],
                'contact' => $row[8],
                'email' => $row[9],
                'website' => $row[10],
                'category' => $row[11],
                'yelp_rating' => (int)$row[12],
                'yelp_reviews' => $row[13],
                'facebook_rating' => (int)$row[14],
                'facebook_reviews' => $row[15],
                'facebook_followers' => (int)$row[16],
                'facebook' => $row[17],
                'twitter' => $row[18],
                'pinterest' => $row[19],
                'linkedin' => $row[20],
                'instagram' => $row[21],
                'youtube' => $row[22],
                'facebook_marketing' => $row[23],
                'adwords' => $row[24],
                'twitter_ads' => $row[25],
                'linkedin_ads' => $row[26],
                'employees' => $row[27],
                'year_established' => $row[28],
                'responsive' => $row[29],
                'web_hosting' => $row[30],
                'email_hosting' => $row[31],
                'cms' => $row[32],
                'marketing_auto' => $row[33],
                'schema' => $row[34],
                'open_graph' => $row[35],
                'latitude' => $row[36],
                'longitude' => $row[37]
            ]);
        }
    }

    public function country($name)
    {
        $country = Country::where('name', $name)->first();

        if (!$country) {
            $country = Country::create(['name' => $name]);
        }

        return $country->id;
    }

    public function city($name, $country)
    {
        $city = City::where('name', $name)->first();

        if (!$city) {
            $city = City::create(['name' => $name, 'country_id' => $this->country($country)]);
        }

        return $city->id;
    }

    public function region($name, $country)
    {
        $region = Region::where('name', $name)->first();

        if (!$region) {
            $region = Region::create(['name' => $name, 'country_id' => $this->country($country)]);
        }

        return $region->id;
    }
}

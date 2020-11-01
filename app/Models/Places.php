<?php
namespace App\Models;

/*
 * Mock travel destination data.
 * Note that we don't have to extend CodeIgniter's model for now
 */

class Places {

    //mock data : an array of records
    protected $data = [
        '1' => [
            'id' => 1,
            'name' => 'Nigo ',
            'brand' => 'Human Made',
            'description' => 'The status of Street Fashion in Japan will never be shaken.',
            'country' => 'Japan',
            'Date of birth' =>'1970',
            'image' => '1.jpg',
        ],
        '2' => [
            'id' => 2,
            'name' => 'Yohji Yamamoto ',
            'brand' => 'Yohji Yamamoto',
            'description' => 'He is known for his simple and appealing, sleek, anti-fashion design style.',
            'country' => 'Japan',
            'Date of birth' =>'1943',
            'image' => '2.jpg',
        ],
        '3' => [
            'id' => 3,
            'name' => 'Rei Kawakubo ',
            'brand' => 'Comme des Garcons',
            'description' => 'She is known around the world for her asymmetrical, curvilinear, avant-garde clothes and is loved by many in the fashion world.',
            'country' => 'Japan',
            'Date of birth' =>'1942',
            'image' => '3.jpg',
        ],
        '4' => [
            'id' => 4,
            'name' => 'Cristóbal Balenciaga ',
            'brand' => 'Balenciaga',
            'description' => 'For more than 90 years, Balenciaga has been known in the fashion world for its fashion, elegance and fine tailoring and tailoring of high quality clothing.',
            'country' => 'France',
            'Date of birth' =>'1895',
            'image' => '4.jpg',
        ],
         '5' => [
            'id' =>5,
            'name' => 'Jerry Lorenzo ',
            'brand' => 'Fear of God',
            'description' => 'With its unique street style, FEAR OF GOD has left a deep impression on people in the fashion industry in a very short time. It is a high-end street brand that has been gaining momentum in recent years.',
            'country' => 'America',
            'Date of birth' =>'1977',
            'image' => '5.jpg',
        ],
        '6' => [
            'id' => 6,
            'name' => 'Virgil Abloh ',
            'brand' => 'OFF-WHITE',
            'description' => 'The brand, led by Virgil Abloh, beat Gucci, Balenciaga, Valentino and Fendi in the rankings for the first quarter of 2019.',
            'country' => 'America',
            'Date of birth' =>'1980',
            'image' => '6.jpg',
        ],

    ];

    public function findAll() {
        return $this->data;
    }

    public function find($id = null) {
        if (!empty($id) && isset($this->data[$id])) {
            return $this->data[$id];
        }
        return null;
    }

}

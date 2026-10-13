<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Wisata 
{
    public static function semua()
    {
        return [
            [
                'id' => 1,
                'nama' => 'Pantai Parangtritis',
                'kategori' => 'Alam',
                'lokasi' => 'Bantul, Yogyakarta',
                'gambar' => 'https://cdn.idntimes.com/content-images/community/2020/09/parangtritis-e4f81fac27315376ab651a70df0a372e_600x400.jpg',
                'deskripsi' => 'Pantai Parangtritis yang melihatkan view dengan pemandangan laut yang indah dan angin yang sejuk, dan juga pemandangan matahri yang indah waktu sore hari dan pagi hari.'
            ],
            [
                'id' => 2,
                'nama' => 'Goa Pindul',
                'kategori' => 'Alam',
                'lokasi' => 'Gunungkidul, Yogyakarta',
                'gambar' => 'https://busdiscovery.id/wp-content/uploads/2025/05/goa-pindul-jogja.jpg',
                'deskripsi' => 'Goa Pindul dikenal dengan pengalaman menyusuri aliran sungai bawah tanah menggunakan ban pelampung, cocok untuk petualangan yang seru dan menantang adrenalin.'
            ],
            [
                'id' => 3,
                'nama' => 'Hutan Pinus Mangunan',
                'kategori' => 'Alam',
                'lokasi' => 'Bantul, Yogyakarta',
                'gambar' => 'https://assets-a1.kompasiana.com/items/album/2023/05/23/img20230514121453-646cc8e808a8b570c2169744.jpg',
                'deskripsi' => 'Hutan Pinus Mangunan menawarkan suasana pepohonan pinus yang enak dan sejuk, cocok untuk waktu sore dan pagi hari untuk menikmati suasana yang nyaman dan sejuk.'
            ],
            [
                'id' => 4,
                'nama' => 'Keraton Yogyakarta',
                'kategori' => 'Budaya',
                'lokasi' => 'Kota Yogyakarta',
                'gambar' => 'https://dijogja.co/images/gallery_direktori/dijogja-kraton-yogyakarta-bangunan-agung-dengan-arsitektur-jawa-yang-penuh-makna40.jpeg',
                'deskripsi' => 'Keraton Yogyakarta merupakan pusat sejarah dan tradisi Kesultanan Yogyakarta yang cocok untuk belajar sejarah dan ingin mengetahui tentanf sejarah yang ada di yogyakarta.'
            ],
            [
                'id' => 5,
                'nama' => 'Taman Sari',
                'kategori' => 'Budaya',
                'lokasi' => 'Kota Yogyakarta',
                'gambar' => 'https://jogjatourholic.com/wp-content/uploads/2022/12/wisata-taman-sari-2.png',
                'deskripsi' => 'Taman Sari adalah kompleks bersejarah yang dahulu digunakan sebagai taman kerajaan, dan cocok juga untuk temoat wisata berenang untuk keluarga, dan juga pemandangannya yang classic.'
            ],
            [
                'id' => 6,
                'nama' => 'Candi Prambanan',
                'kategori' => 'Budaya',
                'lokasi' => 'Perbatasan DIY dan Jawa Tengah',
                'gambar' => 'https://ik.imagekit.io/pandooin/tr:pr-true/production/images/attraction/candi-prambanan/VE1XbJDzAfqdc4wfpa4giiEfIioSCMHsuGL8ak9A.jpg',
                'deskripsi' => 'Candi Prambanan merupakan kompleks candi Hindu yang terkenal dengan arsitekturnya yang megah dan juga yang kokoh, .'
            ],
            [
                'id' => 7,
                'nama' => 'Gembira Loka Zoo',
                'kategori' => 'Rekreasi',
                'lokasi' => 'Kota Yogyakarta',
                'gambar' => 'https://travelspromo.com/wp-content/uploads/2019/03/satwa-burung-gembira-loka-glzoojogja.jpg',
                'deskripsi' => 'Gembira Loka Zoo merupakan tempat kebun binatang dan tempat rekreasi yang cocok untuk keluarga.'
            ],
            [
                'id' => 8,
                'nama' => 'Merapi Park',
                'kategori' => 'Rekreasi',
                'lokasi' => 'Sleman, Yogyakarta',
                'gambar' => 'https://asset-2.tstatic.net/travel/foto/bank/images/merapi-park-tempat-wisata-instagramable-di-jogja.jpg',
                'deskripsi' => 'Merapi Park merupakan destinasi rekreasi dengan berbagai miniatur dan tempat landmark, cocok untuk tempat foto.'
            ],
            [
                'id' => 9,
                'nama' => 'HeHa Sky View',
                'kategori' => 'Rekreasi',
                'lokasi' => 'Gunungkidul, Yogyakarta',
                'gambar' => 'https://cdn.klikberita24.com/wp-content/uploads/sites/2/2025/11/heha.jpg.webp',
                'deskripsi' => 'HeHa Sky View menawarkan area rekreasi dan pemandangan kawasan yogyakarta dengan view di ketinggian, cocok untk waktu sore hari dan pagi hari untuk mendapatkan pemandangan yang indah.'
            ]
        ];
    }

    public static function cari($id)
    {
        foreach (self::semua() as $wisata) {
            if ($wisata['id'] == $id) {
                return $wisata;
            }
        }

        return null;
    }
}


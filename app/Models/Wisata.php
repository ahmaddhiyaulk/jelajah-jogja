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
                'gambar' => 'https://images.unsplash.com/photo-1507525428034-b723cf961d3e?w=900',
                'deskripsi' => 'Pantai Parangtritis menawarkan pemandangan laut, hamparan pasir yang luas, dan suasana matahari terbenam yang menarik.'
            ],
            [
                'id' => 2,
                'nama' => 'Goa Pindul',
                'kategori' => 'Alam',
                'lokasi' => 'Gunungkidul, Yogyakarta',
                'gambar' => 'https://images.unsplash.com/photo-1518837695005-2083093ee35b?w=900',
                'deskripsi' => 'Goa Pindul dikenal dengan pengalaman menyusuri aliran sungai bawah tanah menggunakan ban pelampung.'
            ],
            [
                'id' => 3,
                'nama' => 'Hutan Pinus Mangunan',
                'kategori' => 'Alam',
                'lokasi' => 'Bantul, Yogyakarta',
                'gambar' => 'https://images.unsplash.com/photo-1448375240586-882707db888b?w=900',
                'deskripsi' => 'Hutan Pinus Mangunan menawarkan suasana pepohonan pinus yang rindang dan udara yang sejuk.'
            ],
            [
                'id' => 4,
                'nama' => 'Keraton Yogyakarta',
                'kategori' => 'Budaya',
                'lokasi' => 'Kota Yogyakarta',
                'gambar' => 'https://images.unsplash.com/photo-1518709268805-4e9042af9f23?w=900',
                'deskripsi' => 'Keraton Yogyakarta merupakan pusat sejarah dan tradisi Kesultanan Yogyakarta.'
            ],
            [
                'id' => 5,
                'nama' => 'Taman Sari',
                'kategori' => 'Budaya',
                'lokasi' => 'Kota Yogyakarta',
                'gambar' => 'https://images.unsplash.com/photo-1513415277900-a62401e19be4?w=900',
                'deskripsi' => 'Taman Sari adalah kompleks bersejarah yang dahulu digunakan sebagai taman kerajaan.'
            ],
            [
                'id' => 6,
                'nama' => 'Candi Prambanan',
                'kategori' => 'Budaya',
                'lokasi' => 'Perbatasan DIY dan Jawa Tengah',
                'gambar' => 'https://images.unsplash.com/photo-1609766857041-ed402ea8069a?w=900',
                'deskripsi' => 'Candi Prambanan merupakan kompleks candi Hindu yang terkenal dengan arsitekturnya yang megah.'
            ],
            [
                'id' => 7,
                'nama' => 'Gembira Loka Zoo',
                'kategori' => 'Rekreasi',
                'lokasi' => 'Kota Yogyakarta',
                'gambar' => 'https://images.unsplash.com/photo-1472396961693-142e6e269027?w=900',
                'deskripsi' => 'Gembira Loka Zoo merupakan kebun binatang dan tempat rekreasi yang cocok untuk keluarga.'
            ],
            [
                'id' => 8,
                'nama' => 'Merapi Park',
                'kategori' => 'Rekreasi',
                'lokasi' => 'Sleman, Yogyakarta',
                'gambar' => 'https://images.unsplash.com/photo-1473448912268-2022ce9509d8?w=900',
                'deskripsi' => 'Merapi Park merupakan destinasi rekreasi dengan berbagai miniatur landmark dan area foto.'
            ],
            [
                'id' => 9,
                'nama' => 'HeHa Sky View',
                'kategori' => 'Rekreasi',
                'lokasi' => 'Gunungkidul, Yogyakarta',
                'gambar' => 'https://images.unsplash.com/photo-1470770841072-f978cf4d019e?w=900',
                'deskripsi' => 'HeHa Sky View menawarkan area rekreasi dan pemandangan kawasan Yogyakarta dari ketinggian.'
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


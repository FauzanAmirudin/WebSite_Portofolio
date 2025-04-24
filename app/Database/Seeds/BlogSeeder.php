<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class BlogSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'judul'  => 'Apa itu ChatGPT?',
                'isi'    => 'ChatGPT adalah model kecerdasan buatan (AI) berbasis bahasa yang dikembangkan oleh OpenAI, dirancang untuk berinteraksi dengan pengguna melalui percakapan alami. Sebagai bagian dari seri GPT (*Generative Pre-trained Transformer*), ChatGPT menggunakan teknologi *deep learning* untuk memahami konteks, menjawab pertanyaan, memberikan rekomendasi, atau bahkan menghasilkan konten kreatif seperti cerita, puisi, atau kode program. Model ini dilatih dengan data teks masif dari berbagai sumber, memungkinkannya mempelajari pola bahasa, pengetahuan umum, dan kemampuan penalaran dasar. ChatGPT dapat digunakan dalam beragam situasi, mulai dari asistensi edukasi, dukungan pelanggan, hingga alat kreativitas. Namun, meski canggih, AI ini memiliki keterbatasan, seperti potensi menghasilkan informasi tidak akurat atau respons yang tidak sesuai konteks. Kehadirannya mencerminkan kemajuan dalam bidang pemrosesan bahasa alami (NLP) sekaligus memicu diskusi tentang etika dan tantangan penggunaan AI di kehidupan sehari-hari.',
                'gambar' => 'gpt.png',
            ],
            [
                'judul'  => 'Apa itu DeepSeek?',
                'isi'    => 'DeepSeek adalah sebuah perusahaan teknologi yang berfokus pada pengembangan solusi berbasis kecerdasan buatan (AI), analisis data, dan pemrosesan informasi skala besar (big data). Perusahaan ini dikenal dalam bidang pengolahan data cerdas, termasuk pencarian informasi yang mendalam (deep search), pengenalan pola, serta optimisasi algoritma untuk aplikasi bisnis, riset, atau layanan berbasis AI. DeepSeek menggabungkan teknik deep learning dan metode analitik modern untuk mengekstrak wawasan dari data kompleks, membantu organisasi dalam pengambilan keputusan berbasis data. Produk atau layanannya sering digunakan di bidang seperti keuangan, kesehatan, e-commerce, atau logistik untuk meningkatkan efisiensi dan akurasi analisis. Meski namanya mungkin mirip dengan istilah "deep search" (pencarian mendalam), DeepSeek lebih mengarah pada entitas teknologi yang mengkhususkan diri dalam integrasi AI dan analitik data. Jika yang dimaksud bukan perusahaan ini, istilah "deepsek" mungkin perlu diklarifikasi lebih lanjut, karena tidak secara luas dikenal dalam literatur teknologi.',
                'gambar' => 'gpt.png',
            ],
        ];

        $this->db->table('blog')->insertBatch($data);
    }
}
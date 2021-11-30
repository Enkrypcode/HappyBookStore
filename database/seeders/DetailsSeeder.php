<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('details')->insert([
            //FICTION(3)
            [
                'book_id'=>1,
                'author'=>'Donny Dhirgantoro',
                'publisher'=>'Grasindo',
                'year'=>2005,
                'description'=>'Lima sahabat telah menjalin persahabatan selama tujuh tahun. Mereka adalah Arial yang paling tampan, Riani sebagai satu-satunya wanita dalam kelompok itu, Zafran yang berlagak seperti seorang penyair, Ian yang paling subur badannya, dan Genta yang dianggap sebagai leader dalam kelompok itu. Kegemaran mereka adalah mengeksekusi hal-hal yang tidak mungkin dan mencoba segala hal, mulai dari kafe paling terkenal di Jakarta, sampai nonton layar tancap. Semuanya penggemar film, dari film Hollywood sampai film yang nggak Jelas—kecuali film India karena mereka punya prinsip bahwa semua persoalan di dunia atau masalah pasti ada jalan keluarnya, tetapi bukan dalam bentuk joget.' 
            ],
            [
                'book_id'=>2,
                'author'=>'Andrea Hirata',
                'publisher'=>'Bentang Pustaka',
                'year'=>2005,
                'description'=>'Cerita terjadi di desa Gantung, Belitung Timur. Dimulai ketika sekolah Muhammadiyah terancam akan dibubarkan oleh Depdikbud Sumsel jikalau tidak mencapai siswa baru sejumlah 10 anak. Ketika itu baru 9 anak yang menghadiri upacara pembukaan, akan tetapi tepat ketika Pak Harfan, sang kepala sekolah, hendak berpidato menutup sekolah, Harun dan ibunya datang untuk mendaftarkan diri di sekolah kecil itu.' 
            ],
            [
                'book_id'=>3,
                'author'=>'Andrea Hirata',
                'publisher'=>'Bentang Pustaka',
                'year'=>2007,
                'description'=>'Edensor mengambil latar di luar negeri saat tokoh-tokoh utamanya, Ikal dan Arai mendapat beasiswa dari Uni Eropa untuk kuliah S2 di Prancis. Dalam Edensor, Andrea tetap dengan ciri khasnya, menulis kisah ironi menjadi parodi dan menertawakan kesedihan dengan balutan pandangan intelegensia tentang culture shock ketika kedua tokoh utama tersebut yang berasal dari pedalaman Melayu di Pulau Belitong tiba-tiba berada di Paris.' 
            ],

            //SCIENCE(3)
            [
                'book_id'=>4,
                'author'=>'Richard Dawkins',
                'publisher'=>'Oxford University Press',
                'year'=>1976,
                'description'=>'Dawkins menggunakan istilah "gen egois" sebagai cara untuk mengekspresikan pandangan evolusi berpusat-pada-gen yang menentang pandangan yang terfokus pada organisme dan kelompok, mempopulerkan ide-ide yang dikembangkan pada 1960-an oleh WD Hamilton dan lain-lain. Dari pandangan berpusat-gen, makin terkait secara genetis dua individu, makin masuk akal (pada tingkat gen) bahwa mereka berperilaku kurang egois satu sama lain. Oleh karena itu konsep ini sangat baik untuk menjelaskan banyak bentuk altruisme. Istilah ini tidak boleh dirancukan dengan istilah gen keegoisan.' 
            ],
            [
                'book_id'=>5,
                'author'=>'Stephen Hawking, Mlodinow',
                'publisher'=>'Bantam Books',
                'year'=>2005,
                'description'=>'Buku ini adalah pemutakhiran A Brief History of Time karya Hawking tahun 1988. Di buku ini, Hawking dan Mlodinow memaparkan mekanika kuantum, teori string, teori ledakan besar, dan topik-topik lain dengan gaya penulisan yang lebih sederhana. Buku ini diperbarui dengan topik-topik baru dan membahasnya secara lebih rinci.' 
            ],
            [
                'book_id'=>6,
                'author'=>'Carl Sagan',
                'publisher'=>'Random House',
                'year'=>1994,
                'description'=>'Buku ini merupakan sekuel Cosmos: A Personal Voyage dan terinspirasi dari foto "Pale Blue Dot". Sagan memberi deskripsi mendalam tentang foto tersebut dalam buku ini. Sagan mencampurkan filosofi mengenai tempat manusia di alam semesta dan penjelasan tentang pengetahuan tentang Tata Surya yang kita ketahui saat ini. Ia juga menceritakan visi umat manusia untuk masa depan.' 
            ],

            //COMEDY(2)
            [
                'book_id'=>7,
                'author'=>'Dono',
                'publisher'=>'Gramedia Pustaka Utama',
                'year'=>2009,
                'description'=>'Bercerita tentang seorang tokoh bernama Mas Gabus yang jatuh hati pada Kirana—gadis cantik yang dikenalnya di bandara. Sangking cintanya, ia selalu memimpikan Kirana, membuat istrinya, Mbak Noni, menjadi curiga. Akibatnya Mas Gabus harus pandai-pandai menyembunyikan perselingkuhannya. Sayang, teman sekantornya secara tidak sengaja tahu perbuatannya itu.' 
            ],
            [
                'book_id'=>8,
                'author'=>'Faza Meonk',
                'publisher'=>'Elex Media Komputindo',
                'year'=>2017,
                'description'=>'Sosoknya mewakili cerita sejumlah anak muda di Indonesia. Mulai bagaimana dia lulus UN, kuliah, aktif di kampus, hingga saat sedang mencari kerja. Saat kecil mungkin kamu pernah mendengar dongeng seperti Putri Salju, Aladdin, hingga Timun Mas. Ada pula Juleha dan Profesor Yololoyo yang terperangkap di dunia dongeng. Dunia dongeng yang nyaman menjadi kusut berantakan.' 
            ],

            // HORROR(2)
            // [
            //     'book_id'=>9,
            //     'author'=>'Bram Stoker',
            //     'publisher'=>'Archibald Constable and Company (UK)',
            //     'year'=>1897,
            //     'description'=>'Dracula adalah salah satu karya sastra Inggris yang paling terkenal . Banyak karakter buku telah memasuki budaya populer sebagai versi pola dasar karakter mereka; misalnya, Count Dracula sebagai vampir klasik, dan Abraham Van Helsing sebagai pemburu vampir ikonik . Novel tersebut, yang berada dalam domain publik , telah diadaptasi untuk film lebih dari 30 kali, dan karakternya telah tampil banyak kali di hampir semua media.' 
            // ],
            // [
            //     'book_id'=>10,
            //     'author'=>'Mark Z. Danielewski',
            //     'publisher'=>'Pantheon, Random House',
            //     'year'=>2000,
            //     'description'=>'Plotnya berpusat pada film dokumenter (mungkin fiksi) tentang sebuah keluarga yang rumahnya sangat besar di dalam daripada di luar. Format dan struktur House of Leaves tidak konvensional, dengan tata letak dan gaya halaman yang tidak biasa, menjadikannya contoh utama sastra ergodik. Ini berisi banyak catatan kaki, banyak di antaranya berisi catatan kaki itu sendiri, termasuk referensi ke buku fiksi, film, atau artikel. Sebaliknya, beberapa halaman hanya berisi beberapa kata atau baris teks, disusun dengan cara yang aneh untuk mencerminkan peristiwa dalam cerita, sering kali menimbulkan agorafobia dan klaustrofobia.' 
            // ],

            //COMPUTER(3)
            [
                'book_id'=>9,
                'author'=>'Brian Kernighan',
                'publisher'=>'Aula Prentice',
                'year'=>1978,
                'description'=>'Buku tersebut memperkenalkan program "hello, world! ", yang hanya mencetak teks "hello, world", sebagai ilustrasi program C yang bekerja minimal. Sejak itu, banyak teks telah mengikuti konvensi itu untuk memperkenalkan bahasa pemrograman. Buku ini berisikan tutorial bahasa pemrograman bahasa C.' 
            ],
            [
                'book_id'=>10,
                'author'=>'Donald Knuth',
                'publisher'=>'Addison-Wesley',
                'year'=>1968,
                'description'=>'The Art of Computer Programming (TAOCP) adalah monografi komprehensif yang ditulis oleh ilmuwan komputer Donald Knuth yang mencakup berbagai macam algoritma pemrograman dan analisisnya. Semua contoh dalam buku menggunakan bahasa yang disebut " MIX assembly language ", yang berjalan pada komputer MIX hipotetis. Saat ini, komputer MIX sedang digantikan oleh komputer MMIX , yang merupakan versi RISC . Perangkat lunak seperti GNU MDK ada untuk menyediakan emulasi arsitektur MIX. Knuth menganggap penggunaan assembly language diperlukan untuk menilai kecepatan dan penggunaan memori dari algoritma.' 
            ],
            [
                'book_id'=>11,
                'author'=>'Nick Rozanski, Eóin Woods',
                'publisher'=>'Pearson Education',
                'year'=>2005,
                'description'=>'Software Systems Architecture adalah panduan berorientasi praktisi untuk merancang dan mengimplementasikan arsitektur yang efektif untuk sistem informasi. Ini adalah pengantar yang mudah diakses untuk arsitektur perangkat lunak dan buku pegangan yang sangat berharga tentang praktik terbaik yang sudah mapan. Ini menunjukkan mengapa peran arsitek sangat penting untuk setiap proyek pengembangan sistem informasi yang sukses, dan, dengan menghadirkan serangkaian sudut pandang dan perspektif arsitektur, memberikan arahan khusus untuk meningkatkan pendekatan Anda dan organisasi Anda terhadap arsitektur sistem perangkat lunak.' 
            ]
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produk')->insert(array(
            [
                
                'gambar'=>'assets/img/panti_bg.png',
                'nama'=>'risoles',
                'harga'=>5000 
                
            ],
            [
                'gambar'=>'assets/img/about-bg.png',
                'nama'=>'risoles',
                'harga'=>5000 
                
            ]
            ));
            }
    }


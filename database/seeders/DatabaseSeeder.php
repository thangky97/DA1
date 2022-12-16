<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // $arrData = [];

        // for($i =0; $i<10;$i++){
        //     $arrData[] = [
        //         'name' => 'Thang',
        //         'email' => 'thangtvph232@gmail.com',
        //         'password' => '123456',
        //         'birthday' => '2002-07-09',
        //         'address' => 'Phúc Diễn - Bắc Từ Liêm - Hà Nội',
        //         'phone' => '093165262',
        //         'status' => 1,
        //         'created_at' => date('Y-m-d H:i:s'),
        //         'updated_at' => date('Y-m-d H:i:s'),
        //     ];
        // }

        // DB::table('users')->insert(
        //     $arrData
        // );

        // $arrData = [];

        // for($i =0; $i<10;$i++){
        //     $arrData[] = [
        //         'name' => 'Chung cư',
        //         'status' => 1,
        //         'created_at' => date('Y-m-d H:i:s'),
        //         'updated_at' => date('Y-m-d H:i:s'),
        //     ];
        // }

        // DB::table('cate_new')->insert(
        //     $arrData
        // );

        // $arrData = [];

        // for($i =0; $i<10;$i++){
        //     $arrData[] = [
        //         'name' => 'Căn hộ, chung cư',
        //         'status' => 1,
        //         'created_at' => date('Y-m-d H:i:s'),
        //         'updated_at' => date('Y-m-d H:i:s'),
        //     ];
        // }

        // DB::table('type_bds')->insert(
        //     $arrData
        // );

        // $arrData = [];

        // for($i =0; $i<10;$i++){
        //     $arrData[] = [
        //         'title' => 'Giá chung cư đang tăng cao',
        //         'thumbnail_url' => '',
        //         'description' => 'Giá chung cư biến động',
        //         'cate_new_id' => $i+1,
        //         'status' => 1,
        //         'created_at' => date('Y-m-d H:i:s'),
        //         'updated_at' => date('Y-m-d H:i:s'),
        //     ];
        // }

        // DB::table('news')->insert(
        //     $arrData
        // );

        // $arrData = [];

        // for($i =0; $i<10;$i++){
        //     $arrData[] = [
        //         'name' => 'Chung cư Vinhomes',
        //         'address' => '34 Đặng Văn Ngữ - Nam Từ Liêm - Hà Nội',
        //         'price' => '1100000000',
        //         'images' => '',
        //         'so_tang' => 13,
        //         'so_phong' => 2,
        //         'so_tollet' => 2,
        //         'tinh_trang_bds' => 'Đã bàn giao',
        //         'huong_nha' => 'Đông Nam',
        //         'spread' => '230',
        //         'title' => 'Chung cư Vinhomes',
        //         'content' => 'Chung cư',
        //         'type_bds_id' => $i+1,
        //         'status' => 1,
        //         'created_at' => date('Y-m-d H:i:s'),
        //         'updated_at' => date('Y-m-d H:i:s'),
        //     ];
        // }

        // DB::table('bds')->insert(
        //     $arrData
        // );

        // $arrData = [];

        // for($i =0; $i<10;$i++){
        //     $arrData[] = [
        //         'banner_img' => '',
        //         'status' => 1,
        //         'created_at' => date('Y-m-d H:i:s'),
        //         'updated_at' => date('Y-m-d H:i:s'),
        //     ];
        // }

        // DB::table('banner')->insert(
        //     $arrData
        // );

        $arrData = [];

        for($i =0; $i<10;$i++){
            $arrData[] = [
                'name' => 'Thắng',
                'content' => 'Cần hộ trợ',
                'time' => '2022-12-09',
                'phone' => '0931662687',
                'bds_id' => $i+1,
                'nv_id' => $i+1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ];
        }

        DB::table('tu_van')->insert(
            $arrData
        );
    }
}

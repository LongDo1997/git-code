<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('categories')->insert([
        //     'id'=>'23',
        //     'name' => 'Banner',
        //     'images' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTEpOB50Gf-839DMNoHRlYYBAWP0TN73RHsGg&usqp=CAU',
        //     'type' => '1',
        //     'index' => '2',
        //     'status'=>'1',
        //     'meta_keyword' => 'Banner' ,
        //     'meta_description' => '<p>Banner<br></p>',
        // ],[
        //     'id'=>'24',
        //     'name' => 'Dịch vụ',
        //     'images' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTEpOB50Gf-839DMNoHRlYYBAWP0TN73RHsGg&usqp=CAU',
        //     'type' => '1',
        //     'index' => '2',
        //     'status'=>'1',
        //     'meta_keyword' => 'Dịch vụ của chúng tôi' ,
        //     'meta_description' => '<p><strong>Ch&uacute;ng t&ocirc;i cung cấp đa dạng c&aacute;c dịch vụ về IT</strong></p>',
        // ],[
        //     'id'=>'25',
        //     'name' => 'Blog',
        //     'images' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTEpOB50Gf-839DMNoHRlYYBAWP0TN73RHsGg&usqp=CAU',
        //     'type' => '1',
        //     'index' => '2',
        //     'status'=>'1',
        //     'meta_keyword' => 'Blog' ,
        //     'meta_description' => '<h2>C&aacute;c Blog mới nhất</h2>',
        // ],[
        //     'id'=>'26',
        //     'name' => 'Giới thiệu',
        //     'images' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTEpOB50Gf-839DMNoHRlYYBAWP0TN73RHsGg&usqp=CAU',
        //     'type' => '1',
        //     'index' => '2',
        //     'status'=>'1',
        //     'meta_keyword' => 'Giới thiệu' ,
        //     'meta_description' => '<p><strong>Giới thiệu về ch&uacute;ng t&ocirc;i</strong></p>',
        // ],[
        //     'id'=>'27',
        //     'name' => 'Sản phẩm',
        //     'images' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTEpOB50Gf-839DMNoHRlYYBAWP0TN73RHsGg&usqp=CAU',
        //     'type' => '1',
        //     'index' => '2',
        //     'status'=>'1',
        //     'meta_keyword' => 'Sản phẩm của chúng tôi' ,
        //     'meta_description' => '<h2>Giới thiệu một số dự &aacute;n v&agrave; c&ocirc;ng việc</h2>',
        // ],[
        //     'id'=>'28',
        //     'name' => 'Khách hàng',
        //     'images' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTEpOB50Gf-839DMNoHRlYYBAWP0TN73RHsGg&usqp=CAU',
        //     'type' => '1',
        //     'index' => '2',
        //     'status'=>'1',
        //     'meta_keyword' => 'Khách hàng' ,
        //     'meta_description' => '<p>Phản hồi từ phía khách hàng<br></p>',
        // ],[
        //     'id'=>'29',
        //     'name' => 'Đội ngũ',
        //     'images' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTEpOB50Gf-839DMNoHRlYYBAWP0TN73RHsGg&usqp=CAU',
        //     'type' => '1',
        //     'index' => '2',
        //     'status'=>'1',
        //     'meta_keyword' => 'Đội ngũ' ,
        //     'meta_description' => '<h2>Đội ngũ ti&ecirc;n phong</h2>',
        // ],[
        //     'id'=>'30',
        //     'name' => 'Giới thiệu dịch vụ',
        //     'images' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTEpOB50Gf-839DMNoHRlYYBAWP0TN73RHsGg&usqp=CAU',
        //     'type' => '2',
        //     'index' => '2',
        //     'status'=>'1',
        //     'meta_keyword' => 'Giới thiệu dịch vụ' ,
        //     'meta_description' => '<p><strong>Dịch vụ của ch&uacute;ng t&ocirc;i l&agrave; sự hỗ trợ cho c&ocirc;ng việc của bạn</strong></p>',
        // ],[
        //     'id'=>'31',
        //     'name' => 'Thống kê',
        //     'images' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTEpOB50Gf-839DMNoHRlYYBAWP0TN73RHsGg&usqp=CAU',
        //     'type' => '2',
        //     'index' => '2',
        //     'status'=>'1',
        //     'meta_keyword' => 'Thống kê' ,
        //     'meta_description' => '<h2>Hoạt động của ch&uacute;ng t&ocirc;i</h2>',
        // ],[
        //     'id'=>'32',
        //     'name' => 'Thương hiệu',
        //     'images' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTEpOB50Gf-839DMNoHRlYYBAWP0TN73RHsGg&usqp=CAU',
        //     'type' => '2',
        //     'index' => '2',
        //     'status'=>'1',
        //     'meta_keyword' => 'Thương hiệu' ,
        //     'meta_description' => '<p>Thương hiệu</p>',
        // ]);
    }
}
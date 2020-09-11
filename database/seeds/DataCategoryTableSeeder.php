<?php

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class DataCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = [
            ['name' => 'Huyền Huyễn' , 'keyword' => 'Huyền Huyễn' , 'description' => 'Huyền Huyễn'],
            ['name' => 'Kiếm Hiệp' , 'keyword' => 'Kiếm Hiệp' , 'description' => 'Kiếm Hiệp'],
            ['name' => 'Lịch Sử' , 'keyword' => 'Lịch Sử' , 'description' => 'Lịch Sử'],
            ['name' => 'Ngôn Tình' , 'keyword' => 'Ngôn Tình' , 'description' => 'Ngôn Tình'],
            ['name' => 'Sắc Hiệp' , 'keyword' => 'Sắc Hiệp' , 'description' => 'Sắc Hiệp'],
            ['name' => 'Tiên Hiệp' , 'keyword' => 'Tiên Hiệp' , 'description' => 'Tiên Hiệp'],
            ['name' => 'Dị Giới' , 'keyword' => 'Dị Giới' , 'description' => 'Dị Giới'],
            ['name' => 'Đô Thị' , 'keyword' => 'Đô Thị' , 'description' => 'Đô Thị'],
            ['name' => 'Huyền Ảo' , 'keyword' => 'Huyền Ảo' , 'description' => 'Huyền Ảo'],
            ['name' => 'Trinh Thám' , 'keyword' => 'Trinh Thám' , 'description' => 'Trinh Thám'],
            ['name' => 'Cổ Đại' , 'keyword' => 'Cổ Đại' , 'description' => 'Cổ Đại'],
            ['name' => 'Hệ Thống' , 'keyword' => 'Hệ Thống' , 'description' => 'Hệ Thống'],
            ['name' => 'Khoa Huyễn' , 'keyword' => 'Khoa Huyễn' , 'description' => 'Khoa Huyễn'],
            ['name' => 'Quân Sự' , 'keyword' => 'Quân Sự' , 'description' => 'Quân Sự'],
            ['name' => 'Võng Du' , 'keyword' => 'Võng Du' , 'description' => 'Võng Du'],
            ['name' => 'Xuyên Không' , 'keyword' => 'Xuyên Không' , 'description' => 'Xuyên Không'],
            ['name' => 'Cổ Tiên Hiệp' , 'keyword' => 'Cổ Tiên Hiệp' , 'description' => 'Cổ Tiên Hiệp'],
            ['name' => 'Đam Mỹ' , 'keyword' => 'Đam Mỹ' , 'description' => 'Đam Mỹ'],
            ['name' => 'Huyền Bí' , 'keyword' => 'Huyền Bí' , 'description' => 'Huyền Bí'],
            ['name' => 'Kỳ Huyễn' , 'keyword' => 'Kỳ Huyễn' , 'description' => 'Kỳ Huyễn'],
            ['name' => 'Linh Dị' , 'keyword' => 'Linh Dị' , 'description' => 'Linh Dị'],
            ['name' => 'Ma Pháp' , 'keyword' => 'Ma Pháp' , 'description' => 'Ma Pháp'],
            ['name' => 'Mạt Thế' , 'keyword' => 'Mạt Thế' , 'description' => 'Mạt Thế'],
            ['name' => 'Quan Trường' , 'keyword' => 'Quan Trường' , 'description' => 'Quan Trường'],
            ['name' => 'Thể Thao' , 'keyword' => 'Thể Thao' , 'description' => 'Thể Thao'],
            ['name' => 'Tu Chân' , 'keyword' => 'Tu Chân' , 'description' => 'Tu Chân'],
            ['name' => 'Hiện Đại' , 'keyword' => 'Hiện Đại' , 'description' => 'Hiện Đại'],
            ['name' => 'Bách Hợp' , 'keyword' => 'Bách Hợp' , 'description' => 'Bách Hợp'],
            ['name' => 'Tiểu Thuyết' , 'keyword' => 'Tiểu Thuyết' , 'description' => 'Tiểu Thuyết'],
            ['name' => 'Truyện Ma' , 'keyword' => 'Truyện Ma' , 'description' => 'Truyện Ma'],
            ['name' => 'Truyện Teen' , 'keyword' => 'Truyện Teen' , 'description' => 'Truyện Teen'],
            ['name' => 'Võ Hiệp' , 'keyword' => 'Võ Hiệp' , 'description' => 'Võ Hiệp'],
            ['name' => 'Võ Thuật' , 'keyword' => 'Võ Thuật' , 'description' => 'Võ Thuật'],
            ['name' => 'Cung Đấu' , 'keyword' => 'Cung Đấu' , 'description' => 'Cung Đấu'],
            ['name' => 'Hài Hước' , 'keyword' => 'Hài Hước' , 'description' => 'Hài Hước'],
            ['name' => 'Trọng Sinh' , 'keyword' => 'Trọng Sinh' , 'description' => 'Trọng Sinh'],
            ['name' => 'Sủng' , 'keyword' => 'Sủng' , 'description' => 'Sủng'],
            ['name' => 'Truyện Tình Cảm' , 'keyword' => 'Truyện Tình Cảm' , 'description' => 'Truyện Tình Cảm'],
            ['name' => 'Văn Học Việt Nam' , 'keyword' => 'Văn Học Việt Nam' , 'description' => 'Văn Học Việt Nam'],
            ['name' => 'Truyện Tây Phương' , 'keyword' => 'Truyện Tây Phương' , 'description' => 'Truyện Tây Phương'],
        ];

        Category::insert($category);
    }
}

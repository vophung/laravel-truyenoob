<?php

use App\Models\Author;
use Illuminate\Database\Seeder;

class DataAuthorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $author = [
            ['name' => 'An Nhân Đạo Tiên ' ,'keyword' => 'An Nhân Đạo Tiên ' , 'description' => 'An Nhân Đạo Tiên '],
            ['name' => 'Nam Cực Liệt Nhật' ,'keyword' => 'Nam Cực Liệt Nhật' , 'description' => 'Nam Cực Liệt Nhật'],
            ['name' => 'Mai Can Thái Thiếu Bính' ,'keyword' => 'Mai Can Thái Thiếu Bính' , 'description' => 'Mai Can Thái Thiếu Bính'],
            ['name' => 'Quẫn Quẫn Hữu Yêu' ,'keyword' => 'Quẫn Quẫn Hữu Yêu' , 'description' => 'Quẫn Quẫn Hữu Yêu'],
            ['name' => 'Thanh Thanh Thùy Tiếu' ,'keyword' => 'Thanh Thanh Thùy Tiếu' , 'description' => 'Thanh Thanh Thùy Tiếu'],
            ['name' => 'Thập Nguyệt Sơ' ,'keyword' => 'Thập Nguyệt Sơ' , 'description' => 'Thập Nguyệt Sơ'],
            ['name' => 'Mặc Linh' ,'keyword' => 'Mặc Linh' , 'description' => 'Mặc Linh'],
            ['name' => 'Lê Thiên' ,'keyword' => 'Lê Thiên' , 'description' => 'Lê Thiên'],
            ['name' => 'Hạ Nhiễm Tuyết' ,'keyword' => 'Hạ Nhiễm Tuyết' , 'description' => 'Hạ Nhiễm Tuyết'],
            ['name' => 'Hạ Ngôn Băng' ,'keyword' => 'Hạ Ngôn Băng' , 'description' => 'Hạ Ngôn Băng'],
            ['name' => 'Lão Bà Của Ka Là Hoa Hậu Giảng Đường' ,'keyword' => 'Lão Bà Của Ka Là Hoa Hậu Giảng Đường' , 'description' => 'Lão Bà Của Ka Là Hoa Hậu Giảng Đường'],
            ['name' => 'Xấu Tới Linh Hồn' ,'keyword' => 'Xấu Tới Linh Hồn' , 'description' => 'Xấu Tới Linh Hồn'],
            ['name' => 'Thiện Lương Mật Phong' ,'keyword' => 'Thiện Lương Mật Phong' , 'description' => 'Thiện Lương Mật Phong'],
            ['name' => 'Nguyệt Hạ Đích Cô Lang' ,'keyword' => 'Nguyệt Hạ Đích Cô Lang' , 'description' => 'Nguyệt Hạ Đích Cô Lang'],
            ['name' => 'Mặc Mộng Trần' ,'keyword' => 'Mặc Mộng Trần' , 'description' => 'Mặc Mộng Trần'],
            ['name' => 'Đả Nhãn' ,'keyword' => 'Đả Nhãn' , 'description' => 'Đả Nhãn'],
            ['name' => 'Thiên Tàm Thổ Đậu' ,'keyword' => 'Thiên Tàm Thổ Đậu' , 'description' => 'Thiên Tàm Thổ Đậu'],
            ['name' => 'Yếm Bút Tiêu Sinh' ,'keyword' => 'Yếm Bút Tiêu Sinh' , 'description' => 'Yếm Bút Tiêu Sinh'],
            ['name' => 'Vong Ngữ' ,'keyword' => 'Vong Ngữ' , 'description' => 'Vong Ngữ'],
            ['name' => 'Mạc Mặc' ,'keyword' => 'Mạc Mặc' , 'description' => 'Mạc Mặc'],
            ['name' => 'Đạm Anh' ,'keyword' => 'Đạm Anh' , 'description' => 'Đạm Anh'],
            ['name' => 'Cô Đơn Địa Phi' ,'keyword' => 'Cô Đơn Địa Phi' , 'description' => 'Cô Đơn Địa Phi'],
            ['name' => 'Ta Là Lão Ngũ' ,'keyword' => 'Ta Là Lão Ngũ' , 'description' => 'Ta Là Lão Ngũ'],
            ['name' => 'Dạ Thải Hoa' ,'keyword' => 'Dạ Thải Hoa' , 'description' => 'Dạ Thải Hoa'],
            ['name' => 'Đông Phương Ngọc Như Ý' ,'keyword' => 'Đông Phương Ngọc Như Ý' , 'description' => 'Đông Phương Ngọc Như Ý'],
            ['name' => 'Cần Thái' ,'keyword' => 'Cần Thái' , 'description' => 'Cần Thái'],
            ['name' => 'Hách Hách Nhất Tiếu' ,'keyword' => 'Hách Hách Nhất Tiếu' , 'description' => 'Hách Hách Nhất Tiếu'],
            ['name' => 'Hắc Dạ Di Thiên' ,'keyword' => 'Hắc Dạ Di Thiên' , 'description' => 'Hắc Dạ Di Thiên'],
            ['name' => 'Quỷ Già Núi Đen' ,'keyword' => 'Quỷ Già Núi Đen' , 'description' => 'Quỷ Già Núi Đen'],
            ['name' => 'Thác Bạt Cẩu Đản' ,'keyword' => 'Thác Bạt Cẩu Đản' , 'description' => 'Thác Bạt Cẩu Đản'],
            ['name' => 'Thuần Khiết Tích Tiểu Long' ,'keyword' => 'Thuần Khiết Tích Tiểu Long' , 'description' => 'Thuần Khiết Tích Tiểu Long'],
            ['name' => 'Hương Vị Mãnh Trùng' ,'keyword' => 'Hương Vị Mãnh Trùng' , 'description' => 'Hương Vị Mãnh Trùng'],
            ['name' => 'Tửu Trì Túy' ,'keyword' => 'Tửu Trì Túy' , 'description' => 'Tửu Trì Túy'],
            ['name' => 'Tam Bách Cân Đích Vi Tiếu' ,'keyword' => 'Tam Bách Cân Đích Vi Tiếu' , 'description' => 'Tam Bách Cân Đích Vi Tiếu'],
            ['name' => 'Lão Ưng Cật Tiểu Kê' ,'keyword' => 'Lão Ưng Cật Tiểu Kê' , 'description' => 'Lão Ưng Cật Tiểu Kê'],
            ['name' => 'Hỏa Trung Vật' ,'keyword' => 'Hỏa Trung Vật' , 'description' => 'Hỏa Trung Vật'],
            ['name' => 'Vô Địch Tái Lãng' ,'keyword' => 'Vô Địch Tái Lãng' , 'description' => 'Vô Địch Tái Lãng'],
            ['name' => 'Lý Hồng Thiên' ,'keyword' => 'Lý Hồng Thiên' , 'description' => 'Lý Hồng Thiên'],
            ['name' => 'Hiệp Xả Đản' ,'keyword' => 'Hiệp Xả Đản' , 'description' => 'Hiệp Xả Đản'],
            ['name' => 'Huyễn Mộng Liệp Nhân' ,'keyword' => 'Huyễn Mộng Liệp Nhân' , 'description' => 'Huyễn Mộng Liệp Nhân'],
            ['name' => 'Thần Đông' ,'keyword' => 'Thần Đông' , 'description' => 'Thần Đông'],
            ['name' => 'Lãnh Nguyệt Mộng Thương' ,'keyword' => 'Lãnh Nguyệt Mộng Thương' , 'description' => 'Lãnh Nguyệt Mộng Thương'],
            ['name' => 'Vấn Đỉnh Thiên Bảng' ,'keyword' => 'Vấn Đỉnh Thiên Bảng' , 'description' => 'Vấn Đỉnh Thiên Bảng'],
            ['name' => 'Giang Hồ Tái Kiến' ,'keyword' => 'Giang Hồ Tái Kiến' , 'description' => 'Giang Hồ Tái Kiến'],
            ['name' => 'Ngô Gia Tiểu Hùng Miêu' ,'keyword' => 'Ngô Gia Tiểu Hùng Miêu' , 'description' => 'Ngô Gia Tiểu Hùng Miêu'],
            ['name' => 'Quỵ Cầu Thiên Bảng' ,'keyword' => 'Quỵ Cầu Thiên Bảng' , 'description' => 'Quỵ Cầu Thiên Bảng'],
            ['name' => 'Hoa Đô Đại Thiếu' ,'keyword' => 'Hoa Đô Đại Thiếu' , 'description' => 'Hoa Đô Đại Thiếu'],
            ['name' => 'Mộ Vũ Thần Thiên' ,'keyword' => 'Mộ Vũ Thần Thiên' , 'description' => 'Mộ Vũ Thần Thiên'],
            ['name' => 'Phao Phao Phao' ,'keyword' => 'Phao Phao Phao' , 'description' => 'Phao Phao Phao'],
            ['name' => 'Diêu Vọng Nam Sơn' ,'keyword' => 'Diêu Vọng Nam Sơn' , 'description' => 'Diêu Vọng Nam Sơn'],
            ['name' => 'Tinh Trang Kích Quang Điêu Khắc Ky' ,'keyword' => 'Tinh Trang Kích Quang Điêu Khắc Ky' , 'description' => 'Tinh Trang Kích Quang Điêu Khắc Ky'],
            ['name' => 'Nhĩ Căn' ,'keyword' => 'Nhĩ Căn' , 'description' => 'Nhĩ Căn'],
            ['name' => 'Vũ Phong' ,'keyword' => 'Vũ Phong' , 'description' => 'Vũ Phong'],
        ];

        Author::insert($author);
    }
}

<?php

use App\Models\Story;
use App\Models\Author;
use App\Models\Category;
use Illuminate\Database\Seeder;

class StoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category1 = Category::where('name','Ngôn Tình')->first();
        $category2 = Category::where('name','Huyền Huyễn')->first();
        $category3 = Category::where('name','Dị Giới')->first();
        $category4 = Category::where('name','Xuyên Không')->first();
        $category5 = Category::where('name','Hài Hước')->first();
        $category6 = Category::where('name','Hiện Đại')->first();
        $category7 = Category::where('name','Trọng Sinh')->first();
        $category8 = Category::where('name','Tiên Hiệp')->first();
        $category9 = Category::where('name','Kiếm Hiệp')->first();
        $category10 = Category::where('name','Cổ Đại')->first();



        $story1 = Story::create([
            'name' => 'CHỌC TỨC VỢ YÊU - MUA MỘT TẶNG MỘT',
            'content' => '<p>Đ&atilde; 27 tuổi nhưng đại thiếu gia Lục thị lại chẳng hề rung động v&igrave; bất kỳ một c&ocirc; g&aacute;i n&agrave;o n&ecirc;n cha mẹ c&ugrave;ng em trai đ&atilde; chuốc say anh rồi đưa l&ecirc;n giường một c&ocirc; g&aacute;i xa lạ.<br />
            <br />
            5 năm sau, tiểu thiếu gia&nbsp;Lục K&igrave;nh Vũ&nbsp;v&igrave; kh&ocirc;ng c&oacute; mẹ v&agrave; c&uacute; shock qu&aacute; khứ n&ecirc;n đ&atilde; rơi v&agrave;o trầm cảm.<br />
            <br />
            Một người cha &quot;chưa từng c&oacute; cảm gi&aacute;c rung động trước bất kỳ ai&quot; v&agrave; một thằng b&eacute; con &quot;kh&ocirc;ng th&iacute;ch tiếp x&uacute;c với bất kỳ ai&quot; đ&atilde; trở n&ecirc;n &quot;lầy lội&quot; hơn bao giờ hết khi gặp được Ninh Tịch. Cả hai cha con đều vừa gặp đ&atilde; y&ecirc;u người phụ nữ n&agrave;y, một người mong muốn chiếm hữu, một người v&ocirc; c&ugrave;ng ỷ lại, cuối c&ugrave;ng tạo ra những t&igrave;nh huống dở kh&oacute;c dở cười cho độc giả.</p>',
            'source' => 'truyenfull.vn',
            'status' => '1',
            'image'=> 'choc-tuc-vo-yeu-mua-mot-tang-mot-150520.jpg',
            'keyword' => 'CHỌC TỨC VỢ YÊU',
            'description' => '<p><strong>T&ecirc;n kh&aacute;c:&nbsp;</strong>Cho em mu&ocirc;n trượng h&agrave;o quang,&nbsp;Qu&acirc;n tử b&aacute;o &acirc;n<br />
            <strong>Thể loại:&nbsp;</strong>Ng&ocirc;n t&igrave;nh, hiện đại</p>',
            'user_id' => '1'
        ]);

        $story2 = Story::create([
            'name' => 'CÔ VỢ NGỌT NGÀO CÓ CHÚT BẤT LƯƠNG (VỢ MỚI BẤT LƯƠNG CÓ CHÚT NGỌT)',
            'content' => '<p>&quot;Khẩu vị của người n&agrave;y rốt cuộc ra sao a! C&aacute;i n&agrave;y cũng bỏ được v&agrave;o miệng &agrave;?&quot;<br />
            <br />
            Sau khi c&ocirc; tỉnh dậy, nh&igrave;n v&agrave;o trong gương thấy ch&iacute;nh m&igrave;nh đầu xăm mặt giống như quỷ, cảm gi&aacute;c chỉ nh&igrave;n th&ecirc;m một gi&acirc;y cũng hỏng đ&ocirc;i mắt.<br />
            <br />
            Trước khi trọng sinh, Cố Việt Trạch ch&iacute;nh l&agrave; người m&agrave; c&ocirc; d&ugrave;ng cả tấm l&ograve;ng để y&ecirc;u nhưng sau đ&oacute; cũng l&agrave; người m&agrave; c&ocirc; hận thấu xương.<br />
            <br />
            Đời trước c&ocirc; ch&iacute;nh l&agrave; kiểu phụ nữ n&atilde;o t&agrave;n n&ecirc;n mới kh&ocirc;ng muốn l&acirc;y một &ocirc;ng x&atilde; tuyệt sắc, lại bị đ&ocirc;i tiện nam nữ h&atilde;m hại, bị người bạn th&acirc;n nhất tẩy n&atilde;o, kết cục cuối c&ugrave;ng ch&iacute;nh l&agrave; kh&ocirc;ng c&ograve;n người n&agrave;o muốn ở gần c&ocirc;.<br />
            <br />
            Đời n&agrave;y mặc cho c&aacute;c ngươi tr&acirc;u b&ograve; rắn rết trăm phương ngh&igrave;n kế, muốn c&ocirc; ly dị, nhường đi ng&ocirc;i vị phu nh&acirc;n. Ngượng ng&ugrave;ng qu&aacute; ~~, chỉ số th&ocirc;ng minh của bản tiểu thư đ&atilde; l&ecirc;n d&acirc;y rồi nh&eacute;!</p>',
            'source' => 'truyenfull.vn',
            'status' => '1',
            'image'=> 'co-vo-ngot-ngao-co-chut-bat-luong-vo-moi-bat-luong-co-chut-ngot.jpg  ',
            'keyword' => 'CÔ VỢ NGỌT NGÀO CÓ CHÚT BẤT LƯƠNG',
            'description' => '<p><strong>T&ecirc;n kh&aacute;c:&nbsp;</strong>C&ocirc; Vợ Bất Lương C&oacute; Ch&uacute;t Ngọt Ng&agrave;o</p>',
            'user_id' => '1'
        ]);

        $story3 = Story::create([
            'name' => 'BOSS HUNG DỮ - ÔNG XÃ KẾT HÔN ĐI',
            'content' => '<p>Sau một đ&ecirc;m k&iacute;ch t&igrave;nh, c&ocirc; đ&atilde; th&agrave;nh c&ocirc;ng khi tr&egrave;o l&ecirc;n giường của Nhạc Th&iacute;nh Phong, kim cương l&atilde;o ngũ nổi tiếng to&agrave;n quốc.<br />
            <br />
            C&ocirc; đ&atilde; trả được th&ugrave; c&ograve;n anh sau một đ&ecirc;m lại lu&ocirc;n nhớ đến c&ocirc;.<br />
            <br />
            Ba năm sau, khi gặp c&ocirc; trong thang m&aacute;y, anh đ&atilde; n&oacute;i:&quot; Nếu ngủ với t&ocirc;i một đ&ecirc;m, vai diễn xxx sẽ thuộc về c&ocirc;&quot;<br />
            <br />
            &quot; Ngủ với t&ocirc;i 2 đ&ecirc;m t&ocirc;i sẽ gi&uacute;p c&ocirc; giải quyết được đ&aacute;m cặn b&atilde; kia &quot;...&quot; Ngủ với t&ocirc;i &quot;...&quot; Nhạc Th&iacute;nh Phong &quot;Anh hết tr&ograve; rồi hả?&quot;</p>',
            'source' => 'truyenfull.vn',
            'status' => '1',
            'image'=> 'boss-hung-du-ong-xa-ket-hon-di-270720.jpg',
            'keyword' => 'BOSS HUNG DỮ - ÔNG XÃ KẾT HÔN ĐI',
            'description' => '<p>M&ocirc; Tả ngắn</p>',
            'user_id' => '1'
        ]);


        $story5 = Story::create([
            'name' => 'GIÓ ẤM KHÔNG BẰNG ANH THÂM TÌNH',
            'content' => '<p>Bị đầu độc m&agrave; qua đời, h&igrave;nh ảnh cuối c&ugrave;ng m&agrave; Qu&yacute; No&atilde;n nh&igrave;n thấy ch&iacute;nh l&agrave; b&oacute;ng một người đ&agrave;n &ocirc;ng cao lớn bước tới b&ecirc;n cửa ph&ograve;ng giam, đ&oacute; kh&ocirc;ng phải ai xa lạ m&agrave; ch&iacute;nh l&agrave; Mặc Cảnh Th&acirc;m - người chồng m&agrave; mười năm trước c&ocirc; d&ugrave;ng việc tự tử để buộc hắn ly h&ocirc;n.<br />
            <br />
            Mở mắt tỉnh lại, Qu&yacute; No&atilde;n bất ngờ ph&aacute;t hiện m&igrave;nh đ&atilde; sống lại ở thời điểm mười năm về trước, đ&oacute; l&agrave; khi c&ocirc; c&ograve;n l&agrave; b&agrave; Mặc - người phụ nữ xinh đẹp, ki&ecirc;u ngạo v&agrave; c&oacute; c&aacute; t&iacute;nh nhất Hải Th&agrave;nh, khi ấy c&ocirc; rất coi thường người kh&aacute;c v&agrave; đặc biệt kh&ocirc;ng th&iacute;ch sự li&ecirc;n h&ocirc;n giữa hai họ Mặc - Qu&yacute;.<br />
            <br />
            Trong qu&aacute; khứ, c&ocirc; đ&atilde; tự cắt cổ tay để &eacute;p Mặc Cảnh Th&acirc;m ly dị, &eacute;p anh phải thề kh&ocirc;ng được xuất hiện trước mặt c&ocirc;, để rồi sau đ&oacute;, nh&agrave; họ Qu&yacute; sụp đổ, c&ocirc; lang thang phi&ecirc;u bạt, bị bọn bu&ocirc;n người bắt đi, bị vu oan rồi chết trong nh&agrave; giam, c&ograve;n Mặc Cảnh Th&acirc;m trở th&agrave;nh người đứng đầu Tập đo&agrave;n Shine, giữ đ&uacute;ng lời hứa, mười năm kh&ocirc;ng một lần quay lại Hải Th&agrave;nh.<br />
            <br />
            Vận mệnh cho Qu&yacute; No&atilde;n cơ hội được sửa chữa sai lầm, bởi vậy, c&ocirc; kh&ocirc;ng thể bỏ lỡ. C&ocirc; ra sức n&iacute;u giữ cuộc h&ocirc;n nh&acirc;n đ&atilde; từng bị ch&iacute;nh m&igrave;nh đẩy đến bờ vực đổ vỡ, c&ocirc; t&igrave;m c&aacute;ch ki&ecirc;n cường, độc lập, trả th&ugrave; những ai từng muốn hại c&ocirc; v&agrave; nh&agrave; họ Qu&yacute;. Đối với Mặc Cảnh Th&acirc;m, c&ocirc; lại c&agrave;ng tr&acirc;n trọng, bởi khi tĩnh t&acirc;m nh&igrave;n lại, c&ocirc; mới nhận ra Mặc Cảnh Th&acirc;m ch&iacute;nh l&agrave; người đ&agrave;n &ocirc;ng lu&ocirc;n đứng sau bảo vệ m&igrave;nh, d&ugrave; c&ocirc; ng&ocirc;ng cuồng, bất chấp l&yacute; lẽ, anh vẫn sẽ dịu d&agrave;ng, che chở v&agrave; bao dung mọi thứ.</p>',
            'source' => 'Web Novel, UTruyện, FB: doctruyenfreeoday',
            'status' => '1',
            'image'=> 'gio-am-khong-bang-anh-tham-tinh-220820.jpg',
            'keyword' => 'GIÓ ẤM KHÔNG BẰNG ANH THÂM TÌNH',
            'description' => '<p>M&ocirc; Tả Ngắn</p>',
            'user_id' => '1'
        ]);

        $story6 = Story::create([
            'name' => 'THẦN ĐẠO ĐAN TÔN',
            'content' => '<p>Lăng H&agrave;n - Một Đan Đế đại danh đỉnh định mang trong th&acirc;n m&igrave;nh tuyệt thế c&ocirc;ng ph&aacute;p v&igrave; truy cầu bước cuối, x&eacute; bỏ tấm m&agrave;n th&agrave;nh thần nhưng thất bại đ&atilde; phải bỏ m&igrave;nh. Thế nhưng &ocirc;ng trời dường như kh&ocirc;ng muốn tuyệt dường người, Lăng H&agrave;n đ&atilde; được trọng sinh v&agrave;o một thiếu ni&ecirc;n c&ugrave;ng t&ecirc;n v&agrave; điều may mắn nhất l&agrave; &quot;Bất Diệt Thi&ecirc;n Kinh&quot; ấn k&yacute; vẫn c&ograve;n nằm nguy&ecirc;n trong t&acirc;m thức hắn.</p>

            <p>Từ nay về sau s&oacute;ng gi&oacute; cuộn tr&agrave;o nổi l&ecirc;n, Đan Đế ng&agrave;y xưa b&acirc;y giờ phải c&ugrave;ng tranh phong với v&ocirc; số thi&ecirc;n t&agrave;i trẻ tuổi, lại bắt đầu một truyền thuyết mới như để chứng minh với trời đất: Ta, l&agrave; người mạnh nhất!</p>

            <p><strong>Ph&acirc;n chia cảnh giới:&nbsp;</strong>Luyện Thể, Tụ Nguy&ecirc;n, Dũng Tuyền, Linh Hải, Thần Thai, Sinh Hoa, Linh Anh, H&oacute;a Thần c&ugrave;ng Thi&ecirc;n Nh&acirc;n Cảnh.....<br />
            <em>Mỗi cảnh giới chia l&agrave;m ch&iacute;n tầng : tầng một đến ba l&agrave; tiền kỳ, tầng bốn đến s&aacute;u gọi l&agrave; trung kỳ v&agrave; tầng bảy đến ch&iacute;n gọi l&agrave; hậu kỳ v&agrave; đỉnh</em></p>',
            'source' => 'Phong Nguyệt Lâu',
            'status' => '0',
            'image'=> 'than-dao-dan-ton.jpg',
            'keyword' => 'THẦN ĐẠO ĐAN TÔN',
            'description' => '<p>M&ocirc; Tả Ngắn</p>',
            'user_id' => '1'
        ]);

        $story7 = Story::create([
            'name' => 'VŨ ĐỘNG CÀN KHÔN',
            'content' => '<p>- C&oacute; người theo đuổi quyền lực v&agrave; sức mạnh, c&oacute; người th&igrave; truy cầu t&igrave;nh y&ecirc;u, nhưng sống trong thời loạn kh&ocirc;ng thể kh&ocirc;ng c&oacute; thực lực trong tay, muốn c&oacute; chỗ đứng hay bảo vệ những người thương y&ecirc;u đều cần phải c&oacute; thực lực, đ&oacute; l&agrave; ch&acirc;n l&yacute; kh&ocirc;ng bao giờ thay đổi tự cổ ch&iacute; kim.<br />
            <br />
            - C&acirc;u chuyện l&agrave; một trang s&aacute;ch n&oacute;i về cuộc đời của một tu luyện giả, b&ecirc;n cạnh đ&oacute; c&ograve;n mi&ecirc;u tả cuộc sống đời thường, những suy nghĩ b&igrave;nh thường, nhưng nếu như số mệnh đ&atilde; sắp đặt bản th&acirc;n phải đi tr&ecirc;n một con đường đầy gian khổ v&agrave; trắc trở th&igrave; sao? Con người đặc biệt lu&ocirc;n c&oacute; số mệnh đặc biệt, bất kể xuất th&acirc;n, bất kể địa vị. Ch&uacute;ng ta h&atilde;y c&ugrave;ng d&otilde;i theo những bước ch&acirc;n của họ, kh&ocirc;ng chỉ đơn giản l&agrave; xem những pha đ&aacute;nh nhau đẹp mắt, hay những chi&ecirc;u thức tr&aacute;ng lệ, cũng kh&ocirc;ng phải chỉ để b&agrave;n luận đến những &acirc;m mưu hay kế s&aacute;ch th&acirc;m độc, h&egrave;n hạ bỉ ổi, tuyệt vời ra sao. Thứ ch&uacute;ng ta cần l&agrave; một c&aacute;i g&igrave; đ&oacute; lớn hơn thế, tất cả mọi thứ h&ograve;a quyện lại với nhau tạo ra một sự li&ecirc;n kết tuyệt vời, v&agrave; sự li&ecirc;n kết đ&oacute; ch&iacute;nh l&agrave; V&otilde; Động C&agrave;n Kh&ocirc;n. C&ograve;n chờ g&igrave; nữa, c&aacute;c bạn h&atilde;y nhanh đọc lướt qua phần giới thiệu để</p>',
            'source' => 'truyenfull.vn',
            'status' => '1',
            'image'=> 'vu-dong-can-khon.jpg',
            'keyword' => 'VŨ ĐỘNG CÀN KHÔN',
            'description' => '<p>Giới Thiệu Truyện<br />
            &nbsp;</p>',
            'user_id' => '1'
        ]);

        $story8 = Story::create([
            'name' => 'ĐẾ BÁ',
            'content' => '<p>Ng&agrave;n vạn năm trước, L&yacute; Thất Dạ trồng xuống một c&acirc;y Th&uacute;y Tr&uacute;c.<br />
            <br />
            T&aacute;m trăm vạn năm trước, L&yacute; Thất Dạ nu&ocirc;i một đầu c&aacute; ch&eacute;p.<br />
            <br />
            Năm trăm vạn năm trước, L&yacute; Thất Dạ thu dưỡng một c&aacute;i tiểu c&ocirc; nương.<br />
            <br />
            ... ... ... ... ...<br />
            <br />
            H&ocirc;m nay, L&yacute; Thất Dạ tỉnh lại sau giấc ngủ, Th&uacute;y Tr&uacute;c tu luyện th&agrave;nh thần linh, c&aacute; ch&eacute;p h&oacute;a th&agrave;nh Kim Long, tiểu c&ocirc; nương trở th&agrave;nh Cửu Giới Nữ Đế.<br />
            <br />
            Đ&acirc;y l&agrave; cố sự về&nbsp;một&nbsp;tiểu tử&nbsp;bất tử Nh&acirc;n tộc dưỡng th&agrave;nh Y&ecirc;u Thần, dưỡng th&agrave;nh Ti&ecirc;n th&uacute;, dưỡng</p>',
            'source' => 'Tàng Thư Viện, Vip Văn Đàn',
            'status' => '0',
            'image'=> 'de-ba.jpg',
            'keyword' => 'ĐẾ BÁ',
            'description' => '<p>M&ocirc; Tả Ngắn</p>',
            'user_id' => '1'
        ]);

        $story9 = Story::create([
            'name' => 'TỰ CẨM',
            'content' => '<p>Trong kinh th&agrave;nh mọi người đều đồn đại rằng ở trong Khương gia th&igrave; Tứ tiểu thư nổi tiếng l&agrave; một đại tuyệt sắc mỹ nh&acirc;n. Nhưng đ&aacute;ng tiếc l&agrave;&nbsp;đ&aacute;ng tiếc l&uacute;c n&agrave;ng xinh đẹp nhất lại bị phủ An quốc c&ocirc;ng chọn tr&uacute;ng.<br />
            <br />
            Kh&ocirc;ng chỉ vậy&nbsp;m&agrave; đ&ecirc;m trước khi Khương Tự xuất gi&aacute;, vị h&ocirc;n phu c&ugrave;ng nữ nh&acirc;n kh&aacute;c nhảy s&ocirc;ng tự tử...</p>',
            'source' => 'Wattpad.com/user/khuynhvu1892',
            'image'=> 'tu-cam.jpg',
            'status' => '1',
            'keyword' => 'TỰ CẨM',
            'description' => '<p><strong>Thể loại:</strong>&nbsp;Tr&ugrave;ng sinh, ng&ocirc;n t&igrave;nh, cổ đại, HE, t&igrave;nh cảm, cung đ&igrave;nh hầu tước.&nbsp;<strong>Số chương:&nbsp;</strong>828 + 10 pn<br />
            &nbsp;</p>',
            'user_id' => '1'
        ]);

        $story10 = Story::create([
            'name' => 'NHẤT NIỆM VĨNH HẰNG',
            'content' => '<p>Nhất niệm th&agrave;nh biển cả, nhất niệm h&oacute;a nương d&acirc;u.<br />
            Nhất niệm trảm ngh&igrave;n Ma, nhất niệm giết vạn Ti&ecirc;n.<br />
            <br />
            Chỉ c&oacute; niệm của ta... l&agrave; Vĩnh hằng.</p>',
            'source' => 'Bạch Ngọc Sách',
            'status' => '1',
            'image'=> 'nhat-niem-vinh-hang.jpg',
            'keyword' => 'NHẤT NIỆM VĨNH HẰNG',
            'description' => '<p><strong>一念永恒</strong></p>',
            'user_id' => '1'
        ]);

        $story11 = Story::create([
            'name' => 'LINH VŨ THIÊN HẠ',
            'content' => '<p><strong>Lục Thiếu Du</strong>, linh hồn bị xuy&ecirc;n qua đến thế giới kh&aacute;c, nhập v&agrave;o th&acirc;n thể của một thiếu gia kh&ocirc;ng c&oacute; địa vị phải trải qua cuộc sống kh&ocirc;ng kh&aacute;c g&igrave; n&ocirc; bộc.<br />
            Thế giới n&agrave;y lấy Vũ vi cường, lấy Linh vi t&ocirc;n, nghe đồn khi v&otilde; đạo đỉnh phong, linh đạo đạt đến cực hạn c&oacute; thể ph&aacute; to&aacute;i hư kh&ocirc;ng.<br />
            Lục Thiếu Du mang theo k&yacute; ức từ kiếp trước t&aacute;i sinh, kh&ocirc;ng cam l&ograve;ng l&agrave;m một thiếu gia chẳng kh&aacute;c g&igrave; củi mục.<br />
            <br />
            Trong thế giới xa lạ,<br />
            Say - nằm tr&ecirc;n gối mỹ nh&acirc;n,<br />
            Tỉnh - nắm quyền thi&ecirc;n hạ.<br />
            Đ&acirc;y mới l&agrave; cuộc sống đ&aacute;ng mơ ước.<br />
            Linh - Vũ song tu<br />
            B&aacute; chủ ki&ecirc;u h&ugrave;ng<br />
            Đ&atilde; đến, ta sẽ lưu lại một huyền thoại......</p>',
            'source' => 'Vip Văn Đàn',
            'status' => '1',
            'image'=> 'linh-vu-thien-ha.jpg',
            'keyword' => 'LINH VŨ THIÊN HẠ',
            'description' => '<p><strong><em>Nh&oacute;m dịch:</em></strong><em>&nbsp;S&oacute;i Gi&agrave;<br />
            <strong>Đả tự:</strong>&nbsp;Bựa Thập Ngũ BLH</em></p>',
            'user_id' => '1'
        ]);

        $story12 = Story::create([
            'name' => 'VŨ LUYỆN ĐIÊN PHONG',
            'content' => '<p>Truyện Vũ Luyện Đi&ecirc;n Phong&nbsp;l&agrave; một t&aacute;c phẩm truyện thuộc thể loại Đ&ocirc;ng phương&nbsp;<a href="https://truyenfull.vn/the-loai/huyen-huyen/" target="_blank">huyền huyễn</a>&nbsp;của t&aacute;c giả&nbsp;<a href="https://truyenfull.vn/tac-gia/mac-mac/" target="_blank">Mạc Mặc</a>&nbsp;nổi tiếng. Nội dung c&acirc;u chuyện trong Vũ Luyện Đi&ecirc;n Phong xoay quanh Dương Khai - một đệ tử th&iacute; luyện của Lăng Ti&ecirc;u C&aacute;c. Khởi đầu, Dương Khai chỉ l&agrave; một g&atilde; qu&eacute;t r&aacute;c, sai vặt ... v&igrave; v&ocirc; t&igrave;nh mặt được một cuốn Hắc thư thần b&iacute;, từ đ&oacute; ch&agrave;ng bước v&agrave;o con đường v&otilde; đạo d&agrave;i đằng đẵng nhưng cũng lắm gian tru&acirc;n trắc trở v&agrave; đau thương...&rdquo;</p>

            <p>V&igrave; sao m&agrave; một t&ecirc;n qu&eacute;t r&aacute;c lại c&oacute; thể th&agrave;nh anh h&ugrave;ng trứ danh thi&ecirc;n hạ, v&igrave; sao m&agrave; một t&ecirc;n h&agrave;u sai vặt lại chiếm được những mỹ nữ sắc nước hương trời trong thi&ecirc;n hạ ?&nbsp;Trong thế giới của Vũ Luyện Đi&ecirc;n Phong, đỉnh cao nhất của v&otilde; đạo, ch&iacute;nh l&agrave; c&ocirc; độc, l&agrave; tịch mịch, l&agrave; đằng đẵng miệt m&agrave;i, cao xứ bất thắng h&agrave;n.</p>

            <p>Sống trong nghịch cảnh, ph&aacute;t triển trong tuyệt địa, bất khuất kh&ocirc;ng bỏ cuộc, mới c&oacute; thể ph&aacute; vỡ được cực đạo của v&otilde; thuật. C&oacute; thể n&oacute;i dưới b&uacute;t văn giản dị nhưng v&ocirc; c&ugrave;ng s&uacute;c t&iacute;ch đầy h&igrave;nh ảnh của t&aacute;c giả</p>',
            'source' => 'truyenfull.vn',
            'status' => '0',
            'image'=> 'vu-luyen-dien-phong.jpg',
            'keyword' => 'VŨ LUYỆN ĐIÊN PHONG',
            'description' => '<p>mtn</p>',
            'user_id' => '1'
        ]);

        $story13 = Story::create([
            'name' => 'PHÀM NHÂN TU TIÊN',
            'content' => '<p>Ph&agrave;m Nh&acirc;n Tu Ti&ecirc;n l&agrave; một c&acirc;u chuyện&nbsp;<em>Ti&ecirc;n Hiệp</em>&nbsp;kể về H&agrave;n Lập - Một người b&igrave;nh thường nhưng lại gặp v&ocirc; v&agrave;n cơ duy&ecirc;n để bước đi tr&ecirc;n con đường tu ti&ecirc;n, kh&ocirc;ng phải anh h&ugrave;ng - cũng chẳng phải tiểu nh&acirc;n, H&agrave;n Lập từng bước khẳng định m&igrave;nh... Liệu H&agrave;n Lập v&agrave; người y&ecirc;u c&oacute; thể c&ugrave;ng bước tr&ecirc;n con đường tu ti&ecirc;n v&agrave; c&oacute; một c&aacute;i kết ho&agrave;n mỹ? Những thử th&aacute;ch n&agrave;o đang chờ đợi bọn họ?<br />
            <br />
            - Truyện kết cấu kh&aacute; hợp l&yacute;, t&igrave;nh tiết kh&ocirc;ng qu&aacute; chậm, kh&ocirc;ng qu&aacute; nhanh, diễn tả kh&aacute; đặc biệt, lời văn tr&ocirc;i chảy, nh&acirc;n vật t&iacute;nh c&aacute;ch đặc th&ugrave;. Nh&acirc;n vật ch&iacute;nh, H&agrave;n Lập, mang hơi hướng kh&aacute; c&ocirc; độc. Bạn n&agrave;o th&iacute;ch đọc Tru Ti&ecirc;n hoặc Thương Thi&ecirc;n chắc sẽ th&iacute;ch&nbsp;<em>Ph&agrave;m Nh&acirc;n Tu Ti&ecirc;n Truyện</em>. Mời bạn đọc c&ugrave;ng thưởng thức v&agrave; d&otilde;i theo bước ch&acirc;n của H&agrave;n Lập!<br />
            <br />
            - Tags: pham nhan tu tien prc full, truyen tien hiep</p>',
            'source' => 'truyenfull.vn',
            'status' => '1',
            'image'=> 'pham-nhan-tu-tien.jpg',
            'keyword' => 'PHÀM NHÂN TU TIÊN',
            'description' => '<p>mtn</p>',
            'user_id' => '1'
        ]);

        $story14 = Story::create([
            'name' => 'BOSS LÀ NỮ PHỤ',
            'content' => '<p>Mọi cuốn tiểu thuyết ng&ocirc;n t&igrave;nh th&igrave; nữ ch&iacute;nh lu&ocirc;n l&agrave; người quan t&acirc;m chăm s&oacute;c tỉ mỉ, c&ograve;n nữ phụ l&agrave; người kh&ocirc;ng được y&ecirc;u thương, l&agrave; c&aacute;i nền cho nữ ch&iacute;nh ph&aacute;t triển v&agrave; nhận kết cục kh&ocirc;ng may mắn.<br />
            <br />
            Nhưng ở c&acirc;u chuyện n&agrave;y t&aacute;c giả lại đứng về ph&iacute;a nh&acirc;n vật nữ phụ, bức tử nh&acirc;n vật nữ ch&iacute;nh.<br />
            Nh&acirc;n vật nữ phụ trong đ&acirc;y đ&atilde; xuy&ecirc;n qua mọi thời kh&ocirc;ng, thay đổi số mệnh của v&ocirc; số người, chứng minh một điều ch&iacute;nh nghĩa lu&ocirc;n thắng &acirc;m mưu quỷ kế.<br />
            <br />
            Mỗi thế giới đi qua, mỗi c&acirc;u chuyện được kể lại đều khiến người ta nghiềm ngẫm...<br />
            <br />
            V&agrave; nh&acirc;n vật phụ đ&atilde; phải xuy&ecirc;n qua bao nhi&ecirc;u kh&ocirc;ng gian mới t&igrave;m được t&igrave;nh y&ecirc;u của m&igrave;nh?</p>',
            'source' => 'truyenfull.vn',
            'status' => '1',
            'image'=> 'boss-la-nu-phu-270720.jpg',
            'keyword' => 'BOSS LÀ NỮ PHỤ',
            'description' => '<p>mtn</p>',
            'user_id' => '1'
        ]);

        $story15 = Story::create([
            'name' => 'ĐẤU PHÁ THƯƠNG KHUNG',
            'content' => '<p>-&nbsp;<strong>Đấu Ph&aacute; Thương Khung</strong>&nbsp;l&agrave; một c&acirc;u chuyện huyền huyễn đặc sắc kể về Ti&ecirc;u Vi&ecirc;m, một thi&ecirc;n chi ki&ecirc;u tử với thi&ecirc;n ph&uacute; tu luyện m&agrave; ai ai cũng h&acirc;m mộ, bỗng một ng&agrave;y người mẹ mất đi đễ lại di vật l&agrave; một chiếc giới chỉ m&agrave;u đen nhưng từ khi đ&oacute; Ti&ecirc;u Vi&ecirc;m đ&atilde; mất đi thi&ecirc;n ph&uacute; tu luyện của m&igrave;nh.<br />
            <br />
            - Từ thi&ecirc;n t&agrave;i rớt xuống l&agrave;m phế vật trong 3 năm, rồi bị vị h&ocirc;n th&ecirc; thẳng thừng từ h&ocirc;n, l&agrave;m dấy l&ecirc;n &yacute; ch&iacute; nam nhi của m&igrave;nh, Ti&ecirc;u Vi&ecirc;m nhờ di vật của mẫu th&acirc;n để lại l&agrave; 1 chiếc hắc giới chỉ (nhẫn m&agrave;u đen)Ti&ecirc;u Vi&ecirc;m gặp được hồn của Dược L&atilde;o (Dược Trần &ndash; Dược t&ocirc;n giả) 1 đại luyện dược t&ocirc;ng sư của đấu kh&iacute; đại lục&hellip;<br />
            <br />
            - Từ đ&oacute; cuộc đời của Ti&ecirc;u Vi&ecirc;m c&oacute; những biến h&oacute;a g&igrave;? Gặp được c&aacute;c đại ngộ g&igrave;? Th&acirc;n phận thật sự của Hu&acirc;n Nhi (thanh mai tr&uacute;c m&atilde; l&uacute;c nhỏ của Ti&ecirc;u Vi&ecirc;m) ra sao? B&iacute; mật của gia tộc hắn l&agrave; g&igrave;? C&ugrave;ng theo d&otilde;i bộ truyện Đấu Ph&aacute; Thương Khung để c&oacute; thể giải đ&aacute;p c&aacute;c thắc mắc n&agrave;y c&aacute;c bạn nh&eacute;!<br />
            <br />
            - Tags:&nbsp;<strong>dau pha thuong khung full prc</strong>, truyen huyen huyen</p>',
            'source' => 'truyenfull.vn',
            'status' => '1',
            'image'=> 'truyen-dau-pha-thuong-khung.jpg',
            'keyword' => 'ĐẤU PHÁ THƯƠNG KHUNG',
            'description' => '<p>Giới Thiệu Truyện</p>',
            'user_id' => '1'
        ]);

        $story1->category()->attach($category1);
        $story1->category()->attach($category5);
        $story1->category()->attach($category6);

        $story2->category()->attach($category1);

        $story3->category()->attach($category1);

        $story5->category()->attach($category1);
        $story5->category()->attach($category7);

        $story6->category()->attach($category2);
        $story6->category()->attach($category8);

        $story7->category()->attach($category2);
        $story7->category()->attach($category8);

        $story8->category()->attach($category2);

        $story9->category()->attach($category1);
        $story9->category()->attach($category7);
        $story9->category()->attach($category10);

        $story10->category()->attach($category2);
        $story10->category()->attach($category8);

        $story11->category()->attach($category2);
        $story11->category()->attach($category3);
        $story11->category()->attach($category4);
        $story11->category()->attach($category8);

        $story12->category()->attach($category2);
        $story12->category()->attach($category8);
        $story12->category()->attach($category9);

        $story13->category()->attach($category8);
        $story13->category()->attach($category9);

        $story14->category()->attach($category1);
        $story14->category()->attach($category2);
        $story14->category()->attach($category3);
        $story14->category()->attach($category4);

        $story15->category()->attach($category8);
        $story15->category()->attach($category3);
        $story15->category()->attach($category2);

        $author1 = Author::where('name','Thập Nguyệt Sơ')->first();
        $author2 = Author::where('name','Mặc Linh')->first();
        $author3 = Author::where('name','Quẫn Quẫn Hữu Yêu')->first();
        $author4 = Author::where('name','Thanh Thanh Thùy Tiếu')->first();
        $author5 = Author::where('name','Vũ Phong')->first();
        $author6 = Author::where('name','Nhĩ Căn')->first();
        $author7 = Author::where('name','Vong Ngữ')->first();
        $author8 = Author::where('name','Cô Đơn Địa Phi')->first();
        $author9 = Author::where('name','Đông Phương Ngọc Như Ý')->first();
        $author10 = Author::where('name','Thiên Tàm Thổ Đậu')->first();
        $author11 = Author::where('name','Yếm Bút Tiêu Sinh')->first();
        $author12 = Author::where('name','Mạc Mặc')->first();

        $story1->author()->attach($author3);
        $story2->author()->attach($author3);
        $story3->author()->attach($author1);
        $story5->author()->attach($author4);
        $story6->author()->attach($author8);
        $story7->author()->attach($author10);
        $story8->author()->attach($author11);
        $story9->author()->attach($author9);
        $story10->author()->attach($author6);
        $story11->author()->attach($author5);
        $story12->author()->attach($author12);
        $story13->author()->attach($author7);
        $story14->author()->attach($author2);
        $story15->author()->attach($author10);
    }
}

PRAGMA foreign_keys = OFF;

BEGIN TRANSACTION;

-- --------------------------------------------------
-- Table structure for table `accounts`
-- --------------------------------------------------
DROP TABLE IF EXISTS "accounts";

CREATE TABLE
    "accounts" (
        "ID" INTEGER NOT NULL PRIMARY KEY,
        "UserName" TEXT NOT NULL,
        "Phone" TEXT NOT NULL,
        "Birthday" TEXT NOT NULL,
        "Living" TEXT NOT NULL,
        "LoginPassword" TEXT NOT NULL,
        "Lv" INTEGER NOT NULL,
        "Email" TEXT NOT NULL
    );

INSERT INTO
    "accounts" (
        "ID",
        "UserName",
        "Phone",
        "Birthday",
        "Living",
        "LoginPassword",
        "Lv",
        "Email"
    )
VALUES
    (
        1,
        'LuongAdmin',
        '',
        '',
        '',
        '123456a@',
        100,
        'LuongAdmin@gmail.com'
    ),
    (
        11,
        'HuyManh-QTV',
        '',
        '',
        '',
        '12345@bcZ',
        2,
        'HuyManhQTV@gmail.com'
    ),
    (
        12,
        'LamKiet-QTV',
        '',
        '',
        '',
        '12345@bcZ',
        2,
        'KietQTV@gmail.com'
    ),
    (
        13,
        'ThePhat-QTV',
        '',
        '',
        '',
        '12345@bcZ',
        2,
        'ThePhatQTV@gmail.com'
    ),
    (
        29,
        'Anh Nam',
        '',
        '2004-01-01',
        'Quảng Yên, Quảng Yên',
        '1',
        1,
        '1'
    ),
    (
        31,
        'LuongAdminn',
        '',
        '',
        '',
        '123456a@',
        1,
        'LuongAdmin2@gmail.com'
    );

-- --------------------------------------------------
-- Table structure for table `cart`
-- --------------------------------------------------
DROP TABLE IF EXISTS "cart";

CREATE TABLE
    "cart" (
        "MaGH" INTEGER NOT NULL PRIMARY KEY,
        "MaSP" TEXT NOT NULL,
        "MaK" TEXT NOT NULL,
        "TenSP" TEXT NOT NULL,
        "HinhAnh" TEXT NOT NULL,
        "SoLuong" INTEGER NOT NULL,
        "Gia" REAL NOT NULL
    );

INSERT INTO
    "cart" (
        "MaGH",
        "MaSP",
        "MaK",
        "TenSP",
        "HinhAnh",
        "SoLuong",
        "Gia"
    )
VALUES
    (
        17,
        'Ao_khoac_nau_lot_long_sieu_am2202162099560',
        '31',
        'Áo khoác nâu lót lông siêu ấm',
        './assets/img/product/Slide22.JPG',
        1,
        199.0
    ),
    (
        18,
        'Ao_khoac_phao_nam1444052267744',
        '31',
        'Áo khoác phao nam',
        './assets/img/product/Slide7.JPG',
        1,
        170.0
    ),
    (
        29,
        'AoCauLongNamThuongHieuHIWINGChatVaiMeLanhNhatBanCoDanDaChieuCaoCapMauW7000410195860',
        '29',
        'Áo Cầu Lông Nam Thương Hiệu HIWING Chất Vải Mè Lạnh Nhật Bản Co Dãn Đa Chiều Cao Cấp Mẫu W7',
        './assets/img/product/Slide55.JPG',
        1,
        159000.0
    ),
    (
        36,
        'AolenmauxanhdamT.CHIC16383131114',
        '29',
        'Áo len màu xanh đậm T.CHIC Official',
        './assets/img/product/Slide35.JPG',
        1,
        198000.0
    ),
    (
        37,
        'Aokhoacphaonam1444052267744',
        '29',
        'Áo khoác phao nam',
        './assets/img/product/Slide7.JPG',
        1,
        310000.0
    );

-- --------------------------------------------------
-- Table structure for table `danhgia`
-- --------------------------------------------------
DROP TABLE IF EXISTS "danhgia";

CREATE TABLE
    "danhgia" (
        "MaDanhGia" INTEGER NOT NULL PRIMARY KEY,
        "MaSP" TEXT DEFAULT NULL,
        "MaK" TEXT DEFAULT NULL,
        "UserName" TEXT DEFAULT NULL,
        "Comments" TEXT DEFAULT NULL,
        "Rating" TEXT DEFAULT NULL
    );

INSERT INTO
    "danhgia" (
        "MaDanhGia",
        "MaSP",
        "MaK",
        "UserName",
        "Comments",
        "Rating"
    )
VALUES
    (
        56,
        'Ao_khoac_nam_co_mu17020549103',
        '29',
        'Anh Nam',
        'được r',
        '1'
    ),
    (
        57,
        'Ao_khoac_nam_co_mu17020549103',
        '29',
        'Anh Nam',
        'ưerfsd4wefsd',
        '3'
    ),
    (
        58,
        'Ao_khoac_nam_co_mu17020549103',
        '29',
        'Anh Nam',
        'hahaha',
        '2'
    ),
    (
        60,
        'Ao_khoac_phao_nam1444052267744',
        '29',
        'Anh Nam',
        'sp tốt',
        '5'
    ),
    (
        61,
        'Ao_khoac_phao_nam1444052267744',
        '29',
        'Anh Nam',
        'sp ok',
        '2'
    ),
    (
        62,
        'Ao_phong_nam_den_theu_vach_soc_chu_ky_Tommy_Hilfiger194840666247',
        '29',
        'Anh Nam',
        'ổn',
        '3'
    ),
    (
        63,
        'Ao_phong_nam_den_theu_vach_soc_chu_ky_Tommy_Hilfiger194840666247',
        '29',
        'Anh Nam',
        'tốt',
        '2'
    );

-- --------------------------------------------------
-- Table structure for table `DMSP`
-- --------------------------------------------------
DROP TABLE IF EXISTS "DMSP";

CREATE TABLE
    "DMSP" (
        "MaDMSP" TEXT NOT NULL PRIMARY KEY,
        "TenDMSP" TEXT NOT NULL
    );

INSERT INTO
    "DMSP" ("MaDMSP", "TenDMSP")
VALUES
    ('A09', 'Áo thể thao nam'),
    ('A10', 'Áo sơ mi nam'),
    ('ACS02', 'kính râm thời trang nam'),
    ('CS006', 'Vòng cổ nam'),
    ('NS01', 'Đồng hồ'),
    ('NS02', 'Áo khoác nam'),
    ('NS03', 'Giày nam'),
    ('NS04', 'Áo cộc tay '),
    ('NS05', 'Quần bò nam'),
    ('NSS02', 'Mũ thời trang nam'),
    ('Q10', 'Quần âu nam'),
    ('V11', 'Ví da nam');

-- --------------------------------------------------
-- Table structure for table `donhang`
-- --------------------------------------------------
DROP TABLE IF EXISTS "donhang";

CREATE TABLE
    "donhang" (
        "MaDH" INTEGER NOT NULL PRIMARY KEY,
        "MaK" TEXT NOT NULL,
        "MaSP" TEXT NOT NULL,
        "TenK" TEXT NOT NULL,
        "Email" TEXT NOT NULL,
        "Living" TEXT NOT NULL,
        "SDT" INTEGER NOT NULL,
        "Note" TEXT NOT NULL
    );

-- --------------------------------------------------
-- Table structure for table `news`
-- --------------------------------------------------
DROP TABLE IF EXISTS "news";

CREATE TABLE
    "news" (
        "ID" TEXT NOT NULL PRIMARY KEY,
        "TenTinTuc" TEXT NOT NULL,
        "NoiDung" TEXT NOT NULL,
        "NgayDang" TEXT NOT NULL,
        "HinhAnh" TEXT NOT NULL
    );

INSERT INTO
    "news" (
        "ID",
        "TenTinTuc",
        "NoiDung",
        "NgayDang",
        "HinhAnh"
    )
VALUES
    (
        'ASS01',
        'Ngập tràn hứng khởi! Lễ Hội Mùa Hè Nhất Phát - Giảm Giá 35% cho Tất Cả Các Sản Phẩm!',
        'Hãy sẵn sàng đón nhận một mùa hè đầy sôi động với Lễ Hội Mùa Hè Nhất Phát! Chúng tôi tự hào thông báo về một sự kiện đặc biệt, nơi bạn có thể thỏa sức mua sắm và tiết kiệm hơn bao giờ hết.

Từ ngày mùng 5 tháng 5 đến ngày mùng 7 tháng 5 này, hãy đến với Nhất Phát Shop và tận hưởng ưu đãi hấp dẫn - Giảm giá 35% cho tất cả các sản phẩm trong cửa hàng! Đó là cơ hội tuyệt vời để cập nhật tủ đồ của bạn với những món đồ thời trang mới nhất với mức giá vô cùng hấp dẫn.

Khám phá bộ sưu tập đa dạng của chúng tôi, từ áo phông, áo sơ mi, quần bò đến giày dép và phụ kiện. Với chất lượng hàng đầu và phong cách đa dạng, chúng tôi cam kết mang đến cho bạn sự tự tin và phong cách riêng biệt.

Đừng bỏ lỡ cơ hội tuyệt vời này! Hãy đến ngay Nhất Phát Shop trong thời gian diễn ra Lễ Hội Mùa Hè và tận hưởng ưu đãi giảm giá 35% trên mọi sản phẩm. Đội ngũ nhân viên chuyên nghiệp và thân thiện của chúng tôi sẽ luôn sẵn sàng hỗ trợ bạn trong quá trình mua sắm và đảm bảo bạn có trải nghiệm mua sắm tuyệt vời nhất.

Hãy nhanh chân đến Nhất Phát Shop và tận hưởng Lễ Hội Mùa Hè với ưu đãi giảm giá 35%! Đừng bỏ lỡ cơ hội mua sắm tuyệt vời và mang về những món đồ thời trang phong cách cho tủ quần áo của bạn.',
        '04/05/2020
',
        'assets\img\PictureNews\new20.jpg'
    ),
    (
        'CTSS03',
        '"Thời Trang Cộc Tay - Phá Cách và Tự Tin cùng Nhất Phát Shop!"',
        '
Bạn là người yêu thích phong cách cá nhân và luôn tìm kiếm những xu hướng thời trang mới nhất? Hãy cùng Nhất Phát Shop khám phá bộ sưu tập Quần Áo Cộc Tay - một biểu tượng của sự phá cách và tự tin!

Với sự kết hợp hoàn hảo giữa phong cách cổ điển và sự hiện đại, Quần Áo Cộc Tay đã trở thành một xu hướng thời trang không thể thiếu trong tủ quần áo của các tín đồ thời trang. Với độ dài vừa phải, chúng mang đến sự thoải mái và thoáng mát trong những ngày hè nóng bức.

Tại Nhất Phát Shop, bạn sẽ tìm thấy một bộ sưu tập đa dạng của quần áo cộc tay cho cả nam và nữ. Từ quần short cộc tay cá tính cho nam giới đến váy cộc tay thời trang cho nữ giới, chúng tôi cam kết mang đến sự lựa chọn phù hợp với phong cách và cá nhân của bạn.

Chất liệu chất lượng cao và cắt may tinh tế kết hợp với những họa tiết và màu sắc đa dạng, Quần Áo Cộc Tay của chúng tôi không chỉ làm nổi bật vẻ ngoài của bạn mà còn thể hiện cái tôi độc đáo của bạn.

Quần Áo Cộc Tay không chỉ dành cho các buổi dạo phố nhẹ nhàng mà còn hoàn hảo cho các sự kiện ngoài trời, dạo chơi cùng bạn bè hay thậm chí du lịch. Hãy tự tin thể hiện phong cách riêng của bạn và tạo nên sự ấn tượng với mọi người xung quanh.

Đừng chần chừ nữa! Hãy đến Nhất Phát Shop ngay hôm nay và khám phá bộ sưu tập Quần Áo Cộc Tay độc đáo. Đội ngũ nhân viên nhiệt tình và chuyên nghiệp của chúng tôi sẵn sàng hỗ trợ bạn để bạn có trải nghiệm mua sắm tuyệt vời nhất.

Phá cách và tự tin với Quần Áo Cộc Tay - hãy là người tiên phong trong thế giới thời trang và thể hiện phong cách cá nhân của bạn ngay hôm nay cùng Nhất Phát Shop!',
        '10/03/2024',
        'assets\img\PictureNews\M3.jpg'
    ),
    (
        'CTSS05',
        '"Thời Trang Áo Cộc Tay - Phong Cách Tự Tin và Cá Tính tại Nhất Phát Shop!"',
        'Bạn đang tìm kiếm một phong cách thời trang mới mẻ và phá cách? Hãy khám phá bộ sưu tập Áo Cộc Tay tại Nhất Phát Shop và thể hiện phong cách cá nhân của bạn một cách tự tin!

Với độ dài vừa phải, áo cộc tay đã trở thành biểu tượng của sự tự do và sự thoải mái trong thời trang. Tại Nhất Phát Shop, bạn sẽ tìm thấy một loạt các mẫu áo cộc tay đa dạng và phong cách cho cả nam và nữ.

Bộ sưu tập áo cộc tay của Nhất Phát Shop được thiết kế với chất liệu cao cấp và cắt may tinh tế, đảm bảo sự thoải mái và độ bền trong suốt quá trình sử dụng. Bạn sẽ được trải nghiệm sự mềm mại và thoáng mát của vải, cùng với sự phối hợp màu sắc và họa tiết độc đáo để thể hiện cái tôi riêng biệt của bạn.

Áo cộc tay không chỉ là một lựa chọn thời trang năng động cho các buổi dạo phố, mà còn hoàn hảo cho các sự kiện thể thao, hẹn hò, hay thậm chí là ngày nghỉ cuối tuần. Với khả năng kết hợp đa dạng, áo cộc tay giúp bạn tạo nên các outfit độc đáo và cá nhân hóa phong cách của mình.

Đừng bỏ lỡ cơ hội sở hữu những chiếc áo cộc tay phong cách! Ghé thăm Nhất Phát Shop ngay hôm nay và khám phá bộ sưu tập độc đáo của chúng tôi. Đội ngũ nhân viên tận tâm và chuyên nghiệp sẽ tư vấn cho bạn để bạn có trải nghiệm mua sắm tốt nhất.

Hãy thể hiện phong cách tự tin và cá tính với Áo Cộc Tay tại Nhất Phát Shop!',
        '22/05/2023',
        'assets\img\PictureNews\new3.jpg'
    ),
    (
        'DHSS01',
        '"Chinh Phục Thời Gian - Đẳng Cấp Qúy Ông" sản phẩm mới "Đồng Hồ" tại Nhất Phát Shop.',
        'Chào mừng bạn đến với Nhất Phát Shop - điểm đến đáng tin cậy cho những người yêu thích đồng hồ! Chúng tôi hân hạnh giới thiệu đến bạn bộ sưu tập đồng hồ mẫu mới nhất, nơi bạn sẽ tìm thấy những mẫu đồng hồ đẳng cấp và phong cách.

Tại Nhất Phát Shop, chúng tôi hiểu rằng đồng hồ không chỉ là một phụ kiện để đo thời gian, mà còn là một biểu tượng của sự lịch lãm và cá nhân hóa phong cách. Vì vậy, chúng tôi tự hào mang đến cho bạn những mẫu đồng hồ đa dạng, từ các thương hiệu danh tiếng đến những thiết kế độc quyền.

Bộ sưu tập đồng hồ mẫu mới nhất của chúng tôi bao gồm các mẫu với mọi phong cách, từ đồng hồ cổ điển đến đồng hồ thể thao và đồng hồ điện tử hiện đại. Bạn có thể tìm thấy các mẫu đồng hồ nam, nữ hoặc đồng hồ unisex để phù hợp với sở thích và phong cách của mình.

Chúng tôi cam kết về chất lượng và độ tin cậy của mỗi chiếc đồng hồ mà chúng tôi cung cấp. Chúng được sản xuất từ các vật liệu cao cấp, được thiết kế tinh xảo và sử dụng công nghệ tiên tiến. Điều này đảm bảo rằng bạn sẽ sở hữu một chiếc đồng hồ đẹp và bền bỉ trong suốt thời gian dài.

Đến với Nhất Phát Shop, bạn sẽ được tư vấn bởi đội ngũ nhân viên am hiểu về đồng hồ và thỏa sức lựa chọn từ những mẫu đồng hồ hàng đầu trên thị trường. Hãy đến và khám phá bộ sưu tập đồng hồ mẫu mới nhất của chúng tôi và thể hiện phong cách riêng của bạn.

Hãy tạo dấu ấn cá nhân và chinh phục thời gian cùng đồng hồ mẫu mới nhất tại Nhất Phát Shop. Đến ngay hôm nay và trải nghiệm trọn vẹn sự sang trọng và phong cách của những chiếc đồng hồ đẳng cấp này!',
        '20/07/2023',
        'assets\img\PictureNews\New2.jpg'
    ),
    (
        'GDSA07',
        'Tin tức sản phẩm mới: Giày da cao cấp - Bước vào phong cách đẳng cấp và sang trọng!',
        'Cửa hàng chúng tôi vừa nhập về một mẫu hàng mới đầy ấn tượng - Giày da cao cấp. Với chất liệu da tự nhiên chất lượng và thiết kế tinh tế, đôi giày này chắc chắn sẽ là một phụ kiện không thể thiếu trong tủ đồ của bạn.

Với sự phối hợp màu sắc hài hòa và đường may tỉ mỉ, đôi giày da cao cấp mang đến vẻ đẹp đồng điệu và sang trọng. Chúng được làm từ da tự nhiên, cho phép chân bạn "thở" và cảm nhận sự thoải mái suốt cả ngày dài.

Không chỉ đẹp mắt, mà giày da còn rất linh hoạt trong việc kết hợp với nhiều trang phục khác nhau. Dù bạn đi làm, dự tiệc hay gặp gỡ bạn bè, đôi giày da cao cấp sẽ là trợ thủ đắc lực để nâng tầm phong cách của bạn.

Hãy đến cửa hàng chúng tôi ngay hôm nay để khám phá bộ sưu tập giày da cao cấp mới nhất của chúng tôi. Chúng tôi cam kết mang đến cho bạn những sản phẩm chất lượng và dịch vụ tận tâm.

Cửa hàng - Nơi bạn tìm thấy phong cách và sự sang trọng với giày da cao cấp!',
        '08/09/2023',
        'assets\img\PictureNews\new16.jpg'
    ),
    (
        'HDSS01',
        'Khám phá Phong Cách Tự Tin và Độc Đáo với Bộ Sưu Tập Áo Hoodie Nam Mới tại Nhấp Phát Shop.',
        'Chuẩn bị cho phong cách mới với Áo Hoodie Nam Mới tại Nhấp Phát shop!"

Bạn đang tìm kiếm một món đồ thời trang đẳng cấp và năng động để trang điểm cho tủ quần áo của mình? Hãy chào đón Áo Hoodie Nam Mới Đi - sự lựa chọn hoàn hảo cho phong cách cá nhân của bạn!

Với thiết kế hiện đại và đường nét sắc sảo, Áo Hoodie Nam Mới Đi không chỉ mang đến sự thoải mái tuyệt đối mà còn là biểu tượng của sự phong cách và sự tự tin. Chất liệu mềm mại, cotton cao cấp và cắt may tinh tế đảm bảo rằng bạn sẽ luôn cảm thấy thoải mái và tự tin trong mọi hoạt động hàng ngày.

Với nhiều màu sắc và kiểu dáng đa dạng, Áo Hoodie Nam Mới Đi là sự kết hợp hoàn hảo giữa phong cách và tiện ích. Hãy tự tin thể hiện cá nhân của bạn với một chiếc áo hoodie đơn giản và lịch lãm, hoặc thể hiện phong cách cá nhân với những mẫu áo hoodie in họa tiết độc đáo.

Không chỉ là một món đồ ấm áp cho mùa đông, Áo Hoodie Nam Mới Đi cũng là một lựa chọn tuyệt vời cho những buổi dạo phố, hẹn hò bạn bè hoặc thậm chí là các hoạt động thể thao nhẹ. Mang trong mình sự linh hoạt và sự đa năng, áo hoodie sẽ trở thành một phần không thể thiếu trong tủ quần áo của bạn.

Đừng bỏ lỡ cơ hội sở hữu Áo Hoodie Nam Mới Đi với giá cả phải chăng. Hãy ghé qua cửa hàng của chúng tôi ngay hôm nay và khám phá bộ sưu tập đa dạng của chúng tôi. Cùng với đội ngũ nhân viên chuyên nghiệp và thân thiện, chúng tôi cam kết đem đến cho bạn một trải nghiệm mua sắm tuyệt vời và sự hài lòng tuyệt đối.

Tạo nên phong cách mới và tự tin với Áo Hoodie Nam Mới Đi. Hãy chuẩn bị cho một cuộc phiêu lưu thời trang đầy phong cách và sự tự tin!',
        '15/02/2024
',
        'assets\img\PictureNews\new15.jpg'
    ),
    (
        'HDSS04',
        'Tin hot tuần qua: Áo hoodie - Sản phẩm bán chạy nhất mùa thu năm nay tại cửa hàng Nhất Phát!',
        'Cửa hàng Nhất Phát - Nơi mang đến phong cách và sự thoải mái trong mùa thu!

Mùa thu đã đến và cửa hàng Nhất Phát tự hào giới thiệu đến bạn sản phẩm bán chạy nhất - áo hoodie. Với phong cách trẻ trung, năng động và tiện dụng, áo hoodie là lựa chọn hoàn hảo để bạn tự tin khoe phong cách cá nhân trong mùa thu này.

Áo hoodie của chúng tôi được thiết kế với sự chú trọng đến từng chi tiết. Chất liệu vải cao cấp đảm bảo cảm giác mềm mại và thoải mái khi mặc. Đồng thời, áo hoodie còn có cổ áo và dây rút điều chỉnh giúp bạn tùy chỉnh độ ôm vừa phải, tạo nên sự thoải mái tối đa.

Đa dạng trong mẫu mã và màu sắc, áo hoodie của chúng tôi phù hợp với mọi phong cách và sở thích. Bạn có thể chọn từ những gam màu cổ điển như đen, xám và xanh navy, hoặc thử sức với những màu sắc tươi sáng và nổi bật như đỏ, vàng, hoặc xanh lá cây. Chúng tôi cam kết rằng bạn sẽ tìm thấy áo hoodie phù hợp với phong cách của mình tại cửa hàng Nhất Phát.

Khách hàng của chúng tôi đã thể hiện những ý kiến phản hồi tốt về áo hoodie của chúng tôi:

"Áo hoodie tại Nhất Phát là sản phẩm tuyệt vời. Chất liệu tốt, thiết kế thời trang và rất ấm áp. Tôi đã mua nhiều mẫu và không thể hài lòng hơn!" - Khách hàng Linh Nguyễn.

"Tôi thích sự đa dạng của áo hoodie ở cửa hàng Nhất Phát. Tôi có thể tìm thấy những mẫu màu sắc và họa tiết phù hợp với phong cách của mình. Áo rất thoải mái và chất lượng tốt!" - Khách hàng Nam Trần.

"Áo hoodie Nhất Phát là sự lựa chọn hàng đầu của tôi mỗi khi tìm kiếm áo hoodie mới. Chất lượng ổn định, giá cả hợp lý và phong cách thời trang. Tôi đã giới thiệu cho bạn bè và họ đều rất hài lòng!" - Khách hàng Quang Huy.

Với những phản hồi tích cực như vậy, chúng tôi tin rằng áo hoodie của chúng tôi sẽ làm mãn nhãn và làm hài lòng khách hàng khó tính nhất. Hãy đến cửa hàng Nhất Phát ngay hôm nay và khám phá bộ sưu tập áo hoodie đa dạng và phong cách của chúng tôi!

',
        '26/03/2024
',
        ''
    ),
    (
        'LCSS02',
        '  Mặt hàng bán chạy nhất tuần qua: Áo khoác lông cừu Nhất Phát - Đỉnh cao phong cách và ấm áp!',
        'Tin tức quảng cáo: Áo khoác lông cừu - Sản phẩm hót bán chạy nhất tuần này tại cửa hàng Nhất Phát!

Hãy tạo ra phong cách thời trang cá nhân của bạn với chiếc áo khoác lông cừu đẳng cấp từ cửa hàng Nhất Phát! Trong tuần này, chúng tôi tự hào giới thiệu đến bạn sản phẩm hót nhất – áo khoác lông cừu. Được làm từ nguyên liệu lông cừu cao cấp, áo khoác này không chỉ mang đến cho bạn sự ấm áp mà còn là biểu tượng của phong cách và sự sang trọng.

Khách hàng của chúng tôi đã thể hiện những ý kiến phản hồi tốt về áo khoác lông cừu của chúng tôi:

"Tôi rất ấn tượng với chất lượng của áo khoác lông cừu này. Nó cực kỳ ấm áp và mềm mại. Tôi đã nhận được nhiều lời khen từ bạn bè về phong cách thời trang của mình." - Khách hàng *****.

"Áo khoác lông cừu tuyệt vời! Tôi yêu thiết kế tinh tế và cổ áo chắc chắn. Nó không chỉ giữ ấm tuyệt vời mà còn rất phong cách. Tôi không thể hài lòng hơn!" - Khách hàng ******.

"Mua áo khoác lông cừu tại Nhất Phát là một quyết định tuyệt vời. Tôi cảm thấy thoải mái và ấm áp mỗi khi mặc nó. Chất lượng sản phẩm vượt xa mong đợi của tôi." - Khách hàng ******.

Với những phản hồi tích cực như vậy, chúng tôi tự tin rằng áo khoác lông cừu của chúng tôi sẽ là sự lựa chọn hoàn hảo cho bạn. Đến cửa hàng Nhất Phát ngay hôm nay và trải nghiệm sự mềm mại và sang trọng của áo khoác lông cừu!

Hãy tranh thủ mua sắm ngay bây giờ để không bỏ lỡ cơ hội sở hữu chiếc áo khoác lông cừu hót nhất trong tuần này. Số lượng có hạn, vì vậy hãy đến cửa hàng Nhất Phát ngay hôm nay và khám phá bộ sưu tập áo khoác lông cừu đẳng cấp của chúng tôi!

Cửa hàng Nhất Phát - Nơi mang đến phong cách và sự sang trọng!',
        '14/03/2024',
        'assets\img\PictureNews\new13.jpg'
    ),
    (
        'LNSS01',
        'Lời cảm ơn đến khách hàng đã tin tưởng và ủng hộ sản phẩm của Nhất Phát Shop!!!!',
        'Nhất Phát Shop trân trọng gửi lời cảm ơn đến khách hàng đã tin tưởng và ủng hộ sản phẩm của chúng tôi

Chúng tôi xin thể hiện lòng biết ơn sâu sắc đến tất cả những khách hàng đã tin tưởng và ủng hộ Nhất Phát Shop trong suốt thời gian qua. Sự đồng hành và ủng hộ từ các bạn đã là động lực lớn để chúng tôi không ngừng cải thiện và mang đến những sản phẩm và dịch vụ tốt nhất đến tay quý khách.

Chúng tôi luôn cam kết mang đến những sản phẩm chất lượng cao, từ đồng hồ sang trọng đến giày dép thời trang, với sự lựa chọn cẩn thận và đa dạng. Chúng tôi không ngừng nỗ lực để tạo ra những trải nghiệm mua sắm tuyệt vời và đáng nhớ cho khách hàng.

Điều quan trọng nhất đối với chúng tôi là sự hài lòng của khách hàng. Chúng tôi luôn lắng nghe mọi ý kiến đóng góp và phản hồi từ phía quý khách, để từ đó chúng tôi có thể nâng cao chất lượng dịch vụ và đáp ứng mọi nhu cầu của khách hàng một cách tốt nhất.

Nhất Phát Shop trân trọng mỗi lần được phục vụ và cũng xin cam kết sẽ không ngừng cải thiện để luôn đáp ứng sự tin tưởng và ủng hộ từ phía quý khách. Chúng tôi sẽ tiếp tục mang đến những sản phẩm chất lượng và dịch vụ tận tâm, để mỗi lần mua sắm tại Nhất Phát Shop là một trải nghiệm thú vị và đáng nhớ.

Một lần nữa, chúng tôi xin chân thành cảm ơn sự tin tưởng và ủng hộ của quý khách hàng. Hãy tiếp tục đồng hành cùng chúng tôi, và chúng tôi cam kết sẽ không ngừng phát triển để mang đến những trải nghiệm mua sắm tốt nhất cho bạn.

Trân trọng,
Nhất Phát Shop',
        '20/2/2022
',
        'assets\img\PictureNews\M1.jpg'
    ),
    (
        'No1',
        'Ưu đãi đặc biệt ngày 14/03/2024 , Giảm giá tất cả sản phẩm 30%',
        'Thông báo: Cửa hàng giảm giá 30% vào ngày 14/03/2004!

Chào mừng tất cả các khách hàng yêu thích thời trang sang trọng và ưu đãi hấp dẫn! Chúng tôi xin trân trọng thông báo rằng vào ngày 14/03/2004, cửa hàng của chúng tôi sẽ tổ chức một sự kiện giảm giá đặc biệt, mang đến cho bạn cơ hội mua sắm với ưu đãi tuyệt vời.

Đến và khám phá bộ sưu tập độc đáo và đa dạng của chúng tôi, từ áo khoác lông cừu sang trọng và ấm áp, đến những thiết kế hoodie phong cách và năng động. Tất cả những món đồ thời trang chất lượng cao từ các thương hiệu nổi tiếng đều đang chờ đón bạn.

Với chương trình giảm giá đặc biệt này, bạn sẽ được hưởng mức giảm giá lên đến 30% trên tất cả các sản phẩm trong cửa hàng. Đây là cơ hội tuyệt vời để nâng cấp tủ đồ của bạn với những món đồ sang trọng và phong cách, mà không cần lo lắng về giá.

Hãy đến cửa hàng của chúng tôi vào ngày 14/03/2004 để tận hưởng ưu đãi này. Đội ngũ nhân viên chuyên nghiệp và thân thiện của chúng tôi sẽ sẵn sàng hỗ trợ bạn trong quá trình mua sắm và đảm bảo bạn có trải nghiệm thú vị và thoải mái.

Đừng bỏ lỡ cơ hội này. Hãy lên lịch và chuẩn bị để tận hưởng một ngày mua sắm vui vẻ và tiết kiệm tại cửa hàng của chúng tôi. Hãy đến và khám phá bộ sưu tập tuyệt vời của chúng tôi và tạo nên phong cách riêng cho mình!

Xin chân thành cảm ơn sự ủng hộ của bạn và chúng tôi rất mong được gặp bạn tại cửa hàng vào ngày 14/03/2004.

Trân trọng,
Cửa hàng thời trang',
        '12/03/2004',
        'assets\img\PictureNews\new11.jpg'
    ),
    (
        'NSS01',
        ' Sản phẩm mới: Áo lông cừu - phiên bản mùa đông ',
        'Sản phẩm mới " Áo lông cừu- phiên bản mùa đông"  là một trong những món đồ thời trang ấm áp và sang trọng, được làm từ lông cừu tự nhiên. Với vẻ ngoài lông mềm mại và màu sắc tự nhiên, áo khoác lông cừu mang đến sự ấm áp và thoải mái cho người mặc.

Một điểm nổi bật của áo khoác lông cừu là khả năng giữ ấm tuyệt vời. Lông cừu có khả năng cách nhiệt và cung cấp một lớp bảo vệ đáng tin cậy chống lại thời tiết lạnh. Bạn có thể tự tin diện áo khoác lông cừu trong những ngày gió lạnh hay khi đi du lịch đến những vùng có khí hậu lạnh.

Ngoài tính năng giữ ấm, áo khoác lông cừu còn mang đến vẻ ngoài sang trọng và đẳng cấp. Lông cừu có sự sáng bóng tự nhiên và tạo ra một vẻ đẹp quyến rũ. Kiểu dáng của áo khoác lông cừu thường rất đa dạng, từ những mẫu truyền thống với cổ cao và dáng dài cho đến những thiết kế hiện đại và năng động với các chi tiết thời trang sáng tạo.

Áo khoác lông cừu không chỉ là một món đồ ấm áp mà còn là một biểu tượng thời trang. Với sự kết hợp hoàn hảo giữa tính năng và phong cách, áo khoác lông cừu là lựa chọn lý tưởng cho những người yêu thích sự sang trọng và chất lượng cao.

Với áo khoác lông cừu, bạn có thể thể hiện phong cách riêng của mình trong những bữa tiệc, sự kiện đặc biệt hoặc ngay cả trong những ngày hàng ngày. Hãy trải nghiệm cảm giác êm ái và cảm nhận sự sang trọng của áo khoác lông cừu và thêm một chút quý phái vào tủ quần áo của bạn.',
        '14/03/2004',
        'assets\img\PictureNews\new10.jpg'
    ),
    (
        'QASS01',
        'Phong Cách Đa Dạng, Sự Lựa Chọn Của Người Đàn Ông Hiện Đại',
        '"Phong Cách Lịch Lãm - Áo Vest Nam Mới Nhất Tại Nhất Phát Shop!"

Chào mừng bạn đến với Nhất Phát Shop - điểm đến hàng đầu cho những người đàn ông yêu thích phong cách lịch lãm! Chúng tôi hân hạnh giới thiệu đến bạn bộ sưu tập áo vest nam mới nhất, nơi bạn sẽ tìm thấy những kiểu dáng và mẫu mã đẳng cấp.

Tại Nhất Phát Shop, chúng tôi hiểu rằng áo vest không chỉ là một trang phục lịch sự, mà còn là biểu tượng của sự tự tin và phong cách. Vì vậy, chúng tôi tự hào mang đến cho bạn những mẫu áo vest nam đa dạng, từ những thiết kế cổ điển đến những xu hướng thời trang mới nhất.

Bộ sưu tập áo vest nam mới nhất của chúng tôi bao gồm các kiểu dáng và màu sắc phong phú, từ áo vest đơn giản và thanh lịch đến áo vest có các chi tiết độc đáo và cá tính. Bạn có thể tìm thấy áo vest phù hợp để mặc trong các dịp quan trọng như tiệc cưới, buổi tiệc, hay các sự kiện chuyên nghiệp.

Chúng tôi cam kết về chất lượng và độ bền của mỗi chiếc áo vest mà chúng tôi cung cấp. Chúng được sản xuất từ các vật liệu cao cấp, được chọn lọc kỹ càng để mang lại sự thoải mái và phong cách cho người mặc. Điều này đảm bảo rằng bạn sẽ tự tin và thu hút ánh nhìn với mỗi chiếc áo vest của Nhất Phát Shop.

Đến với Nhất Phát Shop, bạn sẽ được tư vấn bởi đội ngũ nhân viên chuyên nghiệp với kiến thức sâu về thời trang nam. Họ sẽ giúp bạn lựa chọn áo vest phù hợp với phong cách và sở thích cá nhân của bạn.

Hãy tạo nên phong cách lịch lãm và tự tin với áo vest nam mới nhất tại Nhất Phát Shop. Đến ngay hôm nay và khám phá bộ sưu tập độc đáo của chúng tôi để thể hiện phong cách riêng của bạn!',
        '02/03/2023',
        'assets\img\PictureNews\new9.jpg'
    ),
    (
        'QBSS01',
        '"Nhất Phát Shop: Thể Hiện Phong Cách Cá Nhân với Bộ Sưu Tập Quần Bò Đẳng Cấp!"',
        '"Thể hiện phong cách cá nhân với Quần Bò đẳng cấp!"

Bạn đang tìm kiếm một món đồ thời trang mang tính biểu tượng và sự tự tin? Hãy để Nhất Phát  giới thiệu đến bạn Bộ Sưu Tập Quần Bò đẳng cấp - sự lựa chọn hoàn hảo để thể hiện phong cách cá nhân của bạn!

Với chất liệu denim chất lượng cao và cắt may tinh tế, Quần Bò của chúng tôi không chỉ mang đến sự thoải mái tuyệt đối mà còn tạo nên vẻ ngoài bắt mắt và phong cách. Bạn sẽ tự tin tỏa sáng trong mọi dịp, từ những buổi hẹn hò, dạo phố cho đến các sự kiện đặc biệt.

Với nhiều kiểu dáng và màu sắc đa dạng, Bộ Sưu Tập Quần Bò của chúng tôi mang đến sự linh hoạt trong việc mix đồ. Hãy tự do thể hiện cá nhân của bạn với một chiếc quần bò cổ điển và lịch lãm, hoặc thể hiện phong cách cá nhân với những kiểu dáng hiện đại và cá tính.

Không chỉ là một món đồ thời trang, Quần Bò còn là biểu tượng của sự tự do và sự phiêu lưu. Với thời gian, quần bò trở nên càng thêm đẹp và cá nhân hơn, tạo nên những dấu vết và kỷ niệm đáng nhớ. Hãy mang theo câu chuyện của bạn khi bạn diện những chiếc quần bò tuyệt đẹp này.

Đừng bỏ lỡ cơ hội sở hữu Bộ Sưu Tập Quần Bò đẳng cấp với giá cả phải chăng. Hãy ghé qua cửa hàng Nhất Phát  của chúng tôi ngay hôm nay và khám phá bộ sưu tập đa dạng của chúng tôi. Cùng với đội ngũ nhân viên chuyên nghiệp và thân thiện, chúng tôi cam kết đem đến cho bạn một trải nghiệm mua sắm tuyệt vời và sự hài lòng tuyệt đối.

Tạo nên phong cách độc đáo và tự tin với Bộ Sưu Tập Quần Bò đẳng cấp. Hãy chuẩn bị cho một cuộc phiêu lưu thời trang đầy phong cách và sự tự tin khi đến với Nhất Phát Shop!',
        '15/03/2004',
        'assets\img\PictureNews\new8.jpg'
    ),
    (
        'RS03KK',
        'Tin tức: Đồng hồ Rolex - Sản phẩm bán chạy nhất tháng tại cửa hàng Nhất Phát!',
        'Cửa hàng Nhất Phát - Nơi mang đến sự sang trọng và thành công với đồng hồ Rolex!

Cửa hàng Nhất Phát vinh dự giới thiệu đến bạn sản phẩm đồng hồ Rolex - dòng sản phẩm cao cấp và đẳng cấp. Với chất lượng vượt trội và thiết kế tinh tế, đồng hồ Rolex đã được người mua bình chọn là sản phẩm bán chạy nhất trong tháng vừa qua.

Đồng hồ Rolex không chỉ là một phụ kiện thời trang, mà còn là biểu tượng của đẳng cấp và thể hiện sự thành công. Với hơn một thế kỷ kinh nghiệm và sự chăm chỉ trong nghiên cứu và phát triển, Rolex đã nhanh chóng trở thành một trong những thương hiệu đồng hồ hàng đầu trên thế giới.

Khách hàng của chúng tôi đã bình chọn đồng hồ Rolex là sản phẩm bán chạy nhất trong tháng:

"Tôi đã mua một chiếc đồng hồ Rolex tại cửa hàng Nhất Phát và tôi không thể hài lòng hơn. Thiết kế tinh tế, chất liệu chất lượng và độ chính xác của đồng hồ làm tôi cảm thấy tự hào khi đeo nó." - Khách hàng Minh Hải.

"Đồng hồ Rolex đã trở thành một biểu tượng của thành công và sự sang trọng. Tôi đã mua một chiếc và cảm thấy rằng tôi đang đầu tư vào một sản phẩm chất lượng cao và có giá trị lâu dài." - Khách hàng Mai Anh.

"Tôi đã sở hữu một số chiếc đồng hồ Rolex và tôi không thể phủ nhận sự tuyệt vời của chúng. Chất lượng và độ chính xác của đồng hồ là điều tuyệt vời nhất. Tôi luôn tự tin khi đeo nó." - Khách hàng Tuấn Kiệt.

Với những phản hồi tích cực như vậy và sự tin tưởng của khách hàng, chúng tôi cam kết đồng hồ Rolex sẽ mang lại sự hài lòng và đáng giá cho bạn. Hãy đến cửa hàng Nhất Phát ngay hôm nay và khám phá bộ sưu tập đồng hồ Rolex đẳng cấp và đa dạng của chúng tôi!

',
        '30/6/2023
',
        'assets\img\PictureNews\New2.jpg'
    ),
    (
        'SSSD04',
        'Tin hot:"Đón Nhận Sự Đẳng Cấp - Mũ Thời Trang Gucci Tại Nhất Phát Shop!"',
        'Chúng tôi vui mừng thông báo rằng Nhất Phát Shop đã trở thành điểm đến độc quyền cho mũ thời trang nhà Gucci! Bạn có cơ hội sở hữu những chiếc mũ Gucci đẳng cấp và phong cách tại cửa hàng của chúng tôi.

Gucci, một trong những thương hiệu thời trang hàng đầu thế giới, nổi tiếng với sự kết hợp tinh tế giữa sự sang trọng và sáng tạo. Từ thiết kế độc đáo đến chất liệu cao cấp, mỗi chiếc mũ Gucci đều mang trong mình sự tinh tế và phong cách đặc trưng của thương hiệu này.

Tại Nhất Phát Shop, chúng tôi tự hào đem đến cho bạn bộ sưu tập mũ Gucci đa dạng với nhiều kiểu dáng và màu sắc phong phú. Từ mũ lưỡi trai thanh lịch đến mũ snapback thể thao, bạn sẽ tìm thấy mũ Gucci phù hợp với phong cách cá nhân của mình.

Đặc biệt, chúng tôi cam kết về chất lượng và xuất xứ của mỗi sản phẩm Gucci mà chúng tôi cung cấp. Bạn có thể yên tâm rằng mỗi chiếc mũ Gucci tại Nhất Phát Shop đều là hàng chính hãng và mang đậm chất Gucci danh tiếng.

Hãy đến và trải nghiệm sự sang trọng và phong cách của mũ thời trang Gucci tại Nhất Phát Shop ngay hôm nay. Đội ngũ nhân viên chuyên nghiệp của chúng tôi sẽ hỗ trợ bạn trong việc lựa chọn mũ Gucci phù hợp và đảm bảo bạn có một trải nghiệm mua sắm tuyệt vời.

Đừng bỏ lỡ cơ hội sở hữu những chiếc mũ thời trang Gucci chất lượng cao tại Nhất Phát Shop. Hãy đến ngay và là một trong những người đầu tiên trải nghiệm sự đẳng cấp của mũ thương hiệu Gucci tại cửa hàng của chúng tôi!',
        '15/05/2020',
        'assets\img\PictureNews\M4.JPG'
    ),
    (
        'TSS08',
        'Chào mừng Ngày Tựu Trường - Ưu Đãi Đặc Biệt Cho Học Sinh, Sinh Viên Tại Nhất Phát Shop!',
        'Hãy bước vào mùa tựu trường với phong cách tự tin và ấn tượng. Nhất Phát Shop muốn gửi đến bạn, học sinh và sinh viên yêu thích thời trang, một ưu đãi đặc biệt nhân dịp Ngày Tựu Trường 05/09.

Với niềm tự hào là điểm đến hàng đầu cho thời trang nam và nữ, Nhất Phát Shop mang đến cho bạn cơ hội trải nghiệm những bộ sưu tập đáng yêu và phong cách, với giá cả phải chăng.

Chỉ trong ngày 05/09, hãy đến Nhất Phát Shop và tận hưởng ưu đãi đặc biệt dành riêng cho học sinh và sinh viên:

Giảm giá 15% cho tất cả các sản phẩm thời trang nam và nữ. Từ áo sơ mi lịch sự, quần jeans phong cách đến váy xinh xắn và phụ kiện thời trang, bạn có thể tìm thấy những món đồ ưng ý với giá trị tuyệt vời.

Quà tặng đặc biệt: Mỗi lần mua hàng trị giá từ 500.000 VND, bạn sẽ nhận được một món quà thời trang độc đáo từ Nhất Phát Shop. Đó có thể là một chiếc cà vạt thời thượng, một dây chuyền cá tính hoặc một đôi tất trendy. Hãy để chúng tôi thể hiện lòng tri ân đến bạn!

Tư vấn phong cách miễn phí: Đội ngũ nhân viên chuyên nghiệp và thân thiện của chúng tôi sẽ sẵn sàng tư vấn và giúp bạn chọn những trang phục phù hợp với phong cách và cá nhân của bạn. Hãy khám phá những gợi ý thời trang mới nhất và biến phong cách của bạn thành một tuyên ngôn riêng.

Đừng bỏ lỡ cơ hội này để nâng tầm phong cách của mình và tiết kiệm ngay tại Nhất Phát Shop. Hãy đến cửa hàng của chúng tôi vào ngày 05/09 và hòa mình vào không khí vui vẻ và tưng bừng của Ngày Tựu Trường.

Nhất Phát Shop - Nơi thời trang và phong cách gặp gỡ!',
        '05/09/2024',
        'assets\img\PictureNews\new12.jpg'
    ),
    (
        'UDSS25',
        'Ưu Đãi Đặc Biệt Ngày 10/10 - Tri Ân Khách Hàng Tại Nhất Phát Shop!
Nhanh tay! Nhanh tay!!!!',
        'Bạn biết tin gì chưa??......
("Ưu Đãi Đặc Biệt Ngày 10/10 - Tri Ân Khách Hàng Tại Nhất Phát Shop!")

Chúng tôi xin gửi lời tri ân sâu sắc đến tất cả khách hàng yêu quý của Nhất Phát Shop! Ngày 10/10, chúng tôi mang đến cho bạn một ưu đãi đặc biệt để thể hiện lòng cảm kích của chúng tôi.

Hãy chuẩn bị sẵn sàng để trải nghiệm một ngày mua sắm với những ưu đãi hấp dẫn nhất. Ngày 10/10, khi bạn ghé thăm cửa hàng của chúng tôi, bạn sẽ được hưởng những ưu đãi vô cùng đặc biệt:

Giảm giá 10% cho tất cả các sản phẩm: Chúng tôi giảm giá 10% cho mọi sản phẩm trong cửa hàng, từ áo quần cho đến phụ kiện thời trang. Hãy tận hưởng việc mua sắm với giá ưu đãi chỉ trong ngày này!

Quà tặng đặc biệt: Chúng tôi gửi tặng bạn một món quà đặc biệt như một lời tri ân chân thành với mỗi đơn hàng bạn thực hiện trong ngày 10/10. Hãy để chúng tôi thể hiện sự trân trọng đối với sự ủng hộ của bạn.

Miễn phí vận chuyển: Để tạo điều kiện thuận lợi cho bạn, chúng tôi miễn phí vận chuyển cho tất cả các đơn hàng trong ngày 10/10. Bạn chỉ cần lựa chọn sản phẩm yêu thích và chúng tôi sẽ giao hàng trực tiếp đến tận cửa nhà bạn.

Đừng bỏ lỡ cơ hội trải nghiệm những ưu đãi đặc biệt này! Ghé thăm Nhất Phát Shop vào ngày 10/10 để thể hiện lòng tri ân của chúng tôi đến bạn. Chúng tôi cam kết mang đến cho bạn một trải nghiệm mua sắm tuyệt vời và chất lượng sản phẩm đáng tin cậy.

Hãy đến và cùng chúng tôi kỷ niệm ngày 10/10 với những ưu đãi đặc biệt và sự tri ân thành thật từ Nhất Phát Shop. Chúng tôi rất mong được đón tiếp bạn!





',
        '07/10/2023',
        'assets\img\PictureNews\new5.jpg'
    );

-- --------------------------------------------------
-- Table structure for table `nhanvien`
-- --------------------------------------------------
DROP TABLE IF EXISTS "nhanvien";

CREATE TABLE
    "nhanvien" (
        "MaNV" TEXT NOT NULL PRIMARY KEY,
        "TenNV" TEXT NOT NULL,
        "ChucVu" TEXT NOT NULL,
        "SDT" TEXT NOT NULL
    );

INSERT INTO
    "nhanvien" ("MaNV", "TenNV", "ChucVu", "SDT")
VALUES
    (
        'K00',
        'Nguyễn Thanh Thảo',
        'Thư ký nóng bỏng',
        '0336836444'
    ),
    (
        'K01',
        'Trần Thảo Anh',
        'Nhân viên tư vấn',
        '0366755834'
    ),
    (
        'K02',
        'Nguyễn Thị Lan Anh',
        'Nhân viên marketing',
        '0336836444'
    ),
    (
        'K03',
        'Lương Minh Trang',
        'Nhân viên quản lý đặt hàng',
        '0377592644'
    ),
    (
        'K04',
        'Nguyễn Thị Lan Hương',
        'Nhân viên kế toán',
        '0336844793'
    );

-- --------------------------------------------------
-- Table structure for table `sanpham`
-- --------------------------------------------------
DROP TABLE IF EXISTS "sanpham";

CREATE TABLE
    "sanpham" (
        "MaDMSP" TEXT NOT NULL,
        "MaSP" TEXT NOT NULL PRIMARY KEY,
        "TenSP" TEXT NOT NULL,
        "SoLuong" INTEGER NOT NULL,
        "HinhAnh" TEXT NOT NULL,
        "MoTa" TEXT NOT NULL,
        "GiaGoc" REAL NOT NULL,
        "KhuyenMai" INTEGER NOT NULL
    );

INSERT INTO
    "sanpham" (
        "MaDMSP",
        "MaSP",
        "TenSP",
        "SoLuong",
        "HinhAnh",
        "MoTa",
        "GiaGoc",
        "KhuyenMai"
    )
VALUES
    (
        'NS03',
        '?GiayBotMartin?CoCaoLotCottonPhongCachAnhQuocThoiTrangThuDongChoNamRKC040113107161445',
        '?Giày Bốt Martin? Cổ Cao Lót Cotton Phong Cách Anh Quốc Thời Trang Thu Đông Cho Nam RKC040',
        240,
        './assets/img/product/Giay/GiayNam/martin.jpg',
        'https://shopee.vn/product/... chi tiết sản phẩm ...',
        250.0,
        45
    ),
    (
        'NS03',
        '?GiayNamTrungNien?giaydatrungnienGiayTheThaoCotDayThoangKhiThoiTrangChoDanOngTrungNienRKC3221147252982',
        '?Giày Nam Trung Niên?giày da trung niên Giày Thể Thao Cột Dây Thoáng Khí Thời Trang Cho Đàn Ông Trung Niên RKC322',
        974,
        './assets/img/product/Giay/GiayNam/rkc322.jpg',
        'https://shopee.vn/product/... chi tiết sản phẩm ...',
        222.0,
        35
    ),
    (
        'A08',
        'Aoblazerden2102211681427',
        'Áo blazer đen',
        395,
        './assets/img/product/Slide21.JPG',
        'CHI TIẾT SẢN PHẨM... Áo blazer đen...',
        300.0,
        15
    ),
    (
        'A09',
        'AoCauLongNamThuongHieuHIWINGChatVaiMeLanhNhatBanCoDanDaChieuCaoCapMauW7000410195860',
        'Áo Cầu Lông Nam Thương Hiệu HIWING Chất Vải Mè Lạnh Nhật Bản Co Dãn Đa Chiều Cao Cấp Mẫu W7',
        159,
        './assets/img/product/Slide55.JPG',
        'THÔNG TIN SẢN PHẨM ÁO CẦU LÔNG NAM...',
        159.0,
        0
    ),
    (
        'NS04',
        'AodibienmuahetraicayHawaii1535163165937',
        'Áo đi biển mùa hè trái cây Hawaii',
        190,
        './assets/img/product/Slide12.JPG',
        'Mùa áp dụng: Áo sơ mi đi biển mùa hè...',
        300.0,
        0
    ),
    (
        'NS02',
        'Aokhoacdalonnamlotlongcuu141936225727',
        'Áo khoác da lộn nam lót lông cừu',
        229,
        './assets/img/product/Slide4.JPG',
        'Áo khoác nhung của chúng tôi...',
        195.0,
        20
    ),
    (
        'NS02',
        'AoKhoacKhoaKeoMemMaiMauTronPhongCachDoanhNhanGianDiMuaXuan/MuaThu221042381985',
        'Áo Khoác Khóa Kéo Mềm Mại Màu Trơn Phong Cách Doanh Nhân Giản Dị Mùa Xuân / Mùa Thu',
        154,
        './assets/img/product/Slide24.JPG',
        'Mô tả: Áo khoác nam của chúng tôi...',
        303.16,
        50
    ),
    (
        'NS02',
        'Aokhoacmuadong132759718',
        'Áo khoác mùa đông',
        457,
        './assets/img/product/Slide2.JPG',
        'Áo khoác mùa đông STYLT MARVEN - AO KHOAC NAM 002...',
        300.0,
        60
    ),
    (
        'NS02',
        'Aokhoacnamcomu17020549103',
        'Áo khoác nam co mũ cực ấm cho mùa đông',
        509,
        './assets/img/product/Slide37.JPG',
        'Áo khoác lót lông siêu ấm - Vải gió tráng bạc...',
        450.0,
        20
    ),
    (
        'NS02',
        'Aokhoacnaulotlongsieuam2202162099560',
        'Áo khoác nâu lót lông siêu ấm',
        1333,
        './assets/img/product/Slide22.JPG',
        'MÔ TẢ SẢN PHẨM ÁO KHOÁC LÓT LÔNG HÀNG SIÊU DÀY...',
        199.0,
        0
    ),
    (
        'NS02',
        'Aokhoacphaonam1444052267744',
        'Áo khoác phao nam',
        263,
        './assets/img/product/Slide7.JPG',
        'ÁO KHOÁC PHAO NAM - SIÊU NHẸ SIÊU ẤM...',
        310.0,
        0
    ),
    (
        'A010',
        'Aolenmauden&xamT.CHIC16490811204',
        'Áo len màu đen và xám T.CHIC Official',
        166,
        './assets/img/product/Slide36.JPG',
        'MÔ TẢ SẢN PHẨM: Chất liệu cotton dày mịn...',
        159.0,
        30
    ),
    (
        'A010',
        'AolenmauxanhdamT.CHIC16383131114',
        'Áo len màu xanh đậm T.CHIC Official',
        379,
        './assets/img/product/Slide35.JPG',
        'Áo len nam cao cấp mềm mịn...',
        220.0,
        10
    ),
    (
        'A010',
        'Aolongcuu142536589225',
        'Áo da lông cừu',
        394,
        './assets/img/product/Slide16.JPG',
        'Áo Khoác Lông Cừu Mềm Mượt...',
        350.0,
        20
    ),
    (
        'NS04',
        'AophongAnCuong17330684499',
        'Áo phông An Cường',
        378,
        './assets/img/product/Slide42.JPG',
        'Áo phông nam form rộng cao cấp tay lỡ cổ tròn...',
        230.0,
        10
    ),
    (
        'NS04',
        'AophongnamdentheuvachsocchukyTommyHilfiger194840666247',
        'Áo phông nam đen thêu vạch sọc chữ ký Tommy Hilfiger',
        159,
        './assets/img/product/Slide13.JPG',
        'Áo phông Tomy họa tiết in Full áo chất liệu cotton...',
        195.0,
        0
    ),
    (
        'NS04',
        'AophongnamtaylodenhongFAFIC19374346631',
        'Áo phông nam tay lỡ đen hồng FAFIC',
        272,
        './assets/img/product/Slide11.JPG',
        'Áo phông Fafic in chữ FA Big logo...',
        167.0,
        0
    ),
    (
        'NS04',
        'AophongnamtaylohongFAFIC1508585430',
        'Áo phông nam tay lỡ hồng FAFIC',
        563,
        './assets/img/product/Slide9.JPG',
        'Áo phông nam tay lỡ FAFIC màu hồng...',
        400.0,
        0
    ),
    (
        'NS04',
        'AophongnamtaylotrangdenFAFIC14553850779',
        'Áo phông nam tay lỡ FAFIC màu trắng, đen',
        465,
        './assets/img/product/Slide8.JPG',
        'Áo phông nam tay lỡ FAFIC màu trắng, đen...',
        590.0,
        0
    ),
    (
        'NS04',
        'AophongnamtrangtheuvachsocchukyTommyHilfiger194840666247',
        'Áo phông nam trắng thêu vạch sọc chữ ký Tommy Hilfiger',
        228,
        './assets/img/product/Slide14.JPG',
        'Áo phông Tomy họa tiết in Full áo chất liệu cotton...',
        109.0,
        40
    ),
    (
        'NS04',
        'AophongPANDAZOBA2302081413341',
        'Áo phông nam tay lỡ form rộng PANDA ZOBA',
        992,
        './assets/img/product/Slide34.JPG',
        'Áo phông nam tay lỡ mặc cặp, nhóm phong cách trẻ trung...',
        360.0,
        50
    ),
    (
        'NS04',
        'Aophongtayloxanhreu200257105482',
        'Áo phông tay lỡ xanh rêu',
        185,
        './assets/img/product/Slide17.JPG',
        'Áo phông nam form rộng tay lỡ nam...',
        420.0,
        30
    ),
    (
        'NS04',
        'AoPoloTeelabEssentialtrang&den172906625818',
        'Áo Polo Teelab Essential trắng và đen ',
        131,
        './assets/img/product/Slide40.JPG',
        'Áo Polo Teelab Essentials form rộng Phong cách Hàn Quốc...',
        200.0,
        0
    ),
    (
        'NS04',
        'AoPoloTeelabEssentialxanhlacay172002132604',
        'Áo Polo Teelab Essential xanh lá cây',
        992,
        './assets/img/product/Slide39.JPG',
        'Áo Polo Teelab Essentials form rộng Phong cách Hàn Quốc...',
        800.0,
        0
    ),
    (
        'A08',
        'Aosomicongsomauxanh1709209960',
        'Áo sơ mi công sở màu xanh',
        185,
        './assets/img/product/Slide38.JPG',
        'Áo sơ mi công sở xanh nam somi công sở dài tay...',
        420.0,
        45
    ),
    (
        'A08',
        'Aosomikecaroden173932223289',
        'Áo sơ mi kẻ caro đen',
        653,
        './assets/img/product/Slide1.JPG',
        'Thương hiệu Owen - Chất liệu vải nỉ dày...',
        182.32,
        0
    ),
    (
        'A08',
        'AosominamdenELNIDO220703513',
        'Áo sơ mi nam đen ELNIDO',
        511,
        './assets/img/product/Slide15.JPG',
        'Áo sơ mi nam công sở ELNIDO thiết kế chuẩn form...',
        300.0,
        0
    ),
    (
        'A08',
        'AosominamtrangELNIDO221913241335',
        'Áo sơ mi nam trắng ELNIDO',
        1352,
        './assets/img/product/Slide18.JPG',
        'Áo sơ mi nam trắng ELNIDO...',
        300.0,
        0
    ),
    (
        '',
        'AosominamxanhELNIDO221913241335',
        'Áo sơ mi nam xanh ELNIDO',
        916,
        './assets/img/product/Slide20.JPG',
        'Áo Sơ Mi Nam Vải Linen nhập từ Quảng Châu...',
        324.019,
        0
    ),
    (
        '',
        'Aosomitrang204242412070',
        'Áo sơ mi trắng',
        147,
        './assets/img/product/Slide25.JPG',
        'Áo sơ mi trắng dài tay nam OWEN...',
        198.0,
        0
    ),
    (
        '',
        'Aosomitrangformrongchekhuyetdiem215247804490',
        'Áo sơ mi trắng form rộng, che khuyết điểm',
        113,
        './assets/img/product/Slide28.JPG',
        'Áo Sơ Mi Nam Trắng Dài tay Cotton lịch lãm...',
        580.0,
        0
    ),
    (
        'A09',
        'AoTheThaoNamHangVnxk,AoThunNamTheThaoTapGymNganTayVaiThunLanhThoangMat,CoGian,ChuanForm232903104853',
        'Áo Thể Thao Nam Hàng Vnxk, Áo Thun Nam Thể Thao Tập Gym Ngắn Tay Vải Thun Lạnh Thoáng Mát, Co Giãn, Chuẩn Form',
        974,
        './assets/img/product/Slide51.JPG',
        'Làm bằng vải thun lạnh cao cấp, co giãn 4 chiều...',
        139.0,
        27
    ),
    (
        'A09',
        'AoThunBongBanTayNganCoBeThoiTrangChoNam235443450175',
        'Áo Thun Bóng Bàn Tay Ngắn Cổ Bẻ Thời Trang Cho Nam ',
        64,
        './assets/img/product/Slide53.JPG',
        'Áo Thể Thao Nam mẫu áo thể thao nam được săn đón...',
        420.0,
        10
    ),
    (
        'A09',
        'AOTHUNTHETHAONAMPHOI3SOCCAOCAP,CHATTHUNLANHCOGIAN4CHIEUTHOAMAIKHIDICHUYENVANDONG2307502250698',
        'ÁO THUN THỂ THAO NAM PHỐI 3 SỌC CAO CẤP,CHẤT THUN LẠNH CO GIẢN 4 CHIỀU THỎA MÁI KHI DI CHUYỂN VẬN ĐỘNG',
        267,
        './assets/img/product/Slide50.JPG',
        'Chất liệu thun lạnh co giãn 4 chiều, dập vân cao tần...',
        105.0,
        45
    ),
    (
        '',
        'Aovesttrangsua15160814466',
        'Áo vest trắng sữa',
        763,
        './assets/img/product/Slide10.JPG',
        'Áo Vest mang lại cho bạn sự trẻ trung, lịch lãm...',
        300.0,
        0
    ),
    (
        '',
        'Aovestxanhden2107541061475',
        'Áo vest xanh đen',
        321,
        './assets/img/product/Slide29.JPG',
        'Áo vest nhỏ thông thường bằng lụa băng mùa hè...',
        331.0,
        0
    ),
    (
        '',
        'BodonamthudongxamBTT09AVIANO2042422475872',
        'Bộ đồ nam thu đông xam BTT09 AVIANO',
        547,
        './assets/img/product/Slide30.JPG',
        'Bộ Đồ Nam AVIANO Thấm Hút Mồ Hôi Poly Coolmax...',
        300.0,
        0
    ),
    (
        '',
        'BodonamthudongxamdenBTT12AVIANO205826137758',
        'Bộ đồ nam thu đông xám đen BTT12 AVIANO',
        968,
        './assets/img/product/Slide32.JPG',
        'Bộ Đồ Nam AVIANO Thấm Hút Mồ Hôi Poly Coolmax...',
        429.0,
        0
    ),
    (
        '',
        'BodonamthudongxanhdamBTT11AVIANO205449231855',
        'Bộ đồ nam thu đông xanh đậm BTT11 AVIANO',
        268,
        './assets/img/product/Slide31.JPG',
        'Bộ Đồ Nam AVIANO Thấm Hút Mồ Hôi Poly Coolmax...',
        439.0,
        0
    ),
    (
        'NS01',
        'CalvinKleinCityMensWatch43mm2164057851845',
        'Calvin Klein City Men Watch 43mm',
        29,
        './assets/img/product/DongHo/calvin_klein.jpg',
        'Bộ sưu tập: CITY - Mã SP: 90820 - Đường kính: 43mm...',
        6941.0,
        5
    ),
    (
        'NS01',
        'CosmographDaytona\r\n\r\nOyster,40mm,vangtrang\r\nSothamchieu126529LN\r\n1.371.037.500VND162357136',
        'Cosmograph Daytona\r\n\r\nOyster, 40 mm, vàng trắng\r\nSố tham chiếu 126529LN\r\n1.371.037.500VND',
        50,
        './assets/img/product/DongHo/rolex126529LN.jpg',
        'Cosmograph Daytona vàng trắng 18ct, vành Cerachrom...',
        1371040.0,
        5
    ),
    (
        'NS01',
        'DonghoCartierTankChinoise39.5mmCRWHTA0016165100388998',
        'Đồng hồ Cartier Tank Chinoise 39.5mm CRWHTA0016',
        41,
        './assets/img/product/DongHo/tank.jpg',
        'Đồng hồ Cartier Tank Chinoise máy Quartz...',
        1270000.0,
        20
    ),
    (
        'NS01',
        'DongHoFranckMullerVanguardV45DragonLimitedEdition–GioiHan188Chiec1646202322882',
        'Đồng Hồ Franck Muller Vanguard V45 Dragon Limited Edition – Giới Hạn 188 Chiếc',
        65,
        './assets/img/product/DongHo/franck_dragon.jpg',
        'Franck Muller Vanguard V45 Dragon phiên bản giới hạn...',
        170000.0,
        0
    ),
    (
        'NS01',
        'DONGHOPATEKPHILIPPE\r\n\r\nPatekPhilippeComplications5396R-015AnnualCalendarMoonphaseBlueDialUsed2022170656170712',
        'ĐỒNG HỒ PATEK PHILIPPE\r\nPatek Philippe Complications 5396R-015 Annual Calendar Moonphase Blue Dial Used 2022',
        94,
        './assets/img/product/DongHo/patekDial.jpg',
        'Patek Philippe Complications 5396R-015 Annual Calendar...',
        1450000.0,
        20
    ),
    (
        'NS01',
        'DongHoRolexYacht-Master42226659-0004MatSoDen1654272338418',
        'Đồng Hồ Rolex Yacht-Master 42 226659-0004 Mặt Số Đen',
        44,
        './assets/img/product/DongHo/rolexYacht.jpg',
        'Rolex Yacht-Master 42 máy Calibre 3235...',
        995000.0,
        0
    ),
    (
        'NS06',
        'GiannisImmortality3EP\r\nBasketballShoes174313146198',
        'Giannis Immortality 3 EP\r\nBasketball Shoes',
        37,
        './assets/img/product/Giay/GiayTheThao/giannis3ep.jpg',
        'Giannis Immortality 3 đệm Renew, đế cao su...',
        2349.0,
        20
    ),
    (
        'NS06',
        'GiaybongroNBAKyrieIrving5chuyennghiepchonamsize36-46215655383419',
        'Giày bóng rổ NBA Kyrie Irving 5 chuyên nghiệp cho nam size 36-46',
        145,
        './assets/img/product/Giay/GiayTheThao/nba.jpg',
        'Giày bóng rổ NBA Kyrie Irving 5 chất liệu Canvas...',
        720.0,
        35
    ),
    (
        'NS03',
        'GiayBotMartinTangChieuCao8cmTangChieuCaoPhongCachHanQuocThoiTrangThuDongChoNamGiayCanvasPhoiKhoaKeoThoiTrangNangDongChoNam12450985418',
        'Giày Bốt Martin Tăng Chiều Cao 8cm Tăng Chiều Cao Phong Cách Hàn Quốc Thời Trang Thu Đông Cho Nam Giày Canvas Phối Khóa Kéo Thời Trang Năng Động Cho Nam',
        262,
        './assets/img/product/Giay/GiayNam/bot.jpg',
        'Bốt Thời Trang đế tăng chiều cao...',
        513.217,
        30
    ),
    (
        'NS03',
        'GiayChayBoNuNewBalanceFreshFoamRoav-MROAVBK1120820320190',
        'Giày Chạy Bộ Nữ New Balance Fresh Foam Roav - MROAVBK1',
        50,
        './assets/img/product/Giay/GiayNam/MROAVBK1.jpg',
        'Giày Chạy Bộ New Balance Fresh Foam Roav đệm Fresh Foam X...',
        2559.0,
        0
    ),
    (
        'NS03',
        'GiayConverseClassicNavyHi-M9622C1217061336517',
        'Giày Converse Classic Navy Hi - M9622C',
        96,
        './assets/img/product/Giay/GiayNam/M9622C.jpg',
        'Converse Classic Navy Hi chất liệu Canvas...',
        1550.0,
        0
    ),
    (
        'NS06',
        'Giaydabongnamnu3socchinhhangNEWMOS11Prosanconhantaobandanhandakhaude,giaydabanh|REALSHOP97GI04162303951',
        'Giày đá bóng nam nữ 3 sọc chính hãng NEWMOS 11Pro sân cỏ nhân tạo bản da nhăn đã khâu đế, giày đá banh | REALSHOP97 GI04',
        806,
        './assets/img/product/Giay/GiayTheThao/newmos_11pro.jpg',
        'NEWMOS 11Pro đinh TF bám sân cỏ nhân tạo...',
        300.0,
        10
    ),
    (
        'MS07',
        'GiayDaNamGiayLuoiMoiNamDaPuDeKhau2MauDenNauHangDepTTG2582303512117',
        'Giày Da Nam Giày Lười Mọi Nam Da Pu Đế Khâu 2 Màu Đen Nâu Hàng Đẹp TTG258',
        117,
        './assets/img/product/Giay/GiayLuoi/Slide6.JPG',
        'Giày Lười Da PU đế cao su mềm...',
        225.0,
        0
    ),
    (
        'NS03',
        'GIAYGAZELLEINDOOR12000610473',
        'GIÀY GAZELLE INDOOR',
        22,
        './assets/img/product/Giay/GiayNam/orange_peel_white.jpg',
        'Adidas Gazelle Indoor da lộn đế gum...',
        2900.0,
        10
    ),
    (
        'NS03',
        'Giay??????1hyperroyalxanhnicaocomoi,GiayJD1xanhloangnamnuhotnhat202211513214542',
        'Giày ?????? 1 hyper royal xanh nỉ cao cổ mới, Giày JD1 xanh loang nam nữ hot nhất 2022',
        475,
        './assets/img/product/Giay/GiayNam/hyper_royal_xanh.jpg',
        'Giày sneakers da lộn cao cổ fullbox...',
        350.0,
        45
    ),
    (
        'MS07',
        'GiayLuoiDeCaoSuChongTruotThoiTrangNam231526530495',
        'Giày Lười Đế Cao Su Chống Trượt Thời Trang Nam',
        1328,
        './assets/img/product/Giay/GiayLuoi/Slide9.JPG',
        'Giày Lười Canvas đế cao su chống trượt...',
        141.667,
        0
    ),
    (
        'MS07',
        'GiayLuoiNamdabong-dapvancarotinhte-caothem3cm+tanglotkhimuagiay.223336191170',
        'Giày Lười Nam da bóng - dập vân caro tinh tế - cao thêm 3cm + tặng lót khi mua giày.',
        64,
        './assets/img/product/Giay/GiayLuoi/Slide1.JPG',
        'Giày Lười Nam da bóng tăng 3cm chiều cao...',
        199.0,
        45
    ),
    (
        'MS07',
        'GiayluoinamdapuMixxFashiondongianthoitrang232425161115',
        'Giày lười nam da pu MixxFashion đơn giản thời trang',
        361,
        './assets/img/product/Giay/GiayLuoi/Slide11.JPG',
        'Giày lười nam da PU MixxFashion...',
        150.0,
        45
    ),
    (
        'MS07',
        'Giayluoinamdapvandarannoibattrenmatgiaygiaxuongchatluongcao22475925098',
        'Giày lười nam dập vân da rắn nổi bật trên mặt giày giá xưởng chất lượng cao',
        59,
        './assets/img/product/Giay/GiayLuoi/Slide3.JPG',
        'Giày lười nam da PU dập vân da rắn đế non...',
        109.0,
        0
    ),
    (
        'MS07',
        'Giayluoinamhoatietkesocphongcach22441346031',
        'Giày lười nam họa tiết kẻ sọc phong cách',
        32,
        './assets/img/product/Giay/GiayLuoi/Slide2.JPG',
        'Giày lười da PU đế cao cấp kẻ sọc...',
        210.0,
        45
    ),
    (
        'MS07',
        'Giayluoinammaudenchamchatlieuvaimemnamk207225412112',
        'Giày lười nam mầu đen chấm chất liệu vải mềm nam k207',
        42,
        './assets/img/product/Giay/GiayLuoi/Slide4.JPG',
        'Giày lười vải mềm phong cách thể thao...',
        110.0,
        0
    ),
    (
        'MS07',
        'Giayluoinamnhuathethaosieunheemchanlothoangkhidibiendimuachongnuocsieubenvalidep04V339232833215472',
        'Giày lười nam nhựa thể thao siêu nhẹ êm chân lỗ thoáng khí đi biển đi mưa chống nước siêu bền validep04 V339',
        128,
        './assets/img/product/Giay/GiayLuoi/Slide12.JPG',
        'Giày nhựa EVA đi mưa chống nước siêu bền...',
        450.0,
        20
    ),
    (
        'MS07',
        'GiayLuoiNamThoangKhiPhongCachHanQuocRKC70023083627792',
        'Giày Lười Nam Thoáng Khí Phong Cách Hàn Quốc RKC700',
        118,
        './assets/img/product/Giay/GiayLuoi/Slide7.JPG',
        'Giày lười vải dệt thoáng khí đế cao su...',
        170.0,
        0
    ),
    (
        'MS07',
        'GiayLuoiVaidenimThoiTrangCaTinhChoNam231202736162',
        'Giày Lười Vải denim Thời Trang Cá Tính Cho Nam',
        228,
        './assets/img/product/Giay/GiayLuoi/Slide8.JPG',
        'Giày lười vải denim phong cách trẻ trung...',
        761.0,
        0
    ),
    (
        'MS07',
        'Giayluoivainamsieunhe-Chatlieuvaibothoangkhi,decaosuxopemnhechongtrontruot-Ma22906230008267770',
        'Giày lười vải nam siêu nhẹ - Chất liệu vải bố thoáng khí, đế cao su xốp êm nhẹ chống trơn trượt - Mã 22906',
        82,
        './assets/img/product/Giay/GiayLuoi/Slide5.JPG',
        'Giày slip on vải bố siêu nhẹ...',
        295.0,
        0
    ),
    (
        'NS03',
        'GiayNamThoiTrangLuoiDaoNamGiayTheThaoHopThoiTrangGiayChayBoThoangKhi12403025047',
        'Giày Nam Thời Trang Lưỡi Dao Nam Giày Thể Thao Hợp Thời Trang Giày Chạy Bộ Thoáng Khí ',
        229,
        './assets/img/product/Giay/GiayNam/KNIFE.jpg',
        'Giày thể thao lưỡi dao đế thoáng khí...',
        967.696,
        35
    ),
    (
        'NS03',
        'GiaySneakerNamAdidasGrandCourtCloudfoamComfort-Trang12302168985',
        'Giày Sneaker Nam Adidas Grand Court Cloudfoam Comfort - Trắng',
        258,
        './assets/img/product/Giay/GiayNam/ADIDAS.jpg',
        'Adidas Grand Court Cloudfoam Comfort trắng...',
        2000.0,
        0
    ),
    (
        'NS06',
        'GiayTheThaoCoCaoPhoiLuoiThoangKhiThoiTrangChoNamSize36-48220527583026',
        'Giày Thể Thao Cổ Cao Phối Lưới Thoáng Khí Thời Trang Cho Nam Size 36-48',
        257,
        './assets/img/product/Giay/GiayTheThao/byinto.jpg',
        'Giày bóng rổ cổ cao phối lưới thoáng khí Byinto...',
        605.503,
        10
    ),
    (
        'NS06',
        'GiayTheThaoDeDayThoangKhiPhongCachHanQuocHopThoiTrangMuaThuHangMoiDanhChoBanNam1631423993',
        'Giày Thể Thao Đế Dày Thoáng Khí Phong Cách Hàn Quốc Hợp Thời Trang Mùa Thu Hàng Mới Dành Cho Bạn Nam',
        115,
        './assets/img/product/Giay/GiayTheThao/mainstream.jpg',
        'Giày thể thao đế dày đúc phun thời trang...',
        253.0,
        15
    ),
    (
        'NS03',
        'Giaythethaosneakernamkecarotrang11424268739',
        'Giày thể thao sneaker nam kẻ caro trắng',
        732,
        './assets/img/product/Giay/GiayNam/white_caro.jpg',
        'Giày sneaker kẻ caro trắng chất liệu da PU...',
        198.0,
        45
    ),
    (
        'MS07',
        'GiayvaiTau-Sliponnamgiare-Chatlieusoitonghopdetkimthoangkhi,decaosuTPUmemem-MaSPT668232044206729',
        'Giày vải Tàu - Slip on nam giá rẻ - Chất liệu sợi tổng hợp dệt kim thoáng khí, đế cao su TPU mềm êm - Mã SP T668',
        154,
        './assets/img/product/Giay/GiayLuoi/Slide10.JPG',
        'Slip on nam dệt kim thoáng khí mã T668...',
        200.0,
        20
    ),
    (
        'NS01',
        'GMT-MasterII\r\n\r\nOyster,40mm,thepOystersteel\r\nSothamchieu126720VTNR\r\n298.886.500VND1629031386404',
        'GMT-Master II\r\n\r\nOyster, 40 mm, thép Oystersteel\r\nSố tham chiếu 126720VTNR\r\n298.886.500VND',
        51,
        './assets/img/product/DongHo/rolex126720VTNR.jpg',
        'GMT-Master II vành Cerachrom xanh lá cây và đen...',
        298886.0,
        0
    ),
    (
        'A09',
        'HangCoSanJerseyJourneyAoThunTheThaoMuaHeInHoaTiet(JBW)ChoChayBo/KeoDai/Vaimicrosport.234258808044',
        'Hàng Có Sẵn Jersey Journey Áo Thun Thể Thao Mùa Hè In Họa Tiết (JBW) Cho Chạy Bộ / Kéo Dài / Vải microsport.',
        204,
        './assets/img/product/Slide52.JPG',
        'Jersey Journey Áo thun thể thao in họa tiết vải thun lạnh...',
        93.0,
        5
    ),
    (
        'NS06',
        'KD16EP\r\nBasketballShoes173023120801',
        'KD16 EP\r\nBasketball Shoes',
        22,
        './assets/img/product/Giay/GiayTheThao/kd16ep.jpg',
        'Kevin Durant KD16 EP bộ đôi Nike Air và Zoom Air...',
        4409.0,
        20
    ),
    (
        'ACS02',
        'KinhGMFrida011640424272063',
        'Kính GM Frida 01',
        92,
        './assets/img/product/KinhRam/frida01.jpg',
        'Kính GM Frida 01 dáng vuông bo nhẹ lens Zeiss...',
        5790.0,
        20
    ),
    (
        'ACS02',
        'KinhGMPalette012232432860',
        'Kính GM Palette 01',
        15,
        './assets/img/product/KinhRam/palette01.jpg',
        'Kính GM Palette 01 chống tia UV 99.9%...',
        5590.0,
        10
    ),
    (
        'ACS02',
        'KinhMatNamChongTiaUV,PhongCachThoiTrangChuanChatLuong,MatKinhDoiMauAnhDen/AnhVang125340722230',
        'Kính Mát Nam Chống Tia UV, Phong Cách Thời Trang Chuẩn Chất Lượng, Mặt Kính Đổi Màu Ánh Đen/ Ánh Vàng',
        199,
        './assets/img/product/KinhRam/uv.jpg',
        'Kính mát nam tròng polaroid đổi màu chống UV400...',
        120.0,
        0
    ),
    (
        'ACS02',
        'KinhmatnamLilyeyewearchongUV400thietkematvuongdedeomausacthoitrang60233523424422038',
        'Kính mát nam Lilyeyewear chống UV400 thiết kế mắt vuông dễ đeo màu sắc thời trang 602335',
        104,
        './assets/img/product/KinhRam/Lilyeyewear.jpg',
        'Kính mắt vuông chống UV400 thương hiệu Lily Eyewear...',
        300.0,
        55
    ),
    (
        'ACS02',
        'KinhmattrangguongnamLEXUSmatvuongchonguv400nhuacaocap1229474573278',
        'Kính mát tráng gương nam LEXUS mắt vuông chống uv400 nhựa cao cấp',
        253,
        './assets/img/product/KinhRam/Lexus.jpg',
        'Kính tráng gương phân cực chống chói LEXUS...',
        442.533,
        40
    ),
    (
        'ACS02',
        'KinhmatY2Kbabesphongcachnam,kinhramForunhieumauHiphopngauchonamGK02001049107516',
        'Kính mát Y2K babes phong cách nam, kính râm Foru nhiều màu Hiphop ngầu cho nam GK02',
        83,
        './assets/img/product/KinhRam/Y2KForuGK02.jpg',
        'Kính Y2K phong cách hiphop cá tính gọng nhựa...',
        339.0,
        0
    ),
    (
        'ACS02',
        'KinhramgongvuongmausacngotngaophongcachHanQuoccodienthoitrangdanhchonam002156525078',
        'Kính râm gọng vuông màu sắc ngọt ngào phong cách Hàn Quốc cổ điển thời trang dành cho nam ',
        281,
        './assets/img/product/KinhRam/Yumi.jpg',
        'Kính râm gọng vuông cổ điển sang trọng UV375...',
        143.0,
        45
    ),
    (
        'ACS02',
        'Kinhramnam,kinhmatLATIOkinhthoitrangcaocap2024duocthietke2chamkethopvoinhieutonemaudep-KM422319512114965',
        'Kính râm nam , kính mát LATIO kính thời trang cao cấp 2024 được thiết kế 2 chấm kết hợp với nhiều tone màu đẹp - KM42',
        375,
        './assets/img/product/KinhRam/latio.jpg',
        'Kính mát LATIO chất liệu TR90 siêu nhẹ chống tia cực tím...',
        199.0,
        30
    ),
    (
        'ACS02',
        'KinhRamNamChongUVKieuDangThoiTrangTreTrung-TAYDEN165619162794',
        'Kính Râm Nam Chống UV Kiểu Dáng Thời Trang Trẻ Trung- TÂY ĐEN',
        61,
        './assets/img/product/KinhRam/tay_den.jpg',
        'Kính râm dáng mắt vuông phân cực Polaroid UV400...',
        329.0,
        50
    ),
    (
        'ACS02',
        'KinhramNamM021phienbanHanQuocChongtiacuctimKinhdenKinhramKinhvuongkieudangthoitrangsanhdieu004312331009',
        'Kính râm Nam M021 phiên bản Hàn Quốc Chống tia cực tím Kính đen Kính râm Kính vuông kiểu dáng thời trang sành điệu',
        103,
        './assets/img/product/KinhRam/M021.jpg',
        'Kính râm M021 gọng vuông phong cách thời trang...',
        100.075,
        0
    ),
    (
        'ACS02',
        'KinhramnamnuthoitranggiarenhieumaumaumoihaichamgocGM080033385055',
        'Kính râm nam nữ thời trang giá rẻ nhiều màu mẫu mới hai chấm góc GM08',
        75,
        './assets/img/product/KinhRam/GM08.jpg',
        'Kính râm nam nữ thời trang giá rẻ GM08...',
        191.162,
        50
    ),
    (
        'ACS02',
        'KinhramphancucnamVEITHDIA2462gongvuongcodien005240170566',
        'Kính râm phân cực nam VEITHDIA 2462 gọng vuông cổ điển',
        264,
        './assets/img/product/KinhRam/VEITHDIA2462.jpg',
        'Kính râm phân cực Veithdia V2462 gọng hợp kim...',
        364.264,
        20
    ),
    (
        'NS06',
        'NikeG.T.Cut3EP\r\nBasketballShoes171215387793',
        'Nike G.T. Cut 3 EP\r\nBasketball Shoes',
        30,
        './assets/img/product/Giay/GiayTheThao/GTCut3EP.jpg',
        'Nike G.T. Cut 3 EP bọt ZoomX siêu nhạy...',
        5589.0,
        10
    ),
    (
        'NS06',
        'NikeInfinityRN4\r\nMensRoadRunningShoes165843154576',
        'Nike InfinityRN 4\r\nMens Road Running Shoes',
        37,
        './assets/img/product/Giay/GiayTheThao/infinityRN4.jpg',
        'Nike InfinityRN 4 bọt ReactX Flyknit...',
        4699.0,
        0
    ),
    (
        'NS06',
        'NikeMercurialVapor15Elite\r\nFirm-GroundLow-TopFootballBoot214520484425',
        'Nike Mercurial Vapor 15 Elite\r\nFirm-Ground Low-Top Football Boot',
        56,
        './assets/img/product/Giay/GiayTheThao/vapor15.jpg',
        'Vapor 15 Elite FG trang bị bộ Zoom Air...',
        8799.0,
        0
    ),
    (
        'NS06',
        'NikePegasusTrail4GORE-TEX\r\nMensWaterproofTrail-RunningShoes163850222414',
        'Nike Pegasus Trail 4 GORE-TEX\r\nMens Waterproof Trail-Running Shoes',
        11,
        './assets/img/product/Giay/GiayTheThao/4_gore_tex.jpg',
        'Pegasus Trail 4 GORE-TEX công nghệ bọt React...',
        4699.0,
        0
    ),
    (
        'NS06',
        'NikePhantomLuna2EliteSE\r\nFGHigh-TopFootballBoot212337125514',
        'Nike Phantom Luna 2 Elite SE\r\nFG High-Top Football Boot',
        46,
        './assets/img/product/Giay/GiayTheThao/phantom_luna.jpg',
        'Phantom Luna 2 Elite chất liệu Gripknit lực kéo Cyclone 360...',
        8799.0,
        0
    ),
    (
        'NS06',
        'NikeSuperfly9EliteMercurialDreamSpeed\r\nFGHigh-TopFootballBoot19214544868',
        'Nike Superfly 9 Elite Mercurial Dream Speed\r\nFG High-Top Football Boot',
        60,
        './assets/img/product/Giay/GiayTheThao/nikeSuperfly.jpg',
        'Superfly 9 Elite Mercurial đế Air Zoom...',
        8349.0,
        20
    ),
    (
        'NS01',
        'OysterPerpetual341610251307367',
        'Oyster Perpetual 34',
        55,
        './assets/img/product/DongHo/rolex124200.jpg',
        'Rolex Oyster Perpetual 34 thép Oystersteel...',
        153556.0,
        20
    ),
    (
        'NS01',
        'PatekPhilippeGrandComplicationsSkyMoonTourbillon6002G-01016593727497',
        'Patek Philippe Grand Complications Sky Moon Tourbillon 6002G-010',
        57,
        './assets/img/product/DongHo/patekSkyMoon.jpg',
        'Patek Philippe Grand Complications Sky Moon Tourbillon 6002G-010 vàng trắng 18k...',
        120000000.0,
        30
    ),
    (
        '',
        'Quanjean224022192476',
        'Quần jean',
        807,
        './assets/img/product/Slide33.JPG',
        'Quần jean nam đẹp baggy ống rộng mẫu slimfit...',
        205.0,
        0
    ),
    (
        'NS01',
        'RolexSubmariner\r\n\r\nOyster,41mm,thepOystersteel\r\nSothamchieu124060\r\n244.044.500VND1634061612072',
        'Rolex Submariner\r\n\r\nOyster, 41 mm, thép Oystersteel\r\nSố tham chiếu 124060\r\n244.044.500VND',
        77,
        './assets/img/product/DongHo/rolexSubmariner.jpg',
        'Submariner thép Oystersteel vành Cerachrom đen...',
        244044.0,
        10
    ),
    (
        'NS01',
        'Sea-Dweller\r\n\r\nOyster,43mm,thepOystersteelvavangkim\r\nSothamchieu126603\r\n485.347.500VND1617441432258',
        'Sea-Dweller\r\n\r\nOyster, 43 mm, thép Oystersteel và vàng kim\r\nSố tham chiếu 126603\r\n485.347.500 VND',
        100,
        './assets/img/product/DongHo/rolex125503.jpg',
        'Sea-Dweller mặt đen Rolesor vàng...',
        485348.0,
        0
    ),
    (
        'NS01',
        'THUONGHIEUDONGHOJAEGER-LECOULTRECHINHHANG\r\nJAEGER-LECOULTREMASTERCONTROLCALENDAR4142520171349253550',
        'THƯƠNG HIỆU ĐỒNG HỒ JAEGER-LECOULTRE CHÍNH HÃNG\r\nJAEGER-LECOULTRE MASTER CONTROL CALENDAR 4142520\r\n',
        86,
        './assets/img/product/DongHo/master.jpg\r\n',
        'Jaeger-LeCoultre Master Control Calendar vàng hồng 18k...',
        610000.0,
        50
    ),
    (
        'NS03',
        'VansOldSkoolVansXDisney-VN0005UFBMB1122173282',
        'Vans Old Skool Vans X Disney - VN0005UFBMB',
        35,
        './assets/img/product/Giay/GiayNam/VN0005UFBMB.jpg',
        'Vans Old Skool Vans X Disney kỷ niệm 100 năm...',
        2450.0,
        0
    );

COMMIT;
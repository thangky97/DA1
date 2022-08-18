-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 09, 2022 lúc 05:40 AM
-- Phiên bản máy phục vụ: 10.4.19-MariaDB
-- Phiên bản PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `du_an_1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binh_luan`
--

CREATE TABLE `binh_luan` (
  `ma_bl` int(11) NOT NULL,
  `ma_sp` int(11) NOT NULL,
  `ten_tk` varchar(20) NOT NULL,
  `noi_dung_bl` varchar(255) NOT NULL,
  `ngay_bl` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `binh_luan`
--

INSERT INTO `binh_luan` (`ma_bl`, `ma_sp`, `ten_tk`, `noi_dung_bl`, `ngay_bl`) VALUES
(4, 4, 'admin ', '123', '2021-11-29'),
(5, 4, 'admin ', 'e', '2021-11-29'),
(9, 13, 'admin ', 'a', '2021-12-08'),
(18, 2, 'admin ', 'a', '2021-12-09'),
(19, 2, 'admin ', 'a', '2021-12-09'),
(23, 2, 'admin ', 'a', '2021-12-11'),
(24, 11, 'qưe', 'vhkbjlnk/', '2022-03-03');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chi_tiet_don_hang`
--

CREATE TABLE `chi_tiet_don_hang` (
  `ma_ct` int(11) NOT NULL,
  `ma_sp` int(11) NOT NULL,
  `ten_sp` varchar(50) NOT NULL,
  `anh` varchar(255) NOT NULL,
  `gia_sp` int(11) NOT NULL,
  `thanh_tien` int(10) NOT NULL,
  `so_luong` int(3) NOT NULL,
  `ma_dh` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `chi_tiet_don_hang`
--

INSERT INTO `chi_tiet_don_hang` (`ma_ct`, `ma_sp`, `ten_sp`, `anh`, `gia_sp`, `thanh_tien`, `so_luong`, `ma_dh`) VALUES
(70, 2, 'N°5', 'n5.1.jpg', 3400000, 10200000, 3, 54),
(71, 12, 'BLEU DE CHANEL', '5.1.jpg', 3640000, 3640000, 1, 54);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `don_hang`
--

CREATE TABLE `don_hang` (
  `ma_dh` int(11) NOT NULL,
  `ma_tk` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `ho_ten` varchar(50) NOT NULL,
  `sdt` int(15) NOT NULL,
  `dia_chi` varchar(255) NOT NULL,
  `don_gia` int(15) NOT NULL,
  `ngay_them` date NOT NULL DEFAULT current_timestamp(),
  `ghi_chu` varchar(100) NOT NULL,
  `trang_thai` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `don_hang`
--

INSERT INTO `don_hang` (`ma_dh`, `ma_tk`, `email`, `ho_ten`, `sdt`, `dia_chi`, `don_gia`, `ngay_them`, `ghi_chu`, `trang_thai`) VALUES
(54, 17, '  babiicuteo@gmail.com', '  Đỗ Tiến Học', 362002062, '  qưe', 13840000, '2021-12-11', '123', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hang`
--

CREATE TABLE `hang` (
  `ma_hang` int(50) NOT NULL,
  `ten_hang` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `hang`
--

INSERT INTO `hang` (`ma_hang`, `ten_hang`) VALUES
(1, 'Chanel'),
(22, 'Gucci'),
(26, 'Dior'),
(27, 'Versace'),
(28, 'Louis vuitton'),
(29, 'Valentino'),
(30, 'Chanell'),
(31, 'abc');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lien_he`
--

CREATE TABLE `lien_he` (
  `ma_lh` int(11) NOT NULL,
  `ten_kh` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `sdt` int(15) NOT NULL,
  `tieu_de` varchar(255) NOT NULL,
  `noi_dung` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `lien_he`
--

INSERT INTO `lien_he` (`ma_lh`, `ten_kh`, `email`, `sdt`, `tieu_de`, `noi_dung`) VALUES
(7, 'Đỗ Tiến Học', 'babiicuteo@gmail.com', 362002062, 'Học dz123', '123');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `mui_huong`
--

CREATE TABLE `mui_huong` (
  `ma_mh` int(10) NOT NULL,
  `ten_mh` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `mui_huong`
--

INSERT INTO `mui_huong` (`ma_mh`, `ten_mh`) VALUES
(3, 'Hoa hồng'),
(4, 'Hoa nhài'),
(6, 'Cỏ - Aldehyde'),
(7, 'Hương bưởi'),
(8, 'Cam đỏ'),
(9, 'Cam chanh'),
(10, 'Quýt Sicily'),
(11, 'Ngọc lan'),
(12, 'Gỗ đàn hương'),
(13, 'Hương hạnh nhân'),
(14, 'Quýt Italia');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ql_anh`
--

CREATE TABLE `ql_anh` (
  `ma_anh` int(11) NOT NULL,
  `anh` varchar(100) NOT NULL,
  `vai_tro` tinyint(1) NOT NULL,
  `kich_hoat` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `ql_anh`
--

INSERT INTO `ql_anh` (`ma_anh`, `anh`, `vai_tro`, `kich_hoat`) VALUES
(17, '0.jpg', 1, 1),
(19, 'banner-nuoc-hoa-chanel.jpg', 1, 2),
(20, 'gucci-website-banner-1280-x-720.png', 1, 1),
(21, 'chanel-no-5-banner-blogger.jpg', 1, 1),
(22, 'logo3.jpg', 0, 3),
(23, 'logo1.2.jpg', 0, 0),
(28, 'logo3.jpg', 0, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `san_pham`
--

CREATE TABLE `san_pham` (
  `ma_sp` int(11) NOT NULL,
  `ten_sp` varchar(50) NOT NULL,
  `gia_sp` int(11) NOT NULL,
  `ma_hang` int(11) NOT NULL,
  `giam_gia` int(11) DEFAULT 0,
  `gioi_tinh` tinyint(1) NOT NULL,
  `ma_mh` int(11) NOT NULL,
  `size` varchar(10) NOT NULL,
  `anh` varchar(255) NOT NULL,
  `mo_ta` varchar(2000) NOT NULL,
  `ngay_them` date NOT NULL DEFAULT current_timestamp(),
  `so_luot_xem` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `san_pham`
--

INSERT INTO `san_pham` (`ma_sp`, `ten_sp`, `gia_sp`, `ma_hang`, `giam_gia`, `gioi_tinh`, `ma_mh`, `size`, `anh`, `mo_ta`, `ngay_them`, `so_luot_xem`) VALUES
(2, 'N°5', 3400000, 1, 10, 1, 6, '50', 'n5.1.jpg', '<b>Sản phẩm</b> <br> \r\nN°5, mùi hương của người phụ nữ. Đóa hoa rực rỡ và ngát hương hòa quyện cùng nốt aldehyde, gói gọn trong lọ thủy tinh có thiết kế tối giản mang tính biểu tượng. Một mùi hương huyền thoại và bất tận. <br> <br> \r\n<b>Thành phần</b> <br>\r\nEau de Parfum lấy cảm hứng từ hương hoa kết hợp với aldehyde điển hình. Hương hoa là sự hoà quyện hài hoà và tinh tế giữa hoa hồng, hoa nhài và hương cam quýt. Thành phần aldehyde mang đến sự độc đáo, cùng những nốt hương vanilla cho mùi hương thêm nồng nàn, quyến rũ.<br> <br> \r\n<b>Cảm hứng</b> <br>\r\nNăm 1921, Gabrielle Chanel đã yêu cầu Ernest Beaux chế tác nên \"một loại nước hoa dành cho phụ nữ và mang hương thơm như một người phụ nữ\", mãnh liệt và nguyên bản. Những mẫu nước hoa mang mùi hương của sự mê hoặc, lần đầu tiên sử dụng thành phần aldehyde, đã được đưa ra để cô lựa chọn. Mademoiselle quyết định chọn mẫu thứ năm và đặt cho mùi hương này một cái tên đơn giản, N°5. Thiết kế chai độc đáo, dán nhãn trắng trên thân chai và nắp đậy được vát góc như một viên kim cương. Năm 1986, Jacques Polge, Nghệ nhân chế tác nước hoa của CHANEL từ năm 1978 đã điều chế và tạo nên một phiên bản trọn vẹn hơn của N°5: Eau de Parfum.<br> <br> \r\n<b>Nghệ thuật nước hoa</b> <br>\r\nNước hoa Eau de Parfum có thể xịt trực tiếp lên da hay quần áo.\r\nChai dạng xịt tiện lợi nằm gọn trong túi nên có thể đem đến bất kỳ đâu, giúp lưu hương suốt ngày dài.\r\nSử dụng kết hợp với các sản phẩm trong quy trình chăm sóc toàn diện để tăng cường và lưu giữ hương thơm.', '2021-11-20', 126),
(4, 'chanel', 3580000, 1, 0, 1, 4, '50', '4.1.jpg', '<b>Sản phẩm</b> <br> \r\nHương hoa rạng rỡ chứa trong chai thủy tinh hình tròn. Khó đoán biết và luôn vận động, CHANCE cuốn bạn trong vòng xoáy của niềm hạnh phúc và những điều kỳ diệu. Một cuộc gặp gỡ với may mắn và cơ hội.<br> <br> \r\n<b>Thành phần</b> <br>\r\nHương thơm là sự kết hợp giữa hồng tiêu, hoa nhài, và hoắc hương hổ phách. Được đan xen với xạ hương trắng và vanilla, hương thơm của Eau de Parfum tròn trịa và bao bọc hơn…<br> <br> \r\n<b>Cảm hứng</b> <br>\r\nCơ hội đến rồi đi, không bao giờ dừng lại... bạn chỉ có vài giây để nắm bắt cơ hội của mình. Cơ hội khó đoán và chỉ xuất hiện khi bạn ít mong đợi nhất, nhưng nếu bạn quyết tâm, bất cứ điều gì cũng có thể trở thành hiện thực.\r\n\"Khi cơ hội xuất hiện, tôi đã nắm bắt nó.\" Mademoiselle Chanel biết rằng cơ hội luôn hiện hữu, trong những sáng tạo của mình, cũng như trong tâm hồn và trong phong cách sống.<br> <br> \r\n<b>Nghệ thuật nước hoa</b> <br>\r\nSử dụng trực tiếp lên da hay quần áo. \r\nSử dụng kết hợp với các sản phẩm trong quy trình chăm sóc và lưu giữ mùi hương toàn diện để tăng cường và duy trì hương thơm.', '2021-11-26', 117),
(5, 'CHANCE EAU TENDRE', 3390000, 1, 0, 1, 3, '75', '2.1.jpg', '<b>Sản phẩm</b> <br> \r\nMột phiên bản nhẹ nhàng của dòng nước hoa CHANCE với hương thơm tinh tế và nữ tính. Một cơ hội mới để nắm bắt.<br> <br> \r\n<b>Thành phần</b> <br>\r\nMột mùi hương với tâm điểm là tinh chất hoa nhài và hoa hồng. Mang hương hoa và trái cây, sản phẩm là phiên bản trọn vẹn và nhẹ nhàng tôn vinh sự nữ tính.<br> <br> \r\n<b>Cảm hứng</b> <br>\r\nCơ hội đến rồi đi, không bao giờ dừng lại... bạn chỉ có vài giây để nắm bắt cơ hội của mình. Cơ hội khó đoán và chỉ xuất hiện khi bạn ít mong đợi nhất, nhưng nếu bạn quyết tâm, bất cứ điều gì cũng có thể trở thành hiện thực.\r\n\"Khi cơ hội xuất hiện, tôi đã nắm bắt nó.\" Mademoiselle Chanel biết rằng cơ hội luôn hiện hữu, trong những sáng tạo của mình, cũng như trong tâm hồn và trong phong cách sống.<br> <br> \r\n<b>Nghệ thuật nước hoa</b> <br>\r\nSử dụng trực tiếp lên da hay quần áo.', '2021-12-01', 30),
(6, 'CHANCE EAU FRAÎCHE', 3050000, 1, 5, 1, 4, '100', '1.1.jpg', '<b>Sản phẩm</b> <br> \r\nHương hoa rạng rỡ ẩn chứa trong chai thủy tinh dáng tròn tựa như một làn sóng năng lượng cuốn bạn vào vòng xoáy của hạnh phúc và những điều kỳ diệu. Một cuộc gặp gỡ giữa may mắn và cơ hội.<br> <br> \r\n<b>Thành phần</b> <br>\r\nHương hoa rạng rỡ là sự hòa quyện giữa hương quả thanh yên tươi mát và say mê, hương thơm mềm mại của hoa nhài và sự rạng rỡ của gỗ teak, mang đến làn sóng tràn đầy năng lượng.<br> <br> \r\n<b>Cảm hứng</b> <br>\r\nCơ hội đến rồi đi, không bao giờ dừng lại... bạn chỉ có vài giây để nắm bắt cơ hội của mình. Cơ hội khó đoán và chỉ xuất hiện khi bạn ít mong đợi nhất, nhưng nếu bạn quyết tâm, bất cứ điều gì cũng có thể trở thành hiện thực.\r\n\"Khi cơ hội xuất hiện, tôi đã nắm bắt nó.\" Mademoiselle Chanel biết rằng cơ hội luôn hiện hữu, trong những sáng tạo của mình, cũng như trong tâm hồn và trong phong cách sống.<br> <br> \r\n<b>Nghệ thuật nước hoa</b> <br>\r\nSử dụng trực tiếp lên da hay quần áo. \r\nSản phẩm với thiết kế \"TWIST AND SPRAY\" tiện lợi có thể nằm gọn trong túi xách là cách thức lý tưởng để tăng cường hương nước hoa trong suốt ngày dài. Sử dụng kết hợp với các sản phẩm gel tắm và dưỡng thể trong quy trình chăm sóc toàn diện để tăng cường và lưu giữ hương thơm.', '2021-12-01', 44),
(7, 'CHANCE EAU VIVE', 2900000, 1, 0, 1, 7, '100', '3.1.jpg', '<b>Sản phẩm</b> <br> \r\nHương hoa đầy say mê ẩn chứa bên trong chai thủy tinh hình tròn. Một nguồn năng lượng dồi dào cuốn bạn trong vòng xoáy hạnh phúc, mang đến những cuộc gặp gỡ với may mắn và cơ hội.<br> <br> \r\n<b>Thành phần</b> <br>\r\nHương nước hoa đầy say mê với những nốt hương đầu tươi mát của bưởi và cam đỏ, tiếp nối với nét tinh tế và nữ tính của hoa nhài, và cuối cùng hé lộ sự hòa quyện giữa tuyết tùng và diên vĩ trong sự thanh lịch trong trẻo.<br> <br> \r\n<b>Cảm hứng</b> <br>\r\nCơ hội đến rồi đi, không bao giờ dừng lại... bạn chỉ có vài giây để nắm bắt cơ hội của mình. Cơ hội khó đoán và chỉ xuất hiện khi bạn ít mong đợi nhất, nhưng nếu bạn quyết tâm, bất cứ điều gì cũng có thể trở thành hiện thực.\r\n\"Khi cơ hội xuất hiện, tôi đã nắm bắt nó.\" Mademoiselle Chanel biết rằng cơ hội luôn hiện hữu, trong những sáng tạo của mình, cũng như trong tâm hồn và trong phong cách sống.<br> <br> \r\n<b>Nghệ thuật nước hoa</b> <br>\r\nSử dụng nước hoa trực tiếp lên da hoặc quần áo.', '2021-12-01', 3),
(11, 'COCO', 3480000, 1, 0, 1, 9, '50', '6.1.png', '<b>Sản phẩm</b> <br> \r\nCOCO thể hiện cá tính mạnh mẽ của Gabrielle Chanel và niềm đam mê dành cho phong cách baroque của cô. Một mùi hương sang trọng đậm chất phương Đông với những nốt hương tương phản.<br> <br> \r\n<b>Thành phần</b> <br>\r\nMột mùi hương sang trọng với những nốt hương tương phản.\r\nMở đầu với hương cam chanh từ quýt Sicily, sau đó hé lộ lớp hương giữa với tinh chất hoa nhài trên nền hương ngọc lan tây từ vùng Comoros và hoa cam Tunisia. Một sự hoà quyện quyến rũ để lại phía sau mùi hương rực rỡ của hoắc hương Indonesia, đậu tonka và benzoin.<br> <br> \r\n<b>Cảm hứng</b> <br>\r\nGabrielle Chanel đề cao nghệ thuật của sự tương phản. Cô là người đã tạo nên cuộc cách mạng thời trang cho nữ giới, bằng ý niệm về sự giản dị và tinh tế, nhưng cũng đồng thời yêu thích phong cách hoa mỹ kiểu Baroque, thể hiện qua thiết kế căn hộ của mình trên đường Cambon hay bộ sưu tập nữ trang Byzantine. Nước hoa COCO, mùi hương phương Đông gợi nhớ thời quá khứ tráng lệ, được đặt tên theo biệt danh của cô, cũng phần nào hé lộ một khía cạnh vô thường trong tính cách đầy thu hút của người phụ nữ huyền thoại.<br> <br> \r\n<b>Nghệ thuật nước hoa</b> <br>\r\nSử dụng trực tiếp lên da hay quần áo.\r\n\r\nSử dụng kết hợp với các sản phẩm trong chu trình chăm sóc toàn diện để tăng cường và lưu giữ hương thơm.', '2021-12-01', 9),
(12, 'BLEU DE CHANEL', 3640000, 1, 0, 0, 12, '50', '5.1.jpg', '<b>Sản phẩm</b> <br> \r\nKhúc ca tôn vinh sự tự do đầy nam tính được thể hiện trong một mùi hương gỗ thơm quyến rũ và kinh điển, chứa bên trong thiết kế chai màu xanh đầy bí ẩn.\r\nBLEU DE CHANEL Parfum là hương nước hoa hoàn hảo với hương thơm thuần khiết nhưng cũng rất sâu sắc, thể hiện sự nam tính, mạnh mẽ và tự tin.<br> <br> \r\n<b>Thành phần</b> <br>\r\nBLEU DE CHANEL Parfum là mùi hương gỗ nồng nàn và sôi nổi. Khởi đầu với cảm giác tươi mát và khỏe khoắn. Sau đó là nốt hương vương giả của gỗ đàn hương của vùng New Caledonia, mở ra những sắc thái đa dạng và mạnh mẽ trong những tầng hương dày dặn và tinh tế.<br> <br> \r\n<b>Cảm hứng</b> <br>\r\nBLEU DE CHANEL là mùi hương của người đàn ông không bị hòa lẫn hay ràng buộc bởi bất cứ luật lệ nào. Một người đàn ông với tinh thần quyết đoán, độc lập và tự do trong việc quyết định số mệnh của chính mình.<br> <br> \r\n<b>Nghệ thuật nước hoa</b> <br>\r\nCách tối ưu nhất để mùi hương trở nên nồng nàn hơn là sử dụng nước hoa trực tiếp lên da trần, nơi cơ thể ấm nhất (chẳng hạn cổ hoặc cổ tay).\r\nBLEU DE CHANEL có trọn bộ sản phẩm cạo râu và sản phẩm dành cho cơ thể giúp lưu giữ hương thơm trong suốt ngày dài.', '2021-11-24', 18),
(13, 'ALLURE HOMME SPORT', 3550000, 22, 10, 0, 9, '50', '7.1.jpg', '<b>Sản phẩm</b> <br> \r\nMột hương thơm tươi mát và phảng phất mùi gỗ ấm.\r\nSự pha trộn của những nốt hương tươi mát, sống động và gợi cảm gợi lên sức hút của một người đàn ông phóng khoáng.<br> <br> \r\n<b>Thành phần</b> <br>\r\nMột mùi hương tươi mát và gợi cảm. Hương quýt Italia được tôn thêm một cách thanh khiết và mãnh liệt trên nền của tuyết tùng. Hương hạnh nhân gợi cảm của đậu tonka Venezuela kết hợp cùng những nốt hương bao bọc của xạ hương trắng, mở ra một sự sâu thẳm và mãnh liệt.<br> <br> \r\n<b>Cảm hứng</b> <br>\r\nAllure đại diện cho cách thể hiện cá tính và quan điểm sống riêng của từng cá nhân. Một mùi hương của sự khác biệt, độc đáo và khó nắm bắt.\r\nALLURE HOMME SPORT thể hiện sức hút của một người đàn ông yêu thích sự thử thách.<br> <br> \r\n<b>Nghệ thuật nước hoa</b> <br>\r\nEau de Toilette dạng xịt có thể sử dụng nhiều lần, trên da hay quần áo. Sử dụng kết hợp với các sản phẩm cạo râu và dưỡng thể trong quy trình chăm sóc toàn diện để tăng cường hương thơm của ALLURE HOMME.', '2021-11-30', 14),
(15, 'Valentina Rosa Assoluto EDP', 1950000, 29, 0, 1, 3, '50', 'Valentino.1.jpg', 'Nước Hoa Nữ Valentina Rosa Assoluto EDP là hương nước hoa đến từ thương hiệu Valentino. Bằng sự thanh khiết, nhẹ nhàng, Valentino Valentina ghi điểm với các quý cô trẻ tuổi.<br>\r\n<b>Lịch sử nước hoa Valentino Valentina</b><br><br>\r\nValentina ra mắt lần đầu vào năm 2011 với cảm hứng của những loài hoa trắng. Một năm sau, Valentina ra đời những phiên bản tiếp nối mang phong cách sang trọng hơn mang tên Valentina Rosa Assoluto với hương hoa làm chủ đạo, quyến rũ và ấm áp hơn phiên bản cũ. Bộ sưu tập được mở rộng với các phiên bản mới được giới thiệu vào năm 2013, trong đó, Valentina Assoluto Rosa đã được đưa ra vào năm 2014. Với cảm hứng được lấy từ Phương Đông huyền bí – vùng đất mà các nhà thiết kế nước hoa coi là thánh địa, Valentina Rosa Assoluto được được miêu tả như một hành trình bí ẩn đầy màu sắc.<br>\r\n<b>Thiết kế chai nước hoa Valentino Valentina</b><br><br>\r\nPhiên bản mang đậm phong cách phương Đông với thiết giống các sản phẩm trước của nước hoa được tôn tạo bởi bông hoa và mặc chiếc áo màu tím quyến rũ gợi lên cảm xúc của cuộc hành trình bí ẩn. <br>\r\n<b>Mùi hương chai nước hoa Valentino Valentina</b><br>\r\nVẫn với hương thơm cổ điển Phương Đông là tâm điểm của sự chú ý và cảm hứng của các nhà thiết kế. Chai nước hoa mới được khoát mộc chiếc áo quyến rũ tím và được trang trí bằng một bông hoa lớn màu tím. \"Valentina Rosa Assoluto xứng đáng là mùi hương đầy quyền lực”. Đây chính là nhận xét của những chuyên gia nước hoa về siêu phẩm nước hoa của hãng Valetino.<br>\r\n\r\n<b>Mùi hương đặc trưng:</b><br><br>\r\n\r\nHương đầu: Hoa hồng, quả mâm xôi, nghệ tây\r\nHương giữa: Hoa hồng Bungari, nụ hồng, hoa cam\r\nHương cuối: Hoắc hương, gỗ\r\n\r\n\r\n\r\n', '2021-12-01', 18),
(16, 'Dior Miss Dior Blooming', 2590000, 26, 0, 1, 11, '50', 'dior.1.jpg', 'Nước hoa Dior Blooming Bouquet EDT là chai nước hoa nữ sở hữu mùi hương mang đậm nét hoa cỏ và thể hiện niềm say mê bất tận với vẻ đẹp vượt thời gian và sự chau chuốt thanh lịch tựa như những ngày tuyệt đẹp đầu xuân.<br>\r\n<b>Lịch sử nước hoa Miss Dior Blooming Bouquet EDT</b><br><br>\r\nPhiên bản mới của dòng Miss Dior chính là Dior Blooming Bouquet được ra mắt vào đầu năm 2014, cha đẻ của nó là chuyên gia Francois Demachy. Chai nước hoa Dior mang trong mình hỗn hợp mùi hương hoa cỏ tươm tất và thanh lịch tựa như những ngày tuyệt đẹp đầu xuân.<br>\r\nTác giả của Miss Dior Blooming Bouquet đã tạo ra một loại nước hoa có hương thơm mang đến sự nổi bật tột cùng trong sự tinh tế tráng lệ. Miss Dior Blooming Bouquet EDT truyền đến cảm hứng về một tình yêu đặc biệt và vui tươi. Cô ấy là biểu tượng cho niềm vui sống tự nhiên của phụ nữ trẻ ngày nay.<br>\r\n<b>Thiết kế Miss Dior Blooming Bouquet</b>>br><br>\r\nMẫu chai nước hoa Miss Dior Blooming Bouquet EDT có hình dạng tương tự như đàn anh Miss Dior nổi tiếng là một hình chữ nhật nhỏ gọn, đơn giản và được trang trí bằng một dải ruy băng màu bạc. Hình dáng thiết kế Blooming Bouquet trong suốt với dung dịch nước hoa màu hồng tươi tắn như tô điểm cho sự nữ tính và dịu dàng.<br>\r\n<b>Hương thơm say đắm lòng người Miss Dior Blooming Bouquet</b><br>\r\nMiss Dior Blooming Bouquet truyền đến cảm hứng về một tình yêu đặc biệt và vui tươi. Hương thơm đại diện cho sự tự do và quyến rũ, đặc trưng bởi một sự duyên dáng và khả năng làm say đắm lòng người.\r\n\r\nVới tâm điểm là hương hoa mẫu đơn được cải tiến công thức và hình thành với hương hoa hồng sống động, nó làm nổi bật vẻ lộng lẫy vô tận với sự mượt mà và sắc thái ngon ngọt cùng với hoa đào và hoa mai. Tổng thể mùi hương nước hoa mang đậm nét hoa cỏ và thể hiện niềm say mê bất tận với vẻ đẹp vượt thời gian và sự chau chuốt.\r\n\r\n<br>\r\n\r\n<b>Mùi hương đặc trưng:</b><br><br>\r\n\r\nHương Đầu: Quả quýt hồng Sicili\r\nHương giữa: Hoa mẫu đơn hồng, Hoa hồng Đan Mạch, Quả mơ, Quả đào\r\nHương cuối: Xạ hương t', '2021-12-01', 0),
(19, '123', 123, 1, 0, 0, 3, '50', 'versace.jpg', '123', '2021-12-12', 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tai_khoan`
--

CREATE TABLE `tai_khoan` (
  `ma_tk` int(11) NOT NULL,
  `ten_tk` varchar(20) NOT NULL,
  `ho_ten` varchar(20) NOT NULL,
  `mat_khau` varchar(20) NOT NULL,
  `sdt` int(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  `anh` varchar(255) NOT NULL,
  `vai_tro` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tai_khoan`
--

INSERT INTO `tai_khoan` (`ma_tk`, `ten_tk`, `ho_ten`, `mat_khau`, `sdt`, `email`, `anh`, `vai_tro`) VALUES
(17, 'admin     ', 'Đỗ Tiến Học     ', '123', 362002062, 'hocdtph14606@fpt.edu.vn    ', 'logo3.jpg', 2),
(27, 'nhanVien', '123', '123', 362002062, 'abc@gmail.com', 'versace.jpg', 1),
(31, 'khachHang', 'Đỗ Tiến Học', '123', 362002062, 'abc@gmail.com', 'versace.jpg', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD PRIMARY KEY (`ma_bl`);

--
-- Chỉ mục cho bảng `chi_tiet_don_hang`
--
ALTER TABLE `chi_tiet_don_hang`
  ADD PRIMARY KEY (`ma_ct`);

--
-- Chỉ mục cho bảng `don_hang`
--
ALTER TABLE `don_hang`
  ADD PRIMARY KEY (`ma_dh`);

--
-- Chỉ mục cho bảng `hang`
--
ALTER TABLE `hang`
  ADD PRIMARY KEY (`ma_hang`);

--
-- Chỉ mục cho bảng `lien_he`
--
ALTER TABLE `lien_he`
  ADD PRIMARY KEY (`ma_lh`);

--
-- Chỉ mục cho bảng `mui_huong`
--
ALTER TABLE `mui_huong`
  ADD PRIMARY KEY (`ma_mh`);

--
-- Chỉ mục cho bảng `ql_anh`
--
ALTER TABLE `ql_anh`
  ADD PRIMARY KEY (`ma_anh`);

--
-- Chỉ mục cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  ADD PRIMARY KEY (`ma_sp`);

--
-- Chỉ mục cho bảng `tai_khoan`
--
ALTER TABLE `tai_khoan`
  ADD PRIMARY KEY (`ma_tk`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  MODIFY `ma_bl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT cho bảng `chi_tiet_don_hang`
--
ALTER TABLE `chi_tiet_don_hang`
  MODIFY `ma_ct` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT cho bảng `don_hang`
--
ALTER TABLE `don_hang`
  MODIFY `ma_dh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT cho bảng `hang`
--
ALTER TABLE `hang`
  MODIFY `ma_hang` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT cho bảng `lien_he`
--
ALTER TABLE `lien_he`
  MODIFY `ma_lh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `mui_huong`
--
ALTER TABLE `mui_huong`
  MODIFY `ma_mh` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `ql_anh`
--
ALTER TABLE `ql_anh`
  MODIFY `ma_anh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  MODIFY `ma_sp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `tai_khoan`
--
ALTER TABLE `tai_khoan`
  MODIFY `ma_tk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

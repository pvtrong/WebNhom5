-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 21, 2020 lúc 02:39 AM
-- Phiên bản máy phục vụ: 10.4.13-MariaDB
-- Phiên bản PHP: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `webn5`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(200) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`, `name`, `address`, `created_at`, `updated_at`) VALUES
(1, 'trong@gmail.com', '$2y$10$Dp1reWl.S..F.99BqHj8dOuJUJkNJyW6aFY6XRAfrOmpvbyntsXXm', 'Trọng', '123 Xuân Thuỷ', '2020-07-30 06:37:13', '2020-07-30 06:37:13'),
(2, 'admin1@gmail.com', '$2y$10$aC5DZ3Yk68Z6KiaJR9njEuxFMgC.8tZV9FX9XmwYEN8i/YcBIn34u', 'admin1', 'Nam Dinh', '2020-08-01 01:29:56', '2020-08-01 01:29:56');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `blog`
--

CREATE TABLE `blog` (
  `id_blog` int(11) NOT NULL,
  `content` text DEFAULT NULL,
  `id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `title` varchar(200) NOT NULL,
  `Hinh` text DEFAULT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `blog`
--

INSERT INTO `blog` (`id_blog`, `content`, `id`, `created_at`, `updated_at`, `title`, `Hinh`, `description`) VALUES
(0, 'Get link Fshare hay Leech link Fshare được hiểu là một công cụ giúp cho bạn có thể tải những bộ phim, phần mềm hay những game có dung lượng với tốc độ cao khi được lưu trữ trên Fshare (một trong những trang cho phép lưu trữ tài liệu online lớn tại Việt Nam). Sử dụng get link giúp cho quá trình tải các tập tin có dung lượng lớn về nhanh hơn và không tốn quá nhiều thời gian của bạn.\r\nNếu như bạn đang vẫn chưa tìm được trang nào phù hợp cho nhu cầu này, bạn đang ở đúng nơi rồi đấy. Trong bài viết này, Blog Kiến Thức sẽ giới thiệu một số trang Website hỗ trợ Get Link Fshare hoặc Leech Link tốt nhất hiện nay mà bạn có thể tham khảo và sử dụng.\r\n\r\n1 Vì sao phải Get Link Fshare\r\n2 List website cho get link fshare mới nhất\r\n3 Cách get link Fshare đơn giản\r\n3.1 Cách 1: Getlink fshare tại mylinksite\r\n3.2 Cách 2: Leech link Fshare với Linksvip\r\n4 Lời kết\r\nVì sao phải Get Link Fshare\r\nHiện nay Fshare là một trong những kho lưu trữ file khổng lồ tại Việt Nam. Sự Uy tín và chất lượng của Fshare làm cho nó luôn là nơi lựa chọn để lưu trữ dữ liệu của các Uploader hiện nay. Nhưng có một nhược điểm khi dùng Fshare. Đó chính là Fshare chỉ cho phép chúng ta tải tốc độ cao các file có dung lượng nhỏ mà thôi.\r\n\r\nĐối với các file dụng lượng lớn trên 1Gb như các file Ghost máy tính, ISO Windows hay các file cài đặt Offfice, các game offline có cấu hình cao… Thì chúng ta không thể tải với tốc độ cao. Mà bắt buộc chúng ta phải mua tài khoản VIP để có thể tải không giới hạn băng thông.\r\n\r\nChính vì thế, trong bài viết ngày, mình sẽ hướng dẫn các bạn cách get link Fshare. Hay còn gọi với cái tên khác đó là Leech Link Fshare. Giúp các bạn có thể tải file dung lượng lớn tốc độ cao miễn phí. Và ngay sau đây là chi tiết xin mời các bạn cùng theo dõi nhé.\r\n\r\nList website cho get link fshare mới nhất\r\nĐầu tiên mình sẽ giới thiệu tới các bạn list website cho phép các bạn có thể get link fshare. Đây là danh sách các website mà mình thường sử dụng để get link fshare.\r\n\r\nTheo như mình đánh giá thì các website có chất lượng khá tốt. Get link rất chuẩn và tải tốc độ cao. Và dưới đây là danh sách các website get link fshare các bạn có thể tham khảo:\r\n\r\nhttps://mylinksite.com/\r\ngetlinkfshare.com\r\nlinksvip.net\r\ngetlinkpro.net\r\ntools.sinhvienit.net/getlinkfshare\r\nhvnlinks.net\r\ngetlinkmaxspeed.com\r\nVà để giúp những bạn chưa biết cách getlink fshare như thế nào? Thì ngay sau đây mình sẽ hướng dẫn ví dụ cách get link fshare ở một website mà mình thường sử dụng nhé.\r\n\r\nCách get link Fshare đơn giản\r\nĐể giúp các bạn có thể dễ dàng get link fshare hơn. Thì ngay sau đây mình sẽ hướng dẫn demo cho các bạn cách get link fshare mà mình hay dùng nhất.\r\n\r\nMình thì thường xuyên sử dụng get link fshare tại web https://mylinksite.com/ và linksvip.net đây là một web có tốc độ get link khá là nhanh. Và mình cũng khá là ưng ý. Nhược điểm một chút là dạo này gần đây site này có gắn rút gọn link và link get. Nên cũng có chút hơi phiền. Nhưng không sao, ngay sau đây mình sẽ hướng dẫn chi tiết nhé!\r\n\r\nCách 1: Getlink fshare tại mylinksite\r\nĐầu tiên mình sẽ hướng dẫn các bạn cách getlink Fshare và 4share tại Mylinksite.com. Theo mình đánh giá thì mylinksite.com hoạt động khá ổn định và ít quảng cáo nhất. Để thực hiện getlink và leech link fshare 4share như sau:\r\n\r\nBước 1: Đầu tiên các bạn truy cập vào website https://mylinksite.com/ chúng ta sẽ có giao diện như sau:\r\n\r\n\r\n\r\nBước 2: Tại đây các bạn tiến hành nhập link Fshare cần get vào ô trống và nhấn Get link như hình sau:\r\n\r\n\r\n\r\nBước 3: Sau khi các bạn nhấn nút Getlink xong thì hệ thống sẽ tự động getlink và hiện thị nút Download Link ở ngay bên dưới. Tại đây các bạn nhấn vào nút Download Link để chuyển sang page download file nhé.\r\n\r\nBước 4: Cuối cùng tại đây các bạn nhấn vào nút Download để tải file về máy tính hoặc điện thoại của mình nhé. Các bạn nên kết hợp với phần mềm IDM để tăng tốc độ tải cao hơn nữa nhé.\r\n\r\n\r\n\r\nCách 2: Leech link Fshare với Linksvip\r\nNgoài mylinksite.com thì linksvip cũng cho phép chúng ta getlink fshare cũng khá ổn. Nhưng hiện nay thì tại linksvip khá nhiều quảng cáo gây ra cảm giác khó chịu khi tải file. Nhưng nếu các bạn muốn getlink fshare bằng linksvip thì các bạn có thể làm theo hướng dẫn sau đây:\r\n\r\nBước 1: Đầu tiên các bạn truy cập vào website linksvip.net chúng ta sẽ được giao diện như sau:\r\n\r\n\r\n\r\nBước 2: Tại giao diện trang chủ, các bạn tiến hành nhập link fshare cần get vào. Hệ thống sẽ tự động get link tốc độ cao về. Và các bạn nhấn vào nút Tải Xuống để tải file!\r\n\r\n\r\n\r\nBước 3: Sau khi các bạn nhấn vào nút Tải Xuống, bạn sẽ được chuyển qua 1 trang rút gọn link. Tại đây các bạn cứ chọn vào mục captcha rồi đợi 10 giây rồi tải xuống nhé.\r\n\r\n\r\n\r\nSau khi đợi xong, các bạn sẽ lấy được link get tốc độ cao như hình sau. Công việc của các bạn giờ là nhấn vào nút Download Now để tải file với link tốc độ cao thôi.\r\n\r\nLinksvip> là một trang get link khá phổ biến hiện nay và rất được nhiều người ưa chuộng bởi việc get link với tốc độ cao và hoàn toàn miễn phí (bạn cũng có thể ủng hộ bằng cách nạp phí), có thể get link Fshare, Tenlua, 4share, tailieu.vn, v.v…\r\n\r\nNgoài ra với Linkvip bạn còn có thể đăng ký các dịch vụ rút gọn link và kiếm tiền từ Linkvip nữa nhé.\r\n\r\nLời kết\r\nNhư vậy trên đây Blog Kiến Thức đã chia sẻ với các bạn danh sách website get link fshare tốc độ cao. Cũng như hướng dẫn các bạn cách get link fshare đầy đủ và chi tiết nhất rồi.\r\n\r\nHi vọng với những thông tin chi tiết và hữu ích này. Sẽ giúp cho các bạn có thể tải và get link fshare một cách nhanh chóng. Chúc các bạn thành công! Đừng quên nhấn like và share để ủng hộ Blog Kiến Thức nhé các bạn!\r\n\r\n', 18021290, '2020-08-03 05:42:40', '2020-08-03 05:42:40', 'Cách Get Link Fshare – Leech Link Fshare nhanh và mới nhất', NULL, NULL),
(1, 'Tổng quan về Nitro Pro 10\r\nNitro Pro 10 là một ứng dụng rất tiện dụng, có thể được sử dụng để tạo, chỉnh sửa và chuyển đổi các tệp PDF dễ dàng với một chương trình rất trực quan cho phép người dùng trích xuất văn bản từ PDF một cách chính xác. Ứng dụng này là năng suất như nhau cho người mới và các chuyên gia.\r\n\r\nNitro Pro 10  đã có giao diện người dùng dễ nhìn và dễ nhìn, khá giống với bộ MS Office. Các nhà phát triển cũng đã đưa ra một màn hình trợ giúp sẽ bật ra mỗi khi bạn mở giao diện, do đó cung cấp cho bạn tùy chọn để tìm hiểu thêm về các công cụ chỉ bằng một cú nhấp chuột. Với ứng dụng này, bạn có thể dễ dàng tạo các tệp PDF mới từ bất kỳ định dạng tài liệu nào và cũng có thể thêm nhận xét vào tệp PDF.\r\n\r\nBạn cũng có thể xuất văn bản hoặc toàn bộ tài liệu sang định dạng tài liệu khác. Bạn cũng có thể chèn hình ảnh, liên kết và trang vào tệp PDF cộng với bạn cũng có thể thêm chữ ký và mẫu thiết kế. Về một kết luận cuối cùng, chúng ta có thể nói rằng Nitro Pro Enterprise là một ứng dụng rất tiện dụng có thể được sử dụng để tạo, chỉnh sửa và chuyển đổi các tệp PDF dễ dàng.\r\n\r\nTính năng chính của Nitro Pro 10\r\nTạo và hợp nhất file PDF dễ dàng\r\nVới Nitro Pro 10, bạn sẽ có thể hợp nhất nhiều tệp PDF hoặc tài liệu khác thành một tệp PDF. Nó hỗ trợ hơn 300 định dạng tập tin nên không có hạn chế. Với tính năng này, việc tạo tập tin PDF rất dễ dàng. Bạn cũng có thể tạo tệp PDF trực tiếp từ máy quét hoặc bất kỳ ứng dụng có thể in nào.\r\n\r\nChuyển đổi tập tin PDF dễ dàng\r\nMột lĩnh vực mà nhiều chương trình PDF thất bại là chuyển đổi các tệp PDF. Với Nitro, đây không phải là vấn đề. Người dùng sẽ có thể chuyển đổi các tệp PDF sang và từ Office Word, Excel, PowerPoint và nhiều loại tệp khác.\r\n\r\nCòn gì nữa Tài liệu được chuyển đổi sẽ trông giống như bản gốc với cùng phông chữ, định dạng và hình ảnh. Với plugin Microsoft Outlook, người dùng sẽ có thể chuyển đổi tệp đính kèm email và thậm chí các thư mục thành PDF. Khi chuyển đổi, người dùng có thể chọn chuyển đổi từng trang hoặc một vài trang của tài liệu thành tệp hoặc hình ảnh PDF. Chuyển đổi nhiều tệp PDF thành hình ảnh hoặc tệp Ms Office hiện có thể được thực hiện trong một bước.\r\n\r\nChỉnh sửa tệp PDF chuyên nghiệp\r\nNitro Pro có nhiều tính năng chỉnh sửa mà mọi người có thể sử dụng để chỉnh sửa PDF. Sửa đổi văn bản và hình ảnh là rất dễ dàng và chèn, trích xuất và xoay trang cũng vậy. Bạn cũng sẽ có thể sao chép và dán văn bản vào tài liệu văn phòng. Người dùng sẽ có thể chèn số trang, logo, hình mờ, dấu trang và nhiều thứ khác.\r\n\r\nĐánh số Bates có thể dễ dàng áp dụng trên các tài liệu pháp lý. Một số tập tin như vậy có thể được làm việc trên một đi. Tính năng nhận dạng ký tự quang học trong Nitro sẽ biến văn bản và hình ảnh được quét thành các tệp PDF có thể chỉnh sửa.\r\n\r\nXem lại các tệp PDF với Cộng tác viên\r\nMột số người sẽ có thể xem tệp PDF và thêm nhận xét và ghi chú. Liên kết và tệp đính kèm có thể được thêm vào tài liệu để làm cho nó tương tác trong khi tem có thể được áp dụng giống như dán cao su. So sánh các tài liệu PDF là rất dễ dàng. Sự khác biệt được phân tích nhanh chóng làm cho quá trình xem xét nhanh chóng.\r\n\r\nĐiền, ký vào PDF an toàn\r\nCác hình thức điền được giảm bớt bằng cách tự động phát hiện trong khi Dấu hiệu nhanh cho phép người dùng ký các tệp cho phép chúng và chúng có thể được trả lại sau vài giây. Tìm một từ hoặc cụm từ rất dễ dàng trong Nitro Pro 10. Bạn có thể sử dụng tính năng này để tìm và xóa bất kỳ dữ liệu nhạy cảm nào. Đối với quyền riêng tư, tài liệu có thể được bảo mật bằng mật khẩu và quyền hạn chế. Các tài liệu thậm chí có thể được bảo mật bằng mã hóa Ironclad 256-bit và Microsoft RMS.\r\n\r\nLink Donwload Nitro Pro 10 Full mới nhất\r\nYêu cầu hệ thống\r\nBộ xử lý: 1 GHz hoặc nhanh hơn Bộ xử lý 32 bit hoặc 64 bit\r\nRAM: 500 MB RAM\r\nDung lượng ổ đĩa: 300 MB\r\nHệ điều hành: Windows 10, 8.1, 8 và 7\r\nDưới đây mình cung cấp link cài đặt và chia ra loại là : bản cài đặt và bản portable. Bạn portable là dùng không cần cài đặt. Nhưng nếu bạn nào muốn sử dụng nitro pro 10 lâu dài thì mình khuyên các bạn nên tải và sử dụng bản cài đặt cho ổn định nha.\r\n\r\nNitro Pro 10 bản cài đặt\r\nNitro Pro 10 32 bit\r\nNitro Pro 10 64 bit\r\nNitro Pro 10 Portable\r\nĐối với bản portable thì các bạn không cần active kích hoạt gì hết vì mình đã active bằng key sẵn rồi. Các bạn chỉ cần tải về giải nén và sử dụng thôi nha.\r\n\r\nNitro Pro 10 32 bit Portable\r\nNitro Pro 10 64 bit Portable\r\nLicense Key kích hoạt bản quyền\r\nDưới đây là danh sách key sử dụng để kích hoạt phần mềm Nitro Pro 10 phiên bản cao cấp enterprise. Đây đều là những key mới nhất, chính vì thế thời lượng sử dụng cũng có hạn, ai nhanh tay thì hãy cài và chia sẻ cho bạn bè của mình biết để có thể sử dụng vĩnh viễn.\r\n\r\nNP10D0602513A5477777\r\nNP10DA59C480D8514282\r\nNP10D61C8EEB11372557\r\nNP10D61EFCC4B1351603\r\nNP10D3B57586A5428035\r\nNP10D7DFB07886046101\r\nNP10D0A253E722151530\r\nHướng dẫn cài đặt và kích hoạt Nitro Pro 10\r\nBước 1: Tick chọn vào ô “I accept  the terms the license agreement” sau đó nhấn Install\r\n\r\n\r\n\r\nBước 2: Nhấn Install\r\n\r\n\r\n\r\nBước 3: Nhấn Finish.\r\n\r\n\r\n\r\nBước 4: Nhấn vào nút Acivate Now\r\n\r\n\r\n\r\nBước 5: Nhập License Information\r\n\r\nFirst name: blogkienthuc.net\r\nLast name: blogkienthuc.net\r\nCompany: blogkienthuc.net\r\nSerial number: copy 1 trong 7 key bên trên mà mình cung cấp\r\n\r\n\r\nLời kết\r\nTrên đây là bài viết về phần mềm Nitro Pro 10 mà chúng tôi muốn chia sẻ đến bạn. Qua bài viết có thể đánh giá Nitro Pro 10 là một trong những phần mềm PDF tốt nhất hiện nay. Nitro Pro 10 có đầy đủ tính năng mà cả người dùng cá nhân và doanh nghiệp sẽ thấy hữu ích. Mong rằng bài viết hữu ích đến các bạn!\r\n\r\nNếu bạn còn gặp bất kỳ thắc mắc nào thì có thể bình luận bên dưới bài viết để mình giải đáp cho các bạn. Nếu thấy phiên bản và key mình dùng tốt thì nhớ chia sẻ bài này nhé!', 99990010, '2020-08-04 03:21:01', '2020-08-04 03:21:01', 'Download Nitro Pro 10 Full Key 32/64 bit mới nhất 2020', NULL, NULL),
(2, 'Tổng quan Adobe Illustrator CC 2017 là gì?\r\nAdobe Illustrator CC 2017 (còn gọi là AI) là phần mềm đồ họa vector chuyên nghiệp nhất hiện nay. Adobe Illustrator CC 2017 giúp bạn vẽ các logo, banner, tạp chí… một cách cực kỳ chuyên nghiệp.\r\n\r\nAdobe Illustrator CC 2017 – Tạo ảnh nghệ thuật điểm ảnh hoàn hảo. Vẽ các đường và hình dạng liền mạch thẳng vào lưới pixel. Căn tác phẩm nghệ thuật hiện có với một nhấp chuột duy nhất hoặc bằng cách sử dụng biến đổi đơn giản. Bảo tồn Shapes Live và các góc tròn, duy trì sự liên kết khi mở rộng quy mô và xoay đối tượng, và tự di chuyển phân đoạn và điểm cuối vào liên kết hoàn hảo.​\r\n\r\nNó có rất nhiều công cụ vẽ vector tiện dụng mà bạn có thể sử dụng để tạo ra những kiệt tác. Với phần mềm này, bạn cũng có thể thay đổi kích thước các yếu tố mà không ảnh hưởng đến chất lượng của dự án.\r\n\r\nPhần mềm này có giao diện tương tác rất cao và bạn chắc chắn sẽ thích sự dễ dàng truy cập mà phần mềm này cung cấp. Bạn cũng có thể tạo các cọ vẽ của riêng mình và cũng có thể thêm các hiệu ứng 3D thực sự giúp ích cho các chuyên gia.\r\n\r\nPhần mềm này được tải với công cụ mới nhất cung cấp cho bạn tốc độ nhanh trên các tệp lớn. Tất cả trong tất cả các phần mềm này là thực sự tiện dụng và bạn chắc chắn sẽ thích sử dụng nó.\r\n\r\nCác tính năng mới trong Illustrator CC 2017\r\n– Khởi động nhanh hơn\r\n\r\n– Sử dụng kho Font được đồng bộ hóa\r\n\r\n– Đồng bộ màu sắc với ứng dụng Kule\r\n\r\n– Đồng bộ hóa các tùy chỉnh\r\n\r\n– Chia sẻ cùng với cộng đồng của Behance\r\n\r\n– Tìm kiếm Font chữ nhanh chóng hơn\r\n\r\n– Thay đổi các đối tượng tốt hơn\r\n\r\n– Xuất CSS\r\n\r\n– Đóng gói toàn bộ file làm việc\r\n\r\n– Dùng bất kỳ hình ảnh nào làm Brush\r\n\r\n– Thao tác với hình ảnh được đính kèm\r\n\r\n– Bảng Link Panel trực quan hơn\r\n\r\nYêu cầu về hệ thống của phần mềm Illustrator CC 2017\r\nTrước khi bạn tải xuống Adobe Illustrator 2017 CC, hãy đảm bảo rằng hệ thống của bạn đáp ứng các yêu cầu đã cho.\r\n\r\nHệ điều hành: Windows 7/8 / 8.1 / 10\r\nDung lượng đĩa cứng miễn phí: Cần 2 GB dung lượng đĩa trống tối thiểu\r\nBộ nhớ đã cài đặt: Yêu cầu tối thiểu 1 GB RAM\r\nBộ xử lý: Intel Pentium 4 trở lên\r\nĐộ phân giải: 1280×800 hoặc cao hơn\r\nĐồ họa: OpenGL 2.0 – 512 MB VRAM\r\nLink Download Adobe Illustrator CC 2017 Full\r\nAdobe Illustrator CC 2017 – Link Fshare: https://www.fshare.vn/file/9G8GC48JQURZ\r\n\r\nFile Cr@ck adobe.snr.patch.v2.0-painter: https://files.pw/mrwa8riddax9\r\n\r\nHướng dẫn cài đặt Illustrator CC 2017\r\nTrước khi tải về, bạn cần tắt các phần mềm diệt virut và Windows Defender của hệ điều hành đi nhé.\r\n\r\nBước 1: Tải tất cả các phần mềm cần thiết bao gồm:\r\n\r\nFile Cài đặt Adobe illustrator CC 2017\r\nFile Cr@ck\r\nBước 2: Giải nén file cài đặt Adobe illustrator CC 2017 bằng winRAR\r\n\r\nBước 3:  Tắt kết nối internet trên máy tính\r\n\r\nBước 4: Vào thư mục vừa giải nén, chạy file setup.exe để cài đặt\r\n\r\n\r\n\r\nBước 5: Nhấn Sign In Later\r\n\r\n\r\n\r\nBước 6: Nhấn Start Trial\r\n\r\n\r\n\r\nBước 7: Chọn Accept\r\n\r\n\r\n\r\nHướng dẫn C@ck Illustrator CC 2017\r\nBước 1: Giải nén file Cr@ck, vào thư mục vừa giải nén chạy file crack\r\n\r\n\r\n\r\nBước 2: Chọn đúng phiên bản Adobe illustrator CC 2017, Sau đó, nhấn nút Install\r\n\r\n\r\n\r\nBước 3: Lúc này phần mềm yêu cầu bạn chọn đến nơi chứa file amtlib.dll. Các bạn truy cập vào đường dẫn sau\r\n\r\n64bit: C:\\Program Files\\Adobe\\Adobe Illustrator CC 2017\\Support Files\\Contents\\Windows\r\n32bit: C:\\Program Files (x86)\\Adobe\\Adobe Illustrator CC 2017 (32 Bit)\\Support Files\\Contents\\Windows\r\n\r\n\r\nTìm đến file amtlib.dll và nhấn Open.\r\n\r\nBước 4: Nếu hiện ra như hình dưới đây, thì bạn đã cr!!ck thành công rồi. Sau đó bạn tắt phần mềm cr!!ck, khởi động Ai cc 2017 lên sử dụng.\r\n\r\n\r\n\r\nLời kết\r\nTrên đây là bài viết của Blog Kiến Thức chia sẻ về link download Illustrator CC 2017 và cách cài đặt + Cr@ck chi tiết. Hy vọng bài viết giúp ích được cho các bạn. Cảm ơn mọi người đã quan tâm và ủng hộ chúng tôi. Đừng quên để lại một đánh giá để admin có động lực làm tiếp những serial tiếp theo.', 99990008, '2020-08-04 03:21:01', '2020-08-04 03:21:01', 'Download Adobe Illustrator CC 2017 Full Crack mới nhất 2020', NULL, NULL),
(1234562, 'Tổng quan về KMPlayer là gì\r\nKMPlayer hay còn được người dùng gọi tắt là KMP là một trong những phần mềm hỗ trợ người dùng tốt nhất hiện nay nhờ giao diện đơn giản đẹp mắt cùng khả năng tùy biến cao. Phần mềm cho phép người dùng mở hầu như tất cả các định dạng file video, audio thông dụng hiện nay.\r\n\r\nVới tốc độ truy xuất khá nhanh, đặc biệt có chế độ điều khiển linh hoạt khi xem phim nghe nhạc như tự động tạo danh sách video có tên tương tự khi người dùng mở 1 file bất kỳ trong danh sách video đó.\r\n\r\nBên cạnh đó, phần mềm còn cho phép người dùng tùy chỉnh kênh âm thanh đầu ra trên laptop, điều chỉnh tốc độ chạy video, audio, điều khiển màn hình hiển thị tỉ lệ video phù hợp với nhiều loại màn hình khác nhau.\r\n\r\nKMPlayer có cấu trúc thuật toán xử lý rất tốt, các video có độ phân giải cao đều được hiển thị một cách chi tiết. Người dùng không cần quá lo lắng khi quyết định chọn KMPlayer là phần mềm xem phim nghe nhạc hay xem tivi mặc định trên máy tính cá nhân đang sử dụng. Thay thế hoàn hảo cho phần mềm Windows Media Player mặc định với khả năng mở định dạng file bị hạn chế.\r\n\r\nƯu điểm của phần mềm KMPlayer\r\nKMPlayer có nhiều ưu điểm đặc biệt mà các phần mềm khác không có như: Hỗ trợ phát video, nghe nhạc chất lượng cao, chụp ảnh màn hình độc đáo ngay cả khi video đang phát.\r\n\r\nHỗ trợ bộ thư viện codec đa dạng nên không có một định dạng nào làm khó được  KMPlayer. Ngoài ra, phần mềm còn cho phép người dùng xem video ở chế độ 3D, thay đổi tùy chọn các thông số của trình phát video như âm thành và  hình ảnh.\r\n\r\nCác dạng file mà phần mềm hỗ trợ\r\nKhi nhắc tới phần mềm nghe nhạc xem phim KMPlayer là nhắc tới khả năng xử lý video, audio mạnh mẽ nó có thể chạy được tất cả các định dạng phổ biến hiện nay như MP4, M4A, M4V, 3GP, 3G2, MPEG-4, MPEG-4, MP3, WAV…\r\n\r\nKMPlayer có giao diện người dùng được thiết kế tỉ mỉ chỉn chu và rất đẹp mắt hay sự đa dạng và phong phú về ngôn ngữ người dùng cũng là một trong những điểm nhấn quan trong giúp nó trở nên nổi bật hơn so với các phần mềm cùng loại\r\n\r\nHiện khi tải KMPlayer người dùng có thể lựa chọn Tiếng Việt rất tiện dụng không giống như nhiều phần mềm nghe nhạc xem phim khác khi họ chỉ cung cấp cho người dùng một vài ngôn ngữ trong đó tiếng Anh là cơ bản.\r\n\r\nCác tính năng chính của KMPlayer\r\nKMPlayer là chương trình đa chức năng, vừa là cho phép bạn xem Video, vừa được hỗ trợ để trở thành một chương trình chơi nhạc tốt nhất với đầy đủ chức năng playback VCD/DVD.\r\n\r\nPhát video, nghe nhạc chất lượng cao\r\nKMPlayer hỗ trợ phát hầu hết các định dạng video chất lượng HD bao gồm: AVI, MKV, RM, RMVB, FLV, MP4, MPEG-1, MPEG-2, MPEG-4, WMV, RealMedia, QuickTime, Ogg Theora, OGM, 3GP, MOV, ASF, SWF…\r\n\r\nCác định dạng âm thanh cũng được KMPlayer hỗ trợ nhiều: AC3, DTS, AAC, WMA 7, 8, OGG, MP3, MP2, WMA, FLAC, M4A\r\n\r\nChụp ảnh màn hình độc đáo\r\nLưu lại các cảnh quay, cảm xúc của nhân vật, khung cảnh trong video một cách chân thực và sống động\r\n\r\nHỗ trợ các bộ giải mã codec\r\nTự động nhận dạng codec khác nhau để phát video, âm thanh ngay lập tức. Thay vì phải đi tìm kiếm các bộ giải mã codec trên internet như một số phần mềm khác\r\n\r\nHỗ trợ xem dưới chế độ 3D\r\nĐây chính là tính năng đặc biệt của KMP, chế độ 3D giúp người xem có thể tận hưởng các bộ phim 3D, những cảnh quay dưới dạng 3D đẹp mắt\r\n\r\nThay đổi tùy chọn các thông số của chương trình khi phát video, âm thanh\r\nTùy chỉnh chế độ xem màn hình video với các phần trăm tương ứng 100%, 200% … Tùy chỉnh các mẫu tần số, bitrate kênh âm thanh, âm lượng\r\n\r\nXem video AVI đã bị lỗi\r\nTrên nhiều chương trình khác, việc file AVI với dung lượng lớn thường bị lỗi và không xử lý được, nhưng nếu bạn tải kmplayer, thì đó là chuyện nhỏ, chương trình vẫn phát video AVI một cách bình thường và bỏ qua các phần bị lỗi.\r\n\r\nHướng dẫn tải KMPlayer mới nhất cho máy tính\r\nĐể tải kmplay mới nhất cho máy tính, người dùng mở 1 trình duyệt bất kỳ và click vào đường dẫn sau để tải KMP mới nhất.\r\n\r\nLink download từ trang chủ: http://en.kmplayer.com/\r\n\r\nDown về các bạn cài đặt bình thưởng như các phần mềm khác là xong\r\n\r\nHướng dẫn sử dụng KMP chi tiết\r\nXem video 3D trên KMPlayer\r\nBước 1: Sau khi cài đặt trên máy tính, mở KMPlayer lên và mở Video yêu thích muốn xem\r\n\r\nBước 2: Để chuyển sang chế độ xem 3D click chuột vào biểu tượng 3D góc trái phía dưới giao diện chính của phần mềm KMPlayer, ngay lập tức Video đang phát được chuyển sang chế độ 3D cho bạn thưởng thức.\r\n\r\nBước 3: Điều chỉnh các thông số\r\n\r\nNhấn chuột phải vào màn hình Video đang xem và chọn 3D Screen Controls và tùy chỉnh các thông số\r\n\r\nRất hay phải không khi download KMPlayer là bạn có thể xem các bộ phim 3D mình yêu thích mà không cần đến các phần xem phim 3D trả phí rồi.\r\n\r\nCách Loại bỏ quảng cáo trên KMPlayer\r\nBước 1: Mở file Host bằng Notepad (bạn có thể tham khảo trong bài viết sửa file Host).\r\n\r\nBước 2: Thêm dòng địa chỉ 127.0.0.1 player.kmpmedia.net ở cuối file Host và lưu lại\r\n\r\nBước 3: Khởi động lại KMPlayer là xong\r\n\r\nSau khi đã thực hiện đầy đủ các thao tác trên, bạn có thể sử dụng KMPlayer để xem và nghe nhạc như trước mà không gặp bất kì phiền toái nào từ những mẫu quảng cáo khó chịu.\r\n\r\nKhắc phục lỗi không mở được file MP4, FLV trên KMPlayer\r\nCách 1:\r\nSau khi cài KMPlayer, nếu tiện ích vẫn không thể mở được những file Video có định dạng MP4, FLV thì chắc hẳn máy tính của bạn đã thiếu bộ codec Video để chạy những Video này.\r\n\r\n– Cài đặt phần mềm K Lite Mega Codec Pack\r\n\r\nCách 2:\r\nSử dụng KMPlayer để xem các file MP4, FLV trực tiếp trên Internet, click hoạt Script Active X của Windows bằng cách:\r\n\r\n– Click MenuStart (góc trái màn hình) —> Gõ từ khóa Internet Options vào mục Search Programs and File để mở Internet Options.\r\n\r\n– Từ của sổ Internet Options di chuyển tới Tab Security rồi click Custom Level\r\n\r\n– Tìm đến mục Script ActiveX controls marked safe for scripting, click chọn Enable cho toàn bộ các mục con trong hộp thoại này.\r\n\r\nSau khi hoàn thành thiết lập, click OK để đóng lại cửa sổ này.\r\n\r\nBạn hãy gỡ phần mềm Adobe Flash Player đã có sẵn trên máy tính và download, cài đặt lại tiện ích Adobe Flash Player phiên bản mới để tránh gặp lỗi.\r\n\r\nLời kết\r\nTrên đây là bài viết chia sẻ link download phần mềm KMP mới nhất + hướng dẫn giúp bạn sử dụng chi tiết. Hy vọng bài viết giúp ích được bạn. Chúc bạn thành công và đừng quên thường xuyên theo dõi Blog Kiến Thức để có được nhiều phần mềm hữu ích nhé.\r\n\r\nKMP được xem là một thay thế hoàn hảo cho trình nghe nhạc xem phim mặc định Windows Media Player nhờ chất lượng âm thanh và hình ảnh rõ ràng là vượt trội hơn. Tuy nhiên, cho đến nay nhiều người vẫn trung thành với Windows Media Player nhờ dễ dàng trong cách sử dụng và điều khiển.\r\n\r\nNgoài ra, VLC cũng là một phần mềm xem phim nổi tiếng ra đời từ khá lâu và ngày càng hoàn thiện về chức năng, hãy Download VLC để khám phá những tính năng thú vị từ phần mềm giải trí này.', 18020006, '2020-08-04 03:25:12', '2020-08-04 03:25:12', 'Download KMPlayer mới nhất hiện nay + Hướng dẫn sử dụng', NULL, NULL),
(1234563, 'Driver Easy Pro là gì\r\nDriver Easy là phần mềm tự động tìm kiếm và cài đặt Driver cho máy tính PC, Laptop nhanh chóng mà không cần nhiều kinh nghiệm. Được đánh giá là một trong những phần mềm hỗ trợ tìm kiếm và tự động cài đặt Driver mới nhất cho máy tính tốt nhất, và được người dùng trên toàn cầu tin tưởng sử dụng.\r\n\r\nVới Driver Easy, bạn có thể dễ dàng tìm kiếm driver và cập nhật cho máy tính với 1 vài cú click chuột đơn giản là máy tính của bạn đã được cài đặt đầy đủ driver mới nhất cho thiết bị phần cứng trên máy tình bàn, laptop mới nhất hiện nay.\r\n\r\nKey Driver Easy Pro là gì\r\nKey Driver Easy Pro là một dãy số và chữ có 25 kí tự, được tạo ra để kích hoạt bản quyền bản cao cấp nhất của phần mềm Driver Easy. So với các phiên bản Free thì Driver Easy Pro được nâng cấp lên rất nhiều\r\n\r\nTính năng chính của Driver Easy Pro\r\nTự động tìm kiếm, và cài đặt driver.\r\nTìm kiếm, xác định các Driver bị thiếu và driver lỗi thời.\r\nTự động cập nhật driver mới nhất.\r\nHỗ trợ hơn 8.000.000 Driver mới nhất cho phần cứng của hãng máy tính khác nhau.\r\nSao lưu, phục hồi các Driver.\r\nTùy chọn gỡ bỏ cài đặt của Driver.\r\nCho phép người dùng xem thông tin của hệ thống máy tính, hệ điều hành, bộ nhớ RAM…\r\nCấu hình yêu cầu để cài đặt phần mềm\r\nHỗ trợ Windows XP/7/8/8.1/10 ( 32-bit & 64-bit)\r\nChip xử lý: Pentium III hoặc cao hơn.\r\nRAM: 128MB trở lên.\r\nKhông gian ổ đĩa trống: 25MB.\r\nYêu cầu cài đặt .Net Framework 2.0.\r\nYêu cầu kết nối Internet.\r\nLink tải Driver Easy mới nhất\r\nLink từ trang chủ: https://www.drivereasy.com/\r\n\r\nCách thức hoạt động của Driver Easy\r\nBước 1: Tải xuống và cài đặt Driver Easy, sau đó chạy nó và nhấp vào Quét ngay . Driver Easy quét máy tính của bạn và liệt kê bất kỳ phần cứng nào có trình điều khiển bị thiếu, lỗi thời hoặc không khớp.\r\n\r\nBước 2: Driver Easy liệt kê tất cả các trình điều khiển bạn cần. Nhấp vào Cập nhật tất cả để tải xuống và cài đặt trình điều khiển mới tự động. (Hoặc cập nhật từng trình điều khiển riêng lẻ.)\r\n\r\nBước 3: Chờ đợi và hưởng thụ thành quả.\r\n\r\nDanh sách key Driver Easy Pro bản quyền mới nhất\r\nBạn có thể chọn 1 trong các key dưới đây, sau khi kích hoạt bạn có thể để lại key bạn đã sử dụng bên dưới bình luận để mọi người biết key nào để kích hoạt nhé.\r\n\r\n763EX-9FRJW-J779R-3A8AW-UT8DH\r\nHEFK5-QJRQU-GGKGG-7GFF7-PG3PF\r\nPW3JC-JK57T-P6QWC-3PCFF-85XS7\r\nKRHKH-7EH6F-S86X3-XGDR9-SFAWT\r\nFVDWV-A3PH3-EX9XU-DJT4R-64X9X\r\nXFK7C-RKFQV-G78S7-DC3GE-433PJ\r\nVKJH6-DXC8T-HXH3S-Q8FGX-8JCVU\r\nKQ368-4RRKF-RU9XK-QFQVJ-85P7P\r\nQRAVR-RP9VS-RVED7-9G67T-6GWU6\r\nWGK4Q-FASGK-QGPTS-AXH6G-QVFU9\r\nPXCGH-TGDEC-96HRC-G7SST-RWECW\r\n64EUK-PAF7X-GVS3G-7THJ3-J5FGT\r\nHUKFW-QVT3A-QREGH-4TE39-WWHT4\r\nWFJQR-RF8JV-7XRP9-JFJ5F-A968V\r\n6984F-FWPQC-ACJP9-QDFF9-QP3UJ\r\n4QF35-8PCGW-J4SC3-4HSS3-RQTHC\r\nKSFJP-FVS94-69CRT-AHRA3-JSED7\r\n9FU5S-WTTA4-P5VH8-84D43-AD8RR\r\nX3AC5-SHGV9-QR37W-HDV6G-RA94P\r\nLưu ý: Với mỗi key Driver Easy chỉ active được cho tối đa 3 máy, nên bạn cần lưu ý điều này để tránh tình trạng ko active được phần mềm.\r\n\r\nHướng dẫn nhập key bản quyền phần mềm Driver Easy\r\nBước 1: Sau khi cài đặt xong, hãy mở phần mềm lên và nhấp vào “Get pro version” để mở giao diện kích hoạt bản quyền.\r\n\r\n\r\n\r\nBước 2: Nhập 1 trong các key bên dưới vào và nhấn Activate để hoàn thành việc kích hoạt. Nếu key lỗi, bạn có thể đổi sang key khác, hoặc để lại email ở bình luận bên dưới để mình gửi key mới.\r\n\r\n\r\n\r\nLời kết\r\nTrên đây là những chia sẻ của Blog Kiến Thức về key Driver Easy Pro mới nhất và hướng dẫn cài đặt chi tiết. Nếu có vấn đề gì khi cài đặt các bạn hãy bình luận ở phía dưới bài viết nhé!', 99990020, '2020-08-04 03:27:24', '2020-08-04 03:27:24', 'Key Driver Easy Pro mới nhất hiện nay (Update liên tục)', NULL, NULL),
(1234564, 'Tìm hiểu Nero 9 là gì?\r\nNero 9 Full Crack Key là bộ công cụ dùng để ghi đĩa cũng như tạo các đĩa nhạc hay đĩa dữ liệu một cách chuyên nghiệp. Nero 9 có rất nhiều tiện ích nổi bật như: Nero 9 Burning, Nero 9 Free hay Nero 9 Express, …cho phép người dùng sử dụng đa tiện ích với việc ghi đĩa.\r\n\r\nNero 9 Burning là một chương trình ghi đĩa lâu đời nhưng vẫn được rất nhiều người tin dùng và sử dụng. Với Nero 9, bạn có thể dễ dàng tạo, trích xuất, ghi, sao chép, chia sẻ, sao lưu, xem và thưởng thức các đĩa CD hay DVD!\r\n\r\nNero 9 Free hỗ trợ bạn sao chép File vào đĩa CD, DVD và Blu-ray hoặc tạo đĩa phim DVD chuyên nghiệp bằng menu 3D, tạo các bản phối nhạc như DJ chuyên nghiệp hay sửa đổi định dạng nhạc và DVD để dễ dàng xem trên iPod và các thiết bị giải trí di động khác. Ngoài Burning, Nero 9 còn có khả năng tải nhanh các bài hát và ảnh lên My Nero, YouTube hay MySpace.\r\n\r\nNero 9 Express hỗ trợ các nguồn cấp RSS, cho phép người dùng tạo nhiều đĩa thông tin khác nhau, tạo hình ảnh NRG và sao chép nội dung từ đĩa CD hoặc DVD sang các vị trí khác. Nero 9 nổi bật như một phần mềm đặc biệt hỗ trợ ghi dữ liệu trên đĩa CD hoặc DVD so với các phần mềm ghi đĩa nổi tiếng khác.\r\n\r\nTính năng chính của phần mềm Nero 9\r\nNhanh chóng và dễ dàng phân tách, kích hoạt, tự động sao lưu và sao chép tính năng.\r\nSao lưu đĩa CD, DVD và đĩa Blu-ray của bạn một cách chuyên nghiệp.\r\nTạo DVD phim chuyên nghiệp với menu 3D.\r\nDễ dàng tạo và chia sẻ các bạn mix nhạc như một DJ chuyên nghiệp.\r\nChuyển đổi định dạng nhạc, hình ảnh và DVD để xem trên iPod® và các thiết bị giải trí di động khác.\r\nNhanh chóng tải lên các bài hát và hình ảnh lên My Nero, YouTube và MySpace\r\nXem, ghi lại, tạm dừng và xem TV trên web tùy thuộc vào nhu cầu của bạn.\r\nXem AVCHD và các định dạng HD khác.\r\nCấu hình yêu cầu để cài phần mềm\r\nTrình duyệt: Tối thiểu là Internet Explorer 6.0 hoặc cao hơn.\r\nBộ xử lý: 1 GHz Intel Pentium III hoặc tương đương AMD hay Intel. 2 GHz Intel Pentium 4 hoặc tương đương AMD hay Intel cho hệ điều hành Windows Vista.\r\nRAM: 256 MB đối với các hệ điều hành thông thường, 512 MB đối với hệ điều hành Windows Vista.\r\nỔ đĩa trống: Tối thiểu 270 MB để cài đặt tất cả các thành phần cơ bản. Khoảng 500 MB không gian ổ đĩa trống tạm thời cho việc cài đặt phần mềm. 9GB ổ cứng trống để lưu DVD và các tập tin tạm thời.\r\nĐĩa: DVD hoặc CD có thể ghi hoặc viết để burn.\r\nTối thiểu Directx 9.0c hoặc cao hơn.\r\nCard đồ họa với bộ nhớ video ít nhất là 32 MB.\r\nĐộ phân giải màn hình tối thiểu 800 x 600 px, tùy chỉnh màu sắc 16 bit.\r\nLink Download Nero Full Crack + Key mới nhất\r\nLink Drive\r\nLink tải MEGA\r\nPass giải nén: 353\r\n\r\nHướng dẫn Cài đặt Nero Full Crack Key chi tiết\r\nBước 1: Đầu tiên bạn cần phải tải File Nero 9 Full Key của Blog Kiến Thức theo Link tải ở trên.\r\n\r\nBước 2: Sau khi tải về, bạn tiến hành giải nén File và chạy File ‘Setup’ để bắt đầu tiến trình cài đặt.\r\n\r\nBước 3: Bạn chọn ‘Next’ để thực hiện các bước cài đặt, sau đó đến phần nhập ‘Serial Number’, bạn nhập: 9M03-01AE-WXPW-1P5Z-4XUX-C4AZ-KX74-117T vào sau đó chọn ‘Next’\r\n\r\nBước 4: Sau khi cài đặt xong, chọn ‘Exit’ để bắt đầu Crack.\r\n\r\nBước 5: Click chuột phải vào phần mềm và chọn ‘Properties’, sau đó Tích vào ô như hình dưới.\r\n\r\n\r\n\r\nBước 6: Sau đó bật Nero Keymake. Chọn ‘License manager’\r\n\r\n\r\n\r\nBước 7: Click chọn ‘Remove all serials’\r\n\r\n\r\n\r\nBước 8: Cuối cùng Click chọn ‘Add to white’ để Crack.\r\n\r\n\r\n\r\nBước 9: Khởi động lại phần mềm và sử dụng Nero 9 Full thôi.\r\n\r\n\r\n\r\nLời kết\r\nNero 9 vẫn là một phần mềm chuyên nghiệp và cho bạn thời gian tối ưu trong việc tạo, sao chép hay ghi lại các dữ liệu sang đĩa.\r\n\r\nHi vọng qua bài viết các bạn có thể Cài đặt và Crack phần mềm này một cách dễ dàng. Nếu thấy bài viết này hữu ích, đừng quên Like, Share và Đánh giá 5 sao để ủng hộ Blog Kiến Thức nhé!', 99990021, '2020-08-04 03:27:24', '2020-08-04 03:27:24', 'Download Nero 9 Full Crack mới nhất 2020 + Hướng dẫn cài đặt', NULL, NULL),
(1234565, '<p>Những th&ocirc;ng tin bạn cần biết về Samsung Galaxy S10 Series cac-phien-ban-mau-cua-s10-series-nen-chon-phien-ban-nao-1 D&ograve;ng sản phẩm Galaxy S10 series sở hữu thiết kế m&agrave;n h&igrave;nh v&ocirc; cực ho&agrave;n to&agrave;n mới Samsung Galaxy S10 Series l&agrave; d&ograve;ng sản phẩm đ&aacute;nh dấu 10 năm ph&aacute;t triển vĩ đại của g&atilde; khổng lồ đến từ H&agrave;n Quốc. Sản phẩm được giới thiệu trong sự kiện Samsung Unpacked v&agrave;o ng&agrave;y 20 th&aacute;ng 2 năm 2019 tại San Francisco, Mỹ. D&ograve;ng sản phẩm Galaxy S10 series sở hữu thiết kế m&agrave;n h&igrave;nh v&ocirc; cực ho&agrave;n to&agrave;n mới, hệ thống camera mới v&agrave; hiệu năng xử l&yacute; th&ocirc;ng minh, gồm ba phi&ecirc;n bản l&agrave; Galaxy S10, Galaxy S10+ v&agrave; Galaxy S10e. Về sản phẩm, Galaxy S10 sở hữu m&agrave;n h&igrave;nh tốt nhất của Samsung hiện nay v&agrave; l&agrave; m&agrave;n h&igrave;nh Dynamic AMOLED đầu ti&ecirc;n tr&ecirc;n thế giới. L&agrave; điện thoại th&ocirc;ng minh đầu ti&ecirc;n được chứng nhận HDR10+, m&agrave;n h&igrave;nh Galaxy S10 được quảng c&aacute;o c&oacute; khả năng điều chỉnh dải sắc th&aacute;i m&agrave;u sắc, gi&uacute;p t&aacute;i tạo m&agrave;u sắc đầy đủ v&agrave; ch&iacute;nh x&aacute;c như thật, đem lại trải nghiệm h&igrave;nh ảnh ch&acirc;n thực, rực rỡ, sống động. M&agrave;n h&igrave;nh Dynamic AMOLED của Galaxy S10 c&ograve;n đạt được chứng nhận VDE khi c&oacute; m&agrave;u sắc tươi s&aacute;ng v&agrave; độ tương phản tốt khi hiển thị những sắc đen đậm hơn v&agrave; những sắc trắng s&aacute;ng hơn. Gi&aacute; điện thoại Samsung Galaxy S10 Series V&agrave;o thời điểm ra mắt tại Việt Nam, Galaxy S10 series bao gồm ba mẫu m&aacute;y l&agrave; gi&aacute; Galaxy S10, Galaxy S10e v&agrave; Galaxy S10+ lần lượt l&agrave; 20.99, 15.99 v&agrave; 22.99 triệu đồng. Ri&ecirc;ng với S10+, Samsung c&ograve;n b&aacute;n th&ecirc;m phi&ecirc;n bản đặc biệt với dung lượng RAM/ROM khủng l&agrave; 8GB/512GB v&agrave; 12GB/1TB với gi&aacute; 28.99 v&agrave; 33.99 triệu đồng. Sau hơn một năm, Samsung v&agrave; c&aacute;c nh&agrave; b&aacute;n lẻ đ&atilde; c&oacute; sự tinh giảm nhất định về ph&acirc;n cấp sản phẩm Galaxy S10 của m&igrave;nh. Một số model kh&ocirc;ng thật sự h&uacute;t kh&aacute;ch như S10e, S10, S10+ 12GB/1TB dần biến mất khỏi kệ h&agrave;ng, thay v&agrave;o đ&oacute;, Samsung v&agrave; c&aacute;c nh&agrave; b&aacute;n lẻ tập trung v&agrave;o hai model chủ lực l&agrave; Galaxy S10+ v&agrave; Galaxy S10 Lite vừa ra mắt c&aacute;ch đ&acirc;y kh&ocirc;ng l&acirc;u. Hiện nay, Galaxy S10+ li&ecirc;n tục được c&aacute;c nh&agrave; b&aacute;n lẻ giảm gi&aacute;. Với khoảng 16 triệu đồng, người d&ugrave;ng đ&atilde; c&oacute; thể sở hữu chiếc m&aacute;y n&agrave;y, tiết kiệm 7 triệu đồng so với thời điểm ra mắt c&aacute;ch đ&acirc;y hơn 1 năm trước. Theo nhận định, gi&aacute; Galaxy S10 Series sẽ c&ograve;n tiếp tục giảm trong thời gian tới khi t&igrave;nh h&igrave;nh dịch bệnh đang diễn biến phức tạp v&agrave; để k&iacute;ch cầu ti&ecirc;u d&ugrave;ng. Galaxy S10 series sẽ vẫn l&agrave; sự lựa chọn hợp l&yacute; về t&iacute;nh năng v&agrave; chi ph&iacute; m&agrave; người d&ugrave;ng n&ecirc;n c&acirc;n nhắc. D&ograve;ng Galaxy S10e, S10 v&agrave; S10+ c&oacute; mấy m&agrave;u? Th&aacute;ng 03/2019, Samsung đ&atilde; ra mắt bộ ba Galaxy S10, S10 Plus v&agrave; Galaxy S10e với 8 t&ugrave;y chọn m&agrave;u c&oacute; sẵn. Bao gồm: Prism White (trắng ngọc trai hoặc trắng pha l&ecirc;), Prism Black (đen ngọc trai hoặc đen ng&acirc;n h&agrave;), Prism Green (xanh lục bảo), Prism Blue (xanh dương), Canary Yellow (v&agrave;ng), Flamingo Pink (hồng hạc), Ceramic Black (đen vỏ gốm), Ceramic White (trắng vỏ gốm). D&ograve;ng sản phẩm Galaxy S10 series ra mắt với 8 m&agrave;u gi&uacute;p người d&ugrave;ng dễ d&agrave;ng lựa chọn Sau một thời gian, &ocirc;ng lớn xứ H&agrave;n lại tiếp tục bổ sung th&ecirc;m c&aacute;c bản phối m&agrave;u kh&aacute;c để l&agrave;m mới sản phẩm cũng như k&iacute;ch cầu ti&ecirc;u d&ugrave;ng. Trong đ&oacute;, phi&ecirc;n bản m&agrave;u đỏ Cardinal Red d&agrave;nh ri&ecirc;ng cho thị trường ch&acirc;u &Acirc;u. Phi&ecirc;n bản m&agrave;u bạc Prism Silver l&agrave; bản giới hạn d&agrave;nh cho thị trường Hong Kong. Tại Việt Nam, Galaxy S10 v&agrave; S10 Plus ch&iacute;nh h&atilde;ng được b&aacute;n ra với 3 t&ugrave;y chọn m&agrave;u trắng ngọc trai, đen ngọc trai v&agrave; xanh lục bảo. Ri&ecirc;ng phi&ecirc;n bản S10+ 512GB v&agrave; S10+ 1TB sẽ chỉ c&oacute; bản vỏ gốm m&agrave;u đen Ceramic Black. Điện thoại Galaxy S10e ch&iacute;nh h&atilde;ng Việt Nam chỉ c&oacute; t&ugrave;y chọn m&agrave;u đen. C&aacute;c phi&ecirc;n bản m&agrave;u của S10 Series + Galaxy S10 với m&agrave;u đen b&iacute; ẩn T&ecirc;n gọi ch&iacute;nh x&aacute;c l&agrave; Prism Black, đ&acirc;y l&agrave; m&agrave;u sắc kinh điển v&agrave; kh&ocirc;ng bao giờ lỗi mốt. Đ&acirc;y sẽ l&agrave; một sự lựa chọn ho&agrave;n hảo nếu như bạn cần một m&agrave;u sắc đủ sang trọng nhưng kh&ocirc;ng nổi bần bật trước trăm ng&agrave;n con mắt của &ldquo;người đời&rdquo;. Đặc biệt m&agrave;u Prism Black sẽ v&ocirc; c&ugrave;ng ph&ugrave; hợp với người mang mệnh Thổ hoặc mệnh Thuỷ. Galaxy S10 m&agrave;u đen huyền b&iacute;, kh&ocirc;ng bao giờ lỗi mốt + Galaxy S10 với m&agrave;u trắng tinh tế Như một bộ đ&ocirc;i kh&oacute; m&agrave; t&aacute;ch rời, Prism White cũng l&agrave; m&agrave;u sắc kinh điển như Prism Black. Prism White mang đến vẻ đẹp nhẹ nh&agrave;ng, tinh tế, độc đ&aacute;o về phong c&aacute;ch m&agrave; kh&ocirc;ng hề lo&egrave; loẹt. M&agrave;u trắng đặc biệt ph&ugrave; hợp với người d&ugrave;ng mệnh Kim, mệnh Thổ. Nhưng với những người sinh mệnh Mộc th&igrave; tốt nhất h&atilde;y t&igrave;m cho m&igrave;nh một m&agrave;u sắc kh&aacute;c thay v&igrave; một chiếc Galaxy S10 cao cấp m&agrave;u trắng. Đ&acirc;y c&oacute; thể sẽ l&agrave; một lựa chọn mặc định kh&aacute;c cho rất nhiều người mua, đặc biệt l&agrave; giới nữ. Galaxy S10 m&agrave;u trắng tinh tế v&agrave; độc đ&aacute;o + Galaxy S10 với m&agrave;u xanh thần th&aacute;nh Kh&aacute;c với Prism Black v&agrave; Prism White, Prism Blue l&agrave; một m&agrave;u sắc rất r&otilde; r&agrave;ng khiến bạn nổi bần bật trong một biển điện thoại chung chung, nh&agrave;m ch&aacute;n. Ch&iacute;nh x&aacute;c th&igrave; Galaxy S10 Prism Blue sẽ l&agrave; m&oacute;n đồ c&ocirc;ng nghệ kh&ocirc;ng thể thiếu với những người d&ugrave;ng c&aacute; t&iacute;nh, hướng ngoại l&agrave; chẳng ngại ngần g&igrave; việc trở th&agrave;nh trung t&acirc;m của sự ch&uacute; &yacute;. S10 Prism Blue sẽ rất hợp với người d&ugrave;ng mệnh Mộc, mệnh Thuỷ. Samsung đ&atilde; thay đổi m&agrave;u xanh dương tr&ecirc;n điện thoại của m&igrave;nh trong một v&agrave;i năm nay, nhưng Prism Blue c&oacute; thể l&agrave; phi&ecirc;n bản tốt nhất. Dễ nh&igrave;n, đẹp mắt v&agrave; mang lại cho S10 một diện mạo thực sự độc đ&aacute;o. Galaxy S10 m&agrave;u xanh nổi bật v&agrave; kh&ocirc;ng nh&agrave;m ch&aacute;n + Galaxy S10 với m&agrave;u hồng hạc ki&ecirc;u sa Flamingo Pink l&agrave; một m&agrave;u sắc mang phong c&aacute;ch ri&ecirc;ng, n&oacute; kh&ocirc;ng kinh điển như Prism White hay Prism Black. Flamingo Pink chắc chắn sẽ phải chấp nhận cảnh người gh&eacute;t, kẻ y&ecirc;u. Flamingo Pink về bản chất sẽ l&agrave; gam m&agrave;u hấp dẫn với người d&ugrave;ng y&ecirc;u sắc m&agrave;u, c&oacute; thể th&iacute;ch sự nổi bật, lo&egrave; loẹt một ch&uacute;t. Flamingo Pink l&agrave; m&agrave;u sắc k&eacute;n người d&ugrave;ng, đ&acirc;y sẽ l&agrave; lựa chọn của người d&ugrave;ng c&aacute; t&iacute;nh, thật tuyệt vời khi thấy Samsung d&aacute;m thử những tuỳ chọn m&agrave;u t&aacute;o bạo như vậy. Galaxy S10 m&agrave;u hồng hạc ki&ecirc;u sa, nhưng cũng kh&aacute; k&eacute;n người d&ugrave;ng + Galaxy S10 với m&agrave;u xanh ngọc Prism Green l&agrave; m&agrave;u sắc cần c&oacute; nếu bạn kh&ocirc;ng thực sự ấn tượng với Prism Blue hoặc Flamingo Pink. K&eacute;m nổi hơn m&agrave;u xanh hay hồng nhưng đ&acirc;y chắc chắn l&agrave; một m&agrave;u sắc độc đ&aacute;o, tuyệt vời cho những ai th&iacute;ch sự nhẹ nh&agrave;ng. Galaxy S10 m&agrave;u ngọc kh&ocirc;ng phải m&agrave;u ấn tượng nhưng cũng kh&ocirc;ng k&eacute;m phần độc đ&aacute;o + Galaxy S10 m&agrave;u trắng gốm / đen gốm Ceramic White v&agrave; Ceramic Black d&agrave;nh cho ai muốn c&oacute; vẻ ngo&agrave;i độc quyền, cao cấp. Ngo&agrave;i việc đắt hơn v&igrave; số tiền bạn cần chi ra cho phi&ecirc;n bản S10+ so với S10 th&ocirc;ng thường th&igrave; trong đ&oacute; cũng bao gồm cả ph&iacute; cho chất liệu gốm thay v&igrave; k&iacute;nh như th&ocirc;ng thường. Những r&agrave;o cản về gi&aacute; đ&oacute; c&oacute; thể sẽ khiến nhiều người kh&ocirc;ng thể lựa chọn mặt lưng gốm cao cấp, nhưng đối với những người c&oacute; đủ điều kiện t&agrave;i ch&iacute;nh để sở hữu ch&uacute;ng th&igrave; đ&acirc;y thực sự l&agrave; những m&agrave;u sắc đẹp v&agrave; &ldquo;đẳng cấp&rdquo;. Galaxy S10 m&agrave;u trắng gốm d&agrave;nh cho ai y&ecirc;u th&iacute;ch vẻ ngo&agrave;i độc đ&aacute;o, cao cấp + Galaxy S10e v&agrave;ng rực rỡ Đ&acirc;y chắc chắn l&agrave; m&agrave;u s&aacute;ng nhất v&agrave; c&oacute; sức h&uacute;t nhất m&agrave; Samsung d&agrave;nh cho dòng Galaxy S10. Hiện tại, đ&acirc;y l&agrave; phi&ecirc;n bản m&agrave;u sắc d&agrave;nh ri&ecirc;ng cho điện thoại Galaxy S10e gi&aacute; rẻ. Đ&aacute;ng tiếc, bản b&aacute;n ch&iacute;nh h&atilde;ng tại Việt Nam kh&ocirc;ng c&oacute; sẵn m&agrave;u v&agrave;ng. D&ugrave; bạn th&iacute;ch hay kh&ocirc;ng th&iacute;ch Galaxy S10e Canary Yellow th&igrave; cũng kh&ocirc;ng thể phủ nhận rằng n&oacute; thực thu h&uacute;t sự ch&uacute; &yacute; của bạn ngay lập tức. Với thiết kế nhỏ nhắn v&agrave; t&ocirc;ng m&agrave;u tươi trẻ, nổi bật, phi&ecirc;n bản m&agrave;u v&agrave;ng n&agrave;y rất ph&ugrave; hợp với những c&ocirc; n&agrave;ng năng động v&agrave; s&agrave;nh điệu. Galaxy S10 m&agrave;u v&agrave;ng rực rỡ v&agrave; c&oacute; sức h&uacute;t nhất d&ograve;ng Samsung S10 Series + Samsung S10, S10+ Cardinal Red m&agrave;u đỏ Th&aacute;ng 06/2019, h&atilde;ng điện thoại Samsung đ&atilde; ra mắt th&ecirc;m phi&ecirc;n bản Galaxy S10 v&agrave; Galaxy S10+ m&agrave;u đỏ Cardinal Red mới. Đ&acirc;y l&agrave; phi&ecirc;n bản giới hạn, chỉ b&aacute;n tại thị trường T&acirc;y &Acirc;u v&agrave; Nga. Sau bộ đ&ocirc;i flagship, bản phối m&agrave;u đỏ Cardinal cũng sẽ c&oacute; mặt tr&ecirc;n S10e. Ngo&agrave;i m&agrave;u sắc, phi&ecirc;n bản Cardinal Red kh&ocirc;ng c&oacute; g&igrave; kh&aacute;c biệt so với c&aacute;c bản ti&ecirc;u chuẩn ra mắt trước đ&oacute;. Tuy nhi&ecirc;n, phi&ecirc;n bản m&agrave;u đặc biệt n&agrave;y chỉ c&oacute; duy nhất t&ugrave;y chọn bộ nhớ trong 128GB. Nếu c&oacute; &yacute; định mua S10, S10 Plus m&agrave;u đỏ bạn n&ecirc;n c&acirc;n nhắc thật kỹ về nhu cầu lưu trữ của bản th&acirc;n. Mặt kh&aacute;c, m&agrave;u đỏ thật sự hợp với những c&ocirc; n&agrave;ng tự tin, c&oacute; c&aacute; t&iacute;nh mạnh. M&agrave;u đỏ cũng kh&ocirc;ng qu&aacute; k&eacute;n với người d&ugrave;ng l&agrave; nam giới. Galaxy S10 m&agrave;u đỏ ho&agrave;n to&agrave;n mới, đ&acirc;y l&agrave; bản giới hạn + Samsung S10+ 128GB Prism Silver m&agrave;u bạc Galaxy S10 Plus Prism Silver l&agrave; t&ugrave;y chọn m&agrave;u mới nhất được Samsung giới thiệu. Phi&ecirc;n bản n&agrave;y kh&aacute; đặc biệt khi được ra mắt với th&ocirc;ng điệp &ldquo;Bất ngờ đặc biệt d&agrave;nh cho Cha&rdquo; (Special Surprise for Fathers). Giống như c&aacute;c phi&ecirc;n bản Prism ra mắt trước đ&oacute;, mặt lưng chiếc S10+ m&agrave;u bạc cũng c&oacute; hiệu ứng chuyển m&agrave;u nhẹ nh&agrave;ng, đẹp mắt. Phi&ecirc;n bản n&agrave;y c&oacute; sự độc đ&aacute;o v&agrave; quyến rũ ri&ecirc;ng. N&oacute; kh&ocirc;ng qu&aacute; nổi bật như xanh dương, v&agrave;ng hay đỏ, cũng kh&ocirc;ng b&iacute; ẩn, lịch l&atilde;m như m&agrave;u đen. Ở S10 Plus m&agrave;u x&aacute;m vẫn to&aacute;t l&ecirc;n vẻ sang trọng v&agrave; tinh tế. M&agrave;u bạc c&ograve;n thể hiện sự trưởng th&agrave;nh v&agrave; ấm &aacute;p. C&oacute; lẽ v&igrave; thế m&agrave; Samsung đ&atilde; giới thiệu đ&acirc;y l&agrave; một m&oacute;n qu&agrave; đặc biệt d&agrave;nh cho những người cha. Hiện tại, phi&ecirc;n bản n&agrave;y chỉ c&oacute; sẵn ở thị trường Hong Kong. Galaxy S10 m&agrave;u bạc vẫn to&aacute;t l&ecirc;n vẻ sang trọng v&agrave; tinh tế Vậy đ&oacute;, Galaxy S10 m&agrave;u n&agrave;o đẹp nhất c&ograve;n phụ thuộc v&agrave; sở th&iacute;ch của bạn. Nhưng nếu quan trọng về mặt phong thuỷ, th&igrave; bạn n&ecirc;n chọn mua Samsung S10 c&oacute; m&agrave;u hợp mệnh với m&igrave;nh. Hiện tại, Mobileworld đang cung cấp đầy đủ m&agrave;u sắc v&agrave; dung lượng Samsung Galaxy S10 với mức gi&aacute; rẻ, bảo h&agrave;nh v&agrave; khuyến m&atilde;i hấp dẫn cho bạn dễ d&agrave;ng lựa chọn.</p>', 1, '2020-08-04 03:35:16', '2020-08-17 03:57:57', 'Các phiên bản màu của S10 Series – Nên chọn phiên bản nào', '7Foj_blog1.jpg', '<p>Galaxy S10 m&agrave;u n&agrave;o đẹp nhất v&agrave; n&ecirc;n mua m&agrave;u n&agrave;o khi m&agrave; cả 3 phi&ecirc;n bản Galaxy S10, S10+ v&agrave; S10e đều c&oacute; nhiều tuỳ chọn kh&aacute;c nhau. H&atilde;y để Mobileworld gợi &yacute; về phong c&aacute;ch m&agrave;u sắc sau đ&acirc;y &ldquo;dẫn đường chỉ lối&rdquo; cho bạn nh&eacute;!</p>'),
(1234566, 'Tổng quan về ứng dụng TechSmith Snagit 2019\r\nSnagit 2019 chụp ảnh màn hình, quay video màn hình chuyên nghiệp nằm trong các TOP phần mềm hiện nay, nó giúp người dùng dễ dàng chụp lại các hình ảnh, các thao tác chuột trên màn hình máy tính, Snagit giúp bạn lưu lại các khoảnh khắc xảy ra trên máy tính hay thực hiện việc quay lại video, thao tác chuột, hướng dẫn học, chia sẻ màn hình…. một cách dễ dàng. Ngoài ra chương trình còn cho phép người dùng đổi đuôi video, chỉnh sửa các files được chụp, đươc quay từ trước một cách nhanh chóng và tiện lợi.\r\n\r\nBên cạnh chụp và quay video màn hình, phần mềm Snagit 2019 có một nhóm các công cụ chỉnh sửa trên chính bức ảnh đã chụp hoặc từ những ảnh khác. Với giao diện chỉnh sửa trực quan dễ thao tác chắc chắn sẽ không làm bạn thất vọng, nếu bạn có khiếu bạn sẽ tạo được những bức ảnh có hiệu ứng đẹp và sinh động nhất mà không cần phải sử dụng phần mềm đồ họa photoshop.\r\n\r\nCác tính năng chính có trong Snagit 2019 Full Crack\r\nChụp ảnh màn hình hoặc video\r\nSnagit 20 giúp bạn dễ dàng để chụp ảnh hoặc quay video màn hình máy tính. Bạn cũng có thể lựa chọn quay phim màn hình theo từng khu vực, cửa sổ,…\r\n\r\nGhi lại webcam\r\nChuyển đổi giữa webcam và ghi màn hình trong khi quay video. Sử dụng micro để có thể liên lạc với đồng đội hoặc khách hàng, bất kể họ ở đâu.\r\n\r\nGhi âm. Bao gồm âm thanh trong video của bạn từ micrô hoặc âm thanh hệ thống của máy tính.\r\nTạo ảnh Gif. Snagit 20 đi kèm với các tùy chọn mặc định và tùy chỉnh để tạo GIF hoàn hảo từ file .mp4 ngắn.\r\nCắt Video Clip. Xóa bất kỳ phần không mong muốn khỏi bản ghi màn hình máy tính của bạn. Cắt bất kỳ phần nào ở đầu, giữa hoặc cuối video của bạn.\r\nChụp màn hình cuộn. Chụp toàn màn hình, cuộn ảnh chụp màn hình. Công cụ chụp màn hình của Snagit giúp đơn giản để lấy các cuộn dọc và ngang, cuộn trang web vô hạn, tin nhắn trò chuyện dài và mọi thứ ở giữa.\r\nLấy văn bản. Trích xuất văn bản từ một bản chụp màn hình hoặc tập tin và nhanh chóng dán nó vào một tài liệu khác để chỉnh sửa. Dễ dàng sao chép thông tin mà không cần gõ lại tất cả các văn bản.\r\nThêm chú thích. Bạn có thể dễ dàng thêm chú thích vào hình ảnh hoặc video với các công cụ đánh dấu chuyên nghiệp.\r\nThay thế văn bản. Snagit 2019 nhận ra văn bản trong ảnh chụp màn hình của bạn để chỉnh sửa nhanh. Thay đổi từ, phông chữ, màu sắc và kích thước của văn bản trong ảnh chụp màn hình của bạn mà không phải thiết kế lại toàn bộ hình ảnh.\r\nCác chế độ chụp có trong TechSmith Snagit 2019\r\nChế độ chụp tất cả trong một\r\nNhư đã đề cập, đây là chế độ hữu ích nhất. Các tùy chọn khá tự giải thích và hầu hết các phép thuật xảy ra khi bạn thực sự nhấp vào nút Chụp, mặc dù bạn có thể di chuột qua khu vực có chữ ‘Màn hình in’ để nhanh chóng xác định tổ hợp phím nóng mới để kích hoạt quy trình chụp được định cấu hình trước của bạn trong khi Snagit đang chạy trong nền.\r\n\r\nChế độ quay video\r\nChế độ quay video cũng không khác lắm so với chế độ AiO, ngoại trừ việc nó cho phép bạn ghi trực tiếp từ webcam để giúp bạn xây dựng trạng thái người nổi tiếng trên Youtube. Đó thực sự không phải là một khát vọng của tôi, vì vậy tôi không có webcam và không thử tính năng này, nhưng quay video màn hình hoạt động như một cơ duyên.\r\n\r\nBiên tập viên Snagit\r\nKhi bạn đã thực sự chụp ảnh màn hình, kết quả của bạn sẽ tự động được mở trong trình chỉnh sửa hình ảnh đi kèm. Thật không may, nếu bạn đang thực hiện quay màn hình video, điều này chỉ cho phép bạn xem lại video bạn đã tạo, nhưng trình chỉnh sửa có khả năng hơn nhiều khi làm việc với hình ảnh. Bạn có thể thêm tất cả các loại mũi tên, lớp phủ văn bản và các hình vẽ hữu ích khác sẽ giúp bạn tự giải thích mà không cần phải viết những lời giải thích dài vô cùng.\r\n\r\nLink Download Snagit 2019 Full Crack mới nhất\r\nDưới đây mình sẽ cung cấp tới các bạn 2 phiên bản Snagit 2019. Hãy tải cho mình bản phù hợp nhất nhé!\r\n\r\nTechSmith Snagit 32 bit: https://download.techsmith.com/snagit/enu/1913/32bit/snagit.exe\r\n\r\nTechSmith Snagit 64 bit: http://download.techsmith.com/snagit/enu/snagit.exe\r\n\r\nHướng dẫn cài đặt TechSmith Snagit 2019 bằng hình ảnh\r\nBước 1: Tick chọn vào ô” I accept the License Terms và nhấn Install\r\n\r\n\r\n\r\nBước 2: Chờ đợi 2 – 5 phút\r\n\r\n\r\n\r\nBước 3: Hoàn thành cài đặt. Nhấn Continue\r\n\r\n\r\n\r\nBước 4: Nhấn Enter Software Key\r\n\r\n\r\n\r\nBước 5: Nhập key kích hoạt và nhấn Unlock\r\n\r\n\r\n\r\nBước 6: Nhấn Get Started with Snagit để bắt đầu sử dụng\r\n\r\n\r\n\r\nLời kết\r\nNhư vậy là mình đã hoàn thành bài hướng dẫn chi tiết cách cài đặt phần mềm Snagit 2019. Phần mềm này theo mình cảm thấy nó khá là tốt trong việc quay video màn hình máy tính trên Laptop và PC. Hãy sử dụng nó để có những thước videos chất lượng. Và chúc các bạn thành công!', 99990007, '2020-08-04 03:35:16', '2020-08-04 03:35:16', 'Download TechSmith Snagit 2019 Full Key mới nhất 2020', NULL, NULL);
INSERT INTO `blog` (`id_blog`, `content`, `id`, `created_at`, `updated_at`, `title`, `Hinh`, `description`) VALUES
(1234567, 'Giới thiệu phần mềm\r\nThực ra đây là 1 extension được cài đặt trên trình duyệt chome hay coccoc, ngoài tính năng tự động kết bạn thì bộ tool facebook này còn có nhiều tính năng khác như xóa lời mời kết bạn, tự động kết bạn theo đề xuất của facebook, hủy lời mời kết bạn đã gửi, lọc và xóa bạn bè không tương tác…bạn có thể xem rõ các tính năng của phần mềm ở dưới.\r\n\r\n\r\n\r\nƯu điểm của tool\r\nBạn có thể gửi hàng trăm lời mời kết bạn 1 lần mà không bị facebook checkpoint nick, lý do là tool chạy theo rule của facebook và chạy trên ngay trình duyệt (không chạy trên server khác) nên hạn chế được CP.\r\n\r\nBạn có thể tùy chọn đối tượng để kết bạn, vì thế bạn chủ động trong việc kết bạn với tệp đối tượng khách hàng tiềm năng. Thường là bạn sẽ lựa chọn những post, group liên quan đến sản phẩm dịch vụ bạn đang kinh doanh để kết bạn sẽ hiệu quả hơn.\r\n\r\nTool có 1 tính năng rất hay đó là hủy hàng loạt lời mời cũ đã gửi, vì facebook chỉ cho bạn gửi tối đa 1000 lời mời kết bạn nên việc hủy những lời mời cũ đi sẽ giúp bạn có thêm lượt để gởi lời mời kết bạn mới.\r\n\r\n\r\n\r\nMẹo để sử dụng tool auto kết bạn hiệu quả\r\nHãy xây dựng profile của bạn thật chuẩn, content hay, hình ảnh đẹp có giá trị, hướng tới việc cung cấp thông tin hữu ích mà tệp đối tượng tiềm năng cần, như thế họ sẽ dễ chấp nhận kết bạn với bạn hơn.\r\n\r\nMỗi ngày hãy gửi vài trăm lời kết bạn, sau vài hôm xóa những lời mời cũ đi, gởi lại những lời kết bạn mới. Lặp lại như thế sẽ giúp bạn có 1 danh sách bạn bè với 5000 friend là khách hàng tiềm năng.\r\n\r\nSau khi build 1 nick thành công bạn có thể làm tương tự để build thêm từ 5-10acc bạn sẽ có được 1 tệp 20-50k  friend để khai thác như bán hàng, giới thiệu sản phẩm, chia sẻ page, mời like page, chia sẻ group, chia sẻ livestream….\r\n\r\nĐây là bộ tool không thể thiếu cho bạn nào đang bán hàng trên nền tảng profile, phần mềm kết bạn facebook này với nhiều tính năng hữu ích sẽ giúp bạn tìm kiếm và kết bạn với tệp khách hàng tiềm năng đơn giản, nhanh chóng và hiệu quả hơn, giúp bạn bán hàng tốt hơn có doanh thu và lợi nhuận cao hơn, chúc bạn thành công!', 18021313, '2020-08-04 03:35:16', '2020-08-04 03:35:16', 'Phần Mềm Kết Bạn Facebook Số Lượng Lớn', NULL, NULL),
(1234568, 'Điện thoại Samsung Note 20\r\nSản phẩm Samsung Note 20: Mang trong mình một thiết kế sang trọng và tinh tế, Samsung Note 20 toát lên một vẻ đẹp vừa tinh tế, sang trọng lại không kém phần gọn gàng hơn các siêu phẩm Note 20 series.\r\nnhung-dong-dien-thoai-samsung-note-20-hien-duoc-ban-tai-CellphoneS-1\r\n\r\nCấu hình Note 20: Có thể cấu hình của Note 20 sẽ được trang bị một con chip Exynos thế hệ mới nhất và dự định là sẽ xuất hiện chip tiến trình 7nm hoặc 5nm.\r\n\r\nTính năng đặc biệt: Một trong những tính năng đặc biệt của các dòng Note hiện nay là việc bút Spen càng ngày càng được nâng cấp để chúng trở nên đặc biệt hơn và thuận tiện với người dùng hơn.\r\n\r\nGiá bán Note 20 ~ 25,990,000 đồng.\r\n\r\nĐiện thoại Samsung Note 20 Ultra\r\nSản phẩm Note 20 Ultra: Note 20 Ultra có thể nói là một siêu phẩm hàng đầu và đặc biệt nhất của nhà Samsung với một cấu hình mạnh mẽ hơn hẳn các chipset mà Samsung từng trang bị trên các sản phẩm khác. Một camera chính lên tới 108MP và có màn hình siêu nét với độ làm mới 120Hz.\r\n\r\nCấu hình Note 20 Ultra: Ngoại hình thì có thể nói là quá hoàn mỹ cho một siêu phẩm và có màn hình lên đến 6.9 inch. Bên cạnh đó, chip Snapdragon 865 cùng với 16GB ram bộ nhớ trong cùng 256GB bộ nhớ tốc độ ghi cao UFS 3.1. Một cấu hình khá hấp dẫn với một người chuyên gia sử dụng Samsung.\r\n\r\n\r\n\r\nTính năng đặc biệt: Một trang bị nâng cấp về Spen hay các ống kính 108MP cao cấp có thể là một trang bị đắc giá nhất của dòng Samsung Note 20 Ultra.\r\n\r\nGiá Note 20 Ultra ~ 30,990,000 đồng.\r\n\r\nĐiện thoại Samsung Note 20 Ultra 5G\r\nSản phẩm Note 20 Ultra 5G: Mang cùng một thiết kế bên ngoài, hiệu năng bên trong và chỉ khác mỗi một tính năng sử dụng mạng 5G để kết nối.\r\n\r\nCấu hình Note 20 Ultra 5G: Có thể do sử dụng chipset có trang bị 5G nên Snapdragon luôn là một sự lựa chọn hàng đầu của Samsung. Cùng với đó việc sử dụng một thanh ram cao dung lượng hơn là một điều hiển nhiên để có thể vận hành chip mạng 5G.\r\n\r\n\r\n\r\nTính năng đặc biệt: 5G là con chip còn khá mới mẻ và là một tính năng đặc biệt.\r\n\r\nGiá Note 20 Ultra 5G ~ 34,990,000 đồng.\r\n\r\nNgày ra mắt và các phiên bản của series Samsung Note 20\r\nCó thể nói rằng điện thoại Samsung luôn luôn lắng nghe người dùng qua nhiều năm phát triển thăng trầm. Trải qua các dòng và đời máy của Samsung Note thì một trong những đặc trưng nhất là chiếc bút Spen huyền thoại xuất hiện từ các dòng Note từ xa xưa. Và đặc biệt là để tiếp nối những thành công vang dội đó, Samsung nay tiếp tục cho ra mắt series Samsung Note 20 với 3 phiên bản cùng nhiều quà tặng hấp dẫn. Ngày ra mắt Note 20 là ngày 5/8/2020. Tại CellphoneS hiện đã bắt đầu chương trình đặt trước Note 20 series với nhiều phần quà hấp dẫn.', 99990018, '2020-08-04 03:35:16', '2020-08-04 03:35:16', 'Những dòng điện thoại Samsung Note 20 hiện được bán tại Cellphones\r\n', NULL, NULL),
(1234569, 'Tổng quan về game Beach Head 2002\r\nBeach Head 2002 là dòng game bắn súng khá hấp dẫn trên PC và máy tính. Game có lối chơi đơn giản không mang các tình huống bạo lực, vì vậy game có thể phù hợp với mọi lứa tuổi kể cả trẻ em.\r\n\r\nBeach Head 2002 là phiên bản tiếp nối của Beach Head 2000. Nhiệm vụ của người chơi khi tham gia vào game là bảo vệ hòn đảo của mình chống lại các thế lực đen tối, để bảo vệ được hòn đảo của bạn, người chơi cần phải chiến đấu bắn hạ các loại binh lính, máy bay, xe tăng đang tiến gần đến bạn.\r\n\r\nBeach Head 2002 là một trong những game Offline ghi dấu ấn sâu sắc đối với thế hệ cuối 8x đầu 9x khi mà máy tính và internet vẫn còn rất hạn chế ở Việt Nam.\r\n\r\nMột số tính năng mới trong Beach Head 2002\r\nVũ khí đa dạng, từ súng máy 50 mm cho tới tên lửa tầm nhiệt\r\nCác cuộc không kích quy mô lớn\r\nChuyển động vật lý khá chân thực\r\nLực lượng tấn công vào ban đêm với hỗ trợ của đèn và pháo sáng\r\nHình ảnh quân lính được thiết kế tỉ mỉ hơn\r\nHành động của quân lính chân thực và “thông minh” hơn\r\nBạn sẽ nhận được hỗ trợ không kích từ máy bay ném bom B58\r\nVũ khí thực tế (súng máy M60, AT 75 mm, Gattling…)\r\nHệ thống vũ khí của quân địch bao gồm xe tăng MB78, APC Fuch với tháp pháo và bệ phóng tên lửa, trực thăng chiến đấu Cobra, CH53 Shercoskys, phản lực F101 và máy bay vận tải C-130 Hercules…\r\n\r\nHiệu ứng hình ảnh và âm thanh chân thực hơn\r\nTrong game, người chơi có nhiệm vụ cố thủ một công sự trước sự tấn công như vũ bão của quân địch. Bạn sẽ phải tiêu diệt nhiều loại kẻ thù bao gồm lính đánh bộ, xe tăng hạng nặng, máy bay có trang bị tên lửa….Ban đầu, quân địch xuất hiện thưa thớt nhưng sẽ đông dần và nhiệm vụ cũng khó hơn trong các màn sau. Thậm chí trong một số trận, kẻ thù sẽ đông đến mức bạn bắn không xuể.\r\n\r\nMột số lệnh bàn phím cơ bản trong Beach Head 2002\r\nSpacebar: Chuyển đổi vũ khí\r\nA: Điều chỉnh chuột\r\nM: Bắn tên lửa\r\nF: Bắn pháo sáng\r\nB: Tấn công không kích\r\nG: Chọn súng ngắn\r\nS: Tắt/mở âm thanh\r\nMột số mã cheat và phím tắt trong game\r\n[1] Đạn không giới hạn\r\n[2] hoặc 12345: Bất tử\r\n[+] Bỏ màn\r\nCấu hình yêu cầu để cài đặt và chơi game\r\nCấu hình tối thiểu\r\nHĐH: Windows 98, XP, Vista, 7\r\nBộ xử lý: Pentium 350 MHz\r\nBộ nhớ: RAM 64 MB\r\nĐồ họa: Thẻ video tương thích DirectX hỗ trợ đồ họa 16 bit\r\nDung lượng: 90 MB dung lượng trống\r\nCấu hình đề xuất\r\nHĐH: Windows 98, XP, Vista, 7\r\nBộ xử lý: Pentium 350 MHz trở lên\r\nBộ nhớ: RAM 64 MB\r\nĐồ họa: Thẻ video tương thích DirectX hỗ trợ đồ họa 16 bit\r\nDung lượng: 90 MB dung lượng trống\r\nLink Download Beach Head 2002 Full\r\nLink tải game: https://taimienphi.vn/download-beach-head-2002-39133/taive\r\n\r\nHướng dẫn cài đặt game\r\nDownload Game Beach Head 2002 về máy tính.\r\nGiải nén bằng winrar hoặc 7-zip.\r\nChạy file BH2002.exe để chơi game.\r\nLời kết\r\n\r\nTrên đây là link download game Beach Head 2002 mới nhất dành cho các bạn. Chúc bạn các bạn chơi game vui vẻ, và đừng quên theo dõi chuyên mục Game Offline hay cho PC của Blog Kiến Thức để xem thêm những game Offline mới và hot nhất hiện nay.', 99990029, '2020-08-04 03:35:16', '2020-08-04 03:35:16', 'Download Beach Head 2002 Full mới nhất hiện nay cho máy tính', NULL, NULL),
(1234570, '<p>LMSS: Li&ecirc;n Minh Săm Soi l&agrave; g&igrave;? LMSS (t&ecirc;n đầy đủ l&agrave; Li&ecirc;n Minh Săm Soi) l&agrave; một trong những c&ocirc;ng cụ hỗ trợ h&agrave;ng đầu cho game thủ bộ m&ocirc;n Li&ecirc;n Minh Huyền Thoại, được ph&aacute;t triển bởi nh&agrave; ph&aacute;t h&agrave;nh game l&agrave; Garena. Sử dụng LMSS c&oacute; thể gi&uacute;p cho người d&ugrave;ng c&oacute; thể để tra cứu chi tiết tất cả th&ocirc;ng tin người chơi m&agrave; m&igrave;nh muốn xem. C&ocirc;ng cụ được tạo ra với mục đ&iacute;ch ch&iacute;nh l&agrave; &ldquo;săm soi&rdquo; đối thủ hoặc đồng đội. LMSS được ph&aacute;t triển bởi Garena, do vậy ch&uacute;ng ta c&oacute; thể ho&agrave;n to&agrave;n tin tưởng v&agrave;o độ ch&iacute;nh x&aacute;c v&agrave; chuẩn chỉ của những th&ocirc;ng tin qu&yacute; gi&aacute; n&agrave;y. Li&ecirc;n Minh Săm Soi mang đến cho người chơi th&ocirc;ng tin cực kỳ chi tiết từ tất cả c&aacute;c server LMHT tr&ecirc;n khắp thế giới, c&aacute;c th&ocirc;ng tin m&agrave; LMSS mang lại gồm Lịch sử trận đấu Bảng ngọc sử dụng trong mỗi trận đấu Th&ocirc;ng tin đầy đủ về những tướng được sử dụng, độ th&ocirc;ng thạo v&agrave; tỉ lệ thắng của từng vị tướng Level hiện tại của người chơi (số trận đ&aacute;nh, số giờ chơi,&hellip;) Tỷ lệ thắng thua Th&ocirc;ng tin về bậc Xếp hạng (thứ hạng bao nhi&ecirc;u, elo,&hellip;) Trang chủ của c&ocirc;ng cụ LMSS Trang chủ của c&ocirc;ng cụ LMSS tại việt nam l&agrave; http://lmss.vn/ Tại trang chủ của LMSS, ch&uacute;ng ta lựa chọn Sever v&agrave; ng&ocirc;n ngữ. Website cho ph&eacute;p bạn kiểm tra th&ocirc;ng tin, theo d&otilde;i trận đấu của bất kỳ Gamer n&agrave;o tr&ecirc;n to&agrave;n thế giới. Giao diện của Website cho ph&eacute;p người d&ugrave;ng truy cập 5 th&ocirc;ng tin: Người chơi Tướng Skin Prolive BXH (Rank) của sever bạn đang chọn C&aacute;c loại th&ocirc;ng tin cụ thể như sau Người chơi Đ&acirc;y l&agrave; nơi bạn c&oacute; thể t&igrave;m th&ocirc;ng tin về bất k&igrave; t&agrave;i khoản n&agrave;o, th&ocirc;ng tin bao gồm: Thứ hạng (rank) Cấp độ Elo Tỉ lệ thắng Th&ocirc;ng thạo Biểu tượng anh h&ugrave;ng Lịch sử đấu V&agrave; LiveGame (họ c&oacute; đang trong trận hay kh&ocirc;ng) Thao t&aacute;c rất đơn giản, bạn chỉ cần viết đ&uacute;ng Ingame của t&agrave;i khoản đ&oacute;, ấn Enter, thế l&agrave; những g&igrave; bạn cần sẽ hiện ra trước mắt. Tướng, Skin LMSS cho ph&eacute;p bạn t&igrave;m hiểu th&ocirc;ng tin của mọi tướng, bao gồm: List tướng xoay tua Th&ocirc;ng số, độ kh&oacute; của từng tướng C&aacute;c trang phục, nh&oacute;m trang phục Kh&ocirc;ng kh&aacute;c g&igrave; bạn đang &ldquo;du ngoạn&rdquo; trong Clilent LOL đ&uacute;ng kh&ocirc;ng? Click v&agrave;o bất k&igrave; một tướng n&agrave;o bạn th&iacute;ch, v&agrave; c&ugrave;ng xem th&ocirc;ng tin về tướng n&agrave;o Ngo&agrave;i mẹo khắc chế, c&aacute;ch chơi, LMSS c&ograve;n thống k&ecirc; sự mạnh, yếu của tướng bạn chọn với từng k&egrave;o đấu. Kể cả c&oacute; ở bậc xếp hạng n&agrave;o, vẫn c&oacute; những k&egrave;o đấu do chất tướng khiến bạn &ldquo;kh&ocirc;ng thể win được&rdquo;. Thật hữu &iacute;ch phải kh&ocirc;ng n&agrave;o! Prolive Đ&acirc;y l&agrave; một cải tiến mới của LMSS so với c&aacute;c phi&ecirc;n bản trước. Giờ đ&acirc;y, chỉ cần 1 c&uacute; click chuột, bạn ho&agrave;n to&agrave;n c&oacute; thể theo d&otilde;i những trận đấu ở khắp nơi tr&ecirc;n to&agrave;n thế giới m&agrave; kh&ocirc;ng cần phải &ldquo;h&oacute;ng&rdquo; bất k&igrave; Channel n&agrave;o. Click v&agrave;o Prolive, chọn Cao thủ bạn muốn xem, Click Theo d&otilde;i, LMSS sẽ tự động tải về một file chạy Livegame của Cao thủ đ&oacute;. Bảng xếp hạng (Rank) Ngay tại trang chủ của LMSS, bạn c&oacute; thể theo d&otilde;i BXH của sever m&igrave;nh đang chọn. BXH n&agrave;y thay đổi từng ng&agrave;y, từng giờ, theo t&ecirc;n ProPlayer, theo Rank, theo cấp độ hoặc theo tướng. Đ&oacute; l&agrave; những t&oacute;m tắt sơ lược về Li&ecirc;n minh săm soi (LMSS) c&ocirc;ng cụ đắc lực của bất kỳ người chơi LMHT n&agrave;o. Hướng dẫn sử dụng LMSS C&aacute;ch t&igrave;m th&ocirc;ng tin người chơi Thao t&aacute;c t&igrave;m kiếm th&ocirc;ng tin người chơi rất đơn giản. Đầu ti&ecirc;n cần x&aacute;c định server bạn cần tra cứu, chỉ cần viết đ&uacute;ng t&ecirc;n nh&acirc;n vật trong game (ingame) của đối tượng muốn t&igrave;m rồi nhấn Enter v&agrave; một loạt th&ocirc;ng tin sẽ hiện ra đầy đủ. T&igrave;m kiếm th&ocirc;ng tin người chơi Hệ thống sẽ hiển thị th&ocirc;ng tin của đối tượng b&ecirc;n dưới, nhấn v&agrave;o người chơi v&agrave; n&oacute; sẽ hiện ra đầy đủ c&aacute;c th&ocirc;ng tin. Th&ocirc;ng số cơ bản L&uacute;c n&agrave;y, trang web sẽ hiện ra c&aacute;c th&ocirc;ng số cơ bản của người d&ugrave;ng bao gồm: Bậc Xếp hạng hiện tại T&ecirc;n người chơi Điểm Elo Điểm LP ID người chơi Cấp độ M&aacute;y chủ Th&ocirc;ng tin người chơi Xem bậc Rank v&agrave; tỷ lệ thắng K&eacute;o một ch&uacute;t xuống ph&iacute;a dưới, bạn sẽ thấy đối tượng m&igrave;nh đang t&igrave;m kiếm ở bậc rank n&agrave;o, hiện tại bao nhi&ecirc;u điểm, số trận thắng, tỉ lệ thắng (100 trận gần nhất),&hellip; Bậc Xếp hạng v&agrave; tỷ lệ thắng T&igrave;m hiểu lịch sử đấu Lịch sử đấu cũng l&agrave; một phần quan trọng kh&ocirc;ng k&eacute;m m&agrave; bạn sẽ muốn t&igrave;m hiểu. Ở đ&acirc;y hệ thống sẽ hiện ra những th&ocirc;ng tin chi tiết như l&agrave;: Thời gian trận đấu kết th&uacute;c c&aacute;ch hiện tại l&agrave; bao l&acirc;u (2 giờ trước, 3 giờ trước) Thời gian trận đấu kết th&uacute;c (26 ph&uacute;t) Ph&eacute;p bổ trợ được chọn (Dịch Chuyển &ndash; Tốc Biến) Chỉ số KDA, chỉ số l&iacute;nh, số v&agrave;ng kiếm được Trang bị đ&atilde; mua (Đồng Hồ C&aacute;t Zhonya, S&aacute;ch Chi&ecirc;u Hồn,&hellip;) Kết quả trận đấu Người chơi ở đội xanh hay đỏ Lịch sử đấu của người chơi Ph&acirc;n t&iacute;ch diễn biến trận đấu Bạn c&oacute; thể xem v&agrave; ph&acirc;n t&iacute;ch diễn biến trận đấu bằng minimap timeline ở ph&iacute;a dưới. C&oacute; một thanh thời gian để bạn c&oacute; thể k&eacute;o tới k&eacute;o lui check diễn biến trận đấu, bạn c&oacute; thể biết th&ecirc;m được những chi tiết như: C&aacute;c vị tướng di chuyển như n&agrave;o v&agrave; ở đ&acirc;u Ai phải l&ecirc;n bảng đếm số, bị hạ gục bởi ai Số v&agrave;ng thời điểm đ&oacute; l&agrave; bao nhi&ecirc;u Tướng n&agrave;o mua trang bị g&igrave; Bạn c&oacute; thể ph&acirc;n t&iacute;ch diễn biến trận đấu nhờ minimap timeline Soi KDA Một đặc điểm nữa l&agrave; bạn c&oacute; thể xem KDA của từng người tham gia trong trận đấu đ&oacute; khi m&agrave; bạn t&igrave;m kiếm. Bạn c&oacute; thể thấy r&otilde; KDA của từng người Theo d&otilde;i chỉ số tham gia trận đấu Thống k&ecirc; về chỉ số tham gia trận đấu sẽ cho bạn biết rất nhiều điều, liệu m&igrave;nh c&oacute; hiệu quả trong trận đấu hay kh&ocirc;ng. Số điểm hạ gục &ndash; chết &ndash; hỗ trợ Chỉ số l&iacute;nh Lượng v&agrave;ng kiếm được Cắm bao nhi&ecirc;u mắt/Ph&aacute; bao nhi&ecirc;u mắt S&aacute;t thương g&acirc;y ra S&aacute;t thương g&aacute;nh chịu Tổng số m&aacute;u đ&atilde; hồi Chỉ số tham gia trận đấu Quan s&aacute;t thời gian l&ecirc;n trang bị Bạn sẽ quan s&aacute;t được chi tiết c&aacute;c mốc thời gian l&ecirc;n trang bị. Bạn c&oacute; thể quan s&aacute;t thời gian l&ecirc;n trang bị Nghi&ecirc;n cứu c&aacute;ch tăng kỹ năng của đối thủ Đ&acirc;y l&agrave; một điểm rất hữu &iacute;ch của LMSS. Đặc biệt l&agrave; bạn c&oacute; thể tham khảo c&aacute;ch n&acirc;ng kỹ năng của c&aacute;c cao thủ chuy&ecirc;n nghiệp v&agrave; &aacute;p dụng v&agrave;o lối chơi của m&igrave;nh. Chi tiết về c&aacute;ch n&acirc;ng kỹ năng Bảng ngọc m&agrave; người chơi sử dụng Cũng tương tự như việc tăng kỹ năng, bạn c&oacute; thể nghi&ecirc;n cứu bảng ngọc m&agrave; người chơi sử dụng. Bạn cũng c&oacute; thể tham khảo c&aacute;ch sử dụng bảng ngọc của những cao thủ, thế nhưng họ chọn bảng ngọc dựa tr&ecirc;n phong c&aacute;ch chơi n&ecirc;n kh&ocirc;ng phải l&uacute;c n&agrave;o cũng c&oacute; hiệu quả đ&acirc;u nh&eacute;. Bảng ngọc của người chơi C&aacute;ch xem th&ocirc;ng tin tướng LMHT bằng LMSS LOLSTAT Hệ thống Li&ecirc;n Minh Săm Soi rất đa dạng, vừa xem được cả lịch sử đấu, vừa c&oacute; thể xem đầy đủ th&ocirc;ng tin về từng vị tướng, skin, kỹ năng, c&aacute;ch chơi hiệu quả,&hellip; Ngo&agrave;i ra cũng c&ograve;n c&oacute; cả th&ocirc;ng tin về c&aacute;ch khắc chế thuận tiện cho việc chọn tướng v&agrave; quyết định lối chơi của game thủ. Tướng mới trong tuần Một t&iacute;nh năng kh&aacute; hay của Li&ecirc;n Minh Săm Soi l&agrave; bạn c&oacute; thể v&agrave;o xem tuần n&agrave;y c&oacute; những vị tướng n&agrave;o được chơi miễn ph&iacute;, cập nhật cũng rất l&agrave; nhanh lu&ocirc;n. Danh s&aacute;ch tướng miễn ph&iacute; trong tuần T&igrave;m kiếm tướng Muốn t&igrave;m tướng n&agrave;o th&igrave; bạn h&atilde;y g&otilde; t&ecirc;n tướng đ&oacute; v&agrave;o phần t&igrave;m kiếm. Tất cả những vị tướng hiện tại đều c&oacute; đầy đủ tr&ecirc;n Li&ecirc;n Minh Săm Soi. Ngo&agrave;i việc tra cứu th&igrave; việc t&igrave;m kiếm c&aacute;c vị tướng cũng rất hữu &iacute;ch cho những ai mới chơi để hiểu r&otilde; hơn. Bạn c&oacute; thể t&igrave;m kiếm bất kỳ vị tướng n&agrave;o m&igrave;nh muốn Chỉ số tướng Khi click v&agrave;o vị tướng bạn chọn, h&agrave;ng loạt chỉ số cơ bản của vị tướng được hiện ra đầy đủ. Từ m&aacute;u, năng lượng, s&aacute;t thương, tầm đ&aacute;nh,&hellip;. cho tới những đặc điểm kh&aacute;c như độ chống chịu, t&iacute;nh đa dụng, độ kh&oacute;,&hellip; Th&ocirc;ng tin vị tướng rất đầy đủ Khắc chế tướng Đ&acirc;y l&agrave; những th&ocirc;ng tin rất bổ &iacute;ch để bạn hiểu r&otilde; hơn về vị tướng m&igrave;nh y&ecirc;u th&iacute;ch. Từ mẹo khắc chế cho đến những vị tướng khắc chế ở c&aacute;c lane, đi bot đi top đi mid sợ ai nhất. Rất c&oacute; t&aacute;c dụng trong việc ban pick. Giả dụ trong đ&aacute;nh Xếp hạng, thấy đối phương đi mid chọn Yasuo th&igrave; bạn c&oacute; thể v&agrave;o LMSS t&igrave;m tướng khắc chế v&agrave; chọn một vị tướng như Zed chẳng hạn. Th&ocirc;ng tin về c&aacute;ch khắc chế cũng như những vị tướng khắc chế Trang bị C&aacute;c trang bị cũng được ph&acirc;n loại r&otilde; r&agrave;ng, từ trang bị khởi động, trang bị trấn ph&aacute;i, trang bị di chuyển,&hellip; Ph&acirc;n loại trang bị rất r&otilde; r&agrave;ng Ngọc t&aacute;i tổ hợp Ngọc t&aacute;i tổ hợp được tổng hợp gi&uacute;p c&aacute;c bạn dễ d&agrave;ng trong việc lựa chọn đ&uacute;ng bảng ngọc hỗ trợ. Bảng ngọc t&aacute;i tổ hợp Lời kết Qua b&agrave;i viết n&agrave;y, Blog Kiến Thức đ&atilde; giới thiệu một c&aacute;ch rất chi tiết v&agrave; đầy đủ như một b&agrave;i hướng dẫn sử dụng c&aacute;ch d&ugrave;ng trang Li&ecirc;n Minh Săm Soi. B&ecirc;n cạnh đ&oacute; cũng c&oacute; rất nhiều trang th&ocirc;ng tin kh&aacute;c cũng với mục đ&iacute;ch tra cứu th&ocirc;ng tin người chơi Li&ecirc;n Minh Huyền Thoại thoải m&aacute;i cho bạn lựa chọn. Ch&uacute;c c&aacute;c bạn tận dụng tối đa lợi &iacute;ch m&agrave; LMSS LOLSTAT n&oacute;i ri&ecirc;ng v&agrave; những trang kh&aacute;c n&oacute;i chung để chơi game một c&aacute;ch hiệu quả hơn nh&eacute;!</p>', 1, '2020-08-04 03:35:16', '2020-08-17 03:59:50', 'LMSS là gì? Hướng dẫn sử dụng Liên minh săm soi mới nhất', 'B7I6_LMSS.jpg', '<p>giới thiệu một c&aacute;ch rất chi tiết v&agrave; đầy đủ như một b&agrave;i hướng dẫn sử dụng c&aacute;ch d&ugrave;ng trang Li&ecirc;n Minh Săm Soi.</p>'),
(1234571, 'Lối chơi\r\nPUBG Mobile Lite sẽ giữ lại lối chơi Battle Royale truyền thống của nó, vì vậy bạn sẽ không phải học nhiều để bắt đầu với điều này. Thay vì có 99 kẻ thù trong bản đồ 8 × 8 km, PUBG Mobile Lite sẽ chỉ có 39 kẻ thù trong bản đồ 2 × 2 km cho người chơi. Tốc độ của các trò chơi sẽ nhanh hơn và tốt hơn để phù hợp với trò chơi trên thiết bị di động.\r\n\r\nBước vào các cuộc chiến, bạn vẫn sẽ phải thực hiện nhiều nhiệm vụ quen thuộc từ nhảy dù, thu thập vũ khí, vật phẩm, chiến đấu và thoát khỏi vòng luẩn quẩn. Nhiệm vụ của bạn không chỉ là chiến đấu và đánh bại nhiều kẻ thù để giành chiến thắng mà bạn còn cần phải là người sống sót cuối cùng trên bản đồ này.\r\n\r\nBạn phải đào tạo nhân vật của mình với nhiều kỹ năng khác nhau. Bạn không phải chiến đấu theo cách của bạn đến cùng sau đó bị đánh bại trong vô vọng. Thay vào đó, bạn nên cố gắng thu thập nhiều vũ khí, đạn dược và vật phẩm để chuẩn bị cho trận chiến cuối cùng.\r\n\r\nTrong PUBG Mobile Lite, vòng tròn an toàn cũng sẽ thu hẹp theo thời gian. Do đó, bạn cần liên tục di chuyển, không được đứng yên, chờ người chơi khác giết nhau. Bạn cũng sẽ được hỗ trợ bởi các phương tiện xuất hiện trên bản đồ như ô tô, xe máy, v.v. Tuy nhiên, bạn nên cẩn thận khi sử dụng các phương tiện này vì kẻ thù sẽ dễ dàng nhìn thấy bạn và hạ gục bạn bằng những khẩu súng mạnh mẽ. PUBG Mobile Lite cũng đòi hỏi sự tập trung tốt, bạn sẽ cần quan sát tốt và nghe thấy tiếng động để nhận ra kẻ thù và những nguy hiểm khác. Bạn nên sử dụng tai nghe khi chơi để đảm bảo âm thanh sẽ tốt hơn.\r\n\r\n\r\n\r\nBộ sưu tập vũ khí phong phú\r\nPUBG Mobile Lite cũng sở hữu một kho vũ khí phong phú. Bạn sẽ tìm thấy nhiều vũ khí khác nhau mà nhiều game sinh tồn khác không có. Những vũ khí này được chia thành nhiều loại bao gồm:\r\n\r\nVũ khí cận chiến: Hiện tại, bạn sẽ chỉ có bốn vũ khí cận chiến: Crowbar, Machete, Sickle và Pan. Bạn có thể sở hữu chúng như một vũ khí phòng thủ khi vũ khí không có sẵn. Pan sẽ là vũ khí mạnh nhất trong thể loại này vì nó có lực sát thương lớn nhất và chặn tất cả các loại đạn.\r\nSúng ngắn: 5 khẩu súng ngắn hiện tại là P18C, P1911, P92, R1895 và R45. Súng lục sẽ là vũ khí tốt trong những phút đầu tiên của trò chơi. Nếu bạn có thói quen quên sử dụng súng lục, bạn nên chọn một khẩu súng có cùng loại đạn với vũ khí chính để tiết kiệm không gian túi của bạn.\r\nShotgun: Bạn thường sẽ tìm thấy ba loại shotgun, nhưng theo sự sắp xếp của tôi, nó sẽ là năm loại gồm S686, S12K, S1897, Sawed-off và Win94. Theo đánh giá, bạn nên tìm và sử dụng ba loại tốt nhất bao gồm S686, S12K và S1897. Chúng là những khẩu súng tốt mang lại hiệu quả cao cho cuộc chiến.\r\nSúng tiểu liên: Đây là một trong những loại súng hiệu quả nhất trong chiến đấu gần. Nó sẽ không thua kém Shotgun. Nhưng với loại vũ khí này, bạn sẽ nhận được nhiều đạn hơn và tốc độ bắn nhanh hơn. Bốn khẩu súng tiểu liên thường là Vector, UMP, Tommy-Gun và Uzi.\r\nSúng trường: Vũ khí này là thứ được yêu thích và được nhiều người chơi chọn làm vũ khí chính vì các tính năng của nó như nhiều viên đạn, bắn nhanh và độ chính xác cao. Bạn sẽ tìm thấy bốn khẩu súng trường: SCAR-L, M416, M16 và AKM.\r\nSúng bắn tỉa: Đây là một trong những vũ khí mạnh nhất với lực sát thương lớn, tầm bắn xa, nhưng để sử dụng chúng khó hơn các loại súng khác. Bạn cũng sẽ thường thấy bốn số khác nhau bao gồm Kar98k, SKS, Mini 14 và VSS.\r\nNgoài các vũ khí phổ biến được đề cập ở trên, bạn có thể có được nhiều loại vũ khí thông qua các hộp ngẫu nhiên trên bản đồ. Nhiều vũ khí đặc biệt sẽ có sẵn như AUG A3, Groza, AWM, Mk14 EBR, M24, M249, Bows.\r\n\r\n\r\n\r\nThiết kế\r\nPUBG Mobile Lite được thiết kế không thua kém PUBG Mobile. Trò chơi vẫn sẽ sử dụng công nghệ Unreal Engine 4 mạnh mẽ để xây dựng hình ảnh. Bạn vẫn sẽ thấy hình ảnh tuyệt đẹp với hiệu ứng đẹp mắt trong trò chơi. Nhưng những điểm làm cho PUBG Mobile Lite trở nên khác biệt và tốt hơn cho nhiều thiết bị là dung lượng tốt, kích thước bản đồ và số lượng người chơi vừa phải và đồ họa tối giản. PUBG Mobile Lite sẽ tập trung vào lối chơi và chuyển động mượt mà của người chơi hơn là hướng đến những gì quá hoành tráng và hào nhoáng. Bạn chỉ cần một điện thoại thông minh cấp thấp với giá khoảng 100 đô la để chơi PUBG Mobile Lite với trải nghiệm chơi game mượt mà.\r\n\r\nPhần kết luận\r\nNhìn chung, PUBG Mobile Lite sẽ là một lựa chọn tốt cho nhiều người chơi sử dụng các thiết bị di động cấp thấp hoặc tầm trung. Tencent Games đã chỉ đạo nhiều phân khúc người dùng thu hút nhiều người chơi hơn vào PUBG. Đây có thể là một chiến lược đúng đắn khi đối thủ của họ, Fortnite, không làm điều này. Nếu bạn yêu thích các trò chơi Battle Royale, PUBG Mobile Lite là một lựa chọn hoàn hảo. Nó dành cho các thiết bị không đáp ứng yêu cầu cấu hình cao. Hãy để lại phản hồi của bạn về trò chơi này. Cảm ơn và có một thời gian chơi game tuyệt vời!\r\n\r\nLink tải game: https://taiappmod.com', 99990000, '2020-08-04 03:35:16', '2020-08-04 03:35:16', 'Tải PUBG Mobile Lite APK miễn phí cho Android', NULL, NULL),
(1234572, 'Cách tạo tên kí tự đặc biệt LOL 2020 mới nhất\r\nĐầu tiên mình sẽ hướng dẫn các bạn cách tạo tên kí tự đặc biệt lol bằng công cụ tạo tên KÍ TỰ ĐẶC BIỆT. Để có thể tạo cho mình vô vàn những tên đặc biệt lol đẹp nhất. Để tạo cho mình những cái tên đẹp – độc các bạn hãy làm theo các bước sau đây:\r\n\r\nBước 1: Đầu tiên các bạn truy cập vào công cụ tạo kí tự đặc biệt 2020 của Đại Chúa Tể Mobile tại https://daichuate.vn/ki-tu-dac-biet/ đây là công cụ tạo tên cực kì bá đạo.\r\n\r\n\r\n\r\nBước 2: Sau khi các bạn truy cập vào đại chỉ trên thì chúng ta sẽ được một giao diện như sau:\r\n\r\n\r\n\r\nTại đây các bạn chú ý các mục sau:\r\n\r\nNhập tên của bạn: Tại mục này các bạn tiến hành nhập tên bạn muốn chuyển sang kí tự đặc biệt\r\nTrái, Giữa, Phải: Mục này các bạn chọn các hoạt tiết theo các vị trí trong tên của bạn.\r\nBước 3: Sau khi hoàn thành xong, các bạn hãy nhấn nút TẠO CHỮ để hệ thống tạo và gợi ý cho các bạn tên kí tự đặc biệt lol đẹp nhất nhé.\r\n\r\n\r\n\r\nVà như vậy chúng ta đã có những cái tên kí tự đặc biệt lol đẹp nhất rồi. Công việc của các bạn là chỉ cần nhấn vào nút SAO CHÉP để copy tên đó và đặt tên trong game lol thôi nào.\r\n\r\nDanh sách các kí tự đặc biệt lol hay dùng\r\nNgoài công cụ tạo tên kí tự đặc biệt lol trên đây. Thì ngoài ra các bạn cũng có thể tham khảo thêm danh sách các kí tự đặc biệt lol hay dùng dưới đây. Để tạo thủ công cho mình những kí tự đặc biệt đẹp nhất nhé.\r\n\r\n\r\n\r\n1. Bảng kí tự đặc biệt bằng chữ cái\r\n๖ۣۜA ๖ۣۜB ๖ۣۜC ๖ۣۜD ๖ۣۜE ๖ۣۜF ๖ۣۜG ๖ۣۜH ๖ۣۜI ๖ۣۜJ ๖ۣۜK ๖ۣۜL ๖ۣۜM ๖ۣۜN ๖ۣۜO ๖ۣۜP ๖ۣۜQ ๖ۣۜR ๖ۣۜS ๖ۣۜT ๖ۣۜU ๖ۣۜW ๖ۣۜV ๖ۣۜX ๖ۣۜY ๖ۣۜZ\r\n\r\n2. Bảng kí tự đặc biệt hình ngôi sao\r\n✲ ⋆ ❅ ❇ ❈ ❖ ✫ ✪ ✩ ✬ ✮ ✭ ✯ ✰ ✹ ✸ ✷ ✶ ✵ ✳ ✱ ❊ ❉\r\n\r\n✾ ✽ ✼ ✠ ☆ ★ ✡ ✴ ✺ ☼ ☸ ❋ ✽ ✻ ❆ ۞ ۝ ❃ ❂ ✿ ❀ ❁\r\n\r\n3. Kí tự đặc biệt hình trái tim\r\n? ❥ ❣ ❦ ❧ ღ ɞ ?\r\n\r\n4. Kí tự đặc biệt tiền tệ\r\n¤ € £ Ұ ₴ $ ₰ ¢ ₤ ¥ ₳ ₲ ₪ ₵ 元 ₣ ₱ ฿ ¤ ₡ ₮ ₭ ₩\r\n\r\n円 ₢ ₥ ₫ ₦ z ł ﷼ ₠ ₧ ₯ ₨ Kč र ƒ ₹\r\n\r\n5. Kí tự đặc biệt hình súng\r\n╾━╤デ╦︻ ︻┳═一 ︻╦̵̵͇̿̿̿̿╤── Ⓞ═╦╗\r\n\r\n⌐╦╦═─ ︻┳デ═— ̿ ̿’̿’̵͇̿̿ ▄︻̷̿┻̿═━一\r\n\r\nTổng kết\r\nNhư vậy trên đây Đại Chúa Tể Mobile đã chia sẻ với các bạn công cụ tạo kí tự đặc biệt lol cũng như danh sách các kí tự đặc biệt lol đẹp mắt và hay sử dụng nhất rồi. Ngoài ra các bạn cũng có thể tải ngay cho mình tựa game Đại Chúa Tể Mobile – game nhập vai đấu tướng cực hay theo thông tin dưới đây:\r\n\r\nĐại Chúa Tể Mobile – Game nhập vai đấu tướng cực hay\r\n\r\nWebsite: https://daichuate.vn\r\nEmail: daichuate.vn@gmail.com\r\nFanpage: https://www.facebook.com/daichuatemobile/\r\nHi vọng với những thông tin bổ ích trên đây. Sẽ giúp cho các bạn có thể tạo cho mình những kí tự đặc biệt lol, liên quân, liên minh huyền thoại đẹp nhất.', 99990030, '2020-08-04 03:35:16', '2020-08-04 03:35:16', 'Cách tạo kí tự đặc biệt LOL đẹp nhất 2020 chỉ với 3 bước đơn giản', NULL, NULL),
(1234573, '<p>Địa điểm &eacute;p k&iacute;nh điện thoại iphone tại h&agrave; nội B&igrave;nh Minh mobile Trung t&acirc;m sửa chữa B&igrave;nh Minh mobile l&agrave; một trong những địa điểm &eacute;p k&iacute;nh điện thoại tại H&agrave; Nội uy t&iacute;n v&agrave; sở hữu nhiều c&ocirc;ng nghệ, kỹ thuật &eacute;p k&iacute;nh hiện đạinhất hiện nay. Với sự tận t&acirc;m, chuy&ecirc;n nghiệp c&ugrave;ng dịch vụ chăm s&oacute;c kh&aacute;ch h&agrave;ng b&agrave;i bản n&ecirc;n B&igrave;nh Minh mobile l&agrave; trở th&agrave;nh địa chỉ quen thuộc của rất nhiều kh&aacute;ch h&agrave;ng c&oacute; nhu cầu sửa chữa v&agrave; đặc biệt l&agrave; thay k&iacute;nh, &eacute;p k&iacute;nh điện thoại. Trong suốt nhiều năm hoạt động, B&igrave;nh Minh mobile lu&ocirc;n lấy sự t&iacute;n nhiệm v&agrave; h&agrave;i l&ograve;ng của kh&aacute;ch h&agrave;ng l&agrave; t&ocirc;n chỉ hoạt động trong suốt qu&aacute; tr&igrave;nh l&agrave;m nghề. B&igrave;nh Minh mobile cam kết lấy chữ &rdquo;T&iacute;n&rdquo; l&agrave;m đầu, đảm bảo tất cả c&aacute;c dịch vụ của B&igrave;nh Minh mobile đều trải qua qu&aacute; tr&igrave;nh kiểm định khắt khe v&agrave; nghi&ecirc;m ngặt nhất với chỉ ti&ecirc;u 100% về chất lượng. Bởi vậy, kh&aacute;ch h&agrave;ng đến với B&igrave;nh Minh mobile sẽ được trải nghiệm dịch vụ thay &eacute;p k&iacute;nh điện thoại h&agrave;ng đầu vời với sự đa dạng về c&aacute;c d&ograve;ng m&aacute;y (Iphone, samsung,&hellip;) c&ugrave;ng c&aacute;c linh kiện để phục vụ thay thế đảm bảo an to&agrave;n &ndash; chất lượng &ndash; ch&iacute;nh h&atilde;ng. B&ecirc;n cạnh đ&oacute; B&igrave;nh Minh mobile sở hữu đội ngũ kỹ thuật vi&ecirc;n được đ&agrave;o tạo b&agrave;i bản v&agrave; c&oacute; tay nghề cao, tất cả sẽ c&ugrave;ng mang lại sự h&agrave;i l&ograve;ng trọn vẹn nhất đến cho tất cả kh&aacute;ch h&agrave;ng. Tại sao bạn n&ecirc;n lựa chọn B&igrave;nh Minh mobile Đến với B&igrave;nh Minh mobile, chiếc điện thoại của bạn sẽ được thực hiện qu&aacute; tr&igrave;nh thay k&iacute;nh, &eacute;p k&iacute;nh điện thoại được thực hiện ho&agrave;n to&agrave;n chuy&ecirc;n nghiệp v&agrave; cực kỳ nhanh ch&oacute;ng gi&uacute;p tiết kiệm thời gian cho kh&aacute;ch h&agrave;ng nhưng vẫn đảm bảo chất lượng tuyệt đối. Lu&ocirc;n hoạt động theo phương ch&acirc;m sự h&agrave;i l&ograve;ng của kh&aacute;ch h&agrave;ng l&agrave; tr&ecirc;n hết. B&igrave;nh Minh mobile sẽ kh&ocirc;ng để bạn phải lo lắng về vấn đề sử dụng một số linh kiện kh&ocirc;ng ch&iacute;nh h&atilde;ng, k&eacute;m chất lượng m&agrave; một số cơ sở sửa chữa điện thoại kh&ocirc;ng uy t&iacute;n kh&aacute;c vẫn l&agrave;m. Đ&acirc;y ch&iacute;nh l&agrave; những l&yacute; do v&igrave; sao kh&aacute;ch h&agrave;ng n&ecirc;n đến với B&igrave;nh Minh mobile để khắc phục những sự cố li&ecirc;n quan đến mặt k&iacute;nh, &eacute;p k&iacute;nh điện thoại. Nhất l&agrave; khi hiện nay, thị trường thay m&agrave;n h&igrave;nh/mặt k&iacute;nh cảm ứng cho smartphone c&oacute; qu&aacute; nhiều h&agrave;ng giả h&agrave;ng nh&aacute;i với c&aacute;c gi&aacute; th&agrave;nh kh&aacute;c nhau. Điều n&agrave;y khiến cho mọi kh&aacute;ch h&agrave;ng hoang mang v&agrave; kh&ocirc;ng biết gi&aacute; rẻ nhất l&agrave; bao nhi&ecirc;u, chất lượng m&agrave;n h&igrave;nh c&oacute; đảm bảo hay kh&ocirc;ng, mặt k&iacute;nh c&oacute; được đảm bảo ch&iacute;nh h&atilde;ng kh&ocirc;ng. B&igrave;nh Minh mobile l&agrave; địa điểm &eacute;p k&iacute;nh điện thoại tại H&agrave; Nội gi&uacute;p cho bạn sẽ kh&ocirc;ng cần lo ngại về gi&aacute; cả cũng như chất lượng, v&igrave; tất cả lu&ocirc;n l&agrave; tốt nhất thị trường. B&ecirc;n cạnh đ&oacute;, B&igrave;nh Minh mobile cũng l&agrave; địa điểm thay m&agrave;n h&igrave;nh điện thoại samsung tại H&agrave; Nội n&oacute;i ri&ecirc;ng v&agrave; to&agrave;n quốc n&oacute;i chung. Để được tư vấn nhanh nhất, bạn c&oacute; thể li&ecirc;n hệ với ch&uacute;ng t&ocirc;i qua c&aacute;c th&ocirc;ng tin sau: Bạn c&oacute; thể li&ecirc;n hệ trực tiếp với B&igrave;nh Minh mobile &ndash; địa điểm &eacute;p k&iacute;nh điện thoại tại H&agrave; Nội qua c&aacute;c th&ocirc;ng tin sau để được tư vấn sớm nhất: Địa chỉ: 167 Th&aacute;i H&agrave; &ndash; P. L&aacute;ng Hạ &ndash; Q. Đống Đa &ndash; H&agrave; Nội Số điện thoại: 0948 710 710 Email: contact@binhminhmobile.com Website: binhminhmobile.com Facebook: https://www.facebook.com/binhminhmobile167thaiha/</p>', 99990001, '2020-08-04 03:35:16', '2020-08-17 04:36:06', 'Địa điểm ép kính điện thoại tại hà nội', 'N7uC_trung-tam-sua-chua-smartphone-24h-250905.jpg', '<p>Địa điểm &eacute;p k&iacute;nh tuyệt đẹp tại HN</p>'),
(1234574, '<p><img alt=\"🌊\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/tbc/1/16/1f30a.png\" style=\"height:16px; width:16px\" /> &quot;Th&agrave;nh c&ocirc;ng n&agrave;y ch&iacute;nh l&agrave; nỗ lực rất lớn của to&agrave;n bộ c&aacute;c bạn VTI, c&ugrave;ng nhau ch&uacute;ng ta đ&atilde; v&agrave; sẽ l&agrave;m n&ecirc;n những điều kỳ diệu.&quot; - CEO</p>\r\n\r\n<p><a href=\"https://www.facebook.com/vti.com.vn/?__cft__[0]=AZUgKKoK8pMNhG5ksGEM7DoqfhcoIdIXKmaD2d-PtNG2848ZzlSPdcQOwZWiaVmDImdBM2fKY9RgW5riCWcdzYKnAxNHK7DSNhz438RUTXm50NvOKiMo1jsw242JQ76YWFZeGNy19xofkZPoCLcpOvki-kXWU8xHFqvEaFuxOtXdcQ&amp;__tn__=kK-R\">VTI Vietnam</a></p>\r\n\r\n<p>.</p>\r\n\r\n<p><img alt=\"🌊\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/tbc/1/16/1f30a.png\" style=\"height:16px; width:16px\" /> Chặng đường ph&iacute;a trước vẫn c&ograve;n nhiều thử th&aacute;ch đ&oacute;n chờ, gần đ&acirc;y nhất ch&iacute;nh l&agrave; đợt s&oacute;ng Covid-19 lần thứ hai. Nhưng ch&uacute;ng ta sẽ vượt qua được, sẽ tiếp tục bứt ph&aacute; v&agrave; viết n&ecirc;n lịch sử!</p>\r\n\r\n<p><img alt=\"🌊\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/tbc/1/16/1f30a.png\" style=\"height:16px; width:16px\" /> To be 3 and make history!</p>', 1, '2020-08-17 03:54:48', '2020-08-17 03:54:48', '🎂 ĐÓN CHÀO SINH NHẬT 3 TUỔI CỦA VTI VIETNAM!', 'ulV1_vti.jpg', '<p><img alt=\"💎\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/tf9/1/16/1f48e.png\" style=\"height:16px; width:16px\" /> 3 năm, chặng đường hơn 1000 ng&agrave;y cố gắng!</p>\r\n\r\n<p><img alt=\"💎\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/tf9/1/16/1f48e.png\" style=\"height:16px; width:16px\" /> 3 năm, VTI trở th&agrave;nh một tổ chức 500 nh&acirc;n vi&ecirc;n - một th&agrave;nh t&iacute;ch đ&aacute;ng để mỗi VTIer tự h&agrave;o!</p>\r\n\r\n<p><img alt=\"💎\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/tf9/1/16/1f48e.png\" style=\"height:16px; width:16px\" /> 3 năm, VTI vượt b&atilde;o Covid để c&oacute; được những dự &aacute;n gi&aacute; trị, tiếp tục vươn l&ecirc;n mạnh mẽ!</p>'),
(1234575, '<p><img alt=\"🔥\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/t50/1/16/1f525.png\" style=\"height:16px; width:16px\" /> VTI tiếp tục tuyển dụng vị tr&iacute; ở khắp c&aacute;c khối ng&agrave;nh:</p>\r\n\r\n<p><img alt=\"💎\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/tf9/1/16/1f48e.png\" style=\"height:16px; width:16px\" /> 35 Java:</p>\r\n\r\n<p><img alt=\"▪️\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/t4c/1/16/25aa.png\" style=\"height:16px; width:16px\" /> 20 Senior | Up to 1,100$</p>\r\n\r\n<p><img alt=\"▪️\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/t4c/1/16/25aa.png\" style=\"height:16px; width:16px\" /> 15 Junior | Up to 800$</p>\r\n\r\n<p><img alt=\"💎\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/tf9/1/16/1f48e.png\" style=\"height:16px; width:16px\" /> 02 Solution Architect Java | Up to 1,800$</p>\r\n\r\n<p><img alt=\"💎\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/tf9/1/16/1f48e.png\" style=\"height:16px; width:16px\" /> 05 Technical Leader | Upto 1,500$</p>\r\n\r\n<p><img alt=\"💎\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/tf9/1/16/1f48e.png\" style=\"height:16px; width:16px\" /> 10 Android:</p>\r\n\r\n<p><img alt=\"▪️\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/t4c/1/16/25aa.png\" style=\"height:16px; width:16px\" /> 03 Senior | Up to 1,200$</p>\r\n\r\n<p><img alt=\"▪️\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/t4c/1/16/25aa.png\" style=\"height:16px; width:16px\" /> 07 Junior | Up to 900$</p>\r\n\r\n<p><img alt=\"💎\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/tf9/1/16/1f48e.png\" style=\"height:16px; width:16px\" /> 10 IOS:</p>\r\n\r\n<p><img alt=\"▪️\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/t4c/1/16/25aa.png\" style=\"height:16px; width:16px\" /> 02 Senior | Up to 1,300$</p>\r\n\r\n<p><img alt=\"▪️\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/t4c/1/16/25aa.png\" style=\"height:16px; width:16px\" /> 08 Junior | Up to 1,000$</p>\r\n\r\n<p><img alt=\"💎\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/tf9/1/16/1f48e.png\" style=\"height:16px; width:16px\" /> 12 Business Analyst:</p>\r\n\r\n<p><img alt=\"▪️\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/t4c/1/16/25aa.png\" style=\"height:16px; width:16px\" /> 08 BA c&oacute; tiếng Nhật | Up to 1,100$</p>\r\n\r\n<p><img alt=\"▪️\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/t4c/1/16/25aa.png\" style=\"height:16px; width:16px\" /> 04 BA kh&ocirc;ng c&oacute; tiếng Nhật | Up to 800$</p>\r\n\r\n<p><img alt=\"💎\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/tf9/1/16/1f48e.png\" style=\"height:16px; width:16px\" /> 02 Project Manager tiếng Nhật | Up to 2,000$</p>\r\n\r\n<p><img alt=\"💎\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/tf9/1/16/1f48e.png\" style=\"height:16px; width:16px\" /> 05 AWS Solution Architect | Up to 1,200$</p>\r\n\r\n<p><img alt=\"💎\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/tf9/1/16/1f48e.png\" style=\"height:16px; width:16px\" /> 03 Senior PHP: Up to 1000$</p>\r\n\r\n<p><img alt=\"💎\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/tf9/1/16/1f48e.png\" style=\"height:16px; width:16px\" /> 03 Senior .NET: Up to 1000S$</p>\r\n\r\n<p><img alt=\"💎\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/tf9/1/16/1f48e.png\" style=\"height:16px; width:16px\" /> 01 Senior Angular: Up to 1000$</p>\r\n\r\n<p><img alt=\"💎\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/tf9/1/16/1f48e.png\" style=\"height:16px; width:16px\" /> 01 Senior Comtor: Up to 1000$</p>\r\n\r\n<p><img alt=\"💎\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/tf9/1/16/1f48e.png\" style=\"height:16px; width:16px\" /> 05 SAP (Fresher/Junior/Senior)</p>\r\n\r\n<p><img alt=\"💎\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/tf9/1/16/1f48e.png\" style=\"height:16px; width:16px\" /> 01 Fresher QA | Upto 400$</p>\r\n\r\n<p><img alt=\"💎\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/tf9/1/16/1f48e.png\" style=\"height:16px; width:16px\" /> 02 UI/UX designer | Up to 600$</p>\r\n\r\n<p><img alt=\"🔥\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/t50/1/16/1f525.png\" style=\"height:16px; width:16px\" /> Trở th&agrave;nh một VTIer, bạn sẽ được:</p>\r\n\r\n<p><img alt=\"▪️\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/t4c/1/16/25aa.png\" style=\"height:16px; width:16px\" /> Hưởng min 14 th&aacute;ng lương/năm v&agrave; review tăng lương 2 lần/năm</p>\r\n\r\n<p><img alt=\"▪️\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/t4c/1/16/25aa.png\" style=\"height:16px; width:16px\" /> L&agrave;m việc trong một m&ocirc;i trường chuy&ecirc;n nghiệp, năng động, th&acirc;n thiện</p>\r\n\r\n<p><img alt=\"▪️\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/t4c/1/16/25aa.png\" style=\"height:16px; width:16px\" /> Tham gia v&agrave;o Ch&iacute;nh s&aacute;ch thưởng nội bộ giới thiệu ứng vi&ecirc;n với mức thưởng hấp dẫn</p>\r\n\r\n<p><img alt=\"▪️\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/t4c/1/16/25aa.png\" style=\"height:16px; width:16px\" /> Được đ&agrave;o tạo tiếng Nhật miễn ph&iacute; tại c&ocirc;ng ty</p>\r\n\r\n<p><img alt=\"▪️\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/t4c/1/16/25aa.png\" style=\"height:16px; width:16px\" /> Hỗ trợ thi c&aacute;c chứng chỉ về Cloud, AWS, PMP,...</p>\r\n\r\n<p><img alt=\"▪️\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/t4c/1/16/25aa.png\" style=\"height:16px; width:16px\" /> Nhiều c&aacute;c đ&atilde;i ngộ kh&aacute;c như: Kh&aacute;m sức khỏe định kỳ h&agrave;ng năm v&agrave; được đ&oacute;ng BHXH, BHYT, BHTN đầy đủ theo luật định</p>\r\n\r\n<p><img alt=\"▪️\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/t4c/1/16/25aa.png\" style=\"height:16px; width:16px\" /> Hưởng chế độ nghỉ m&aacute;t, c&aacute;c hoạt động phong tr&agrave;o, teambuilding, c&aacute;c clb (b&oacute;ng đ&aacute;, b&oacute;ng b&agrave;n, chạy, bơi, yoga, kiếm đạo, boardgame)...</p>\r\n\r\n<p><img alt=\"☎️\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/t22/1/16/260e.png\" style=\"height:16px; width:16px\" /> H&atilde;y inbox hoặc comment để đội ngũ HR của VTI c&oacute; thể tư vấn chi tiết hơn về mỗi vị tr&iacute; c&ocirc;ng việc.</p>\r\n\r\n<p><img alt=\"📩\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/tc0/1/16/1f4e9.png\" style=\"height:16px; width:16px\" /> Hoặc ứng tuyển nhanh bằng c&aacute;ch gửi CV về mail: hr@vti.com.vn</p>', 1, '2020-08-17 03:56:09', '2020-08-17 03:56:09', '🌊🌊 DỊCH KỆ DỊCH, VTI TIẾP TỤC TUYỂN QUÂN VỚI SỐ LƯỢNG LỚN', 'bXSs_tdungvti.jpg', '<p><img alt=\"❓\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/t4c/1/16/2753.png\" style=\"height:16px; width:16px\" />Cho hỏi: &quot;Tại sao thời gian n&agrave;y VTI lại tuyển nhiều vị tr&iacute; với số lượng lớn vậy?&quot;</p>\r\n\r\n<p><img alt=\"❗️\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/t50/1/16/2757.png\" style=\"height:16px; width:16px\" />Xin thưa: &quot;VTI vừa c&oacute; th&ecirc;m nhiều dự &aacute;n quy m&ocirc; lớn v&agrave; độ th&uacute; vị cũng &quot;lớn&quot; kh&ocirc;ng k&eacute;m, nếu muốn join th&igrave; nắm tay</p>\r\n\r\n<p><a href=\"https://www.facebook.com/vti.com.vn/?__cft__[0]=AZXJzranZ5AlB0mj0Pt7coMtSXHbU0Y9mvhqwOFWd9N2XGrQf42kQcfyPc8muGSsTa9og0kR2yuyun9SNmpQl21a69-GJTY_6rJ2ltL0WUfJhlcaz-3IQTzo5uFYHfKfSXBeJatKmiUQlUuZCkNVZ-HKbZkdqMilnOlpG7RDPDq5Bg&amp;__tn__=kK-R\">VTI Vietnam</a></p>\r\n\r\n<p>bạn nh&eacute;!&quot;</p>');
INSERT INTO `blog` (`id_blog`, `content`, `id`, `created_at`, `updated_at`, `title`, `Hinh`, `description`) VALUES
(1234576, '<p>34 năm về trước, thế giới đ&atilde; chứng kiến thảm họa hạt nh&acirc;n tồi tệ nhất lịch sử nh&acirc;n loại, v&agrave; dư &acirc;m của n&oacute; vẫn c&ograve;n tới tận ng&agrave;y nay. Thảm hoạ Chernobyl l&agrave; một vụ tai nạn hạt nh&acirc;n xảy ra v&agrave;o ng&agrave;y 26 th&aacute;ng 4 năm 1986 khi nh&agrave; m&aacute;y điện hạt nh&acirc;n Chernobyl ở Pripyat, Ukraina (khi ấy c&ograve;n l&agrave; một phần của Li&ecirc;n bang X&ocirc; viết) bị nổ tại l&ograve; phản ứng số 4. Đ&acirc;y được coi l&agrave; vụ tai nạn hạt nh&acirc;n trầm trọng nhất trong lịch sử năng lượng hạt nh&acirc;n. Do kh&ocirc;ng c&oacute; tường chắn, đ&aacute;m m&acirc;y bụi ph&oacute;ng xạ từ nh&agrave; m&aacute;y lan rộng ra nhiều v&ugrave;ng ph&iacute;a t&acirc;y Li&ecirc;n bang X&ocirc; viết, Đ&ocirc;ng &Acirc;u v&agrave; T&acirc;y &Acirc;u, Scandinavie, Anh quốc, v&agrave; đ&ocirc;ng Hoa Kỳ. Nhiều v&ugrave;ng rộng lớn thuộc Ukraina, Belarus v&agrave; Nga bị &ocirc; nhiễm nghi&ecirc;m trọng, dẫn tới việc phải sơ t&aacute;n v&agrave; t&aacute;i định cư cho hơn 336.000 người. Khoảng 60% đ&aacute;m m&acirc;y ph&oacute;ng xạ đ&atilde; rơi xuống Belarus. Theo bản b&aacute;o c&aacute;o năm 2006 của TORCH, một nửa lượng ph&oacute;ng xạ đ&atilde; rơi xuống b&ecirc;n ngo&agrave;i l&atilde;nh thổ ba nước cộng ho&agrave; X&ocirc; viết. Thảm hoạ n&agrave;y ph&aacute;t ra lượng ph&oacute;ng xạ lớn gấp 400 lần so với quả bom nguy&ecirc;n tử được n&eacute;m xuống Hiroshima.</p>\r\n\r\n<p>VASILY IGNATENKO SINH RA Ở SPERIZHYE, MỘT NG&Ocirc;I L&Agrave;NG CỦA BELARUS CHỈ C&Aacute;CH PRIPYAT 40 KM. BỐ MẸ ANH L&Agrave; NHỮNG NGƯỜI N&Ocirc;NG D&Acirc;N. HỌ KH&Ocirc;NG MUỐN CON TRAI L&Ecirc;N TH&Agrave;NH PHỐ N&Ecirc;N Đ&Atilde; X&Acirc;Y CHO ANH MỘT NG&Ocirc;I NH&Agrave; Ở QU&Ecirc;. NHƯNG RỒI VASILY ĐI NGHĨA VỤ QU&Acirc;N SỰ, ANH PHỤC VỤ TRONG ĐỘI CỨU HỎA Ở MOSCOW. SAU KHI XUẤT NGŨ, ANH ẤY MUỐN TRỞ TH&Agrave;NH MỘT NGƯỜI L&Iacute;NH CỨU HỎA THỰC THỤ. C&Ugrave;NG VỚI L&Agrave;N S&Oacute;NG NHỮNG NGƯỜI TRẺ ĐỔ VỀ THỊ TRẤN NGUY&Ecirc;N TỬ PRIPYAT, VASILY ĐEO H&Agrave;M TRUNG SĨ V&Agrave; PHỤC VỤ TẠI TRẠM CỨU HỎA SỐ 6.</p>\r\n\r\n<p>1 giờ 23 ph&uacute;t ng&agrave;y 26 th&aacute;ng 4 năm 1986, Vasily Ignatenko bị đ&aacute;nh thức bởi một tiếng nổ, theo sau đ&oacute; l&agrave; một rung chấn tương đương với trận động đất 2,5 độ Richter.</p>\r\n\r\n<p>&quot;Lyudmilla&quot;, anh gọi người vợ mới cưới của m&igrave;nh.</p>\r\n\r\n<p>Họ đang sống những ng&agrave;y th&aacute;ng &ecirc;m đềm v&agrave; hạnh ph&uacute;c nhất cuộc đời. Vasily mới 25 tuổi c&ograve;n Lyudmilla khi ấy mới 22. Anh lu&ocirc;n nắm tay c&ocirc; bất kể đ&acirc;u, khi đi dạo hoặc v&agrave;o si&ecirc;u thị. C&ograve;n c&ocirc;, thi thoảng sẽ gh&eacute; v&agrave;o tai Vasily v&agrave; n&oacute;i &quot;Em y&ecirc;u anh&quot;. Người ta thường hay bắt gặp cặp đ&ocirc;i h&ocirc;n nhau, họ đi qua v&agrave; mỉm cười ch&uacute;c ph&uacute;c.</p>\r\n\r\n<p>Như bất kể một người phụ nữ n&agrave;o tr&ecirc;n đời n&agrave;y nhận được sự che chở như vậy, Lyudmilla lu&ocirc;n cảm thấy hạnh ph&uacute;c. Tr&ecirc;n hết l&agrave; một cảm gi&aacute;c an to&agrave;n khi ở b&ecirc;n cạnh Vasily, c&oacute; anh ở đ&acirc;y chẳng c&oacute; chuyện tồi tệ g&igrave; c&oacute; thể xảy ra cả.</p>\r\n\r\n<p>***</p>\r\n\r\n<p>Lyudmilla thậm ch&iacute; đ&atilde; tỉnh dậy trước cả Vasily, đ&ecirc;m đ&oacute; c&ocirc; buồn n&ocirc;n, c&oacute; lẽ đ&atilde; thai ngh&eacute;n đứa con đầu l&ograve;ng cho anh. Vasily th&igrave; vẫn ngủ. Anh đặt chu&ocirc;ng b&aacute;o thức sớm l&uacute;c 4 giờ s&aacute;ng. Ng&agrave;y mai cặp đ&ocirc;i c&oacute; kế hoạch về qu&ecirc; thăm bố mẹ ở Sperizhye một ng&ocirc;i l&agrave;ng miền qu&ecirc; Belarus c&aacute;ch Pripyat chỉ 40 km.</p>\r\n\r\n<p>Họ dự định sẽ c&ugrave;ng nhau trồng khoai t&acirc;y, Vasily th&iacute;ch việc c&agrave;y xới v&agrave; gieo mầm cho những sự sống. Nhưng anh biết c&oacute; lẽ m&igrave;nh sẽ phải g&aacute;c kế hoạch ấy lại.</p>\r\n\r\n<p>Nh&igrave;n ra b&ecirc;n ngo&agrave;i cửa sổ, Vasily v&agrave; Lyudmilla thấy nh&agrave; m&aacute;y điện nguy&ecirc;n tử Chernobyl đang ch&aacute;y. C&oacute; một cột lửa cao rọi l&ecirc;n nền trời, m&agrave;u sắc của n&oacute; rất kỳ lạ. &quot;Đ&oacute;ng cửa sổ v&agrave; trở lại giường đi em. C&oacute; ch&aacute;y ở l&ograve; phản ứng. Anh sẽ quay lại sớm th&ocirc;i&quot;, Vasily n&oacute;i với vợ sau khi nhận được lệnh tổng động vi&ecirc;n tới Chernobyl.</p>\r\n\r\n<p>Họ th&ocirc;ng b&aacute;o đ&aacute;m ch&aacute;y ở m&aacute;i nh&agrave; m&aacute;y, đo&aacute;n rằng c&oacute; ai đ&oacute; rọi đ&egrave;n pha l&ecirc;n nền trời khiến cột lửa mang m&agrave;u sắc kỳ lạ. Kh&ocirc;ng một ai cảnh b&aacute;o với những người l&iacute;nh cứu hỏa rằng đ&oacute; l&agrave; một đ&aacute;m ch&aacute;y ph&oacute;ng xạ, rằng l&otilde;i của l&ograve; phản ứng đ&atilde; nổ tung.</p>\r\n\r\n<p>Bất cứ ai đến Chernobyl c&oacute; thể sẽ phải nhận một liều ph&oacute;ng xạ l&ecirc;n tới 1.600 rem - trong khi 400 l&agrave; mức đủ để g&acirc;y chết người.</p>\r\n\r\n<h3>&quot;Nếu sống được tới s&aacute;ng mai, ch&uacute;ng ta sẽ trở th&agrave;nh những người bất tử&quot;</h3>\r\n\r\n<p>1 giờ 30 ph&uacute;t s&aacute;ng, chỉ 7 ph&uacute;t sau vụ nổ, những người l&iacute;nh cứu hỏa đ&atilde; c&oacute; mặt tại Chernobyl. Trước mắt họ l&agrave; một khung cảnh hoang t&agrave;n đổ n&aacute;t. Một ngọn lửa lớn bao tr&ugrave;m tr&ecirc;n l&ograve; phản ứng số 4, m&aacute;i của n&oacute; bị thổi bay một mảng, tho&aacute;t ra khỏi đ&oacute; l&agrave; một luồng kh&oacute;i bốc l&ecirc;n cao ng&uacute;t.</p>\r\n\r\n<p>C&aacute;c bức tường của t&ograve;a nh&agrave; vẫn c&ograve;n run rẩy sau vụ nổ, h&ograve;a v&agrave;o đ&oacute; l&agrave; tiếng x&igrave; của hơi nước, tiếng lửa ch&aacute;y l&aacute;ch t&aacute;ch. Dưới mặt đất, k&iacute;nh vỡ, b&ecirc; t&ocirc;ng v&agrave; c&aacute;c mảnh kim loại vương v&atilde;i khắp mọi nơi. Rải r&aacute;c trong đ&oacute; l&agrave; những khối than ch&igrave; vẫn c&ograve;n n&oacute;ng đỏ.</p>\r\n\r\n<p>&quot;N&agrave;y, đ&acirc;y l&agrave; c&aacute;i thứ g&igrave; vậy?&quot;, một trong những người l&iacute;nh cất tiếng hỏi. &quot;Đ&oacute; l&agrave; ruột l&ograve; phản ứng&quot;, c&oacute; tiếng đ&aacute;p lại. &quot;Nếu sống được cho tới s&aacute;ng mai, ch&uacute;ng ta sẽ trở th&agrave;nh những người bất tử&quot;.</p>\r\n\r\n<p>Những người l&iacute;nh, kh&ocirc;ng một ai mặc đồ bảo hộ ph&oacute;ng xạ, họ d&ugrave;ng ch&acirc;n đ&aacute; những mẩu than ch&igrave; dưới đất, thứ vật chất từng bao bọc lấy l&otilde;i uranium trong l&ograve; phản ứng RBMK. Trong b&oacute;ng tối xung quanh l&agrave; h&agrave;ng trăm nguồn bức xạ ion h&oacute;a g&acirc;y chết người.</p>\r\n\r\n<p>Cảm nhận được một điều g&igrave; đ&oacute; chẳng l&agrave;nh giữa khoảnh khắc đồng đội g&agrave;o l&ecirc;n đau đớn, Vasily nhận được lệnh k&eacute;o v&ograve;i tiến l&ecirc;n m&aacute;i để dập đ&aacute;m ch&aacute;y ngay ph&iacute;a tr&ecirc;n l&ograve; phản ứng. Đối với những người l&iacute;nh, chỉ c&oacute; ngọn lửa hữu h&igrave;nh trước mặt l&agrave; nỗi đ&aacute;ng sợ hơn cả. Gi&oacute; đang thổi từ ph&iacute;a t&acirc;y, v&agrave; nếu họ kh&ocirc;ng nhanh đ&aacute;m ch&aacute;y sẽ lan sang cả l&ograve; phản ứng số 1 v&agrave; số 2 vẫn c&ograve;n đang chạy.</p>\r\n\r\n<p>Chần chừ một l&uacute;c, Vasily x&aacute;ch v&ograve;i nước v&agrave; tiến v&agrave;o tử địa.</p>\r\n\r\n<p>Vasily gặp Lyudmilla lần đầu khi đến thăm một người bạn chung k&yacute; t&uacute;c x&aacute;. Ch&agrave;ng l&iacute;nh cứu hỏa th&ocirc;ng minh v&agrave; h&oacute;m hỉnh lập tức x&agrave; v&agrave;o v&agrave;o bếp bắt chuyện với người con g&aacute;i đảm đang đang nấu nướng cho họ. Hai người n&oacute;i chuyện về nhiều thứ, cho đến khi Lyudmilla hỏi: &quot;Anh nghĩ mẫu người như Tryndychiha thế n&agrave;o?&quot;. &quot;Em thấy đấy, Tryndychiha kh&ocirc;ng xứng l&agrave;m chồng em đ&acirc;u&quot;, Vasily nh&igrave;n c&ocirc; g&aacute;i với đ&ocirc;i mắt quyến rũ v&agrave; một nụ cười. Đ&ecirc;m đ&oacute;, anh đưa c&ocirc; về nh&agrave; v&agrave; họ bắt đầu hẹn h&ograve;.</p>\r\n\r\n<p>Sau khoảng 3 năm y&ecirc;u nhau, Vasily v&agrave; Lyudmilla l&agrave;m đ&aacute;m cưới. Họ chuyển đến sống trong k&yacute; t&uacute;c x&aacute; của những người l&iacute;nh cứu hỏa. C&oacute; tất cả 5 cặp vợ chồng trẻ sống c&ugrave;ng nhau ở đ&acirc;y, họ chia sẻ chung một căn bếp ấm c&uacute;ng. Từ cửa sổ ph&ograve;ng của Vasily v&agrave; Lyudmilla, họ c&oacute; thể nh&igrave;n thấy nh&agrave; m&aacute;y điện hạt nh&acirc;n Chernobyl. Đối với một cặp vợ chồng trẻ ở Li&ecirc;n X&ocirc; thời ấy, đ&oacute; l&agrave; cả một niềm tự h&agrave;o.</p>\r\n\r\n<p>Con đường zigzag đi l&ecirc;n m&aacute;i l&ograve; phản ứng được sắp h&agrave;ng th&agrave;nh bậc bởi những đống b&ecirc; t&ocirc;ng đổ vỡ. Vasily c&ugrave;ng đồng đội k&eacute;o những v&ograve;i nước l&ecirc;n m&aacute;i l&ograve; phản ứng số 3. Ở độ cao 8 tầng lầu, họ c&oacute; thể nh&igrave;n thẳng xuống đống đổ n&aacute;t của l&ograve; phản ứng số 4 b&ecirc;n cạnh.</p>\r\n\r\n<p>Những người l&iacute;nh l&uacute;c n&agrave;y đ&atilde; tiếp cận được những đ&aacute;m ch&aacute;y xung quanh đ&oacute;, tr&ecirc;n m&aacute;i, ch&acirc;n ống kh&oacute;i, sảnh số ba v&agrave; tr&ecirc;n đỉnh tua bin. Nhiều đ&aacute;m ch&aacute;y lớn nhỏ b&ugrave;ng ph&aacute;t dữ dội, một số c&oacute; ngọn lửa cao tới 1,5 m, số kh&aacute;c nhỏ hơn nhưng s&aacute;ng ch&oacute;i một c&aacute;ch kỳ lạ. Kh&ocirc;ng kh&iacute; tr&agrave;n ngập kh&oacute;i đen, v&agrave; c&ograve;n c&oacute; một thứ g&igrave; kh&aacute;c nữa đem lại vị như kim loại.</p>\r\n\r\n<p>Sau khi v&ograve;i được mở, những người l&iacute;nh cứu hỏa đ&atilde; bơm ra một lượng nước nhiều hơn bất kể lần n&agrave;o họ được huấn luyện. Nhưng những đ&aacute;m ch&aacute;y dường như đ&atilde; bị đốt l&ecirc;n bởi một thứ c&ograve;n d&atilde; man hơn thế: l&otilde;i uranium n&oacute;ng tới 4.000 độ, ch&uacute;ng đ&atilde; bốc ch&aacute;y khi tiếp x&uacute;c với kh&ocirc;ng kh&iacute; sau vụ nổ, gặp nước lại giải ph&oacute;ng oxy, hydro v&agrave; hơi ph&oacute;ng xạ.</p>\r\n\r\n<p>***</p>\r\n\r\n<p>5:00 s&aacute;ng, cuối c&ugrave;ng những người l&iacute;nh cũng khống chế được tất cả những ngọn lửa nh&igrave;n thấy được ở Chernobyl. Chỉ c&ograve;n lại duy nhất một cột kh&oacute;i từ đ&aacute;m ch&aacute;y than ch&igrave; vẫn đang &acirc;m ỉ ph&iacute;a b&ecirc;n trong l&otilde;i l&ograve; phản ứng số 4.</p>\r\n\r\n<p>Đổi lại, tất cả những người l&iacute;nh đều đ&atilde; bị phơi nhiễm ph&oacute;ng xạ nặng. Họ cảm thấy ch&oacute;ng mặt, đau đầu, một số n&ocirc;n mửa. Khu&ocirc;n mặt của một số người t&iacute;m t&aacute;i, trong khi số kh&aacute;c th&igrave; trắng bệch kh&ocirc;ng c&ograve;n ch&uacute;t sức sống.</p>\r\n\r\n<p>Một tốp l&iacute;nh chạy xuống từ cầu thang li&ecirc;n tục n&ocirc;n mửa. Vasily k&eacute;o được hai người đồng đội của m&igrave;nh ra khỏi khu vực ngay khi lửa tắt. Sau đ&oacute; th&igrave; cả ba đều bất tỉnh. Họ ngay lập tức được đưa đến bệnh viện.</p>\r\n\r\n<p>Bức xạ ion h&oacute;a c&oacute; ba dạng ch&iacute;nh: hạt alpha, hạt beta v&agrave; tia gamma.</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>C&aacute;c hạt alpha tương đối lớn, nặng v&agrave; di chuyển chậm n&ecirc;n kh&ocirc;ng thể x&acirc;m nhập v&agrave;o da; thậm ch&iacute; một tờ giấy c&oacute; thể chặn đ&uacute;ng ch&uacute;ng lại. Nhưng nếu hạt alpha t&igrave;m c&aacute;ch x&acirc;m nhập được v&agrave;o b&ecirc;n trong cơ thể qua c&aacute;c con đường kh&aacute;c, chẳng hạn như nuốt hoặc h&iacute;t phải hạt alpha c&oacute; thể g&acirc;y ra thiệt hại nhiễm sắc thể v&agrave; tử vong.</p>\r\n	</li>\r\n	<li>\r\n	<p>C&aacute;c hạt beta nhỏ hơn v&agrave; di chuyển nhanh hơn c&aacute;c hạt alpha. Ch&uacute;ng c&oacute; khả năng x&acirc;m nhập s&acirc;u hơn v&agrave;o m&ocirc; sống, g&acirc;y bỏng tr&ecirc;n da v&agrave; c&aacute;c tổn thương di truyền l&acirc;u d&agrave;i. Một mảnh giấy nh&ocirc;m sẽ chặn được hạt beta, hoặc đứng c&aacute;ch nguồn ph&aacute;t xạ 3 m sẽ tương đối an to&agrave;n. Nhưng cũng giống như hạt alpha, nuốt phải hạt beta l&agrave; cực kỳ nguy hiểm.</p>\r\n	</li>\r\n	<li>\r\n	<p>Tia gamma l&agrave; những s&oacute;ng cao tần di chuyển với tốc độ &aacute;nh s&aacute;ng. Đ&oacute; l&agrave; loại bức xạ mang năng lượng cao nhất v&agrave; mạnh nhất. Ch&uacute;ng c&oacute; thể tấn c&ocirc;ng qua một khoảng c&aacute;ch lớn, xuy&ecirc;n qua bất cứ thứ g&igrave; ngay cả b&ecirc; t&ocirc;ng hoặc một miếng ch&igrave; d&agrave;y. Đối với cơ thể con người, tia gamma sẽ xuy&ecirc;n thẳng qua bạn m&agrave; kh&ocirc;ng hề giảm tốc độ. N&oacute; giống như một vi&ecirc;n đạn si&ecirc;u nhỏ đ&acirc;m thủng mọi tế b&agrave;o ch&uacute;ng gặp phải tr&ecirc;n đường đi.</p>\r\n	</li>\r\n</ul>\r\n\r\n<p>Đối với những người l&iacute;nh cứu hỏa l&agrave;m nhiệm vụ tr&ecirc;n m&aacute;i l&ograve; phản ứng Chernobyl, họ đ&atilde; phải tiếp nhận một lượng ph&oacute;ng xạ l&ecirc;n tới 1.600 rem, tương đương với 160.000 lần chụp X-quang ngực.</p>\r\n\r\n<p>Kh&ocirc;ng l&acirc;u sau đ&oacute;, hệ thống miễn dịch của người bệnh sẽ sụp đổ, tủy xương của họ cạn kiệt, c&aacute;c cơ quan nội tạng tan r&atilde;. C&aacute;c bộ phận cơ thể nơi tế b&agrave;o ph&acirc;n chia nhanh ch&oacute;ng như tủy xương, da v&agrave; đường ti&ecirc;u h&oacute;a c&oacute; nguy cơ ảnh hưởng đầu ti&ecirc;n, tiếp đ&oacute; l&agrave; đến c&aacute;c cơ quan kh&aacute;c như tim, gan v&agrave; n&atilde;o.</p>\r\n\r\n<h3>&quot;Chỉ c&oacute; vợ của những người l&iacute;nh cứu hỏa kh&oacute;c&quot;</h3>\r\n\r\n<p>Khi Lyudmilla tới được bệnh viện th&igrave; đ&atilde; hơn 7 giờ s&aacute;ng. C&ocirc; thấy cả người Vasily sưng phồng l&ecirc;n, mắt anh ấy h&iacute;p hẳn lại. C&aacute;c b&aacute;c sĩ chỉ n&oacute;i rằng những người l&iacute;nh bị ngộ độc kh&oacute;i, v&agrave; thứ họ cần l&agrave; một v&agrave;i l&iacute;t sữa.</p>\r\n\r\n<p>Lyudmilla v&agrave;o l&agrave;ng mua sữa, nhưng khi c&ocirc; quay lại bệnh viện th&igrave; một h&agrave;ng r&agrave;o an ninh đ&atilde; được thiết lập.</p>\r\n\r\n<p>Trong bệnh viện, c&aacute;c b&aacute;c sĩ l&uacute;c n&agrave;y đ&atilde; nhận ra điều g&igrave; thực sự xảy ra với những người l&iacute;nh cứu hỏa. Họ kh&ocirc;ng bị ngộ độc kh&oacute;i, m&agrave; đ&oacute; l&agrave; c&aacute;c triệu chứng của t&igrave;nh trạng nhiễm xạ cấp t&iacute;nh. Tất cả được y&ecirc;u cầu cởi bỏ quần &aacute;o v&agrave; tư trang, bao gồm cả tiền bạc v&agrave; thẻ Đảng. C&aacute;c đồ vật bị nhiễm xạ nhanh ch&oacute;ng được chuyển xuống tầng hầm bệnh viện. Đứng lẫn giữa một biển người b&ecirc;n ngo&agrave;i bệnh viện Pripyat, Lyudmilla kh&ocirc;ng thể gặp được Vasily tối h&ocirc;m đ&oacute;. C&ocirc; chỉ c&oacute; thể đứng dưới cửa sổ căn ph&ograve;ng anh đang nằm. Vasily n&oacute;i vọng xuống: &quot;H&atilde;y rời đi c&agrave;ng sớm c&agrave;ng tốt. Họ sẽ chuyển anh tới Moscow, anh kh&ocirc;ng sao, đừng lo lắng&quot;.</p>\r\n\r\n<p>Nhưng l&agrave;m sao để rời đi, cả Pripyat khi đ&oacute; đ&atilde; đ&oacute;ng cửa giới nghi&ecirc;m. T&agrave;u v&agrave; xe điện ngừng chạy, mọi con đường bị chặn lại, người d&acirc;n kh&ocirc;ng thể gửi thư t&iacute;n v&agrave; cũng kh&ocirc;ng thể gọi điện thoại. Xe qu&acirc;n sự tr&agrave;n ngập trị trấn. Những người l&iacute;nh đeo mặt nạ đang rửa đường bằng bột trắng. Vẫn kh&ocirc;ng c&oacute; ai n&oacute;i về bức xạ.</p>\r\n\r\n<p>S&aacute;ng h&ocirc;m sau, tất cả c&aacute;c b&agrave; vợ v&agrave; người th&acirc;n của l&iacute;nh cứu hỏa đ&atilde; tập hợp nhau lại th&agrave;nh một nh&oacute;m trước cửa bệnh viện. Họ muốn được đi c&ugrave;ng chồng tới Moscow. &quot;H&atilde;y để ch&uacute;ng t&ocirc;i đi với chồng của ch&uacute;ng t&ocirc;i! C&aacute;c người kh&ocirc;ng thể l&agrave;m vậy!&quot;. Những b&agrave; vợ đấm v&agrave; c&agrave;o trong khi những người l&iacute;nh li&ecirc;n tục phải đẩy họ trở lại.</p>\r\n\r\n<p>Trước &aacute;p lực ấy, một b&aacute;c sĩ bước ra v&agrave; n&oacute;i: &quot;Được rồi, c&aacute;c bệnh nh&acirc;n sẽ bay đến Moscow, nhưng họ sẽ cần mang theo quần &aacute;o&quot;. Lyudmilla c&ugrave;ng những người phụ nữ kh&aacute;c chạy thật nhanh về nh&agrave;. Xe bus đ&atilde; ngừng chạy v&igrave; vậy họ đ&atilde; phải đi bộ xuy&ecirc;n qua cả th&agrave;nh phố.</p>\r\n\r\n<p>Trớ tr&ecirc;u thay, khi những người phụ nữ trở lại với t&uacute;i quần &aacute;o tr&ecirc;n tay, chiếc m&aacute;y bay đ&atilde; cất c&aacute;nh từ l&acirc;u. Bị lừa v&agrave; bỏ lại, họ chỉ c&ograve;n biết g&agrave;o kh&oacute;c.</p>\r\n\r\n<p>Lyudmilla vừa đi vừa kh&oacute;c giữa những con đường vẫn c&ograve;n bọt trắng x&oacute;a. Pripyat l&uacute;c n&agrave;y tr&agrave;n ngập xe bus. Thị trấn đ&atilde; được lệnh sơ t&aacute;n. Loa ph&aacute;t thanh n&oacute;i rằng mọi người phải tạm rời khỏi nh&agrave; 3-5 ng&agrave;y. Người d&acirc;n được khuyến c&aacute;o mang một &iacute;t quần &aacute;o ấm, họ sẽ ở tạm trong rừng. Một số người cảm thấy vui mừng v&igrave; điều đ&oacute;. Họ sẽ c&oacute; một chuyến picnic để ch&agrave;o đ&oacute;n ng&agrave;y Quốc tế lao động. Một số mang theo cả radio v&agrave; đ&agrave;n guitar. Chỉ c&oacute; vợ của những người l&iacute;nh cứu hỏa l&agrave; kh&oacute;c.</p>\r\n\r\n<h3>&quot;Khoảng lặng trước cơn b&atilde;o&quot;</h3>\r\n\r\n<p>Lyudmilla trở về Sperizhye, nh&agrave; bố mẹ Vasily một m&igrave;nh. &quot;Mẹ ơi, Vasya đang ở Moscow. Họ chở anh ấy bằng m&aacute;y bay đặc dụng&quot;. Bố Vasily nhận định rằng con &ocirc;ng đang gặp phải một t&igrave;nh trạng nghi&ecirc;m trọng. Thế l&agrave; cả gia đ&igrave;nh quy&ecirc;n g&oacute;p tiền, họ r&uacute;t hết t&agrave;i khoản ng&acirc;n h&agrave;ng cho Lyudmilla bay tới Moscow.</p>\r\n\r\n<p>***</p>\r\n\r\n<p>&quot;C&ocirc; c&oacute; con chưa?&quot;, Angelina Vasilyevna Guskova, trưởng khoa X-quang tại Bệnh viện Số 6, Moscow hỏi c&ocirc; g&aacute;i đang năn nỉ được gặp chồng m&igrave;nh. B&agrave; ấy cũng ngạc nhi&ecirc;n kh&ocirc;ng biết bằng c&aacute;ch n&agrave;o một người vợ của l&iacute;nh cứu hỏa Pripyat lại c&oacute; thể đến Moscow nhanh tới vậy, lại c&ograve;n t&igrave;m được đường tới tận đ&acirc;y.</p>\r\n\r\n<p>Đ&oacute; l&agrave; một vận may, Lyudmilla đ&atilde; gặp một vị tướng trong trạm cứu hỏa Pripyat. &Ocirc;ng ấy cho c&ocirc; số điện thoại của m&igrave;nh, đường d&acirc;y duy nhất c&ograve;n hoạt động ở thị trấn v&agrave; hứa sẽ n&oacute;i cho c&ocirc; biết th&ocirc;ng tin m&agrave; &ocirc;ng nắm được về những người l&iacute;nh.</p>\r\n\r\n<p>Xuống s&acirc;n bay ở Moscow, Lyudmilla đ&atilde; gọi về v&agrave; &ocirc;ng ấy đ&atilde; giữ lời hứa.</p>\r\n\r\n<p>&quot;Rồi t&ocirc;i c&oacute; rồi&quot;, Lyudmilla đ&aacute;p lại Guskova.</p>\r\n\r\n<p>&quot;Bao nhi&ecirc;u đứa?&quot;</p>\r\n\r\n<p>&quot;Một trai một g&aacute;i&quot;.</p>\r\n\r\n<p>&quot;Thế th&igrave; c&ocirc; kh&ocirc;ng cần sinh con nữa. Được rồi, nghe cho kỹ: Hệ thống thần kinh trung ương của chồng c&ocirc; đ&atilde; bị tổn thương ho&agrave;n to&agrave;n, hộp sọ cũng đ&atilde; bị tổn thương ho&agrave;n to&agrave;n. Nghe tiếp n&agrave;y: Nếu c&ocirc; kh&ocirc;ng cầm được nước mắt, t&ocirc;i sẽ đuổi c&ocirc; ra ngo&agrave;i ngay lập tức. Kh&ocirc;ng &ocirc;m hay h&ocirc;n. Thậm ch&iacute; đừng đến gần anh ta. C&ocirc; c&oacute; nửa tiếng đồng hồ&quot;.</p>\r\n\r\n<p>Lyudmilla v&agrave;o ph&ograve;ng khi Vasily đang c&ugrave;ng những người đồng đội chơi b&agrave;i v&agrave; cười n&oacute;i vui vẻ. C&ocirc; tr&ocirc;ng anh rất ngộ nghĩnh trong bộ đồ ngủ cỡ 48, tay &aacute;o ngắn cũn cỡn v&agrave; chiếc quần cũng vậy, c&oacute; lẽ bệnh viện đ&atilde; kh&ocirc;ng c&oacute; cỡ 52 của anh.</p>\r\n\r\n<p>&quot;Th&ocirc;i xong rồi! Ngay cả ở đ&acirc;y c&ocirc; ấy cũng t&igrave;m thấy t&ocirc;i&quot;, Vasily n&oacute;i với những người bạn trong vui mừng. Mặt anh kh&ocirc;ng c&ograve;n sưng nữa, c&aacute;c triệu chứng nhiễm xạ cấp t&iacute;nh đ&atilde; ho&agrave;n to&agrave;n biến mất. Cả những cơn ch&oacute;ng mặt, n&ocirc;n mửa b&aacute;m riết lấy họ từ Prypiat tới Moscow b&acirc;y giờ cũng kh&ocirc;ng c&ograve;n.</p>\r\n\r\n<p>H&igrave;nh ảnh của những người l&iacute;nh cứu hỏa trẻ khỏe đ&atilde; trở lại. Chỉ c&oacute; một số &iacute;t cảm thấy đau đầu nhẹ, ch&aacute;n ăn v&agrave; kh&ocirc; miệng. Một số kh&aacute;c c&oacute; da chuyển đỏ nhưng cũng chỉ hơi sưng ở vị tr&iacute; đ&atilde; tiếp x&uacute;c với tia gamma hoặc nước nhiễm xạ thấm qua quần &aacute;o. Chẳng c&oacute; l&iacute; do g&igrave; để tin Guskova, khi vị trưởng khoa ấy cảnh b&aacute;o Lyudmilla rằng cơ thể chồng c&ocirc; đ&atilde; bị tổn thương ho&agrave;n to&agrave;n. Vasily v&agrave; những người l&iacute;nh tr&ocirc;ng như thể sắp được xuất viện vậy.</p>\r\n\r\n<p>Thế nhưng, hội chứng nhiễm xạ cấp t&iacute;nh l&agrave; một thứ g&igrave; đ&oacute; hết sức kỳ lạ v&agrave; t&agrave;n khốc. Sau khi nghi&ecirc;n cứu h&agrave;ng loạt nạn nh&acirc;n của n&oacute; ở Hiroshima v&agrave; Nagasaki năm 1945, c&aacute;c b&aacute;c sĩ biết ch&iacute;nh x&aacute;c những g&igrave; sẽ xảy ra với những người l&iacute;nh cứu hỏa. Buồn n&ocirc;n, &oacute;i mửa sẽ l&agrave; những triệu chứng đầu ti&ecirc;n. Da của những người l&iacute;nh đỏ ửng sau đ&oacute; sẽ chuyển sang m&agrave;u x&aacute;m s&aacute;p, lớp da ngo&agrave;i c&ugrave;ng đ&atilde; bị giết chết bởi ph&oacute;ng xạ. Thế nhưng, c&aacute;c thiệt hại b&ecirc;n trong cơ thể họ sẽ tạm tr&igrave; ho&atilde;n trong v&ograve;ng 18 tiếng đồng hồ, đ&oacute; l&agrave; khoảng thời gian</p>\r\n\r\n<p>Vasily v&agrave; những đồng đội của m&igrave;nh đ&atilde; leo l&ecirc;n m&aacute;i l&ograve; phản ứng số 3. Ở đ&oacute;, họ đ&atilde; h&iacute;t v&agrave;o cơ thể kh&oacute;i chứa v&ocirc; v&agrave;n c&aacute;c hạt alpha v&agrave; beta. Lớp đồng phục vải đơn giản l&agrave; kh&ocirc;ng thể ngăn chặn bất kể một tia gamma n&agrave;o ph&aacute;t ra từ c&aacute;c mảnh vỡ ph&oacute;ng xạ. Ch&uacute;ng chụp lấy DNA, ph&aacute; hủy n&oacute; v&agrave; c&aacute;c tế b&agrave;o sẽ bắt đầu chết.</p>\r\n\r\n<p>Những người l&iacute;nh cứu hỏa đang bước v&agrave;o một giai đoạn trễ kh&aacute; thoải m&aacute;i. Họ được truyền kh&aacute;ng sinh để ngăn chặn nhiễm tr&ugrave;ng. C&aacute;c bệnh nh&acirc;n c&oacute; vẻ rất khỏe mạnh, nhưng đ&oacute; chỉ l&agrave; khoảng lặng trước cơn b&atilde;o. Vasily đ&atilde; phải nhận chẩn đo&aacute;n nhiễm xạ độ 1: cấp độ được m&ocirc; tả với cụm từ &quot;kh&ocirc;ng tương th&iacute;ch với sự sống&quot;.</p>\r\n\r\n<p>Mặc d&ugrave; vậy, c&aacute;c b&aacute;c sĩ vẫn muốn thử cứu anh ấy bằng một thủ tục: gh&eacute;p tủy xương.</p>\r\n\r\n<h3>&quot;A mistake can&#39;t be repeated twice because the second time isn&#39;t a mistake, it is a choice&quot;</h3>\r\n\r\n<p>&quot;B&acirc;y giờ l&agrave; ng&agrave;y hay đ&ecirc;m?&quot;, Vasily cất tiếng hỏi.</p>\r\n\r\n<p>&quot;Đ&atilde; ch&iacute;n giờ tối rồi&quot;, Lyudmilla trả lời.</p>\r\n\r\n<p>&quot;Mở cửa sổ xem em! Họ chuẩn bị bắn ph&aacute;o hoa đấy!&quot;</p>\r\n\r\n<p>H&ocirc;m đ&oacute; l&agrave; ng&agrave;y 9 th&aacute;ng 5, cả th&agrave;nh phố Moscow đang kỷ niệm Ng&agrave;y chiến thắng Đức Quốc X&atilde;, kết th&uacute;c thắng lợi cuộc Chiến tranh vệ quốc vĩ đại. Lyudmilla mở cửa sổ, căn ph&ograve;ng m&agrave; Vasily nằm tr&ecirc;n tầng 8 của bệnh viện, từ đ&oacute; cặp đ&ocirc;i c&oacute; thể nh&igrave;n thấy cả th&agrave;nh phố, Quảng Trường Đỏ, Điện Kremlin, Th&aacute;p Spasskaya, Lăng Lenin v&agrave; cả nh&agrave; thờ St. Basil&rsquo;s.</p>\r\n\r\n<p>&quot;Anh xem đẹp kh&ocirc;ng n&agrave;y&quot;, Lyudmilla n&oacute;i khi những quả ph&aacute;o hoa nổ tung trong kh&ocirc;ng trung.</p>\r\n\r\n<p>&quot;Anh bảo rồi m&agrave;, một ng&agrave;y n&agrave;o đ&oacute; anh sẽ đưa em đến Moscow. V&agrave; anh cũng từng hứa sẽ lu&ocirc;n mua hoa tặng em mỗi dịp lễ...&quot;, Vasily lấy ra từ dưới gối ba b&ocirc;ng cẩm chướng m&agrave; anh đ&atilde; đưa tiền nhờ y t&aacute; mua hộ.</p>\r\n\r\n<p>Lyudmilla chạy lại h&ocirc;n anh. &quot;T&igrave;nh y&ecirc;u của em! Em y&ecirc;u anh, chỉ anh m&agrave; th&ocirc;i&quot;.</p>\r\n\r\n<p>&quot;B&aacute;c sĩ đ&atilde; bảo em thế n&agrave;o? Kh&ocirc;ng được &ocirc;m anh cơ m&agrave;. V&agrave; cũng kh&ocirc;ng được h&ocirc;n&quot;. Lyudmilla đỡ Vasily ngồi dậy, dọn lại giường, đặt nhiệt kế. H&ocirc;m đ&oacute;, họ thức với nhau cả đ&ecirc;m.</p>\r\n\r\n<p>Vasily đ&atilde; được gh&eacute;p tủy từ một người chị họ, Lyuda, một y t&aacute; 28 tuổi. Nhưng thủ tục tr&iacute;ch tủy rất t&agrave;n khốc. N&oacute; đ&ograve;i hỏi c&aacute;c b&aacute;c sĩ phải chọc những c&acirc;y kim to d&agrave;i 15cm v&agrave;o xương người hiến tặng. Sẽ mất khoảng 2 tiếng đồng hồ, h&agrave;ng chục cho tới cả trăm lần chọc tủy ở nhiều vị tr&iacute; kh&aacute;c nhau để r&uacute;t ra được đủ một hỗn hợp lỏng đỏ chứa tế b&agrave;o gốc, c&aacute;c tế b&agrave;o sản sinh m&aacute;u mới để truyền sang cho nạn nh&acirc;n nhiễm ph&oacute;ng xạ - với hi vọng phục hồi hệ miễn dịch cho họ.</p>\r\n\r\n<p>Ca phẫu thuật được thực hiện bởi b&aacute;c sĩ Robert Gale, một nh&agrave; huyết học chuy&ecirc;n gia y tế h&agrave;ng đầu thế giới trong lĩnh vực gh&eacute;p tủy đến từ Trung t&acirc;m Y tế Đại học California. Vasily được chuyển v&agrave;o một giường bệnh đặc biệt m&agrave; Gale gọi l&agrave; &quot;h&ograve;n đảo sự sống&quot;.</p>\r\n\r\n<p>Đ&oacute; l&agrave; những giường bệnh được bao phủ bằng plastic như một tuyến ph&ograve;ng thủ quan trọng trong trận chiến, gi&uacute;p c&aacute;c b&aacute;c sĩ giữ được bệnh nh&acirc;n của m&igrave;nh sống đủ l&acirc;u để phục hồi từ ca truyền tủy. Khi hệ miễn dịch của họ gần như đ&atilde; bị ph&oacute;ng xạ ph&aacute; hủy, kh&ocirc;ng kh&iacute; bệnh nh&acirc;n h&iacute;t thở cũng phải được lọc v&agrave; khử tr&ugrave;ng bằng tia cực t&iacute;m. C&aacute;c b&aacute;c sĩ chăm s&oacute;c họ phải mặc quần &aacute;o v&ocirc; tr&ugrave;ng, hoặc chỉ được tiếp cận bệnh nh&acirc;n từ b&ecirc;n ngo&agrave;i tấm plastic, th&ocirc;ng qua c&aacute;nh tay cao su.</p>\r\n\r\n<p>C&aacute;c nh&acirc;n vi&ecirc;n y tế đ&atilde; cố gắng giữ Lyudmilla ở ngo&agrave;i, nhưng b&acirc;y giờ kh&ocirc;ng c&oacute; g&igrave; ngăn được c&ocirc; ấy ở cạnh Vasily. C&ocirc; lẻn v&agrave;o ph&ograve;ng khi c&aacute;c b&aacute;c sĩ hết ca trực buổi tối. Lyudmilla ở đ&oacute; mỗi đ&ecirc;m, cạnh Vasily v&igrave; kh&ocirc;ng c&ograve;n bất kể một y t&aacute; n&agrave;o chăm s&oacute;c cho những người l&iacute;nh cứu hỏa ở đ&oacute; nữa. Một phần v&igrave; họ sợ bị nhiễm xạ, một phần v&igrave; h&igrave;nh ảnh những người l&iacute;nh l&uacute;c n&agrave;y khiến họ khiếp sợ. Mặc d&ugrave; đ&atilde; phục hồi sau ca gh&eacute;p tủy, t&igrave;nh h&igrave;nh chung của Vasily xấu đi tr&ocirc;ng thấy. Mỗi ng&agrave;y, anh như lột x&aacute;c trở th&agrave;nh một người mới.</p>\r\n\r\n<p>C&aacute;c vết bỏng phồng rộp trở lại tr&ecirc;n khu&ocirc;n mặt. Trong miệng, tr&ecirc;n lưỡi, tr&ecirc;n m&aacute; c&aacute;c vết thương nhỏ lớn dần. Da bong ra từng lớp, bọc lấy ngo&agrave;i c&ugrave;ng cơ thể l&agrave; một lớp da chết như phim trắng. Cả khu&ocirc;n mặt, cơ thể Vasily loang lổ những mảng m&agrave;u xanh da trời, trắng, đỏ, n&acirc;u x&aacute;m.</p>\r\n\r\n<p>T&oacute;c anh ấy bắt đầu rụng, phổi sưng l&ecirc;n v&agrave; ngực ng&agrave;y c&agrave;ng to. Vasily kh&oacute; thở, kh&oacute; ngủ v&agrave; phải ti&ecirc;m thuốc an thần cho đến khi thuốc giảm đau cũng kh&ocirc;ng c&ograve;n t&aacute;c dụng. C&aacute;c cơ quan nội tạng b&ecirc;n trong cơ thể đ&atilde; c&oacute; dấu hiệu hoại tử. To&agrave;n bộ cơ thể anh sưng phồng l&ecirc;n kh&ocirc;ng thể mặc quần &aacute;o.</p>\r\n\r\n<p>Ban ng&agrave;y, một số b&aacute;c sĩ sẽ đến chụp ảnh anh ấy, v&igrave; mục đ&iacute;ch khoa học. Họ che một mảnh vải nhỏ tr&ecirc;n cơ thể anh. Tối đến, khi Lyudmilla đến v&agrave; thay mảnh vải, n&oacute; d&iacute;nh đầy m&aacute;u. Khi c&ocirc; bế Vasily dậy, c&aacute;nh tay c&ocirc; d&iacute;nh đầy những mảnh da của anh. Vasily cố chống người dậy, Lyudmilla sẽ l&agrave;m phẳng ga giường. Mỗi nếp gấp n&agrave;o tr&ecirc;n đ&oacute; b&acirc;y giờ cũng c&oacute; thể cứa một vết thương v&agrave;o da thịt anh ấy. Lyudmilla đ&atilde; phải cắt m&oacute;ng tay đến bật m&aacute;u để kh&ocirc;ng v&ocirc; t&igrave;nh l&agrave;m tổn thương anh.</p>\r\n\r\n<p>Vasily kh&ocirc;ng c&ograve;n c&oacute; thể ăn, d&ugrave; c&aacute;c b&aacute;c sĩ đ&atilde; gợi &yacute; cho anh ấy ăn trứng sống. Nhưng hệ ti&ecirc;u h&oacute;a của anh ấy kh&ocirc;ng c&ograve;n l&agrave;m việc. Thỉnh thoảng, Vasily n&ocirc;n mửa. Chẳng c&oacute; thức ăn n&agrave;o trong dạ d&agrave;y cả, thay v&agrave;o đ&oacute; l&agrave; những mảnh phổi v&agrave; gan tr&ocirc;i ra ngo&agrave;i.</p>\r\n\r\n<p>Đến 11 giờ ng&agrave;y 13 th&aacute;ng 5 năm 1986, người l&iacute;nh cứu hỏa Vasily Ignatenko qua đời.</p>\r\n\r\n<h3><strong>&quot;Họ ch&ocirc;n anh với đ&ocirc;i ch&acirc;n trần&quot;</strong></h3>\r\n\r\n<p>Lyudmilla g&agrave;o kh&oacute;c như thể cả t&ograve;a nh&agrave; sẽ nghe thấy c&ocirc; ấy. C&ocirc; mới chỉ rời anh 3 tiếng đồng hồ để đến tham dự tang lễ đồng nghiệp Vasily. Khi trở lại bệnh viện, y t&aacute; n&oacute;i rằng &quot;Anh ấy đ&atilde; chết 15 ph&uacute;t trước&quot;. Những lời cuối c&ugrave;ng Vasily đ&atilde; gọi t&ecirc;n c&ocirc;: &quot;Lyusya, Lyusenka&quot;. Kể từ đ&oacute;, Lyudmilla kh&ocirc;ng rời anh th&ecirc;m một ph&uacute;t gi&acirc;y n&agrave;o nữa. Những người l&iacute;nh mặc lại đồng phục cho anh ấy. Bởi to&agrave;n bộ cơ thể Vasily đ&atilde; sưng phồng, họ phải cắt bộ đồng phục ra. Kh&ocirc;ng c&oacute; một đ&ocirc;i gi&agrave;y n&agrave;o vừa với đ&ocirc;i ch&acirc;n ph&ugrave; nề của anh, họ đ&atilde; phải ch&ocirc;n anh với đ&ocirc;i ch&acirc;n trần. Một chiếc t&uacute;i nylon d&agrave;y được chuẩn bị để bọc thi thể Vasily lại. Sau đ&oacute; họ đặt anh v&agrave;o một quan t&agrave;i bằng gỗ. Chiếc quan t&agrave;i được bọc lại bằng một lớp nylon kh&aacute;c rồi tất cả được đặt v&agrave;o một quan t&agrave;i kẽm. Nắp quan t&agrave;i được h&agrave;n k&iacute;n lại.</p>\r\n\r\n<blockquote>&quot;Những người l&iacute;nh n&agrave;y l&agrave; những anh h&ugrave;ng. Thi thể của họ b&acirc;y giờ kh&ocirc;ng c&ograve;n thuộc về gia đ&igrave;nh nữa. Họ l&agrave; những anh h&ugrave;ng của Li&ecirc;n X&ocirc;. B&acirc;y giờ họ thuộc về Li&ecirc;n X&ocirc;&quot;.</blockquote>\r\n\r\n<p>Tất cả c&aacute;c quan t&agrave;i kẽm được đưa tới một nghĩa trang ở Moscow. Họ ch&ocirc;n v&ugrave;i ch&uacute;ng xuống một lớp b&ecirc; t&ocirc;ng d&agrave;y để ngăn ph&oacute;ng xạ.</p>\r\n\r\n<p>Ở giữa nghĩa trang, một tượng đ&agrave;i được dựng l&ecirc;n. N&oacute; l&agrave; h&igrave;nh tượng một người đ&agrave;n &ocirc;ng che chắn th&agrave;nh phố khỏi vụ nổ ph&oacute;ng xạ. Tr&ecirc;n mỗi nấm mộ l&agrave; một bức ph&ugrave; đi&ecirc;u bằng đ&aacute; khắc lại ch&acirc;n dung những người l&iacute;nh cứu hỏa c&ugrave;ng những nạn nh&acirc;n kh&aacute;c của vụ nổ ở Chernobyl.</p>\r\n\r\n<p><strong>Ng&agrave;y 26 th&aacute;ng 4 năm 1986 đ&atilde; thay đổi cuộc sống của Lyudmilla Ignatenko một c&aacute;ch vĩnh viễn. Nếu l&ograve; phản ứng Chernobyl kh&ocirc;ng ph&aacute;t nổ, c&ocirc; đ&atilde; c&oacute; thể c&ugrave;ng chồng m&igrave;nh trở về qu&ecirc; trồng khoai t&acirc;y v&agrave;o s&aacute;ng sớm. Lyudmilla sẽ hạ sinh một b&eacute; g&aacute;i được Vasily đặt t&ecirc;n trước l&agrave; Natasha.</strong></p>\r\n\r\n<p><strong>Nhưng sau khi cơ thể c&ocirc; hấp thụ ph&oacute;ng xạ ph&aacute;t ra từ cơ thể Vasily, đứa b&eacute; đ&atilde; chết chỉ sau 4 tiếng ch&agrave;o đời. V&igrave; những hi sinh của Vasily, nh&agrave; nước đ&atilde; cấp cho Lyudmilla một căn hộ ở Kiev. Đ&oacute; l&agrave; một căn hộ lớn 2 ph&ograve;ng m&agrave; cả Vasily v&agrave; c&ocirc; từng mơ ước. Nhưng m&atilde;i m&atilde;i, anh kh&ocirc;ng c&ograve;n ở đ&acirc;y với c&ocirc; được nữa.</strong></p>\r\n\r\n<p><strong>Năm 2006, đ&uacute;ng 20 năm sau thảm họa, Vasily Ignatenko được nh&agrave; nước Ukraine truy tặng hu&acirc;n chương Anh h&ugrave;ng.</strong></p>\r\n\r\n<h3>Cũng như hiện tại khi chủng virus Covid-19 đang ho&agrave;nh h&agrave;nh trở lại v&agrave; kh&ocirc;ng c&oacute; dấu hiệu suy giảm, th&igrave; h&atilde;y b&igrave;nh tĩnh, chọn lọc th&ocirc;ng tin v&agrave; h&atilde;y đặt niềm tin v&agrave;o những người đang ở tuyến đầu của bệnh dịch để chiến đấu. Đừng tự hại m&igrave;nh v&agrave; đồng b&agrave;o v&igrave; sự thiếu hiểu biết v&agrave; cả tin.</h3>\r\n\r\n<ul>\r\n	<li>\r\n	<p><em>B&agrave;i viết được dịch thuật, chọn lọc v&agrave; sưu tầm bởi L&ecirc; Tiến Nguy&ecirc;n.</em></p>\r\n	</li>\r\n	<li>\r\n	<p><em>Tổng hợp từ WHO; Wikipedia; Vnexpress, TR&Iacute; THỨC TRẺ; allthatsinteresting</em></p>\r\n	</li>\r\n	<li>\r\n	<p><em>C&aacute;c bạn c&oacute; thể ủng hộ m&igrave;nh tại fanpage&nbsp;<a href=\"https://www.facebook.com/TheEden.v/?ref=gs&amp;__tn__=-U-UK-R&amp;eid=ARA5V7mKQ280LR9nMTxCjKSRhOdEp4kbDhnJivkOrbROKQ2AaSfIXy6nyLl5PGnPEmxT02qR3VbV6Cq8&amp;fref=gs&amp;dti=245234876341228&amp;hc_location=group&amp;__cft__[0]=AZVwFAb_19sCLhVjfCP-MUw90HJxPOG_bkRFncHusBmv5GCXi-1L_wO8W5bYcLXJC-TKdrKzemc-6iwwNWTKmhi51z26Z6AlD1lPM7Y1A5lYg9O6oXIekajZ1yLmNGUpfJdqpqvyKvqLgAq2lDEMWEBC\">The EDEN</a></em></p>\r\n	</li>\r\n</ul>\r\n\r\n<p><a href=\"https://www.facebook.com/photo/?fbid=1573312916184091&amp;set=pcb.1341481009517349&amp;__cft__[0]=AZVwFAb_19sCLhVjfCP-MUw90HJxPOG_bkRFncHusBmv5GCXi-1L_wO8W5bYcLXJC-TKdrKzemc-6iwwNWTKmhi51z26Z6AlD1lPM7Y1A5lYg9O6oXIekajZ1yLmNGUpfJdqpqvyKvqLgAq2lDEMWEBC&amp;__tn__=*bH-R\"><img alt=\"\" src=\"https://scontent.fhan5-3.fna.fbcdn.net/v/t1.0-0/p403x403/117177534_1573312919517424_3417931917073419743_n.jpg?_nc_cat=106&amp;_nc_sid=b9115d&amp;_nc_ohc=Yxf0IawC_d4AX9nn65Y&amp;_nc_ht=scontent.fhan5-3.fna&amp;_nc_tp=6&amp;oh=86100c12b00fe82558a50d189081ced1&amp;oe=5F6029E8\" /></a></p>\r\n\r\n<p><a href=\"https://www.facebook.com/photo/?fbid=1573312926184090&amp;set=pcb.1341481009517349&amp;__cft__[0]=AZVwFAb_19sCLhVjfCP-MUw90HJxPOG_bkRFncHusBmv5GCXi-1L_wO8W5bYcLXJC-TKdrKzemc-6iwwNWTKmhi51z26Z6AlD1lPM7Y1A5lYg9O6oXIekajZ1yLmNGUpfJdqpqvyKvqLgAq2lDEMWEBC&amp;__tn__=*bH-R\"><img alt=\"\" src=\"https://scontent.fhan5-7.fna.fbcdn.net/v/t1.0-0/s600x600/116977511_1573312929517423_7580522425065653690_n.jpg?_nc_cat=100&amp;_nc_sid=b9115d&amp;_nc_ohc=tiKtmMIvqMAAX8d6x33&amp;_nc_ht=scontent.fhan5-7.fna&amp;_nc_tp=7&amp;oh=e3d3fed295cb4743014fa854ce5e8251&amp;oe=5F60DD89\" /></a></p>', 18020001, '2020-08-17 04:17:21', '2020-08-17 04:17:21', 'BIÊN NIÊN SỬ NHÂN LOẠI KÌ I:', 'xG5p_toan1.jpg', '<h3><strong><em>&quot;THẢM HỌA CHERNOBYL V&Agrave; CHUYỆN VỀ NHỮNG G&Atilde; BẤT TỬ RA ĐI VỚI Đ&Ocirc;I CH&Acirc;N TRẦN&quot;</em></strong></h3>'),
(1234577, '<p>L&uacute;c đ&oacute; t&ocirc;i tưởng thế l&agrave; ngầu <img alt=\":v\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/e31/1/16/PACMAN.png\" style=\"height:16px; width:16px\" /></p>\r\n\r\n<p><a href=\"https://www.facebook.com/photo/?fbid=2840742466154290&amp;set=gm.1346465375685579&amp;__cft__[0]=AZVGDtD4yEBnbuE85QgzfMYMhXWxY0S8jxTyczj58CKjOIMYuHGfhLDHDWllQBDxnB6JR23CA0mp3sG-39V7yph0ChB95AOS-Xc7ovBYZ1CtWSfNE_Df4rEKYplAF-tn8xys549C1l1yhmvo1bGlNRvqp8Xu6TiDRh_6or62wsWgnOSeM8RV93Oes7WzzOHnnCc&amp;__tn__=EH-R\"><img alt=\"Hình ảnh có thể có: 1 người, văn bản cho biết \'Tôi thấy các em năm nhất khoa IT đoi Avatar, hình Hacker các kiều\'\" src=\"https://scontent.fhan5-7.fna.fbcdn.net/v/t1.0-0/p526x296/117715628_2840742469487623_7403413790705320761_o.jpg?_nc_cat=111&amp;_nc_sid=825194&amp;_nc_ohc=aMcAgKTNw78AX8c0qJc&amp;_nc_ht=scontent.fhan5-7.fna&amp;_nc_tp=6&amp;oh=ed4f1a9efd8f5467c327294f7eda9c91&amp;oe=5F5DAFC8\" style=\"height:526px; width:526px\" /></a></p>\r\n\r\n<p><img src=\"data:image/svg+xml,%3csvg xmlns=\'http://www.w3.org/2000/svg\' xmlns:xlink=\'http://www.w3.org/1999/xlink\' viewBox=\'0 0 16 16\'%3e%3cdefs%3e%3clinearGradient id=\'a\' x1=\'50%25\' x2=\'50%25\' y1=\'10.25%25\' y2=\'100%25\'%3e%3cstop offset=\'0%25\' stop-color=\'%23FEEA70\'/%3e%3cstop offset=\'100%25\' stop-color=\'%23F69B30\'/%3e%3c/linearGradient%3e%3clinearGradient id=\'d\' x1=\'50%25\' x2=\'50%25\' y1=\'0%25\' y2=\'100%25\'%3e%3cstop offset=\'0%25\' stop-color=\'%23472315\'/%3e%3cstop offset=\'100%25\' stop-color=\'%238B3A0E\'/%3e%3c/linearGradient%3e%3clinearGradient id=\'e\' x1=\'50%25\' x2=\'50%25\' y1=\'0%25\' y2=\'81.902%25\'%3e%3cstop offset=\'0%25\' stop-color=\'%23FC607C\'/%3e%3cstop offset=\'100%25\' stop-color=\'%23D91F3A\'/%3e%3c/linearGradient%3e%3cfilter id=\'c\' width=\'118.8%25\' height=\'118.8%25\' x=\'-9.4%25\' y=\'-9.4%25\' filterUnits=\'objectBoundingBox\'%3e%3cfeGaussianBlur in=\'SourceAlpha\' result=\'shadowBlurInner1\' stdDeviation=\'1\'/%3e%3cfeOffset dy=\'-1\' in=\'shadowBlurInner1\' result=\'shadowOffsetInner1\'/%3e%3cfeComposite in=\'shadowOffsetInner1\' in2=\'SourceAlpha\' k2=\'-1\' k3=\'1\' operator=\'arithmetic\' result=\'shadowInnerInner1\'/%3e%3cfeColorMatrix in=\'shadowInnerInner1\' values=\'0 0 0 0 0.921365489 0 0 0 0 0.460682745 0 0 0 0 0 0 0 0 0.35 0\'/%3e%3c/filter%3e%3cpath id=\'b\' d=\'M16 8A8 8 0 110 8a8 8 0 0116 0\'/%3e%3c/defs%3e%3cg fill=\'none\'%3e%3cuse fill=\'url(%23a)\' xlink:href=\'%23b\'/%3e%3cuse fill=\'black\' filter=\'url(%23c)\' xlink:href=\'%23b\'/%3e%3cpath fill=\'url(%23d)\' d=\'M3 8.008C3 10.023 4.006 14 8 14c3.993 0 5-3.977 5-5.992C13 7.849 11.39 7 8 7c-3.39 0-5 .849-5 1.008\'/%3e%3cpath fill=\'url(%23e)\' d=\'M4.541 12.5c.804.995 1.907 1.5 3.469 1.5 1.563 0 2.655-.505 3.459-1.5-.551-.588-1.599-1.5-3.459-1.5s-2.917.912-3.469 1.5\'/%3e%3cpath fill=\'%232A3755\' d=\'M6.213 4.144c.263.188.502.455.41.788-.071.254-.194.369-.422.371-.78.011-1.708.255-2.506.612-.065.029-.197.088-.332.085-.124-.003-.251-.058-.327-.237-.067-.157-.073-.388.276-.598.545-.33 1.257-.48 1.909-.604a7.077 7.077 0 00-1.315-.768c-.427-.194-.38-.457-.323-.6.127-.317.609-.196 1.078.026a9 9 0 011.552.925zm3.577 0a8.953 8.953 0 011.55-.925c.47-.222.95-.343 1.078-.026.057.143.104.406-.323.6a7.029 7.029 0 00-1.313.768c.65.123 1.363.274 1.907.604.349.21.342.44.276.598-.077.18-.203.234-.327.237-.135.003-.267-.056-.332-.085-.797-.357-1.725-.6-2.504-.612-.228-.002-.351-.117-.422-.37-.091-.333.147-.6.41-.788z\'/%3e%3c/g%3e%3c/svg%3e\" style=\"height:18px; width:18px\" /></p>', 18020001, '2020-08-17 04:21:25', '2020-08-17 05:52:23', 'Lúc đó tôi tưởng thế là ngầu :v', 'Dpe4_home-office-569153_1920.jpg', '<p>C&aacute;c em IT đổi avatar</p>'),
(1234578, '<p>Theo nguồn tin, nh&oacute;m doanh nghiệp n&agrave;y đ&atilde; cho Revlon vay số tiền n&agrave;y v&agrave;o năm 2016.</p>\r\n\r\n<p>Tuy nhi&ecirc;n, niềm vui kh&ocirc;ng k&eacute;o d&agrave;i l&acirc;u khi ph&iacute;a Citi li&ecirc;n hệ với c&aacute;c chủ nợ của Revlon, y&ecirc;u cầu họ phải ho&agrave;n trả lại khoản tiền 900 triệu USD đ&atilde; chuyển khoản.</p>\r\n\r\n<p>Đại diện của Citi khẳng định đ&acirc;y chỉ l&agrave; một &quot;nhầm lẫn&quot; kh&ocirc;ng đ&aacute;ng c&oacute; từ một sai s&oacute;t của nh&acirc;n vi&ecirc;n. Revlon cho biết kh&ocirc;ng ủy nhiệm Citi thanh to&aacute;n số tiền nợ tr&ecirc;n.</p>\r\n\r\n<p>Một số chủ nợ, bao gồm Brigade, HPS v&agrave; Symphony, từ chối chuyển tiền lại cho Citi v&igrave; theo họ, số nợ n&agrave;y lẽ ra phải được Revlon thanh to&aacute;n từ nhiều năm trước.</p>', 99990001, '2020-08-17 04:34:53', '2020-08-17 04:34:53', 'Ngân hàng Mỹ chuyển khoản nhầm đúng cho chủ nợ', 'yEH9_11.jpg', '<p>Theo Bloomberg, một số chủ nợ của h&atilde;ng mỹ phẩm Revlon đ&atilde; tỏ ra bất ngờ v&ocirc; c&ugrave;ng khi được nhận lại cả vốn lẫn l&atilde;i v&agrave;o h&ocirc;m 13/8 qua chuyển khoản.</p>');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Tổng Quan', '2020-08-07 18:01:00', '2020-08-11 00:22:34'),
(2, 'Cập Nhật Hồ Sơ', '2020-08-07 18:01:16', '2020-08-11 00:22:56'),
(3, 'Blog Cá Nhân', '2020-08-07 18:01:30', '2020-08-11 00:23:08'),
(4, 'Nhà Trường', '2020-08-07 18:01:40', '2020-08-11 00:23:18'),
(5, 'Sinh Viên', '2020-08-07 18:22:18', '2020-08-11 00:23:27'),
(6, 'Công Ty', '2020-08-07 18:22:24', '2020-08-11 00:23:35'),
(7, 'Thiết Lập', '2020-08-07 19:58:33', '2020-08-11 00:24:12'),
(8, 'Trợ Giúp', '2020-08-11 00:24:19', '2020-08-11 00:24:19'),
(9, 'CV Cá Nhân', '2020-08-11 00:24:31', '2020-08-11 00:24:31'),
(10, 'Blog Chia Sẻ', '2020-08-11 00:24:37', '2020-08-11 00:24:37'),
(11, 'c++', '2020-08-16 23:07:21', '2020-08-16 23:07:21');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `company`
--

CREATE TABLE `company` (
  `id` int(11) NOT NULL,
  `address` text DEFAULT NULL,
  `mobile` varchar(50) DEFAULT NULL,
  `fax` varchar(50) DEFAULT NULL,
  `yearEstablish` int(3) DEFAULT NULL,
  `offer` text DEFAULT NULL,
  `salary` varchar(50) DEFAULT NULL,
  `numbers` int(10) DEFAULT NULL,
  `bonus` text DEFAULT NULL,
  `startDayOffer` date DEFAULT NULL,
  `endDayOffer` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  `Hinh` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `company`
--

INSERT INTO `company` (`id`, `address`, `mobile`, `fax`, `yearEstablish`, `offer`, `salary`, `numbers`, `bonus`, `startDayOffer`, `endDayOffer`, `created_at`, `updated_at`, `Hinh`) VALUES
(1, '6F, 8F, AC Building, 78 Duy Tân, Cầu Giấy, Hà Nội', '0247.3039.996', '03-6261-5637', 1991, NULL, '1000$ - 5000$', 15, 'Môi trường làm việc tại VTI vô cùng năng động, chuyên nghiệp, luôn cập nhật những xu hướng công nghệ mới nhất (AI, Cloud Computing, Robotics, DeepLens).\r\nHệ thống đánh giá năng lực review 2 lần/ năm, chế độ đãi ngộ cạnh tranh, tăng lương đột biến theo kết quả thực hiện.\r\nHàng năm VTI dành tặng 100% chi phí chuyến du lịch Nhật Bản cho 02 cá nhân đạt thành tích xuất sắc nhất năm.\r\nNhân viên được hưởng chế độ nghỉ mát hàng năm, teambuilding 3 lần/ năm, các hoạt động thể thao và giải trí, đào tạo phong phú (Yoga, bơi lội, Kendo, Zumba...).\r\nĐến với VTI, bạn sẽ được tham gia khóa học tiếng Nhật, các buổi Seminar công nghệ miễn phí và cơ hội Onsite làm việc tại Nhật Bản.\r\nVTi hỗ trợ nhân viên tham gia các kì thi chứng chỉ công nghệ (CMMi, Scrum, Agile, AWS, v.v...).', '2020-07-23', '2021-02-10', NULL, '2020-08-17 03:53:04', 'Fzfz_avatarvti.jpg'),
(2, '2nd Floor, CT1-CT2 Green Park Tower, Dương Đình Nghệ, Yên Hòa, Cầu Giấy, Hà Nội', '0962.623.140', NULL, 2017, 'Tuyển thực tập sinh vị trí: Fullstack Developer', '2000$', 15, 'HONEST - ENTHUSIASM - RESPONSIBILITY - CREATION', '2020-07-15', '2022-07-15', NULL, NULL, NULL),
(3, '4th floor, Tòa nhà Tây Hà, 19 Tố Hữu, Hà Nội, Việt Nam', '0982171732', NULL, 2009, 'Thực tập sinh app:\r\ngame Quy Kiem 3D\r\ngame Nhat Kiem Giang Ho\r\ngame Vua Tam Quoc\r\ngame Tinh Kiem 3D', '1500$ - 2000$', 30, 'fb.com/FuntapCorpCareers', '2020-07-03', '2025-02-21', NULL, NULL, NULL),
(4, 'Toà nhà FPT, 17 Duy Tân, Dịch Vọng Hậu, Cầu Giấy, HN', '096 912 52 48', NULL, 1990, 'Fullstack Java Web Developer: https://bitly.com.vn/kdX3y\r\nJava SE Developer: https://bitly.com.vn/DzTli\r\nFullstack .Net Web Developer: https://bitly.com.vn/NzLdb\r\nFront-end Developer: https://bitly.com.vn/Dbugn\r\nEmbedded Developer: https://bitly.com.vn/tATGj\r\nWeb Application Testing: https://bit.ly/2NS8vMM\r\nProfessional React Developer: https://bit.ly/2CzP756', '1000$ - 2500$', 45, '6 LÝ DO nên học lập trình tại FPT Software Academy:\r\n✅ Đào tạo để làm việc: chương trình đào tạo thực tế với yêu cầu của công việc được xây dựng bởi đội ngũ chuyên gia hàng đầu làm việc tại FPT Software - công ty phần mềm số 1 Việt Nam.\r\n✅ Hình thức đào tạo linh hoạt: kết hợp học offline tại Trung tâm và online tại nhà (Blended Learning ).\r\n✅ Mô hình đào tạo 3 chiều: ngoài đội ngũ giảng viên (Trainer) FPT Software Acadmey còn có các trợ giảng (Mentor) và quản lý lớp (Admin) giúp tăng tương tác, hỗ trợ học viên tốt nhất.\r\n✅ Thực chiến với chuyên gia: Hơn 60% thời lượng thực hành giúp học viên nắm vững kiến thức, thực hành trên các dự án thật.\r\n✅ 100% cam kết việc làm sau tốt nghiệp với mức thu nhập khởi điểm lên tới 14M/tháng\r\n✅ Miễn phí khóa học kỹ năng mềm dành cho lập trình viên (trị giá 3.000.000 VNĐ): Tiếng anh chuyên ngành IT, kỹ năng trình bày, kỹ năng viết mail, kỹ năng tạo CV, kỹ năng trả lời phỏng vấn, làm việc nhóm và báo cáo công việc', NULL, NULL, NULL, NULL, NULL),
(5, 'Tầng 5 - TTTM, Tòa Ecolife - 58 Tố Hữu, Nam Từ Liêm, Hà Nội\r\nTầng 6 - Tòa Bạch Đằng - 51 Xô Viết Nghệ Tĩnh, Hòa Cường Nam, Hải Châu, Đà Nằng', '02466874606', NULL, 2015, 'Internship (Frontend/backend/AI)\r\nFresher (Frontend/Backend/Game Developer)\r\nJunior/Senior (Mobile/ Tester)', '2200$ - 3000$', 5, 'Môi trường trẻ\r\nLàm việc vì đam mê\r\nTrách nhiệm và kỉ luật cao\r\nTinh thần tự học và chia sẻ kiến thức\r\nTin tưởng - Chia sẻ - Trung thực.', '2020-07-21', NULL, NULL, NULL, NULL),
(6, NULL, '090 515 15 55', NULL, 2016, 'Devops Engineer\r\nFullstack Developer\r\nQA Tester (Auto/Manual)', '1000$ - 2000$', 17, 'Tuyển dụng OPEN COMMERCE GROUP (BEEKETING PREVIOUSLY)\r\nWebsite: http://opencommercegroup.com/', NULL, NULL, NULL, NULL, NULL),
(99990013, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1000$  1tháng', NULL, NULL, '2020-08-17 03:40:42', '2020-08-17 03:40:42', NULL),
(99990019, 'abc', '0866867299', '12345', NULL, NULL, '2000$', 3, NULL, '2020-07-22', '2020-07-24', '2020-07-30 12:06:06', '2020-08-16 11:01:24', 'dwJY_eanV_5XDQ_K0Vo_3uoc_cancel.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `id_user` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `id_user`, `title`, `content`, `created_at`, `updated_at`) VALUES
(1, 'Phạm Văn Trọng', 'student2@gmail.com', 99990023, 'Phạm Văn Trọng 18021313 1', '123456', '2020-08-16 13:38:15', '2020-08-16 13:38:15'),
(2, 'Trần Thị Thu Trang', 'trangtri@gmail.com', 18020001, 'Phản Hồi', 'website rất tuyệt', '2020-08-17 04:23:34', '2020-08-17 04:23:34'),
(3, 'Phạm Văn Trọng', 'student2@gmail.com', 18020001, 'Phạm Văn Trọng 18021313 1', 'abc', '2020-08-17 06:31:51', '2020-08-17 06:31:51');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `fk_skill`
--

CREATE TABLE `fk_skill` (
  `id` int(11) NOT NULL,
  `student_id` int(11) DEFAULT NULL,
  `teacher_id` int(11) DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL,
  `skill_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `fk_skill`
--

INSERT INTO `fk_skill` (`id`, `student_id`, `teacher_id`, `company_id`, `skill_id`, `created_at`, `updated_at`) VALUES
(226, 99990026, NULL, NULL, 2, '2020-08-16 18:31:51', '2020-08-16 18:31:51'),
(227, 99990026, NULL, NULL, 3, '2020-08-16 18:31:51', '2020-08-16 18:31:51'),
(228, 99990026, NULL, NULL, 4, '2020-08-16 18:31:51', '2020-08-16 18:31:51'),
(246, NULL, NULL, 99990019, 2, '2020-08-16 20:07:36', '2020-08-16 20:07:36'),
(247, NULL, NULL, 99990019, 3, '2020-08-16 20:07:36', '2020-08-16 20:07:36'),
(248, 99990020, NULL, NULL, 2, '2020-08-16 20:41:17', '2020-08-16 20:41:17'),
(249, 99990020, NULL, NULL, 3, '2020-08-16 20:41:17', '2020-08-16 20:41:17'),
(250, 99990020, NULL, NULL, 4, '2020-08-16 20:41:17', '2020-08-16 20:41:17'),
(266, NULL, 99990023, NULL, 2, '2020-08-16 20:47:51', '2020-08-16 20:47:51'),
(267, NULL, 99990023, NULL, 3, '2020-08-16 20:47:51', '2020-08-16 20:47:51'),
(268, NULL, 99990023, NULL, 4, '2020-08-16 20:47:51', '2020-08-16 20:47:51'),
(269, 99990030, NULL, NULL, 2, '2020-08-17 06:02:26', '2020-08-17 06:02:26'),
(294, NULL, 99990001, NULL, 3, '2020-08-17 11:26:51', '2020-08-17 11:26:51'),
(295, NULL, 99990001, NULL, 4, '2020-08-17 11:26:51', '2020-08-17 11:26:51'),
(296, 18021290, NULL, NULL, 2, '2020-08-17 12:24:00', '2020-08-17 12:24:00'),
(297, 18021290, NULL, NULL, 4, '2020-08-17 12:24:31', '2020-08-17 12:24:31'),
(298, 18021313, NULL, NULL, 2, '2020-08-17 12:25:24', '2020-08-17 12:25:24'),
(299, 99990022, NULL, NULL, 2, '2020-08-17 12:26:14', '2020-08-17 12:26:14'),
(300, 99990025, NULL, NULL, 5, '2020-08-17 12:26:44', '2020-08-17 12:26:44'),
(304, 99990028, NULL, NULL, 4, '2020-08-17 12:28:24', '2020-08-17 12:28:24'),
(305, 99990028, NULL, NULL, 5, '2020-08-17 12:28:34', '2020-08-17 12:28:34'),
(306, NULL, 99990004, NULL, 4, '2020-08-17 12:29:19', '2020-08-17 12:29:19'),
(307, NULL, 99990004, NULL, 3, '2020-08-17 12:29:27', '2020-08-17 12:29:27'),
(308, NULL, 99990000, NULL, 2, '2020-08-17 12:29:39', '2020-08-17 12:29:39'),
(309, NULL, 99990000, NULL, 3, '2020-08-17 12:29:50', '2020-08-17 12:29:50'),
(310, NULL, 99990000, NULL, 5, '2020-08-17 12:30:00', '2020-08-17 12:30:00'),
(311, NULL, 99990003, NULL, 4, '2020-08-17 12:30:19', '2020-08-17 12:30:19'),
(312, NULL, 99990005, NULL, 3, '2020-08-17 12:30:30', '2020-08-17 12:30:30'),
(313, NULL, 99990005, NULL, 5, '2020-08-17 12:30:39', '2020-08-17 12:30:39'),
(314, NULL, 99990006, NULL, 2, '2020-08-17 12:31:03', '2020-08-17 12:31:03'),
(315, NULL, 99990007, NULL, 4, '2020-08-17 12:31:28', '2020-08-17 12:31:28'),
(316, NULL, 99990007, NULL, 2, '2020-08-17 12:31:54', '2020-08-17 12:31:54'),
(317, NULL, NULL, 2, 4, '2020-08-17 12:32:29', '2020-08-17 12:32:29'),
(318, NULL, NULL, 3, 2, '2020-08-17 12:32:42', '2020-08-17 12:32:42'),
(319, NULL, NULL, 3, 3, '2020-08-17 12:32:50', '2020-08-17 12:32:50'),
(320, NULL, NULL, 4, 3, '2020-08-17 12:33:02', '2020-08-17 12:33:02'),
(322, NULL, NULL, 5, 2, '2020-08-17 12:33:35', '2020-08-17 12:33:35'),
(323, NULL, NULL, 6, 3, '2020-08-17 12:33:54', '2020-08-17 12:33:54'),
(324, NULL, NULL, 99990013, 2, '2020-08-17 12:37:01', '2020-08-17 12:37:01'),
(325, 18020001, NULL, NULL, 2, '2020-08-17 13:29:00', '2020-08-17 13:29:00'),
(326, 18020001, NULL, NULL, 3, '2020-08-17 13:29:00', '2020-08-17 13:29:00'),
(327, 18020001, NULL, NULL, 4, '2020-08-17 13:29:00', '2020-08-17 13:29:00'),
(328, 18020001, NULL, NULL, 5, '2020-08-17 13:29:00', '2020-08-17 13:29:00'),
(329, NULL, NULL, 1, 2, '2020-08-17 13:33:00', '2020-08-17 13:33:00'),
(330, NULL, NULL, 1, 3, '2020-08-17 13:33:00', '2020-08-17 13:33:00'),
(331, NULL, NULL, 1, 4, '2020-08-17 13:33:00', '2020-08-17 13:33:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `messenger`
--

CREATE TABLE `messenger` (
  `id` int(11) UNSIGNED NOT NULL,
  `fk_thread_id` int(11) NOT NULL,
  `fk_user_id` int(11) NOT NULL,
  `message` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `messenger`
--

INSERT INTO `messenger` (`id`, `fk_thread_id`, `fk_user_id`, `message`, `created_at`, `updated_at`) VALUES
(19, 11, 99990015, 'ádfasdf', '2020-08-09 11:28:50', '2020-08-09 11:28:50'),
(20, 12, 99990015, 'hello stu', '2020-08-09 11:29:26', '2020-08-09 11:29:26'),
(21, 13, 99990026, 'hello company C', '2020-08-09 11:30:33', '2020-08-09 11:30:33'),
(22, 14, 99990023, 'hihi student5', '2020-08-09 11:36:33', '2020-08-09 11:36:33'),
(23, 14, 99990023, 'hihi student5', '2020-08-09 11:36:45', '2020-08-09 11:36:45'),
(24, 15, 99990023, 'xin chao', '2020-08-09 11:37:45', '2020-08-09 11:37:45'),
(25, 15, 99990019, 'xin chao lai', '2020-08-09 11:39:02', '2020-08-09 11:39:02'),
(26, 13, 99990019, 'xin chao studetn5', '2020-08-09 11:40:05', '2020-08-09 11:40:05'),
(27, 13, 99990026, 'xin chao lai', '2020-08-09 11:41:19', '2020-08-09 11:41:19'),
(29, 14, 99990026, 'xin chao teacher 1', '2020-08-09 11:45:13', '2020-08-09 11:45:13'),
(30, 14, 99990026, 'xin chao teacher 1', '2020-08-09 11:45:28', '2020-08-09 11:45:28'),
(31, 14, 99990026, 'hihi', '2020-08-09 13:12:50', '2020-08-09 13:12:50'),
(32, 14, 99990026, 'hihi', '2020-08-09 13:57:09', '2020-08-09 13:57:09'),
(33, 14, 99990026, 'ádfasf', '2020-08-09 13:57:13', '2020-08-09 13:57:13'),
(34, 14, 99990026, 'adfasdf', '2020-08-09 14:01:51', '2020-08-09 14:01:51'),
(35, 14, 99990026, 'dfgsfg', '2020-08-09 14:02:34', '2020-08-09 14:02:34'),
(36, 14, 99990026, 'fasdfaf', '2020-08-09 14:03:25', '2020-08-09 14:03:25'),
(37, 14, 99990026, 'ádfasdfa', '2020-08-09 14:04:01', '2020-08-09 14:04:01'),
(38, 14, 99990026, 'ádfasdf', '2020-08-09 14:04:50', '2020-08-09 14:04:50'),
(39, 14, 99990026, 'ádfafds', '2020-08-09 14:05:20', '2020-08-09 14:05:20'),
(40, 14, 99990026, 'ádfafds', '2020-08-09 14:05:27', '2020-08-09 14:05:27'),
(41, 14, 99990026, 'ádfafds', '2020-08-09 14:05:30', '2020-08-09 14:05:30'),
(42, 14, 99990026, 'ádfafds', '2020-08-09 14:05:34', '2020-08-09 14:05:34'),
(43, 14, 99990026, 'ádfafdsẻtwert', '2020-08-09 14:05:40', '2020-08-09 14:05:40'),
(44, 14, 99990026, 'ádfafdsẻtwertrqeqerwer', '2020-08-09 14:05:47', '2020-08-09 14:05:47'),
(45, 14, 99990026, 'ádfasdf', '2020-08-09 14:06:31', '2020-08-09 14:06:31'),
(46, 14, 99990026, 'ádfasdffasfas', '2020-08-09 14:06:50', '2020-08-09 14:06:50'),
(47, 14, 99990026, 'ádfasf', '2020-08-09 14:08:06', '2020-08-09 14:08:06'),
(48, 14, 99990026, 'ádfasf', '2020-08-09 14:09:20', '2020-08-09 14:09:20'),
(49, 14, 99990026, 'ádfasf', '2020-08-09 14:10:45', '2020-08-09 14:10:45'),
(50, 14, 99990026, 'ádfasdfa', '2020-08-09 14:11:34', '2020-08-09 14:11:34'),
(51, 14, 99990026, 'ádafsdfa', '2020-08-09 14:12:16', '2020-08-09 14:12:16'),
(52, 14, 99990026, 'ádfasdf', '2020-08-09 16:04:08', '2020-08-09 16:04:08'),
(53, 14, 99990026, 'ádfa', '2020-08-09 21:29:06', '2020-08-09 21:29:06'),
(54, 14, 99990026, 'ádfasdf', '2020-08-09 21:29:13', '2020-08-09 21:29:13'),
(55, 14, 99990026, 'ádfasdf', '2020-08-09 21:29:14', '2020-08-09 21:29:14'),
(56, 14, 99990026, 'ádfasd', '2020-08-09 21:29:20', '2020-08-09 21:29:20'),
(57, 14, 99990026, 'hello', '2020-08-09 22:58:30', '2020-08-09 22:58:30'),
(58, 14, 99990026, 'xin chao 1', '2020-08-09 23:03:36', '2020-08-09 23:03:36'),
(59, 14, 99990026, 'xin mới', '2020-08-10 20:55:42', '2020-08-10 20:55:42'),
(60, 14, 99990026, 'hello', '2020-08-10 20:55:56', '2020-08-10 20:55:56'),
(61, 14, 99990026, 'hihi', '2020-08-10 20:59:44', '2020-08-10 20:59:44'),
(62, 14, 99990026, 'hello', '2020-08-10 21:01:00', '2020-08-10 21:01:00'),
(63, 14, 99990026, '1', '2020-08-10 21:03:27', '2020-08-10 21:03:27'),
(64, 14, 99990026, '123', '2020-08-10 21:04:52', '2020-08-10 21:04:52'),
(65, 14, 99990026, '123123', '2020-08-10 21:05:23', '2020-08-10 21:05:23'),
(66, 14, 99990026, '2132313123', '2020-08-10 21:05:48', '2020-08-10 21:05:48'),
(67, 14, 99990026, 'hihi', '2020-08-10 21:06:36', '2020-08-10 21:06:36'),
(68, 14, 99990026, 'koko', '2020-08-10 21:06:57', '2020-08-10 21:06:57'),
(69, 14, 99990026, 'híadhfiadf', '2020-08-10 21:08:31', '2020-08-10 21:08:31'),
(70, 14, 99990026, 'test1', '2020-08-10 21:08:37', '2020-08-10 21:08:37'),
(71, 14, 99990026, 'test12', '2020-08-10 21:08:44', '2020-08-10 21:08:44'),
(72, 14, 99990026, 'tets3', '2020-08-10 21:08:57', '2020-08-10 21:08:57'),
(73, 14, 99990026, 'xin chào việt nam', '2020-08-10 21:40:39', '2020-08-10 21:40:39'),
(74, 16, 99990023, 'xin chào', '2020-08-10 22:21:20', '2020-08-10 22:21:20'),
(75, 15, 99990023, 'hello', '2020-08-10 22:22:24', '2020-08-10 22:22:24'),
(76, 15, 99990023, '1', '2020-08-10 22:23:41', '2020-08-10 22:23:41'),
(77, 15, 99990023, '2', '2020-08-10 22:23:43', '2020-08-10 22:23:43'),
(78, 15, 99990023, '3', '2020-08-10 22:23:46', '2020-08-10 22:23:46'),
(79, 15, 99990023, '4', '2020-08-10 22:23:49', '2020-08-10 22:23:49'),
(80, 15, 99990023, '5', '2020-08-10 22:23:51', '2020-08-10 22:23:51'),
(81, 15, 99990023, '6', '2020-08-10 22:23:54', '2020-08-10 22:23:54'),
(82, 15, 99990023, '7', '2020-08-10 22:23:57', '2020-08-10 22:23:57'),
(83, 15, 99990023, '9', '2020-08-10 22:24:02', '2020-08-10 22:24:02'),
(84, 15, 99990023, '8', '2020-08-10 22:24:05', '2020-08-10 22:24:05'),
(85, 13, 99990019, 'xin chào', '2020-08-10 22:37:51', '2020-08-10 22:37:51'),
(86, 13, 99990019, 'hello', '2020-08-10 22:38:08', '2020-08-10 22:38:08'),
(87, 13, 99990019, 'xin chào nhé', '2020-08-10 22:38:24', '2020-08-10 22:38:24'),
(88, 13, 99990019, 'tạm biệt nha', '2020-08-10 22:38:37', '2020-08-10 22:38:37'),
(89, 13, 99990019, 'asd', '2020-08-10 22:38:48', '2020-08-10 22:38:48'),
(90, 13, 99990019, 'xin chào 12', '2020-08-10 22:39:00', '2020-08-10 22:39:00'),
(91, 13, 99990019, 'hello', '2020-08-10 22:39:10', '2020-08-10 22:39:10'),
(92, 13, 99990019, '123', '2020-08-10 22:39:32', '2020-08-10 22:39:32'),
(93, 13, 99990019, '1231234', '2020-08-10 22:39:41', '2020-08-10 22:39:41'),
(94, 13, 99990019, '1241241234', '2020-08-10 22:39:50', '2020-08-10 22:39:50'),
(95, 15, 99990019, 'hello', '2020-08-10 22:40:40', '2020-08-10 22:40:40'),
(96, 15, 99990019, 'tạm biet nhe', '2020-08-10 22:40:53', '2020-08-10 22:40:53'),
(97, 15, 99990023, 'xin chào', '2020-08-10 22:42:52', '2020-08-10 22:42:52'),
(98, 17, 99990019, 'hello', '2020-08-11 07:13:55', '2020-08-11 07:13:55'),
(99, 18, 99990019, 'hello', '2020-08-11 07:14:15', '2020-08-11 07:14:15'),
(100, 19, 99990020, 'hello', '2020-08-11 07:17:15', '2020-08-11 07:17:15'),
(101, 20, 99990026, 'adsfadf', '2020-08-11 20:10:06', '2020-08-11 20:10:06'),
(102, 13, 99990026, 'hihi', '2020-08-11 20:11:08', '2020-08-11 20:11:08'),
(103, 13, 99990019, 'hello', '2020-08-11 20:41:47', '2020-08-11 20:41:47'),
(104, 19, 99990019, 'hello', '2020-08-11 20:53:52', '2020-08-11 20:53:52'),
(105, 19, 99990019, 'hello', '2020-08-11 20:54:18', '2020-08-11 20:54:18'),
(106, 21, 99990001, 'Cô chào em', '2020-08-17 11:27:51', '2020-08-17 11:27:51'),
(107, 22, 99990001, 'Xin chào, tôi là giáo viên đại diện cho khoa công nghệ thông tin của trường Đại học công nghệ', '2020-08-17 11:28:34', '2020-08-17 11:28:34'),
(108, 22, 1, 'Xin chào, chúng tôi là công ty VTI vietnam', '2020-08-17 11:37:37', '2020-08-17 11:37:37'),
(109, 23, 1, 'Chào em, em có thể về đội của anh không ??', '2020-08-17 11:38:01', '2020-08-17 11:38:01'),
(110, 21, 18020001, 'dạ, em chào cô', '2020-08-17 11:39:05', '2020-08-17 11:39:05'),
(111, 23, 18020001, 'yes, sir', '2020-08-17 11:39:27', '2020-08-17 11:39:27'),
(112, 23, 18020001, 'hello', '2020-08-17 13:30:35', '2020-08-17 13:30:35'),
(113, 21, 18020001, 'em chào cô ạ', '2020-08-17 13:31:30', '2020-08-17 13:31:30');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `messenger_threads`
--

CREATE TABLE `messenger_threads` (
  `id` int(11) NOT NULL,
  `user_student` int(11) DEFAULT NULL,
  `user_teacher` int(11) DEFAULT NULL,
  `user_company` int(11) DEFAULT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `messenger_threads`
--

INSERT INTO `messenger_threads` (`id`, `user_student`, `user_teacher`, `user_company`, `updated_at`, `created_at`) VALUES
(11, NULL, 99990015, 99990019, '2020-08-09 11:28:50', '2020-08-09 11:28:50'),
(12, 99990026, 99990015, NULL, '2020-08-09 11:29:26', '2020-08-09 11:29:26'),
(13, 99990026, NULL, 99990019, '2020-08-09 11:30:33', '2020-08-09 11:30:33'),
(14, 99990026, 99990023, NULL, '2020-08-09 11:36:33', '2020-08-09 11:36:33'),
(15, NULL, 99990023, 99990019, '2020-08-09 11:37:45', '2020-08-09 11:37:45'),
(16, NULL, 99990026, NULL, '2020-08-10 22:21:20', '2020-08-10 22:21:20'),
(17, 99990019, NULL, 18020001, '2020-08-11 07:13:55', '2020-08-11 07:13:55'),
(18, 99990019, NULL, 99990020, '2020-08-11 07:14:15', '2020-08-11 07:14:15'),
(19, 99990020, NULL, 99990019, '2020-08-11 07:17:15', '2020-08-11 07:17:15'),
(20, 99990026, NULL, 1, '2020-08-11 20:10:06', '2020-08-11 20:10:06'),
(21, 18020001, 99990001, NULL, '2020-08-17 11:27:51', '2020-08-17 11:27:51'),
(22, NULL, 99990001, 1, '2020-08-17 11:28:33', '2020-08-17 11:28:33'),
(23, 18020001, NULL, 1, '2020-08-17 11:38:01', '2020-08-17 11:38:01');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `skill`
--

CREATE TABLE `skill` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `skill`
--

INSERT INTO `skill` (`id`, `name`, `created_at`, `updated_at`) VALUES
(2, 'java', '2020-08-12 23:02:13', '2020-08-17 06:21:55'),
(3, 'php', '2020-08-12 23:08:39', '2020-08-12 23:08:39'),
(4, 'c#', '2020-08-12 23:10:37', '2020-08-12 23:10:37'),
(5, 'python', '2020-08-12 23:12:07', '2020-08-12 23:12:07');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `studentCode` int(10) DEFAULT NULL,
  `birth` date DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `mobile` varchar(50) DEFAULT NULL,
  `department` varchar(50) DEFAULT NULL,
  `major` varchar(50) DEFAULT NULL,
  `level` varchar(50) DEFAULT NULL,
  `trainingSystem` varchar(50) DEFAULT NULL,
  `trainingProgram` varchar(50) DEFAULT NULL,
  `gpa` varchar(4) DEFAULT NULL,
  `yearOfCourse` varchar(50) DEFAULT NULL,
  `forte` text DEFAULT NULL,
  `skill` text DEFAULT NULL,
  `favourite` text DEFAULT NULL,
  `nation` varchar(50) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `district` varchar(50) DEFAULT NULL,
  `commune` varchar(50) DEFAULT NULL,
  `street` varchar(50) DEFAULT NULL,
  `homeNumber` varchar(50) DEFAULT NULL,
  `prize` text DEFAULT NULL,
  `numberCMT` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `Hinh` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `students`
--

INSERT INTO `students` (`id`, `studentCode`, `birth`, `gender`, `mobile`, `department`, `major`, `level`, `trainingSystem`, `trainingProgram`, `gpa`, `yearOfCourse`, `forte`, `skill`, `favourite`, `nation`, `city`, `district`, `commune`, `street`, `homeNumber`, `prize`, `numberCMT`, `created_at`, `updated_at`, `Hinh`) VALUES
(18020001, 18020001, '2000-07-21', 'Nữ', '0919001009', 'Công nghệ thông tin', 'chơi game', 'Đại học', 'Chính quy', 'Chuẩn', '3.88', 'QH-2018', NULL, 'Thể dục, thể thao', '<p>Xem phim, chơi thể thao</p>', 'Việt Nam', 'Hà Nội', 'Hà Nội', 'Cầu Giấy', 'Xuân Thủy', '144', '<p>Giải nhất to&agrave;n quốc m&ocirc;n to&aacute;n 2020</p>', '012345678909', '2020-08-17 06:29:00', '2020-08-17 06:29:00', 'fGGU_ppro.jpg'),
(18021290, 18021290, '2000-03-27', '1', '0943934631', 'Công Nghệ Thông tin', 'Mạng Máy Tính Và Truyền Thông Dữ Liệu', '2', 'Chuẩn', '4,5 năm', '4.0', '2019-2020', 'chắm chỉ, ngoan khỏi nói', 'Code web', 'đi dạo', 'Việt Nam', NULL, 'Nam Định', 'Mỹ Thắng', 'Bườn 3', NULL, 'Giải bét môn toán 2018-2019', '036200002548', '2020-07-26 09:00:44', '2020-07-26 09:00:44', NULL),
(18021313, 18021313, '2000-01-14', '1', '0369180227', 'Công nghệ thông tin', 'Truyền thông và Mạng máy tính', '2', 'chuẩn', '4,5 năm', '3,44', '2019-2020', 'Học nhanh, chăm chỉ', 'tìm hiểu và làm bài tập nhóm tốt', 'code app, code web', 'Việt Nam', NULL, 'Nam Định', 'Vụ Bản', 'Vụ Nữ', '12', 'Học Bổng Salary Học kì 1 năm học 2018-2019', '039810108374', '2020-07-26 09:00:44', '2020-07-26 09:00:44', NULL),
(99990020, 123456, NULL, 'Nữ', NULL, 'Vật lý kỹ thuật', NULL, 'Cao đẳng', 'Chính quy', 'Chuẩn', NULL, 'QH-2014', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-08-16 13:41:17', '2020-08-16 13:41:17', 'xSk7_image_ketnoigiaovan.png'),
(99990022, 12345678, '2020-07-17', 'Nam', NULL, 'Hàng không vũ trụ', NULL, 'Cao đẳng', 'Tại chức', 'Chuẩn', '3.5', 'QH-2014', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-07-30 09:07:17', '2020-07-30 09:07:17', NULL),
(99990025, 123456, NULL, 'Nam', NULL, 'Điện tử viễn thông', NULL, 'Cao đẳng', 'Chính quy', 'Chuẩn', NULL, 'QH-2014', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-08-02 09:09:02', '2020-08-02 09:09:02', '7D4Z_d.jpg'),
(99990026, 12345678, '2020-06-30', 'Nam', NULL, 'Công nghệ thông tin', 'Khoa hoc may tinh', 'Cao đẳng', 'Chính quy', 'Chuẩn', '9.0', 'QH-2014', NULL, 'không cog', NULL, 'Viet Nam', 'ádfadsf', 'Thanh Xuan', 'ádfadsf', 'ádfadf', '4', '<p>hihi</p>', '123456356345645', '2020-08-16 11:31:51', '2020-08-16 11:31:51', 'BfTd_89819277_1126409007751687_7895926589169336320_n.jpg'),
(99990028, NULL, NULL, 'Nam', NULL, 'Công nghệ thông tin', NULL, 'Cao đăng', 'Chính quy', 'Chuẩn', NULL, 'QH-2014', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-08-02 16:26:07', '2020-08-02 16:26:07', 'RmoI_og1l_5XDQ_K0Vo_3uoc_cancel.png'),
(99990030, NULL, NULL, 'Nam', NULL, 'Công nghệ thông tin', NULL, 'Cao đăng', 'Chính quy', 'Chuẩn', NULL, 'QH-2014', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-08-16 23:02:26', '2020-08-16 23:02:26', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `teacher`
--

CREATE TABLE `teacher` (
  `id` int(11) NOT NULL,
  `age` int(10) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `mobile` varchar(50) DEFAULT NULL,
  `department` varchar(50) DEFAULT NULL,
  `major` varchar(50) DEFAULT NULL,
  `numberCMT` varchar(50) DEFAULT NULL,
  `position` varchar(50) DEFAULT NULL,
  `office` varchar(50) DEFAULT NULL,
  `offer` text DEFAULT NULL,
  `topicResearch` text DEFAULT NULL,
  `numbers` int(10) DEFAULT NULL,
  `startDayOffer` date DEFAULT NULL,
  `endDayOffer` date DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `Hinh` text DEFAULT NULL,
  `bonus` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `teacher`
--

INSERT INTO `teacher` (`id`, `age`, `gender`, `mobile`, `department`, `major`, `numberCMT`, `position`, `office`, `offer`, `topicResearch`, `numbers`, `startDayOffer`, `endDayOffer`, `created_at`, `updated_at`, `Hinh`, `bonus`) VALUES
(99990000, 40, '1', '096 912 52 49', 'Electronics and Computer Engineering', 'Research Interests: Intelligent Robots (Fuzzy Logi', '036200002222', 'Head of Electronics and Computer Engineering Depar', '404-SS3', 'Nhóm nghiên cứu khoa học bộ khoa Điện Tử viễn Thông \r\nLab: thí nghiệm thông minh', 'Robot thông minh (Logic mờ, Fusion Fusion, Robot nối mạng); Kiến trúc máy tính và hệ thống dựa trên bộ vi xử lý; Đo lường và Kiểm soát dựa trên Máy tính và Vi điều khiển; Thiết bị điện tử.', 5, '2020-07-21', '2022-07-21', '2020-07-26 09:01:09', '2020-07-26 09:01:09', NULL, NULL),
(99990001, 36, 'Nữ', '0943115555', 'Công nghệ thông tin', 'Công nghệ tần số siêu cao Anten thông minh Kỹ thuậ', '033302022569', 'Trưởng phòng', '123-G9', NULL, 'Công nghệ tần số siêu cao Anten thông minh', 5, '2020-08-17', '2022-08-17', '2020-07-26 09:01:09', '2020-08-17 04:26:51', 'T373_qunhf.jpg', '1 tuần được lên làm việc trên văn phòng 1 lần'),
(99990003, 45, '1', '0379180000', 'Network and Communication Systems', 'Research Interests: Intelligent Robots (Fuzzy Logi', '036612', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-07-26 09:01:09', '2020-07-26 09:01:09', NULL, NULL),
(99990004, 40, '0', '096 912 52 99', 'Bộ môn Các Hệ thống Thông tin', 'Cơ sở dữ liệu Thực hành Phân tích thiết kế các hệ ', NULL, 'Quan lý dữ liệu không gian, Tối ưu hóa truy vấn, C', '404-GD9', 'Xử lý dữ liệu lớn', 'Tối ưu hóa truy vấn, Cơ sở dữ liệu quy mô lớn', 5, NULL, NULL, '2020-07-26 09:01:09', '2020-07-26 09:01:09', NULL, NULL),
(99990005, 48, '1', '0943933889', 'Phòng Thí nghiệm An toàn thông tin', 'An ninh mạng An toàn và an ninh mạng', '03956464131', 'Các mạng không dây và di động Chủ đề lựa chọn về a', '403-G2', 'Sinh viên nghiên cứu Security', 'An ninh mạng\r\nAn toàn và an ninh mạng', 5, '2020-07-21', '2022-07-25', '2020-07-26 09:01:09', '2020-07-26 09:01:09', NULL, NULL),
(99990006, 30, '1', '09876543210', 'Bộ môn Các Hệ thống Thông tin', 'Khai phá quy trình nghiệp vụ', '012345678912', 'Khai phá quy trình nghiệp vụ', NULL, 'Quy trình nghiệp vụ', NULL, 1, NULL, NULL, '2020-07-26 09:01:09', '2020-07-26 09:01:09', NULL, NULL),
(99990007, 36, '1', '012344567899', 'Truyền thông và Mạng máy tính', 'Mạng máy tính Các hệ phân tán', NULL, 'Internet of Things, các hệ thống nhúng', '403-G2', 'Lab nghiên cứu Internetofthigs', 'IOT', 15, '2020-07-20', NULL, '2020-07-26 09:01:09', '2020-07-26 09:01:09', NULL, NULL),
(99990023, 13, 'Nữ', NULL, 'Vật lý kỹ thuật', NULL, NULL, NULL, NULL, NULL, 'abc', 7, '2020-07-25', '2020-07-21', '2020-07-30 23:23:05', '2020-08-16 13:47:48', 'eckS_1jLO_5XDQ_K0Vo_3uoc_cancel.png', 'abc');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `category` int(3) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `category`, `updated_at`, `created_at`) VALUES
(1, 'VTI Technology', 'hr@vti.com.vn', '$2y$10$oSfehctx0vdKrxfqTYitie.RgIdd3rF0mz5Mc/emTg9DecDBrRnS2', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'MIICHISOFT', 'phuongdtt@miichisoft.com', '$2y$10$oSfehctx0vdKrxfqTYitie.RgIdd3rF0mz5Mc/emTg9DecDBrRnS2', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'FunTap', 'hr@funtap.vn', '$2y$10$oSfehctx0vdKrxfqTYitie.RgIdd3rF0mz5Mc/emTg9DecDBrRnS2', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'FPT_Software', 'FA@Fsoft.com.vn', '$2y$10$oSfehctx0vdKrxfqTYitie.RgIdd3rF0mz5Mc/emTg9DecDBrRnS2', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'ncc_company', 'hr@ncc.asia', '$2y$10$oSfehctx0vdKrxfqTYitie.RgIdd3rF0mz5Mc/emTg9DecDBrRnS2', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'OpenCommerce', 'jobs@brodev.com', '$2y$10$oSfehctx0vdKrxfqTYitie.RgIdd3rF0mz5Mc/emTg9DecDBrRnS2', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18020001, 'Trần Thị Thu Trang', 'trangtri@gmail.com', '$2y$10$oSfehctx0vdKrxfqTYitie.RgIdd3rF0mz5Mc/emTg9DecDBrRnS2', 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18020002, 'Nguyễn Hoài Thu', 'thunguyen@gmail.com', '$2y$10$oSfehctx0vdKrxfqTYitie.RgIdd3rF0mz5Mc/emTg9DecDBrRnS2', 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18020003, 'Trần Ngọc Linh', 'Linhc@gmail.com', '$2y$10$oSfehctx0vdKrxfqTYitie.RgIdd3rF0mz5Mc/emTg9DecDBrRnS2', 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18020004, 'Hoàng Trung Thực', 'ThucAplus@gmail.com', '$2y$10$oSfehctx0vdKrxfqTYitie.RgIdd3rF0mz5Mc/emTg9DecDBrRnS2', 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18020005, 'Phạm Văn Huy', 'huythaibinh@gmail.com', '$2y$10$oSfehctx0vdKrxfqTYitie.RgIdd3rF0mz5Mc/emTg9DecDBrRnS2', 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18020006, 'Nguyễn Văn An', 'anbinh@gmail.com', '$2y$10$oSfehctx0vdKrxfqTYitie.RgIdd3rF0mz5Mc/emTg9DecDBrRnS2', 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18020007, 'Hoàng Tuấn Vũ', 'vuoppa@gmail.com', '$2y$10$oSfehctx0vdKrxfqTYitie.RgIdd3rF0mz5Mc/emTg9DecDBrRnS2', 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18021212, 'Võ Thị Vân', 'vanmmt@gmail.com', '$2y$10$oSfehctx0vdKrxfqTYitie.RgIdd3rF0mz5Mc/emTg9DecDBrRnS2', 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18021290, 'Trần Đức Toản', 'ductoan2732000@gmail.com', '$2y$10$oSfehctx0vdKrxfqTYitie.RgIdd3rF0mz5Mc/emTg9DecDBrRnS2', 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18021313, 'Phạm Văn Trọng', 'trongnt@gmail.com', '$2y$10$oSfehctx0vdKrxfqTYitie.RgIdd3rF0mz5Mc/emTg9DecDBrRnS2', 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(99990000, 'Trần Quang Vinh', 'vinhtq@vnu.edu.vn', '$2y$10$oSfehctx0vdKrxfqTYitie.RgIdd3rF0mz5Mc/emTg9DecDBrRnS2', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(99990001, 'Trần Thị Thúy Quỳnh', 'quynhttt@vnu.edu.vn', '$2y$10$oSfehctx0vdKrxfqTYitie.RgIdd3rF0mz5Mc/emTg9DecDBrRnS2', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(99990003, 'Lâm Sinh Công', 'congls@vnu.edu.vn', '$2y$10$oSfehctx0vdKrxfqTYitie.RgIdd3rF0mz5Mc/emTg9DecDBrRnS2', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(99990004, 'Dư Phương Hạnh', 'duphuonghanh@vnu.edu.vn', '$2y$10$oSfehctx0vdKrxfqTYitie.RgIdd3rF0mz5Mc/emTg9DecDBrRnS2', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(99990005, 'Lê Đại Thọ', 'ledaitho@vnu.edu.vn', '$2y$10$oSfehctx0vdKrxfqTYitie.RgIdd3rF0mz5Mc/emTg9DecDBrRnS2', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(99990006, 'Lê Đức Trọng', 'trongduc@vnu.vn', '$2y$10$oSfehctx0vdKrxfqTYitie.RgIdd3rF0mz5Mc/emTg9DecDBrRnS2', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(99990007, 'Phạm Mạnh Linh', 'linhpm.vn@gmail.com', '$2y$10$oSfehctx0vdKrxfqTYitie.RgIdd3rF0mz5Mc/emTg9DecDBrRnS2', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(99990008, 'Nguyễn Trí Thành', 'ntthanhvn@vnu.edu.vn', '$2y$10$oSfehctx0vdKrxfqTYitie.RgIdd3rF0mz5Mc/emTg9DecDBrRnS2', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(99990009, 'Dương Lê Minh', 'duongleminh@gmail.com', '$2y$10$oSfehctx0vdKrxfqTYitie.RgIdd3rF0mz5Mc/emTg9DecDBrRnS2', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(99990010, 'Nguyễn Quang Minh', 'Minh_97', '$2y$10$oSfehctx0vdKrxfqTYitie.RgIdd3rF0mz5Mc/emTg9DecDBrRnS2', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(99990011, 'Hoàng Xuân Tùng', 'TS.Hoang xuan tung', '$2y$10$oSfehctx0vdKrxfqTYitie.RgIdd3rF0mz5Mc/emTg9DecDBrRnS2', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(99990012, 'Hồ Đắc Phương', 'Ho Dac Phuong', '$2y$10$oSfehctx0vdKrxfqTYitie.RgIdd3rF0mz5Mc/emTg9DecDBrRnS2', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(99990013, 'CompanyA', 'CompanyA@gmail.com', '$2y$10$oSfehctx0vdKrxfqTYitie.RgIdd3rF0mz5Mc/emTg9DecDBrRnS2', 1, '2020-07-25 17:00:00', '2020-07-25 17:00:00'),
(99990015, 'teacherA', 'teacher@gmail.com', '$2y$10$d4HoLgRI5lRmNSJT4YHEn.r46sYIrZeeiNiuqM1FWkDr0/9jBWPmW', 2, '2020-07-25 17:00:00', '2020-07-25 17:00:00'),
(99990016, 'student A', 'studentA@gmail.com', '$2y$10$Gj.eu8n5ykh2Q3VMb9w4a.r/WKSSzwPv2rhLk6jCSV8Cl3cBqW6jK', 3, '2020-07-25 17:00:00', '2020-07-25 17:00:00'),
(99990017, 'student b', 'studentb@gmail.com', '$2y$10$BnVLmLzr9d6.R8vqPB/YrezlxmJYvUc5o4vB9QeeAMC4w2Ksyx7gC', 3, '2020-07-25 17:00:00', '2020-07-25 17:00:00'),
(99990018, 'Phạm Văn Trọng', 'phamvantrong.va@gmail.com', '$2y$10$CvbT4iLxOSaITq12h3eBOek1rRrnqoihKvz1mi0SyaI7VqWEMhx7C', 3, '2020-07-27 06:38:20', '2020-07-27 06:38:20'),
(99990019, 'companyC', 'companyC@gmail.com', '$2y$10$GPyFBv0ap6tnWsGB0d5fle70JJlnFhYeAi5l3C3Vws/SHcGYJsoLa', 1, '2020-07-27 06:47:35', '2020-07-27 06:47:35'),
(99990020, 'student2', 'student2@gmail.com', '$2y$10$OHQQW1XJR3nNW1ki5EyT9O6TB2j2f56W5XvhHH3TLg0dqyf0ud8hO', 3, '2020-07-30 00:42:51', '2020-07-30 00:42:51'),
(99990021, 'Phạm', 'pham@gmail.com', '$2y$10$Hv5fHi1naQZZI2FfyGxAHuV9aMnADNK3Ib6SXdEB.MHrtxAJ60L.C', 3, '2020-07-30 02:32:33', '2020-07-30 02:32:33'),
(99990022, 'student3', 'student3@gmail.com', '$2y$10$cTPzONnJGurpZMWNkxRCaeGWz6eoCABdHYyyZsWUl4ldF22cDjE5G', 3, '2020-07-30 03:57:20', '2020-07-30 03:57:20'),
(99990023, 'teacher1', 'teacher1@gmail.com', '$2y$10$ZcZTliqAV/3W6Q.D3J9LROELmL7WqQf3WpG.RBSqElRl.N3gvcGIa', 2, '2020-07-30 14:07:52', '2020-07-30 14:07:52'),
(99990024, 'company1', 'company1@gmail.com', '$2y$10$CH1jdIXx5Cumu2rKqBqdEOQJq9y9XytKostNe50YRv43i5WB66fyu', 1, '2020-07-31 02:52:37', '2020-07-31 02:52:37'),
(99990025, 'student4', 'student4@gmail.com', '$2y$10$NuJCYQAy2/AkF0W7mqCtLuSUcQpU1rww/zCCZwtYhCBzAG7Xc7c1.', 3, '2020-07-31 14:02:07', '2020-07-31 14:02:07'),
(99990026, 'student5', 'student5@gmail.com', '$2y$10$Yq/0R5Qh4YIuBA9hMLKJ2.0RTQ6GkvOma5Yto/73BkVRp/UPvzZ0W', 3, '2020-07-31 14:40:52', '2020-07-31 14:40:52'),
(99990027, 'student6', 'student6@gmail.com', '$2y$10$fRnzNq2sYPmIqyTPPXNceeaM/4GCofKo37.33Yr744e.s8SltpEBa', 3, '2020-08-02 14:56:33', '2020-08-02 14:56:33'),
(99990028, 'student7', 'student7@gmail.com', '$2y$10$7kWhKjYyamNtSY9zUI/UPeVwJHb23jC6P.CPfN2IfRSZHDmkSA/L2', 3, '2020-08-02 16:21:13', '2020-08-02 16:21:13'),
(99990029, 'Phạm Văn Ó', 'ooo@gmail.com', '$2y$10$qfeuvKqGaCPIGFTO1m.JYuoYf83OmR18RUV7HTH3.hkhamnbVhWj.', 3, '2020-08-04 03:01:44', '2020-08-04 03:01:44'),
(99990030, 'Phạm Văn Trọng', 'student8@gmail.com', '$2y$10$OQKLHiCxtX4ly15EEdxe0eQCDCE9JZocIgZDq5IhMygjyfqOdSQSi', 3, '2020-08-16 12:32:42', '2020-08-16 12:32:42'),
(99990031, 'Nguyễn Phương Thảo', 'yoona@gmail.com', '$2y$10$mW0gpUpljUFPOQJQ4w34Iu/kXloj8Cf8lEmUuQ/yNO306VC7mzS0a', 3, '2020-08-17 05:21:37', '2020-08-17 05:21:37'),
(99990032, 'Phạm Văn Trọng', 'student12@gmail.com', '$2y$10$s6xl2U7lJUcfaIFfis1wG.hvgWgjOVHQ6E7/SHGakstqkqLsgnxoi', 3, '2020-08-17 06:27:48', '2020-08-17 06:27:48');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`(100));

--
-- Chỉ mục cho bảng `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id_blog`),
  ADD KEY `id` (`id`) USING BTREE;

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Chỉ mục cho bảng `fk_skill`
--
ALTER TABLE `fk_skill`
  ADD PRIMARY KEY (`id`),
  ADD KEY `skill_id` (`skill_id`),
  ADD KEY `company_id` (`company_id`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `teacher_id` (`teacher_id`);

--
-- Chỉ mục cho bảng `messenger`
--
ALTER TABLE `messenger`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`fk_user_id`),
  ADD KEY `thread_id` (`fk_thread_id`) USING BTREE;

--
-- Chỉ mục cho bảng `messenger_threads`
--
ALTER TABLE `messenger_threads`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_A` (`user_student`),
  ADD KEY `user_B` (`user_teacher`),
  ADD KEY `user_company` (`user_company`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `skill`
--
ALTER TABLE `skill`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Chỉ mục cho bảng `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Nickname` (`email`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `blog`
--
ALTER TABLE `blog`
  MODIFY `id_blog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1234579;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `company`
--
ALTER TABLE `company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99990020;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `fk_skill`
--
ALTER TABLE `fk_skill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=332;

--
-- AUTO_INCREMENT cho bảng `messenger`
--
ALTER TABLE `messenger`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT cho bảng `messenger_threads`
--
ALTER TABLE `messenger_threads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `skill`
--
ALTER TABLE `skill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99990031;

--
-- AUTO_INCREMENT cho bảng `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99990024;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99990033;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `blog`
--
ALTER TABLE `blog`
  ADD CONSTRAINT `blog_ibfk_1` FOREIGN KEY (`id`) REFERENCES `user` (`id`);

--
-- Các ràng buộc cho bảng `company`
--
ALTER TABLE `company`
  ADD CONSTRAINT `FK_company_id_user` FOREIGN KEY (`id`) REFERENCES `user` (`id`);

--
-- Các ràng buộc cho bảng `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);

--
-- Các ràng buộc cho bảng `fk_skill`
--
ALTER TABLE `fk_skill`
  ADD CONSTRAINT `fk_skill_ibfk_1` FOREIGN KEY (`skill_id`) REFERENCES `skill` (`id`),
  ADD CONSTRAINT `fk_skill_ibfk_2` FOREIGN KEY (`company_id`) REFERENCES `company` (`id`),
  ADD CONSTRAINT `fk_skill_ibfk_3` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`),
  ADD CONSTRAINT `fk_skill_ibfk_4` FOREIGN KEY (`teacher_id`) REFERENCES `teacher` (`id`);

--
-- Các ràng buộc cho bảng `messenger`
--
ALTER TABLE `messenger`
  ADD CONSTRAINT `messenger_ibfk_1` FOREIGN KEY (`fk_thread_id`) REFERENCES `messenger_threads` (`id`),
  ADD CONSTRAINT `messenger_ibfk_2` FOREIGN KEY (`fk_user_id`) REFERENCES `user` (`id`);

--
-- Các ràng buộc cho bảng `messenger_threads`
--
ALTER TABLE `messenger_threads`
  ADD CONSTRAINT `messenger_threads_ibfk_1` FOREIGN KEY (`user_student`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `messenger_threads_ibfk_2` FOREIGN KEY (`user_teacher`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `messenger_threads_ibfk_3` FOREIGN KEY (`user_company`) REFERENCES `user` (`id`);

--
-- Các ràng buộc cho bảng `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `FK_students_id_user` FOREIGN KEY (`id`) REFERENCES `user` (`id`);

--
-- Các ràng buộc cho bảng `teacher`
--
ALTER TABLE `teacher`
  ADD CONSTRAINT `FK_teacher_id_user` FOREIGN KEY (`id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

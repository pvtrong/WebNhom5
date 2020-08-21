 

Mục lục:
Mục lục:	2
Lời nói đầu	3
I: Phân Tích Yêu Cầu	3
1. Các đối tượng sử dụng	3
2. Phân tích các chức năng chính của hệ thống	3
2.1. Người dùng thông thường:	3
2.1.1. Chức năng đăng ký, đăng nhập (1):	3
2.1.2. Đổi mật khẩu (2):	4
2.1.3. Chức năng cập nhật thông tin và hiện CV (3):	4
2.1.4. Chức năng xem danh sách thông tin (4):	4
2.1.5. Chức năng tìm kiếm (5):	4
2.1.6. Chức năng lọc (6):	4
2.1.7. Chức năng tạo, cập nhật (thêm, sửa, xóa) blog cá nhân (7):	4
2.1.8. Chức năng liên hệ, nhắn tin (8):	5
2.1.9. Chức năng điều chỉnh giao diện sáng/tối (Dark Mode) (9):	5
2.1.10. Chức năng phản hồi góp ý nhà phát triển (10):	5
2.2. Về phía quản trị viên 	5
2.2.1 Phân quyền tài khoản (11):	5
2.2.1 Chức năng quản lý người dùng (12):	5
2.2.2. Quản lý phản hồi (13):	5
2.2.3 Chức năng thống kê (14):	5
3. Tiến độ sơ từng tuần	5
II: Phân tích, thiết kế, giải thích chức năng	6
1. Biểu đồ  Use case tổng quát	6
2. Biểu đồ tuần tự:	6
2.1. Đăng ký tài khoản:	7
2.2. Đăng nhập	7
2.3 Đăng xuất	8
2.4. Cập nhật thông tin	8
2.5. Lọc, tìm kiếm	9
2.6. Nhắn tin, liên hệ:	9
2.7. Tạo Blog cá nhân:	9
2.8. Sửa Blog:	10
2.9. Xóa Blog cá nhân:	10
2.10. Đổi mật khẩu	11
2.11. Liên hệ nhà phát triển:	11
3. Biểu đồ lớp:	11
III: Tổng kết	12
1. Đề tài:	13
2. Công nghệ sử dụng:	13
3. Kết quả ứng dụng web: https://github.com/phamtrong2000/WebNhom5	13
4. Kinh nghiệm, bài học:	13
5. Đánh giá kết quả làm việc nhóm:	13
Lời nói đầu
Ngày nay, ứng dụng công nghệ thông tin và việc tin học hóa được xem là một trong những yếu tố mang tính quyết định trong hoạt động của các chính phủ, tổ chức, cũng như của các công ty, nhà trường nó đóng vai trò hết sức quan trọng, có thể mang lại cho chúng ta rất nhiều lợi ích và thuận tiện trong công việc. Mạng Internet là một trong những sản phẩm có giá trị hết sức lớn lao và ngày càng trở nên một công cụ không thể thiếu, là nền tảng chính cho sự truyền tải, trao đổi thông tin trên toàn cầu.
Vì vậy trong phạm vi môn học này, nhóm chúng em sẽ trình bày về project website quản lý profile. Người tuyển dụng đưa các thông tin tuyển dụng, người ứng tuyển thì luôn luôn cập nhật CV của mình lên website một cách nhanh chóng và ai cũng có thể tiếp cận, tìm kiệm, lọc những thứ mình cần tìm mọi lúc mọi nơi. 
Trong quá trình làm nhóm em còn nhiều sai sót, chúng em mong nhận được những ý kiến đánh giá của thầy và các bạn. Em xin chân thành cảm ơn!

I: Phân Tích Yêu Cầu
1. Các đối tượng sử dụng
Người sử dụng website chia làm 2 nhóm đối tượng:
•	Admin
•	User: Công ty, Nhà trường, Sinh viên
2. Phân tích các chức năng chính của hệ thống
2.1. Người dùng thông thường:
2.1.1. Chức năng đăng ký, đăng nhập (1):
Người dùng có thể tạo tài khoản bằng cách ấn vào nút đăng ký trên trang chủ. Từ trang chủ sẽ chuyển sang trang mới (Registration) 
•	Đăng ký tài khoản:
·    Người dùng điền đầy đủ các thông tin liên quan đến cá nhân để tạo một tạo khoản trong danh mục vé như: Họ và tên, email, mật khẩu, … chọn loại tài khoản: sinh viên, nhà trường hoặc công ty
•	Đăng nhập:
•	Người dùng nhập Username và Password để đăng nhập vào trang chủ. Nếu chưa có tài khoản, người dùng quay lại trang đăng ký
2.1.2. Đổi mật khẩu (2):
•	Người dùng có thể thay đổi Password ở trang cài đặt sau khi đã đăng nhập
2.1.3. Chức năng cập nhật thông tin và hiện CV (3):
•	Người dùng (sau khi đã có tài khoản) phải vào mục hồ sơ cá nhân thực hiện thêm, sửa, xóa thông tin cá nhân như ngày sinh, thành tích, cập nhật ảnh hồ sơ.
•	Người dùng khi đã cập nhật sẽ có thể xem thông tin hiện CV.
2.1.4. Chức năng xem danh sách thông tin (4):
•	Người dùng có thể xem được toàn bộ thông tin thông qua một danh sách các đối tượng. Ở đây gồm những thông tin cơ bản nhất như tên, email, số điện thoại, ... Như phía sinh viên có thể xem thông tin tuyển dụng của công ty, thông tin tuyển nghiên cứu sinh của thầy cô. Ngược lại thầy cô, công ty có thể xem thông tin của các sinh viên  Ngoài ra còn có thể xem chi tiết thông tin của từng đối tượng bằng cách click vào nút xem thêm.
2.1.5. Chức năng tìm kiếm (5):
•	Một khung tìm kiếm sẽ được tạo ra trên các page để giúp người dùng tìm kiếm thông tin một cách nhanh chóng và hiệu quả
2.1.6. Chức năng lọc (6):
•	Chức năng lọc giúp phân loại theo các cách khác nhau để người dùng tìm kiếm thông tin một cách nhanh nhất theo mục đích của mình. Sau khi lọc, các đối tượng thỏa mãn điều kiện lọc sẽ hiện ra. Ví dụ người dùng sinh viên có thể lọc công ty theo tên, địa chỉ, tiêu chí, mức lương, …
2.1.7. Chức năng tạo, cập nhật (thêm, sửa, xóa) blog cá nhân (7):
•	Mỗi người đều có thể đăng blog nhằm hỏi đáp hoặc chia sẻ kinh nghiệm của mình lên trang blog cá nhân. Trên trang Blog cá nhân người dùng có thể thao tác với blog như thêm, sửa, xóa một cách dễ dàng bởi giao diện vô cùng trực quan, thân thiện với người dùng. Một blog gồm các phần chính: tiêu đề, tóm tắt, nội dung, có thể có hình ảnh đi kèm giống như những dòng text với các font cho sẵn trên Word.
2.1.8. Chức năng liên hệ, nhắn tin (8):
•	Người dùng có thể nhắn tin trao đổi với các đối tượng khác bằng việc click vào ô liên hệ ở cột cuối danh sách. Một giao diện mới sẽ hiện lên giúp người dùng dễ dàng trao đổi thông tin.
2.1.9. Chức năng điều chỉnh giao diện sáng/tối (Dark Mode) (9):
•	Người dùng có thể đổi màu giao diện sáng tối bằng cách ấn nút “Nền Tối” ở góc màn hình.
•	Người dùng có thể trải nghiệm giao diện một cách chuyên nghiệp, mang lại những cái nhìn khác biệt
2.1.10. Chức năng phản hồi góp ý nhà phát triển (10):
•	Người dùng có thể đóng góp ý kiến qua phản hồi bằng chat hoặc liên hệ qua số điện thoại của nhà phát triển.
•	Mọi đóng góp của người dùng sẽ được nhà phát triển xem xét và xử lý. 
2.2. Về phía quản trị viên 
2.2.1 Phân quyền tài khoản (11):
•	Người quản trị có thể phần quyền từng tài khoản nhưng còn nhiều thiếu sót.
2.2.1 Chức năng quản lý người dùng (12):
•	Admin xóa người dùng thông qua id
•	Phân quyền tài khoản, chia User thành 3 loại tài khoản: Student, Teacher, Company
Xóa blog
2.2.2. Quản lý phản hồi (13):
•	Người quản trị xem danh sách phản hồi của người dùng để rút ra kinh nghiệm hay là lỗi hệ thống cần sửa chữa,....
2.2.3 Chức năng thống kê (14): 
•	Thống kê số lượng tài khoản theo từng loại
•	Thống kê số lượng blog cá nhân, tin nhắn     
3. Tiến độ sơ từng tuần
•	Tuần 1: Cả nhóm phân tích yêu cầu, thiết kế chức năng, đối tượng  		(13/7 – 19/7)
•	Tuần 2: Tập trung làm giao diện, hình thành cơ bản cơ sở dữ liệu 		(20/7 – 26/7)
•	Tuần 3: Tạo cơ sở dữ liệu và chức năng (1), (11), (3), (4), (5) 		(27/7 – 2/8)
•	Tuần 4: Làm các chức năng (6), (7), (12), (13), (14),  				(3/8 – 9/8)
•	Tuần 5: Làm các chức năng (2), (8), (9), (10), và hoàn thiện chỉnh sửa 	(10/8 – 16/8)

II: Phân tích, thiết kế, giải thích chức năng
1. Biểu đồ  Use case tổng quát

 
2. Biểu đồ tuần tự:
Đây là biểu đồ tuần tự của các ca sử dụng chính của hệ thống.
2.1. Đăng ký tài khoản:
 
2.2. Đăng nhập
 
2.3 Đăng xuất
 

2.4. Cập nhật thông tin
 

2.5. Lọc, tìm kiếm
 
2.6. Nhắn tin, liên hệ:
 
2.7. Tạo Blog cá nhân:
 
2.8. Sửa Blog:
 
2.9. Xóa Blog cá nhân:
 
2.10. Đổi mật khẩu
 
2.11. Liên hệ nhà phát triển:
 
3. Biểu đồ lớp:

 
III: Tổng kết
Nhóm: Nhóm 5
1. Đề tài: 
Xây dựng website quản lý profile cá nhân và chia sẻ kinh nghiệm giữa các kênh liên kết quảng bá Nhà trường, Công ty và Sinh viên. Website tạo ra nơi để sinh viên dễ dàng tiếp cận được công việc mong muốn và được nhà trường quản lý
2. Công nghệ sử dụng: 
1.	Server ảo sử dụng: Xampp
2.	Framework sử dụng: Laravel framework php
3.	Ngôn ngữ backend sử dụng: PHP
4.	Hỗ trợ database: MySQL
3. Kết quả ứng dụng web: https://github.com/phamtrong2000/WebNhom5
4. Kinh nghiệm, bài học:
Sau khi tìm hiểu, học tập và nghiên cứu, nhóm em đã hoàn thành ứng dụng web về quản lý việc làm tuy nhiên do thời gian còn hạn chế nên nhóm em đã hoàn thành trang web vẫn còn đơn giản, sau khi làm xong ứng dụng web, nhóm em đã tìm hiểu sâu về ngôn ngữ PHP để thao tác với trang web, hiểu thêm nhiều về framework để dễ dàng làm việc, học được cách làm việc nhóm hiệu quả, biết các giải quyết một bài toán khó. Để có thể hoàn thành trang web, chúng em xin cảm ơn thầy Nguyễn Việt Anh đã luôn quan tâm dạy dỗ chúng em trong suốt quá trình học. Chúng em xin chân thành cảm ơn!
5. Đánh giá kết quả làm việc nhóm:

TT	Họ và tên	Tự đánh giá	Nhóm đánh giá	Ký tên
1	Phạm Văn Trọng(Captain)	B	A	Trọng
2	Trần Đức Toản	B	A	Toản
3	Nguyễn Thị Hoài Thu	C	B	Thu
4	Vũ Quỳnh Trang	C	B	Trang
5	Võ Thị Vân	C	B	Vân
6	Nguyễn Thị Ngọc Linh	C	B	Linh
	Nhóm trưởng
	(Ký tên)
	  Trọng	
	Phạm Văn Trọng


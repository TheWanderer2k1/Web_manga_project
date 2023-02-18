# Web_manga_projects
## Hướng dẫn cài đặt
### Cài đặt Backend:
1. Yêu cầu: bộ công cụ XAMPP, hoặc Apache và Mysql workbench
2. Cài đặt database:
	- Tạo database mới với tên là "web_manga"
	- Sử dụng XAMPP hoặc Mysql workbench để import dữ liệu bằng file web_manga.sql (file để tại vị trí ./Backend/database/) vào trong database vừa tạo
3. Cài đặt api:
	- Copy thư mục server nằm trong thư mục Backend vào trong thư mục htdocs của XAMPP hoặc Apache

### Cài đặt frontend:
1. Yêu cầu: máy tính đã cài đặt Nodejs, Angular 13+
	- Cách cài framework  tham khảo tại đây: [angular-setup](https://angular.io/guide/setup-local)
2. Chạy frontend:
	- Di chuyển vào thư mục web_manga
	- Bật cửa sổ terminal và chạy lệnh ng serve

### Một số bug có thể có:
1. Không hiển thị dữ liệu, chỉ có giao diện:
	1. Trường hợp không kết nối được với database:
		- Mở file db.inc.php (file để tại vị trí ./Backend/server/connection/)
		- Thay đổi các biến server, user, password tương ứng với cài đặt trong máy
	2. Trường hợp frontend không tìm thấy server:
		- Di chuyển tới thư mục ./web_manga/src/app
		- Mở file manga.service.ts
		- Thay đổi đường dẫn của biến _urlPrefix (mặc định là "http://localhost/server/") thành đường dẫn tương ứng với vị trí để thư mục server trong htdocs

## Các chức năng của chương trình:
- Chức năng login/signin
- Đọc truyện
- Comment truyện (chỉ comment được khi đã login)
- Tìm kiếm (theo tên truyện, tác giả, thể loại)
- Chức năng admin:
	- Thống kê số người đang dùng web
	- Quản lý người dùng (khóa/mở khóa tài khoản, xóa người dùng)
	- Admin account: 
		- username: hoanganh 
		- pwd: 123

## Phân công công việc:
1. Lương Nguyễn Hoàng Anh - 20194471
	1. Vai trò: Leader
	2. Nhiệm vụ:
		- Thiết kế database
		- Viết code php xử lý request từ frontend
		- Phụ trách chức năng login/signin
		- Phụ trách chức năng đọc truyện

2. Lê Đức Huy - 20194587
	1. Vai trò: Thành viên
	2. Nhiệm vụ:
		- Phụ trách thiết kế giao diện admin
		- Phụ trách chức năng admin: thống kê người dùng, quản lý người dùng

3. Nguyễn Đình Đức - 20194512
	1. Vai trò: Thành viên
	2. Nhiệm vụ:
		- Phụ trách thiết kế giao diện trang chủ
		- Phụ trách thiết kế chức năng tìm kiếm

4. Bùi Ngọc Duy - 20194537
	1. Vai trò: Thành viên
	2. Nhiệm vụ:
		- Phụ trách thiết kế chức năng comment
## Cinema
### Giới thiệu
Hệ thống quản lý rạp chiếu phim được xây dựng bằng Laravel, giúp người dùng dễ dàng đặt vé, thanh toán và quản lý lịch chiếu phim. Ứng dụng hỗ trợ hai loại người dùng chính:

- Khách hàng: Đặt vé, thanh toán vé trực tuyến.
- Quản trị viên: Quản lý phim, suất chiếu, vé và báo cáo doanh thu.
### Chức năng chính
•	Đối với khách hàng:
-	Xem danh sách phim, suất chiếu, thông tin rạp.
-	Đặt vé trực tuyến, chọn rạp.
-	Thanh toán vé
-	Kiểm tra và hủy vé (nếu chưa thanh toán).
•	Đối với quản lý rạp:
-	Thêm, sửa, xóa phim, lịch chiếu, phòng chiếu.
-	Quản lý đặt vé, theo dõi doanh thu.
-	Xử lý các yêu cầu thanh toán và hủy vé.

### Công nghệ sử dụng
- Laravel (Framework PHP)
- MySQL (Cơ sở dữ liệu)
- Bootstrap (Giao diện)
- MoMo & VNPAY API (Thanh toán)
### Cài đặt & Chạy dự án
1. Clone repo:
git clone https://github.com/dnthtrucs/WebNangCao.git
cd cinema
2. Cấu hình môi trường:

- Copy file .env.example thành .env
- Cập nhật thông tin DB, MoMo, VNPAY trong .env
3. Cài đặt dependencies:

- composer install
- npm install
4. Tạo database & chạy migration:

php artisan migrate --seed
5. Chạy ứng dụng:

- php artisan serve
- Mở trình duyệt và truy cập: http://172.20.10.6:8000

### Cấu trúc dự án
/app
  ├── Models        # Định nghĩa mô hình dữ liệu
  ├── Http
      ├── Controllers  # Controller xử lý logic
      ├── Middleware   # Middleware bảo mật
/resources
  ├── views         # Giao diện (Blade templates)
/routes
  ├── web.php       # Định tuyến web
/database
  ├── migrations    # Cấu trúc DB
### Hướng phát triển
- Tích hợp AI để gợi ý phim theo sở thích người dùng.
- Xây dựng hệ thống thành viên, cung cấp ưu đãi và tích điểm.
- Cải thiện giao diện UI/UX để nâng cao trải nghiệm người dùng.
- Tích hợp thêm cổng thanh toán để đa dạng lựa chọn thanh toán.
- Mở rộng API để kết nối với ứng dụng di động trong tương lai.

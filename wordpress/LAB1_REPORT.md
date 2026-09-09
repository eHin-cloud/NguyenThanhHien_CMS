# Báo Cáo Thực Hành Lab 1 - CMS WordPress
**Sinh viên:** Nguyễn Thanh Hiền  
**Website:** CMS WordPress - Nguyễn Thanh Hiền  
**Database:** `wordpress_nguyenthanhhien`

---

## 1. Danh sách 5 Chuyên mục (Categories)

| STT | ID | Tên chuyên mục | Chuỗi định danh (Slug) | Mô tả |
| :---: | :---: | :--- | :--- | :--- |
| 1 | `2` | **Công nghệ** | `cong-nghe` | Tin tức, xu hướng và thủ thuật công nghệ mới nhất |
| 2 | `3` | **Đời sống** | `doi-song` | Chia sẻ kinh nghiệm sống, mẹo vặt và phong cách sống |
| 3 | `4` | **Giáo dục** | `giao-duc` | Kiến thức học tập, kỹ năng và phát triển bản thân |
| 4 | `5` | **Kinh doanh** | `kinh-doanh` | Thị trường, tài chính cá nhân và khởi nghiệp |
| 5 | `6` | **Giải trí** | `giai-tri` | Phim ảnh, âm nhạc, nghệ thuật và văn hóa thư giãn |

---

## 2. Danh sách 10 Bài viết & Phân bổ Chuyên mục

Mỗi bài viết đều có tiêu đề có nghĩa, đoạn trích (Excerpt) ~100 ký tự, thẻ (tags) liên quan, ảnh đại diện (Featured Image) và tối thiểu 2 hình ảnh minh họa trong nội dung:

| STT | ID | Tiêu đề | Chuyên mục | Thẻ (Tags) | Độ dài Excerpt | Hình ảnh |
| :---: | :---: | :--- | :--- | :--- | :---: | :---: |
| 1 | `12` | Xu hướng Trí tuệ Nhân tạo (AI) bùng nổ trong năm 2026 | Công nghệ | Trí tuệ nhân tạo, Công nghệ, Xu hướng số | 106 ký tự | 2 ảnh minh họa + Featured |
| 2 | `15` | Bảo vệ dữ liệu và an toàn thông tin cá nhân trên không gian mạng | Công nghệ | An toàn thông tin, Bảo mật, Kỹ năng số | 107 ký tự | 2 ảnh minh họa + Featured |
| 3 | `18` | Bí quyết xây dựng thói quen dậy sớm và rèn luyện sức khỏe mỗi ngày | Đời sống | Sức khỏe, Thói quen tốt, Đời sống lành mạnh | 101 ký tự | 2 ảnh minh họa + Featured |
| 4 | `21` | Nghệ thuật sắp xếp không gian sống tối giản cho người bận rộn | Đời sống | Sống tối giản, Không gian sống, Nhà đẹp | 104 ký tự | 2 ảnh minh họa + Featured |
| 5 | `24` | Phương pháp tự học và nghiên cứu tài liệu hiệu quả cho sinh viên | Giáo dục | Phương pháp học, Sinh viên, Kỹ năng học tập | 104 ký tự | 2 ảnh minh họa + Featured |
| 6 | `27` | Tầm quan trọng của việc thành thạo ngoại ngữ trong kỷ nguyên toàn cầu | Giáo dục | Ngoại ngữ, Tiếng Anh, Phát triển bản thân | 101 ký tự | 2 ảnh minh họa + Featured |
| 7 | `30` | Khởi nghiệp thời đại số: Những thách thức và cơ hội vàng cho giới trẻ | Kinh doanh | Khởi nghiệp, Kinh doanh số, Đổi mới sáng tạo | 105 ký tự | 2 ảnh minh họa + Featured |
| 8 | `33` | Quản lý tài chính cá nhân thông minh theo quy tắc 6 chiếc lọ | Kinh doanh | Tài chính cá nhân, Tiết kiệm, Đầu tư thông minh | 101 ký tự | 2 ảnh minh họa + Featured |
| 9 | `36` | Top những bộ phim điện ảnh truyền cảm hứng mạnh mẽ đáng xem nhất | Giải trí | Điện ảnh, Phim hay, Truyền cảm hứng | 104 ký tự | 2 ảnh minh họa + Featured |
| 10 | `39` | Lợi ích bất ngờ của âm nhạc đối với sức khỏe tinh thần và sự sáng tạo | Giải trí | Âm nhạc, Thư giãn, Sáng tạo | 100 ký tự | 2 ảnh minh họa + Featured |

---

## 3. Danh sách 5 Tài khoản & Bảng So sánh Vai trò (Roles)

### 3.1. Danh sách tài khoản người dùng

| Tài khoản (Username) | Mật khẩu | Vai trò (Role) | Email | Tên hiển thị |
| :--- | :--- | :--- | :--- | :--- |
| **`user1`** | `User1@123456` | **Administrator** | `user1@example.com` | User 1 (Admin) |
| **`user2`** | `User2@123456` | **Editor** | `user2@example.com` | User 2 (Editor) |
| **`user3`** | `User3@123456` | **Author** | `user3@example.com` | User 3 (Author) |
| **`user4`** | `User4@123456` | **Contributor** | `user4@example.com` | User 4 (Contributor) |
| **`user5`** | `User5@123456` | **Subscriber** | `user5@example.com` | User 5 (Subscriber) |

### 3.2. Bảng so sánh quyền hạn giữa các vai trò (Capabilities)

| Chức năng quản trị | Administrator (`user1`) | Editor (`user2`) | Author (`user3`) | Contributor (`user4`) | Subscriber (`user5`) |
| :--- | :---: | :---: | :---: | :---: | :---: |
| **Xem bài viết / Hồ sơ cá nhân (Read / Profile)** | Có | Có | Có | Có | Có |
| **Tạo & sửa bài viết của mình (Edit Posts)** | Có | Có | Có | Có | Không |
| **Tải lên Media / Hình ảnh (Upload Files)** | Có | Có | Có | Không | Không |
| **Tự xuất bản bài viết (Publish Posts)** | Có | Có | Có | Không (Chỉ gửi duyệt) | Không |
| **Chỉnh sửa / Xóa bài người khác (Edit Others)** | Có | Có | Không | Không | Không |
| **Quản lý Chuyên mục & Thẻ (Categories/Tags)** | Có | Có | Không | Không | Không |
| **Quản lý Trang tĩnh (Pages)** | Có | Có | Không | Không | Không |
| **Kiểm duyệt Bình luận (Moderate Comments)** | Có | Có | Không | Không | Không |
| **Quản lý Giao diện (Themes)** | Có | Không | Không | Không | Không |
| **Cài đặt & Quản lý Plugins** | Có | Không | Không | Không | Không |
| **Quản lý Người dùng (Users)** | Có | Không | Không | Không | Không |
| **Cài đặt Hệ thống (Settings General, Permalinks)** | Có | Không | Không | Không | Không |

---

## 4. Cấu hình Hệ thống (Settings > General)

* **Site Title:** `CMS WordPress - Nguyễn Thanh Hiền`
* **Tagline:** `Website thông tin tổng hợp, công nghệ và đời sống`
* **Timezone:** `Asia/Ho_Chi_Minh` (UTC+7)
* **Date Format:** `d/m/Y` (09/09/2026)
* **Time Format:** `H:i` (10:04)

---

## 5. Cơ sở dữ liệu (Database Export)

Toàn bộ database đã được xuất và lưu trữ tại:
* **Tệp:** `wordpress/db/wordpress_nguyenthanhhien.sql`
* **Dung lượng:** ~1.79 MB
* **Mã hóa:** `utf8mb4`

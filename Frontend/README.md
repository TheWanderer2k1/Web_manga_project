xampp
laravel

-database(chưa fix được lỗi mở sql nên chưa check được một số lỗi) 
ps database được tạo theo kiểu phân quyền user/admin
{do tạo data theo model cũ  
+chức năng thêm, sửa, xóa truyện/thể loại đã xong(trước khi lỗi database)(app/http/controller)(giao diện:resource/views/admincp)
+liên quan đến chapter chưa làm
}
-login done

-Giao diện(resource/views)
    +Trang chủ(cơ bản đã xong cần sửa lại chút css)(navbar menu dùng nhầm bootstrap cũ nên không tương thích k ấn được dropdown đâu nhé)
    +HOT(X)
    +Xếp hạng (X)
    +Thể loại (X)
    +Tìm truyện(X)
    +Theo dõi(X)
    +Lịch sử(X)
 chưa phân trang nên mấy cái chuyển trang k xài được đâu nhé
 
 
 
 Những thức liên quan đến chức năng của admin(có thể dùng "php artisan route:list" để kiểm tra):
 
 
 Domain | Method    | URI                    | Name             | Action                                                                 | Middleware                                  |
+--------+-----------+------------------------+------------------+------------------------------------------------------------------------+---------------------------------------------+
|        | GET|HEAD  | /                      |                  | Closure                                                                | web                                         |
|        | GET|HEAD  | api/user               |                  | Closure                                                                | api                                         |
|        |           |                        |                  |                                                                        | App\Http\Middleware\Authenticate:sanctum    |
|        | GET|HEAD  | chapter                | chapter.index    | App\Http\Controllers\ChapterController@index                           | web                                         |
|        | POST      | chapter                | chapter.store    | App\Http\Controllers\ChapterController@store                           | web                                         |
|        | GET|HEAD  | chapter/create         | chapter.create   | App\Http\Controllers\ChapterController@create                          | web                                         |
|        | GET|HEAD  | chapter/{chapter}      | chapter.show     | App\Http\Controllers\ChapterController@show                            | web                                         |
|        | PUT|PATCH | chapter/{chapter}      | chapter.update   | App\Http\Controllers\ChapterController@update                          | web                                         |
|        | DELETE    | chapter/{chapter}      | chapter.destroy  | App\Http\Controllers\ChapterController@destroy                         | web                                         |
|        | GET|HEAD  | chapter/{chapter}/edit | chapter.edit     | App\Http\Controllers\ChapterController@edit                            | web                                         |
|        | GET|HEAD  | home                   | home             | App\Http\Controllers\HomeController@index                              | web                                         |
|        |           |                        |                  |                                                                        | App\Http\Middleware\Authenticate            |
|        | POST      | login                  |                  | App\Http\Controllers\Auth\LoginController@login                        | web                                         |
|        |           |                        |                  |                                                                        | App\Http\Middleware\RedirectIfAuthenticated |
|        | GET|HEAD  | login                  | login            | App\Http\Controllers\Auth\LoginController@showLoginForm                | web                                         |
|        |           |                        |                  |                                                                        | App\Http\Middleware\RedirectIfAuthenticated |
|        | POST      | logout                 | logout           | App\Http\Controllers\Auth\LoginController@logout                       | web                                         |
|        | GET|HEAD  | password/confirm       | password.confirm | App\Http\Controllers\Auth\ConfirmPasswordController@showConfirmForm    | web                                         |
|        |           |                        |                  |                                                                        | App\Http\Middleware\Authenticate            |
|        | POST      | password/confirm       |                  | App\Http\Controllers\Auth\ConfirmPasswordController@confirm            | web                                         |
|        |           |                        |                  |                                                                        | App\Http\Middleware\Authenticate            |
|        | POST      | password/email         | password.email   | App\Http\Controllers\Auth\ForgotPasswordController@sendResetLinkEmail  | web                                         |
|        | GET|HEAD  | password/reset         | password.request | App\Http\Controllers\Auth\ForgotPasswordController@showLinkRequestForm | web                                         |
|        | POST      | password/reset         | password.update  | App\Http\Controllers\Auth\ResetPasswordController@reset                | web                                         |
|        | GET|HEAD  | password/reset/{token} | password.reset   | App\Http\Controllers\Auth\ResetPasswordController@showResetForm        | web                                         |
|        | POST      | register               |                  | App\Http\Controllers\Auth\RegisterController@register                  | web                                         |
|        |           |                        |                  |                                                                        | App\Http\Middleware\RedirectIfAuthenticated |
|        | GET|HEAD  | register               | register         | App\Http\Controllers\Auth\RegisterController@showRegistrationForm      | web                                         |
|        |           |                        |                  |                                                                        | App\Http\Middleware\RedirectIfAuthenticated |
|        | GET|HEAD  | sanctum/csrf-cookie    |                  | Laravel\Sanctum\Http\Controllers\CsrfCookieController@show             | web                                         |
|        | GET|HEAD  | theloai                | theloai.index    | App\Http\Controllers\TheLoaiController@index                           | web                                         |
|        | POST      | theloai                | theloai.store    | App\Http\Controllers\TheLoaiController@store                           | web                                         |
|        | GET|HEAD  | theloai/create         | theloai.create   | App\Http\Controllers\TheLoaiController@create                          | web                                         |
|        | PUT|PATCH | theloai/{theloai}      | theloai.update   | App\Http\Controllers\TheLoaiController@update                          | web                                         |
|        | DELETE    | theloai/{theloai}      | theloai.destroy  | App\Http\Controllers\TheLoaiController@destroy                         | web                                         |
|        | GET|HEAD  | theloai/{theloai}      | theloai.show     | App\Http\Controllers\TheLoaiController@show                            | web                                         |
|        | GET|HEAD  | theloai/{theloai}/edit | theloai.edit     | App\Http\Controllers\TheLoaiController@edit                            | web                                         |
|        | GET|HEAD  | truyen                 | truyen.index     | App\Http\Controllers\TruyenController@index                            | web                                         |
|        | POST      | truyen                 | truyen.store     | App\Http\Controllers\TruyenController@store                            | web                                         |
|        | GET|HEAD  | truyen/create          | truyen.create    | App\Http\Controllers\TruyenController@create                           | web                                         |
|        | GET|HEAD  | truyen/{truyen}        | truyen.show      | App\Http\Controllers\TruyenController@show                             | web                                         |
|        | PUT|PATCH | truyen/{truyen}        | truyen.update    | App\Http\Controllers\TruyenController@update                           | web                                         |
|        | DELETE    | truyen/{truyen}        | truyen.destroy   | App\Http\Controllers\TruyenController@destroy                          | web                                         |
|        | GET|HEAD  | truyen/{truyen}/edit   | truyen.edit      | App\Http\Controllers\TruyenController@edit                             | web                                         |
+--------+-----------+------------------------+------------------+------------------------------------------------------------------------+--------------------

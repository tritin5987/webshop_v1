<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/userguide3/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['admin/chuyen-muc'] = 'Admin/ChuyenMuc';
$route['admin/chuyen-muc/(:any)/trang'] = 'Admin/ChuyenMuc/page/$1';
$route['admin/chuyen-muc/them'] = 'Admin/ChuyenMuc/add';
$route['admin/chuyen-muc/(:any)/sua'] = 'Admin/ChuyenMuc/update/$1';
$route['admin/chuyen-muc/(:any)/xoa'] = 'Admin/ChuyenMuc/delete/$1';

$route['chuyen-muc'] = 'Web/ChuyenMuc/index';
$route['chuyen-muc/(:any)'] = 'Web/ChuyenMuc/detail/$1';
$route['chuyen-muc/trang/(:any)'] = 'Web/ChuyenMuc/page/$1';
$route['chuyen-muc/(:any)/trang/(:any)'] = 'Web/ChuyenMuc/detailPage/$1/$2';

$route['admin/san-pham'] = 'Admin/SanPham';
$route['admin/san-pham/(:any)/trang'] = 'Admin/SanPham/page/$1';
$route['admin/san-pham/them'] = 'Admin/SanPham/add';
$route['admin/san-pham/(:any)/sua'] = 'Admin/SanPham/update/$1';
$route['admin/san-pham/(:any)/xoa'] = 'Admin/SanPham/delete/$1';
$route['admin/san-pham/(:any)/nhap'] = 'Admin/SanPham/import/$1';
$route['admin/san-pham/(:any)/lich-su'] = 'Admin/SanPham/history/$1';

$route['admin/dang-nhap'] = 'Admin/DangNhap/index';
$route['admin/dang-xuat'] = 'Admin/DangXuat/index';

$route['admin/khach-hang'] = 'Admin/KhachHang';
$route['admin/khach-hang/(:any)/trang'] = 'Admin/KhachHang/page/$1';
$route['admin/khach-hang/(:any)/xem'] = 'Admin/KhachHang/view/$1';
$route['admin/khach-hang/(:any)/trang-thai'] = 'Admin/KhachHang/status/$1';

$route['admin/ca-nhan'] = 'Admin/CaNhan';

$route['admin/nhan-vien'] = 'Admin/NhanVien';
$route['admin/nhan-vien/(:any)/trang'] = 'Admin/NhanVien/page/$1';
$route['admin/nhan-vien/them'] = 'Admin/NhanVien/add';
$route['admin/nhan-vien/(:any)/sua'] = 'Admin/NhanVien/update/$1';
$route['admin/nhan-vien/(:any)/xoa'] = 'Admin/NhanVien/delete/$1';

$route['lien-he'] = 'Web/LienHe';
$route['dang-nhap'] = 'Web/DangNhap';
$route['dang-xuat'] = 'Web/DangXuat';
$route['dang-ky'] = 'Web/DangNhap/register';

$route['khach-hang'] = 'Web/KhachHang';
$route['khach-hang/sua'] = 'Web/KhachHang/update';
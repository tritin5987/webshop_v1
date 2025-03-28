<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class NhanVien extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        if(!$this->session->has_userdata('taikhoan')){
            return redirect(base_url('admin/dang-nhap/'));
        }

        $this->load->model('Admin/Model_NhanVien');
    }

    public function add()
    {
        $data['title'] = "Thêm nhân viên mới";
        if ($this->input->server('REQUEST_METHOD') === 'POST') {
            $hoten = $this->input->post('hoten');
            $taikhoan = $this->input->post('taikhoan');
            $matkhau = $this->input->post('matkhau');
            $email = $this->input->post('email');
            $sodienthoai = $this->input->post('sodienthoai');
            $phanquyen = $this->input->post('phanquyen');
            $trangthai = $this->input->post('trangthai');

            if(empty($hoten) || empty($taikhoan) || empty($matkhau) || empty($email) || empty($sodienthoai)){
                $data['error'] = "Vui lòng nhập đủ thông tin!";
                return $this->load->view('Admin/View_ThemNhanVien', $data);
            }

            // Mã hóa mật khẩu trước khi lưu vào DB
            $matkhau = md5($matkhau);

            $this->Model_NhanVien->add($hoten, $taikhoan, $matkhau, $email, $sodienthoai, $phanquyen, $trangthai);

            $this->session->set_flashdata('success', 'Thêm nhân viên thành công!');
            return redirect(base_url('admin/nhan-vien/'));
        }
        return $this->load->view('Admin/View_ThemNhanVien', $data);
    }
}

<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\BackUp
 *
 * @property int $id
 * @property string $tenfile
 * @property string $ngaytao
 * @property string $duongdan
 * @property string $ketqua
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|BackUp newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BackUp newQuery()
 * @method static \Illuminate\Database\Query\Builder|BackUp onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|BackUp query()
 * @method static \Illuminate\Database\Eloquent\Builder|BackUp whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BackUp whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BackUp whereDuongdan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BackUp whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BackUp whereKetqua($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BackUp whereNgaytao($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BackUp whereTenfile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BackUp whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|BackUp withTrashed()
 * @method static \Illuminate\Database\Query\Builder|BackUp withoutTrashed()
 */
	class BackUp extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\BaiGiang
 *
 * @property int $id
 * @property string $tenbaigiang
 * @property string $noidung
 * @property string $filebaigiang
 * @property int $khoa_hoc_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\BaiTap[] $dsBaiTap
 * @property-read int|null $ds_bai_tap_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\BuoiHoc[] $dsBuoiHoc
 * @property-read int|null $ds_buoi_hoc_count
 * @property-read \App\Models\KhoaHoc $khoaHoc
 * @method static \Illuminate\Database\Eloquent\Builder|BaiGiang newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BaiGiang newQuery()
 * @method static \Illuminate\Database\Query\Builder|BaiGiang onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|BaiGiang query()
 * @method static \Illuminate\Database\Eloquent\Builder|BaiGiang whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaiGiang whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaiGiang whereFilebaigiang($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaiGiang whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaiGiang whereKhoaHocId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaiGiang whereNoidung($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaiGiang whereTenbaigiang($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaiGiang whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|BaiGiang withTrashed()
 * @method static \Illuminate\Database\Query\Builder|BaiGiang withoutTrashed()
 */
	class BaiGiang extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\BaiTap
 *
 * @property int $id
 * @property string $tenbaitap
 * @property string $loaicauhoi
 * @property string $noidung
 * @property string|null $hinhanhminhhoa
 * @property string|null $dapan1
 * @property string|null $dapan2
 * @property string|null $dapan3
 * @property string|null $dapan4
 * @property string $dapan
 * @property int $bai_giang_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\BaiGiang $baiGiang
 * @property-read \App\Models\DanhSachBaiTap $dsDanhSachBaiTap
 * @method static \Illuminate\Database\Eloquent\Builder|BaiTap newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BaiTap newQuery()
 * @method static \Illuminate\Database\Query\Builder|BaiTap onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|BaiTap query()
 * @method static \Illuminate\Database\Eloquent\Builder|BaiTap whereBaiGiangId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaiTap whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaiTap whereDapan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaiTap whereDapan1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaiTap whereDapan2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaiTap whereDapan3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaiTap whereDapan4($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaiTap whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaiTap whereHinhanhminhhoa($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaiTap whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaiTap whereLoaicauhoi($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaiTap whereNoidung($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaiTap whereTenbaitap($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaiTap whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|BaiTap withTrashed()
 * @method static \Illuminate\Database\Query\Builder|BaiTap withoutTrashed()
 */
	class BaiTap extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\BuoiHoc
 *
 * @property int $id
 * @property string $ngayhoc
 * @property string $ghichu
 * @property string $noidungbuoihoc
 * @property string $trangthai
 * @property int $lop_hoc_id
 * @property int $phong_hoc_id
 * @property int $giao_vien_id
 * @property int $bai_giang_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\BaiGiang $baiGiang
 * @property-read \App\Models\CheckIn|null $checkIn
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\DanhSachBaiTap[] $dsBaiTap
 * @property-read int|null $ds_bai_tap_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\DiemDanh[] $dsDiemDanh
 * @property-read int|null $ds_diem_danh_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\NghiPhep[] $dsNghiPhep
 * @property-read int|null $ds_nghi_phep_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\NhanXetHocSinh[] $dsNhanXetHocSinh
 * @property-read int|null $ds_nhan_xet_hoc_sinh_count
 * @property-read \App\Models\GiaoVien $giaoVien
 * @property-read \App\Models\LopHoc $lopHoc
 * @property-read \App\Models\PhongHoc $phongHoc
 * @method static \Illuminate\Database\Eloquent\Builder|BuoiHoc newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BuoiHoc newQuery()
 * @method static \Illuminate\Database\Query\Builder|BuoiHoc onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|BuoiHoc query()
 * @method static \Illuminate\Database\Eloquent\Builder|BuoiHoc whereBaiGiangId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BuoiHoc whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BuoiHoc whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BuoiHoc whereGhichu($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BuoiHoc whereGiaoVienId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BuoiHoc whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BuoiHoc whereLopHocId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BuoiHoc whereNgayhoc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BuoiHoc whereNoidungbuoihoc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BuoiHoc wherePhongHocId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BuoiHoc whereTrangthai($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BuoiHoc whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|BuoiHoc withTrashed()
 * @method static \Illuminate\Database\Query\Builder|BuoiHoc withoutTrashed()
 */
	class BuoiHoc extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\CaHoc
 *
 * @property int $id
 * @property string $thoigianbatdau
 * @property string $thoigianketthuc
 * @property int $buoi
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\ThoiGianHoc[] $dsThoiGianHoc
 * @property-read int|null $ds_thoi_gian_hoc_count
 * @method static \Illuminate\Database\Eloquent\Builder|CaHoc newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CaHoc newQuery()
 * @method static \Illuminate\Database\Query\Builder|CaHoc onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|CaHoc query()
 * @method static \Illuminate\Database\Eloquent\Builder|CaHoc whereBuoi($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CaHoc whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CaHoc whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CaHoc whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CaHoc whereThoigianbatdau($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CaHoc whereThoigianketthuc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CaHoc whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|CaHoc withTrashed()
 * @method static \Illuminate\Database\Query\Builder|CaHoc withoutTrashed()
 */
	class CaHoc extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\CauHinhLuong
 *
 * @property int $id
 * @property string $ten
 * @property string $mota
 * @property float $giatri
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|CauHinhLuong newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CauHinhLuong newQuery()
 * @method static \Illuminate\Database\Query\Builder|CauHinhLuong onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|CauHinhLuong query()
 * @method static \Illuminate\Database\Eloquent\Builder|CauHinhLuong whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CauHinhLuong whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CauHinhLuong whereGiatri($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CauHinhLuong whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CauHinhLuong whereMota($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CauHinhLuong whereTen($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CauHinhLuong whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|CauHinhLuong withTrashed()
 * @method static \Illuminate\Database\Query\Builder|CauHinhLuong withoutTrashed()
 */
	class CauHinhLuong extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\CheckIn
 *
 * @property int $id
 * @property string|null $giocheckin
 * @property string|null $giocheckout
 * @property string|null $ketqua
 * @property string|null $ghichu
 * @property int|null $nhan_vien_id
 * @property int|null $giao_vien_id
 * @property string|null $ngaycham
 * @property string $trangthai
 * @property int|null $buoi_hoc_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\BuoiHoc|null $buoiHoc
 * @property-read \App\Models\GiaoVien|null $giaoVien
 * @property-read \App\Models\NhanVien|null $nhanVien
 * @method static \Illuminate\Database\Eloquent\Builder|CheckIn newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CheckIn newQuery()
 * @method static \Illuminate\Database\Query\Builder|CheckIn onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|CheckIn query()
 * @method static \Illuminate\Database\Eloquent\Builder|CheckIn whereBuoiHocId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CheckIn whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CheckIn whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CheckIn whereGhichu($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CheckIn whereGiaoVienId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CheckIn whereGiocheckin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CheckIn whereGiocheckout($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CheckIn whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CheckIn whereKetqua($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CheckIn whereNgaycham($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CheckIn whereNhanVienId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CheckIn whereTrangthai($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CheckIn whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|CheckIn withTrashed()
 * @method static \Illuminate\Database\Query\Builder|CheckIn withoutTrashed()
 */
	class CheckIn extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ChiTietHocPhi
 *
 * @property int $id
 * @property int $khoan_thu_id
 * @property int $lich_su_hoc_phi_id
 * @property int $dadong
 * @property string|null $trangthai
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\KhoanThu $khoanThu
 * @property-read \App\Models\LichSuHocPhi $lichSuHocPhi
 * @method static \Illuminate\Database\Eloquent\Builder|ChiTietHocPhi newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ChiTietHocPhi newQuery()
 * @method static \Illuminate\Database\Query\Builder|ChiTietHocPhi onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|ChiTietHocPhi query()
 * @method static \Illuminate\Database\Eloquent\Builder|ChiTietHocPhi whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChiTietHocPhi whereDadong($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChiTietHocPhi whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChiTietHocPhi whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChiTietHocPhi whereKhoanThuId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChiTietHocPhi whereLichSuHocPhiId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChiTietHocPhi whereTrangthai($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChiTietHocPhi whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|ChiTietHocPhi withTrashed()
 * @method static \Illuminate\Database\Query\Builder|ChiTietHocPhi withoutTrashed()
 */
	class ChiTietHocPhi extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ChucVu
 *
 * @property int $id
 * @property string $ten
 * @property string $mota
 * @property int $luongchinh
 * @property int $phucap
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\NhanVien[] $dsNhanVien
 * @property-read int|null $ds_nhan_vien_count
 * @method static \Illuminate\Database\Eloquent\Builder|ChucVu newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ChucVu newQuery()
 * @method static \Illuminate\Database\Query\Builder|ChucVu onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|ChucVu query()
 * @method static \Illuminate\Database\Eloquent\Builder|ChucVu whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChucVu whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChucVu whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChucVu whereLuongchinh($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChucVu whereMota($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChucVu wherePhucap($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChucVu whereTen($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChucVu whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|ChucVu withTrashed()
 * @method static \Illuminate\Database\Query\Builder|ChucVu withoutTrashed()
 */
	class ChucVu extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\DanhSachBaiTap
 *
 * @property int $id
 * @property int $buoi_hoc_id
 * @property int $bai_tap_id
 * @property int $hoc_sinh_id
 * @property string $trangthai
 * @property float $diem
 * @property string $nhanxet
 * @property string $chon
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\BaiTap $baiTap
 * @property-read \App\Models\BuoiHoc $buoiHoc
 * @property-read \App\Models\HocSinh $hocSinh
 * @method static \Illuminate\Database\Eloquent\Builder|DanhSachBaiTap newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DanhSachBaiTap newQuery()
 * @method static \Illuminate\Database\Query\Builder|DanhSachBaiTap onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|DanhSachBaiTap query()
 * @method static \Illuminate\Database\Eloquent\Builder|DanhSachBaiTap whereBaiTapId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DanhSachBaiTap whereBuoiHocId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DanhSachBaiTap whereChon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DanhSachBaiTap whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DanhSachBaiTap whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DanhSachBaiTap whereDiem($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DanhSachBaiTap whereHocSinhId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DanhSachBaiTap whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DanhSachBaiTap whereNhanxet($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DanhSachBaiTap whereTrangthai($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DanhSachBaiTap whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|DanhSachBaiTap withTrashed()
 * @method static \Illuminate\Database\Query\Builder|DanhSachBaiTap withoutTrashed()
 */
	class DanhSachBaiTap extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\DiemDanh
 *
 * @property int $id
 * @property int $ketqua
 * @property string $ghichu
 * @property int $hoc_sinh_id
 * @property int $buoi_hoc_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\BuoiHoc $buoiHoc
 * @property-read \App\Models\HocSinh $hocSinh
 * @method static \Illuminate\Database\Eloquent\Builder|DiemDanh newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DiemDanh newQuery()
 * @method static \Illuminate\Database\Query\Builder|DiemDanh onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|DiemDanh query()
 * @method static \Illuminate\Database\Eloquent\Builder|DiemDanh whereBuoiHocId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DiemDanh whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DiemDanh whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DiemDanh whereGhichu($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DiemDanh whereHocSinhId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DiemDanh whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DiemDanh whereKetqua($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DiemDanh whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|DiemDanh withTrashed()
 * @method static \Illuminate\Database\Query\Builder|DiemDanh withoutTrashed()
 */
	class DiemDanh extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\GiaoVien
 *
 * @property int $id
 * @property string $cmnd
 * @property string $hodem
 * @property string $ten
 * @property string $ngaysinh
 * @property string $gioitinh
 * @property string $sodienthoai
 * @property string $email
 * @property string $diachi
 * @property string $tinhtrang
 * @property int $user_id
 * @property int $loai_giao_vien_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\BuoiHoc[] $dsBuoiHoc
 * @property-read int|null $ds_buoi_hoc_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\LopHoc[] $dsLopHoc
 * @property-read int|null $ds_lop_hoc_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\NhanXetGiaoVien[] $dsNhanXet
 * @property-read int|null $ds_nhan_xet_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\PhuCap[] $dsphucap
 * @property-read int|null $dsphucap_count
 * @property-read \App\Models\LoaiGiaoVien $loaiGiaoVien
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|GiaoVien newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GiaoVien newQuery()
 * @method static \Illuminate\Database\Query\Builder|GiaoVien onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|GiaoVien query()
 * @method static \Illuminate\Database\Eloquent\Builder|GiaoVien whereCmnd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GiaoVien whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GiaoVien whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GiaoVien whereDiachi($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GiaoVien whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GiaoVien whereGioitinh($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GiaoVien whereHodem($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GiaoVien whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GiaoVien whereLoaiGiaoVienId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GiaoVien whereNgaysinh($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GiaoVien whereSodienthoai($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GiaoVien whereTen($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GiaoVien whereTinhtrang($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GiaoVien whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GiaoVien whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|GiaoVien withTrashed()
 * @method static \Illuminate\Database\Query\Builder|GiaoVien withoutTrashed()
 */
	class GiaoVien extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\HinhAnhKhoaHoc
 *
 * @property int $id
 * @property string $duongdan
 * @property int $khoa_hoc_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\KhoaHoc $khoaHoc
 * @method static \Illuminate\Database\Eloquent\Builder|HinhAnhKhoaHoc newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|HinhAnhKhoaHoc newQuery()
 * @method static \Illuminate\Database\Query\Builder|HinhAnhKhoaHoc onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|HinhAnhKhoaHoc query()
 * @method static \Illuminate\Database\Eloquent\Builder|HinhAnhKhoaHoc whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HinhAnhKhoaHoc whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HinhAnhKhoaHoc whereDuongdan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HinhAnhKhoaHoc whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HinhAnhKhoaHoc whereKhoaHocId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HinhAnhKhoaHoc whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|HinhAnhKhoaHoc withTrashed()
 * @method static \Illuminate\Database\Query\Builder|HinhAnhKhoaHoc withoutTrashed()
 */
	class HinhAnhKhoaHoc extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\HocCu
 *
 * @property int $id
 * @property string|null $hinhanhthietbi
 * @property string $tenthietbi
 * @property int $lop_hoc_id
 * @property int $kho_hoc_cu_id
 * @property int $soluong
 * @property string $trangthai
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\KhoHocCu $khohoccu
 * @property-read \App\Models\LopHoc $lopHoc
 * @method static \Illuminate\Database\Eloquent\Builder|HocCu newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|HocCu newQuery()
 * @method static \Illuminate\Database\Query\Builder|HocCu onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|HocCu query()
 * @method static \Illuminate\Database\Eloquent\Builder|HocCu whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HocCu whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HocCu whereHinhanhthietbi($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HocCu whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HocCu whereKhoHocCuId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HocCu whereLopHocId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HocCu whereSoluong($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HocCu whereTenthietbi($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HocCu whereTrangthai($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HocCu whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|HocCu withTrashed()
 * @method static \Illuminate\Database\Query\Builder|HocCu withoutTrashed()
 */
	class HocCu extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\HocPhi
 *
 * @property int $id
 * @property int $canthu
 * @property int $dadong
 * @property int $conno
 * @property string $trangthai
 * @property int $hoc_sinh_id
 * @property string $deadline
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\ChiTietHocPhi[] $dsHocPhi
 * @property-read int|null $ds_hoc_phi_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\KhoanThu[] $dsKhoanThu
 * @property-read int|null $ds_khoan_thu_count
 * @property-read \App\Models\HocSinh $hocSinh
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\LichSuHocPhi[] $lsHocPhi
 * @property-read int|null $ls_hoc_phi_count
 * @method static \Illuminate\Database\Eloquent\Builder|HocPhi newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|HocPhi newQuery()
 * @method static \Illuminate\Database\Query\Builder|HocPhi onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|HocPhi query()
 * @method static \Illuminate\Database\Eloquent\Builder|HocPhi whereCanthu($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HocPhi whereConno($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HocPhi whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HocPhi whereDadong($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HocPhi whereDeadline($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HocPhi whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HocPhi whereHocSinhId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HocPhi whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HocPhi whereTrangthai($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HocPhi whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|HocPhi withTrashed()
 * @method static \Illuminate\Database\Query\Builder|HocPhi withoutTrashed()
 */
	class HocPhi extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\HocSinh
 *
 * @property int $id
 * @property string|null $hodem
 * @property string|null $ten
 * @property string|null $ngaysinh
 * @property string|null $gioitinh
 * @property string|null $trangthai
 * @property string|null $cmnd
 * @property string|null $hotenchame
 * @property string|null $email
 * @property string|null $sodienthoai
 * @property string|null $diachi
 * @property int $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\DanhSachBaiTap $dsDanhSachBaiTap
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\DiemDanh[] $dsDiemDanh
 * @property-read int|null $ds_diem_danh_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\LichTraiNghiem[] $dsLichTraiNghiem
 * @property-read int|null $ds_lich_trai_nghiem_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\PhanLop[] $dsLopHoc
 * @property-read int|null $ds_lop_hoc_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\NghiPhep[] $dsNghiPhep
 * @property-read int|null $ds_nghi_phep_count
 * @property-read \App\Models\HocPhi|null $hocPhi
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|HocSinh newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|HocSinh newQuery()
 * @method static \Illuminate\Database\Query\Builder|HocSinh onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|HocSinh query()
 * @method static \Illuminate\Database\Eloquent\Builder|HocSinh whereCmnd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HocSinh whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HocSinh whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HocSinh whereDiachi($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HocSinh whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HocSinh whereGioitinh($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HocSinh whereHodem($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HocSinh whereHotenchame($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HocSinh whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HocSinh whereNgaysinh($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HocSinh whereSodienthoai($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HocSinh whereTen($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HocSinh whereTrangthai($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HocSinh whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HocSinh whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|HocSinh withTrashed()
 * @method static \Illuminate\Database\Query\Builder|HocSinh withoutTrashed()
 */
	class HocSinh extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\HopDong
 *
 * @property int $id
 * @property string $ngaytao
 * @property string $ngayhethan
 * @property string $noidung
 * @property string $trangthai
 * @property string $ghichu
 * @property int $nhan_vien_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\NhanVien $nhanVien
 * @method static \Illuminate\Database\Eloquent\Builder|HopDong newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|HopDong newQuery()
 * @method static \Illuminate\Database\Query\Builder|HopDong onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|HopDong query()
 * @method static \Illuminate\Database\Eloquent\Builder|HopDong whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HopDong whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HopDong whereGhichu($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HopDong whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HopDong whereNgayhethan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HopDong whereNgaytao($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HopDong whereNhanVienId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HopDong whereNoidung($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HopDong whereTrangthai($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HopDong whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|HopDong withTrashed()
 * @method static \Illuminate\Database\Query\Builder|HopDong withoutTrashed()
 */
	class HopDong extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\KhenThuongKyLuat
 *
 * @property int $id
 * @property string $ngaytao
 * @property string $ten
 * @property string $lydo
 * @property int $sotien
 * @property string $ghichu
 * @property string $loai
 * @property int $nhan_vien_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\NhanVien $nhanVien
 * @method static \Illuminate\Database\Eloquent\Builder|KhenThuongKyLuat newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|KhenThuongKyLuat newQuery()
 * @method static \Illuminate\Database\Query\Builder|KhenThuongKyLuat onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|KhenThuongKyLuat query()
 * @method static \Illuminate\Database\Eloquent\Builder|KhenThuongKyLuat whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KhenThuongKyLuat whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KhenThuongKyLuat whereGhichu($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KhenThuongKyLuat whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KhenThuongKyLuat whereLoai($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KhenThuongKyLuat whereLydo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KhenThuongKyLuat whereNgaytao($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KhenThuongKyLuat whereNhanVienId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KhenThuongKyLuat whereSotien($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KhenThuongKyLuat whereTen($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KhenThuongKyLuat whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|KhenThuongKyLuat withTrashed()
 * @method static \Illuminate\Database\Query\Builder|KhenThuongKyLuat withoutTrashed()
 */
	class KhenThuongKyLuat extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\KhoHocCu
 *
 * @property int $id
 * @property string $tenhoccu
 * @property string|null $hinhanhhoccu
 * @property int $soluong
 * @property int $capphat
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\HocCu[] $dshoccu
 * @property-read int|null $dshoccu_count
 * @method static \Illuminate\Database\Eloquent\Builder|KhoHocCu newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|KhoHocCu newQuery()
 * @method static \Illuminate\Database\Query\Builder|KhoHocCu onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|KhoHocCu query()
 * @method static \Illuminate\Database\Eloquent\Builder|KhoHocCu whereCapphat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KhoHocCu whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KhoHocCu whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KhoHocCu whereHinhanhhoccu($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KhoHocCu whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KhoHocCu whereSoluong($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KhoHocCu whereTenhoccu($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KhoHocCu whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|KhoHocCu withTrashed()
 * @method static \Illuminate\Database\Query\Builder|KhoHocCu withoutTrashed()
 */
	class KhoHocCu extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\KhoaHoc
 *
 * @property int $id
 * @property string $tenkhoahoc
 * @property string $dotuoi
 * @property int $sisotoida
 * @property string $mota
 * @property string $noidung
 * @property string $dieukienhoc
 * @property int $hocphi
 * @property int $loai_khoa_hoc_id
 * @property int $level_id
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\BaiGiang[] $dsBaiGiang
 * @property-read int|null $ds_bai_giang_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\ChiTietHocPhi[] $dsChiTietHocPhi
 * @property-read int|null $ds_chi_tiet_hoc_phi_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\HinhAnhKhoaHoc[] $dsHinhAnh
 * @property-read int|null $ds_hinh_anh_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\LopHoc[] $dsLopHoc
 * @property-read int|null $ds_lop_hoc_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\NhanXetKhoaHoc[] $dsNhanXet
 * @property-read int|null $ds_nhan_xet_count
 * @property-read \App\Models\Level $level
 * @property-read \App\Models\LoaiKhoaHoc $loaiKhoaHoc
 * @method static \Illuminate\Database\Eloquent\Builder|KhoaHoc newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|KhoaHoc newQuery()
 * @method static \Illuminate\Database\Query\Builder|KhoaHoc onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|KhoaHoc query()
 * @method static \Illuminate\Database\Eloquent\Builder|KhoaHoc whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KhoaHoc whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KhoaHoc whereDieukienhoc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KhoaHoc whereDotuoi($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KhoaHoc whereHocphi($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KhoaHoc whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KhoaHoc whereLevelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KhoaHoc whereLoaiKhoaHocId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KhoaHoc whereMota($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KhoaHoc whereNoidung($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KhoaHoc whereSisotoida($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KhoaHoc whereTenkhoahoc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KhoaHoc whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|KhoaHoc withTrashed()
 * @method static \Illuminate\Database\Query\Builder|KhoaHoc withoutTrashed()
 */
	class KhoaHoc extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\KhoanThu
 *
 * @property int $id
 * @property string $tenkhoanthu
 * @property int $sotien
 * @property int|null $hoc_phi_id
 * @property int|null $lop_hoc_id
 * @property string $trangthai
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\HocPhi|null $hocPhi
 * @method static \Illuminate\Database\Eloquent\Builder|KhoanThu newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|KhoanThu newQuery()
 * @method static \Illuminate\Database\Query\Builder|KhoanThu onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|KhoanThu query()
 * @method static \Illuminate\Database\Eloquent\Builder|KhoanThu whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KhoanThu whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KhoanThu whereHocPhiId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KhoanThu whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KhoanThu whereLopHocId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KhoanThu whereSotien($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KhoanThu whereTenkhoanthu($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KhoanThu whereTrangthai($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KhoanThu whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|KhoanThu withTrashed()
 * @method static \Illuminate\Database\Query\Builder|KhoanThu withoutTrashed()
 */
	class KhoanThu extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Level
 *
 * @property int $id
 * @property string $tenlevel
 * @property string $mota
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\KhoaHoc[] $dsKhoaHoc
 * @property-read int|null $ds_khoa_hoc_count
 * @method static \Illuminate\Database\Eloquent\Builder|Level newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Level newQuery()
 * @method static \Illuminate\Database\Query\Builder|Level onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Level query()
 * @method static \Illuminate\Database\Eloquent\Builder|Level whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Level whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Level whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Level whereMota($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Level whereTenlevel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Level whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|Level withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Level withoutTrashed()
 */
	class Level extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\LichSuHocPhi
 *
 * @property int $id
 * @property int $sotiendadong
 * @property string $ngaydong
 * @property int $hoc_phi_id
 * @property int $nhan_vien_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\ChiTietHocPhi[] $dsChiTiet
 * @property-read int|null $ds_chi_tiet_count
 * @property-read \App\Models\HocPhi $hocPhi
 * @property-read \App\Models\NhanVien $nhanVien
 * @method static \Illuminate\Database\Eloquent\Builder|LichSuHocPhi newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LichSuHocPhi newQuery()
 * @method static \Illuminate\Database\Query\Builder|LichSuHocPhi onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|LichSuHocPhi query()
 * @method static \Illuminate\Database\Eloquent\Builder|LichSuHocPhi whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LichSuHocPhi whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LichSuHocPhi whereHocPhiId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LichSuHocPhi whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LichSuHocPhi whereNgaydong($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LichSuHocPhi whereNhanVienId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LichSuHocPhi whereSotiendadong($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LichSuHocPhi whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|LichSuHocPhi withTrashed()
 * @method static \Illuminate\Database\Query\Builder|LichSuHocPhi withoutTrashed()
 */
	class LichSuHocPhi extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\LichTraiNghiem
 *
 * @property int $id
 * @property string $thoigian
 * @property string $trangthai
 * @property string $noidung
 * @property string $ketqua
 * @property int $hoc_sinh_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\HocSinh $hocSinh
 * @method static \Illuminate\Database\Eloquent\Builder|LichTraiNghiem newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LichTraiNghiem newQuery()
 * @method static \Illuminate\Database\Query\Builder|LichTraiNghiem onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|LichTraiNghiem query()
 * @method static \Illuminate\Database\Eloquent\Builder|LichTraiNghiem whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LichTraiNghiem whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LichTraiNghiem whereHocSinhId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LichTraiNghiem whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LichTraiNghiem whereKetqua($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LichTraiNghiem whereNoidung($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LichTraiNghiem whereThoigian($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LichTraiNghiem whereTrangthai($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LichTraiNghiem whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|LichTraiNghiem withTrashed()
 * @method static \Illuminate\Database\Query\Builder|LichTraiNghiem withoutTrashed()
 */
	class LichTraiNghiem extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\LoaiGiaoVien
 *
 * @property int $id
 * @property string $tenloaigiaovien
 * @property string $mota
 * @property int $sotienmotgio
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\GiaoVien[] $dsGiaoVien
 * @property-read int|null $ds_giao_vien_count
 * @method static \Illuminate\Database\Eloquent\Builder|LoaiGiaoVien newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LoaiGiaoVien newQuery()
 * @method static \Illuminate\Database\Query\Builder|LoaiGiaoVien onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|LoaiGiaoVien query()
 * @method static \Illuminate\Database\Eloquent\Builder|LoaiGiaoVien whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LoaiGiaoVien whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LoaiGiaoVien whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LoaiGiaoVien whereMota($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LoaiGiaoVien whereSotienmotgio($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LoaiGiaoVien whereTenloaigiaovien($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LoaiGiaoVien whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|LoaiGiaoVien withTrashed()
 * @method static \Illuminate\Database\Query\Builder|LoaiGiaoVien withoutTrashed()
 */
	class LoaiGiaoVien extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\LoaiKhoaHoc
 *
 * @property int $id
 * @property string $tenloaikhoahoc
 * @property string $mota
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\KhoaHoc[] $dsKhoaHoc
 * @property-read int|null $ds_khoa_hoc_count
 * @method static \Illuminate\Database\Eloquent\Builder|LoaiKhoaHoc newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LoaiKhoaHoc newQuery()
 * @method static \Illuminate\Database\Query\Builder|LoaiKhoaHoc onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|LoaiKhoaHoc query()
 * @method static \Illuminate\Database\Eloquent\Builder|LoaiKhoaHoc whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LoaiKhoaHoc whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LoaiKhoaHoc whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LoaiKhoaHoc whereMota($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LoaiKhoaHoc whereTenloaikhoahoc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LoaiKhoaHoc whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|LoaiKhoaHoc withTrashed()
 * @method static \Illuminate\Database\Query\Builder|LoaiKhoaHoc withoutTrashed()
 */
	class LoaiKhoaHoc extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\LopHoc
 *
 * @property int $id
 * @property string $tenlop
 * @property int $siso
 * @property string $trangthai
 * @property string $ngaybatdau
 * @property string|null $ngayketthuc
 * @property int $sobuoi
 * @property int $sobuoidahoc
 * @property string $ghichu
 * @property int $khoa_hoc_id
 * @property int $giao_vien_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\BuoiHoc[] $dsBuoiHoc
 * @property-read int|null $ds_buoi_hoc_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\HocCu[] $dsHocCu
 * @property-read int|null $ds_hoc_cu_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\KhoanThu[] $dsKhoanThu
 * @property-read int|null $ds_khoan_thu_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\PhanLop[] $dsLopHoc
 * @property-read int|null $ds_lop_hoc_count
 * @property-read \App\Models\GiaoVien $giaoVien
 * @property-read \App\Models\KhoaHoc $khoaHoc
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\ThoiGianHoc[] $lichHoc
 * @property-read int|null $lich_hoc_count
 * @method static \Illuminate\Database\Eloquent\Builder|LopHoc newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LopHoc newQuery()
 * @method static \Illuminate\Database\Query\Builder|LopHoc onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|LopHoc query()
 * @method static \Illuminate\Database\Eloquent\Builder|LopHoc whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LopHoc whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LopHoc whereGhichu($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LopHoc whereGiaoVienId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LopHoc whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LopHoc whereKhoaHocId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LopHoc whereNgaybatdau($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LopHoc whereNgayketthuc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LopHoc whereSiso($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LopHoc whereSobuoi($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LopHoc whereSobuoidahoc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LopHoc whereTenlop($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LopHoc whereTrangthai($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LopHoc whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|LopHoc withTrashed()
 * @method static \Illuminate\Database\Query\Builder|LopHoc withoutTrashed()
 */
	class LopHoc extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Luong
 *
 * @property int $id
 * @property string $thang
 * @property int $cong
 * @property int|null $tongphucap
 * @property int|null $tongluong
 * @property int|null $bhxh
 * @property int|null $bhyt
 * @property int|null $tongkhautru
 * @property int $thuclinh
 * @property string $trangthai
 * @property int|null $nhan_vien_id
 * @property int|null $giao_vien_id
 * @property string $doituong
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\GiaoVien|null $giaoVien
 * @property-read \App\Models\NhanVien|null $nhanVien
 * @method static \Illuminate\Database\Eloquent\Builder|Luong newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Luong newQuery()
 * @method static \Illuminate\Database\Query\Builder|Luong onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Luong query()
 * @method static \Illuminate\Database\Eloquent\Builder|Luong whereBhxh($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Luong whereBhyt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Luong whereCong($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Luong whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Luong whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Luong whereDoituong($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Luong whereGiaoVienId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Luong whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Luong whereNhanVienId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Luong whereThang($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Luong whereThuclinh($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Luong whereTongkhautru($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Luong whereTongluong($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Luong whereTongphucap($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Luong whereTrangthai($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Luong whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|Luong withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Luong withoutTrashed()
 */
	class Luong extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Message
 *
 * @property int $id
 * @property int $from
 * @property int $to
 * @property string $message
 * @property int $is_read
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|Message newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Message newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Message query()
 * @method static \Illuminate\Database\Eloquent\Builder|Message whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Message whereFrom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Message whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Message whereIsRead($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Message whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Message whereTo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Message whereUpdatedAt($value)
 */
	class Message extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\NghiPhep
 *
 * @property int $id
 * @property string $lydo
 * @property string $ghichu
 * @property int $hoc_sinh_id
 * @property int $buoi_hoc_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\BuoiHoc $buoiHoc
 * @property-read \App\Models\HocSinh $hocSinh
 * @method static \Illuminate\Database\Eloquent\Builder|NghiPhep newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|NghiPhep newQuery()
 * @method static \Illuminate\Database\Query\Builder|NghiPhep onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|NghiPhep query()
 * @method static \Illuminate\Database\Eloquent\Builder|NghiPhep whereBuoiHocId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NghiPhep whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NghiPhep whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NghiPhep whereGhichu($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NghiPhep whereHocSinhId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NghiPhep whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NghiPhep whereLydo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NghiPhep whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|NghiPhep withTrashed()
 * @method static \Illuminate\Database\Query\Builder|NghiPhep withoutTrashed()
 */
	class NghiPhep extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\NhanVien
 *
 * @property int $id
 * @property string $cmnd
 * @property string $hodem
 * @property string $ten
 * @property string $ngaysinh
 * @property string $gioitinh
 * @property string $sodienthoai
 * @property string $email
 * @property string $diachi
 * @property string $tinhtrang
 * @property int $chuc_vu_id
 * @property int|null $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\ChucVu $chucVu
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\HocPhi[] $dsHocPhi
 * @property-read int|null $ds_hoc_phi_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\KhenThuongKyLuat[] $dsKhenThuongKyLuat
 * @property-read int|null $ds_khen_thuong_ky_luat_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Luong[] $dsLuong
 * @property-read int|null $ds_luong_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\PhieuChi[] $dsPhieuChi
 * @property-read int|null $ds_phieu_chi_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\PhuCap[] $dsPhuCap
 * @property-read int|null $ds_phu_cap_count
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|NhanVien newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|NhanVien newQuery()
 * @method static \Illuminate\Database\Query\Builder|NhanVien onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|NhanVien query()
 * @method static \Illuminate\Database\Eloquent\Builder|NhanVien whereChucVuId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NhanVien whereCmnd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NhanVien whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NhanVien whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NhanVien whereDiachi($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NhanVien whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NhanVien whereGioitinh($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NhanVien whereHodem($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NhanVien whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NhanVien whereNgaysinh($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NhanVien whereSodienthoai($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NhanVien whereTen($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NhanVien whereTinhtrang($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NhanVien whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NhanVien whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|NhanVien withTrashed()
 * @method static \Illuminate\Database\Query\Builder|NhanVien withoutTrashed()
 */
	class NhanVien extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\NhanXet
 *
 * @property int $id
 * @property int $user_id
 * @property int $doituongnhanxet_id
 * @property string $thoigian
 * @property string $nhanxet
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|NhanXet newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|NhanXet newQuery()
 * @method static \Illuminate\Database\Query\Builder|NhanXet onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|NhanXet query()
 * @method static \Illuminate\Database\Eloquent\Builder|NhanXet whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NhanXet whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NhanXet whereDoituongnhanxetId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NhanXet whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NhanXet whereNhanxet($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NhanXet whereThoigian($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NhanXet whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NhanXet whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|NhanXet withTrashed()
 * @method static \Illuminate\Database\Query\Builder|NhanXet withoutTrashed()
 */
	class NhanXet extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\NhanXetGiaoVien
 *
 * @property int $id
 * @property int $user_id
 * @property int $giao_vien_id
 * @property string $thoigian
 * @property string $noidung
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\GiaoVien $giaoVien
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|NhanXetGiaoVien newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|NhanXetGiaoVien newQuery()
 * @method static \Illuminate\Database\Query\Builder|NhanXetGiaoVien onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|NhanXetGiaoVien query()
 * @method static \Illuminate\Database\Eloquent\Builder|NhanXetGiaoVien whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NhanXetGiaoVien whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NhanXetGiaoVien whereGiaoVienId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NhanXetGiaoVien whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NhanXetGiaoVien whereNoidung($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NhanXetGiaoVien whereThoigian($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NhanXetGiaoVien whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NhanXetGiaoVien whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|NhanXetGiaoVien withTrashed()
 * @method static \Illuminate\Database\Query\Builder|NhanXetGiaoVien withoutTrashed()
 */
	class NhanXetGiaoVien extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\NhanXetHocSinh
 *
 * @property int $id
 * @property string|null $khanangtiepthu
 * @property string|null $khanangsangtao
 * @property string|null $apdungkienthuc
 * @property string|null $lambaitapvenha
 * @property string|null $ythuchoctap
 * @property string|null $tinhthanhoctap
 * @property string|null $kynanglamviecnhom
 * @property string|null $kynangthuyettrinh
 * @property int $hoc_sinh_id
 * @property int $buoi_hoc_id
 * @property int $lop_hoc_id
 * @property int $khoa_hoc_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\BuoiHoc $buoiHoc
 * @property-read \App\Models\HocSinh $hocSinh
 * @property-read \App\Models\KhoaHoc $khoaHoc
 * @property-read \App\Models\LopHoc $lopHoc
 * @method static \Illuminate\Database\Eloquent\Builder|NhanXetHocSinh newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|NhanXetHocSinh newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|NhanXetHocSinh query()
 * @method static \Illuminate\Database\Eloquent\Builder|NhanXetHocSinh whereApdungkienthuc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NhanXetHocSinh whereBuoiHocId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NhanXetHocSinh whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NhanXetHocSinh whereHocSinhId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NhanXetHocSinh whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NhanXetHocSinh whereKhanangsangtao($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NhanXetHocSinh whereKhanangtiepthu($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NhanXetHocSinh whereKhoaHocId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NhanXetHocSinh whereKynanglamviecnhom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NhanXetHocSinh whereKynangthuyettrinh($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NhanXetHocSinh whereLambaitapvenha($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NhanXetHocSinh whereLopHocId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NhanXetHocSinh whereTinhthanhoctap($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NhanXetHocSinh whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NhanXetHocSinh whereYthuchoctap($value)
 */
	class NhanXetHocSinh extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\NhanXetKhoaHoc
 *
 * @property int $id
 * @property int $user_id
 * @property int $khoa_hoc_id
 * @property string $thoigian
 * @property string $noidung
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\KhoaHoc $khoaHoc
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|NhanXetKhoaHoc newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|NhanXetKhoaHoc newQuery()
 * @method static \Illuminate\Database\Query\Builder|NhanXetKhoaHoc onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|NhanXetKhoaHoc query()
 * @method static \Illuminate\Database\Eloquent\Builder|NhanXetKhoaHoc whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NhanXetKhoaHoc whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NhanXetKhoaHoc whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NhanXetKhoaHoc whereKhoaHocId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NhanXetKhoaHoc whereNoidung($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NhanXetKhoaHoc whereThoigian($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NhanXetKhoaHoc whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NhanXetKhoaHoc whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|NhanXetKhoaHoc withTrashed()
 * @method static \Illuminate\Database\Query\Builder|NhanXetKhoaHoc withoutTrashed()
 */
	class NhanXetKhoaHoc extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Permission
 *
 * @property int $id
 * @property string $ten
 * @property string $mota
 * @property int $permission_group_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read Permission $permissionGroup
 * @method static \Illuminate\Database\Eloquent\Builder|Permission newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Permission newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Permission query()
 * @method static \Illuminate\Database\Eloquent\Builder|Permission whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Permission whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Permission whereMota($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Permission wherePermissionGroupId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Permission whereTen($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Permission whereUpdatedAt($value)
 */
	class Permission extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\PermissionGroup
 *
 * @property int $id
 * @property int $column
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Permission[] $permissions
 * @property-read int|null $permissions_count
 * @method static \Illuminate\Database\Eloquent\Builder|PermissionGroup newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PermissionGroup newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PermissionGroup query()
 * @method static \Illuminate\Database\Eloquent\Builder|PermissionGroup whereColumn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PermissionGroup whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PermissionGroup whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PermissionGroup whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PermissionGroup whereUpdatedAt($value)
 */
	class PermissionGroup extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\PhanLop
 *
 * @property int $id
 * @property string $ngayvaolop
 * @property int $hoc_sinh_id
 * @property int $lop_hoc_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\HocSinh $hocSinh
 * @property-read \App\Models\LopHoc $lopHoc
 * @method static \Illuminate\Database\Eloquent\Builder|PhanLop newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PhanLop newQuery()
 * @method static \Illuminate\Database\Query\Builder|PhanLop onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|PhanLop query()
 * @method static \Illuminate\Database\Eloquent\Builder|PhanLop whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PhanLop whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PhanLop whereHocSinhId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PhanLop whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PhanLop whereLopHocId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PhanLop whereNgayvaolop($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PhanLop whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|PhanLop withTrashed()
 * @method static \Illuminate\Database\Query\Builder|PhanLop withoutTrashed()
 */
	class PhanLop extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\PhieuChi
 *
 * @property int $id
 * @property string $lydo
 * @property string $ngaytao
 * @property int $nhan_vien_id
 * @property int $sotien
 * @property string $ghichu
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\NhanVien $nhanVien
 * @method static \Illuminate\Database\Eloquent\Builder|PhieuChi newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PhieuChi newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PhieuChi query()
 * @method static \Illuminate\Database\Eloquent\Builder|PhieuChi whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PhieuChi whereGhichu($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PhieuChi whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PhieuChi whereLydo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PhieuChi whereNgaytao($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PhieuChi whereNhanVienId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PhieuChi whereSotien($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PhieuChi whereUpdatedAt($value)
 */
	class PhieuChi extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\PhongHoc
 *
 * @property int $id
 * @property string $tenphong
 * @property string $mota
 * @property string $trangthai
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\BuoiHoc[] $dsBuoiHoc
 * @property-read int|null $ds_buoi_hoc_count
 * @method static \Illuminate\Database\Eloquent\Builder|PhongHoc newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PhongHoc newQuery()
 * @method static \Illuminate\Database\Query\Builder|PhongHoc onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|PhongHoc query()
 * @method static \Illuminate\Database\Eloquent\Builder|PhongHoc whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PhongHoc whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PhongHoc whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PhongHoc whereMota($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PhongHoc whereTenphong($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PhongHoc whereTrangthai($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PhongHoc whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|PhongHoc withTrashed()
 * @method static \Illuminate\Database\Query\Builder|PhongHoc withoutTrashed()
 */
	class PhongHoc extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\PhuCap
 *
 * @property int $id
 * @property string $tenphucap
 * @property int $sotien
 * @property int|null $nhan_vien_id
 * @property int|null $giao_vien_id
 * @property string $doituong
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\NhanVien|null $nhanVien
 * @method static \Illuminate\Database\Eloquent\Builder|PhuCap newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PhuCap newQuery()
 * @method static \Illuminate\Database\Query\Builder|PhuCap onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|PhuCap query()
 * @method static \Illuminate\Database\Eloquent\Builder|PhuCap whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PhuCap whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PhuCap whereDoituong($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PhuCap whereGiaoVienId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PhuCap whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PhuCap whereNhanVienId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PhuCap whereSotien($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PhuCap whereTenphucap($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PhuCap whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|PhuCap withTrashed()
 * @method static \Illuminate\Database\Query\Builder|PhuCap withoutTrashed()
 */
	class PhuCap extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Restore
 *
 * @property int $id
 * @property string $tenfile
 * @property string $ngaytao
 * @property string $duongdan
 * @property string $ketqua
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|Restore newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Restore newQuery()
 * @method static \Illuminate\Database\Query\Builder|Restore onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Restore query()
 * @method static \Illuminate\Database\Eloquent\Builder|Restore whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Restore whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Restore whereDuongdan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Restore whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Restore whereKetqua($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Restore whereNgaytao($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Restore whereTenfile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Restore whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|Restore withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Restore withoutTrashed()
 */
	class Restore extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Role
 *
 * @property int $id
 * @property string $ten
 * @property string $mota
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Permission[] $permissions
 * @property-read int|null $permissions_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\User[] $users
 * @property-read int|null $users_count
 * @method static \Illuminate\Database\Eloquent\Builder|Role newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Role newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Role query()
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereMota($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereTen($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereUpdatedAt($value)
 */
	class Role extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\SanPhamCuoiKhoa
 *
 * @property int $id
 * @property string $mota
 * @property string $noidung
 * @property string|null $fileslide
 * @property int $hoc_sinh_id
 * @property int $lop_hoc_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\HocSinh $hocSinh
 * @property-read \App\Models\LopHoc $lopHoc
 * @method static \Illuminate\Database\Eloquent\Builder|SanPhamCuoiKhoa newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SanPhamCuoiKhoa newQuery()
 * @method static \Illuminate\Database\Query\Builder|SanPhamCuoiKhoa onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|SanPhamCuoiKhoa query()
 * @method static \Illuminate\Database\Eloquent\Builder|SanPhamCuoiKhoa whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SanPhamCuoiKhoa whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SanPhamCuoiKhoa whereFileslide($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SanPhamCuoiKhoa whereHocSinhId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SanPhamCuoiKhoa whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SanPhamCuoiKhoa whereLopHocId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SanPhamCuoiKhoa whereMota($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SanPhamCuoiKhoa whereNoidung($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SanPhamCuoiKhoa whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|SanPhamCuoiKhoa withTrashed()
 * @method static \Illuminate\Database\Query\Builder|SanPhamCuoiKhoa withoutTrashed()
 */
	class SanPhamCuoiKhoa extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ThoiGianHoc
 *
 * @property int $id
 * @property string $thu
 * @property int $ca_hoc_id
 * @property int $lop_hoc_id
 * @property int $phong_hoc_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\CaHoc $caHoc
 * @property-read \App\Models\LopHoc $lopHoc
 * @property-read \App\Models\PhongHoc|null $phongHoc
 * @method static \Illuminate\Database\Eloquent\Builder|ThoiGianHoc newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ThoiGianHoc newQuery()
 * @method static \Illuminate\Database\Query\Builder|ThoiGianHoc onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|ThoiGianHoc query()
 * @method static \Illuminate\Database\Eloquent\Builder|ThoiGianHoc whereCaHocId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ThoiGianHoc whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ThoiGianHoc whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ThoiGianHoc whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ThoiGianHoc whereLopHocId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ThoiGianHoc wherePhongHocId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ThoiGianHoc whereThu($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ThoiGianHoc whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|ThoiGianHoc withTrashed()
 * @method static \Illuminate\Database\Query\Builder|ThoiGianHoc withoutTrashed()
 */
	class ThoiGianHoc extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string|null $password
 * @property string $anhdaidien
 * @property int $role_id
 * @property string $trangthai
 * @property string|null $provider
 * @property string|null $provider_id
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\GiaoVien|null $giaoVien
 * @property-read \App\Models\HocSinh|null $hocSinh
 * @property-read \App\Models\NhanVien|null $nhanVien
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \App\Models\Role $role
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Query\Builder|User onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereAnhdaidien($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereProvider($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereProviderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRoleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTrangthai($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|User withTrashed()
 * @method static \Illuminate\Database\Query\Builder|User withoutTrashed()
 */
	class User extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\administrators
 *
 * @method static \Illuminate\Database\Eloquent\Builder|administrators newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|administrators newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|administrators query()
 */
	class administrators extends \Eloquent {}
}


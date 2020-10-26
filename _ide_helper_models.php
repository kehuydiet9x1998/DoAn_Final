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
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\ThoiGianHoc[] $dsThoiGianHoc
 * @property-read int|null $ds_thoi_gian_hoc_count
 * @method static \Illuminate\Database\Eloquent\Builder|CaHoc newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CaHoc newQuery()
 * @method static \Illuminate\Database\Query\Builder|CaHoc onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|CaHoc query()
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
 * App\Models\CheckIn
 *
 * @property int $id
 * @property string $giocheckin
 * @property string|null $giocheckout
 * @property int $buoi_hoc_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\BuoiHoc $buoiHoc
 * @method static \Illuminate\Database\Eloquent\Builder|CheckIn newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CheckIn newQuery()
 * @method static \Illuminate\Database\Query\Builder|CheckIn onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|CheckIn query()
 * @method static \Illuminate\Database\Eloquent\Builder|CheckIn whereBuoiHocId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CheckIn whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CheckIn whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CheckIn whereGiocheckin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CheckIn whereGiocheckout($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CheckIn whereId($value)
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
 * @property string $tenkhoanthu
 * @property int $sotien
 * @property int $sotiendong
 * @property int $hoc_phi_id
 * @property int $khoa_hoc_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\HocPhi $hocPhi
 * @property-read \App\Models\KhoaHoc $khoaHoc
 * @method static \Illuminate\Database\Eloquent\Builder|ChiTietHocPhi newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ChiTietHocPhi newQuery()
 * @method static \Illuminate\Database\Query\Builder|ChiTietHocPhi onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|ChiTietHocPhi query()
 * @method static \Illuminate\Database\Eloquent\Builder|ChiTietHocPhi whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChiTietHocPhi whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChiTietHocPhi whereHocPhiId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChiTietHocPhi whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChiTietHocPhi whereKhoaHocId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChiTietHocPhi whereSotien($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChiTietHocPhi whereSotiendong($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChiTietHocPhi whereTenkhoanthu($value)
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
 * @property float|null $hesoluong
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
 * @method static \Illuminate\Database\Eloquent\Builder|ChucVu whereHesoluong($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChucVu whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChucVu whereMota($value)
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
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\BuoiHoc[] $dsBuoiHoc
 * @property-read int|null $ds_buoi_hoc_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\LopHoc[] $dsLopHoc
 * @property-read int|null $ds_lop_hoc_count
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
 * @method static \Illuminate\Database\Eloquent\Builder|GiaoVien whereNgaysinh($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GiaoVien whereSodienthoai($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GiaoVien whereTen($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GiaoVien whereTinhtrang($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GiaoVien whereUpdatedAt($value)
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
 * @property int $soluong
 * @property string $trangthai
 * @property int $lop_hoc_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\LopHoc $lopHoc
 * @method static \Illuminate\Database\Eloquent\Builder|HocCu newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|HocCu newQuery()
 * @method static \Illuminate\Database\Query\Builder|HocCu onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|HocCu query()
 * @method static \Illuminate\Database\Eloquent\Builder|HocCu whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HocCu whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HocCu whereHinhanhthietbi($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HocCu whereId($value)
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
 * @property string $lydo
 * @property string $ngaynop
 * @property string $trangthai
 * @property int $sotiendong
 * @property string $ghichu
 * @property int $hoc_sinh_id
 * @property int $nhan_vien_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\ChiTietHocPhi[] $dsHocPhi
 * @property-read int|null $ds_hoc_phi_count
 * @property-read \App\Models\HocSinh $hocSinh
 * @property-read \App\Models\NhanVien $nhanVien
 * @method static \Illuminate\Database\Eloquent\Builder|HocPhi newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|HocPhi newQuery()
 * @method static \Illuminate\Database\Query\Builder|HocPhi onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|HocPhi query()
 * @method static \Illuminate\Database\Eloquent\Builder|HocPhi whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HocPhi whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HocPhi whereGhichu($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HocPhi whereHocSinhId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HocPhi whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HocPhi whereLydo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HocPhi whereNgaynop($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HocPhi whereNhanVienId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HocPhi whereSotiendong($value)
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
 * @property string $hodem
 * @property string $ten
 * @property string $ngaysinh
 * @property string $gioitinh
 * @property string $trangthai
 * @property string $cmnd
 * @property string $hotenchame
 * @property string $email
 * @property string $sodienthoai
 * @property string $diachi
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\DanhSachBaiTap $dsDanhSachBaiTap
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\DiemDanh[] $dsDiemDanh
 * @property-read int|null $ds_diem_danh_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\HocPhi[] $dsHocPhi
 * @property-read int|null $ds_hoc_phi_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\LichTraiNghiem[] $dsLichTraiNghiem
 * @property-read int|null $ds_lich_trai_nghiem_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\PhanLop[] $dsLopHoc
 * @property-read int|null $ds_lop_hoc_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\NghiPhep[] $dsNghiPhep
 * @property-read int|null $ds_nghi_phep_count
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
 * App\Models\LichTraiNghiem
 *
 * @property int $id
 * @property string $thoigian
 * @property string $trangthai
 * @property string $ghichu
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
 * @method static \Illuminate\Database\Eloquent\Builder|LichTraiNghiem whereGhichu($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LichTraiNghiem whereHocSinhId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LichTraiNghiem whereId($value)
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
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\PhanLop[] $dsLopHoc
 * @property-read int|null $ds_lop_hoc_count
 * @property-read \App\Models\GiaoVien $giaoVien
 * @property-read \App\Models\KhoaHoc $khoaHoc
 * @property-read \App\Models\ThoiGianHoc|null $lichHoc
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
 * @property int $luonggoc
 * @property int $phat
 * @property int $thuong
 * @property int $thuclinh
 * @property string $trangthai
 * @property string $ghichu
 * @property int $nhan_vien_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\NhanVien $nhanVien
 * @method static \Illuminate\Database\Eloquent\Builder|Luong newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Luong newQuery()
 * @method static \Illuminate\Database\Query\Builder|Luong onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Luong query()
 * @method static \Illuminate\Database\Eloquent\Builder|Luong whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Luong whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Luong whereGhichu($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Luong whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Luong whereLuonggoc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Luong whereNhanVienId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Luong wherePhat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Luong whereThang($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Luong whereThuclinh($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Luong whereThuong($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Luong whereTrangthai($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Luong whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|Luong withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Luong withoutTrashed()
 */
	class Luong extends \Eloquent {}
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
 * @property-read \App\Models\HopDong|null $hopDong
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
 * App\Models\SanPhamCuoiKhoa
 *
 * @method static \Illuminate\Database\Eloquent\Builder|SanPhamCuoiKhoa newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SanPhamCuoiKhoa newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SanPhamCuoiKhoa query()
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
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\CaHoc $caHoc
 * @property-read \App\Models\LopHoc $lopHoc
 * @method static \Illuminate\Database\Eloquent\Builder|ThoiGianHoc newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ThoiGianHoc newQuery()
 * @method static \Illuminate\Database\Query\Builder|ThoiGianHoc onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|ThoiGianHoc query()
 * @method static \Illuminate\Database\Eloquent\Builder|ThoiGianHoc whereCaHocId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ThoiGianHoc whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ThoiGianHoc whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ThoiGianHoc whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ThoiGianHoc whereLopHocId($value)
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
 * @property string $password
 * @property string $anhdaidien
 * @property string $vaitro
 * @property string $trangthai
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
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
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTrangthai($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereVaitro($value)
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

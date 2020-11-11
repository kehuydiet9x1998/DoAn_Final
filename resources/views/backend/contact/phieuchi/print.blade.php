<?php
function VndText($amount)
{
if($amount <=0) { return $textnumber="Tiền phải là số nguyên dương lớn hơn số 0" ; } $Text=array("không", "một" , "hai" , "ba" , "bốn" , "năm" , "sáu" , "bảy" , "tám" , "chín" ); $TextLuychia=array("","nghìn", "triệu" , "tỷ" , "ngàn tỷ" , "triệu tỷ" , "tỷ tỷ" ); $textnumber="" ; $length=strlen($amount); for ($i=0; $i < $length; $i++) $unread[$i]=0; for ($i=0; $i < $length; $i++) { $so=substr($amount, $length - $i -1 , 1); if ( ($so==0) && ($i % 3==0) && ($unread[$i]==0)){ for ($j=$i+1 ; $j < $length ; $j ++) { $so1=substr($amount,$length - $j -1, 1); if ($so1 !=0) break; } if (intval(($j - $i )/3)> 0){
  for ($k = $i ; $k <intval(($j-$i) /3)*3 + $i; $k++) $unread[$k]=1; } } } for ($i=0; $i < $length; $i++) { $so=substr($amount,$length - $i -1, 1); if ($unread[$i]==1) continue; if ( ($i% 3==0) && ($i> 0))
    $textnumber = $TextLuychia[$i/3] ." ". $textnumber;

    if ($i % 3 == 2 )
    $textnumber = 'trăm ' . $textnumber;

    if ($i % 3 == 1)
    $textnumber = 'mươi ' . $textnumber;


    $textnumber = $Text[$so] ." ". $textnumber;
    }

    //Phai de cac ham replace theo dung chi tu nhu the nay
    $textnumber = str_replace("không mươi", "lẻ", $textnumber);
    $textnumber = str_replace("lẻ không", "", $textnumber);
    $textnumber = str_replace("mươi không", "mươi", $textnumber);
    $textnumber = str_replace("một mươi", "mười", $textnumber);
    $textnumber = str_replace("mươi năm", "mươi lăm", $textnumber);
    $textnumber = str_replace("mươi một", "mươi mốt", $textnumber);
    $textnumber = str_replace("mười năm", "mười lăm", $textnumber);

    return ucfirst($textnumber." đồng chẵn");
    }

  ?>

<style>
  @media print {
    @page {
      margin: 0;
    }

    body {
      margin: 1.6cm;
    }
  }

</style>

<td valign="top" style="page-break-before: always">
  <table class="MsoTableGrid" style="width: 100%; border-collapse: collapse;" width="100%" cellspacing="0" cellpadding="0" border="0">
    <tbody>
      <tr>
        <td style="padding: 0in 5.4pt; width: 369.7pt;" width="493" valign="top">
          <p class="MsoNormal"><strong><span style="font-size: 10pt; font-family: Verdana;">Đơn vi: Học viện sáng tạo TEKY</span></strong></p>
          <p class="MsoNormal"><strong><span style="font-size: 10pt; font-family: Verdana;">Bộ phận: CSKH</span></strong></p>
        </td>
        <td style="padding: 0in 5.4pt; width: 369.7pt;" width="493" valign="top">
          <p class="MsoNormal" style="text-align: center;" align="center"><strong><span style="font-size: 10pt; font-family: Verdana;">Mẫu số: 01 - TT</span></strong></p>
          <p class="MsoNormal" style="text-align: center;" align="center"><span style="font-size: 10pt; font-family: Verdana;">(Ban hành theo QĐ số: 48/2006/QĐ- BTC</span></p>
          <p class="MsoNormal" style="text-align: center;" align="center"><span style="font-size: 10pt; font-family: Verdana;">Ngày 14/9/2006 của Bộ trưởng BTC)</span></p>
        </td>
      </tr>
    </tbody>
  </table>
  <p class="MsoNormal"><span style="font-size: 10pt; font-family: Verdana;"> </span></p>
  <table class="MsoTableGrid" style="width: 100%; border-collapse: collapse;" width="100%" cellspacing="0" cellpadding="0" border="0">
    <tbody>
      <tr>
        <td style="padding: 0in 5.4pt; width: 2.05in;" width="197" valign="top">
          <p class="MsoNormal" style="text-align: center;" align="center">&nbsp;</p>
        </td>
        <td style="padding: 0in 5.4pt; width: 2.05in;" width="197" valign="top">
          <p class="MsoNormal" style="text-align: center;" align="center"><strong><span style="font-size: 10pt; font-family: Verdana;">PHIẾU CHI</span></strong><em> </em></p>
          <p class="MsoNormal" style="text-align: center;" align="center"><em><span style="font-size: 10pt; font-family: Verdana;">
                Ngày {{ date('d', strtotime($phieuchi->ngaytao)) }}
                tháng {{ date('m', strtotime($phieuchi->ngaytao)) }}
                năm {{ date('Y', strtotime($phieuchi->ngaytao)) }}</span></span></em><strong> </strong></p>

        </td>
        <td style="padding: 0in 5.4pt; width: 2.05in;" width="197" valign="top">
          {{-- <p class="MsoNormal" style="text-align: center;" align="center"><em><span style="font-size: 10pt; font-family: Verdana;"> </span></em></p>
          <p class="MsoNormal"><span style="font-size: 10pt; font-family: Verdana;">Quyển số: ...........</span></p>
          <p class="MsoNormal"><span style="font-size: 10pt; font-family: Verdana;">Số: .........................</span></p>
          <p class="MsoNormal"><span style="font-size: 10pt; font-family: Verdana;">Nợ: .........................</span></p>
          <p class="MsoNormal"><span style="font-size: 10pt; font-family: Verdana;">Có: .........................</span></p> --}}
        </td>
      </tr>
    </tbody>
  </table>
  <p class="MsoNormal" style="text-indent: 0.5in;"><span style="font-size: 10pt; font-family: Verdana;">Họ và tên người chi:
      {{ $phieuchi->nhanvien->hodem .' '. $phieuchi->nhanvien->ten}}
    </span></p>

  <p class="MsoNormal" style="text-indent: 0.5in;"><span style="font-size: 10pt; font-family: Verdana;">Lý do nộp: {{ $phieuchi->lydo }}
    </span></p>

  <p class="MsoNormal" style="margin-left: 0.5in;"><span style="font-size: 10pt; font-family: Verdana;">Số tiền: {{ number_format($phieuchi->sotien). ' VND' }}
      (Viết bằng chữ): <i>{{ VndText($phieuchi->sotien) }}</i></span></p>


  <p class="MsoNormal" style="text-align: right;" align="right"><em><span style="font-size: 10pt; font-family: Verdana;"> Ngày {{ date('d', strtotime($phieuchi->ngaytao)) }}
        tháng {{ date('m', strtotime($phieuchi->ngaytao)) }}
        năm {{ date('Y', strtotime($phieuchi->ngaytao)) }}</span></em></p>

  <div>
    <table class="MsoTableGrid" style="width: 100%; border-collapse: collapse;" width="100%" cellspacing="0" cellpadding="0" border="0">
      <tbody>
        <tr>
          <td style="padding: 0in 5.4pt; width: 147.15pt;" width="196">
            <p class="MsoNormal" style="text-align: center;" align="center"><strong><span style="font-size: 10pt; font-family: Verdana;">Giám đốc</span></strong></p>
            <p class="MsoNormal" style="text-align: center;" align="center"><span style="font-size: 10pt; font-family: Verdana;">(Ký, họ tên, đóng dấu)</span></p>
          </td>
          <td style="padding: 0in 5.4pt; width: 104.7pt;" width="140">
            <p class="MsoNormal" style="text-align: center;" align="center"><strong><span style="font-size: 10pt; font-family: Verdana;">Kế toán trưởng</span></strong></p>
            <p class="MsoNormal" style="text-align: center;" align="center"><span style="font-size: 10pt; font-family: Verdana;">(Ký, họ tên)</span></p>
          </td>
          <td style="padding: 0in 5.4pt; width: 102.4pt;" width="137">
            <p class="MsoNormal" style="text-align: center;" align="center"><strong><span style="font-size: 10pt; font-family: Verdana;">Người nộp tiền</span></strong></p>
            <p class="MsoNormal" style="text-align: center;" align="center"><span style="font-size: 10pt; font-family: Verdana;">(Ký, họ tên)</span></p>
          </td>
          <td style="padding: 0in 5.4pt; width: 114.45pt;" width="153">
            <p class="MsoNormal" style="text-align: center;" align="center"><strong><span style="font-size: 10pt; font-family: Verdana;">Người lập phiếu</span></strong></p>
            <p class="MsoNormal" style="text-align: center;" align="center"><span style="font-size: 10pt; font-family: Verdana;">(Ký, họ tên)</span></p>
          </td>
          <td style="padding: 0in 5.4pt; width: 87.2pt;" width="116">
            <p class="MsoNormal" style="text-align: center;" align="center"><strong><span style="font-size: 10pt; font-family: Verdana;">Thủ quỹ</span></strong></p>
            <p class="MsoNormal" style="text-align: center;" align="center"><span style="font-size: 10pt; font-family: Verdana;">(Ký, họ tên)</span></p>
          </td>
        </tr>
      </tbody>
    </table>
  </div>



</td>

{{-- /* -------------------------------------------------------------------------- */
/*                                   Page 2                                   */
/* -------------------------------------------------------------------------- */ --}}

<p style="page-break-before: always; padding-top:40px">
  <td valign="top" style="page-break-before: always">
    <table class="MsoTableGrid" style="width: 100%; border-collapse: collapse;" width="100%" cellspacing="0" cellpadding="0" border="0">
      <tbody>
        <tr>
          <td style="padding: 0in 5.4pt; width: 369.7pt;" width="493" valign="top">
            <p class="MsoNormal"><strong><span style="font-size: 10pt; font-family: Verdana;">Đơn vi: Học viện sáng tạo TEKY</span></strong></p>
            <p class="MsoNormal"><strong><span style="font-size: 10pt; font-family: Verdana;">Bộ phận: CSKH</span></strong></p>
          </td>
          <td style="padding: 0in 5.4pt; width: 369.7pt;" width="493" valign="top">
            <p class="MsoNormal" style="text-align: center;" align="center"><strong><span style="font-size: 10pt; font-family: Verdana;">Mẫu số: 01 - TT</span></strong></p>
            <p class="MsoNormal" style="text-align: center;" align="center"><span style="font-size: 10pt; font-family: Verdana;">(Ban hành theo QĐ số: 48/2006/QĐ- BTC</span></p>
            <p class="MsoNormal" style="text-align: center;" align="center"><span style="font-size: 10pt; font-family: Verdana;">Ngày 14/9/2006 của Bộ trưởng BTC)</span></p>
          </td>
        </tr>
      </tbody>
    </table>
    <p class="MsoNormal"><span style="font-size: 10pt; font-family: Verdana;"> </span></p>
    <table class="MsoTableGrid" style="width: 100%; border-collapse: collapse;" width="100%" cellspacing="0" cellpadding="0" border="0">
      <tbody>
        <tr>
          <td style="padding: 0in 5.4pt; width: 2.05in;" width="197" valign="top">
            <p class="MsoNormal" style="text-align: center;" align="center">&nbsp;</p>
          </td>
          <td style="padding: 0in 5.4pt; width: 2.05in;" width="197" valign="top">
            <p class="MsoNormal" style="text-align: center;" align="center"><strong><span style="font-size: 10pt; font-family: Verdana;">PHIẾU CHI</span></strong><em> </em></p>
            <p class="MsoNormal" style="text-align: center;" align="center"><em><span style="font-size: 10pt; font-family: Verdana;">
                  Ngày {{ date('d', strtotime($phieuchi->ngaytao)) }}
                  tháng {{ date('m', strtotime($phieuchi->ngaytao)) }}
                  năm {{ date('Y', strtotime($phieuchi->ngaytao)) }}</span></span></em><strong> </strong></p>

          </td>
          <td style="padding: 0in 5.4pt; width: 2.05in;" width="197" valign="top">
            {{-- <p class="MsoNormal" style="text-align: center;" align="center"><em><span style="font-size: 10pt; font-family: Verdana;"> </span></em></p>
          <p class="MsoNormal"><span style="font-size: 10pt; font-family: Verdana;">Quyển số: ...........</span></p>
          <p class="MsoNormal"><span style="font-size: 10pt; font-family: Verdana;">Số: .........................</span></p>
          <p class="MsoNormal"><span style="font-size: 10pt; font-family: Verdana;">Nợ: .........................</span></p>
          <p class="MsoNormal"><span style="font-size: 10pt; font-family: Verdana;">Có: .........................</span></p> --}}
          </td>
        </tr>
      </tbody>
    </table>
    <p class="MsoNormal" style="text-indent: 0.5in;"><span style="font-size: 10pt; font-family: Verdana;">Họ và tên người chi:
        {{ $phieuchi->nhanvien->hodem .' '. $phieuchi->nhanvien->ten}}
      </span></p>

    <p class="MsoNormal" style="text-indent: 0.5in;"><span style="font-size: 10pt; font-family: Verdana;">Lý do nộp: {{ $phieuchi->lydo }}
      </span></p>

    <p class="MsoNormal" style="margin-left: 0.5in;"><span style="font-size: 10pt; font-family: Verdana;">Số tiền: {{ number_format($phieuchi->sotien). ' VND' }}
        (Viết bằng chữ): <i>{{ VndText($phieuchi->sotien) }}</i></span></p>


    <p class="MsoNormal" style="text-align: right;" align="right"><em><span style="font-size: 10pt; font-family: Verdana;"> Ngày {{ date('d', strtotime($phieuchi->ngaytao)) }}
          tháng {{ date('m', strtotime($phieuchi->ngaytao)) }}
          năm {{ date('Y', strtotime($phieuchi->ngaytao)) }}</span></em></p>

    <div>
      <table class="MsoTableGrid" style="width: 100%; border-collapse: collapse;" width="100%" cellspacing="0" cellpadding="0" border="0">
        <tbody>
          <tr>
            <td style="padding: 0in 5.4pt; width: 147.15pt;" width="196">
              <p class="MsoNormal" style="text-align: center;" align="center"><strong><span style="font-size: 10pt; font-family: Verdana;">Giám đốc</span></strong></p>
              <p class="MsoNormal" style="text-align: center;" align="center"><span style="font-size: 10pt; font-family: Verdana;">(Ký, họ tên, đóng dấu)</span></p>
            </td>
            <td style="padding: 0in 5.4pt; width: 104.7pt;" width="140">
              <p class="MsoNormal" style="text-align: center;" align="center"><strong><span style="font-size: 10pt; font-family: Verdana;">Kế toán trưởng</span></strong></p>
              <p class="MsoNormal" style="text-align: center;" align="center"><span style="font-size: 10pt; font-family: Verdana;">(Ký, họ tên)</span></p>
            </td>
            <td style="padding: 0in 5.4pt; width: 102.4pt;" width="137">
              <p class="MsoNormal" style="text-align: center;" align="center"><strong><span style="font-size: 10pt; font-family: Verdana;">Người nộp tiền</span></strong></p>
              <p class="MsoNormal" style="text-align: center;" align="center"><span style="font-size: 10pt; font-family: Verdana;">(Ký, họ tên)</span></p>
            </td>
            <td style="padding: 0in 5.4pt; width: 114.45pt;" width="153">
              <p class="MsoNormal" style="text-align: center;" align="center"><strong><span style="font-size: 10pt; font-family: Verdana;">Người lập phiếu</span></strong></p>
              <p class="MsoNormal" style="text-align: center;" align="center"><span style="font-size: 10pt; font-family: Verdana;">(Ký, họ tên)</span></p>
            </td>
            <td style="padding: 0in 5.4pt; width: 87.2pt;" width="116">
              <p class="MsoNormal" style="text-align: center;" align="center"><strong><span style="font-size: 10pt; font-family: Verdana;">Thủ quỹ</span></strong></p>
              <p class="MsoNormal" style="text-align: center;" align="center"><span style="font-size: 10pt; font-family: Verdana;">(Ký, họ tên)</span></p>
            </td>
          </tr>
        </tbody>
      </table>
    </div>



  </td>


</p>
<script>
  document.addEventListener("DOMContentLoaded", function(event) {
    window.print();
  });

  window.onafterprint = function() {
    window.history.back();
  }

</script>

<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="Generator" content="Microsoft Word 15 (filtered)" />
  <title>Phiếu lương giáo viên</title>
  <style>
    @media print {
      @page {
        margin: 0;
      }

      body {
        margin: 1.6cm;
      }
    }

    @font-face {
      font-family: SimSun;
      panose-1: 2 1 6 0 3 1 1 1 1 1;
    }

    @font-face {
      font-family: "Cambria Math";
      panose-1: 2 4 5 3 5 4 6 3 2 4;
    }

    @font-face {
      font-family: Calibri;
      panose-1: 2 15 5 2 2 2 4 3 2 4;
    }

    @font-face {
      font-family: Corbel;
      panose-1: 2 11 5 3 2 2 4 2 2 4;
    }

    @font-face {
      font-family: "Lexend Deca";
    }

    @font-face {
      font-family: "\@SimSun";
      panose-1: 2 1 6 0 3 1 1 1 1 1;
    }

    /* Style Definitions */
    p.MsoNormal,
    li.MsoNormal,
    div.MsoNormal {
      margin-top: 0cm;
      margin-right: 0cm;
      margin-bottom: 8pt;
      margin-left: 0cm;
      line-height: 107%;
      font-size: 11pt;
      font-family: "Times New Roman", serif;
    }

    h3 {
      margin-right: 0cm;
      margin-left: 0cm;
      line-height: normal;
      font-size: 13.5pt;
      font-family: SimSun;
      font-weight: bold;
    }

    h4 {
      margin-right: 0cm;
      margin-left: 0cm;
      line-height: normal;
      font-size: 12pt;
      font-family: SimSun;
      font-weight: bold;
    }

    p.MsoCommentText,
    li.MsoCommentText,
    div.MsoCommentText {
      margin-top: 0cm;
      margin-right: 0cm;
      margin-bottom: 10pt;
      margin-left: 0cm;
      line-height: 115%;
      font-size: 10pt;
      font-family: "Times New Roman", serif;
    }

    p.MsoHeader,
    li.MsoHeader,
    div.MsoHeader {
      mso-style-link: "Header Char";
      margin: 0cm;
      margin-bottom: 0.0001pt;
      line-height: normal;
      font-size: 11pt;
      font-family: "Times New Roman", serif;
    }

    p.MsoFooter,
    li.MsoFooter,
    div.MsoFooter {
      mso-style-link: "Footer Char";
      margin: 0cm;
      margin-bottom: 0.0001pt;
      line-height: normal;
      font-size: 11pt;
      font-family: "Times New Roman", serif;
    }

    p.MsoBodyText,
    li.MsoBodyText,
    div.MsoBodyText {
      margin-top: 0cm;
      margin-right: 0cm;
      margin-bottom: 8pt;
      margin-left: 0cm;
      line-height: 115%;
      font-size: 11pt;
      font-family: "Calibri", sans-serif;
    }

    p.MsoBodyTextIndent,
    li.MsoBodyTextIndent,
    div.MsoBodyTextIndent {
      margin-top: 0cm;
      margin-right: 0cm;
      margin-bottom: 0cm;
      margin-left: 18pt;
      margin-bottom: 0.0001pt;
      line-height: 107%;
      font-size: 11pt;
      font-family: "Times New Roman", serif;
    }

    a:link,
    span.MsoHyperlink {
      color: #0563c1;
      text-decoration: underline;
    }

    a:visited,
    span.MsoHyperlinkFollowed {
      color: #954f72;
      text-decoration: underline;
    }

    p {
      margin-right: 0cm;
      margin-left: 0cm;
      line-height: 107%;
      font-size: 12pt;
      font-family: "Times New Roman", serif;
    }

    span.FooterChar {
      mso-style-name: "Footer Char";
      mso-style-link: Footer;
    }

    span.HeaderChar {
      mso-style-name: "Header Char";
      mso-style-link: Header;
    }

    p.GiuaChar,
    li.GiuaChar,
    div.GiuaChar {
      mso-style-name: "Giua Char";
      margin: 0cm;
      margin-bottom: 0.0001pt;
      text-align: center;
      line-height: 150%;
      font-size: 10pt;
      font-family: "Arial", sans-serif;
      color: black;
      letter-spacing: 1.2pt;
      font-weight: bold;
    }

    /* Page Definitions */
    @page WordSection1 {
      size: 21cm 841.95pt;
      margin: 39pt 72pt 72pt 72pt;
    }

    div.WordSection1 {
      page: WordSection1;
    }

  </style>
</head>

<body lang="EN-US" link="#0563C1" vlink="#954F72">
  <div class="WordSection1">
    <h3 style="line-height:150%">
      <span style='font-size:12.0pt;line-height:150%;
font-family:"Times New Roman",serif'>&nbsp;</span>
    </h3>

    <table class="MsoNormalTable" border="0" cellpadding="0" width="100%" style="width:100.0%;margin-left:-2.25pt">
      <tr>
        <td style="padding:.75pt .75pt .75pt .75pt">
          <p class="MsoNormal" align="center" style="text-align:center;line-height:150%">
            <strong><span style="font-size:12.0pt;line-height:150%">HỌC VIỆN SÁNG TẠO VÀ CÔNG NGHỆ TEKY
              </span></strong>
          </p>
        </td>
        <td style="padding:.75pt .75pt .75pt .75pt">
          <p align="center" style="text-align:center;line-height:150%">
            <strong>PHIẾU LƯƠNG GIÁO VIÊN</strong>
          </p>
          <p align="center" style="text-align:center;line-height:150%">
            <strong>Tháng {{ now()->month }} năm {{ now()->year }}</strong>
          </p>
        </td>
      </tr>
    </table>

    <p align="right" style="text-align:right;line-height:150%">
      Đơn vị tính: VNĐ
    </p>

    @php $giaovien = $luong->giaovien @endphp
    <table class="MsoTable15Plain2" border="1" cellspacing="0" cellpadding="0" width="100%" style="width:100.0%;margin-left:-2.75pt;border-collapse:collapse;border:none">
      <tr>
        <td colspan="2" valign="top" style="border:solid #7F7F7F 1.0pt;padding:0cm 5.4pt 0cm 5.4pt">
          <p class="MsoNormal" style="line-height:150%">
            <span style="font-size:12.0pt;
  line-height:150%">Họ tên</span>
          </p>
        </td>
        <td valign="top" style="border:solid #7F7F7F 1.0pt;border-left:none;padding:
  0cm 5.4pt 0cm 5.4pt">
          <p class="MsoNormal" style="line-height:150%">
            <span style="font-size:12.0pt;
  line-height:150%">{{ $giaovien->hodem. ' '. $giaovien->ten }}</span>
          </p>
        </td>
      </tr>
      <tr>
        <td colspan="2" valign="top" style="border-top:none;border-left:solid #7F7F7F 1.0pt;
  border-bottom:none;border-right:solid #7F7F7F 1.0pt;padding:0cm 5.4pt 0cm 5.4pt">
          <p class="MsoNormal" style="line-height:150%">
            <span style="font-size:12.0pt;
  line-height:150%">Bậc giáo viên</span>
          </p>
        </td>
        <td valign="top" style="border:none;border-right:solid #7F7F7F 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt">
          <p class="MsoNormal" style="line-height:150%">
            <span style="font-size:12.0pt;
  line-height:150%">{{ $giaovien->loaigiaovien->tenloaigiaovien }}</span>
          </p>
        </td>
      </tr>
      <tr>
        <td colspan="2" valign="top" style="border:solid #7F7F7F 1.0pt;padding:0cm 5.4pt 0cm 5.4pt">
          <p class="MsoNormal" style="line-height:150%">
            <span style="font-size:12.0pt;
  line-height:150%">Số ngày công</span>
          </p>
        </td>
        <td valign="top" style="border:solid #7F7F7F 1.0pt;border-left:none;padding:
  0cm 5.4pt 0cm 5.4pt">
          <p class="MsoNormal" style="line-height:150%">
            <span style="font-size:12.0pt;
  line-height:150%">{{ $luong->cong }}</span>
          </p>
        </td>
      </tr>

      <tr>
        <td rowspan="{{ 3+$giaovien->dsphucap->count() }}" valign="top" style="border:solid #7F7F7F 1.0pt;padding:0cm 5.4pt 0cm 5.4pt">
          <p class="MsoNormal" align="center" style="text-align:center;line-height:150%">
            <strong><span style="font-size:12.0pt;line-height:150%">Tổng tiền lương</span></strong>
          </p>
        </td>
        <td valign="top" style="border:solid #7F7F7F 1.0pt;border-left:none;padding:
  0cm 5.4pt 0cm 5.4pt">
          <p class="MsoNormal" style="line-height:150%">
            <span style="font-size:12.0pt;
  line-height:150%">Lương một giờ</span>
          </p>
        </td>
        <td valign="top" style="border:solid #7F7F7F 1.0pt;border-left:none;padding:
  0cm 5.4pt 0cm 5.4pt">
          <p class="MsoNormal" style="line-height:150%">
            <span style="font-size:12.0pt;
  line-height:150%">{{ $giaovien->loaigiaovien->sotienmotgio }}</span>
          </p>
        </td>
      </tr>

      @foreach($giaovien->dsphucap as $phucap)
      <tr>
        <td valign="top" style="border:solid #7F7F7F 1.0pt;border-left:none;padding:
  0cm 5.4pt 0cm 5.4pt">
          <p class="MsoNormal" style="line-height:150%">
            <span style="font-size:12.0pt;
  line-height:150%">Phụ cấp {{ mb_strtolower($phucap->tenphucap) }}</span>

          </p>
        </td>
        <td valign="top" style="border:solid #7F7F7F 1.0pt;border-left:none;padding:
  0cm 5.4pt 0cm 5.4pt">
          <p class="MsoNormal" style="line-height:150%">
            <span style="font-size:12.0pt;
  line-height:150%">{{ number_format($phucap->sotien) }}</span>
          </p>
        </td>
      </tr>
      @endforeach




      <tr>
        <td valign="top" style="border:solid #7F7F7F 1.0pt;border-left:none;padding:
  0cm 5.4pt 0cm 5.4pt">
          <p class="MsoNormal" style="line-height:150%">
            <span style="font-size:12.0pt;
  line-height:150%">Tổng phụ cấp</span>
          </p>
        </td>
        <td valign="top" style="border:solid #7F7F7F 1.0pt;border-left:none;padding:
  0cm 5.4pt 0cm 5.4pt">
          <p class="MsoNormal" style="line-height:150%">
            <span style="font-size:12.0pt;
  line-height:150%">{{ number_format($luong->tongphucap) }}</span>
          </p>
        </td>
      </tr>



      <tr>
        <td valign="top" style="border:solid #7F7F7F 1.0pt;border-left:none;padding:
  0cm 5.4pt 0cm 5.4pt">
          <p class="MsoNormal" style="line-height:150%">
            <strong><span style="font-size:
  12.0pt;line-height:150%">Tổng thu nhập</span></strong>
          </p>
        </td>
        <td valign="top" style="border:solid #7F7F7F 1.0pt;border-left:none;padding:
  0cm 5.4pt 0cm 5.4pt">
          <p class="MsoNormal" style="line-height:150%">
            <span style="font-size:12.0pt;
  line-height:150%">{{number_format( $luong->tongluong) }}</span>
          </p>
        </td>
      </tr>
      @php
      $bhxh = App\Models\CauHinhLuong::layGiaTri('bhxh');
      $bhyt = App\Models\CauHinhLuong::layGiaTri('bhyt');
      @endphp

      <tr>
        <td rowspan="3" valign="top" style="border:solid #7F7F7F 1.0pt;border-bottom:
  none;padding:0cm 5.4pt 0cm 5.4pt">
          <p class="MsoNormal" style="line-height:150%">
            <span style="font-size:12.0pt;
  line-height:150%">Các khoản phải khấu trừ vào lương</span>
          </p>
        </td>
        <td valign="top" style="border:solid #7F7F7F 1.0pt;border-left:none;padding:
  0cm 5.4pt 0cm 5.4pt">
          <p class="MsoNormal" style="line-height:150%">
            <span style="font-size:12.0pt;
  line-height:150%">BHXH ({{ $bhxh }}%)</span>
          </p>
        </td>
        <td valign="top" style="border:solid #7F7F7F 1.0pt;border-left:none;padding:
  0cm 5.4pt 0cm 5.4pt">
          <p class="MsoNormal" style="line-height:150%">
            <span style="font-size:12.0pt;
  line-height:150%">{{ number_format($luong->bhxh) }}</span>
          </p>
        </td>
      </tr>
      <tr>
        <td valign="top" style="border:none;border-right:solid #7F7F7F 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt">
          <p class="MsoNormal" style="line-height:150%">
            <span style="font-size:12.0pt;
  line-height:150%">BHYT ({{ $bhyt }}%)</span>
          </p>
        </td>
        <td valign="top" style="border:none;border-right:solid #7F7F7F 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt">
          <p class="MsoNormal" style="line-height:150%">
            <span style="font-size:12.0pt;
  line-height:150%">{{ number_format($luong->bhyt) }}</span>
          </p>
        </td>
      </tr>


      <tr>
        <td valign="top" style="border:solid #7F7F7F 1.0pt;border-left:none;padding:
  0cm 5.4pt 0cm 5.4pt">
          <p class="MsoNormal" style="line-height:150%">
            <strong><span style="font-size:
  12.0pt;line-height:150%">Tổng khấu trừ</span></strong>
          </p>
        </td>
        <td valign="top" style="border:solid #7F7F7F 1.0pt;border-left:none;padding:
  0cm 5.4pt 0cm 5.4pt">
          <p class="MsoNormal" style="line-height:150%">
            <span style="font-size:12.0pt;
  line-height:150%">{{number_format( $luong->tongkhautru) }}</span>
          </p>
        </td>
      </tr>

      <tr>
        <td colspan="2" valign="top" style="border:solid #7F7F7F 1.0pt;padding:0cm 5.4pt 0cm 5.4pt">
          <p class="MsoNormal" align="center" style="text-align:center;line-height:150%">
            <strong><span style="font-size:12.0pt;line-height:150%">Thực lĩnh</span></strong>
          </p>
        </td>
        <td valign="top" style="border:solid #7F7F7F 1.0pt;border-left:none;padding:
  0cm 5.4pt 0cm 5.4pt">
          <p class="MsoNormal" style="line-height:150%">
            <span style="font-size:12.0pt;
  line-height:150%"><b>{{ number_format($luong->thuclinh) }}</b></span>
          </p>
        </td>
      </tr>

    </table>

    <p class="MsoNormal" style="text-align: right;" align="right"><em><span style="font-size: 10pt; font-family: Verdana;"></span></em></p>

    <div>
      <table class="MsoTableGrid" style="width: 100%; border-collapse: collapse;" width="100%" cellspacing="0" cellpadding="0" border="0">
        <tbody>
          <tr>
            <td style="padding: 0in 5.4pt; width: 147.15pt;" width="196">
              <p class="MsoNormal" style="text-align: center;" align="center"><strong><span style="font-size: 10pt; font-family: Verdana;">Người lập phiếu</span></strong></p>
              <p class="MsoNormal" style="text-align: center;" align="center"><span style="font-size: 10pt; font-family: Verdana;">(Ký, họ tên, đóng dấu)</span></p>
            </td>
            <td style="padding: 0in 5.4pt; width: 104.7pt;" width="140">
              <p class="MsoNormal" style="text-align: center;" align="center"><strong><span style="font-size: 10pt; font-family: Verdana;">Nhân viên</span></strong></p>
              <p class="MsoNormal" style="text-align: center;" align="center"><span style="font-size: 10pt; font-family: Verdana;">(Ký, họ tên)</span></p>
            </td>

          </tr>
        </tbody>
      </table>
    </div>


    <p class="MsoNormal" style="line-height:150%">
      <span style="font-size:12.0pt;
line-height:150%">&nbsp;</span>
    </p>
  </div>
  <script>
    document.addEventListener("DOMContentLoaded", function(event) {
      window.print();
    });
    window.onafterprint = function() {
      alert('close');
      window.history.back();
    }

  </script>

</body>

</html>

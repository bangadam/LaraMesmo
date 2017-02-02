<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>Laporan Data Kegiatan</title>
        <body>
            <style type="text/css">
                .tg  {border-collapse:collapse;border-spacing:0;border-color:#ccc;width: 100%; }
                .tg td{font-family:Arial;font-size:12px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#ccc;color:#333;background-color:#fff;}
                .tg th{font-family:Arial;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#ccc;color:#333;background-color:#f0f0f0;}
                .tg .tg-3wr7{font-weight:bold;font-size:12px;font-family:"Arial", Helvetica, sans-serif !important;;text-align:center}
                .tg .tg-ti5e{font-size:10px;font-family:"Arial", Helvetica, sans-serif !important;;text-align:center}
                .tg .tg-rv4w{font-size:10px;font-family:"Arial", Helvetica, sans-serif !important;}
            </style>
  
            <div style="font-family:Arial; font-size:12px;">
                <center><h2>Data Kegiatan Mesmo</h2></center>  
            </div>
            <br>
            <table class="tg">
              <tr>
                <th class="tg-3wr7">Nama Kegiatan<br></th>
                <th class="tg-3wr7">Pembina<br></th>
                <th class="tg-3wr7">Bidang<br></th>
                <th class="tg-3wr7">Tanggal Pelaksanaan<br></th>
                <th class="tg-3wr7">Status<br></th>
              </tr>
              @foreach ($data as $datas)
              <tr>
                <td class="tg-rv4w" width="20%">{{$datas->nama_kegiatan}}</td>
                <td class="tg-rv4w" width="40%">{{ $datas->pembina->nama }}</td>
                <td class="tg-rv4w" width="30%">{{$datas->bidang->nama_bidang }}</td>
                <td class="tg-rv4w" width="30%">{{$datas->tgl_pel }}</td>
                <td class="tg-rv4w" width="30%">{{$datas->status }}</td>
              </tr>
              @endforeach
            </table>
        </body>
    </head>
</html>
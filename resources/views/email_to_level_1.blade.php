<html>

<body style="background-color:#e2e1e0;font-family: Open Sans, sans-serif;font-size:100%;font-weight:400;line-height:1.4;color:#000;">
  <table style="max-width:670px;margin:50px auto 10px;background-color:#fff;padding:50px;-webkit-border-radius:3px;-moz-border-radius:3px;border-radius:3px;-webkit-box-shadow:0 1px 3px rgba(0,0,0,.12),0 1px 2px rgba(0,0,0,.24);-moz-box-shadow:0 1px 3px rgba(0,0,0,.12),0 1px 2px rgba(0,0,0,.24);box-shadow:0 1px 3px rgba(0,0,0,.12),0 1px 2px rgba(0,0,0,.24); border-top: solid 10px green;">
    <thead>
      <tr>
        <th style="text-align:left;"><img style="max-width: 50px;" src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/f0/OOjs_UI_icon_articleSearch-rtl.svg/1024px-OOjs_UI_icon_articleSearch-rtl.svg.png" alt="Data Pengajuan"></th>
        <th style="text-align:right;font-weight:400;"> {{ \Carbon\Carbon::parse($pengajuan->created_at)->isoformat('D MMMM Y') }} - {{ \Carbon\Carbon::parse($pengajuan->created_at)->format('H:i') }} </th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td style="height:35px;"></td>
      </tr>
      <tr>
        <td colspan="2" style="font-size:20px;padding:30px 15px 0 15px;">Items</td>
      </tr>
      <tr>
        <td colspan="2" style="padding:15px;">
            @foreach($pengajuan_detail as $p)
                <p style="font-size:14px;margin:0;padding:10px;border:solid 1px #ddd;font-weight:bold;"><span style="display:block;font-size:13px;font-weight:normal;">{{ $p->barang->nama_barang }} - {{ $p->jumlah_barang }} items</span> <b style="font-size:12px;font-weight:300;">{{ $p->barang->spesifikasi }} </b><br><b style="">Rp {{ number_format($p->barang->harga_barang, 2, ',', '.') }}</b></p>
            @endforeach<br>
            <b style="font-size:12px;font-weight:300;">Total Biaya</b>
            <b>Rp {{ number_format($total, 2, ',', '.') }}</b> <hr>
        </td>
      </tr>

      @if($pengajuan->approve_level_1)
      <tr>
        <th style="text-align:right;"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  Di Approve Oleh</th>
      </tr>
      <tr>
        <th style="text-align:left;"><img style="max-width: 40px;" src="https://www.pngitem.com/pimgs/m/80-800194_transparent-users-icon-png-flat-user-icon-png.png" alt="Approval"></th>
        <th style="text-align:right;font-weight:400;"> {{ $pengajuan->approve_level_1->name }} </th>
      </tr>
      @endif
      @if($pengajuan->approve_level_2)
      <tr>
        <th style="text-align:left;"><img style="max-width: 40px;" src="https://www.pngitem.com/pimgs/m/80-800194_transparent-users-icon-png-flat-user-icon-png.png" alt="Approval"></th>
        <th style="text-align:right;font-weight:400;"> {{ $pengajuan->approve_level_2->name }} </th>
      </tr>
      @endif

      @if($pengajuan->approve_level_3)
      <tr>
        <th style="text-align:left;"><img style="max-width: 40px;" src="https://www.pngitem.com/pimgs/m/80-800194_transparent-users-icon-png-flat-user-icon-png.png" alt="Approval"></th>
        <th style="text-align:right;font-weight:400;"> {{ $pengajuan->approve_level_3->name }} </th>
      </tr>
      @endif

      <thead>
        <tr>
          <th style="text-align:left;"><img style="display:none;" src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/f0/OOjs_UI_icon_articleSearch-rtl.svg/1024px-OOjs_UI_icon_articleSearch-rtl.svg.png" alt="Data Pengajuan"></th>
          <td style="text-align:right;font-weight:400;"> <br> 
            <br>
            <br>
            
            <a style="background-color: #4CAF50;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            border-radius: 12px;  
            box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
            border: 2px solid #4CAF50;
            border: 1px solid green;
            font-size: 16px;" href="{{ route('approval_approve_admin_detail', $pengajuan->id) }}">Tinjau</a>
          </td>
        </tr>
      </thead>
    </tbody>
    <tfooter>
      <tr>
        <td colspan="2" style="font-size:14px;padding:50px 15px 0 15px;">
          <strong style="display:block;margin:0 0 10px 0;">{{ $pengajuan->user_pengajuan->name }}</strong>
          <b>Phone:</b> 03552-222011<br>
          <b>Email:</b> {{ $pengajuan->user_pengajuan->email }}
        </td>
      </tr>
    </tfooter>
  </table>
</body>

</html>
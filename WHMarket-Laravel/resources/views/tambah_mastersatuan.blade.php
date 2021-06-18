<!doctype html>

<html lang='ind'>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="../assets/css/styles-menu-admin.css">
   <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
   <link rel="stylesheet" href="../assets/css/font-awesome.min.css">

   <script src="../assets/js/jquery.min.js"></script>
   <script src="../assets/js/bootstrap.min.js"></script>
   <script src="../assets/js/script.js"></script>
   <title>WHMARKET</title>
</head>
<body>

   <div class="row">
   <ol class="breadcrumb" style="margin:0;border-radius:0; background-color:#6497B1; font-size:30px; width:100%;">
          <li class="active" style="padding-left:8px; "> </li> 
          <font color="#ffffff">WHMARKET</font><br>
      </ol>
   </div>
	
   <div class="col-md-2 colmenu" style="padding:0; width:100%; background-color:#b3cde0;">
      
      <div class="container" id='cssmenu' style="width:100%; padding:0cm;" >
<ul style="padding:0; background-color:#b3cde0;"> 
<li><a href="{{ url('home') }}"><i class="fa fa-home fa-fw" ></i>&nbsp; Home</a></li>
   <li class='active has-sub' ><a href='#'><i class="fa fa-archive fa-fw"></i>&nbsp; Master</a>
      <ul>
         <li><a href="{{ url('masterbarang') }}"><span>Master Barang</span></a>
           
         </li>

         <li><a href="{{ url('mastersatuan') }}"><span>Master Satuan</span></a>
           
         </li>

         <li><a href="{{ url('masterkategori') }}"><span>Master Kategori</span></a>
           
         </li>
         <li><a href="{{ url('masterkemasan') }}"><span>Master Kemasan</span></a>
           
         </li>
      </ul>
      <li class='active has-sub' ><a href='#'><i class="fa fa-archive fa-fw"></i>&nbsp; Manajemen Gudang</a>
      <ul>
      <li><a href="{{ url('data_stokbarang') }}"><span>Data Stok Barang</span></a>
           
           </li>
  
           <li><a href="{{ url('data_barangmasuk') }}"><span>Data Barang Masuk</span></a>
             
           </li>
  
           <li><a href="{{ url('data_barangkeluar') }}"><span>Data Barang Keluar</span></a>
             
           </li>
           
        </ul>
    
        @if(auth()->user()->role == 'superadmin')
                <li><a href="{{ url('pemeriksaanbarang') }}"><i class="fas fa-store"></i>&nbsp; Pemeriksaan Barang</a>
                </li>
                @endif
   <li><a href="{{ url('dashboard_reporting') }}"><i class="fas fa-chart-bar"></i>&nbsp; Dashboard Reporting</a></li>
   <li><a href="{{ url('datasupplier') }}"><i class="fas fa-warehouse"></i>&nbsp; Data Supplier</a></li>
   <li><a href="{{ url('datapegawai') }}"><i class="fas fa-user"></i>&nbsp; Data Pegawai</a></li>
  
</div>
 
   </div>
   
 
   <div class="col-md-10" style="padding-left:0cm; ">
      <ol class="breadcrumb"  style="margin:0;border-radius:0; background-color:#BFB5B2; width:103.3%; ">
      <li> <a class="btn btn-danger my-2 my-sm-0 text-light"  style="font-family: Arial; font-weight: bold;"   href="{{ url('logout') }}">LOGOUT</a> </li>
          
      </ol>
      
   </div>
   
   
   <div class="col-md-10" style="width: 20cm; padding-left: 3cm;">
   <h2>Tambah Master Satuan </h2><br>
            <form action="{{ url('mastersatuan') }}" method="post" enctype="multipart/form-data">
               @csrf
					<div class="form-group">
						<label>Nama Satuan</label>
						<input type="text" class="form-control" name="nama_satuan">

                  <br>
					
					<button class="btn btn-primary" type="submit" name="submit">Submit</button>
               <a href="{{ url('mastersatuan') }}" class="btn btn-danger" type="cancel" name="cancel">Cancel</a>
				</form>
   </div>
   
   </div>
	
   </div>
   
   </div>
    
   </div>
    
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
 </body>
 <html>
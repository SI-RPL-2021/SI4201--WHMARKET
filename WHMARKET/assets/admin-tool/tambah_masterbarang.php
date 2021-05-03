<!doctype html>

<html lang='ind'>
<head>
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
   <ol class="breadcrumb" style="margin:0;border-radius:0; background-color:#6497B1; font-size:30px; width:140rem;">
          <li class="active" style="padding-left:8px; "> </li> 
          <font color="#ffffff">WHMARKET</font><br>
      </ol>
   </div>
	
   <div class="col-md-2 colmenu" style="padding:0; background-color:#b3cde0;">
      
      <div id='cssmenu'>
<ul style="padding:0; background-color:#b3cde0;"> 
   <li><a href='home.php'><i class="fa fa-home fa-fw" ></i>&nbsp; Home</a></li>
   <li class='active has-sub' ><a href='#'><i class="fa fa-archive fa-fw"></i>&nbsp; Master</a>
      <ul>
         <li><a href='masterbarang.php'><span>Master Barang</span></a>
           
         </li>

         <li><a href=''><span>Master Satuan</span></a>
           
         </li>

         <li><a href=''><span>Master Kategori</span></a>
           
         </li>
         <li><a href=''><span>Master Kemasan</span></a>
           
         </li>
      </ul>
      <li class='active has-sub' ><a href='#'><i class="fa fa-archive fa-fw"></i>&nbsp; Manajemen Gudang</a>
      <ul>
         <li><a href=''><span>Data Stock Barang</span></a>
           
         </li>

         <li><a href=''><span>Data Barang Masuk</span></a>
           
         </li>

         <li><a href=''><span>Data Barang Keluar</span></a>
           
         </li>
         
      </ul>
  
   <li><a href=''><i class="fa fa-archive fa-fw"></i>&nbsp; Pemeriksaan Barang</a></li>
   <li><a href=''><i class="fa fa-archive fa-fw"></i>&nbsp; Dashboard Reporting</a></li>
   <li><a href=''><i class="fa fa-archive fa-fw"></i>&nbsp; Data Supplier</a></li>
   <li><a href=''><i class="fa fa-archive fa-fw"></i>&nbsp; Data Pegawai</a></li>
  
</div>
 
   </div>
   
 
    <div class="col-md-10" style="padding:0px; ">
      <ol class="breadcrumb" style="margin:0;border-radius:0; background-color:#BFB5B2; width:116rem;">
      <li> <a class="btn btn-danger my-2 my-sm-0 text-light"  style="font-family: Arial; font-weight: bold;"   href=" ">LOGOUT</a> </li>
          
      </ol>
      
   </div>
   
   
   <div class="col-md-10" style="width: 25cm; padding-left: 5cm;">
   <h2> Tambah Master Barang </h2><br>
				<form method="post" enctype="multipart/form-data">
					<div class="form-group">
						<label>Nama Barang</label>
						<input type="text" class="form-control" name="nama">
					</div>
					<div class="form-group">
						<label>Kategori</label>
						<input type="text" class="form-control" name="harga">
					</div>
					<div class="form-group">
						<label>Satuan</label>
						<input type="text" class="form-control" name="image">
					</div>
                    <div class="form-group">
						<label>Kemasan</label>
						<input type="text" class="form-control" name="image">
					</div>
                    <div class="form-group">
						<label>Harga</label>
						<input type="int" class="form-control" name="image">
					</div>
					
					<button class="btn btn-primary" type="submit" name="submit">Submit</button>
                    <button class="btn btn-danger" type="cancel" name="cancel">Cancel</button>
				</form>
   </div>
   
   </div>
	
   </div>
   
   </div>
    
   </div>
    
    
 </body>
 <html>
<head>
<html>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
<?php 
if (isset($_COOKIE['alert'])) {
    $al = teadecrypt($_COOKIE['alert'], 'redangel');
    rmck(array('alert'));
}
?>

<?php 
$v = function ($vz, $q=0) use ($ps) {
    print ($q==1 and isset($ps[$vz])) ? $ps[$vz] : (isset($ps[$vz])?' value="'.$ps[$vz].'" ':'');
};
if (isset($al)) {
    ?>
	<script type="text/javascript">
	alert('<?php print $al; ?>');
	</script>
	<?php

}
?>
	<title>Register</title>
	<?php print css('register'); ?>

<style type="text/css">
		body{
			background-image: <?php print 'url('.base_url().'/assets/img/bgm/bg2.jpg);';?>
			background-repeat: no-repeat;
			background-position: center; 
		}
	</style>
</head>
	<body>

   
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!--div class="container" jgn di error in :v -->
         
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">

                </button>
                <a class="navbar-brand" href="#"> <!-- ini diisi ketika kita udah punya logo biar greget :V -->
                    <!--img src="#" height="50" width="150" alt=""-->
                </a>
            </div>
			
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
					&nbsp;
					</li>
					<li>
                   <input <?php $v('tmplahir');?> required type="text" name="tmplahir" class="form"  placeholder="Username">
				   </li>
					<li>
					&nbsp;
					</li>
				   <li>
                   <input <?php $v('tmplahir');?> required type="text" name="tmplahir" class="form"  placeholder="Password">
				   </li>
				   <li>
					&nbsp;
					</li>
					<li>
                        <input type="submit" class="btn btn-info" value="Login">
                    </li>
					

                </ul>
            </div>

        <!--/div-->
   
    </nav>
<body>

<div class="row"> 
<div class="col-md-4">
</div> 
 
<div class="col-md-4">
<div class="panel panel-primary">
<div class="panel-heading">
Pendaftaran RedAngel
</div>
	
		<form action="<?php print base_url().'/register/action';?>" method="post">
			<div class="panel-body">
			
				
					<label>Nama Lengkap</label>
					<div class="form-group has-success"><input <?php $v('nama');?> required type="text" name="nama" class="form-control" placeholder="Nama Lengkap">
					</div>
					
 
					<label>Tempat Lahir</label>
					<div class="form-group has-success">
					<input <?php $v('tmplahir');?> required type="text" name="tmplahir" class="form-control"  placeholder="Tempat Lahir">
					</div>
					
					<label>Tanggal Lahir</label>
					<div class="form-group has-success">
					<div class='form-control'><?php  print $tanggal_lahir; ?> 
					</div>
					</div>
					<label>Alamat</label>
					<div class="form-group has-success">
					<textarea required name="alamat" class="form-control"  placeholder="Alamat"><?php $v('alamat', 1);?></textarea >
					</div>
					
					<label>E-Mail</label>
					<div class="form-group has-success">
					<input <?php $v('email');?>  required type="email" name="email" class="form-control"  placeholder="email">
					</div>
					<label>Nomor HP</label>
					<div class="form-group has-success">
					<input <?php $v('phone');?> required type="text" name="phone" class="form-control"  placeholder="nope">
					<div class="mgt"></div>
					</div>
				<hr/>
				<h3>Buat Akun</h3>
				<hr/>
				
				
				
					<label>Username</label>
					<div class="form-group has-success">
					<input <?php $v('username');?>  required type="text" name="username" class="form-control"  placeholder="username">
					</div>
					<label>Password</label>
					<div class="form-group has-success">
					<input required type="password" name="password" class="form-control"  placeholder="password">
					</div>
					<label>Konfirmasi Password</label>
					<div class="form-group has-success">
					<input required type="password" name="cpassword" class="form-control"  placeholder="retypepassword">
					</div>
					<hr/>
					<div class="mgt"><input type="hidden" name="rgtoken" value="<?php print $rgtoken; ?>"></div>
					<input type="submit" name="register" class="btn btn-primary" value="Daftar">
					<input type="submit" name="register" class="btn btn-danger" value="Reset Bang">
				
		
		</form>
	</div>
	</div>
	</div>
	</div>
</body>
</html>
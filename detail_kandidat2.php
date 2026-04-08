<?php
$user = "Wiwit";
?>

<!DOCTYPE html>
<html>
<head>
<title>MyOSIS Vote</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<style>

<div class="logo">
<title>MyOSIS Vote</title>
</div>

<style>

body{
    margin:0;
    font-family:Arial;
    background:#f3f4f7;
}

/* BORDER LUAR PUTIH */
.border{
    border:10px solid white;
    min-height:100vh;
}

/* SIDEBAR */
.sidebar{
    width:200px;
    height:110vh;
    background:#B9CDEF;
    float:left;
    text-align:center;
}

.sidebar h3{
    margin-top:20px;
}

.menu{
    margin-top:40px;
}

.menu a{
    display:block;
    padding:12px;
    text-decoration:none;
    color:black;
    background:#468CFD;
    margin:5px 0;

}

.menu a:hover{
    background:#315ABF;
    color:white;
}

.logout{
    margin-top:260px;
}

.logout button{
    padding:10px 20px;
    border:none;
    background:#2f4f8f;
    color:white;
    border-radius:10px;
    gap:20px;
   

}


/* content */
.content{
    flex:1;
    text-align:center;
    padding-top:40px;
}




/* card kandidat */
.card{
    width:400px;
    background:white;
    display:flex;
    justify-content:center;
    align-items:center;
    flex-direction: column;
    margin: 10px auto;
    padding:25px;
    border-radius:12px;
    box-shadow:0 4px 12px rgba(0,0,0,0.2);
}


.foto-box{
    background:#d12b2b;
    width:150px;
    height:160px;
    margin:auto;
    border-radius:20px;
    display:flex;
    align-items:center;
    justify-content:center;
}
.judul1{
    padding-top:0px;
    padding-bottom:1px;
}

.foto-box img{
    width:95px;
    height:95px;
    border-radius:50%;
}

/* nama */
.nama{
    margin-top:12px;
    font-weight:bold;
    color:#2a55a4;
}

.label{
    background:#6ea3ff;
    color:white;
    padding:3px 10px;
    border-radius:6px;
    font-size:12px;
    display:inline-block;
    margin-top:4px;
}

.text{
    text-align:left;
    margin-top:15px;
    font-size:14px;
    color:#333;
    line-height:1.5;
}


.button-area{
    display:flex;
    justify-content:center;
    gap:20px;
    margin-top:20px;
}

.btn{
    background:#6ea3ff;
    border:none;
    padding:10px 30px;
    color:white;
    border-radius:6px;
    font-weight:bold;
    margin:6px;
    cursor:pointer;
}

.logo-sekolah {
    position: absolute;
    top: 20px;
    right: 20px;
}



</style>
</head>

<body>

<div class="container">


<!-- SIDEBAR -->
<div class="sidebar">

<h3>MyOSIS Vote</h3>
<img src="logovotting.png" alt="logo" width="100"; height="100">

<div class="logo-sekolah">
    <img src="logo smp.jpeg" alt="Logo Sekolah" style="height: 50px;">
</div>

<div class="menu">
<a href="#">Votting</a>
<a href="#">Hasil Votting</a>
</div>

<div class="logout">
<p>Hi, <?php echo $user; ?></p>
<button><i class="fa-solid fa-arrow-left" style="font-size: 9px;"></i>Logout</button>
</div>

</div>

<!-- CONTENT -->
<div class="content">

<div class= "judul">
<h1 class="judul1">Profil Calon Ketua OSIS</h1>
<p>pilih calon ketua osis yang sesuai dengan visi dan misi</p>
</div>

<div class="card">

<div class="foto-box">
<img src="kaizen erlangga.jpeg">
</div>

<div class="nama">Kaizen Erlangga</div>
<div class="label">calon 2</div>

<div class="text">
<b>Visi</b><br>
Menjadikan OSIS sebagai wadah Kreasi, Aspirasi, dan Inovasi (KAI) yang profesional,
berwawasan global, dan berakhlak mulia.<br><br>

<b>Misi</b><br>
Mengadakan program untuk mengembangkan minat, bakat, dan prestasi
(akademik & non-akademik).
</div>

</div>

<div class="button-area">
<button class="btn">PILIH</button>
<button class="btn">kembali</button>
</div>

</div>

</div>

</body>
</html>
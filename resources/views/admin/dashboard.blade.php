<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <title>Dashboard Admin</title>
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
</head>
<style type="text/css">
  * {
 padding: 0;
 margin: 0;
}
body {
 background: #E7E7E7FF;
}
.navbar {
 width: 100%;
 height: 60px;
 background: #3A6EFFFF;
 border-bottom: 2px solid #585858FF;
}
.sidebar {
 width: 70px;
 height: 1120px;
 background: #3A3A3AFF;
 float: left;
}
/*.wrapper {
 width: 1270px;
 height: 549px;
 background: #E7E7E7FF;
 float: left;
 margin:5px;
}*/
.box1 {
 width: 250px;
 height: 150px;
 background: #5AAA4CFF;
 float: left;
 box-shadow: 2px 4px 4px grey;
 cursor: pointer;
}
.box2 {
 width: 250px;
 height: 150px;
 background: blue;
 float: left;
 margin-left: 30px;
 box-shadow: 2px 4px 4px grey;
 cursor: pointer;
}
.box3 {
 width: 250px;
 height: 150px;
 background: #DC7E3BFF;
 float: left;
 margin-left: 30px;
 box-shadow: 2px 4px 4px grey;
 cursor: pointer;
}
.box4 {
 width: 250px;
 height: 150px;
 background: #F74C4FFF;
 float: left;
 margin-left: 30px;
 box-shadow: 2px 4px 4px grey;
 cursor: pointer;
}
.boxx {
 width: 1140px;
 height: 150px;
 margin-top: 20px;
 margin-left:170px;
}
.admin {
 color: white;
 font-size: 35px;
 line-height: 60px;
 margin-left: 20px;
}
.btn {
 width: 70px;
 height: 40px;
 background: #3A3A3AFF;
 border: none;
 border-bottom: 1px solid #666666FF;
 color: white;
 cursor: pointer;
 outline-color: #3A3A3AFF;

}
.btnt {
 width: 70px;
 height: 40px;
 background: #2D2D2DFF;
 border: none;
 border-bottom: 1px solid #666666FF;
 color: white;
 cursor: pointer;
 outline-color: #2D2D2DFF;
 
}
.btnn {
 width: 70px;
 height: 40px;
 background: #595959FF;
 border: none;
 border-bottom: 1px solid #666666FF;
 color: white;
 cursor: pointer;
 outline-color: #595959FF;
}
.btn:hover {
 background: #595959FF;
}
.btnn:hover {
 background: #353535FF;
}
.title {
 width: 120px;
 height: 150px;
 float: right;
}
.int {
 color: white;
 margin: 30px 30px;
}
.intt {
 color: white;
 margin: 30px 30px;
}
.inttt {
 color: white;
 margin: 30px 30px;
}
.intttt {
 color: white;
 margin: 30px 30px;
}
.box1:hover {
 background: #529646FF;
}
.box2:hover {
 background: #5160B4FF;
}
.box3:hover {
 background: #F1873AFF;
}
.box4:hover {
 background: #CF4330FF;
}
.insert {
 margin-top: 40px;
 margin-left: 20px;
 width: 150px;
 height: 30px;
 background: #507AC7FF;
 border:none;
 color: white;
 font-weight: bold;
 box-shadow: 2px 2px 4px grey;
 cursor: pointer;
}
.insert:hover {
 background: #335FFFFF;
}
.hapus {
 width: 20px;
 height: 20px;
 background: #FF1919FF;
 border: none;
 color: white;
 border-radius: 3px;
 cursor: pointer;
 margin-left: 30px;
}
.edit {
 width: 20px;
 height: 20px;
 background: #0808BDFF;
 border: none;
 color: white;
 margin-left: 5px;
 border-radius: 3px;
 cursor: pointer;
}
.dasare {
 width: 500px;
 height: 300px;
 margin:30px auto;
 border-radius: 20px;
 border: 1px solid #D9D9D9FF;
}
.in {
 width: 400px;
 margin-left: 50px;
 margin-top: 50px;
 height: 40px;
 background: none;
 border :1px solid #55B6FFFF;
 border-radius: 20px;
 outline:none;
 text-align: center;
}
.inn {
 width: 400px;
 margin-left: 50px;
 margin-top: 10px;
 height: 40px;
 background: none;
 border :1px solid #55B6FFFF;
 border-radius: 20px;
 text-align: center;
 outline: none;
}
.innn {
 margin-left: 50px;
 margin-top: 10px;
}
.sbm {
 width: 148px;
 height: 30px;
 background-color: #5180EEFF;
 border: none;
 color: white;
 font-weight: bold;
 box-shadow: 2px 2px 3px grey;
}
</style>
<body>
 <div class="navbar">
  <h3 class="admin">Dashboard Admin</h3>
 </div>
 <div class="sidebar">
  <div class="nav"></div>
  <a href=""><button class="btnt"><i style="margin-right: 5px" class="fa fa-home"></i></button><br></a>
  <a href=""><button class="btn"><i style="margin-right: 5px" class="fa fa-book"></i></button><br></a>
  <a href="{{ url('admin/user') }}"><button class="btn"><i style="margin-right: 5px" class="fa fa-list"></i></button><br></a>
  <a href="{{ url('admin/psikolog') }}"><button class="btn"><i style="margin-right: 5px" class="fa fa-lock"></i></button><br></a>
  <a href="{{ url('admin/dataperkenalan') }}"><button class="btnn"><i style="margin-right: 5px" class="fa fa-user"></i></button><br></a>
 </div>
 <div class="wrapper">
  <div class="boxx">
   <div class="box1">
    <i class="fa fa-book fa-5x" style="color: white;margin:30px 20px"></i>
    <div class="title"><h2 class="int">Data User</h2></div>
   </div>
   <div class="box2">
    <i class="fa fa-book fa-5x" style="color: white;margin:30px 20px"></i>
    <div class="title"><h2 class="intt"><a href="{{ url('admin/user') }}"></a>Data Psikolog</h2></div>
   </div>
   <div class="box3">
    <i class="fa fa-book fa-5x" style="color: white;margin:30px 20px"></i>
    <div class="title"><h2 class="inttt">Data Paket Perkena <br>lan</h2></div>
   </div>
   <div class="box4">
    <i class="fa fa-book fa-5x" style="color: white;margin:30px 20px"></i>
    <div class="title"><h2 class="intttt">Data Paket Lega</h2></div>
   </div>
  </div>

 </div>
</body>
</html>
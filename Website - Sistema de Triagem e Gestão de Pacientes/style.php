<style>

*{
	padding: 0; margin: 0;
}

body{
height:700px;
font-family:sans-serif;
background-image: url("fundo.jpg");
background-repeat: no-repeat;
background-position:center;
background-size: 112% 112%;
}

a{
	text-decoration:none;
	color:#79FF00 ;
}

li{
	list-style-type:none;
}

footer{
    border-top: 1px solid black;
    margin:auto;
    height:20px;
	text-align:center;
	background:rgba(76,158,80,0.3)	
	
}

header{
	width:100%;
	height:50px;
	margin:auto;
	border-bottom:1px solid black;
	
	background:rgba(76,158,80,0.3)	
	}

#brand {
	 line-height:50px; color:#79FF00 ;font-size: 25px; font-weight:bolder;text-align:center;

}

nav{
	width:100%;
	text-align: center;
}

nav a{
	display:block; padding: 15px 0;
	border-bottom: 1px solid black;
}

nav a:hover {
	background:black;
	color:yellow;
}
nav li:last-child a{
	border-bottom:none;
}

.menu{
	width:240px;
	height:630px;
	position:absolute;
	background:grey;
	left:-240px;
	transition: all .5s ease-in-out;
	-webkit-transition: all .5s ease-in-out;
	-moz-transition: all .5s ease-in-out;
	-ms-transition: all .5s ease-in-out;
	-o-transition: all .5s ease-in-out;
	opacity:0.7;
	filter:alpha (opacity=70);
}

.menu-icon{
	padding:10px 20px;
	background:grey;
	color:black;
	float:left;
	border-radius:18px;
	margin-top:6px;
	margin-left:6px;
	border:medium;
	opacity:0.5;
	filter:alpha (opacity=50);
	cursor:pointer;


}
#toggleMenu{
	display:none;
}

#toggleMenu:checked ~ .menu{
	position:absolute;
	left: 0;
	
}

.containerlogin{
	width:500px;
	height:350px;
	background-color:black;
	margin:0 px;
	text-align:center;
	magin-top:150px;
	border-radius:5px;
	opacity:0.8;
	filter:alpha (opacity =80);
}

.containererrologin{
	width:500px;
	height:400px;
	background-color:black;
	margin:0 px;
	text-align:center;
	magin-top:150px;
	border-radius:5px;
	opacity:0.8;
	filter:alpha (opacity =80);
}


.containerlogin img{
	width:110px;
	height:110px;
	border-radius:500px;
	background:#fff;
	padding:5px;
	margin-top:-60px;
	margin-bottom:60px;
	
}

.containererrologin img{
	width:110px;
	height:110px;
	border-radius:500px;
	background:#fff;
	padding:5px;
	margin-top:-60px;
	margin-bottom:60px;
	
}


.containercontacto {
	width:250px;
	height:500px;
	background-color:black;
	margin:0 px;
	text-align:center;
	magin-top:150px;
	border-radius:5px;
	opacity:0.8;
	filter:alpha (opacity =80);
}

.containerpaciente {
	width:400px;
	height:550px;
	background-color:black;
	margin:0 px;
	text-align:center;
	magin-top:150px;
	border-radius:5px;
	opacity:0.8;
	filter:alpha (opacity =80);
}

.containerpaciente  img{
	width:110px;
	height:110px;
	border-radius:500px;
	background:#fff;
	padding:5px;
	margin-top:-60px;
	margin-bottom:60px;
	
}


.containercontacto img{
	width:110px;
	height:110px;
	border-radius:500px;
	background:#fff;
	padding:5px;
	margin-top:-60px;
	margin-bottom:60px;
	
}

.container2{
	width:400px;
	height:600px;
	background-color:black;
	margin:0 px;
	text-align:center;
	magin-top:150px;
	border-radius:5px;
	opacity:0.8;
	filter:alpha (opacity =80);
	overflow:auto;
}

.containerconsulta{
	width:900px;
	height:600px;
	background-color:black;
	margin:0 px;
	text-align:center;
	magin-top:150px;
	border-radius:5px;
	opacity:0.8;
	filter:alpha (opacity =80);
	overflow:auto;
}


.container3{
	width:400px;
	height:570px;
	background-color:black;
	margin:0 px;
	text-align:center;
	magin-top:150px;
	border-radius:5px;
	opacity:0.8;
	filter:alpha (opacity =80);
}

.container4{
	width:400px;
	height:510px;
	background-color:black;
	margin:0 px;
	text-align:center;
	magin-top:150px;
	border-radius:5px;
	opacity:0.8;
	filter:alpha (opacity =80);
}

.containerlistautili{
	width:580px;
	height:400px;
	background-color:black;
	margin:0 px;
	text-align:center;
	magin-top:150px;
	border-radius:5px;
	opacity:0.8;
	filter:alpha (opacity =80);
}

.containeradm2{
	width:550px;
	height:650px;
	background-color:black;
	margin:0 px;
	text-align:center;
	magin-top:150px;
	border-radius:5px;
	opacity:0.8;
	filter:alpha (opacity =80);
}

.table2 th{
	width:100px;
	color:#79FF00;
	}
	
	
.containerListaEspera{
	width:800px;
	height:510px;
	background-color:black;
	margin:0 px;
	margin-top:60px;
	margin-bottom:74px;

	text-align:center;
	border-radius:5px;
	opacity:0.8;
	filter:alpha (opacity =80);
}


.containeradm3{
	width:750px;
	height:600px;
	background-color:black;
	margin:0 px;
	text-align:center;
	magin-top:700px;
	border-radius:5px;
	opacity:0.8;
	filter:alpha (opacity =80);
	overflow:auto;
}

.containertri1{
	width:400px;
	height:100px;
	background-color:black;
	margin:0 px;
	text-align:center;
	magin-top:700px;
	magin-left:700px;
	border-radius:5px;
	opacity:0.8;
	filter:alpha (opacity =80);
	
}

.containeradd{
	width:400px;
	height:650px;
	background-color:black;
	margin:0 px;
	text-align:center;
	magin-top:150px;
	border-radius:5px;
	opacity:0.8;
	filter:alpha (opacity =80);
}


input[type=text],[type=password]{
	width:300px;
	height:45px;
	font-size:17px;
	border-radius:5px;
	background: #fff;
	padding-left:30px;
	margin-top:-60px;
	margin-bottom:20px;
	border:none;
	
}

input[type=text2],[type=password2]{
	width:35px;
	height:30px;
	font-size:9px;
	border-radius:5px;
	background: #fff;
	padding-left:1px;
	margin-top:-60px;
	margin-bottom:20px;
	border:none;
	
}

input[type=text3]{
	width:800px;
	height:70px;
	font-size:14px;
	border-radius:5px;
	background: #fff;
	padding-left:1px;
	margin-top:-60px;
	margin-bottom:20px;
	border:none;
}



.login{
	border:none;
	padding:15px;
	background:#2ecc71;
	border-radius:5px;
	cursor:pointer;
	border-bottom:5px solid #27AE60;
	margin-bottom:20px;
	
}

.containerlogin a{
	color:#79FF00;
}

.containererrologin a{
	color:#79FF00;
}



.containercontacto a{
	color:#79FF00;
}

.container2 a{
	color:#79FF00;
}
</style>

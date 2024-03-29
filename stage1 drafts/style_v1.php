@CHARSET "UTF-8";

body {
	text-align: center;
	margin:0;                 /* reset brower settings */
	padding:0; 
	box-sizing: border-box;
}


p{
	width: 80% ;
	margin-left:auto;        /* centralize */
	margin-right:auto;
}

.inline{
	display:inline;        /* keep inline-block aligned horizontally*/
}

.flowbox:hover {
	border-width: 8px;
	font-size: 20px;
}

.flowbox {                /* box used to show RC4 flow */
	position: relative;
	float: left;
	right:-10%;
	display: inline-block;
	width: 15%;
	height: 120px;
	margin:10px;
	border-style: groove;
	border-width: 5px;
	border-color: lightblue;
	background-color: lavender;
	text-decoration: none;   /* to remove underline of links*/
}

.arrowbox {               /* boxed used to contain arrow*/
	position: relative;
	float: left;
	right:-10%;
	display: inline-block;
	width: 10%;
	height: 120px;
	margin:10px;
	padding-top:40px;     /* centralize the arrow */
	
}


img {
	height: 50%;
	width: 80%;
	display: inline-block;
	vertical-align: middle;
}









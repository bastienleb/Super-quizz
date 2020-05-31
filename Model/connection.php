<?php
	function get_connect(){
		 $link=mysqli_connect("localhost","quintois","quintois","quintois");
    	if(!$link){
        	die("<p>connexion impossible</p>");
    	}
	}
?>
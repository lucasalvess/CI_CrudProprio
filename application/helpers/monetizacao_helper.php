<?php 

 function monetizar($numero){
	return "R$ ".number_format($numero,2,",",".");
}
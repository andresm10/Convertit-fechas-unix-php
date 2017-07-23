<!DOCTYPE html>
<head> 
    <meta content="text/html; charset=UTF-8" http-equiv="Content-Type">     
    <style>
	*{
		font-family:Verdana, Geneva, sans-serif;
		color:#633;		
	}
</style>
</head>
<body>
	<div>
    <label>Fecha y Hora actual: <?php echo date("Y-m-d H:i:s"); ?></label>
    </div>	
    <div style="text-align:center;">
        	<h1>Convertir fechas de formato Unix (strtotime) A date en PHP </h1>
            <h2><a href="http://codigoweblibre.blogspot.com" target="_blank">http://codigoweblibre.blogspot.com</a></h2>
        </div>        
        <ul>
	<li><h3><label>1363739535 a formato Y-m-d H:i:s --></label><?php echo date("Y-m-d H:i:s", "1363739535"); ?></h3></li>
	<li><h3><label>Fecha y Hora actual a formato Unix --> </label><?php echo strtotime(date("Y-m-d H:i:s")); ?></h3></li>
    <li><h3><label>Fecha y Hora unix actual a formato Y-m-d H:i:s --></label><?php echo date("Y-m-d H:i:s", strtotime(date("Y-m-d H:i:s"))); ?></h3></li>
    </ul>   
</body> 
</html> 
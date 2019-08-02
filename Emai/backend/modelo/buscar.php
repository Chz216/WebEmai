
<?

if ($_POST[‘buscador’])
{ 
// Tomamos el valor ingresado
$buscar = $_POST[‘palabra’];

// Si está vacío, lo informamos, sino realizamos la búsqueda
if(empty($buscar))
{
echo "No se ha ingresado un articulo a buscar";
}else{
// Conexión a la base de datos y seleccion de registros
$con=mysql_connect("localhost","usuario","password");
$sql = "SELECT * FROM instrumento WHERE tipoinstrumento.nombre,instrumento.id_instrumento,id_categoria,categoria from categoria inner join tipoinstrumento "
. "on tipoinstrumento.id_tipo_instrumento=categoria.id_categoria inner join categoria.id_categoria=instrumento.id_instrumento group by id_tipo_instrumento like ‘%$buscar%’ DESC";
mysql_select_db("base_de_datos", $con);

$result = mysql_query($sql, $con);

// Tomamos el total de los resultados
$total = mysql_num_rows($result);

// Imprimimos los resultados
if ($row = mysql_fetch_array($result)){ 
echo "Resultados para: <b>$buscar</b>";
do { 
?>
<p><b><a href="detalle.php?id=<?=$row[‘id_instrumento’];?>"><?=$row["id_instrumento"];?></a></b></p>
<?
} while ($row = mysql_fetch_array($result)); 
echo "<p>Resultados: $total</p>";
} else { 
// En caso de no encontrar resultados
echo "No se encontraron resultados para: <b>$buscar</b>"; 
}
}
}

?>
<?php
require __DIR__.'/vendor/autoload.php';
use Spipu\Html2Pdf\Html2Pdf;

if (isset($_POST['save'])) {    
   
         $fp = fopen('arrendatarios.xml', 'w+');
         $newXml = '<?xml version=\'1.0\' encoding=\'utf-8\' ?>'."\n"."<?xml-stylesheet type='text/xsl' href='test.xsl'?>"."\n";   
		 $newXml .= '<arrendatarios>'."\n";
         $newXml .= '<persona>'."\n";
         $newXml .= '<nombre>'.$_POST['nombre'].'</nombre>'."\n";
         $newXml .= '<apellido>'.$_POST['apellido'].'</apellido>'."\n";
         $newXml .= '<rut>'.$_POST['rut'].'</rut>'."\n";
         $newXml .= '<meses>'.$_POST['meses'].'</meses>'."\n";
         $newXml .= '<monto>'.$_POST['monto'].'</monto>'."\n";
         $newXml .= '<direccion>'.$_POST['direccion'].'</direccion>'."\n";
         $newXml .= '</persona>'."\n";
		 $newXml .= '</arrendatarios>'."\n";
         fwrite($fp, $newXml);
         fclose($fp);    
    echo "File has been altered";
}
if (isset($_POST['load'])) {
	
$arrendatarios=simplexml_load_file("arrendatarios.xml");
foreach($arrendatarios as $persona)
{
echo "<h1 align='center'>Nombre: " . $persona->nombre . "</h1>";
echo "<br>";
echo "<h3>Apellido: " . $persona ->apellido . "</h3>";
echo "<br>";
echo "<h3>Rut : " . $persona ->rut . "</h3>";
echo "<br>";
echo "<h3>Meses : " . $persona ->meses . "</h3>";
echo "<br>";
echo "<h3>Monto : " . $persona ->monto . "</h3>";
echo "<br>";
echo "<h3>Direccion : " . $persona ->direccion . "</h3>";
echo "<br>";
}
}
if (isset($_POST['crear'])) {
ob_start();
require_once 'arrendatarios.php';
$html=ob_get_clean();
$html2pdf = new Html2Pdf('P','A4','es','true','UTF-8');
$html2pdf->writeHTML($html);
$html2pdf->output();
}
?>
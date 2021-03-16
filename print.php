<?php
require __DIR__.'/vendor/autoload.php';
use Spipu\Html2Pdf\Html2Pdf;

if (isset($_POST['save'])) {    
   
         $fp = fopen('arrendatarios.xml', 'w+');
         $newXml = '<?xml version=\'1.0\' encoding=\'utf-8\' ?>'."\n"."<?xml-stylesheet type='text/xsl' href='test.xsl'?>"."\n";   
		 $newXml .= '<estudiantes>'."\n";
         $newXml .= '<persona>'."\n";
         $newXml .= '<nombre>'.$_POST['nombre'].'</nombre>'."\n";
         $newXml .= '<apellido>'.$_POST['apellido'].'</apellido>'."\n";
         $newXml .= '<carrera>'.$_POST['carrera'].'</carrera>'."\n";
         $newXml .= '</persona>'."\n";
		 $newXml .= '</estudiantes>'."\n";
         fwrite($fp, $newXml);
         fclose($fp);    
    echo "Archivo XML creado";
}
if (isset($_POST['load'])) {
	
$arrendatarios=simplexml_load_file("test.xml");
foreach($arrendatarios as $persona)
{
echo "Nombre: " . $persona->nombre;
echo "<br>";
echo "Apellido: " . $persona ->apellido;
echo "<br>";
echo "Carrera : " . $persona ->carrera;
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
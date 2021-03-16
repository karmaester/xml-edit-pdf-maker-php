<?xml version="1.0" encoding="UTF-8"?>

<xsl:stylesheet version="1.0"
xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

<xsl:template match="/">
  <html>
  <body>
  <h2>Mis arrendatarios</h2>
  <table border="1">
    <tr bgcolor="#9acd32">
      <th>Nombre</th>
      <th>Apellido</th>
      <th>Rut</th>
      <th>Tiempo</th>
      <th>Monto</th>
      <th>Dirección</th>
    </tr>
    <xsl:for-each select="arrendatarios/arrendatario">
    <tr>
      <td><xsl:value-of select="nombre"/></td>
      <td><xsl:value-of select="apellido"/></td>
      <td><xsl:value-of select="rut"/></td>
      <td><xsl:value-of select="tiempo"/></td>
      <td><xsl:value-of select="monto"/></td>
      <td><xsl:value-of select="direccion"/></td>
    </tr>
    </xsl:for-each>
  </table>
  </body>
  </html>
</xsl:template>

</xsl:stylesheet>
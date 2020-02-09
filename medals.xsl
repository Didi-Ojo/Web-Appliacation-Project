<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" 
xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

<xsl:template match="/">
  <html>
  <body>
    <table align="center" border="1">
       <caption><h2>Medal Count</h2></caption>
      <tr bgcolor="#ffcc99">
        <th style="text-align:left">Country</th>
        <th style="text-align:left">Gold</th>
        <th style="text-align:left">Silver</th>
        <th style="text-align:left">Bronze</th>
        <th style="text-align:left">Total</th>
      </tr>
      <xsl:for-each select="medals/country">
        <xsl:sort select="total"/>
      <tr>
        <td><xsl:value-of select="name"/></td>
        <td><xsl:value-of select="gold"/></td>
        <td><xsl:value-of select="silver"/></td>
        <td><xsl:value-of select="bronze"/></td>
        <td><xsl:value-of select="total"/></td>
      </tr>
      </xsl:for-each>
    </table>

    <p> Last Updated: 20/08/2016 6:10am </p>
    <p> <a href="medals.html">Go Back</a></p>
    <p> Click here to <a href="http://olympics.cbc.ca/medals/" target="_blank">get recent update</a></p>

  </body>
  </html>
</xsl:template>
</xsl:stylesheet>
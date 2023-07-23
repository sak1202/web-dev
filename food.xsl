<?xml version="1.0"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">
<html>
<body>
<h2>MENU</h2>
<table border="1">
<tr>
<th>Name</th>
<th>Price</th>
<th>rating</th>
</tr>
<xsl:for-each select="menu/dish">
<tr>
<td><xsl:value-of select="name"/></td>
<td><xsl:value-of select="price"/></td>
<td><xsl:value-of select="rating"/></td>
</tr>
</xsl:for-each>
</table>
</body>
</html>
</xsl:template>
</xsl:stylesheet>
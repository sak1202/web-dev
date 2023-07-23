<?xml version="1.0"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">
<html>
<body>
<table border="1">
<tr bgcolor="yellow">
<th>Name</th>
<th>rollno</th>
<th>dept</th>
</tr>
<xsl:for-each select="class/student">
<tr>
<td><xsl:value-of select="name"/></td>
<td><xsl:value-of select="rollno"/></td>
<td><xsl:value-of select="dept"/></td>
</tr>
</xsl:for-each>
</table>
</body>
</html>
</xsl:template>
</xsl:stylesheet>
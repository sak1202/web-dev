<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
<xsl:template match="/">
<html>
<body>
<table border="1">
<caption><h1>Subject Details</h1></caption>
<tr bgcolor="yellow">
<th>Name</th>
<th>Code</th>
<th>MaxMarks</th>
</tr>
<xsl:for-each select="teit/sub">
<tr>
<td><xsl:value-of select="subname"/></td>
<td><xsl:value-of select="subcode"/></td>
<td><xsl:value-of select="maxmarks"/></td>
</tr>
</xsl:for-each>
</table>
</body>
</html>
</xsl:template>
</xsl:stylesheet>
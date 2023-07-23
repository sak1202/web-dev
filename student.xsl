<?xml version="1.0"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform" >

<xsl:template match="/">
<html>
<body>

<table border="1">
<tr bgcolor="yellow">
<th>Name</th>
<th>Class</th>
<th>Department</th>
<th>Rollno</th>
<th>Marks</th>
</tr>

<xsl:for-each select="details">
<tr>
<td><xsl:value-of select="student/name"/></td>
<td><xsl:value-of select="class"/></td>
<td><xsl:value-of select="class/@dept"/></td>
<td><xsl:value-of select="roll"/></td>
<td><xsl:value-of select="marks"/></td>
</tr>
</xsl:for-each>
</table>

</body>
</html>
</xsl:template>
</xsl:stylesheet>
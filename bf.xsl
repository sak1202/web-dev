<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0"> 
<xsl:template match="/">
<html>
<body>
<h1>Breakfast Menu</h1>
    <table border="1">
    <tr bgcolor="yellow">
    <th>Item</th>
    <th>Price</th>
    <th>Rating</th>
    </tr>
    

    <xsl:for-each select="breakfast/item">
    <tr>
    <td><xsl:value-of select="item"/></td>
    <td><xsl:value-of select="price"/></td>
    <td><xsl:value-of select="rating"/></td>
    </tr>
    </xsl:for-each>
    </table>
</body>
    </html>
    </xsl:template>
    </xsl:stylesheet>
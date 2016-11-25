<?xml version="1.0" encoding="utf-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
	<xsl:template match="/">
		<xsl:for-each select="./newspapers/newspaper">
			<table>
			<xsl:choose>
				<xsl:when test="./@name='Times'">
					<tr><th><h1><xsl:value-of select="./@name"/></h1></th></tr>
				</xsl:when>
				<xsl:when test="./@name='The SUN'">
					<tr><th><h1><font color='#F0A804'><xsl:value-of select="./@name"/></font></h1></th></tr>
				</xsl:when>
				<xsl:otherwise>
					<tr><th><h1><font color='green'><xsl:value-of select="./@name"/></font></h1></th></tr>
				</xsl:otherwise>
			</xsl:choose>
			<th><p class='type'><xsl:value-of select="./@type"/></p>
			<p class='subscribers'>Subscribers: <xsl:value-of select="./@subscribers"/></p></th>
			
			<xsl:for-each select="./article">
				<tr><td><h3><xsl:value-of select="./heading"/></h3>
				<p class='time'><xsl:value-of select="./@time"/></p>
				<p class='id'>Id: <xsl:value-of select="./@id"/></p>
				<p><xsl:value-of select="./text"/></p></td></tr>
				<xsl:choose>	
					<xsl:when test="./comment">
						<tr><td class='tdcomment'><p class='comment'><xsl:value-of select="./comment/@description"/></p></td></tr>
					</xsl:when>
				</xsl:choose>
			</xsl:for-each>
			
			</table>
		</xsl:for-each>
		
	</xsl:template>
</xsl:stylesheet>

<?xml version="1.0" encoding="utf-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">

	
	<xsl:template match="/newspapers/newspaper">
		<table>
			<tr><th><h1><xsl:value-of select="@name"/></h1>
			<p class='type'><xsl:value-of select="@type"/></p>
			<p class='subscribers'>Subscribers: <xsl:value-of select="@subscribers"/></p></th></tr>
		<xsl:apply-templates/>
		
		</table>
	</xsl:template>
	
	<xsl:template match="article">
			<tr><td><p class='id'>Id: <xsl:value-of select="./@id"/></p>
			<p class='time'><xsl:value-of select="@time"/></p>	

				<h2><xsl:value-of select="./heading"/></h2>
				<p><xsl:value-of select="./text"/></p></td></tr>
				<xsl:choose>
					<xsl:when test="./comment">	
						<tr><td class='tdcomment'><p class='comment'><xsl:value-of select="./comment/@description"/></p></td></tr>
					</xsl:when>
				</xsl:choose>	

			
		
	</xsl:template>
</xsl:stylesheet>
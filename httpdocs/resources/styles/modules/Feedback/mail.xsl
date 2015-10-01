<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

	<xsl:template match="FEEDBACK-MAIL">
		<table>
			<xsl:apply-templates select="FIELD" mode="feedback"/>
		</table>
	</xsl:template>

	<xsl:template match="FIELD" mode="feedback">
		<tr>
			<td>
				<xsl:value-of select="@CAPTION"/>
				<xsl:text>:</xsl:text>
			</td>
			<td>
				<xsl:value-of select="."/>
			</td>
		</tr>
	</xsl:template>

</xsl:stylesheet>
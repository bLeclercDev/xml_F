<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
	<xsl:output method="xml" indent="yes" />
	<xsl:template match="/jeux">
		<jeux>
			<xsl:for-each select="jeu">
				<xsl:sort select="année"></xsl:sort>
				<jeu année="{année}" type="{@type}">
					<xsl:value-of select="nom" />
				</jeu>
			</xsl:for-each>
		</jeux>
	</xsl:template>
</xsl:stylesheet>
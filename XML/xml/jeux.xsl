<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
	<xsl:output method="xml" indent="yes" />
	<xsl:template match="/jeux">
		<jeux>
			<xsl:for-each select="jeu">
				<jeu>
					<nom>
						<xsl:value-of select="nom" />
					</nom>
				</jeu>
			</xsl:for-each>
		</jeux>
	</xsl:template>
</xsl:stylesheet>
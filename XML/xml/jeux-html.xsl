<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE xsl:stylesheet  [
    <!ENTITY nbsp   "&#160;">
    <!ENTITY copy   "&#169;">
    <!ENTITY reg    "&#174;">
    <!ENTITY trade  "&#8482;">
    <!ENTITY mdash  "&#8212;">
    <!ENTITY ldquo  "&#8220;">
    <!ENTITY rdquo  "&#8221;"> 
    <!ENTITY pound  "&#163;">
    <!ENTITY yen    "&#165;">
    <!ENTITY euro   "&#8364;">
]>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:output method="html" encoding="utf-8" doctype-public="-//W3C//DTD XHTML 1.0 Transitional//EN" doctype-system="http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"/>
<xsl:template match="/jeux">
    <html xmlns="http://www.w3.org/1999/xhtml">
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
            <title>Mise en forme avec XSLT</title>
        </head>

        <body>
            <h3>Affiche les jeux avec un foreach</h3>
            <table width="1000" border="1" cellspacing="0" cellpadding="0">
                <tr>
                    <th scope="col">Nom</th>
                    <th scope="col">Type</th>
                    <th scope="col">Année</th>
                </tr>
                <xsl:for-each select="jeu">
                    <tr>
                        <td><xsl:value-of select="nom"/></td>
                        <td><xsl:value-of select="@type"/></td>
                        <td><xsl:value-of select="année"/></td>
                    </tr>
                </xsl:for-each>
            </table>
            <br/> <!-- balise autofermant, </br> et <br> ne marchent pas -->
            <h3>Sort les jeux en fonction du nom</h3>
            <table width="1000" border="1" cellspacing="0" cellpadding="0">
                <tr>
                    <th scope="col">Nom</th>
                    <th scope="col">Type</th>
                    <th scope="col">Année</th>
                </tr>
                <xsl:for-each select="jeu">
                    <xsl:sort select="nom"></xsl:sort>
                    <tr>
                        <td><xsl:value-of select="nom"/></td>
                        <td><xsl:value-of select="@type"/></td>
                        <td><xsl:value-of select="année"/></td>
                    </tr>
                </xsl:for-each>
            </table>
            <br/>
            <h3>Ajout des if</h3>
            <table width="1000" border="1" cellspacing="0" cellpadding="0">
                <tr>
                    <th scope="col">Nom</th>
                    <th scope="col">Type</th>
                    <th scope="col">Année</th>
                    <th scope="col">Commentaire</th>
                </tr>
                <xsl:for-each select="jeu">
                    <xsl:sort  select="nom"></xsl:sort>
                    <tr>
                        <td><xsl:value-of select="nom"/></td>
                        <td><xsl:value-of select="@type"/></td>
                        <td><xsl:value-of select="année"/></td>
                        <td>
                            <xsl:if test="nom = 'The Elder Scrolls V : Skyrim'">Billy adore ce jeu.</xsl:if>
                            <xsl:if test="@type = 'FPS'">Aucune personne censée n'aime les CoD...</xsl:if>
                        </td>
                    </tr>
                </xsl:for-each>
            </table>

        </body>
    </html>
</xsl:template>
</xsl:stylesheet>

<!-- ajout de sort et de if
 or nom = 'Sid Meier\'s Civilization V' -->
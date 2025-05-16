<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0"
    xmlns:xsl="http://www.w3.org/1999/XSL/Transform">


    <xsl:template match="/students">
        <html>
            <head>
                <title>Student Application</title>
                <style>
                    table { border-collapse: collapse; width: 50%; }
                    th, td { border: 1px solid black; padding: 8px; text-align: left; }
                    th { background-color: #f2f2f2; }
                </style>
            </head>
            <body>
                <h2>Student Result</h2>
                <table>
                    <tr>
                        <th>Roll No</th>
                        <th>Name</th>
                        <th>Marks</th>
                        <th>Status</th>
                    </tr>
                    
              
                    <xsl:for-each select="student">
                        <tr>
                            <td><xsl:value-of select="rollno"/></td>
                            <td><xsl:value-of select="name"/></td>
                            <td><xsl:value-of select="marks"/></td>
                            <td>
                                <xsl:choose>
                                    <xsl:when test="marks &gt;= 40">
                                        <xsl:text>Pass</xsl:text>
                                    </xsl:when>
                                    <xsl:otherwise>
                                        <xsl:text>Fail</xsl:text>
                                    </xsl:otherwise>
                                </xsl:choose>
                            </td>
                        </tr>
                    </xsl:for-each>
                </table>
            </body>
        </html>
    </xsl:template>

</xsl:stylesheet>

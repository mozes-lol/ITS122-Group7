<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform" xmlns="http://archery.club/roles">
    
    <!-- XSLT to transform roles.xml into HTML Table format -->
    <xsl:output method="html" indent="yes" encoding="UTF-8"/>
    
    <xsl:template match="/">
        <html>
            <head>
                <title>Pasig Archery Club - Role Permissions Matrix</title>
                <style>
                    body {
                        font-family: Arial, sans-serif;
                        background-color: #f9fafb;
                        padding: 20px;
                    }
                    h1 {
                        color: #667eea;
                        text-align: center;
                    }
                    h2 {
                        color: #764ba2;
                        margin-top: 2rem;
                        border-bottom: 2px solid #667eea;
                        padding-bottom: 10px;
                    }
                    table {
                        width: 100%;
                        border-collapse: collapse;
                        margin: 20px 0;
                        background: white;
                        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
                    }
                    th, td {
                        border: 1px solid #e5e7eb;
                        padding: 12px;
                        text-align: left;
                    }
                    th {
                        background-color: #667eea;
                        color: white;
                        font-weight: bold;
                    }
                    tr:nth-child(even) {
                        background-color: #f9fafb;
                    }
                    tr:hover {
                        background-color: #f0f4ff;
                    }
                    .role-header {
                        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
                        color: white;
                        padding: 15px;
                        margin: 20px 0;
                        border-radius: 8px;
                    }
                    .role-name {
                        font-size: 1.3em;
                        font-weight: bold;
                        margin: 0;
                    }
                    .role-desc {
                        font-size: 0.9em;
                        opacity: 0.9;
                        margin: 5px 0 0 0;
                    }
                    .permission-list {
                        list-style-type: none;
                        margin: 10px 0;
                    }
                    .permission-list li {
                        padding: 8px 0;
                        border-bottom: 1px solid #e5e7eb;
                    }
                    .permission-list li:last-child {
                        border-bottom: none;
                    }
                    .permission-id {
                        color: #667eea;
                        font-weight: bold;
                        font-size: 0.85em;
                    }
                    .menu-item {
                        background: #f0f4ff;
                        padding: 8px 12px;
                        margin: 5px 0;
                        border-left: 4px solid #667eea;
                        border-radius: 4px;
                    }
                </style>
            </head>
            <body>
                <h1>🏹 Pasig Archery Club - Role-Based Access Control (RBAC)</h1>
                <p style="text-align:center; color:#666;">System Configuration Document</p>
                
                <xsl:apply-templates select="//role"/>
            </body>
        </html>
    </xsl:template>

    <!-- Role Template -->
    <xsl:template match="role">
        <div class="role-header">
            <p class="role-name"><xsl:value-of select="@name"/> (ID: <xsl:value-of select="@id"/>)</p>
            <p class="role-desc"><xsl:value-of select="description"/></p>
        </div>

        <!-- Permissions Section -->
        <h2>Permissions for <xsl:value-of select="@name"/></h2>
        <ul class="permission-list">
            <xsl:for-each select="permissions/permission">
                <li><span class="permission-id">[<xsl:value-of select="@id"/>]</span> - <xsl:value-of select="."/></li>
            </xsl:for-each>
        </ul>

        <!-- Menu Items Section -->
        <xsl:if test="menu-items/menu">
            <h3>Dashboard Menu Items for <xsl:value-of select="@name"/></h3>
            <xsl:for-each select="menu-items/menu">
                <div class="menu-item">
                    <span><xsl:value-of select="@icon"/></span>
                    <a href="{@href}" style="color: #667eea; font-weight: bold; margin-left: 5px;">
                        <xsl:value-of select="@label"/>
                    </a>
                </div>
            </xsl:for-each>
        </xsl:if>

        <hr style="margin: 2rem 0; border: none; border-top: 1px solid #e5e7eb;"/>
    </xsl:template>

</xsl:stylesheet>

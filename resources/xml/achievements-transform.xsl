<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform" xmlns="http://archery.club/achievements">
    
    <!-- XSLT to transform achievements.xml into HTML cards -->
    <xsl:output method="html" indent="yes" encoding="UTF-8"/>
    
    <xsl:template match="/">
        <html>
            <head>
                <title>Pasig Archery Club - Achievement System</title>
                <style>
                    body {
                        font-family: 'Instrument Sans', Arial, sans-serif;
                        background-color: #f9fafb;
                        padding: 20px;
                        margin: 0;
                    }
                    .container {
                        max-width: 1000px;
                        margin: 0 auto;
                    }
                    h1 {
                        color: #667eea;
                        text-align: center;
                        margin-bottom: 10px;
                    }
                    .metadata {
                        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
                        color: white;
                        padding: 15px;
                        border-radius: 8px;
                        margin-bottom: 30px;
                        text-align: center;
                    }
                    .metadata p {
                        margin: 5px 0;
                    }
                    .achievements-grid {
                        display: grid;
                        grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
                        gap: 20px;
                        padding: 20px 0;
                    }
                    .achievement-card {
                        background: white;
                        border-radius: 8px;
                        padding: 20px;
                        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
                        text-align: center;
                        transition: transform 0.3s;
                    }
                    .achievement-card:hover {
                        transform: translateY(-5px);
                        box-shadow: 0 5px 15px rgba(0,0,0,0.15);
                    }
                    .icon {
                        font-size: 3em;
                        margin-bottom: 10px;
                    }
                    .achievement-name {
                        font-size: 1.2em;
                        font-weight: bold;
                        color: #333;
                        margin: 10px 0;
                    }
                    .achievement-desc {
                        color: #666;
                        font-size: 0.9em;
                        margin: 8px 0;
                    }
                    .achievement-meta {
                        display: grid;
                        grid-template-columns: 1fr 1fr;
                        gap: 10px;
                        margin-top: 15px;
                        padding-top: 15px;
                        border-top: 1px solid #e5e7eb;
                        font-size: 0.8em;
                    }
                    .meta-item {
                        text-align: center;
                    }
                    .meta-label {
                        color: #999;
                        font-size: 0.8em;
                    }
                    .meta-value {
                        color: #333;
                        font-weight: bold;
                    }
                    .category-badge {
                        display: inline-block;
                        background: #667eea;
                        color: white;
                        padding: 4px 10px;
                        border-radius: 20px;
                        font-size: 0.75em;
                        margin-top: 10px;
                    }
                </style>
            </head>
            <body>
                <div class="container">
                    <h1>🏹 Pasig Archery Club - Achievement System</h1>
                    
                    <div class="metadata">
                        <xsl:apply-templates select="//metadata"/>
                    </div>
                    
                    <div class="achievements-grid">
                        <xsl:apply-templates select="//achievement"/>
                    </div>
                </div>
            </body>
        </html>
    </xsl:template>

    <!-- Metadata Template -->
    <xsl:template match="metadata">
        <p><strong><xsl:value-of select="system"/></strong></p>
        <p>Data Type: <xsl:value-of select="dataType"/></p>
        <p>Total Achievements: <xsl:value-of select="totalAchievements"/></p>
        <p>Last Updated: <xsl:value-of select="lastUpdated"/></p>
    </xsl:template>

    <!-- Achievement Card Template -->
    <xsl:template match="achievement">
        <div class="achievement-card">
            <div class="icon"><xsl:value-of select="@icon"/></div>
            <div class="achievement-name"><xsl:value-of select="name"/></div>
            <div class="achievement-desc"><xsl:value-of select="description"/></div>
            <span class="category-badge"><xsl:value-of select="category"/></span>
            
            <div class="achievement-meta">
                <div class="meta-item">
                    <div class="meta-label">Points</div>
                    <div class="meta-value"><xsl:value-of select="pointsRewarded"/> pts</div>
                </div>
                <div class="meta-item">
                    <div class="meta-label">Awarded</div>
                    <div class="meta-value"><xsl:value-of select="totalAwarded"/></div>
                </div>
            </div>
        </div>
    </xsl:template>

</xsl:stylesheet>

<?xml version="1.0" encoding="utf-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
	
	<xsl:template match="/">


				<div id='profile'>
					
					<div id='name'><h1><xsl:value-of select="./statuses/status/user/name"/></h1>
						<a href='https://twitter.com/charliesheen' target='_blank'> @<xsl:value-of select="./statuses/status/user/screen_name"/></a>
						<p class='create'>Created at: <xsl:value-of select="substring(./statuses/status/user/created_at,1,19)"/></p>
					</div>
					
					<div id='followers'><p class='follow'>Followers: <xsl:value-of select="./statuses/status/user/followers_count"/></p>
						<p class='friends'>Friends: <xsl:value-of select="./statuses/status/user/friends_count"/></p>
						<a href="{./statuses/status/user/url}" target='_blank'>www.charliesheen.com</a>
						
					</div>
				</div>
				
				<form method="post" action="charlie.php">
					<select class='color' name="backgroundcolor">
						<option>Choose color for backgrounds</option>
						<option>#<xsl:value-of select="./statuses/status/user/profile_background_color"/> </option>
						<option>#<xsl:value-of select="./statuses/status/user/profile_text_color"/> </option>
						<option>#<xsl:value-of select="./statuses/status/user/profile_link_color"/> </option>
						<option>#<xsl:value-of select="./statuses/status/user/profile_sidebar_fill_color"/> </option>
					</select>
					

					
					<input class='color' type='submit' value='Change!'></input>
					
				</form>
				
				<div id='dis'>
					<div id="firsttext">
						<p><xsl:value-of select="./statuses/status/user/description"/></p>
						
					</div>

				</div>
				
      						



			<xsl:apply-templates/>
			
	</xsl:template>	
	
	<xsl:template match="status">
		<div id='times'>
			<div id="b{./id}">
				<a href='#'><xsl:value-of select="substring(./created_at,1,19)"/>
				<p class='text2'><xsl:value-of select="./text"/></p>
				<div><p class='text1'><xsl:value-of select="./text"/></p></div>
				
				</a>
				
			</div>
			
		</div>
	</xsl:template>
		
</xsl:stylesheet>
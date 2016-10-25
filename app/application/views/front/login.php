
<div id="main-box" class="full-width">
<div id="main">
	<div class="signup-panel">

		<div class="left">
			<h2><span>Log in</span></h2>
			<div class="content-padding">
				<p class="p-padding">An euripidis assentior accommodare usu, ut eam fabellas facilisi perpetua. Accumsan scripserit cu mel, ut dolorem adolescens per.</p>
				<div class="login-passes">
					<b>Or you can use passports:</b>
					<a href="#" class="strike-tooltip" title="Use Facebook.com passport">
						<img src="<?php echo base_url();?>webroot/images/social-icon-facebook.png" alt="" />
					</a>
					<a href="#" class="strike-tooltip" title="Use Twitter.com passport">
						<img src="<?php echo base_url();?>webroot/images/social-icon-twitter.png" alt="" />
					</a>
					<a href="#" class="strike-tooltip" title="Use Steampowered.com passport">
						<img src="<?php echo base_url();?>webroot/images/social-icon-steam.png" alt="" />
					</a>
					<a href="#" class="strike-tooltip" title="Use Google.com passport">
						<img src="<?php echo base_url();?>webroot/images/social-icon-google.png" alt="" />
					</a>
				</div>
				<div class="the-form" style="margin-top:40px;">
					<form action="" method="post">

						<p>
							<span class="the-error-msg"><i class="fa fa-warning"></i>You got an error</span>
							<!-- <span class="the-success-msg"><i class="fa fa-check"></i>This is success</span> -->
							<!-- <span class="the-alert-msg"><i class="fa fa-warning"></i>This is alert message</span> -->
						</p>

						<p>
							<label for="login_username">Username:</label>
							<input type="text" name="login_username" id="login_username" value="" />
						</p>

						<p>
							<label for="login_password">Password:</label>
							<input type="password" name="login_password" id="login_password" value="" />
						</p>

						<p>
							<label for="">&nbsp;</label>
							<input type="checkbox" name="login_remember" id="login_remember" value="" />

							<label class="iiiii" for="login_remember">Remember me</label>
						</p>

						<p class="form-footer">
							<input type="submit" name="login_submit" id="login_submit" value="Log in" />
						</p>

						<p style="margin-top:40px;">
							<span class="info-msg">If you don't have an account, <a href="signup.html">sign up</a> !<br /><br />If lost password <a href="signup-password.html">click here</a> and we will help you to reset !</span>
						</p>

					</form>
				</div>

			</div>
		</div>

		<div class="right">
			<h2><span>What is Revelio ?</span></h2>
			<div class="content-padding">
				
				<div class="form-split-about">
					<p class="p-padding">Lorem ipsum dolor sit amet, natum referrentur sea no. Sensibus definitionem necessitatibus id vim, eu ornatus intellegat argumentum nam. Ius modo interpretaris at, alia erat pri te. An euripidis assentior accommodare usu, ut eam fabellas facilisi perpetua. Accumsan scripserit cu mel, ut dolorem adolescens per.</p>

					<ul>
						<li>
							<i class="fa fa-picture-o"></i>
							<b>Id ius facete urbanitas concludaturque mea</b>
							<p class="p-padding">Ius modo interpretaris at, alia erat pri te. An euripidis assentior accommodare usu, ut eam fabellas facilisi perpetua.</p>
						</li>
						
						<li>
							<i class="fa fa-trophy"></i>
							<b>Id ius facete urbanitas concludaturque mea</b>
							<p class="p-padding">Ius modo interpretaris at, alia erat pri te. An euripidis assentior accommodare usu, ut eam fabellas facilisi perpetua. Accumsan scripserit cu mel, ut dolorem adolescens per.</p>
						</li>

						<li>
							<i class="fa fa-microphone"></i>
							<b>Id ius facete urbanitas concludaturque mea</b>
							<p class="p-padding">Ius modo interpretaris at, alia erat pri te. An euripidis assentior accommodare usu, ut eam fabellas facilisi perpetua. Accumsan scripserit cu mel, ut dolorem adolescens per.</p>
						</li>
						
						<li>
							<i class="fa fa-comments"></i>
							<b>Id ius facete urbanitas concludaturque mea</b>
							<p class="p-padding">Ius modo interpretaris at, alia erat pri te. An euripidis assentior accommodare usu, ut eam fabellas facilisi perpetua.</p>
						</li>
					</ul>
					
				</div>
				
			</div>
		</div>

		<div class="clear-float"></div>
	</div>
	
</div>

<div class="clear-float"></div>

</div>
</div>
</div>
<style>
/* Man content & sidebar top lne, default #256193 */
#sidebar .panel,
#main-box #main {
	border-top: 5px solid #256193;
}

/* Slider colors, default #256193 */
a.featured-select,
#slider-info .padding-box ul li:before,
.home-article.right ul li a:hover {
	background-color: #256193;
}

/* Button color, default #256193 */
.panel-duel-voting .panel-duel-vote a {
	background-color: #256193;
}

/* Menu background color, default #000 */
#menu-bottom.blurred #menu > .blur-before:after {
	background-color: #000;
}

/* Top menu background, default #0D0D0D */
#header-top {
	background: #0D0D0D;
}

/* Sidebar panel titles color, default #333333 */
#sidebar .panel > h2 {
	color: #333333;
}

/* Main titles color, default #353535 */
#main h2 span {
	color: #353535;
}

/* Selection color, default #256193 */
::selection {
	background: #256193;
}

/* Links hover color, default #256193 */
.article-icons a:hover,
a:hover {
	color: #256193;
}

/* Image hover background, default #256193 */
.article-image-out,
.article-image {
	background: #256193;
}

/* Image hover icons color, default #256193 */
span.article-image span .fa {
	color: #256193;
}
</style>
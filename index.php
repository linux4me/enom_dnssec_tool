<?php
	//define('LIVE', 0);
	define('LIVE', 1);
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>eNom DNSSEC Tool</title>
		<?php
			if (LIVE == 1) {
				?>
					<link rel="stylesheet" href="css/main-min.css" />
				<?php
			} else {
				?>
					<link rel="stylesheet" href="css/main.css" />
				<?php
			}
		?>
		<link rel="shortcut icon" href="/favicon.ico" />
		<script src="js/jquery-3.4.1.min.js"></script>
		<?php
			if (LIVE == 1) {
				?>
					<script src="js/main-min.js"></script>
				<?php
			} else {
				?>
					<script src="js/main.js"></script>
				<?php
			}
		?>
	</head>
	<body>
		<div id="wrapper">
			<div id="container">
				<div id="header"><a href="/dnssec/"><img src="css/images/logo.png" width="300" height="141" alt="eNom DNSSEC Tool" /></a></div>
				<div id="content">
					<p class="center">Whitelist your IP address <?php echo $_SERVER['REMOTE_ADDR']; ?> on eNom.</p>
					<form name="mainform" id="mainform">
						<label for="command">Command:</label>
						<select name="command" id="command">
							<option value="AddDnsSec">Add DNSSEC</option>
							<option value="GetDnsSec">Get DNSSEC</option>
							<option value="DeleteDnsSec">Delete DNSSEC</option>
						</select><br />
						<label for="uid">eNom User ID:</label>
						<input type="text" name="uid" id="uid" required="required" /><br />
						<label for="pw">eNom Password:</label>
						<input type="password" name="pw" id="pw" required="required" /><br />
						<label for="alg" class="hide">Algorithm:</label>
						<select name="alg" id="alg" class="hide disable">
							<option value="1">1 - RSA/MD5</option>
							<option value="2">2 - Diffie-Hellman</option>
							<option value="3">3 - DSA/SHA-1</option>
							<option value="5">5 - RSA/SHA-1</option>
							<option value="6">6 - DSA-NSEC3-SHA-1</option>
							<option value="7">7 - RSASHA1-NSEC3-SHA1</option>
							<option value="8" selected="selected">8 - RSA/SHA-256 (default)</option>
							<option value="10">10 - RSA/SHA-512</option>
							<option value="12">12 - GOST R 34.10-2001</option>
							<option value="13">13 - ECDSA Curve P-256 with SHA-256</option>
							<option value="14">14 - ECDSA Curve P-384 with SHA-384</option>
						</select><br />
						<label for="digesttype" class="hide">Digest Type:</label>
						<select name="digesttype" id="digesttype" class="hide disable">
							<option value="1">1 - SHA-1</option>
							<option value="2" selected="selected">2 - SHA-256 (default)</option>
						</select><br />
						<label for="sld">SLD:</label>
						<input type="text" name="sld" id="sld" class="reset" placeholder="e.g., &quot;mydomain&quot;" required="required" /><br />
						<label for="tld">TLD:</label>
						<input type="text" name="tld" id="tld" placeholder="e.g., &quot;com&quot;" value="com" required="required" /><br />
						<label for="digest" class="hide">Digest:</label>
						<input type="text" class="hide reset disable" name="digest" id="digest" placeholder="SHA-256 (Algorithm 2)" required="required" /><br />
						<label for="keytag" class="hide">Key Tag:</label>
						<input type="text"  class="hide reset disable" name="keytag" id="keytag" required="required" /><br />
						<div class="buttonholder">
							<input type="submit" name="submit" id="submit" disabled="disabled" value="Submit" /> <button name="resetfields" id="resetfields">Reset</button>
						</div>
					</form>
					<div id="resultsdiv">
						<iframe name="results" id="results"></iframe>
					</div>
				</div>
				<div id="footer">
					<hr />
					&copy; 2019 Trackitweb - All rights reserved.
				</div>
			</div>
		</div>
	</body>
</html>
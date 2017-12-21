<?php defined("NET2FTP") or die("Direct access to this location is not allowed."); ?>
<!-- Template /skins/shinra/loginform.php begin -->
						<div id="accordion" class="accordion">
<?php	// The height of the Basic form must be smaller than the height of the Advanced form, ?>
<?php	// for this to be possible, set "autoHeight:false" in /skins/shinra/js/jquery-ui-1.8.13.custom.min.js ?>

							<h6><a href="#"><?php echo __("Basic FTP login"); ?></a></h6>
							<div>
								<form id="LoginForm1" action="<?php echo $net2ftp_globals["action_url"]; ?>" method="post" onsubmit="return CheckInput(this);">
									<fieldset>
<?php /* ----- FTP server ----- */ ?>
										<div>
											<label><?php echo __("FTP server"); ?></label>
<?php											if ($ftpserver["inputType"] == "text") { ?>
												<input type="text" name="ftpserver" value="<?php echo $ftpserver["list"][1]; ?>" class="form-poshytip" title="<?php echo __("Example"); ?>: ftp.server.com, 192.123.45.67" />
<?php											} elseif ($ftpserver["inputType"] == "select") { ?>
												<select name="ftpserver">
<?php												for ($i=1; $i<=sizeof($ftpserver["list"]); $i=$i+1) { ?>
													<option value="<?php echo $ftpserver["list"][$i]; ?>" <?php echo $ftpserver["list"][$i]["selected"]; ?>><?php echo $ftpserver["list"][$i]; ?></option>
<?php												} // end for ?>
												</select>
<?php											} elseif ($ftpserver["inputType"] == "hidden") { ?>
												<input type="hidden" name="ftpserver" value="<?php echo $ftpserver["list"][1]; ?>" />
												<b><?php echo $ftpserver["list"][1]; ?></b>
<?php											} ?>
<?php /* ----- FTP server port ----- */ ?>
<?php								if ($ftpserverport["inputType"] == "text") { ?>
									<input type="text" name="ftpserverport" value="<?php echo $ftpserverport["defaultvalue_ftp"]; ?>" style="position: absolute; left: 370px; width: 45px;" maxlength="5" class="form-poshytip" title="<?php echo __("Enter the FTP server port (21 for FTP, 22 for FTP SSH or 990 for FTP SSL) - if you're not sure leave it to 21"); ?>" />

<?php								} else { ?>
									<input type="hidden" name="ftpserverport" value="<?php echo $ftpserverport["defaultvalue_ftp"]; ?>" />
<?php								} ?>

										</div>
<?php /* ----- Username ----- */ ?>
										<div>
											<label><?php echo __("Username"); ?></label>
											<input type="text" name="username" value="<?php echo $username; ?>" class="form-poshytip" title="<?php echo __("Enter your username"); ?>" />
										</div>

<?php /* ----- Password ----- */ ?>
										<div>
											<label><?php echo __("Password"); ?></label>
											<input type="password" name="password" value="<?php echo $password; ?>" class="form-poshytip" title="<?php echo __("Enter your password"); ?>" />
										</div>
<?php /* ----- Login button ----- */ ?>
										<input type="submit" id="LoginButton1" name="Login" value="<?php echo __("Login"); ?>" alt="<?php echo __("Login"); ?>" />
									</fieldset>
									<input type="hidden" name="protocol"  value="FTP" />
									<input type="hidden" name="state"     value="browse" />
									<input type="hidden" name="state2"    value="main" />
								</form>
							</div>





							<h6><a href="#"><?php echo __("Basic SSH login"); ?></a></h6>
							<div>
								<form id="LoginForm2" action="<?php echo $net2ftp_globals["action_url"]; ?>" method="post" onsubmit="return CheckInput(this);">
									<fieldset>
<?php /* ----- FTP server ----- */ ?>
										<div>
											<label><?php echo __("SSH server"); ?></label>
<?php											if ($ftpserver["inputType"] == "text") { ?>
												<input type="text" name="ftpserver" value="<?php echo $ftpserver["list"][1]; ?>" class="form-poshytip" title="<?php echo __("Example"); ?>: ftp.server.com, 192.123.45.67" />
<?php											} elseif ($ftpserver["inputType"] == "select") { ?>
												<select name="ftpserver">
<?php												for ($i=1; $i<=sizeof($ftpserver["list"]); $i=$i+1) { ?>
													<option value="<?php echo $ftpserver["list"][$i]; ?>" <?php echo $ftpserver["list"][$i]["selected"]; ?>><?php echo $ftpserver["list"][$i]; ?></option>
<?php												} // end for ?>
												</select>
<?php											} elseif ($ftpserver["inputType"] == "hidden") { ?>
												<input type="hidden" name="ftpserver" value="<?php echo $ftpserver["list"][1]; ?>" />
												<b><?php echo $ftpserver["list"][1]; ?></b>
<?php											} ?>
<?php /* ----- FTP server port ----- */ ?>
<?php								if ($ftpserverport["inputType"] == "text") { ?>
									<input type="text" name="ftpserverport" value="<?php echo $ftpserverport["defaultvalue_ssh"]; ?>" style="position: absolute; left: 370px; width: 45px;" maxlength="5" class="form-poshytip" title="<?php echo __("Enter the FTP server port (21 for FTP, 22 for FTP SSH or 990 for FTP SSL) - if you're not sure leave it to 21"); ?>" />

<?php								} else { ?>
									<input type="hidden" name="ftpserverport" value="<?php echo $ftpserverport["defaultvalue_ssh"]; ?>" />
<?php								} ?>
										</div>

<?php /* ----- Username ----- */ ?>
										<div>
											<label><?php echo __("Username"); ?></label>
											<input type="text" name="username" value="<?php echo $username; ?>" class="form-poshytip" title="<?php echo __("Enter your username"); ?>" />
										</div>

<?php /* ----- Password ----- */ ?>
										<div>
											<label><?php echo __("Password"); ?></label>
											<input type="password" name="password" value="<?php echo $password; ?>" class="form-poshytip" title="<?php echo __("Enter your password"); ?>" />
										</div>

<?php /* ----- Check fingerprint ----- */ ?>
										<div>
											<label><?php echo __("Check the SSH server's public key fingerprint"); ?></label>
											<input type="text" name="sshfingerprint" value="<?php echo $sshfingerprint; ?>" class="form-poshytip" style="background-color: #f1f1f1;" title="<?php echo __("Get the SSH server's public key fingerprint before logging in to verify the server's identity"); ?>" readonly="readonly" />
											<input type="button" id="smallbutton" name="<?php echo __("Get fingerprint"); ?>" value="<?php echo __("Get fingerprint"); ?>" alt="<?php echo __("Get fingerprint"); ?>" onclick="GetFingerprint(form);" style="position: absolute; left: 370px; width: 100px;" />
										</div>

<?php /* ----- Login button ----- */ ?>
										<input type="submit" id="LoginButton2" name="Login" value="<?php echo __("Login"); ?>" alt="<?php echo __("Login"); ?>" />
									</fieldset>
									<input type="hidden" name="state"     value="browse" />
									<input type="hidden" name="state2"    value="main" />
									<input type="hidden" name="protocol"  value="FTP-SSH" />
								</form>
							</div>





							<h6><a href="#"><?php echo __("Advanced login"); ?></a></h6>
							<div>
								<form id="LoginForm3" action="<?php echo $net2ftp_globals["action_url"]; ?>" method="post" onsubmit="return CheckInput(this);">
									<fieldset>

<?php /* ----- Protocol ----- */ ?>
										<div style="margin-top: 10px;">
											<label><?php echo __("Protocol"); ?></label>
											<select name="protocol" id="protocol" onchange="do_protocol(form);" style="width: 140px;" class="input_select">
<?php
for ($i=1; $i<=sizeof($protocol["list"]); $i++) {
	$selected = "";
	if ($i == 1) { $selected = "selected"; }
	echo "<option value=\"" . $protocol["list"][$i]["value"] . "\" $selected>" . $protocol["list"][$i]["name"] . "</option>\n";
} // end for
?>
											</select>
										</div>
<?php /* ----- FTP server ----- */ ?>
										<div style="margin-top: 10px;">
											<label><?php echo __("FTP server"); ?></label>
<?php											if ($ftpserver["inputType"] == "text") { ?>
												<input type="text" name="ftpserver" value="<?php echo $ftpserver["list"][1]; ?>" class="form-poshytip" title="<?php echo __("Example"); ?>: ftp.server.com, 192.123.45.67" />
<?php											} elseif ($ftpserver["inputType"] == "select") { ?>
												<select name="ftpserver">
<?php												for ($i=1; $i<=sizeof($ftpserver["list"]); $i=$i+1) { ?>
													<option value="<?php echo $ftpserver["list"][$i]; ?>" <?php echo $ftpserver["list"][$i]["selected"]; ?>><?php echo $ftpserver["list"][$i]; ?></option>
<?php												} // end for ?>
												</select>
<?php											} elseif ($ftpserver["inputType"] == "hidden") { ?>
												<input type="hidden" name="ftpserver" value="<?php echo $ftpserver["list"][1]; ?>" />
												<b><?php echo $ftpserver["list"][1]; ?></b>
<?php											} ?>
<?php /* ----- FTP server port ----- */ ?>
<?php								if ($ftpserverport["inputType"] == "text") { ?>
									<input type="text" name="ftpserverport" value="<?php echo $ftpserverport["defaultvalue_ftp"]; ?>" style="position: absolute; left: 480px; width: 45px;" maxlength="5" />

<?php								} else { ?>
									<input type="hidden" name="ftpserverport" value="<?php echo $ftpserverport["defaultvalue_ftp"]; ?>" />
<?php								} ?>

<?php /* ----- Username ----- */ ?>
										<div style="margin-top: 10px;">
											<label><?php echo __("Username"); ?></label>
											<input type="text" name="username" value="<?php echo $username; ?>" class="form-poshytip" title="Enter your username" />
										</div>
<?php /* ----- Password ----- */ ?>
										<div style="margin-top: 10px;">
											<label><?php echo __("Password"); ?></label>
											<input type="password" name="password" value="<?php echo $password; ?>" class="form-poshytip" title="Enter your password" />
<?php /* ----- Anonymous checkbox ----- */ ?>
											<input name="anonymous" value="1" onclick="do_anonymous(form);" type="checkbox" style="position: absolute; left: 325px; top: 130px;" />
											<div style="position: absolute; left: 500px; top: 130px;"><?php echo __("Anonymous"); ?></div>
										</div>
<?php /* ----- Initial directory ----- */ ?>
										<div style="margin-top: 10px;">
											<label><?php echo __("Initial directory"); ?></label>
											<input type="text" name="directory" value="<?php echo $directory; ?>" class="form-poshytip" title="Enter the initial directory" />
<?php /* ----- Passive mode ----- */ ?>
											<input name="passivemode" value="yes" type="checkbox" <?php echo $passivemode["checked"]; ?> style="position: absolute; left: 325px; top: 175px;" />
											<div style="position: absolute; left: 500px; top: 175px;"><?php echo __("Passive mode"); ?></div>
										</div>
<?php /* ----- FTP mode ----- */ ?>
										<div style="margin-top: 10px;">
											<label><?php echo __("FTP mode"); ?></label>
<select name="ftpmode" id="ftpmode"  style="width:120px;" class="input_select">
<option value="binary" selected="selected">Binary</option>
<option value="automatic" ><?php echo __("Automatic"); ?></option>
</select>
										</div>
<?php /* ----- Check fingerprint ----- */ ?>
										<div style="margin-top: 10px;">
											<label><?php echo __("Fingerprint"); ?></label>
											<input type="text" name="sshfingerprint" value="<?php echo $sshfingerprint; ?>" class="form-poshytip" style="background-color: #f1f1f1;" title="<?php echo __("Get the SSH server's public key fingerprint before logging in to verify the server's identity"); ?>" readonly="readonly" />
											<input type="button" id="smallbutton" name="<?php echo __("Get fingerprint"); ?>" value="<?php echo __("Get fingerprint"); ?>" alt="<?php echo __("Get fingerprint"); ?>" onclick="GetFingerprint(form);" style="position: absolute; left: 480px; width: 100px;" />
										</div>
<?php /* ----- Login button ----- */ ?>
										<input type="submit" id="LoginButton3" name="Login" value="<?php echo __("Login"); ?>" alt="<?php echo __("Login"); ?>" />
										<br />
									</fieldset>
									<input type="hidden" name="state"     value="browse" />
									<input type="hidden" name="state2"    value="main" />
								</form>
							</div>
						</div>

<script type="text/javascript"><!--
	document.forms['LoginForm1'].<?php echo $focus; ?>.focus();
//--></script>

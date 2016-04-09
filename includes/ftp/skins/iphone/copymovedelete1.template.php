<?php defined("NET2FTP") or die("Direct access to this location is not allowed."); ?>
<!-- Template /skins/iphone/copymovedelete1.template.php begin -->

<?php /* ----- Copy or Move: print header table ----- */ ?>
<?php	if ($net2ftp_globals["state2"] == "copy" || $net2ftp_globals["state2"] == "move") { ?>
		<table style="border-color: #000000; border-style: solid; border-width: 1px; margin-left: 5px; margin-right: 5px; padding: 2px;">
			<tr><td>
				<input type="button" class="normalbutton" value="<?php echo __("Set all targetdirectories"); ?>" onclick="CopyValueToAll(document.forms['CopyMoveDeleteForm'], document.forms['CopyMoveDeleteForm'].headerDirectory, 'targetdirectory');" /><br /> 
				<input type="text" name="headerDirectory" value="<?php echo $net2ftp_globals["directory_html"]; ?>" />
				<div style="font-size: 75%;">
					<?php echo __("To set a common target directory, enter that target directory in the textbox above and click on the button \"Set all targetdirectories\"."); ?>
					<?php echo __("Note: the target directory must already exist before anything can be copied into it."); ?>
				</div>
			</td></tr>
		</table>
		<br />
		<table style="border-color: #000000; border-style: solid; border-width: 1px; margin-left: 5px; margin-right: 5px; padding: 2px;">
			<tr>
				<td style="vertical-align: top;" style="width: 40%;"><?php echo __("Different target FTP server:"); ?></td>
				<td>
					<input type="text" class="input" name="ftpserver2" value="" /> port 
					<input type="text" class="input" size="3" maxlength="5" name="ftpserverport2" value="21" />
				</td>
			</tr>
<?php			if ($protocol["inputType"] == "select") { ?>
				<tr>
					<td><?php echo __("Protocol"); ?>:</td>
					<td>
						<select name="protocol">
<?php						for ($i=1; $i<=sizeof($protocol["list"]); $i=$i+1) { ?>
							<option value="<?php echo $protocol["list"][$i]; ?>" <?php echo $protocol["list"][$i]["selected"]; ?>><?php echo $protocol["list"][$i]; ?></option>
<?php						} // end for ?>
						</select>
					</td>
				</tr>
<?php			} // end if ?>
			<tr>
				<td><?php echo __("Username"); ?>:</td>
				<td><input type="text" class="input" name="username2" value="" /></td>
			</tr>
			<tr>
				<td><?php echo __("Password"); ?>:</td>
				<td><input type="password" class="input" name="password2" /></td>
			</tr>
			<tr>
				<td colspan="2">
					<div style="font-size: 75%;">
					<?php echo __("Leave empty if you want to copy the files to the same FTP server."); ?>
					<?php echo __("If you want to copy the files to another FTP server, enter your login data."); ?>
					</div>
				</td>
			</tr>
		</table>
		<br />
<?php	} // end if
	/* ----- Delete: print warning message ----- */
	elseif ($net2ftp_globals["state2"] == "delete") { ?>
		<?php echo __("Are you sure you want to delete these directories and files?"); ?><br />
		<?php echo __("All the subdirectories and files of the selected directories will also be deleted!"); ?><br /><br />
<?php	} // end elseif ?>

<?php /* ----- List of selected entries ----- */ ?>
<?php	for ($i=1; $i<=sizeof($list["all"]); $i++) { ?>
<?php		printDirFileProperties($i, $list["all"][$i], "hidden", ""); ?>
		<input type="hidden" name="list[<?php echo $i; ?>][sourcedirectory]" value="<?php echo $net2ftp_globals["directory_html"]; ?>">
<?php		if     ($net2ftp_globals["state2"] == "copy") {
			if     ($list["all"][$i]["dirorfile"] == "d") { echo __("Copy directory <b>%1\$s</b> to:", $list["all"][$i]["dirfilename"]); }
			elseif ($list["all"][$i]["dirorfile"] == "-") { echo __("Copy file <b>%1\$s</b> to:", $list["all"][$i]["dirfilename"]); }
			elseif ($list["all"][$i]["dirorfile"] == "l") { echo __("Copy symlink <b>%1\$s</b> to:", $list["all"][$i]["dirfilename"]); }
		}
		elseif ($net2ftp_globals["state2"] == "move") {
			if     ($list["all"][$i]["dirorfile"] == "d") { echo __("Move directory <b>%1\$s</b> to:", $list["all"][$i]["dirfilename"]); }
			elseif ($list["all"][$i]["dirorfile"] == "-") { echo __("Move file <b>%1\$s</b> to:", $list["all"][$i]["dirfilename"]); }
			elseif ($list["all"][$i]["dirorfile"] == "l") { echo __("Move symlink <b>%1\$s</b> to:", $list["all"][$i]["dirfilename"]); }
		}
		elseif ($net2ftp_globals["state2"] == "delete") {
			if     ($list["all"][$i]["dirorfile"] == "d") { echo __("Directory <b>%1\$s</b>", $list["all"][$i]["dirfilename"]); }
			elseif ($list["all"][$i]["dirorfile"] == "-") { echo __("File <b>%1\$s</b>", $list["all"][$i]["dirfilename"]); }
			elseif ($list["all"][$i]["dirorfile"] == "l") { echo __("Symlink <b>%1\$s</b>", $list["all"][$i]["dirfilename"]); }
		} 
?>
		<br />
<?php /* ----- Copy or move: ask for options ----- */ ?>
<?php		if ($net2ftp_globals["state2"] == "copy" || $net2ftp_globals["state2"] == "move") { ?>
			<table>
				<tr>
					<td><?php echo __("Target directory:"); ?></td>
					<td>
						<input type="text" class="longinput" name="list[<?php echo $i; ?>][targetdirectory]" value="<?php echo $net2ftp_globals["directory_html"]; ?>" />
					</td>
				</tr>
				<tr><td>
					<?php echo __("Target name:"); ?>      </td><td><input type="text" class="input" name="list[<?php echo $i; ?>][newname]" value="<?php echo $list["all"][$i]["dirfilename_html"]; ?>" />
				</td></tr>
			</table><br />
<?php		} // end if ?>
<?php	} // end for ?>

<!-- Template /skins/iphone/copymovedelete1.template.php end -->

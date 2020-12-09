<!DOCTYPE html>
<html>
	<head>
		<?php include "header.php";?>
		<title>My dwm Status Bar - rethy.xyz</title>
	</head>

	<body>
        <div class="main">
            <div class="menu">
				<?php include "menu.php";?>
                <br>
            </div>

			<h1>My dwm Status Bar</h1>
			<p>
				<a href="files/dwm_bar.png">
					<img src="files/dwm_bar.png" width=650 />
					<br />
					<small><a href="files/dwm_bar.png">Click to view in full</a></small>
				</a>
			</p>

			<p>
				My dwm (dynamic window manager) status bar is a simple bash script. I broke each piece of status information I needed into separate functions for easy management. Here are the functions I use:
				<ul>
					<li>Print MPD current song time</li>
					<li>Print MPD current song name (Artist - Track Name)</li>
					<li>Print current volume percentage</li>
					<li>Print unallocated RAM in Megabytes</li>
					<li>Print current CPU temperature in Celsius</li>
					<li>Print remaining battery power percentage</li>
					<li>Print month and date (month-date) in numerical formats</li>
					<li>Print current time in 24-hour format</li>
				</ul>
			</p>

			<p>Dwm uses xsetroot to display optional status information (i.e., create a status bar).</p>

			<p>
				<small>xsetroot - "The xsetroot program allows you to tailor the appearance of the background ("root") window on a workstation display running X."</small>
				<br />
				<small>Taken from <a href="https://linux.die.net/man/1/xsetroot">xsetroot man page</a></small>
			</p>

			<p>To run my script with dwm, copy and paste my script into a file (or use/create your own), give the file the correct permissions in order to execute (755, 644, etc.), and place the path/to/your/script inside your <code>.xinitrc</code> file. Ensure that it's placed before the <code>exec dwm</code> command to ensure it executes properly.</p>

			<p>
				Your <code>.xinitrc</code> file should be setup something like this: <br />
				<br />
				<code>
					#!/bin/bash <br />
					<br />
					/home/user/path/to/script.sh <br />
					<br />
					exec dwm
				</code>
			</p>

			<hr />

			<p>
				<a href="https://raw.githubusercontent.com/rethyxyz/Scripts/master/dwmbar_e550">Click here</a> to download/view dwm status bar script source code
			</p>

            <div class="footer">
                <br>
				<?php include "footer.php";?>
            </div>
        </div>
	</body>
</html>
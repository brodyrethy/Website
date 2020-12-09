<!DOCTYPE html>
<html>
	<head>
		<?php include "header.php";?>
		<title>Using the Vim Leader Key - rethy.xyz</title>
	</head>

	<body>
        <div class="main">
            <div class="menu">
				<?php include "menu.php";?>
                <br />
            </div>

			<h1>Using the Vim Leader Key</h1>
                <p>I have noticed that a lot of vimmers do not make use of the leader key either at all or to it's fullest potential. In case you don't know, leader is the \ (backslash) key (which can be changed in your <code>.vimrc</code> using <code>let mapleader = ","</code>) on your keyboard.</p>

                <p>Here are a few of the most useful actions you can execute using the leader key (add these to your <code>.vimrc</code> file):</p>

                <p>
                    <ul>
                        <li>Execute current file in browser</li>
                        <ul>
                            <li><code>:map &#60;leader&#62;off :exe ':silent !firefox % &amp;'&#60;CR&#62;</code></li>
                            <ul>
                                <li><code>off</code> stands for <font_red>Open File in Firefox</font_red> </li>
                            </ul>
                        </ul>
                        <li>Open <code>.vimrc</code>/a file as current buffer</li>
                        <ul>
                            <li><code>:map &#60;leader&#62;vrc :e ~/.vimrc&#60;CR&#62;</code></li>
                            <ul>
                                <li><code>vrc</code> stands for <font_red>.VimRC</font_red></li>
                            </ul>
                        </ul>
                        <li>Open a directory</li>
                        <ul>
                            <li><code>:map &#60;leader&#62;gS :e ~/Scripts&#60;CR&#62;</code></li>
                            <ul>
                                <li><code>gS</code> means <font_red>Goto Scripts</font_red></li>
                            </ul>
                        </ul>
                        <li>Split vertically/horizontally</li>
                        <ul>
                            <li><code>:map &#60;leader&#62;c :vsplit&#60;CR&#62;</code></li>
                            <ul>
                                <li><code>c</code> means split <font_red>horizontal</font_red> and is not mnemonic</li>
                            </ul>
                            <li><code>:map &#60;leader&#62;v :split&#60;CR&#62;</code></li>
                            <ul>
                                <li><code>v</code> means split <font_red>vertical</font_red></li>
                            </ul>
                        </ul>
                        <li>Open current directory</li>
                        <ul>
                            <li><code>:map &#60;leader&#62;&#60;leader&#62; :Ex&#60;CR&#62;</code></li>
                            <ul>
                                <li><code>&#60;leader&#62;&#60;leader&#62;</code> is literally just \ (forward slash) twice</li>
                            </ul>
                        </ul>
                    </ul>
                </p>

                <p>If you want just the code:</p>

                <p>
                    <code>:map &#60;leader&#62;off :exe ':silent !firefox % &amp;'&#60;CR&#62;</code>
                    <br>
                    <code>:map &#60;leader&#62;vrc :e ~/.vimrc&#60;CR&#62;</code>
                    <br>
                    <code>:map &#60;leader&#62;gS :e ~/Scripts&#60;CR&#62;</code>
                    <br>
                    <code>:map &#60;leader&#62;c :vsplit&#60;CR&#62;</code>
                    <br>
                    <code>:map &#60;leader&#62;v :split&#60;CR&#62;</code>
                    <br>
                    <code>:map &#60;leader&#62;&#60;leader&#62; :Ex&#60;CR&#62;</code>
                </p>

            <div class="footer">
                <br />
				<?php include "footer.php";?>
            </div>
        </div>
	</body>
</html>
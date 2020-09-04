<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<link rel="stylesheet" type="text/css" href="..\style.css">
		<link rel="icon" href="../files/shroom0.jpg">
		<title>Algorithms - Brody Rethy</title>
	</head>

	<body>
		<div class="menu">
            <img src="../files/shroom0.jpg" height="15px" width="15px">
			<a href="../index.html">Home</a>
            |
			<a href="../articles.html">Articles</a>
            |
			<a href="../resume.html">Resume</a>
            |
			<a href="../downloads.html">Downloads</a>
            |
			<a href="https://github.com/brodyrethy/">GitHub</a>
            |
            <a href="../contact_me.html">Contact Me</a>
            <img src="../files/shroom0.jpg" height="15px" width="15px">
		</div>

        <br>

		<div class="main">
            <h1>Disclaimer</h1>
            <p>
            I do not have a <i>"formal"</i> educational background in Mathematics, therefore most, if not all, of the variable names I use during the explanations are not true to the original mathematical equations and are instead made to be easy to understand.
            The purpose of my explanations are to be able to comprehend how each algorithm works, not so much the theory of them (there is still a bit, though).
            </p>
            <hr>
            <h1>Algorithms <small>(sorted alphabetically)</small></h1>
                <h2>Bubble Sort</h2>
                <img src="../files/construction.gif">

                <h2>Merge Sort</h2>
                <img src="../files/construction.gif">
                <p>
                    <a href="../files/merge_sort.gif"><img src="../files/merge_sort.gif"></a>
                    <br>
                    (By <a href="https://commons.wikimedia.org/w/index.php?title=User:Swfung8&action=edit&redlink=1" class="new" title="User:Swfung8 (page does not exist)"&gt;Swfung8</a&gt; - <span class="int-own-work" lang="en"&gt;Own work</span&gt;, <a href="https://creativecommons.org/licenses/by-sa/3.0" title="Creative Commons Attribution-Share Alike 3.0">CC BY-SA 3.0</a>, <a href="https://commons.wikimedia.org/w/index.php?curid=14961648">Link</a>)
                </p>

                <h2>Quick Sort</h2>
                <p>
                    <a href="../files/quick_sort.gif"><img src="../files/quick_sort.gif"></a>
                    <br>
                    (By <a href="https://en.wikipedia.org/wiki/User:RolandH" class="extiw" title="en:User:RolandH">en:User:RolandH</a>, <a href="http://creativecommons.org/licenses/by-sa/3.0/" title="Creative Commons Attribution-Share Alike 3.0">CC BY-SA 3.0</a>, <a href="https://commons.wikimedia.org/w/index.php?curid=1965827">Link</a>)
                </p>
                <p>
					Unlike other algorithms (bubble sort, <a href="https://www.youtube.com/watch?v=DaPJkYo2quc">bogosort</a>), the quick sort algorithm is speedy due to it's operation using the "divide and conquer" method.
                    Quick sort organizes data into two sub-groups, being items greater and items lower.
                    The number placement is decided through a comparison using the pivot point (which is <b>usually</b> the last number in the list, but can differ from method to method (it's the last number in my example)).
                    Basically, the quick sort algorithm is named quick sort because it's quick (duh).
                </p>
                    Quick sort works like this:
                    <ol>
                        <li>Get total length of sequence (a sequence is just a group of numbers)</li>
                        <ol>
                            <li>This will be used to error check</li>
                            <ol>
                                <li><b>If</b> the sequence <b>is</b> less than <b>one</b>, return sequence (you don't need to sort a single index)</li>
                            </ol>
                        </ol>
                        <li>Take last index of sequence and place into new var named <b>pivot</b></li>
                        <li>Start for loop and to run through sequence</li>
                        <ol>
                            <li>Check if item in sequence is <b>greater</b> than pivot, if so, place into <b>new</b> list named <b>items_greater</b></li>
                            <li>Check if item in sequence is lower than pivot, if so, place into <b>new</b> list named <b>items_lower</b></li>
                        </ol>
                        <li>Finally, output and concatinate the lists items_lower, pivot, and quick_sort</li>
                    </ol>
                <p>
                    Here's my example of code written in Python 3.x:
                    <br>
                    <div class="program">
                        <code><b>def</b> <f_g>quick_sort</f_g>(sequence):</code> <br>
                            <code2>items_greater = []</code2><br>
                            <code2>items_lower = []</code2><br>
                            <br>
                            <code2>length = <f_g>len</f_g>(sequence)</code><br>
                            <code2><f_b>#this means dip out if nothing was given</f_b></code><br>
                            <code2><b>if</b> (length <= <f_g>1</f_g>): </code2><br>
                                <code3><b>return</b> sequence</code3><br>
                            <code2><b>else:</b></code2> <br>
                                <code3><f_b>#pop removes, or "pops" out, if you will, the last item in a list</f_b></code3><br>
                                <code3>pivot = sequence.pop()</code2> <br>
                            <code2><b>for</b> x <b>in</b> sequence:</code2> <br>
                                <code3><b>if</b> (x > pivot):</code3> <br>
                                    <code4>items_greater.append(x)</code4> <br>
                                <code3><b>else</b>:</code3> <br>
                                    <code4>items_lower.append(x)</code4> <br>
                            <code2><b>return</b> quick_sort(items_lower) + [pivot] + quick_sort(items_greater)</code2><br>
							<br>
                        <code>def <f_g>main</f_g>():</code><br>
                            <code2>sequence = [<f_b>1, 20, 1882, 85, 33, 2039, 1287319823, 1293801298301298390, 5893495, 3, 7, 324636, 123, 2, 1293, 93, 1001203</f_b>]</code2><br>
							<br>
                            <code2>print(<f_b>"Before:"</f_b>, sequence)</code2><br>
                            <code2>print(<f_b>"After:"</f_b>, quick_sort(sequence))</code2><br>
							<br>
                        <code>main()</code><br>
                    </div>
                </p>
				<p>
					I feel the code is clear, therefore I won't bother to explain it.
                </p>

                <h2>Binary Search</h2>
                <img src="../files/construction.gif">
		</div>

        <br>

        <div class="footer">
            Last Edited: 2020-05-06
            <br>
            2020 (C) Brody Rethy. All rights reserved.
        </div>
	</body>
</html>
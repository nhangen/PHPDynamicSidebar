<div id="sidebar">
				<?php
						//get current page
						//this will print everything that exists after domain root (i.e. after.com)
						$currentpage = $_SERVER["PHP_SELF"];
						
						if ($currentpage == "/folder/index.php")
						
						// get correct xml variable
						{
							echo "\nHome Feed<br/>";
							feed1();
							}
						
						elseif ($currentpage == "/folder/page2.php")
						
						{
							feed2();
							}
						
						elseif ($currentpage == "/folder/page3.php")
						
						{
							feed3();
							}
						
						elseif ($currentpage == "/folder/page4.php")
						
						{
							feed4();
							}
						
						elseif ($currentpage == "/folder/page5.php")
						
						{
							feed5();
							}
						
						elseif ($currentpage == "/folder/page6.php")
						
						{
							feed6();
							}
						
						else {
							mainfeed();
							}
				?>
			</div><!-- End Sidebar -->
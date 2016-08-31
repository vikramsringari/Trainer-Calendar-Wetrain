<!--
Vikram Sringari
5/25/2016
CSE 154 AC
HW6: ToDoList
This PHP file displays the starting page for login
It keeps track of when someone last loggedin
-->
<?php
	session_start();
	include("commonTrainers.php");
	//redirection(true);
	top_bar();
?>
					<iframe src="https://calendar.google.com/calendar/embed?height=600&amp;wkst=1&amp;bgcolor=%23ffffff&amp;src=q95tl04rgp52o1kjoalkm2hgo0%40group.calendar.google.com&amp;color=%230F4B38&amp;ctz=America%2FNew_York" style="border-width:0" width="800" height="600" frameborder="0" scrolling="no"></iframe>

<?php
	bottom_bar();
?>
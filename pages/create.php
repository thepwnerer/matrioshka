<div class="contentWrapper">
	<p class="contentWritten">
		Post a question. Answer a question. No instant chat. Cuz that's what everything else is for.
		We will be on here to answer questions. Give us a little bit. We have to think like regular human beings too.
	</p>
	<div id="formDiv">
		<form method="get" content='notification' action='../DBClasses/INSERTQUESTION.php'class='contentWritten'>
			<input type='hidden' name='content' value='notification' />
			<label for='title'>Title</label> <br>
			<input type='text' class='outlineMe' name='title' size='27'/>
			<br><br>
			<label for='question'>Question</label> <br> 
			<textarea name='question' class='outlineMe' content='home' rows='15' cols='27'></textarea>
			<br><br>
			<input type="submit" value='Ask?!'>
		</form>
	</div>
</div>

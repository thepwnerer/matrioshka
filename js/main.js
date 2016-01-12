
function myFunction() {
				if(window.confirm("Are you sure you want to delete this?") == false)
					{
						event.preventDefault();
					}
			}
function stupidFunction() {
	window.alert("TESTINNNNGTESTINNNNG123");
}

// function openTextBox(x) {
// 	$("#" + x).append( "<div id=questionform" + x + "><form method=\'get\' content=\'notification\' action=\'../DBClasses/INSERTANSWER.php\'class=\'contentWritten\'>
// 			<input type=\'hidden\' name=\'content\' value=\'notification\' />
// 			<label for=\'question\'>Question</label>
// 			<textarea name=\'question\' content=\'home\' rows=\'15\' cols=\'45\'></textarea>
// 			<input type=\'submit\' value=\'Reply!\'>
// 			<input type=\'button\' onclick=\'removeForm(" + x + ")\' value=\'Cancel\'>
// 		</form></div>");
// }

// function openTextBox(x) {
// 	$("#" + x).append( "<form method=\'get\'><input type=\'text\'/></form>" );
// }

function openTextBox(x) {
	$("#" + x).append( "<form id=\'questionForm" + x + "\' method=\'get\' action=\'../DBClasses/INSERTANSWER.php\'><textarea name=\'answer\' rows=\'15\' cols=\'45\'></textarea><input type=\'hidden\' name=\'qid\' value=\'" + x + "\' /><input type=\'hidden\' name=\'content\' value=\'home\' /><input type=\'submit\' value=\'Reply!\'><input type=\'button\' onclick=\'removeForm(" + x + ")\' value=\'Cancel\'></form>" );
	document.getElementById("reply" + x).style.display = "none";
}

function removeForm(x) {
	$("#questionForm" + x).remove();
	document.getElementById("reply" + x).style.display = "inline";
}


		function addRow(tableID) {

			var table = document.getElementById(tableID);

			var rowCount = table.rows.length;
			var row = table.insertRow(rowCount);

			var cell1 = row.insertCell(0);
			var element1 = document.createElement("input");
			element1.type = "checkbox";
			element1.name="chkbox[]";
			cell1.appendChild(element1);

			var cell2 = row.insertCell(1);
			var element2=document.createElement("input")
			element2.type="text";
			element2.name="mac_address[]";
			cell2.appendChild(element2);

			var cell3 = row.insertCell(2);
			var element3 = document.createElement("input");
			element3.type = "text";
			element3.name = "lecture_room[]";
			cell3.appendChild(element3);
			
		/*	var cell4=row.insertCell(3)
			var buttonnode= document.createElement('input');
buttonnode.setAttribute('type','button');
buttonnode.setAttribute('name','sal');
buttonnode.setAttribute('value','Insert Data');
cell4.appendChild(buttonnode);

//New Part here
buttonnode.onClick = "addRow1('dataTable')";  
      */
			
			 
		}
		function inserttime(tableID) {
		var table = document.getElementById(tableID);

			var rowCount = table.rows.length;
			var row = table.insertRow(rowCount);

			var cell1 = row.insertCell(0);
			var element1 = document.createElement("input");
			element1.type = "checkbox";
			element1.name="chkbox[]";
			cell1.appendChild(element1);

			var cell2 = row.insertCell(1);
			var element2=document.createElement("input")
			element2.type="time";
			element2.name="time_start[]";
			cell2.appendChild(element2);
                        var cell3 = row.insertCell(2);
			var element3=document.createElement("input")
			element3.type="time";
			element3.name="time_end[]";
			cell3.appendChild(element3);
			}
		
	
	function deleteRow(tableID) {
			try {
			var table = document.getElementById(tableID);
			var rowCount = table.rows.length;

			for(var i=0; i<rowCount; i++) {
				var row = table.rows[i];
				var chkbox = row.cells[0].childNodes[0];
				if(null != chkbox && true == chkbox.checked) {
					table.deleteRow(i);
					rowCount--;
					i--;
				}


			}
			}catch(e) {
				alert(e);
			}
		}  
		


$(document).ready(function(){
  createTable();
  
  $("#CariHasil").click(function(){
    searchMurid($("#KeywordText").val());
  });
  
  let backToHome = document.getElementById("back");
  backToHome.addEventListener("click", function() {
  	document.location.href = "../infoRpl";
  });
  
 function createTable(){
	 $.get("api/index.php?keyword=all", function(data, status){
  		var json = JSON.parse(data);
  		var table = document.getElementById("TableSiswa");

		  i = 0;
		  json.forEach((element, index, array) => {
   			 var x = document.getElementById('TableSiswa').insertRow(i);
  			  for (var c = 0; c < 5; c += 1) {
  			    var y = x.insertCell(c);
  			  }
			  
				 table.rows[i].cells[0].innerHTML = i + 1;
			     table.rows[i].cells[1].innerHTML = element["field3"];
 			    table.rows[i].cells[2].innerHTML = element["field5"];
			     table.rows[i].cells[3].innerHTML = element["field6"];
  			   table.rows[i].cells[4].innerHTML = element["field7"];
			
			 i++;
		  });
	 });
}

function searchMurid(nama){
  if (nama == "") {
    createTable();
    return;
  }
  $.get("api/index.php?keyword=" + nama, function(data, status){
  	var json = JSON.parse(data);
  	var table = document.getElementById("TableSiswa");
  
  	if(json.status == "failed"){
  		alert("Data Murid Tersebut Tidak Ditemukan!");
  		return;
  	}

	  // Clear Table
	  document. getElementById("TableSiswa"). innerHTML="";

	  i = 0;
	  json.forEach((element, index, array) => {
 	 var x = document.getElementById('TableSiswa').insertRow(i);
	  for (var c = 0; c < 5; c += 1) {
     	 var y = x.insertCell(c);
  	 }
			  
	  table.rows[i].cells[0].innerHTML = i + 1;
      table.rows[i].cells[1].innerHTML = element["field3"];
 	 table.rows[i].cells[2].innerHTML = element["field5"];
	  table.rows[i].cells[3].innerHTML = element["field6"];
      table.rows[i].cells[4].innerHTML = element["field7"];
			
	  i++;
	});
  });
}

});
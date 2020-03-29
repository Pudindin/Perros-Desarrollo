
function ajaxCall() {

	var xhr = new XMLHttpRequest();
    xhr.open('GET', "server/index.php", true);
    xhr.send()
    xhr.onreadystatechange = (e) =>  {
    	if (xhr.readyState == 4 && xhr.status == 200) {
    		createTableOnIndex(xhr.responseText);
    	}
    }
}


function createTableOnIndex(data) {
	data = JSON.parse(data);
	data.forEach(d => {
		let tag = document.createElement("p");
		let text = document.createTextNode(d["comentario"]);
		tag.appendChild(text);
		document.getElementById("comments").appendChild(tag);
	});
}

ajaxCall();
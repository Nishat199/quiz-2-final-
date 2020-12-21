function get(id){
		return document.getElementById(id);
	}
	function fill_suggest(td){
		get("search_text").value= td.innerHTML;
	}
	function search(){
		var text = get("search_text").value;
		
	}
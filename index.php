<script>

    function get(id){
        return document.getElementById(id);
    }

    function loadDoc(){

        var xhr = new XMLHttpRequest();
        xhr.open("GET","page-1.html",true);
        xhr.onreadystatechange=function(){
            if(this.readyState == 4 && this.status == 200){
                get("submit").innerHTML = this.responseText;
            }
        };

        xhr.send();
        
    }
</script>
<button> onclick="loadDoc()">
    Submit & Save
</button>
<div id="submit">
</div>
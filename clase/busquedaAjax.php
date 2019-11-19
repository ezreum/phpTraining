<head>
<meta charset="UTF-8">
<script>
var x;


function pintar(){
    
    var idioma=document.querySelector('input[name="idioma"]:checked').value;
    x = new XMLHttpRequest();
    x.open("GET", "ajaxCall.php?idioma="+idioma, true);
    x.send();
    x.onreadystatechange = function(){
        if (x.readyState==4 &&x.status==200){
        }
        x.responseText;
    }
}

</script>

</head>
<body>
<label></label>
<input name="" type=""/>
<br/>

<label></label>
<input name="" type=""/>
<br/>

<button onclick="consultar()">consultar</button>

</body>
<!DOCTYPE html> 
<html> 

<head> 
	<style>
.main { 
	background-color: #fff; 
	border-radius: 15px; 
	box-shadow: 0 0 20px rgba(0, 0, 0, 0.2); 
	padding: 20px; 
	transition: transform 0.2s; 
	width: 800px; 
	display: flex; 
	justify-content: center; 
	align-items: center; 
	flex-direction: column; 
} 

.main:hover { 
	transform: scale(1.05); 
} 


body { 
	font-family: Arial, sans-serif; 
	background-color: #f0f0f0; 
	display: flex; 
	flex-direction: column; 
	justify-content: center; 
	align-items: center; 
	height: 100vh; 
	margin: 0; 
} 

.draggable { 
	width: 100px; 
	
	background-color: #f2f2f2; 
	border: 2px solid #ccc; 
	text-align: center; 
	cursor: grab; 
	transition: transform 0.2s; 
	position: relative; 
} 

.draggable:active { 
	transform: scale(1.1); 
} 

.droppable { 
	width: 150px; 
	min-height: 30px; 

	background-color: #e0e0e0; 
	border: 2px dashed #999; 
	text-align: center; 
	position: relative; 
} 

.draggable, 
.droppable { 
	margin: 10px; 
} 

h1 { 
	color: green; 
}

    </style>
    <script>
function dragStart(event) { 
	event.dataTransfer.setData("text/plain", event.target.id); 
} 
function allowDrop(event) { 
	event.preventDefault(); 
} 
function drop(event) { 
	event.preventDefault(); 
	var temp = event.dataTransfer.getData("text/plain"); 
	var dragEle = document.getElementById(temp); 
	var dropEle = event.target; 
	if (dragEle.classList.contains("draggable") && dropEle.classList.contains("droppable")) { 
		dropEle.appendChild(dragEle); 
	} else if (dragEle.classList.contains("draggable") && dropEle === document.body) { 
		document.body.appendChild(dragEle); 
	} 
} 
var currEle = null; 
document.addEventListener("dragstart", function (e) { 
	currEle = e.target; 
}); 
document.addEventListener("dragover", function (e) { 
	e.preventDefault(); 
}); 
document.addEventListener("drop", function (e) { 
	if (currEle && e.target.classList.contains("draggable")) { 
		var p = currEle.parentNode; 
		var t = e.target; 
		var pInd = Array.from(p.children).indexOf(currEle); 
		var tInd = Array.from(p.children).indexOf(t); 
		if (p === t.parentNode && pInd >= 0 && tInd >= 0) { 
			p.insertBefore(t, currEle); 
			p.insertBefore(currEle, t); 
		} 
	} 
});

    </script>
</head> 

<body> 
	<div class="main"> 
		<h1>platform d'orientation</h1> 
		<h3> 
			faire glissé votre choix dans les cases suivant 
		</h3> 


		<div>
		<div id="draggable1"
			class="draggable"
			draggable="true"
			ondragstart="dragStart(event)"> 
			philosofie 
		</div> 
		<p id="draggable2"
			class="draggable"
			draggable="true"
			ondragstart="dragStart(event)"> 
			Histoire 
		</p> 
		<div id="draggable3"
			class="draggable"
			draggable="true"
			ondragstart="dragStart(event)"> 
			Information & communication
		</div> 
		<div id="draggable3"
			class="draggable"
			draggable="true"
			ondragstart="dragStart(event)"> 
			bibliographie
		</div> 
		</div>
























		<form action="/contact" method="post">


        <div>
        choix 1
		<input type="text" name="choix3" id="dd" class="droppable"
			ondrop="drop(event)"
			ondragover="allowDrop(event)"/> 
			
		
        </div>
		
        <div>
        choix 2
		<div class="droppable"
			ondrop="drop(event)"
			ondragover="allowDrop(event)"> 
			
		</div> 
        </div>
        <div>
        choix 3
		<input name="choix3" type="text" class="droppable"
			ondrop="drop(event)"
			ondragover="allowDrop(event)" > 
			
		</input> 
		<div>
        choix 4
		<div class="droppable"
			ondrop="drop(event)"
			ondragover="allowDrop(event)"> 
			
		</div> 
        </div>
		<button type="submit" name="submit">submit</button>
		</form>
		
	</div> 
	
</body> 

</html>

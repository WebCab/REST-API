<?php 

echo "Here are Crul and APIs";

// phpinfo();



?>

<html>
<head>
<title>Adding Elements</title>
<script src='OSC.js'></script>
</head>
<body>
This is a document with only this text in it.<br /><br />
<script>
alert('Click OK to add an element')
newdiv = document.createElement('div')
newdiv.id = 'NewDiv'
document.body.appendChild(newdiv)
S(newdiv).border = 'solid 1px red'
S(newdiv).width = '100px'
S(newdiv).height = '100px'
newdiv.innerHTML = "I'm a new object inserted in the DOM"
tmp = newdiv.offsetTop
alert('Click OK to remove the element')
newdiv.parentNode.removeChild(newdiv)
</script>

</body>
</html>
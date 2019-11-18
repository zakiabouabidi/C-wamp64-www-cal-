<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head >
  <title>calculatrice</title>
</head>
<body>
	<table border="6" align="center"  bgcolor=#F6FEFE cellpadding="50" cellspacing="20">
<tr>
	
  <td>
 <h1 align="center">  calculatrice </h1><br>
<form>
 
    
  	<br>
  	<style> background-color: #93B874; </style>
  <input type="text" name="numero1" placeholder = "numero1"> <br>
 <br>
 <input type="text" name="numero2" placeholder = "numero2"><br>
  <br>
 <select align="center" name="operateur">
   <option>aucune</option>
   <option>add</option>
   <option>soustraction</option>
     <option>multiple</option>
     <option>diviser</option>
    

 </select>
 <br><br>
 <button  type="submit" name="submit">Calculer</button>

</form>

 <p> resultat </p>
 <table border="2" align="center"  bgcolor=#CCCCFF>
<tr>
  <td>
 <?php 

  if (isset($_GET['submit'])) {
    $result1 = $_GET['numero1'];
    $result2 = $_GET['numero2'];
    $operateur = $_GET['operateur'];
    switch ($operateur) {
      case "aucune":
        echo "selectionne";
      break;
      case "add":
        echo $result1 + $result2;
        break;

        case "soustraction":
        echo $result1 - $result2;
        break;

        case "diviser":
        echo $result1 / $result2;;
        break;
        case "multiple":
        echo $result1 * $result2;
        break;

      
    }
 }
 ?>
</td>
</tr>
</table>
</td>
</tr>
</table>
 
</body>
</html>  


<?php
//everything is made(coded) by: Rowan van Ekeren
session_start();
if(!isset($_SESSION["todolist"])){
    $_SESSION["todolist"] = array();
}

if(!isset($_SESSION["donelist"])){
    $_SESSION["donelist"] = array();
}
$array = $_SESSION["todolist"];
$fetchRow = $array;


$arraydone = $_SESSION["donelist"];
$fetchdone = $arraydone;


if(isset($_POST["addTodo"])){
    
    array_push($_SESSION["todolist"], $_POST["description"]);
 $_SESSION["todolist"] = array_values($_SESSION["todolist"]);
    header("Refresh:0; rowanvanekeren-todo-app.php");
    
}

//$_SESSION["todolist"] = $fetchRow;
//echo var_dump($_SESSION["todolist"]);

if(isset($_GET["delete"])){
    
    if($_GET["delete"] == "true"){
        unset($_SESSION["todolist"][$_GET["key"]]);
 $_SESSION["todolist"] = array_values($_SESSION["todolist"]);
        header("Refresh:0; rowanvanekeren-todo-app.php");
        
    }
}

if(isset($_GET["deletedone"])){
    
    if($_GET["deletedone"] == "true"){
        unset($_SESSION["donelist"][$_GET["keydone"]]);
 $_SESSION["donelist"] = array_values($_SESSION["donelist"]);
        header("Refresh:0; rowanvanekeren-todo-app.php");
        
    }
}
    
    if(isset($_GET["done"])){
    
    if($_GET["done"] == "true"){
         array_push($_SESSION["donelist"], $_SESSION["todolist"][$_GET["key"]]);
 $_SESSION["todolist"] = array_values($_SESSION["todolist"]);
        unset($_SESSION["todolist"][$_GET["key"]]);
 $_SESSION["donelist"] = array_values($_SESSION["donelist"]);
        header("Refresh:0; rowanvanekeren-todo-app.php");
        
    }
    
    
}

    if(isset($_GET["backtodo"])){
    
    if($_GET["backtodo"] == "true"){
         array_push($_SESSION["todolist"], $_SESSION["donelist"][$_GET["keydone"]]);
 $_SESSION["todolist"] = array_values($_SESSION["todolist"]);
        unset($_SESSION["donelist"][$_GET["keydone"]]);
 $_SESSION["donelist"] = array_values($_SESSION["donelist"]);
        header("Refresh:0; rowanvanekeren-todo-app.php");
        
    }
    
    
}

?>



<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
    	<title>Opdracht-concat</title>
<style>
    *{
        font-family: arial; list-style: none;
            text-decoration: none;
        color: black;
    }
    
    .odd {
        background-color: lightgrey;
    }
    #todo:hover {
        color: limegreen;
        text-decoration: line-through;
    }
  
    #done{
        
        color: limegreen;
        text-decoration: line-through;
    }
    #done:hover{
        
        color: black;
        text-decoration: none;
    }
        
    .grey{
        color: grey;
    }    
        
    .sign{
        background-color: brown;
        width: 14%;
        
    }   
    .sign:hover{
       
        background-color: limegreen;
       
    }   
        
 
  
        
        
        
        
        </style>
    </head>
    <body>
		
  
    <h1>Todo app</h1>

					
		
		<h1>Todo toevoegen</h1>

		<form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">

			<ul>
				<li>
					<label for="description">Beschrijving: </label>
					<input type="text" id="description" name="description">
				</li>
			</ul>

			<input type="submit" name="addTodo" value="Toevoegen">

		</form>
			<table>
		
		

		<tbody>
		
		
		
		<?php if($_SESSION["donelist"] != null): ?>
		
		<h2>Gedaan</h2>
		
		<?php endif ?>
						<?php if($_SESSION["todolist"] == null && $_SESSION["donelist"] == null): ?>
		
		<h2>Niks toegevoegd? heb je zo weinig te doen?</h2>
		
		<?php endif ?>
								<?php if($_SESSION["todolist"] != null && $_SESSION["donelist"] == null): ?>
		
		<h4 class="grey">hop hop dr is nog werk aan de winkel!</h4>
		
		<?php endif ?>
			<?php if($_SESSION["todolist"] != null && $_SESSION["donelist"] != null): ?>
		
		<h4 class="grey">je bent al redelijk bezig, maar er is nog wat te doen!</h4>
		
		<?php endif ?>
			<?php foreach ($fetchdone as $key => $todo): ?>
				<tr class="<?php echo (($key+1) %2 ==0)?"odd": "" ?>">
					
					
						<td><a id="done" href= "rowanvanekeren-todo-app.php?backtodo=true&keydone=<?php echo $key ?>"><?php echo $todo ?></a></td>
					<td><a href= "rowanvanekeren-todo-app.php?deletedone=true&keydone=<?php echo $key ?>"><img src="img/delete-icon.png" style="width: 20%"/></a></td>
				</tr>
			<?php endforeach ?>
			
		</tbody>

	</table>
			<table>
		
		

		<tbody>
		
		
		
		<?php if($_SESSION["todolist"] != null): ?>
		
		<h2>Nog te doen</h2>
		
		<?php endif ?>

			<?php foreach ($fetchRow as $key => $todo): ?>
				<tr class="<?php echo (($key+1) %2 ==0)?"odd": "" ?>">
					
			
						<td><a id="todo" href= "rowanvanekeren-todo-app.php?done=true&key=<?php echo $key ?>"><?php echo $todo ?></a></td>
					<td><a href= "rowanvanekeren-todo-app.php?delete=true&key=<?php echo $key ?>"><img src="img/delete-icon.png" style="width: 20%"/></a></td>
				</tr>
			<?php endforeach ?>
			
		</tbody>

	</table>
    </body>
</html>
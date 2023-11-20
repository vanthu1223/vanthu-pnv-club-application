<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application form</title>
    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        body{
            justify-content: center;
            align-items: center;
            display: flex;
            font-size: 20px;
        }
        button {
            padding: 10px;
            color: white;
            background-color: salmon;
            border: none;
            margin-top: 10px;
        }
        form {
            margin-top: 20%;
            border: 2px solid salmon;
            padding: 10px;
            width: max-content;
            max-width: 50%;

        }
    </style>
</head>
<body>
    <form action="result.php" method="get">
        
    <label for="">Name:</label>
    <input type="text" name="username" id="" placeholder="name.." ><br>
    <label >Club you want to apply:</label> 
    <select name="club" > 
        <option value="Singer Club">Singer Club</option> 
        <option value="Dance Club">Dance Club</option> 
        <option value="Football Club">Football Club</option> 
        <option value="Booker Club">Booker Club</option> 
    </select><br>
    <label for="">Be time for you : </label>
    <input type="radio" name="time" value="Saturday mornings" >Saturday mornings
    <input type="radio" name="time" value="Saturday afternoons">Saturday afternoons
    <input type="radio" name="time" value="Sunday afternoons">Sunday afternoons
    <br>
    <label for="">Your skills</label>
    <div>
    <input type="checkbox" name="mang[]" value=" the best coder"> the best coder
    <input type="checkbox" name="mang[]" value=" good in arts">  good in arts
    <input type="checkbox" name="mang[]" value=" a super star"> a super star 
    <input type="checkbox" name="mang[]" value=" a crazzy dancer"> a crazzy dancer <br>
    <input type="checkbox" name="mang[]" value=" singer"> singer
    <input type="checkbox" name="mang[]" value=" good in design"> good in design
    <input type="checkbox" name="mang[]" value=" the best eater"> the best eater
    </div>
    <button type="submit">Submit</button>
    </form>
   
</body>
</html>
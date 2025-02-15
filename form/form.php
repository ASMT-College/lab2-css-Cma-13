<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<form id="myForm">
    <label for="name">Name :</label>
    <input type="text" id="name" name="name" placeholder="minimum 9 characters" required>
    <br><br>
    
    <label for="age">Age:</label>
    <input type="number" id="age" name="age" placeholder="minimum 18" required>
    <br><br>
    
    <label for="description">Description:</label>
    <textarea id="description" name="description"></textarea>
    <br><br>
    
    <button type="submit">Submit</button>
    </fieldset>
  
  <script src="script.js"></script>
</body>
</html>
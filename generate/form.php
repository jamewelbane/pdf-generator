<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generate PDF</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            padding: 20px;
        }

        h2 {
            color: #333;
        }

        form {
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 20px;
            max-width: 500px;
            margin: 0 auto;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button[type="submit"] {
            background-color: #4caf50;
            color: white;
            padding: 15px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        button[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h2>Generate PDF</h2>
    <form action="generate_pdf.php" method="post">
        <label for="header">Header:</label><br>
        <input type="text" id="header" name="header" placeholder="Enter header text"><br><br>

        <label for="content">Content:</label><br>
        <textarea id="content" name="content" rows="5" placeholder="Enter your content here"></textarea><br><br>

        <label for="footer">Footer:</label><br>
        <input type="text" id="footer" name="footer" placeholder="Enter footer text"><br><br>

        <label for="font">Font Style:</label><br>
        <select id="font" name="font">
            <option value="Arial, sans-serif">Arial, sans-serif</option>
            <option value="Georgia, serif">Georgia, serif</option>
            <option value="Times New Roman, serif">Times New Roman, serif</option>
            <option value="Verdana, sans-serif">Verdana, sans-serif</option>
        </select><br><br>

        <button type="submit" name="generate_pdf">Generate PDF</button>
    </form>
</body>
</html>

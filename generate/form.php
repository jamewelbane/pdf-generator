<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/form-style.css">
    <title>Generate PDF</title>
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

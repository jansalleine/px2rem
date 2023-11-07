<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>px2rem</h1>
        <form>
            <div class="input-group">
                <label>Base</label>
                <input type="number" id="base" value="16">
            </div>
            <div class="input-group">
                <label>px</label>
                <input type="number" id="value">
            </div>
            <div class="input-group">
                <label>rem</label>
                <input type="number" id="result" readonly="true">
            </div>
        </form>
    </div>
    <script src="js/app.min.js"></script>
</body>
</html>

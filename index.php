<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form class="form-horizontal" action="import_csv.php" method="post" name="uploadCSV"
    enctype="multipart/form-data">
    <div class="input-row">
        <label class="col-md-4 control-label">Choose CSV File</label> <input
            type="file" name="file" id="file" accept=".csv">
        <button type="submit" id="submit" name="import"
            class="btn-submit">Import</button>
        <br />

    </div>
    <div id="labelError"></div>
</form>
</body>
</html>



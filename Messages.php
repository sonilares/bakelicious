<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bootstrap Data Table with Filter Row Feature</title>

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="messages.css">

</head>
<body>
    <div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <div class="col-sm-6"><h2>Manage <b>Domains</b> Website</h2></div>
                <div class="col-sm-6">
                    <div class="btn-group" data-toggle="buttons">
                        <label class="btn btn-info active">
                            <input type="radio" name="status" value="all" checked="checked"> All
                        </label>
                        <label class="btn btn-success">
                            <input type="radio" name="status" value="active"> Active
                        </label>
                        <label class="btn btn-warning">
                            <input type="radio" name="status" value="inactive"> Inactive
                        </label>
                        <label class="btn btn-danger">
                            <input type="radio" name="status" value="expired"> Expired
                        </label>       
                    </div>
                </div>
            </div>
        </div>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Created&nbsp;On</th>
                    <th>Status</th>
                    <th>Server&nbsp;Location</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr data-status="active">
                    <td>1</td>
                    <td><a href="soengsouy.com">lorem.com</a></td>
                    <td>04/10/2020</td>
                    <td><span class="label label-success">Active</span></td>
                    <td>Khmer</td>
                    <td><a href="soengsouy.com" class="btn btn-sm manage">Manage</a></td>
                </tr>
                <tr data-status="inactive">
                    <td>2</td>
                    <td><a href="soengsouy.com">lorem.net</a></td>
                    <td>05/08/2020</td>
                    <td><span class="label label-warning">Inactive</span></td>
                    <td>Pursat</td>
                    <td><a href="#" class="btn btn-sm manage">Manage</a></td>
                </tr>
                <tr data-status="active">
                    <td>3</td>
                    <td><a href="soengsouy.com">lorem.com</a></td>
                    <td>11/05/2020</td>
                    <td><span class="label label-success">Active</span></td>
                    <td>United Kingdom</td>
                    <td><a href="#" class="btn btn-sm manage">Manage</a></td>
                </tr>
                <tr data-status="expired">
                    <td>4</td>
                    <td><a href="soengsouy.com">lorem.org</a></td>
                    <td>06/09/2020</td>
                    <td><span class="label label-danger">Expired</span></td>
                    <td>USA</td>
                    <td><a href="#" class="btn btn-sm manage">Manage</a></td>
                </tr>
                <tr data-status="inactive">
                    <td>5</td>
                    <td><a href="soengsouy.com">lorem.com</a></td>
                    <td>12/08/2020</td>
                    <td><span class="label label-warning">Inactive</span></td>
                    <td>Cambodai</td>
                    <td><a href="#" class="btn btn-sm manage">Manage</a></td>
                </tr>
            </tbody>
        </table>
    </div> 
<script src="messages.js"></script>
    
</body>
</html>                  
<html>
<head>
    <title>Form</title>
</head>
<body>
    <form method="post" action="/customer/store">

        <fieldset>
            {{csrf_field()}}
            <label>Organization or Person Name</label>
            <input type="text" name="organization_or_person" palceholder="Enter Organization or Person Name "><br>
            <input type="submit" value="Submit">

        </fieldset>
    </form>
</body>
</html>
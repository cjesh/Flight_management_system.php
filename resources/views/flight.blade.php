<html>
<head>

</head>
<body>
<form method="post"  action="{{action([\App\Http\Controllers\PageController::class,'store'])}}" enctype="multipart/form-data">
    @csrf
    <label> Date </label>
    <input type="date" name="text" required>
    <label> time </label>
    <input type="time" name="text" required>
    <input type="number" name="flight_number" required>
    <label> flight number </label>
    <input type="number" name="created_at" required>
    <label> created at </label>
    <input type="number" name="updated_at" required>
    <label> updated_at </label>
    <input type="file" name="image" required>
    <label> updated_at </label>
    <input type="number" name="schedule" required>
    <label> schedule </label>

    <input type="submit">
</form>
</body>
</html>



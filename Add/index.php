<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="script.js"></script>
    <link rel="stylesheet" href="style.css">
</head>

<nav class="navbar navbar-expand headerbar bg-primary fixed-top" id = "headerBar">
<ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link active" href="\index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Workouts/index.php">Workouts</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Results</a>
      </li>
    </ul>
</nav>
<div class = "center">
    <h1>Name of Workout</h1>
    <input type="text">
<h1>Intervals</h1>
<div class="dropdown">
    <button id = "intervalButton"type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
      Intervals
    </button>
    <ul class="dropdown-menu">
      <li><a onclick = "setIntervalValue(4)"class="dropdown-item" href="#">4</a></li>
      <li><a onclick = "setIntervalValue(5)" class="dropdown-item" href="#">5</a></li>
      <li><a onclick = "setIntervalValue(6)" class="dropdown-item" href="#">6</a></li>
      <li><hr class="dropdown-divider"></hr></li>
      <li><a class="dropdown-item" href="#">Custom</a></li>
    </ul>
  </div>
<h1>Distance</h1>
<div class="dropdown">
    <button id = "distanceButton" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
      Distance
    </button>
    <ul class="dropdown-menu">
      <li><a onclick = "setDistanceValue(400)" class="dropdown-item" href="#">400</a></li>
      <li><a onclick = "setDistanceValue(800)"class="dropdown-item" href="#">800</a></li>
      <li><a onclick = "setDistanceValue(1600)"class="dropdown-item" href="#">1600</a></li>
      <li><hr class="dropdown-divider"></hr></li>
      <li><a class="dropdown-item" href="#">Custom</a></li>
    </ul>
  </div>
  <h1>Rest between Interval</h1>
<div class="dropdown">
    <button id = "rTimeButton" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
      Time
    </button>
    <ul class="dropdown-menu">
      <li><a onclick = "setrTimeValue(2)"class="dropdown-item" href="#">2</a></li>
      <li><a onclick = "setrTimeValue(4)"class="dropdown-item" href="#">4</a></li>
      <li><a onclick = "setrTimeValue(6)"class="dropdown-item" href="#">6</a></li>
      <li><hr class="dropdown-divider"></hr></li>
      <li><a class="dropdown-item" href="#">Custom</a></li>
    </ul>
  </div>
  <button class = "btn btn-success">Add Another Distance</button>
  <button class = "btn btn-danger">Add Workout</button>
</div>
</div>

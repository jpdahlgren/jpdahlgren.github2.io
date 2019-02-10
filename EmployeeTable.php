<!-- Wappler include head-page="employees_data2" appConnect="local" is="dmx-app" bootstrap4="cdn" fontawesome_4="cdn" jquery_slim_33="cdn" moment_2="cdn" -->
<body is="dmx-app" id="EmployeeData">
    <dmx-serverconnect id="serverconnect1" url="dmxConnect/api/Employees/ListEmployees.php" dmx-param:filter="text1.value"></dmx-serverconnect>
    <input id="text1" name="text1" type="text" class="form-control mt-0 mb-0 ml-0 mr-1 pt-0 pb-0 pl-2 pr-2">
    <p>Employee Last Name Search</p>
    <div class="container">
      <h1>
        Employee Data</h1>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Date Stamp</th>
          </tr>
        </thead>
        <tbody is="dmx-repeat" id="repeat1" dmx-bind:repeat="serverconnect1.data.AllEmployees">
          <tr>
            <th scope="row">{{employee_id}}</th>
            <td>{{first_name}}</td>
            <td>{{last_name.uppercase()}}</td>
            <td>{{date_stamp}}</td>
          </tr>
        </tbody></table>
    </div>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
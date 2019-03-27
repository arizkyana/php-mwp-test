<div class="margin-top-3">
  <h1>Call Logs</h1>

  <div class="mt-3">
    <!-- filter and search -->
    <form class="row" id="form-filters">
      <div class="col">
        <div class="form-group">
          <label for="formGroupExampleInput">Start Date</label>
          <input type="date" class="form-control" name="start_date" id="start_date" placeholder="Example input">
        </div>
      </div>
      <div class="col">
        <div class="form-group">
          <label for="formGroupExampleInput">End Date</label>
          <input type="date" class="form-control" name="end_date" id="end_date" placeholder="Example input">
        </div>
      </div>
    </form>
    <!-- /filter and search -->



    <!-- detail log -->
    <div class="table-responsive">
      <table class="table table-striped table-small" id="table-detail">
        <thead class="text-left">
          <th>Call ID</th>
          <th>Call Date</th>
          <th>IT Person</th>
          <th>Username</th>
          <th>Subject</th>
          <th></th>
        </thead>
        <tbody>
          <!-- <td>1</td>
          <td>1</td>
          <td>1</td>
          <td>1</td>
          <td>1</td>
          <td class="text-right">
            <button class="btn btn-secondary btn-sm">
              Detail
            </button>
            <button class="btn btn-danger btn-sm">Delete</button>
          </td> -->
        </tbody>
      </table>
    </div>
    <!-- /detail log -->
  </div>

</div>
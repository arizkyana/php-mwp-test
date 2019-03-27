<div class="mt3">
  <div class="row">
    <div class="col">
      <a href="/">Back</a>
    </div>
  </div>

  <div class="mt-3">

    <input type="hidden" name="id" id="id" value="<?php echo $detail['ID']?>" />

    <div class="card">
      <div class="card-header">
        <div class="row">
          <div class="col">
            Call ID : <span id="call_id"><?php echo $detail['ID']; ?></span>
          </div>
          <div class="col">
            <div class="text-right">
              Date : <span id="date"><?php echo $detail['CallDate']?></span>
            </div>
          </div>
        </div>
      </div>
      <div class="card-body row">
        <div class="col">
          <h5 class="card-title" id="subject"><?php echo $detail['Subject']?></h5>
          <p class="card-text" id="detail">
            <?php echo $detail['Details']?>
          </p>

          <form>
            <label for="">Status <i class="fa fade fa-spin fa-spinner"></i></label>
            <select name="status" id="status" class="form-control">
              <option value="New" <?php echo $detail[ 'Status']==='New' ? 'selected' : '' ?>>New</option>
              <option value="In Progress" <?php echo $detail[ 'Status']==='In Progress' ? 'selected' : '' ?>>In Progress</option>
              <option value="Completed" <?php echo $detail[ 'Status']==='Completed' ? 'selected' : '' ?>>Completed</option>
            </select>

          </form>

        </div>
        <div class="col text-right">
          <label for=""><strong>IT Person</strong></label>
          <div>
            <p>
              <?php echo $detail['ITPerson']?>
            </p>
          </div>
          <label for=""><strong>Username</strong></label>
          <div>
            <p>
              <?php echo $detail['UserName']?>
            </p>
          </div>
        </div>
      </div>
    </div>

    <!-- detail log -->
    <div class="table-responsive">
      <table class="table table-striped table-small" id="table-detail">
        <thead class="text-left">
          <th>ID</th>
          <th>Date</th>
          <th>Details</th>
          <th>Hours</th>
          <th>Minutes</th>
          
        </thead>
        <tbody>
 
        </tbody>
      </table>
    </div>
    <!-- /detail log -->
  </div>

</div>
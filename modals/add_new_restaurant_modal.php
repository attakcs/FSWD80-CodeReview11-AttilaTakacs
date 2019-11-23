<!-- Modal -->

<div id="add_new_restaurant_modal" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
		
		<form action="" method="POST" accept-charset="utf-8" class="m-3">

			<div class="input-group input-group-sm mb-3">
  				<div class="input-group-prepend">
    			<span class="input-group-text" id="inputGroup-sizing-sm">Image URL</span>
  				</div>
  				<input type="url" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
			</div>

			<div class="input-group input-group-sm mb-3">
  				<div class="input-group-prepend">
    			<span class="input-group-text" id="inputGroup-sizing-sm">Name</span>
  				</div>
  				<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
			</div>

			<div class="input-group input-group-sm mb-3">
  				<div class="input-group-prepend">
    			<span class="input-group-text" id="inputGroup-sizing-sm">Phone</span>
  				</div>
  				<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
			</div>

			<div class="input-group input-group-sm mb-3">
  				<div class="input-group-prepend">
    			<span class="input-group-text" id="inputGroup-sizing-sm">Type</span>
  				</div>
  				<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
			</div>

			<div class="input-group input-group-sm mb-3">
  				<div class="input-group-prepend">
    			<span class="input-group-text" id="inputGroup-sizing-sm">Website</span>
  				</div>
  				<input type="url" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
			</div>

			<div class="input-group input-group-sm mb-3">
  				<div class="input-group-prepend">
    			<span class="input-group-text" id="inputGroup-sizing-sm">Address</span>
  				</div>
  				<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
			</div>

			<div class="form-group">
    			<label for="exampleFormControlTextarea1">Description...</label>
    			<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  			</div>
				
			<button type="button" class="btn btn-success" onclick="addRecord()">Add Record</button>
			<button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>

		</form>

    </div>
  </div>




	<div class="form">
	  <form method="POST" action="info/mail.php">
              <h2 class="form-heading">Book a driving lesson</h2>
        <div class="form-group">
        <label for="name">Name</label>
        <input type="text" id="name" class="form-control input-sm" name="name">
        </div>
        
        <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" class="form-control input-sm" name="email" required>
        </div>
        
        <div class="form-group">
        <label for="tel">Telephone</label>
        <input type="text" id="tel" name="tel" class="form-control input-sm" placeholder="">
        </div>
              
        <div class="form-group">
        <label for="address">Address</label>
        <input type="text" name="address" class="form-control input-sm" id="address">
        </div>
        
        <div class="form-group">
        <label for="details">Enquiry</label>
        <textarea class="form-control input-sm" rows="3" name="enquiry" id="details"></textarea>
        </div>
        
        <div class="form-group">
        <input type="submit" class="btn btn-default" name="submit">
        </div>
	</form>
</div>
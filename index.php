<?php include('templates/header.php'); ?>

<div class="container">
	<div class="content">
		<form id="search-yrke" action="#">
			<div class="input-container">
				<input type="text" name="query" placeholder="Sök...">
				<button class="btn btn-large icon-search icon-3x"></button>
			</div>
		</form>
	</div>
</div>
  <!-- Modal -->
  <div class="modal fade" id="response-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h2 class="modal-title">Yrkesprognos för dig!</h2>
        </div>
        <div class="modal-body">
        	<ul class="yrken">
        		
        	</ul>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn" data-dismiss="modal">Stäng</button>
        </div>
      </div>
    </div>
  </div>

<?php include('templates/footer.php'); ?>
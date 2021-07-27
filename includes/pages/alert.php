<?php if (isset($_SESSION['messageFlash']) && !empty($_SESSION['messageFlash'])) { ?>
  <div class="alert alert-<?php echo $_SESSION['messageFlash']['type'] ?> alert-dismissible fade show" role="alert" style="position:fixed; top: 70px; right:10px; z-Index:10000 " >
      <strong><?php echo $_SESSION['messageFlash']['message'] ?></strong>.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  <?php
  }
    if (isset($_SESSION['submitedData']) && !empty($_SESSION['submitedData'])){
        extract($_SESSION['submitedData']);
    }
  ?>
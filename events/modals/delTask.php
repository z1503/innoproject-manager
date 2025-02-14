<?php
if (isset($_SESSION['user'])) {
} else {
	header('Location: login.php');
	die();
}
?>
<!-- --------------------------------------- МОДАЛЬНОЕ ОКНО УДАЛЕНИЯ ЗАДАЧИ ------------------------------------------------------ -->
<div id="task-delete-<?php echo $i; ?>" class="col-sm modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="lead text-primary" >Вы уверены?</h3>
                <a class="close text-dark btn" data-dismiss="modal">×</a>
            </div>
            <form name="task" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" role="form">
                <div class="modal-body">
                    <p class="text-dark">Вы действительно хотите удалить <i class="text-primary"><?php echo $s['task_name']; ?> </i> ?</p>
                    <p class="text-dark">Это действие невозможно будет отменить!</p>
               
                    <div class="form-group">
                        <input hidden type="int" name="id_task" value="<?php echo $s['id_task']; ?>">
                    </div>	
                    <div class="form-group">
                        <input hidden type="int" name="id_project" value="<?php echo $s['id_project']; ?>">
                    </div>				
                </div>
                <div class="modal-footer">					
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Закрыть</button>
                    <button type="submit" class="btn btn-danger">Удалить</button>
                </div>
            </form>
        </div>
    </div>
</div>

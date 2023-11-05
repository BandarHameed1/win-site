<?php 

include './inc/db.php';
include './inc/form.php';
include './inc/select.php';
include './inc/db_close.php';

?>

<?php include_once './parts/header.php'; ?>
    
   

        <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
            <div class="col-md-5 p-lg-5 mx-auto">
            <img src="images/img1.jpg" alt="">
            <h1 class="display-4 fw-normal">اربح مع بندر</h1>
            <p class="lead fw-normal">بافي على فتح التسجيل</p>
            <h3 id="countdown"></h3>
            <p class="lead fw-normal">للسحب على ربح نسخة مجانية من برنامج</p>
            </div>
             <div class="container">
                <h3>للدخول في السحب اتبع مايلي:</h3>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">An item</li>
                    <li class="list-group-item">A second item</li>
                    <li class="list-group-item">A third item</li>
                    <li class="list-group-item">A fourth item</li>
                    <li class="list-group-item">And a fifth one</li>
                </ul>
             </div>
        </div>

        

        <div class="container">
        <div class="position-relative text-center">
            <div class="col-md-5 p-lg-5 mx-auto my-5">
        <form  action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
            <h3>الرجاء ادخل معلوماتك</h3>
        <div class="mb-3">
            <label for="firstName" class="form-label">الاسم الاول</label>
            <input type="text" name="firstName" id="firstName" class="form-control" value="<?php echo $firstName ?>">
            <div  class="form-text error"><?php echo $errors['firstNameError'] ?></div>
        </div>

        <div class="mb-3">
            <label for="lastName" class="form-label">الاسم الاخير</label>
            <input type="text" name="lastName" id="lastName" class="form-control" value="<?php echo $lastName ?>">
            <div  class="form-text error"><?php echo $errors['lastNameError'] ?></div>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">البريد الالكتروني</label>
            <input type="text" name="email" id="email" class="form-control" value="<?php echo $email ?>">
            <div  class="form-text error"><?php echo $errors['emailError'] ?></div>
        </div>
  
        <button type="submit" name="submit" class="btn btn-primary">ارسال المعلومات</button>
        </form>
     </div>
    
    </div>
  

<div class="loader-con">
    <div id="loader">
        <canvas id="circularLoader" width="200" height="200"></canvas>
    </div>
</div>




<!-- Button trigger modal -->
<div class="d-grid gap-2 col-6 mx-auto my-5">
    <button type="button" id= "winner" class="btn btn-primary">
    اختيار الرابح
    </button>
</div>

<!-- Modal -->
<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">

            <h5 class="modal-title" id="modalLabel">الرابح في المسابقة</h5>
  
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <?php foreach ($users as $users) : ?>
            <h1 class="display-3 text-center modal-title" id="modalLabel"><?php echo htmlspecialchars($users['firstName']) . ' ' . htmlspecialchars($users['lastName']) ; ?></h1>
        <?php endforeach; ?>
      </div>
      
    </div>
  </div>
</div>







<!--
<div id= "cards" class="row mb-5 pd-5">
    
   
        <div class="col-sm-6">
            <div class="card my-2 bg-light">
                <div class="card-body">
                    <h5 class="card-title">  </h5> 
                    <p class="card-text"><?php echo htmlspecialchars($users['email']) ?></p>
                </div>
            </div>
        </div>
 
</div>
        -->
<?php include_once './parts/footer.php';?>
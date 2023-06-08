
<style>
.alert {
  padding: 20px;
  background-color: #f44336;
  color: white;
}

.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}
</style>
<?php
if(isset($_SESSION['message'])){
    echo '
<div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display="none";">&times;</span> 
'.$_SESSION['message'].'
</div>
';
unset($_SESSION['message']);
}
?>
</body>
</html>

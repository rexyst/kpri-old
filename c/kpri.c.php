<?php
// start view-controller
$act;
if(isset($_GET['action'])) {
    $act = $_GET['action'];
}

// start home-view-controller
if($act == 'home'){
    $_POST = array();
    session_start();
    if(isset($_SESSION['level'])){
        if($_SESSION['level']==1){
            header('location:../v/user/home.php');
        }
        if($_SESSION['level']==2){
            header('location:../v/suser/home.php');
        }
        if($_SESSION['level']==3){
            header('location:../v/admin/home.php');
        }
        if($_SESSION['level']==4){
            header('location:../v/admin/home.php');
        }
        if($_SESSION['level']=='Anggota'){
            header('location:../v/user/home.php');
        }
        if($_SESSION['level']=='Pimpinan'){
            header('location:../v/suser/home.php');
        }
        if($_SESSION['level']=='Pegawai'){
            header('location:../v/admin/home.php');
        }
        if($_SESSION['level']=='Admin'){
            header('location:../v/admin/home.php');
        }
    } else {
        header('location:../index.php');
    }
}
// end home-view-controller

// start login-view-controller
if($act == 'login'){
    $_POST = array();
    session_start();
    if(isset($_SESSION['nip'])) {
        if($_SESSION['level']==1){
            header('location:../v/user/home.php');
        }
        if($_SESSION['level']==2){
            header('location:../v/suser/home.php');
        }
        if($_SESSION['level']==3){
            header('location:../v/admin/home.php');
        }
        if($_SESSION['level']==4){
            header('location:../v/admin/home.php');
        }
        if($_SESSION['level']=='Anggota'){
            header('location:../v/user/home.php');
        }
        if($_SESSION['level']=='Pimpinan'){
            header('location:../v/suser/home.php');
        }
        if($_SESSION['level']=='Pegawai'){
            header('location:../v/admin/home.php');
        }
        if($_SESSION['level']=='Admin'){
            header('location:../v/admin/home.php');
        }
    }
    header('location:../v/login.php');
}
// end login-view-controller

// start registration-view-controller
if($act == 'registration'){
    $_POST = array();
    session_start();
    if(isset($_SESSION['level'])) {
        if($_SESSION['level']==1){
            header('location:../v/user/home.php');
        }
        if($_SESSION['level']==2){
            header('location:../v/suser/home.php');
        }
        if($_SESSION['level']==3){
            header('location:../v/admin/home.php');
        }
        if($_SESSION['level']==4){
            header('location:../v/admin/home.php');
        }
        if($_SESSION['level']=='Anggota'){
            header('location:../v/user/home.php');
        }
        if($_SESSION['level']=='Pimpinan'){
            header('location:../v/suser/home.php');
        }
        if($_SESSION['level']=='Pegawai'){
            header('location:../v/admin/home.php');
        }
        if($_SESSION['level']=='Admin'){
            header('location:../v/admin/home.php');
        }
    } else {
        header('location:../v/registration.php');
    }
}
// end registration-view-controller

// start logout-view-controller
if($act == 'logout'){
    $_POST = array();
    ?>
    <script type="text/javascript">
    window.open('../index.php', '_SELF');
    </script>
    <?php
}
// end logout-view-controller

// start profile-view-controller
if($act == 'profile'){
    session_start();
    if(isset($_GET['nip'])){
    if(isset($_SESSION['level'])){
        
        if($_SESSION['level']==1){
            header('location:../v/user/profile.php?nip='.$_GET['nip']);
        }
        if($_SESSION['level']==2){
            header('location:../v/suser/profile.php?nip='.$_GET['nip']);
        }
        if($_SESSION['level']==3){
            header('location:../v/admin/profile.php?nip='.$_GET['nip']);
        }
        if($_SESSION['level']==4){
            header('location:../v/admin/profile.php?nip='.$_GET['nip']);
        }
        if($_SESSION['level']=='Anggota'){
            header('location:../v/user/profile.php?nip='.$_GET['nip']);
        }
        if($_SESSION['level']=='Pimpinan'){
            header('location:../v/suser/profile.php?nip='.$_GET['nip']);
        }
        if($_SESSION['level']=='Pegawai'){
            header('location:../v/admin/profile.php?nip='.$_GET['nip']);
        }
        if($_SESSION['level']=='Admin'){
            header('location:../v/admin/profile.php?nip='.$_GET['nip']);
        }
        
    } else {
        header('location:../index.php');
    }
} else {
    if(isset($_SESSION['level'])){
        
        if($_SESSION['level']==1){
            header('location:../v/user/profile.php');
        }
        if($_SESSION['level']==2){
            header('location:../v/suser/profile.php');
        }
        if($_SESSION['level']==3){
            header('location:../v/admin/profile.php');
        }
        if($_SESSION['level']==4){
            header('location:../v/admin/profile.php');
        }
        if($_SESSION['level']=='Anggota'){
            header('location:../v/user/profile.php');
        }
        if($_SESSION['level']=='Pimpinan'){
            header('location:../v/suser/profile.php');
        }
        if($_SESSION['level']=='Pegawai'){
            header('location:../v/admin/profile.php');
        }
        if($_SESSION['level']=='Admin'){
            header('location:../v/admin/profile.php');
        }
        
    } else {
        header('location:../index.php');
    }
}
}
// end profile-view-controller

// start update-profile-view-controller
if($act == 'profile-update'){
    session_start();
    if(isset($_SESSION['level'])){
        if($_SESSION['level']==1){
            header('location:../v/user/profile-update.php');
        }
        if($_SESSION['level']==2){
            header('location:../v/suser/profile-update.php');
        }
        if($_SESSION['level']==3){
            if(isset($_GET['nip'])){
                header('location:../v/admin/profile-update.php?nip='.$_GET['nip']);
            } else {
                header('location:../v/admin/profile-update.php');
            }
        }
        if($_SESSION['level']==4){
            if(isset($_GET['nip'])){
                header('location:../v/admin/profile-update.php?nip='.$_GET['nip']);
            } else {
                header('location:../v/admin/profile-update.php');
            }
        }
        if($_SESSION['level']=='Anggota'){
            header('location:../v/user/profile-update.php');
        }
        if($_SESSION['level']=='Pimpinan'){
            header('location:../v/suser/profile-update.php');
        }
        if($_SESSION['level']=='Pegawai'){
            if(isset($_GET['nip'])){
                header('location:../v/admin/profile-update.php?nip='.$_GET['nip']);
            } else {
                header('location:../v/admin/profile-update.php');
            }
        }
        if($_SESSION['level']=='Admin'){
            if(isset($_GET['nip'])){
                header('location:../v/admin/profile-update.php?nip='.$_GET['nip']);
            } else {
                header('location:../v/admin/profile-update.php');
            }
        }
    } else {
        header('location:../index.php');
    }
}
// end update-profile-view-controller

// start member-view-controller
if($act == 'member'){
    header('location:../v/admin/member.php');
}
// end member-view-controller

// start employee-view-controller
if($act == 'employee'){
    header('location:../v/admin/employee.php');
}
// end employee-view-controller

// start employee-search-controller
if($act == 'search-employee'){
    header('location:../v/admin/employee.php?action=search&name='.$_POST['name'].'&option=employee');
}
// end employee-search-controller

// start member-search-controller
if($act == 'search-member'){
    header('location:../v/admin/member.php?action=search&name='.$_POST['name'].'&option=member');
}
// end member-search-controller
// end view-controller

?>
<script type="text/javascript" src="../assets/dist/main-js/jquery-3.3.1.min.js"></script>
<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url();?>asset/vendor/reset.css">
    <link rel="stylesheet" href="<?php echo base_url();?>asset/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url();?>asset/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>asset/vendor/bootstrap-datetimepicker.min.css">
    <title>Document</title>
</head>
<style>
    .title-heading{
        background-color: #3F51B5;
        display:flex;
        padding:8px;
    }
    .title-heading i{
        color: #fff;
        margin-right: 10px;
    }
    .text-details{
        color: #ff5252;
        display: flex;
        justify-content: space-between;
        padding: 0 8px;
        font-size: 12px;
    }
    .ui-datepicker-div{
        position: absolute;
        top: 40%;
        left: 40%;
        z-index: 1;
        display: flex;
        justify-content: center;
    }
    #datetimepicker1{
        display: flex;
        align-items: center;
    }
</style>
<body>
    <div id="wrapper">
        <div id="header" style="box-shadow: 1px 4px 7px #ccc;">
            <div class="container">
                <div class="header__wrapp">
                    <div class="header__left">
                        <div id="logo">
                            <img src="<?php echo base_url();?>asset/image/logo/Logo-Thuy_Loi.png" alt="">
                        </div>
                    </div>
                    <div class="header__right">
                        <div class="name-school">
                            <p>PHIẾU ĐĂNG KÝ XÉT TUYỂN ĐẠI HỌC CHÍNH QUY <br>
                                (Dành cho thí sinh xét tuyển bằng học bạ)
                            </p>
                        </div>
                    </div>
                </div>
            </div>   
        </div>
        <div id="main">
            <div class="container">
                <h3 class="title-heading">
                    <i class="fas fa-exclamation-circle"></i>
                    <p>THÔNG TIN THÍ SINH</p>
                </h3>
                <div class="form-xettuyen">
                    
                    <form action="" method="POST" role="form">
                    
                    <div class="row">
                        <div class="col-md-9">
                            <div class="form-group">
                                <input type="text" class="form-control" id="" placeholder="Họ, chữ đệm và tên của thí sinh">
                            </div>
                            <div class="text-details">
                                <div class="text-messages">
                                    <p>Họ, chữ đệm và tên của thí sinh không được để trống</p>
                                </div>
                                <div class="text-count">
                                    0 / 255
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                
                                <select name="" id="input" class="form-control" required="required">
                                    <option value="">Giới tính</option>
                                    <option value="">Nam</option>
                                    <option value="">Nữ</option>
                                </select>
                            </div>
                            <div class="text-details">
                                <div class="text-messages">
                                    <p>Giới tính không được để trống</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-4">
                                <div class="form-group" id="datetimepicker1">
                                        <input type="text" class="form-control" data-format="dd/MM/yyyy" placeholder="Ngày/tháng/năm sinh">  
                                        <button type="submit" class="btn btn-info add-on">
                                            <i class="far fa-calendar-alt" data-time-icon="icon-time" data-date-icon="icon-calendar"></i>
                                        </button>
                                </div>
                            <div class="text-details">
                                <div class="text-messages">
                                    <p>Họ, chữ đệm và tên của thí sinh không được để trống</p>
                                </div>
                                <div class="text-count">
                                    0 / 255
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" class="form-control" id="datepicker" placeholder="Nơi sinh">  
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" class="form-control" id="datepicker" placeholder="Dân tộc">  
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" class="form-control" id="datepicker" placeholder="CMND hoặc căn cước Công dân">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group" id="datetimepicker1">
                                    <input type="text" class="form-control" data-format="dd/MM/yyyy" placeholder="Ngày cấp">  
                                    <button type="submit" class="btn btn-info add-on">
                                        <i class="far fa-calendar-alt" data-time-icon="icon-time" data-date-icon="icon-calendar"></i>
                                    </button>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" class="form-control" id="datepicker" placeholder="Nơi cấp">  
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="<?php echo base_url();?>asset/vendor/jquery.min.js"></script>
    <script src="<?php echo base_url();?>asset/vendor/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>asset/font/a076d05399.js"></script>
    <script src="<?php echo base_url();?>asset/js/script.js"></script>
    <script src="<?php echo base_url();?>asset/vendor/bootstrap-datetimepicker.min.js"></script>
    <script>
        $(function() {
    $('#datetimepicker1').datetimepicker({
      language: 'pt-BR'
    });
  });
    </script>
</body>
</html>
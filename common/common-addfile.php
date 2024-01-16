<?php
    session_start();
    if (!$_SESSION["LoginStudent"])
    {
        header('location:../login/login.php');
    }
    require_once "../connection/connection.php";
?>

<title>Admin - ICBS</title>
<?php include('../common/common-header.php') ?>
<?php include('../common/student-sidebar.php') ?>  
    <main role="main" class="col-xl-10 col-lg-9 col-md-8 ml-sm-auto px-md-4 mb-2 w-100 page-content-index">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link href="../css/addfile-style.css" rel="stylesheet">
    <div id="main-content" class="file_manager">
        <div class="container">            
            <div class="row clearfix">
                <div class="col-lg-3 col-md-4 col-sm-12">
                    <div class="card">
                        <div class="file">
                            <a href="javascript:void(0);">
                                <div class="hover">
                                    <button type="button" class="btn btn-icon btn-danger">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-file text-info"></i>
                                </div>
                                <div class="file-name">
                                    <p class="m-b-5 text-muted">Document_2017.doc</p>
                                    <small>Size: 42KB <span class="date text-muted">Nov 02, 2017</span></small>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>                
                <div class="col-lg-3 col-md-4 col-sm-12">
                    <div class="card">
                        <div class="file">
                            <a href="javascript:void(0);">
                                <div class="hover">
                                    <button type="button" class="btn btn-icon btn-danger">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-file text-info"></i>
                                </div>
                                <div class="file-name">
                                    <p class="m-b-5 text-muted">Document_2017.doc</p>
                                    <small>Size: 89KB <span class="date text-muted">Dec 15, 2017</span></small>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>                
                <div class="col-lg-3 col-md-4 col-sm-12">
                    <div class="card">
                        <div class="file">
                            <a href="javascript:void(0);">
                                <div class="hover">
                                    <button type="button" class="btn btn-icon btn-danger">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-file text-info"></i>
                                </div>
                                <div class="file-name">
                                    <p class="m-b-5 text-muted">Document_2017.doc</p>
                                    <small>Size: 89KB <span class="date text-muted">Dec 15, 2017</span></small>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12">
                    <div class="card">
                        <div class="file">
                            <a href="javascript:void(0);">
                                <div class="hover">
                                    <button type="button" class="btn btn-icon btn-danger">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-bar-chart text-warning"></i>
                                </div>
                                <div class="file-name">
                                    <p class="m-b-5 text-muted">Report2016.xls</p>
                                    <small>Size: 68KB <span class="date text-muted">Dec 12, 2016</span></small>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12">
                    <div class="card">
                        <div class="file">
                            <a href="javascript:void(0);">
                                <div class="hover">
                                    <button type="button" class="btn btn-icon btn-danger">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-bar-chart text-warning"></i>
                                </div>
                                <div class="file-name">
                                    <p class="m-b-5 text-muted">Report2016.xls</p>
                                    <small>Size: 68KB <span class="date text-muted">Dec 12, 2016</span></small>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12">
                    <div class="card">
                        <div class="file">
                            <a href="javascript:void(0);">
                                <div class="hover">
                                    <button type="button" class="btn btn-icon btn-danger">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-file text-success"></i>
                                </div>
                                <div class="file-name">
                                    <p class="m-b-5 text-muted">asdf  hhkj.pdf</p>
                                    <small>Size: 3MB <span class="date text-muted">Aug 18, 2017</span></small>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12">
                    <div class="card">
                        <div class="file">
                            <a href="javascript:void(0);">
                                <div class="hover">
                                    <button type="button" class="btn btn-icon btn-danger">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-file text-success"></i>
                                </div>
                                <div class="file-name">
                                    <p class="m-b-5 text-muted">asdf  hhkj.pdf</p>
                                    <small>Size: 3MB <span class="date text-muted">Aug 18, 2017</span></small>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12">
                    <div class="card">
                        <div class="file">
                            <a href="javascript:void(0);">
                                <div class="hover">
                                    <button type="button" class="btn btn-icon btn-danger">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-file text-success"></i>
                                </div>
                                <div class="file-name">
                                    <p class="m-b-5 text-muted">asdf  hhkj.pdf</p>
                                    <small>Size: 3MB <span class="date text-muted">Aug 18, 2017</span></small>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12">
                    <div class="card">
                        <div class="file">
                            <a href="javascript:void(0);">
                                <div class="hover">
                                    <button type="button" class="btn btn-icon btn-danger">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-file text-success"></i>
                                </div>
                                <div class="file-name">
                                    <p class="m-b-5 text-muted">asdf  hhkj.pdf</p>
                                    <small>Size: 3MB <span class="date text-muted">Aug 18, 2017</span></small>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12">
                    <div class="card">
                        <div class="file">
                            <a href="javascript:void(0);">
                                <div class="hover">
                                    <button type="button" class="btn btn-icon btn-danger">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-bar-chart text-warning"></i>
                                </div>
                                <div class="file-name">
                                    <p class="m-b-5 text-muted">Report2016.xls</p>
                                    <small>Size: 68KB <span class="date text-muted">Dec 12, 2016</span></small>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12">
                    <div class="card">
                        <div class="file">
                            <a href="javascript:void(0);">
                                <div class="hover">
                                    <button type="button" class="btn btn-icon btn-danger">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-bar-chart text-warning"></i>
                                </div>
                                <div class="file-name">
                                    <p class="m-b-5 text-muted">Report2017.xls</p>
                                    <small>Size: 103KB <span class="date text-muted">Jan 24, 2016</span></small>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12">
                    <div class="card">
                        <div class="file">
                            <a href="javascript:void(0);">
                                <div class="hover">
                                    <button type="button" class="btn btn-icon btn-danger">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-bar-chart text-warning"></i>
                                </div>
                                <div class="file-name">
                                    <p class="m-b-5 text-muted">Report2016.xls</p>
                                    <small>Size: 68KB <span class="date text-muted">Dec 12, 2016</span></small>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12">
                    <div class="card">
                        <div class="file">
                            <a href="javascript:void(0);">
                                <div class="hover">
                                    <button type="button" class="btn btn-icon btn-danger">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-file text-info"></i>
                                </div>
                                <div class="file-name">
                                    <p class="m-b-5 text-muted">Document_2017.doc</p>
                                    <small>Size: 42KB <span class="date text-muted">Nov 02, 2017</span></small>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12">
                    <div class="card">
                        <div class="file">
                            <a href="javascript:void(0);">
                                <div class="hover">
                                    <button type="button" class="btn btn-icon btn-danger">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-file text-info"></i>
                                </div>
                                <div class="file-name">
                                    <p class="m-b-5 text-muted">Document_2017.doc</p>
                                    <small>Size: 89KB <span class="date text-muted">Dec 15, 2017</span></small>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12">
                    <div class="card">
                        <div class="file">
                            <a href="javascript:void(0);">
                                <div class="hover">
                                    <button type="button" class="btn btn-icon btn-danger">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-bar-chart text-warning"></i>
                                </div>
                                <div class="file-name">
                                    <p class="m-b-5 text-muted">Report2017.xls</p>
                                    <small>Size: 103KB <span class="date text-muted">Jan 24, 2016</span></small>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12">
                    <div class="card">
                        <div class="file">
                            <a href="javascript:void(0);">
                                <div class="hover">
                                    <button type="button" class="btn btn-icon btn-danger">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-file text-info"></i>
                                </div>
                                <div class="file-name">
                                    <p class="m-b-5 text-muted">Document_2017.doc</p>
                                    <small>Size: 89KB <span class="date text-muted">Dec 15, 2017</span></small>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    </main>

    <script type="text/javascript" src="../bootstrap/js/jquery.min.js"></script>
    <script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
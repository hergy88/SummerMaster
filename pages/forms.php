<!DOCTYPE html>

<?php
    
?>

<html lang="it">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Registrazione studenti</title>

    <!-- Bootstrap Core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">SB Admin v2.0</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>Read All Messages</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-tasks fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-tasks">
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 1</strong>
                                        <span class="pull-right text-muted">40% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">40% Complete (success)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 2</strong>
                                        <span class="pull-right text-muted">20% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                            <span class="sr-only">20% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 3</strong>
                                        <span class="pull-right text-muted">60% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 4</strong>
                                        <span class="pull-right text-muted">80% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only">80% Complete (danger)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Tasks</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-tasks -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> New Comment
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> Message Sent
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i> New Task
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="index.html"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Charts<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="flot.html">Flot Charts</a>
                                </li>
                                <li>
                                    <a href="morris.html">Morris.js Charts</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            
                                <li>
                                    <a href="lista.html">Lista studenti iscritti</a>
                                </li>
                            
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="tables.html"><i class="fa fa-table fa-fw"></i> Tables</a>
                        </li>
                        <li>
                            <a href="forms.php"><i class="fa fa-edit fa-fw"></i> Forms</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-wrench fa-fw"></i> UI Elements<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="panels-wells.html">Panels and Wells</a>
                                </li>
                                <li>
                                    <a href="buttons.html">Buttons</a>
                                </li>
                                <li>
                                    <a href="notifications.html">Notifications</a>
                                </li>
                                <li>
                                    <a href="typography.html">Typography</a>
                                </li>
                                <li>
                                    <a href="icons.html"> Icons</a>
                                </li>
                                <li>
                                    <a href="grid.html">Grid</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">Second Level Item</a>
                                </li>
                                <li>
                                    <a href="#">Second Level Item</a>
                                </li>
                                <li>
                                    <a href="#">Third Level <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                    </ul>
                                    <!-- /.nav-third-level -->
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-files-o fa-fw"></i> Sample Pages<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="blank.html">Blank Page</a>
                                </li>
                                <li>
                                    <a href="login.html">Login Page</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Registrazione studente</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Inserire i dati richiesti
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" action="forms.php" method="post">
                                        
                                        <div class="form-group">
                                            <label>Nome:</label>
                                            <input class="form-control" name="nome" placeholder="Inserisci il nome">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Cognome:</label>
                                            <input class="form-control" name="cognome" placeholder="Inserisci il cognome">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Data di nascita:</label><br/>
                                            <input class="form-control" name="dataNascita" type="date">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>E-mail:</label><br/>
                                            <input class="form-control" type="email" name="email" placeholder="Inserisci la mail">
                                        </div>
                                        
                                        <div class="form-group"> 
                                            <label>Provenienza:</label> <br/>
                                            <select class="form-control">
                                                    <option value="ISO 3166-2:AF">Afghanistan</option>
                                                    <option value="ISO 3166-2:AX">Åland Islands</option>
                                                    <option value="ISO 3166-2:AL">Albania</option>
                                                    <option value="ISO 3166-2:DZ">Algeria</option>
                                                    <option value="ISO 3166-2:AS">American Samoa</option>
                                                    <option value="ISO 3166-2:AD">Andorra</option>
                                                    <option value="ISO 3166-2:AO">Angola</option>
                                                    <option value="ISO 3166-2:AI">Anguilla</option>
                                                    <option value="ISO 3166-2:AQ">Antarctica</option>
                                                    <option value="ISO 3166-2:AG">Antigua and Barbuda</option>
                                                    <option value="ISO 3166-2:AR">Argentina</option>
                                                    <option value="ISO 3166-2:AM">Armenia</option>
                                                    <option value="ISO 3166-2:AW">Aruba</option>
                                                    <option value="ISO 3166-2:AU">Australia</option>
                                                    <option value="ISO 3166-2:AT">Austria</option>
                                                    <option value="ISO 3166-2:AZ">Azerbaijan</option>
                                                    <option value="ISO 3166-2:BS">Bahamas</option>
                                                    <option value="ISO 3166-2:BH">Bahrain</option>
                                                    <option value="ISO 3166-2:BD">Bangladesh</option>
                                                    <option value="ISO 3166-2:BB">Barbados</option>
                                                    <option value="ISO 3166-2:BY">Belarus</option>
                                                    <option value="ISO 3166-2:BE">Belgium</option>
                                                    <option value="ISO 3166-2:BZ">Belize</option>
                                                    <option value="ISO 3166-2:BJ">Benin</option>
                                                    <option value="ISO 3166-2:BM">Bermuda</option>
                                                    <option value="ISO 3166-2:BT">Bhutan</option>
                                                    <option value="ISO 3166-2:BO">Bolivia, Plurinational State of</option>
                                                    <option value="ISO 3166-2:BQ">Bonaire, Sint Eustatius and Saba</option>
                                                    <option value="ISO 3166-2:BA">Bosnia and Herzegovina</option>
                                                    <option value="ISO 3166-2:BW">Botswana</option>
                                                    <option value="ISO 3166-2:BV">Bouvet Island</option>
                                                    <option value="ISO 3166-2:BR">Brazil</option>
                                                    <option value="ISO 3166-2:IO">British Indian Ocean Territory</option>
                                                    <option value="ISO 3166-2:BN">Brunei Darussalam</option>
                                                    <option value="ISO 3166-2:BG">Bulgaria</option>
                                                    <option value="ISO 3166-2:BF">Burkina Faso</option>
                                                    <option value="ISO 3166-2:BI">Burundi</option>
                                                    <option value="ISO 3166-2:KH">Cambodia</option>
                                                    <option value="ISO 3166-2:CM">Cameroon</option>
                                                    <option value="ISO 3166-2:CA">Canada</option>
                                                    <option value="ISO 3166-2:CV">Cape Verde</option>
                                                    <option value="ISO 3166-2:KY">Cayman Islands</option>
                                                    <option value="ISO 3166-2:CF">Central African Republic</option>
                                                    <option value="ISO 3166-2:TD">Chad</option>
                                                    <option value="ISO 3166-2:CL">Chile</option>
                                                    <option value="ISO 3166-2:CN">China</option>
                                                    <option value="ISO 3166-2:CX">Christmas Island</option>
                                                    <option value="ISO 3166-2:CC">Cocos (Keeling) Islands</option>
                                                    <option value="ISO 3166-2:CO">Colombia</option>
                                                    <option value="ISO 3166-2:KM">Comoros</option>
                                                    <option value="ISO 3166-2:CG">Congo</option>
                                                    <option value="ISO 3166-2:CD">Congo, the Democratic Republic of the</option>
                                                    <option value="ISO 3166-2:CK">Cook Islands</option>
                                                    <option value="ISO 3166-2:CR">Costa Rica</option>
                                                    <option value="ISO 3166-2:CI">Côte d'Ivoire</option>
                                                    <option value="ISO 3166-2:HR">Croatia</option>
                                                    <option value="ISO 3166-2:CU">Cuba</option>
                                                    <option value="ISO 3166-2:CW">Curaçao</option>
                                                    <option value="ISO 3166-2:CY">Cyprus</option>
                                                    <option value="ISO 3166-2:CZ">Czech Republic</option>
                                                    <option value="ISO 3166-2:DK">Denmark</option>
                                                    <option value="ISO 3166-2:DJ">Djibouti</option>
                                                    <option value="ISO 3166-2:DM">Dominica</option>
                                                    <option value="ISO 3166-2:DO">Dominican Republic</option>
                                                    <option value="ISO 3166-2:EC">Ecuador</option>
                                                    <option value="ISO 3166-2:EG">Egypt</option>
                                                    <option value="ISO 3166-2:SV">El Salvador</option>
                                                    <option value="ISO 3166-2:GQ">Equatorial Guinea</option>
                                                    <option value="ISO 3166-2:ER">Eritrea</option>
                                                    <option value="ISO 3166-2:EE">Estonia</option>
                                                    <option value="ISO 3166-2:ET">Ethiopia</option>
                                                    <option value="ISO 3166-2:FK">Falkland Islands (Malvinas)</option>
                                                    <option value="ISO 3166-2:FO">Faroe Islands</option>
                                                    <option value="ISO 3166-2:FJ">Fiji</option>
                                                    <option value="ISO 3166-2:FI">Finland</option>
                                                    <option value="ISO 3166-2:FR">France</option>
                                                    <option value="ISO 3166-2:GF">French Guiana</option>
                                                    <option value="ISO 3166-2:PF">French Polynesia</option>
                                                    <option value="ISO 3166-2:TF">French Southern Territories</option>
                                                    <option value="ISO 3166-2:GA">Gabon</option>
                                                    <option value="ISO 3166-2:GM">Gambia</option>
                                                    <option value="ISO 3166-2:GE">Georgia</option>
                                                    <option value="ISO 3166-2:DE">Germany</option>
                                                    <option value="ISO 3166-2:GH">Ghana</option>
                                                    <option value="ISO 3166-2:GI">Gibraltar</option>
                                                    <option value="ISO 3166-2:GR">Greece</option>
                                                    <option value="ISO 3166-2:GL">Greenland</option>
                                                    <option value="ISO 3166-2:GD">Grenada</option>
                                                    <option value="ISO 3166-2:GP">Guadeloupe</option>
                                                    <option value="ISO 3166-2:GU">Guam</option>
                                                    <option value="ISO 3166-2:GT">Guatemala</option>
                                                    <option value="ISO 3166-2:GG">Guernsey</option>
                                                    <option value="ISO 3166-2:GN">Guinea</option>
                                                    <option value="ISO 3166-2:GW">Guinea-Bissau</option>
                                                    <option value="ISO 3166-2:GY">Guyana</option>
                                                    <option value="ISO 3166-2:HT">Haiti</option>
                                                    <option value="ISO 3166-2:HM">Heard Island and McDonald Islands</option>
                                                    <option value="ISO 3166-2:VA">Holy See (Vatican City State)</option>
                                                    <option value="ISO 3166-2:HN">Honduras</option>
                                                    <option value="ISO 3166-2:HK">Hong Kong</option>
                                                    <option value="ISO 3166-2:HU">Hungary</option>
                                                    <option value="ISO 3166-2:IS">Iceland</option>
                                                    <option value="ISO 3166-2:IN">India</option>
                                                    <option value="ISO 3166-2:ID">Indonesia</option>
                                                    <option value="ISO 3166-2:IR">Iran, Islamic Republic of</option>
                                                    <option value="ISO 3166-2:IQ">Iraq</option>
                                                    <option value="ISO 3166-2:IE">Ireland</option>
                                                    <option value="ISO 3166-2:IM">Isle of Man</option>
                                                    <option value="ISO 3166-2:IL">Israel</option>
                                                    <option value="ISO 3166-2:IT">Italy</option>
                                                    <option value="ISO 3166-2:JM">Jamaica</option>
                                                    <option value="ISO 3166-2:JP">Japan</option>
                                                    <option value="ISO 3166-2:JE">Jersey</option>
                                                    <option value="ISO 3166-2:JO">Jordan</option>
                                                    <option value="ISO 3166-2:KZ">Kazakhstan</option>
                                                    <option value="ISO 3166-2:KE">Kenya</option>
                                                    <option value="ISO 3166-2:KI">Kiribati</option>
                                                    <option value="ISO 3166-2:KP">Korea, Democratic People's Republic of</option>
                                                    <option value="ISO 3166-2:KR">Korea, Republic of</option>
                                                    <option value="ISO 3166-2:KW">Kuwait</option>
                                                    <option value="ISO 3166-2:KG">Kyrgyzstan</option>
                                                    <option value="ISO 3166-2:LA">Lao People's Democratic Republic</option>
                                                    <option value="ISO 3166-2:LV">Latvia</option>
                                                    <option value="ISO 3166-2:LB">Lebanon</option>
                                                    <option value="ISO 3166-2:LS">Lesotho</option>
                                                    <option value="ISO 3166-2:LR">Liberia</option>
                                                    <option value="ISO 3166-2:LY">Libya</option>
                                                    <option value="ISO 3166-2:LI">Liechtenstein</option>
                                                    <option value="ISO 3166-2:LT">Lithuania</option>
                                                    <option value="ISO 3166-2:LU">Luxembourg</option>
                                                    <option value="ISO 3166-2:MO">Macao</option>
                                                    <option value="ISO 3166-2:MK">Macedonia, the former Yugoslav Republic of</option>
                                                    <option value="ISO 3166-2:MG">Madagascar</option>
                                                    <option value="ISO 3166-2:MW">Malawi</option>
                                                    <option value="ISO 3166-2:MY">Malaysia</option>
                                                    <option value="ISO 3166-2:MV">Maldives</option>
                                                    <option value="ISO 3166-2:ML">Mali</option>
                                                    <option value="ISO 3166-2:MT">Malta</option>
                                                    <option value="ISO 3166-2:MH">Marshall Islands</option>
                                                    <option value="ISO 3166-2:MQ">Martinique</option>
                                                    <option value="ISO 3166-2:MR">Mauritania</option>
                                                    <option value="ISO 3166-2:MU">Mauritius</option>
                                                    <option value="ISO 3166-2:YT">Mayotte</option>
                                                    <option value="ISO 3166-2:MX">Mexico</option>
                                                    <option value="ISO 3166-2:FM">Micronesia, Federated States of</option>
                                                    <option value="ISO 3166-2:MD">Moldova, Republic of</option>
                                                    <option value="ISO 3166-2:MC">Monaco</option>
                                                    <option value="ISO 3166-2:MN">Mongolia</option>
                                                    <option value="ISO 3166-2:ME">Montenegro</option>
                                                    <option value="ISO 3166-2:MS">Montserrat</option>
                                                    <option value="ISO 3166-2:MA">Morocco</option>
                                                    <option value="ISO 3166-2:MZ">Mozambique</option>
                                                    <option value="ISO 3166-2:MM">Myanmar</option>
                                                    <option value="ISO 3166-2:NA">Namibia</option>
                                                    <option value="ISO 3166-2:NR">Nauru</option>
                                                    <option value="ISO 3166-2:NP">Nepal</option>
                                                    <option value="ISO 3166-2:NL">Netherlands</option>
                                                    <option value="ISO 3166-2:NC">New Caledonia</option>
                                                    <option value="ISO 3166-2:NZ">New Zealand</option>
                                                    <option value="ISO 3166-2:NI">Nicaragua</option>
                                                    <option value="ISO 3166-2:NE">Niger</option>
                                                    <option value="ISO 3166-2:NG">Nigeria</option>
                                                    <option value="ISO 3166-2:NU">Niue</option>
                                                    <option value="ISO 3166-2:NF">Norfolk Island</option>
                                                    <option value="ISO 3166-2:MP">Northern Mariana Islands</option>
                                                    <option value="ISO 3166-2:NO">Norway</option>
                                                    <option value="ISO 3166-2:OM">Oman</option>
                                                    <option value="ISO 3166-2:PK">Pakistan</option>
                                                    <option value="ISO 3166-2:PW">Palau</option>
                                                    <option value="ISO 3166-2:PS">Palestinian Territory, Occupied</option>
                                                    <option value="ISO 3166-2:PA">Panama</option>
                                                    <option value="ISO 3166-2:PG">Papua New Guinea</option>
                                                    <option value="ISO 3166-2:PY">Paraguay</option>
                                                    <option value="ISO 3166-2:PE">Peru</option>
                                                    <option value="ISO 3166-2:PH">Philippines</option>
                                                    <option value="ISO 3166-2:PN">Pitcairn</option>
                                                    <option value="ISO 3166-2:PL">Poland</option>
                                                    <option value="ISO 3166-2:PT">Portugal</option>
                                                    <option value="ISO 3166-2:PR">Puerto Rico</option>
                                                    <option value="ISO 3166-2:QA">Qatar</option>
                                                    <option value="ISO 3166-2:RE">Réunion</option>
                                                    <option value="ISO 3166-2:RO">Romania</option>
                                                    <option value="ISO 3166-2:RU">Russian Federation</option>
                                                    <option value="ISO 3166-2:RW">Rwanda</option>
                                                    <option value="ISO 3166-2:BL">Saint Barthélemy</option>
                                                    <option value="ISO 3166-2:SH">Saint Helena, Ascension and Tristan da Cunha</option>
                                                    <option value="ISO 3166-2:KN">Saint Kitts and Nevis</option>
                                                    <option value="ISO 3166-2:LC">Saint Lucia</option>
                                                    <option value="ISO 3166-2:MF">Saint Martin (French part)</option>
                                                    <option value="ISO 3166-2:PM">Saint Pierre and Miquelon</option>
                                                    <option value="ISO 3166-2:VC">Saint Vincent and the Grenadines</option>
                                                    <option value="ISO 3166-2:WS">Samoa</option>
                                                    <option value="ISO 3166-2:SM">San Marino</option>
                                                    <option value="ISO 3166-2:ST">Sao Tome and Principe</option>
                                                    <option value="ISO 3166-2:SA">Saudi Arabia</option>
                                                    <option value="ISO 3166-2:SN">Senegal</option>
                                                    <option value="ISO 3166-2:RS">Serbia</option>
                                                    <option value="ISO 3166-2:SC">Seychelles</option>
                                                    <option value="ISO 3166-2:SL">Sierra Leone</option>
                                                    <option value="ISO 3166-2:SG">Singapore</option>
                                                    <option value="ISO 3166-2:SX">Sint Maarten (Dutch part)</option>
                                                    <option value="ISO 3166-2:SK">Slovakia</option>
                                                    <option value="ISO 3166-2:SI">Slovenia</option>
                                                    <option value="ISO 3166-2:SB">Solomon Islands</option>
                                                    <option value="ISO 3166-2:SO">Somalia</option>
                                                    <option value="ISO 3166-2:ZA">South Africa</option>
                                                    <option value="ISO 3166-2:GS">South Georgia and the South Sandwich Islands</option>
                                                    <option value="ISO 3166-2:SS">South Sudan</option>
                                                    <option value="ISO 3166-2:ES">Spain</option>
                                                    <option value="ISO 3166-2:LK">Sri Lanka</option>
                                                    <option value="ISO 3166-2:SD">Sudan</option>
                                                    <option value="ISO 3166-2:SR">Suriname</option>
                                                    <option value="ISO 3166-2:SJ">Svalbard and Jan Mayen</option>
                                                    <option value="ISO 3166-2:SZ">Swaziland</option>
                                                    <option value="ISO 3166-2:SE">Sweden</option>
                                                    <option value="ISO 3166-2:CH">Switzerland</option>
                                                    <option value="ISO 3166-2:SY">Syrian Arab Republic</option>
                                                    <option value="ISO 3166-2:TW">Taiwan, Province of China</option>
                                                    <option value="ISO 3166-2:TJ">Tajikistan</option>
                                                    <option value="ISO 3166-2:TZ">Tanzania, United Republic of</option>
                                                    <option value="ISO 3166-2:TH">Thailand</option>
                                                    <option value="ISO 3166-2:TL">Timor-Leste</option>
                                                    <option value="ISO 3166-2:TG">Togo</option>
                                                    <option value="ISO 3166-2:TK">Tokelau</option>
                                                    <option value="ISO 3166-2:TO">Tonga</option>
                                                    <option value="ISO 3166-2:TT">Trinidad and Tobago</option>
                                                    <option value="ISO 3166-2:TN">Tunisia</option>
                                                    <option value="ISO 3166-2:TR">Turkey</option>
                                                    <option value="ISO 3166-2:TM">Turkmenistan</option>
                                                    <option value="ISO 3166-2:TC">Turks and Caicos Islands</option>
                                                    <option value="ISO 3166-2:TV">Tuvalu</option>
                                                    <option value="ISO 3166-2:UG">Uganda</option>
                                                    <option value="ISO 3166-2:UA">Ukraine</option>
                                                    <option value="ISO 3166-2:AE">United Arab Emirates</option>
                                                    <option value="ISO 3166-2:GB">United Kingdom</option>
                                                    <option value="ISO 3166-2:US">United States</option>
                                                    <option value="ISO 3166-2:UM">United States Minor Outlying Islands</option>
                                                    <option value="ISO 3166-2:UY">Uruguay</option>
                                                    <option value="ISO 3166-2:UZ">Uzbekistan</option>
                                                    <option value="ISO 3166-2:VU">Vanuatu</option>
                                                    <option value="ISO 3166-2:VE">Venezuela, Bolivarian Republic of</option>
                                                    <option value="ISO 3166-2:VN">Viet Nam</option>
                                                    <option value="ISO 3166-2:VG">Virgin Islands, British</option>
                                                    <option value="ISO 3166-2:VI">Virgin Islands, U.S.</option>
                                                    <option value="ISO 3166-2:WF">Wallis and Futuna</option>
                                                    <option value="ISO 3166-2:EH">Western Sahara</option>
                                                    <option value="ISO 3166-2:YE">Yemen</option>
                                                    <option value="ISO 3166-2:ZM">Zambia</option>
                                                    <option value="ISO 3166-2:ZW">Zimbabwe</option>
                                            </select>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Formazione:</label>
                                            <input class="form-control"  name="formazione" placeholder="Inserisci la formazione">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Professione e luogo di professione:</label>
                                            <input class="form-control" name="professione" placeholder="Inserisci professione e luogo">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Corsi:</label>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="">1: Public Mental Health: Evaluations of Programs and Policies
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox"  value="">2: Methodology and Practical Application of Economic Evaluation and HTA in Health Care
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="">3: Systems Approaches for Health Systems Performance
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="">4: Leadership via Communication
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="">5: Bridging the gap between evidence and policy making
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="">6: Non-communicable Disease Control: Public Health and Health Care Approaches
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="">7: Economics and Management of "One Health"
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="">8: eHealth
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="">9: Health Financing Policies, Heath System Performance and Obstacles to Universal Health Coverage
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="">10: Customized Care, Yes but How?
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="">11: National Dementia Plans and Policies - from design & implementation, to monitoring & evaluation 
                                                </label>
                                            </div>
                                        </div>

                                        
                                        <div>
                                            <p>
                                                <label>SSPH+:</label> <br/>
                                                <input type="radio" name="ssph+" value="yes">Si
                                                    &nbsp &nbsp   
                                                <input type="radio" name="ssph+" value="no">No
                                            </p>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Quota da pagare:</label>
                                            <input class="form-control" name="quota" name="quota" placeholder="Inserisci la quota">
                                        </div>
                                        
                                        <div>
                                            <p>
                                                <label>Pagato:</label> <br/>
                                                <input type="radio" name="pagato" value="yes">Si
                                                    &nbsp &nbsp   
                                                <input type="radio" name="pagato" value="no">No
                                                    &nbsp &nbsp
                                                <input type="radio" name="pagato" value="no">Parzialmente
                                                    &nbsp &nbsp
                                                <input class="form-control" placeholder="Pagato CHF">
                                            </p>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Data pagamento:</label><br/>
                                            <input class="form-control" name="dataPagamento" type="date">
                                        </div>
                                        
                                        <div class="form-group">
                                            <p>
                                                <label>Partecipazione aperitivo:</label> <br/>
                                                <input type="radio" name="apero" value="si">Si
                                                    &nbsp &nbsp   
                                                <input type="radio" name="apero" value="no">No
                                            </p>
                                        </div>
                                        
                                        <div class="form-group">
                                            <p>
                                                <label>Partecipazione Boat Tour:</label> <br/>
                                                <input type="radio" name="boat" value="si">Si
                                                    &nbsp &nbsp   
                                                <input type="radio" name="boat" value="no">No
                                            </p>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Intolleranze alimentari e allergie:</label>
                                            <input class="form-control" name="intollerante" placeholder="Inserisci le intolleranze">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Eventuali osservazioni:</label>
                                            <textarea class="form-control" rows="3" name="osservazioni" placeholder="Inserisci le osservazioni"></textarea>
                                        </div>
                                        
                                        
                                        <div class="form-group">
                                            <label>Foto (opzionale):</label>
                                            <input type="file" name="foto">
                                        </div>
                                        
                                        
                                        
<!--                                            <div class="form-group">
                                            <label>Inline Checkboxes</label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox">1
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox">2
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox">3
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label>Radio Buttons</label>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>Radio 1
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">Radio 2
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">Radio 3
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Inline Radio Buttons</label>
                                            <label class="radio-inline">
                                                <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline1" value="option1" checked>1
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline2" value="option2">2
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline3" value="option3">3
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label>Selects</label>
                                            <select class="form-control">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Multiple Selects</label>
                                            <select multiple class="form-control">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>-->
                                        <button type="submit" class="btn btn-default">Salva</button>
                                        <button type="reset" class="btn btn-default">Reset</button>
<!--                                    </form>
                                </div>
                                 /.col-lg-6 (nested) 
                                <div class="col-lg-6">
                                    <h1>Disabled Form States</h1>
                                    <form role="form">
                                        <fieldset disabled>
                                            <div class="form-group">
                                                <label for="disabledSelect">Disabled input</label>
                                                <input class="form-control" id="disabledInput" type="text" placeholder="Disabled input" disabled>
                                            </div>
                                            <div class="form-group">
                                                <label for="disabledSelect">Disabled select menu</label>
                                                <select id="disabledSelect" class="form-control">
                                                    <option>Disabled select</option>
                                                </select>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox">Disabled Checkbox
                                                </label>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Disabled Button</button>
                                        </fieldset>
                                    </form>
                                    <h1>Form Validation States</h1>
                                    <form role="form">
                                        <div class="form-group has-success">
                                            <label class="control-label" for="inputSuccess">Input with success</label>
                                            <input type="text" class="form-control" id="inputSuccess">
                                        </div>
                                        <div class="form-group has-warning">
                                            <label class="control-label" for="inputWarning">Input with warning</label>
                                            <input type="text" class="form-control" id="inputWarning">
                                        </div>
                                        <div class="form-group has-error">
                                            <label class="control-label" for="inputError">Input with error</label>
                                            <input type="text" class="form-control" id="inputError">
                                        </div>
                                    </form>
                                    <h1>Input Groups</h1>
                                    <form role="form">
                                        <div class="form-group input-group">
                                            <span class="input-group-addon">@</span>
                                            <input type="text" class="form-control" placeholder="Username">
                                        </div>
                                        <div class="form-group input-group">
                                            <input type="text" class="form-control">
                                            <span class="input-group-addon">.00</span>
                                        </div>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-eur"></i>
                                            </span>
                                            <input type="text" class="form-control" placeholder="Font Awesome Icon">
                                        </div>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon">$</span>
                                            <input type="text" class="form-control">
                                            <span class="input-group-addon">.00</span>
                                        </div>
                                        <div class="form-group input-group">
                                            <input type="text" class="form-control">
                                            <span class="input-group-btn">
                                                <button class="btn btn-default" type="button"><i class="fa fa-search"></i>
                                                </button>
                                            </span>
                                        </div>-->
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Elements - Deep Blue Admin</title>

    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="css/local.css" />

    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

    <div id="wrapper">
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/dashboard">Back to Admin</a>
            </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                @include('partials.sidebar')
                <ul class="nav navbar-nav navbar-right navbar-user">
                    <li class="dropdown messages-dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> Messages <span class="badge">2</span> <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-header">2 New Messages</li>
                            <li class="message-preview">
                                <a href="#">
                                    <span class="avatar"><i class="fa fa-bell"></i></span>
                                    <span class="message">Security alert</span>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li class="message-preview">
                                <a href="#">
                                    <span class="avatar"><i class="fa fa-bell"></i></span>
                                    <span class="message">Security alert</span>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="#">Go to Inbox <span class="badge">2</span></a></li>
                        </ul>
                    </li>
                    <li class="dropdown user-dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Steve Miller<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#"><i class="fa fa-user"></i> Profile</a></li>
                            <li><a href="#"><i class="fa fa-gear"></i> Settings</a></li>
                            <li class="divider"></li>
                            <li><a href="#"><i class="fa fa-power-off"></i> Log Out</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>

       <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <h1 id="buttons" class="page-header">Buttons</h1>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-6">

              <p>
                <button type="button" class="btn btn-default">Default</button>
                <button type="button" class="btn btn-primary">Primary</button>
                <button type="button" class="btn btn-success">Success</button>
                <button type="button" class="btn btn-info">Info</button>
                <button type="button" class="btn btn-warning">Warning</button>
                <button type="button" class="btn btn-danger">Danger</button>
                <button type="button" class="btn btn-link">Link</button>
              </p>

              <p>
                <button type="button" class="btn btn-default disabled">Default</button>
                <button type="button" class="btn btn-primary disabled">Primary</button>
                <button type="button" class="btn btn-success disabled">Success</button>
                <button type="button" class="btn btn-info disabled">Info</button>
                <button type="button" class="btn btn-warning disabled">Warning</button>
                <button type="button" class="btn btn-danger disabled">Danger</button>
                <button type="button" class="btn btn-link disabled">Link</button>
              </p>

              <p>
                <div class="btn-group">
                  <button type="button" class="btn btn-default">Default</button>
                  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
                  <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                  </ul>
                </div><!-- /btn-group -->
                <div class="btn-group">
                  <button type="button" class="btn btn-primary">Primary</button>
                  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
                  <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                  </ul>
                </div><!-- /btn-group -->
                <div class="btn-group">
                  <button type="button" class="btn btn-success">Success</button>
                  <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
                  <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                  </ul>
                </div><!-- /btn-group -->
                <div class="btn-group">
                  <button type="button" class="btn btn-info">Info</button>
                  <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
                  <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                  </ul>
                </div><!-- /btn-group -->
                <div class="btn-group">
                  <button type="button" class="btn btn-warning">Warning</button>
                  <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
                  <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                  </ul>
                </div><!-- /btn-group -->
              </p>

              <p>
                <button type="button" class="btn btn-primary btn-lg">Large button</button>
                <button type="button" class="btn btn-primary">Default button</button>
                <button type="button" class="btn btn-primary btn-sm">Small button</button>
                <button type="button" class="btn btn-primary btn-xs">Mini button</button>
              </p>

          </div>

          <div class="col-lg-6">

            <p>
              <button type="button" class="btn btn-default btn-lg btn-block">Block level button</button>
            </p>

            <p>
              <div class="btn-group btn-group-justified">
                <a href="#" class="btn btn-default">Left</a>
                <a href="#" class="btn btn-default">Right</a>
                <a href="#" class="btn btn-default">Middle</a>
              </div>
            </p>

            <p>
              <div class="btn-toolbar">
                <div class="btn-group">
                  <button type="button" class="btn btn-default">1</button>
                  <button type="button" class="btn btn-default">2</button>
                  <button type="button" class="btn btn-default">3</button>
                  <button type="button" class="btn btn-default">4</button>
                </div>
                <div class="btn-group">
                  <button type="button" class="btn btn-default">5</button>
                  <button type="button" class="btn btn-default">6</button>
                  <button type="button" class="btn btn-default">7</button>
                </div>
                <div class="btn-group">
                  <button type="button" class="btn btn-default">8</button>

                  <div class="btn-group">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                      Dropdown
                      <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu">
                      <li><a href="#">Dropdown link</a></li>
                      <li><a href="#">Dropdown link</a></li>
                      <li><a href="#">Dropdown link</a></li>
                     </ul>
                  </div>
                </div>
              </div>
            </p>

            <p>
              <div class="btn-group-vertical">
                  <button type="button" class="btn btn-default">Button</button>
                  <button type="button" class="btn btn-default">Button</button>
                  <button type="button" class="btn btn-default">Button</button>
                  <button type="button" class="btn btn-default">Button</button>
              </div>
            </p>

          </div>
        </div><!-- /.row -->

        <div class="row">
          <div class="col-lg-12">
            <div class="page-header">
              <h1 id="navs">Navs</h1>
            </div>
          </div>
        </div><!-- /.row -->

        <div class="row">
          <div class="col-lg-4">
            <h2 id="nav-tabs">Tabs</h2>
            <div class="bs-example">
              <ul class="nav nav-tabs" style="margin-bottom: 15px;">
                <li class="active"><a href="#home" data-toggle="tab">Home</a></li>
                <li><a href="#profile" data-toggle="tab">Profile</a></li>
                <li class="disabled"><a>Disabled</a></li>
                <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    Dropdown <span class="caret"></span>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a href="#dropdown1" data-toggle="tab">Action</a></li>
                    <li class="divider"></li>
                    <li><a href="#dropdown2" data-toggle="tab">Another action</a></li>
                  </ul>
                </li>
              </ul>
              <div id="myTabContent" class="tab-content">
                <div class="tab-pane fade active in" id="home">
                  <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
                </div>
                <div class="tab-pane fade" id="profile">
                  <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit.</p>
                </div>
                <div class="tab-pane fade" id="dropdown1">
                  <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork.</p>
                </div>
                <div class="tab-pane fade" id="dropdown2">
                  <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <h2 id="nav-pills">Pills</h2>
            <div class="bs-example">
              <ul class="nav nav-pills">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#">Profile</a></li>
                <li class="disabled"><a href="#">Disabled</a></li>
                <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    Dropdown <span class="caret"></span>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                  </ul>
                </li>
              </ul>
            </div>
            <br>
            <div class="bs-example">
              <ul class="nav nav-pills nav-stacked" style="max-width: 300px;">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#">Profile</a></li>
                <li class="disabled"><a href="#">Disabled</a></li>
                <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    Dropdown <span class="caret"></span>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-lg-4">
            <h2 id="nav-breadcrumbs">Breadcrumbs</h2>
            <div class="bs-example">
              <ul class="breadcrumb">
                <li class="active">Home</li>
              </ul>
              <ul class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Library</li>
              </ul>
              <ul class="breadcrumb" style="margin-bottom: 5px;">
                <li><a href="#">Home</a></li>
                <li><a href="#">Library</a></li>
                <li class="active">Data</li>
              </ul>
            </div>

          </div>
        </div><!-- /.row -->

        <div class="row">
          <div class="col-lg-4">
            <h2 id="pagination">Pagination</h2>
            <div class="bs-example">
              <ul class="pagination">
                <li class="disabled"><a href="#">&laquo;</a></li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">&raquo;</a></li>
              </ul>
              <ul class="pagination pagination-lg">
                <li class="disabled"><a href="#">&laquo;</a></li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">&raquo;</a></li>
              </ul>
              <ul class="pagination pagination-sm">
                <li class="disabled"><a href="#">&laquo;</a></li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">&raquo;</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-4">
            <h2 id="pager">Pager</h2>
            <div class="bs-example">
              <ul class="pager">
                <li><a href="#">Previous</a></li>
                <li><a href="#">Next</a></li>
              </ul>
            </div>
            <div class="bs-example">
              <ul class="pager">
                <li class="previous disabled"><a href="#">&larr; Older</a></li>
                <li class="next"><a href="#">Newer &rarr;</a></li>
              </ul>
            </div>
          </div>
        </div><!-- /.row -->

        <div class="row">
          <div class="col-lg-12">
            <div class="page-header">
              <h1 id="indicators">Indicators</h1>
            </div>
          </div>
        </div><!-- /.row -->

        <div class="row">
          <div class="col-lg-12">
            <h2>Alerts</h2>
            <div class="bs-example">
              <div class="alert alert-dismissable alert-warning">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <h4>Warning!</h4>
                <p>Best check yo self, you're not looking too good. Nulla vitae elit libero, a pharetra augue. Praesent commodo cursus magna, <a href="#" class="alert-link">vel scelerisque nisl consectetur et</a>.</p>
              </div>
            </div>
          </div>
        </div><!-- /.row -->

        <div class="row">
          <div class="col-lg-4">
            <div class="alert alert-dismissable alert-danger">
              <button type="button" class="close" data-dismiss="alert">&times;</button>
              <strong>Oh snap!</strong> <a href="#" class="alert-link">Change a few things up</a> and try submitting again.
            </div>
          </div>
          <div class="col-lg-4">
            <div class="alert alert-dismissable alert-success">
              <button type="button" class="close" data-dismiss="alert">&times;</button>
              <strong>Well done!</strong> You successfully read <a href="#" class="alert-link">this important alert message</a>.
            </div>
          </div>
          <div class="col-lg-4">
            <div class="alert alert-dismissable alert-info">
              <button type="button" class="close" data-dismiss="alert">&times;</button>
              <strong>Heads up!</strong> This <a href="#" class="alert-link">alert needs your attention</a>, but it's not super important.
            </div>
          </div>
        </div><!-- /.row -->

        <div class="row">
          <div class="col-lg-4">
            <h2>Labels</h2>
            <div class="bs-example" style="margin-bottom: 40px;">
              <span class="label label-default">Default</span>
              <span class="label label-primary">Primary</span>
              <span class="label label-success">Success</span>
              <span class="label label-warning">Warning</span>
              <span class="label label-danger">Danger</span>
              <span class="label label-info">Info</span>
            </div>
          </div>
          <div class="col-lg-4">
            <h2>Badges</h2>
            <div class="bs-example">
              <ul class="nav nav-pills">
                <li class="active"><a href="#">Home <span class="badge">42</span></a></li>
                <li><a href="#">Profile <span class="badge"></span></a></li>
                <li><a href="#">Messages <span class="badge">3</span></a></li>
              </ul>
            </div>
          </div>
        </div><!-- /.row -->

        <div class="row">
          <div class="col-lg-12">
            <div class="page-header">
              <h1 id="progress">Progress bars</h1>
            </div>

            <h3 id="progress-basic">Basic</h3>
            <div class="bs-example">
              <div class="progress">
                <div class="progress-bar" style="width: 60%;"></div>
              </div>
            </div>

            <h3 id="progress-alternatives">Contextual alternatives</h3>
            <div class="bs-example">
              <div class="progress" style="margin-bottom: 9px;">
                <div class="progress-bar progress-bar-info" style="width: 20%"></div>
              </div>
              <div class="progress" style="margin-bottom: 9px;">
                <div class="progress-bar progress-bar-success" style="width: 40%"></div>
              </div>
              <div class="progress" style="margin-bottom: 9px;">
                <div class="progress-bar progress-bar-warning" style="width: 60%"></div>
              </div>
              <div class="progress">
                <div class="progress-bar progress-bar-danger" style="width: 80%"></div>
              </div>
            </div>

            <h3 id="progress-striped">Striped</h3>
            <div class="bs-example">
              <div class="progress progress-striped" style="margin-bottom: 9px;">
                <div class="progress-bar progress-bar-info" style="width: 20%"></div>
              </div>
              <div class="progress progress-striped" style="margin-bottom: 9px;">
                <div class="progress-bar progress-bar-success" style="width: 40%"></div>
              </div>
              <div class="progress progress-striped" style="margin-bottom: 9px;">
                <div class="progress-bar progress-bar-warning" style="width: 60%"></div>
              </div>
              <div class="progress progress-striped">
                <div class="progress-bar progress-bar-danger" style="width: 80%"></div>
              </div>
            </div>

            <h3 id="progress-animated">Animated</h3>
            <div class="bs-example">
              <div class="progress progress-striped active">
                <div class="progress-bar" style="width: 45%"></div>
              </div>
            </div>

            <h3 id="progress-stacked">Stacked</h3>
            <div class="bs-example">
              <div class="progress">
                <div class="progress-bar progress-bar-success" style="width: 35%"></div>
                <div class="progress-bar progress-bar-warning" style="width: 20%"></div>
                <div class="progress-bar progress-bar-danger" style="width: 10%"></div>
              </div>
            </div>
          </div>
        </div><!-- /.row -->

        <div class="row">
          <div class="col-lg-12">
            <div class="page-header">
              <h1 id="container">Containers</h1>
            </div>
            <div class="bs-example">
              <div class="jumbotron">
                <h1>Jumbotron</h1>
                <p>This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
                <p><a class="btn btn-primary btn-lg">Learn more</a></p>
              </div>
            </div>
          </div>
        </div><!-- /.row -->

        <div class="row">
          <div class="col-lg-12">
            <h2>List groups</h2>
          </div>
        </div><!-- /.row -->

        <div class="row">
          <div class="col-lg-4">
            <div class="bs-example">
              <ul class="list-group">
                <li class="list-group-item">
                  <span class="badge">14</span>
                  Cras justo odio
                </li>
                <li class="list-group-item">
                  <span class="badge">2</span>
                  Dapibus ac facilisis in
                </li>
                <li class="list-group-item">
                  <span class="badge">1</span>
                  Morbi leo risus
                </li>
              </ul>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="bs-example">
              <div class="list-group">
                <a href="#" class="list-group-item active">
                  Cras justo odio
                </a>
                <a href="#" class="list-group-item">Dapibus ac facilisis in
                </a>
                <a href="#" class="list-group-item">Morbi leo risus
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="bs-example">
              <div class="list-group">
                <a href="#" class="list-group-item">
                  <h4 class="list-group-item-heading">List group item heading</h4>
                  <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                </a>
                <a href="#" class="list-group-item">
                  <h4 class="list-group-item-heading">List group item heading</h4>
                  <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                </a>
              </div>
            </div>
          </div>
        </div><!-- /.row -->

        <div class="row">
          <div class="col-lg-12">
            <h2>Panels</h2>
          </div>
        </div><!-- /.row -->

        <div class="row">
          <div class="col-lg-4">
            <div class="panel panel-default">
              <div class="panel-body">
                Basic panel
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading">Panel heading</div>
              <div class="panel-body">
                Panel content
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-body">
                Panel content
              </div>
              <div class="panel-footer">Panel footer</div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title">Panel primary</h3>
              </div>
              <div class="panel-body">
                Panel content
              </div>
            </div>
            <div class="panel panel-success">
              <div class="panel-heading">
                <h3 class="panel-title">Panel success</h3>
              </div>
              <div class="panel-body">
                Panel content
              </div>
            </div>
            <div class="panel panel-warning">
              <div class="panel-heading">
                <h3 class="panel-title">Panel warning</h3>
              </div>
              <div class="panel-body">
                Panel content
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="panel panel-danger">
              <div class="panel-heading">
                <h3 class="panel-title">Panel danger</h3>
              </div>
              <div class="panel-body">
                Panel content
              </div>
            </div>
            <div class="panel panel-info">
              <div class="panel-heading">
                <h3 class="panel-title">Panel info</h3>
              </div>
              <div class="panel-body">
                Panel content
              </div>
            </div>
          </div>
        </div><!-- /.row -->

        <div class="row">
          <div class="col-lg-12">
            <h2>Wells</h2>
          </div>
        </div><!-- /.row -->

        <div class="row">
          <div class="col-lg-4">
            <div class="well">
              Look, I'm in a well!
            </div>
          </div>
          <div class="col-lg-4">
            <div class="well well-sm">
              Look, I'm in a small well!
            </div>
          </div>
          <div class="col-lg-4">
            <div class="well well-lg">
              Look, I'm in a large well!
            </div>
          </div>
        </div>

      </div>
    </div>

</body>
</html>

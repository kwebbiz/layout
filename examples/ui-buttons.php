<?php include('../header.php');?>
    <style>
        .btn-demo > .btn, .btn-group-demo > .btn-group {
            margin: 0 5px 10px 0;
        }
    </style>
    <div class="container">
        <div class="block-header">
            <h2>Buttons</h2>

            <ul class="actions">
                <li>
                    <a href="">
                        <i class="zmdi zmdi-trending-up"></i>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="zmdi zmdi-check-all"></i>
                    </a>
                </li>
                <li class="dropdown">
                    <a href="" data-toggle="dropdown">
                        <i class="zmdi zmdi-more-vert"></i>
                    </a>

                    <ul class="dropdown-menu dropdown-menu-right">
                        <li>
                            <a href="">Refresh</a>
                        </li>
                        <li>
                            <a href="">Manage Widgets</a>
                        </li>
                        <li>
                            <a href="">Widgets Settings</a>
                        </li>
                    </ul>
                </li>
            </ul>

        </div>

        <div class="card">
            <div class="card-header">
                <h2>Basic Examples
                    <small>Use any of the available button classes to quickly create a styled button.
                    </small>
                </h2>

                <ul class="actions">
                    <li class="dropdown action-show">
                        <a href="" data-toggle="dropdown">
                            <i class="zmdi zmdi-more-vert"></i>
                        </a>

                        <div class="dropdown-menu pull-right">
                            <p class="p-20">
                                You can put anything here
                            </p>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="card-body card-padding">
                <p class="f-500 c-black m-b-20">Bootstrap Color Schemes</p>

                <div class="btn-demo">
                    <button class="btn btn-default">Default</button>
                    <button class="btn btn-info">Info</button>
                    <button class="btn btn-primary">Primary</button>
                    <button class="btn btn-success">Success</button>
                    <button class="btn btn-warning">Warning</button>
                    <button class="btn btn-danger">Danger</button>
                </div>

                <br/>
                <br/>

                <p class="f-500 c-black m-b-20">Optional Material Design Colors</p>

                <div class="btn-colors btn-demo"> <!-- Optional container for demo porpose only -->
                    <button class="btn bgm-cyan">Cyan</button>
                    <button class="btn bgm-teal">Teal</button>
                    <button class="btn bgm-amber">Amber</button>
                    <button class="btn bgm-orange">Orange</button>
                    <button class="btn bgm-deeporange">Deep Orange</button>
                    <button class="btn bgm-red">Red</button>
                    <button class="btn bgm-pink">Pink</button>
                    <button class="btn bgm-lightblue">Light Blue</button>
                    <button class="btn bgm-blue">Blue</button>
                    <button class="btn bgm-indigo">Indigo</button>
                    <button class="btn bgm-lime">Lime</button>
                    <button class="btn bgm-lightgreen">Light Green</button>
                    <button class="btn bgm-green">Green</button>
                    <button class="btn bgm-purple">Purple</button>
                    <button class="btn bgm-deeppurple">Deep Purple</button>
                    <button class="btn bgm-gray">Gray</button>
                    <button class="btn bgm-bluegray">Blue Gray</button>
                    <button class="btn bgm-black">Black</button>
                </div>

                <br/>
                <br/>

                <p class="f-500 c-black m-b-5">Button Sizes</p>
                <small>Fancy larger or smaller buttons? Add the button sizing classes.</small>

                <br/>
                <br/>

                <div class="btn-demo">
                    <button class="btn btn-primary btn-lg">Large</button>
                    <button class="btn btn-primary">Default</button>
                    <button class="btn btn-primary btn-sm">Small</button>
                    <button class="btn btn-primary btn-xs">Extra Small</button>
                </div>

                <br/>
                <br/>

                <p class="f-500 c-black m-b-20">Disable Stat</p>

                <div class="btn-demo">
                    <button class="btn btn-default" disabled="disabled">Default</button>
                    <button class="btn btn-info" disabled="disabled">Info</button>
                    <button class="btn btn-primary" disabled="disabled">Primary</button>
                    <button class="btn btn-success" disabled="disabled">Success</button>
                    <button class="btn btn-warning" disabled="disabled">Warning</button>
                    <button class="btn btn-danger" disabled="disabled">Danger</button>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h2>Button Icons
                    <small>You can refer the Icons page for the complete list of Font Icons which are
                        inspired by Material Design
                    </small>
                </h2>
            </div>
            <div class="card-body card-padding">
                <div class="btn-demo">
                    <button class="btn btn-default btn-icon-text"><i class="zmdi zmdi-home"></i> Home
                    </button>
                    <button class="btn btn-default btn-icon-text"><i class="zmdi zmdi-search"></i> Search
                    </button>
                    <button class="btn btn-default btn-icon-text"><i class="zmdi zmdi-more-vert"></i> More
                    </button>
                    <button class="btn btn-default btn-icon-text"><i class="zmdi zmdi-arrow-forward"></i>
                        Forward
                    </button>
                    <button class="btn btn-default btn-icon-text"><i class="zmdi zmdi-arrow-back"></i> Back
                    </button>
                    <button class="btn btn-default btn-icon-text"><i class="zmdi zmdi-refresh"></i> Sync
                    </button>
                    <button class="btn btn-default btn-icon-text"><i class="zmdi zmdi-check"></i> Check
                    </button>
                    <button class="btn btn-default btn-icon-text"><i class="zmdi zmdi-close"></i> Check
                    </button>
                    <button class="btn btn-default btn-icon-text"><i class="zmdi zmdi-menu"></i> Menu
                    </button>
                    <button class="btn btn-default btn-icon-text"><i class="zmdi zmdi-apps"></i> Apps
                    </button>
                    <button class="btn btn-default btn-icon-text"><i class="zmdi zmdi-check-all"></i> Done
                    </button>
                    <button class="btn btn-default btn-icon-text"><i class="zmdi zmdi-trending-up"></i> Up
                    </button>
                    <button class="btn btn-default btn-icon-text"><i class="zmdi zmdi-apps"></i> Get
                    </button>
                    <button class="btn btn-default btn-icon-text"><i class="zmdi zmdi-phone"></i> Call
                    </button>

                    <br/>
                    <br/>
                    <br/>


                    <button class="btn btn-default"><i class="zmdi zmdi-home"></i></button>
                    <button class="btn btn-default"><i class="zmdi zmdi-search"></i></button>
                    <button class="btn btn-default"><i class="zmdi zmdi-more-vert"></i></button>
                    <button class="btn btn-default"><i class="zmdi zmdi-arrow-forward"></i></button>
                    <button class="btn btn-default"><i class="zmdi zmdi-arrow-back"></i></button>
                    <button class="btn btn-default"><i class="zmdi zmdi-refresh"></i></button>
                    <button class="btn btn-default"><i class="zmdi zmdi-check"></i></button>
                    <button class="btn btn-default"><i class="zmdi zmdi-close"></i></button>
                    <button class="btn btn-default"><i class="zmdi zmdi-menu"></i></button>
                    <button class="btn btn-default"><i class="zmdi zmdi-apps"></i></button>
                    <button class="btn btn-default"><i class="zmdi zmdi-check-all"></i></button>
                    <button class="btn btn-default"><i class="zmdi zmdi-trending-up"></i></button>
                    <button class="btn btn-default"><i class="zmdi zmdi-apps"></i></button>
                    <button class="btn btn-default"><i class="zmdi zmdi-phone"></i></button>

                    <br/>
                    <br/>

                    <button class="btn btn-primary"><i class="zmdi zmdi-home"></i></button>
                    <button class="btn btn-info"><i class="zmdi zmdi-search"></i></button>
                    <button class="btn btn-success"><i class="zmdi zmdi-more-vert"></i></button>
                    <button class="btn btn-warning"><i class="zmdi zmdi-arrow-forward"></i></button>
                    <button class="btn btn-danger"><i class="zmdi zmdi-arrow-back"></i></button>
                    <button class="btn bgm-teal"><i class="zmdi zmdi-refresh"></i></button>
                    <button class="btn bgm-orange"><i class="zmdi zmdi-check"></i></button>
                    <button class="btn bgm-cyan"><i class="zmdi zmdi-close"></i></button>
                    <button class="btn bgm-lightgreen"><i class="zmdi zmdi-menu"></i></button>
                    <button class="btn bgm-lime"><i class="zmdi zmdi-apps"></i></button>
                    <button class="btn bgm-amber"><i class="zmdi zmdi-check-all"></i></button>
                    <button class="btn bgm-gray"><i class="zmdi zmdi-trending-up"></i></button>
                    <button class="btn bgm-lightblue"><i class="zmdi zmdi-apps"></i></button>
                    <button class="btn bgm-deeporange"><i class="zmdi zmdi-phone"></i></button>

                    <br/>
                    <br/>
                    <br/>

                    <button class="btn btn-default btn-icon"><i class="zmdi zmdi-home"></i></button>
                    <button class="btn btn-default btn-icon"><i class="zmdi zmdi-search"></i></button>
                    <button class="btn btn-default btn-icon"><i class="zmdi zmdi-more-vert"></i></button>
                    <button class="btn btn-default btn-icon"><i class="zmdi zmdi-arrow-forward"></i>
                    </button>
                    <button class="btn btn-default btn-icon"><i class="zmdi zmdi-arrow-back"></i></button>
                    <button class="btn btn-default btn-icon"><i class="zmdi zmdi-refresh"></i></button>
                    <button class="btn btn-default btn-icon"><i class="zmdi zmdi-check"></i></button>
                    <button class="btn btn-default btn-icon"><i class="zmdi zmdi-close"></i></button>
                    <button class="btn btn-default btn-icon"><i class="zmdi zmdi-menu"></i></button>
                    <button class="btn btn-default btn-icon"><i class="zmdi zmdi-apps"></i></button>
                    <button class="btn btn-default btn-icon"><i class="zmdi zmdi-check-all"></i></button>
                    <button class="btn btn-default btn-icon"><i class="zmdi zmdi-trending-up"></i></button>
                    <button class="btn btn-default btn-icon"><i class="zmdi zmdi-apps"></i></button>
                    <button class="btn btn-default btn-icon"><i class="zmdi zmdi-phone"></i></button>

                    <br/>
                    <br/>

                    <button class="btn btn-primary btn-icon"><i class="zmdi zmdi-home"></i></button>
                    <button class="btn btn-info btn-icon"><i class="zmdi zmdi-search"></i></button>
                    <button class="btn btn-success btn-icon"><i class="zmdi zmdi-more-vert"></i></button>
                    <button class="btn btn-warning btn-icon"><i class="zmdi zmdi-arrow-forward"></i>
                    </button>
                    <button class="btn btn-danger btn-icon"><i class="zmdi zmdi-arrow-back"></i></button>
                    <button class="btn bgm-teal btn-icon"><i class="zmdi zmdi-refresh"></i></button>
                    <button class="btn bgm-orange btn-icon"><i class="zmdi zmdi-check"></i></button>
                    <button class="btn bgm-cyan btn-icon"><i class="zmdi zmdi-close"></i></button>
                    <button class="btn bgm-lightgreen btn-icon"><i class="zmdi zmdi-menu"></i></button>
                    <button class="btn bgm-lime btn-icon"><i class="zmdi zmdi-apps"></i></button>
                    <button class="btn bgm-amber btn-icon"><i class="zmdi zmdi-check-all"></i></button>
                    <button class="btn bgm-gray btn-icon"><i class="zmdi zmdi-trending-up"></i></button>
                    <button class="btn bgm-lightblue btn-icon"><i class="zmdi zmdi-apps"></i></button>
                    <button class="btn bgm-deeporange btn-icon"><i class="zmdi zmdi-phone"></i></button>


                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h2>Block Level Buttons
                    <small>Create block level buttons - those that span the full width of a parent - by
                        adding .btn-block.
                    </small>
                </h2>
            </div>

            <div class="card-padding card-body">
                <button class="btn btn-default btn-block">Default</button>

                <br/>
                <br/>

                <button class="btn btn-primary btn-block">Primary</button>

            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h2>Button Groups
                    <small>Group a series of buttons together on a single line with the button group</small>
                </h2>
            </div>

            <div class="card-body card-padding">
                <p class="f-500 c-black m-b-20">Basic Example</p>
                <div class="btn-group-demo">
                    <div class="btn-group">
                        <button type="button" class="btn btn-default">Left</button>
                        <button type="button" class="btn btn-default">Middle</button>
                        <button type="button" class="btn btn-default">Right</button>
                    </div>

                    <div class="btn-group">
                        <button type="button" class="btn btn-primary">Left</button>
                        <button type="button" class="btn btn-primary">Middle</button>
                        <button type="button" class="btn btn-primary">Right</button>
                    </div>

                    <div class="btn-group">
                        <button type="button" class="btn btn-info">Left</button>
                        <button type="button" class="btn btn-info">Middle</button>
                        <button type="button" class="btn btn-info">Right</button>
                    </div>

                    <div class="btn-group">
                        <button type="button" class="btn btn-success">Left</button>
                        <button type="button" class="btn btn-success">Middle</button>
                        <button type="button" class="btn btn-success">Right</button>
                    </div>

                    <div class="btn-group">
                        <button type="button" class="btn btn-warning">Left</button>
                        <button type="button" class="btn btn-warning">Middle</button>
                        <button type="button" class="btn btn-warning">Right</button>
                    </div>


                </div>

                <br/>
                <br/>

                <p class="f-500 c-black m-b-5">Button Toolbars</p>
                <small>Combine sets of '.btn-group.' into a '.btn-toolbar' for more complex components.
                </small>

                <br/>
                <br/>

                <div class="btn-toolbar" role="toolbar">
                    <div class="btn-group">
                        <button type="button" class="btn btn-default">1</button>
                        <button type="button" class="btn btn-default">2</button>
                        <button type="button" class="btn btn-default">3</button>
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-default">4</button>
                        <button type="button" class="btn btn-default">5</button>
                        <button type="button" class="btn btn-default">6</button>
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-default">7</button>
                        <button type="button" class="btn btn-default">8</button>
                        <button type="button" class="btn btn-default">9</button>
                    </div>
                </div>

                <br/>

                <div class="btn-toolbar" role="toolbar">
                    <div class="btn-group">
                        <button type="button" class="btn btn-primary">1</button>
                        <button type="button" class="btn btn-primary">2</button>
                        <button type="button" class="btn btn-primary">3</button>
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-primary">4</button>
                        <button type="button" class="btn btn-primary">5</button>
                        <button type="button" class="btn btn-primary">6</button>
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-primary">7</button>
                        <button type="button" class="btn btn-primary">8</button>
                        <button type="button" class="btn btn-primary">9</button>
                    </div>
                </div>

                <br/>
                <br/>
                <br/>

                <p class="f-500 c-black m-b-5">Button Group Sizing</p>
                <small>Instead of applying button sizing classes to every button in a group, just add
                    '.btn-group-*' to each '.btn-group', including when nesting multiple groups.
                </small>

                <br/>
                <br/>

                <div class="btn-group-demo">
                    <div class="btn-group btn-group-lg" role="group">
                        <button type="button" class="btn btn-default">Left</button>
                        <button type="button" class="btn btn-default">Middle</button>
                        <button type="button" class="btn btn-default">Right</button>
                    </div>

                    <div class="btn-group btn-group-lg" role="group">
                        <button type="button" class="btn btn-primary">Left</button>
                        <button type="button" class="btn btn-primary">Middle</button>
                        <button type="button" class="btn btn-primary">Right</button>
                    </div>
                </div>

                <br/>

                <div class="btn-group-demo">
                    <div class="btn-group btn-group" role="group">
                        <button type="button" class="btn btn-default">Left</button>
                        <button type="button" class="btn btn-default">Middle</button>
                        <button type="button" class="btn btn-default">Right</button>
                    </div>

                    <div class="btn-group btn-group" role="group">
                        <button type="button" class="btn btn-primary">Left</button>
                        <button type="button" class="btn btn-primary">Middle</button>
                        <button type="button" class="btn btn-primary">Right</button>
                    </div>
                </div>

                <br/>

                <div class="btn-group-demo">
                    <div class="btn-group btn-group-sm" role="group">
                        <button type="button" class="btn btn-default">Left</button>
                        <button type="button" class="btn btn-default">Middle</button>
                        <button type="button" class="btn btn-default">Right</button>
                    </div>

                    <div class="btn-group btn-group-sm" role="group">
                        <button type="button" class="btn btn-primary">Left</button>
                        <button type="button" class="btn btn-primary">Middle</button>
                        <button type="button" class="btn btn-primary">Right</button>
                    </div>
                </div>

                <br/>

                <div class="btn-group-demo">
                    <div class="btn-group btn-group-xs" role="group">
                        <button type="button" class="btn btn-default">Left</button>
                        <button type="button" class="btn btn-default">Middle</button>
                        <button type="button" class="btn btn-default">Right</button>
                    </div>

                    <div class="btn-group btn-group-xs" role="group">
                        <button type="button" class="btn btn-primary">Left</button>
                        <button type="button" class="btn btn-primary">Middle</button>
                        <button type="button" class="btn btn-primary">Right</button>
                    </div>
                </div>

                <br/>
                <br/>
                <br/>

                <p class="f-500 c-black m-b-5">Justified Button Groups</p>
                <small>Make a group of buttons stretch at equal sizes to span the entire width of its
                    parent. Also works with button dropdowns within the button group.
                </small>

                <br/>
                <br/>

                <div class="btn-group btn-group-justified" role="group" aria-label="...">
                    <div class="btn-group" role="group">
                        <button type="button" class="btn btn-default">Left</button>
                    </div>
                    <div class="btn-group" role="group">
                        <button type="button" class="btn btn-default">Middle</button>
                    </div>
                    <div class="btn-group" role="group">
                        <button type="button" class="btn btn-default">Right</button>
                    </div>
                </div>

                <br/>

                <div class="btn-group btn-group-justified" role="group" aria-label="...">
                    <div class="btn-group" role="group">
                        <button type="button" class="btn btn-primary">Left</button>
                    </div>
                    <div class="btn-group" role="group">
                        <button type="button" class="btn btn-primary">Middle</button>
                    </div>
                    <div class="btn-group" role="group">
                        <button type="button" class="btn btn-primary">Right</button>
                    </div>
                </div>

                <br/>
                <br/>
                <br/>

                <p class="f-500 c-black m-b-5">Nesting</p>
                <small>Place a '.btn-group' within another '.btn-group' when you want dropdown menus mixed
                    with a series of buttons.
                </small>

                <br/>
                <br/>

                <div class="btn-group-demo">
                    <div class="btn-group">
                        <button type="button" class="btn btn-default">1</button>
                        <button type="button" class="btn btn-default">2</button>

                        <div class="btn-group">
                            <button type="button" class="btn btn-default dropdown-toggle"
                                    data-toggle="dropdown">
                                Dropdown
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Dropdown link</a></li>
                                <li><a href="#">Dropdown link</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="btn-group">
                        <button type="button" class="btn btn-primary">1</button>
                        <button type="button" class="btn btn-primary">2</button>

                        <div class="btn-group">
                            <button type="button" class="btn btn-primary dropdown-toggle"
                                    data-toggle="dropdown">
                                Dropdown
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Dropdown link</a></li>
                                <li><a href="#">Dropdown link</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include('../footer.php');?>
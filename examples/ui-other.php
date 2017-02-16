<?php include('../header.php');?>

    <div class="container">
        <div class="block-header">
            <h2>Other Components</h2>

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
                <h2>Breadcrumbs
                    <small>Indicate the current page's location within a navigational hierarchy.</small>
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
                <p>
                    Separators are automatically added in CSS through <code>:before</code> and
                    <code>content</code>.
                </p>

                <br><br>

                <ol class="breadcrumb">
                    <li class="active">Home</li>
                </ol>

                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active">Library</li>
                </ol>

                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Library</a></li>
                    <li class="active">Data</li>
                </ol>

                <br/>

                <a target="_blank" href="breadcrumb-demo.html" class="btn btn-primary">Breadcrumb Demo</a>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h2>Pagination
                    <small>Provide pagination links for your site or app with the multi-page pagination
                        component, or the simpler pager alternative.
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
                <p class="f-500 m-b-5 c-black">Default pagination</p>
                <small>Simple pagination inspired by Rdio, great for apps and search results. The large
                    block is hard to miss, easily scalable, and provides large click areas.
                </small>

                <br/>
                <br/>

                <ul class="pagination">
                    <li>
                        <a href="" aria-label="Previous">
                            <i class="zmdi zmdi-chevron-left"></i>
                        </a>
                    </li>
                    <li><a href="">1</a></li>
                    <li><a href="">2</a></li>
                    <li><a href="">3</a></li>
                    <li><a href="">4</a></li>
                    <li><a href="">5</a></li>
                    <li>
                        <a href="" aria-label="Next">
                            <i class="zmdi zmdi-chevron-right"></i>
                        </a>
                    </li>
                </ul>

                <br/>
                <br/>

                <p class="f-500 c-black m-b-5">Disabled and active states</p>
                <small>Links are customizable for different circumstances. Use <code>.disabled</code> for
                    unclickable links and <code>.active</code> to indicate the current page.
                </small>

                <br/>
                <br/>

                <ul class="pagination">
                    <li class="disabled"><a href="" aria-label="Previous"><i
                                class="zmdi zmdi-chevron-left"></i></a></li>
                    <li class="active"><a href="">1 <span class="sr-only">(current)</span></a></li>
                    <li><a href="">2</a></li>
                    <li><a href="">3</a></li>
                    <li><a href="">4</a></li>
                    <li><a href="">5</a></li>
                    <li><a href="" aria-label="Next"><i class="zmdi zmdi-chevron-right"></i></a></li>
                </ul>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h2>Jumbotron
                    <small>A lightweight, flexible component that can optionally extend the entire viewport
                        to showcase key content on your site.
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
                <div class="jumbotron">
                    <h1>Hello, world!</h1>
                    <p>This is a simple hero unit, a simple jumbotron-style component for calling extra
                        attention to featured content or information.</p>
                    <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
                </div>

                <p>To make the jumbotron full width, and without rounded corners, place it outside all
                    <code>.container</code>s and instead add a <code>.container</code> within.</p>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h2>Media object
                    <small>Abstract object styles for building various types of components (like blog
                        comments, Tweets, etc) that feature a left- or right-aligned image alongside textual
                        content.
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
                <div class="alert alert-info alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    Bootstrap 3.3's Media objects codes are overrided due to some issues like text-overflow
                    thus media alignment feature will not work in this template.
                </div>

                <br/>

                <div class="media-demo">
                    <div class="media">
                        <div class="pull-left">
                            <a href="#">
                                <img class="media-object" src="img/profile-pics/1.jpg" alt="">
                            </a>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Media heading</h4>
                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                            sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus
                            viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec
                            lacinia congue felis in faucibus.
                        </div>
                    </div>
                    <div class="media">
                        <div class="pull-left">
                            <a href="#">
                                <img class="media-object" src="img/profile-pics/2.jpg" alt="">
                            </a>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Media heading</h4>
                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                            sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus
                            viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec
                            lacinia congue felis in faucibus.
                            <div class="media">
                                <div class="pull-left">
                                    <a href="#">
                                        <img class="media-object" src="img/profile-pics/3.jpg" alt="">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Nested media heading</h4>
                                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque
                                    ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at,
                                    tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate
                                    fringilla. Donec lacinia congue felis in faucibus.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="media">
                        <div class="pull-right">
                            <a href="#">
                                <img class="media-object" src="img/profile-pics/6.jpg" alt="">
                            </a>
                        </div>

                        <div class="media-body">
                            <h4 class="media-heading">Media heading</h4>
                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                            sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus
                            viverra turpis.
                        </div>
                    </div>
                    <div class="media">
                        <div class="pull-left">
                            <a href="#">
                                <img class="media-object" src="img/profile-pics/4.jpg" alt="">
                            </a>
                        </div>
                        <div class="pull-right">
                            <a href="#">
                                <img class="media-object" src="img/profile-pics/5.jpg" alt="">
                            </a>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Media heading</h4>
                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                            sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus
                            viverra turpis.
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include('../footer.php');?>
<?php $title = 'new'; ?>

<?php ob_start(); ?>

<?php $headernav = 'activate'; ?>


<p>p</p>
<hr>
<hr>
<hr>


<!-- Settings Modal -->
<div class="modal fade" id="centralModalSm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="m-auto p-2">
                <div class="d-flex">
                    <a href="index.php?action=editDef"> <p class="noob-color-font px-5">EDIT</p></a>
                    <a href="#" data-toggle="modal" data-target="#deletModal"> <p class="noob-color-font px-5">DELETE</p></a>
                </div>

            </div>

            <div class="modal-footer"></div>
        </div>
    </div>
</div>

<!-- Delet alert Modal -->
<div class="modal fade" id="deletModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="m-auto p-2">
                <p class="sub-header">Deleted definitions are gone forever. <br>Are you sure?</p>

                <div class="d-flex justify-content-around">
                    <a href="#"> <p class="noob-color-font">CANCEL</p></a>
                    <a href="#"> <p class="noob-color-font">DELETE</p></a>
                </div>

            </div>

            <div class="modal-footer">&zwnj;</div>
        </div>
    </div>
</div>


<div class="inner-mobile-container m-auto">
    <h5 class="sub-header">Your definitions</h5>
</div>

<div class="list-group">
    <div class="list-group-item list-group-item-action flex-column align-items-start">
        <div class="d-flex w-100 flex-column">

            <div class="d-flex justify-content-between">
                <h5 class="mb-1 title-def">RESTful API</h5>
                <i class="zmdi zmdi-more-vert zmdi-hc-2x" data-toggle="modal" data-target="#centralModalSm"></i>
            </div>

            <small>By <a href="#"></a> <span class="noob-color-font">Jonh Doe</span></small>

        </div>

        <a href="#">
            <p class="mb-1 mt-2 noob-grey">A RESTful API is an application program interface (API) that uses HTTP requests to GET, PUT, POST and DELETE data …</p>
        </a>

        <div class="d-flex justify-content-between">
            <div class="d-flex align-items-center">
                <small class="noob-light-green rank">1k</small>
                <span><i class="zmdi zmdi-caret-up zmdi-hc-2x ml-1 noob-light-green"></i></span>
                <small class="ml-3 noob-light-red rank">1k</small>
                <span><i class="zmdi zmdi-caret-down zmdi-hc-2x ml-1 noob-light-red"></i></span>
            </div>
            <a href="index.php?action=definition"> <i class="zmdi zmdi-arrow-right zmdi-hc-2x"></i></a>
        </div>
    </div>

    <div class="list-group-item list-group-item-action flex-column align-items-start">
        <div class="d-flex w-100 flex-column">

            <div class="d-flex justify-content-between">
                <h5 class="mb-1 title-def">RESTful API</h5>
                <i class="zmdi zmdi-more-vert zmdi-hc-2x" data-toggle="modal" data-target="#centralModalSm"></i>
            </div>

            <small>By <a href="#"></a> <span class="noob-color-font">Jonh Doe</span></small>

        </div>

        <a href="#">
            <p class="mb-1 mt-2 noob-grey">A RESTful API is an application program interface (API) that uses HTTP requests to GET, PUT, POST and DELETE data …</p>
        </a>

        <div class="d-flex justify-content-between">
            <div class="d-flex align-items-center">
                <small class="noob-light-green rank">1k</small>
                <span><i class="zmdi zmdi-caret-up zmdi-hc-2x ml-1 noob-light-green"></i></span>
                <small class="ml-3 noob-light-red rank">1k</small>
                <span><i class="zmdi zmdi-caret-down zmdi-hc-2x ml-1 noob-light-red"></i></span>
            </div>
            <a href="index.php?action=definition"> <i class="zmdi zmdi-arrow-right zmdi-hc-2x"></i></a>
        </div>
    </div>
    <div class="list-group-item list-group-item-action flex-column align-items-start">
        <div class="d-flex w-100 flex-column">

            <div class="d-flex justify-content-between">
                <h5 class="mb-1 title-def">RESTful API</h5>
                <i class="zmdi zmdi-more-vert zmdi-hc-2x" data-toggle="modal" data-target="#centralModalSm"></i>
            </div>

            <small>By <a href="#"></a> <span class="noob-color-font">Jonh Doe</span></small>

        </div>

        <a href="#">
            <p class="mb-1 mt-2 noob-grey">A RESTful API is an application program interface (API) that uses HTTP requests to GET, PUT, POST and DELETE data …</p>
        </a>

        <div class="d-flex justify-content-between">
            <div class="d-flex align-items-center">
                <small class="noob-light-green rank">1k</small>
                <span><i class="zmdi zmdi-caret-up zmdi-hc-2x ml-1 noob-light-green"></i></span>
                <small class="ml-3 noob-light-red rank">1k</small>
                <span><i class="zmdi zmdi-caret-down zmdi-hc-2x ml-1 noob-light-red"></i></span>
            </div>
            <a href="index.php?action=definition"> <i class="zmdi zmdi-arrow-right zmdi-hc-2x"></i></a>
        </div>
    </div>
    <div class="list-group-item list-group-item-action flex-column align-items-start">
        <div class="d-flex w-100 flex-column">

            <div class="d-flex justify-content-between">
                <h5 class="mb-1 title-def">RESTful API</h5>
                <i class="zmdi zmdi-more-vert zmdi-hc-2x" data-toggle="modal" data-target="#centralModalSm"></i>
            </div>

            <small>By <a href="#"></a> <span class="noob-color-font">Jonh Doe</span></small>

        </div>

        <a href="#">
            <p class="mb-1 mt-2 noob-grey">A RESTful API is an application program interface (API) that uses HTTP requests to GET, PUT, POST and DELETE data …</p>
        </a>

        <div class="d-flex justify-content-between">
            <div class="d-flex align-items-center">
                <small class="noob-light-green rank">1k</small>
                <span><i class="zmdi zmdi-caret-up zmdi-hc-2x ml-1 noob-light-green"></i></span>
                <small class="ml-3 noob-light-red rank">1k</small>
                <span><i class="zmdi zmdi-caret-down zmdi-hc-2x ml-1 noob-light-red"></i></span>
            </div>
            <a href="index.php?action=definition"> <i class="zmdi zmdi-arrow-right zmdi-hc-2x"></i></a>
        </div>
    </div>
    <div class="list-group-item list-group-item-action flex-column align-items-start">
        <div class="d-flex w-100 flex-column">

            <div class="d-flex justify-content-between">
                <h5 class="mb-1 title-def">RESTful API</h5>
                <i class="zmdi zmdi-more-vert zmdi-hc-2x" data-toggle="modal" data-target="#centralModalSm"></i>
            </div>

            <small>By <a href="#"></a> <span class="noob-color-font">Jonh Doe</span></small>

        </div>

        <a href="#">
            <p class="mb-1 mt-2 noob-grey">A RESTful API is an application program interface (API) that uses HTTP requests to GET, PUT, POST and DELETE data …</p>
        </a>

        <div class="d-flex justify-content-between">
            <div class="d-flex align-items-center">
                <small class="noob-light-green rank">1k</small>
                <span><i class="zmdi zmdi-caret-up zmdi-hc-2x ml-1 noob-light-green"></i></span>
                <small class="ml-3 noob-light-red rank">1k</small>
                <span><i class="zmdi zmdi-caret-down zmdi-hc-2x ml-1 noob-light-red"></i></span>
            </div>
            <a href="index.php?action=definition"> <i class="zmdi zmdi-arrow-right zmdi-hc-2x"></i></a>
        </div>
    </div>
    <div class="list-group-item list-group-item-action flex-column align-items-start">
        <div class="d-flex w-100 flex-column">

            <div class="d-flex justify-content-between">
                <h5 class="mb-1 title-def">RESTful API</h5>
                <i class="zmdi zmdi-more-vert zmdi-hc-2x" data-toggle="modal" data-target="#centralModalSm"></i>
            </div>

            <small>By <a href="#"></a> <span class="noob-color-font">Jonh Doe</span></small>

        </div>

        <a href="#">
            <p class="mb-1 mt-2 noob-grey">A RESTful API is an application program interface (API) that uses HTTP requests to GET, PUT, POST and DELETE data …</p>
        </a>

        <div class="d-flex justify-content-between">
            <div class="d-flex align-items-center">
                <small class="noob-light-green rank">1k</small>
                <span><i class="zmdi zmdi-caret-up zmdi-hc-2x ml-1 noob-light-green"></i></span>
                <small class="ml-3 noob-light-red rank">1k</small>
                <span><i class="zmdi zmdi-caret-down zmdi-hc-2x ml-1 noob-light-red"></i></span>
            </div>
            <a href="index.php?action=definition"> <i class="zmdi zmdi-arrow-right zmdi-hc-2x"></i></a>
        </div>
    </div>
    <div class="list-group-item list-group-item-action flex-column align-items-start">
        <div class="d-flex w-100 flex-column">

            <div class="d-flex justify-content-between">
                <h5 class="mb-1 title-def">RESTful API</h5>
                <i class="zmdi zmdi-more-vert zmdi-hc-2x" data-toggle="modal" data-target="#centralModalSm"></i>
            </div>

            <small>By <a href="#"></a> <span class="noob-color-font">Jonh Doe</span></small>

        </div>

        <a href="#">
            <p class="mb-1 mt-2 noob-grey">A RESTful API is an application program interface (API) that uses HTTP requests to GET, PUT, POST and DELETE data …</p>
        </a>

        <div class="d-flex justify-content-between">
            <div class="d-flex align-items-center">
                <small class="noob-light-green rank">1k</small>
                <span><i class="zmdi zmdi-caret-up zmdi-hc-2x ml-1 noob-light-green"></i></span>
                <small class="ml-3 noob-light-red rank">1k</small>
                <span><i class="zmdi zmdi-caret-down zmdi-hc-2x ml-1 noob-light-red"></i></span>
            </div>
            <a href="index.php?action=definition"> <i class="zmdi zmdi-arrow-right zmdi-hc-2x"></i></a>
        </div>
    </div>
    <div class="list-group-item list-group-item-action flex-column align-items-start">
        <div class="d-flex w-100 flex-column">

            <div class="d-flex justify-content-between">
                <h5 class="mb-1 title-def">RESTful API</h5>
                <i class="zmdi zmdi-more-vert zmdi-hc-2x" data-toggle="modal" data-target="#centralModalSm"></i>
            </div>

            <small>By <a href="#"></a> <span class="noob-color-font">Jonh Doe</span></small>

        </div>

        <a href="#">
            <p class="mb-1 mt-2 noob-grey">A RESTful API is an application program interface (API) that uses HTTP requests to GET, PUT, POST and DELETE data …</p>
        </a>

        <div class="d-flex justify-content-between">
            <div class="d-flex align-items-center">
                <small class="noob-light-green rank">1k</small>
                <span><i class="zmdi zmdi-caret-up zmdi-hc-2x ml-1 noob-light-green"></i></span>
                <small class="ml-3 noob-light-red rank">1k</small>
                <span><i class="zmdi zmdi-caret-down zmdi-hc-2x ml-1 noob-light-red"></i></span>
            </div>
            <a href="index.php?action=definition"> <i class="zmdi zmdi-arrow-right zmdi-hc-2x"></i></a>
        </div>
    </div>
    <div class="list-group-item list-group-item-action flex-column align-items-start">
        <div class="d-flex w-100 flex-column">

            <div class="d-flex justify-content-between">
                <h5 class="mb-1 title-def">RESTful API</h5>
                <i class="zmdi zmdi-more-vert zmdi-hc-2x" data-toggle="modal" data-target="#centralModalSm"></i>
            </div>

            <small>By <a href="#"></a> <span class="noob-color-font">Jonh Doe</span></small>

        </div>

        <a href="#">
            <p class="mb-1 mt-2 noob-grey">A RESTful API is an application program interface (API) that uses HTTP requests to GET, PUT, POST and DELETE data …</p>
        </a>

        <div class="d-flex justify-content-between">
            <div class="d-flex align-items-center">
                <small class="noob-light-green rank">1k</small>
                <span><i class="zmdi zmdi-caret-up zmdi-hc-2x ml-1 noob-light-green"></i></span>
                <small class="ml-3 noob-light-red rank">1k</small>
                <span><i class="zmdi zmdi-caret-down zmdi-hc-2x ml-1 noob-light-red"></i></span>
            </div>
            <a href="index.php?action=definition"> <i class="zmdi zmdi-arrow-right zmdi-hc-2x"></i></a>
        </div>
    </div>
</div>

<hr>
<hr>
<hr>

<?php $footernav = 'activate'; ?>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>

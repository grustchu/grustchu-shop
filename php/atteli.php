<?php
include 'includes/header.php';
?>

    <content class="container-fluid mh-100">
        <h1>Mani attēli</h1>
        <h2>PIKC "Daugavpils tehnologiju un tūrisma tehnikums" foto sīktēli</h2>

        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Info!</strong> Ieklikšķiniet uz sīktēla, lai apskatītu liela izmēra foto!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>


        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4">
                <a href="#" data-bs-toggle="modal" data-bs-target="#attelsModal1">
                    <img src="../images/dttt1.jpg" class="img-thumbnail" alt="Attēls 1" >
                </a>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <a href="#" data-bs-toggle="modal" data-bs-target="#attelsModal2">
                    <img src="../images/dttt2.jpg" class="img-thumbnail" alt="Attēls 2">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <a href="#" data-bs-toggle="modal" data-bs-target="#attelsModal3">
                    <img src="../images/dttt3.jpg" class="img-thumbnail" alt="Attēls 3">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <a href="#" data-bs-toggle="modal" data-bs-target="#attelsModal4">
                    <img src="../images/dttt4.jpg" class="img-thumbnail" alt="Attēls 4">
                </a>
            </div>
        </div>


        <div class="modal fade" id="attelsModal1" tabindex="-1" aria-labelledby="attelsModalLabel1" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="attelsModalLabel1">Strādnieku 16</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <img src="../images/dttt1.jpg" class="img-fluid" >
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="attelsModal2" tabindex="-1" aria-labelledby="attelsModalLabel2" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="attelsModalLabel2">Strādnieku pagalms</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <img src="../images/dttt2.jpg" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="attelsModal3" tabindex="-1" aria-labelledby="attelsModalLabel3" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="attelsModalLabel3">Mendeļejeva 1</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <img src="../images/dttt3.jpg" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="attelsModal4" tabindex="-1" aria-labelledby="attelsModalLabel4" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="attelsModalLabel4">Miera 57</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <img src="../images/dttt4.jpg" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>


        <div id="imageCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" >
                    <a data-bs-toggle="modal" data-bs-target="#attelsModal1">
                        <img src="../images/dttt1.jpg" class="img-thumbnail" alt="Attēls 1">
                    </a>
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Strādnieku 16</h5>
                    </div>
                </div>
                <div class="carousel-item">
                    <a data-bs-toggle="modal" data-bs-target="#attelsModal2">
                        <img src="../images/dttt2.jpg" class="img-thumbnail" alt="Attēls 2">
                    </a>
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Strādnieku pagalms</h5>
                    </div>
                </div>
                <div class="carousel-item">
                    <a data-bs-toggle="modal" data-bs-target="#attelsModal3">
                        <img src="../images/dttt3.jpg" class="img-thumbnail" alt="Attēls 3">
                    </a>
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Mendeļejeva 1</h5>
                    </div>
                </div>
                <div class="carousel-item">
                    <a data-bs-toggle="modal" data-bs-target="#attelsModal4">
                        <img src="../images/dttt4.jpg" class="img-thumbnail" alt="Attēls 4">
                    </a>
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Miera 57</h5>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#imageCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Iepriekšējais</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#imageCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Nākamais</span>
            </button>
        </div>
        <button type="button" onclick="topFunction()" id="myBtn" title="Go to top">Go to top</button>

    </content>

    <?php
include 'includes/footer.php';
?>
</body>

</html>